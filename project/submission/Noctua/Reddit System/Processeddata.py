#!/usr/bin/env python
# coding: utf-8

# In[11]:


'!pip install pandas'
'!pip install matplotlib'
'!pip install pymongo'
'!pip install wordcloud'
'!pip install seaborn'


# In[12]:

import pandas as pd
import pymongo
import json
from datetime import datetime

from bson import json_util


# Custom JSON encoder class to handle datetime objects
class DateTimeEncoder(json.JSONEncoder):
    def default(self, o):
        if isinstance(o, datetime):
            return o.isoformat()
        return super().default(o)

# Connect to MongoDB and retrieve data
client = pymongo.MongoClient("mongodb+srv://user1:60XRzCr4mubxCPC5@cluster0.evngzba.mongodb.net/test")
db = client["AnwarIbrahim"]
collection = db["Noctua"]
data = list(collection.find())

# Transform data to a pandas DataFrame
df = pd.DataFrame(data)

# Convert datetime object to string representation
df['timestamp'] = df['timestamp'].dt.strftime('%Y-%m-%d %H:%M:%S')

# Convert DataFrame to JSON
json_data = df.to_json(orient='records', default_handler=json_util.default)

# Save JSON data to a file
with open('ProcessedData.json', 'w') as file:
    file.write(json_data)









# In[ ]:




