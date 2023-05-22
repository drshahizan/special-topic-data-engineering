import flickrapi
import urllib.request
import csv

# Set up the Flickr API key and secret
api_key = 'b2dfe747f8cb521f9b9fbe014393437d'
api_secret = 'b9ce3feacbbbf868'

# Set up the Flickr API client
flickr = flickrapi.FlickrAPI(api_key, api_secret, format='parsed-json')

# Set up the search parameters
search_params = {
    'text': 'Malaysia',   # Search for photos of Malaysia
    'media': 'photos',  # Only search for photos
    'per_page': 100,   # Limit the search to 100 photos
    'sort': 'relevance',  # Sort the results by relevance
    'extras': 'url_o,description,tags,date_taken,owner_name,views,count_faves,count_comments',  # Get additional metadata
}

# Perform the search and download the photos
photos = flickr.photos.search(**search_params)['photos']['photo']

# Open a CSV file for writing
with open('photos_metadata.csv', 'w', newline='', encoding='utf-8') as file:
    writer = csv.writer(file)

    # Write the header row
    writer.writerow(['Photo ID', 'Title', 'Description', 'Tags', 'Date Taken', 'Owner Name', 'Views', 'Favorite Count', 'Comment Count'])

    # Loop through each photo and write its metadata to the CSV file
    for photo in photos:
        photo_id = photo['id']
        title = photo['title']
        description = photo.get('description', {'_content': ''})['_content']
        tags = photo.get('tags', '').split()
        date_taken = photo.get('datetaken', '')
        owner_name = photo.get('ownername', '')
        views = photo.get('views', '')
        favorite_count = photo.get('count_faves', '')
        comment_count = photo.get('count_comments', '')

        # Write the metadata to the CSV file
        writer.writerow([photo_id, title, description, tags, date_taken, owner_name, views, favorite_count, comment_count])