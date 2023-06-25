from django.shortcuts import render, redirect
from .models import Post
from django.views.generic.list import ListView
from django.shortcuts import render
import requests
from pymongo import MongoClient
from django.contrib.auth.decorators import login_required
from .forms import NewUserForm
from django.contrib.auth import login
from django.contrib import messages

# Connect to MongoDB
client = MongoClient('mongodb://localhost:27017')
db = client['chatgpt_sentiment']  # Replace 'your_database_name' with the name of your MongoDB database
collection = db['reddit_posts']  # Name of the collection to store the scraped data
CLIENT_ID = '-R0ZxQ_ODZQhIXv0dWtWZw'
SECRET_KEY = 'NZFugdkW8vcg0dBMIadBMruyejgKkA'

@login_required
def reddit_scrape(request):
    auth = requests.auth.HTTPBasicAuth(CLIENT_ID, SECRET_KEY)
    data = {
        'grant_type' : 'password',
        'username' : 'gadgeteen',
        'password' : 'gadgetech'
    }
    headers = {'User-Agent' : 'MyAPI/0.0.1'}
    res = requests.post('https://www.reddit.com/api/v1/access_token', auth=auth, data=data, headers=headers)
    TOKEN = res.json()['access_token']
    headers['Authorization'] = f'bearer {TOKEN}'
    params = {
        'q': 'ChatGPT',
        'limit': 25,
        'sort': 'new'
    }
    res = requests.get("https://oauth.reddit.com/r/ChatGPT/search",
                   headers=headers, params=params)
    
    data = []

    if res.status_code == 200:
        for post in res.json()['data']['children']:
            post_data = {
                    'subreddit': post['data']['subreddit'],
                    'title': post['data']['title'],
                    'selftext': post['data']['selftext'],
                    'upvote_ratio': post['data']['upvote_ratio'],
                    'ups': post['data']['ups'],
                    'downs': post['data']['downs'],
                    'score': post['data']['score']
            }
            data.append(post_data)
        # Store the scraped data into MongoDB
        collection.insert_many(data)

        context = {
            'posts': data,
        }
        return render(request, 'post/reddit_scrape.html', context)
    else:
        error_message = f"Error: {res.status_code}"
        return render(request, 'error.html', {'error_message': error_message})
    

@login_required
def index(request):
    template = "post/list.html"
    context = {}

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