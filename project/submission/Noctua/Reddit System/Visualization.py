#!/usr/bin/env python
# coding: utf-8

# In[11]:


'!pip install pandas'
'!pip install matplotlib'
'!pip install pymongo'
'!pip install wordcloud'
'!pip install seaborn'
'pip install plotly ipywidgets'



# In[ ]:
import pandas as pd
import pymongo
import plotly.graph_objects as go
import json
from wordcloud import WordCloud
import plotly.express as px
import base64
from io import BytesIO
from plotly.utils import PlotlyJSONEncoder

# Connect to MongoDB and retrieve data
client = pymongo.MongoClient("mongodb+srv://afifhazmiearsyad:abc123456789@noctua.bw9bvzx.mongodb.net/")
db = client["AnwarIbrahim"]
collection = db["Noctua"]
data = list(collection.find())

# Perform data processing
df = pd.DataFrame(data)

# Convert the "sentiment" column to string
df["sentiment"] = df["sentiment"].astype(str)

# Convert the "text" column to string
df["text"] = df["text"].astype(str)

# Generate word clouds for each sentiment
sentiments = df["sentiment"].unique()
charts = []

# Generate word clouds for each sentiment
wordclouds = []
for i, sentiment in enumerate(sentiments):
    text = " ".join(df.loc[df["sentiment"] == sentiment, "text"])
    wordcloud = WordCloud(width=800, height=400).generate(text)
    
    # Convert the WordCloud object to an image and encode it as base64
    image_stream = BytesIO()
    wordcloud.to_image().save(image_stream, format='PNG')
    image_base64 = base64.b64encode(image_stream.getvalue()).decode('utf-8')
    
    # Add the sentiment, image data, and file name to the list
    file_name = f'wordcloud_{sentiment.lower()}.png'  # Generate the file name based on sentiment
    wordclouds.append({"sentiment": sentiment, "image": image_base64, "file_name": file_name})

# Save word clouds individually and add chart data
charts = []
for wordcloud in wordclouds:
    image_data = base64.b64decode(wordcloud["image"])
    with open(wordcloud["file_name"], 'wb') as file:
        file.write(image_data)
    
    # Add the word cloud chart to the list
    title = f"Word Cloud for {wordcloud['sentiment'].capitalize()} Sentiment"
    chart = go.Image(source=wordcloud["file_name"], name=title)
    charts.append(chart)

# Convert the "timestamp" column to datetime if it's not already in the correct format
df["timestamp"] = pd.to_datetime(df["timestamp"])

# Filter data for the desired date range
start_date = pd.to_datetime("2022-07-01")
end_date = pd.to_datetime("2023-06-01")
filtered_df = df[(df["timestamp"] >= start_date) & (df["timestamp"] < end_date)]

# Group the data by date and sentiment and count the number of occurrences
sentiment_counts = filtered_df.groupby([filtered_df["timestamp"].dt.date, "sentiment"]).size().unstack(fill_value=0)

# Plot sentiment analysis over time
fig = go.Figure()

# Define colors for each sentiment
colors = {'negative': 'red', 'neutral': 'blue', 'positive': 'green'}

for sentiment in sentiment_counts.columns:
    fig.add_trace(go.Scatter(x=sentiment_counts.index, y=sentiment_counts[sentiment], name=sentiment, line=dict(color=colors.get(sentiment, 'black'))))

fig.update_layout(xaxis_title="Date", yaxis_title="Sentiment Count", title="Sentiment Analysis Over Time")

charts.append(fig)

# Group the data by date and sentiment and count the number of occurrences
sentiment_counts = filtered_df.groupby([filtered_df["timestamp"].dt.date, "sentiment"]).size().unstack(fill_value=0)

# Create a stacked bar chart for sentiment distribution over time
fig = go.Figure()

# Define colors for each sentiment
colors = {'negative': 'red', 'neutral': 'blue', 'positive': 'green'}

for sentiment in sentiment_counts.columns:
    fig.add_trace(go.Bar(
        x=sentiment_counts.index,
        y=sentiment_counts[sentiment],
        name=sentiment,
        marker=dict(color=colors.get(sentiment, 'black'))
    ))

fig.update_layout(
    xaxis_title="Date",
    yaxis_title="Sentiment Count",
    barmode="stack",
    title="Sentiment Distribution Over Time"
)

charts.append(fig)






# Count the occurrences of each sentiment category
sentiment_counts = df["sentiment"].value_counts()

# Plot the pie chart
fig = go.Figure(data=[go.Pie(labels=sentiment_counts.index, values=sentiment_counts.values)])
fig.update_layout(title="Sentiment Distribution")
charts.append(fig)

# Create a dictionary to store word frequencies for each sentiment category
word_freq = {}

# Iterate over each sentiment category
for sentiment in sentiments:
    # Get the preprocessed text for the current sentiment
    text = " ".join(df.loc[df["sentiment"] == sentiment, "text"])
    
    # Generate word frequencies for the sentiment
    words = text.split()
    word_freq[sentiment] = pd.Series(words).value_counts()


# Save the chart data to a JSON file
chart_data = []
for chart in charts:
    if isinstance(chart, go.Figure):
        chart_data.append(chart.to_dict())
    elif isinstance(chart, dict):
        chart_data.append(chart)

chart_data.append({"wordClouds": wordclouds})

with open('Visualization.json', 'w') as file:
    file.write(json.dumps(chart_data, cls=PlotlyJSONEncoder))
# %%
