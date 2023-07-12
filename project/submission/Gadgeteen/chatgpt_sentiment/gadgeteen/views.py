from django.shortcuts import render, redirect
from .models import Post
from django.views.generic.list import ListView
from django.shortcuts import render
from pymongo import MongoClient
from django.contrib.auth.decorators import login_required
from .forms import NewUserForm
from django.contrib.auth import login
from django.contrib import messages
from django.http import HttpResponseRedirect
from wordcloud import WordCloud
import matplotlib.pyplot as plt
import seaborn as sns
import pandas as pd

# Connect to MongoDB
client = MongoClient('mongodb://localhost:27017')
db = client['chatgpt_sentiment']  # Replace 'your_database_name' with the name of your MongoDB database
collection = db['reddit_posts']  # Name of the collection to store the scraped data
CLIENT_ID = '-R0ZxQ_ODZQhIXv0dWtWZw'
SECRET_KEY = 'NZFugdkW8vcg0dBMIadBMruyejgKkA'


@login_required
def index(request):
    template = "post/list.html"
    context = {}

    user = request.user
    if user.is_staff:
        return HttpResponseRedirect("/dashboard/")
    else:
        return render(request, template, context)
    
@login_required
def dashboard(request):
    template = "post/dashboard.html"
    context = {}

    # Query the collection and retrieve the JSON data
    data = list(collection.find())

    context['data'] = data

    return render(request, template, context)


def register(request):
	if request.method == "POST":
		form = NewUserForm(request.POST)
		if form.is_valid():
			user = form.save()
			#login(request, user)
			messages.success(request, "Registration successful." )
			return redirect('login')
		messages.error(request, "Unsuccessful registration. Invalid information.")
	form = NewUserForm()
	return render (request=request, template_name="registration/register.html", context={"register_form":form})



def positive_word_cloud(request):
    # Create a MongoClient instance
    client = MongoClient('mongodb://localhost:27017')

    # Access the MongoDB database
    db = client['chatgpt_sentiment']

    # Access the collection named "reddit_posts"
    collection = db['reddit_posts']

    # Query the collection and retrieve the JSON data
    data = list(collection.find())

    # Extract the text for word cloud generation
    word_cloud_text = ''.join(
        [post['joined_text'] for post in data if post.get('sentiment_class') == 'positive']
    ).replace('chatgpt', '')

    # Generate the word cloud
    wordcloud = WordCloud(
        max_font_size=100,
        max_words=100,
        background_color="black",
        scale=10,
        width=800,
        height=800
    ).generate(word_cloud_text)

    # Save the word cloud image to a file
    wordcloud_path = 'gadgeteen/static/images/positive_word_cloud.png'
    wordcloud.to_file(wordcloud_path)

    # Generate the bar plot of top-10 frequent words
    x = []
    y = []
    for key, value in wordcloud.words_.items():
        x.append(key)
        y.append(value)
        if len(x) == 10:
            break

    plt.figure(figsize=(8, 6))
    sns.barplot(x=x, y=y, color='blue')
    plt.title("Normalized Count of Top-10 Frequent Words with Positive Sentiments")
    plt.xlabel("Words")
    plt.ylabel("Normalized Count")

    # Save the bar plot image to a file
    barplot_path = 'gadgeteen/static/images/positive_bar_plot.png'
    plt.savefig(barplot_path)

    # Pass the image paths to the template
    context = {'wordcloud_path': wordcloud_path, 'barplot_path': barplot_path}

    # Render the template with the data
    return render(request, 'post/list.html', context)


def negative_word_cloud(request):
    # Create a MongoClient instance
    client = MongoClient('mongodb://localhost:27017')

    # Access the MongoDB database
    db = client['chatgpt_sentiment']

    # Access the collection named "reddit_posts"
    collection = db['reddit_posts']

    # Query the collection and retrieve the JSON data
    data = list(collection.find())

    # Extract the text for word cloud generation
    word_cloud_text = ''.join(
        [post['joined_text'] for post in data if post.get('sentiment_class') == 'negative']
    ).replace('chatgpt', '')

    # Generate the word cloud
    wordcloud = WordCloud(
        max_font_size=100,
        max_words=100,
        background_color="black",
        scale=10,
        width=800,
        height=800
    ).generate(word_cloud_text)

    # Save the word cloud image to a file
    wordcloud_path = 'gadgeteen/static/images/negative_word_cloud.png'
    wordcloud.to_file(wordcloud_path)

    # Generate the bar plot of top-10 frequent words
    x = []
    y = []
    for key, value in wordcloud.words_.items():
        x.append(key)
        y.append(value)
        if len(x) == 10:
            break

    plt.figure(figsize=(8, 6))
    sns.barplot(x=x, y=y, color='red')
    plt.title("Normalized Count of Top-10 Frequent Words with Negative Sentiments")
    plt.xlabel("Words")
    plt.ylabel("Normalized Count")

    # Save the bar plot image to a file
    barplot_path = 'gadgeteen/static/images/negative_bar_plot.png'
    plt.savefig(barplot_path)

    # Pass the image paths to the template
    context = {'wordcloud_path': wordcloud_path, 'barplot_path': barplot_path}

    # Render the template with the data
    return render(request, 'post/list.html', context)

def sentiment_pie_chart(request):

     # Create a MongoClient instance
    client = MongoClient('mongodb://localhost:27017')

    # Access the MongoDB database
    db = client['chatgpt_sentiment']

    # Access the collection named "reddit_posts"
    collection = db['reddit_posts']

    # Query the collection and retrieve the JSON data
    df = pd.DataFrame(list(collection.find()))
    # Define the colors for each sentiment class
    colors = {'positive': 'green', 'negative': 'red', 'neutral': 'cyan'}

    # Generate the pie chart with custom colors
    plt.pie(
        df['sentiment_class'].value_counts(),
        labels=df['sentiment_class'].value_counts().index,
        autopct='%.f%%',
        colors=[colors[sentiment] for sentiment in df['sentiment_class'].value_counts().index]
    )

    plt.title("Proportion of target class")
    plt.axis('equal')  # Ensure pie chart is circular

    # Save the chart to a file
    piechart_path = 'gadgeteen/static/images/pie_chart.png'
    plt.savefig(piechart_path)

    # Clear the current figure to avoid conflicts with other plots
    plt.clf()

    # Pass the image paths to the template
    context = {'piechart_path': piechart_path}

    # Render the template with the data
    return render(request, 'post/list.html', context)

def sentiment_length_plot(request):
    # Query the collection and retrieve the JSON data
    data = list(collection.find())

    # Create a DataFrame from the JSON data
    df = pd.DataFrame(data)

    # Calculate the length of the 'selftext' column
    df['text_lens'] = df['selftext'].apply(lambda x: len(x))

    # Create a figure and axis
    fig, ax = plt.subplots(1, 1, figsize=(7, 4))

    # Generate the KDE plot using seaborn
    sns.kdeplot(data=df, x='text_lens', hue='sentiment_class', ax=ax)

    # Set the title of the plot
    ax.set_title("Length of Posts in Dataset")

    # Save the plot to a file
    plot_path = 'gadgeteen/static/images/sentiment_length_plot.png'
    plt.savefig(plot_path)

    # Pass the plot path to the template
    context = {'plot_path': plot_path}

    # Render the template with the data
    return render(request, 'post/list.html', context)

