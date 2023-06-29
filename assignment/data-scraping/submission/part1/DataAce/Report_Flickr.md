<h1 align='center'>Web scraping multimedia content on Flickr.com </h1>
<p align="center">
  <img src="https://www.techspot.com/articles-info/2384/images/2021-12-26-image.png" height= '300px' title="Google News API">
</p>

## 1. Introduction
Web scraping, also known as data scraping, web harvesting, or web data extraction, is the process of automatically extracting information or data from websites. This involves using a computer program or a script to access web pages, extract relevant data, and then save the data in a structured format such as a spreadsheet or a database. In this project, we will perform web scraping on Flickr.com which is an online photo and video hosting service that allows users to share and store their images and videos. Flickr has millions of multimedia content that are accessible to public and are useful for many purposes. This project mainly focuses on scraping images with its metadata by using Flickr API key and python language then storing the data into MongoDB. It is impotant to know the skills of web it is an efficient and time-saving method compared to manually collecting data. In addition, web scraping is a common tool used in machine learning to train algorithms on large amounts of data. Hence why we need to learn and upskill ourselves in data scraping.

## 2. Web Scraping Flickr

Flickr is an online photo and video sharing platform that was launched in 2004. It is a popular platform among photographers and other visual content creators who use it to showcase their work, connect with other photographers, and share their content with a wider audience. Flickr is a good source of multimedia content for several reasons. Firstly, it has a large community of users who upload and share their photos and videos on the platform, meaning that there is a wide variety of multimedia content available. Secondly, Flickr has a robust search engine that allows users to search for photos and videos based on keywords, tags, and other parameters, making it easy to find specific types of multimedia content. Additionally, many Flickr users license their photos and videos under Creative Commons licenses, allowing others to use, modify, and share the content under certain conditions. Finally, Flickr allows users to comment on and interact with other users' photos and videos, creating a sense of community and engagement. Overall, these features make Flickr a valuable source of multimedia content for a range of purposes, including marketing, education, and personal use.

## 3. Process of web scraping
 1. Install the required libraries :
    
    In this project, we use Python and need to install FlickrAPI. The metadata of the images displayed on Flickr are confidential and are not included in the inspect. Hence, the process of web scraping require API key from flickr to extract those data.
    
         ```
          !pip install FlickrAPI
          import flickrapi
          ```
     
 2. Get Flickr API key :
    
    Firstly, you need to sign up on the Flickr developer portal and navigate to keys section. Then, click on the create App button and provide the details. After that, review and agree to Flickr terms and complete the process. Lastly, Flickr will provide with the API key.
    
         ```
          api_key = 'e6b00be365cab3b2c004788b12bb6b47'
          api_secret = '401e90577d12f507'
          flickr = flickrapi.FlickrAPI(api_key, api_secret, format='parsed-json')
          ```
 3. Coding :
    
    Coding is the next part where we need to code on how to scrap and retrieve the data. Since most of the metadata are private, API key is used in the coding. We uses python language and code based on our understanding and research made from other web scraping projects. Our sources are from youtube, google, chatGPT and stack overflow. After multiple try and errors, we managed to get the metadata of images but not as much. We get the title, owner, length and witdth of the image, source and URL of the image. Lastly, we export the data into csv file.
    
         ```
          # Search for photos with a specific tag
          photos = flickr.photos.search(tags='cat', per_page=100)
          
          data = []
          
          # Iterate over the photos and extract their metadata
          for photo in photos['photos']['photo']:
              photo_id = photo['id']
            
            # Try to get the photo title
            try:
                photo_title = photo['title']
            except TypeError:
                print(f"Error: Photo {photo_id} title field is not structured as expected. Photo dictionary: {photo}")
                continue
                
            # Get the photo description and tags
           
            photo_tags = photo.get('tags')
            owner = photo['owner']
            server = photo['server']
        
        
            # Get the photo URL and download it
            sizes = flickr.photos.getSizes(photo_id=photo_id)['sizes']['size']
        
            source = sizes[0]['source'] # Use the largest available size
            label = sizes[0]['label'] # Use the largest available size
            width = sizes[0]['width'] # Use the largest available size
            height = sizes[0]['height'] # Use the largest available size
            url = sizes[0]['url'] # Use the largest available size
            photo_file = requests.get(photo_url)
            with open(f'{photo_id}.jpg', 'wb') as f:
                f.write(photo_file.content)
        
            # Print the metadata
            print(f'Photo ID: {photo_id}')
            print(f'Title: {photo_title}')
            print(f'Owner: {owner}')
            print(f'Server: {server}')
            print(f'Tags: {photo_tags}')
            print(f'Source: {source}')
            print(f'Label: {label}')
            print(f'Width: {width}')
            print(f'Height: {height}')
            print(f'Url: {url}')
            
            data.append({'Photo ID': photo_id, 'Title': photo_title, 'Owner': owner, 'Server': server, 'Tags':photo_tags , 'Source'
          ```
    
      The metadata that we managed to scrape are as follows:
      - Photo ID
      - Title
      - Owner
      - Server
      - Tags
      - Source
      - Label
      - Width
      - Height
      - URL
    
 4. Upload to MongoDB :
    
    Lastly, upload the [CSV file](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part1/DataAce/flickrdata.csv) generated to MongoDB. There are two ways which are using Pymongo library then code on the text editor or open MongoDB and upload csv files. For this project, we chose to upload files directly into MongoDB.



## 4. Choosing a Library for Web Scraping

To complete this Flickr web scraping project, we used libraries such as pandas, csv, flickAPI and beautifulsoup. These libraries are chosen because it provides ease of use since we are familiar with it. We have experience in the past projects using the libraries so implementing it in this project has help us a lot. Next, pandas is used as it has many features when coding with python.We uses the dataframe from pandas to store the scrapped data in a structured way before exporting csv. Next, csv library is needed to export into csv file. Without it, the data cannot be exported to csv and it will complicate the process of uploading data to MongoDB. In addition, it is also a good approach to store the data as many people are fammiliar and can understand it. Lastly, beautifulsoup is needed because it provide powerful HTML manipulation. It provides range of features which allow us to locate specific elements based on tags, attributes or content. All in all, these library helped us in completing the web scraping because of its ease of use, large community supports and are compatible.

## 5. Storing Data in MongoDB
MongoDB is beneficial for storing multimedia content due to its flexible schema, support for binary data, scalability, and high performance. To store data in MongoDB, you can organize it using collections and documents, with each document representing a multimedia item and containing relevant fields and metadata. Querying and analyzing data in MongoDB can be done through basic queries based on criteria like tags or file type, using the aggregation pipeline for advanced analysis, leveraging geospatial queries for location-based content, and performing full-text searches. Proper indexing and security measures should be implemented for efficient querying and protection of multimedia data.

## 6. Potential Analysis
By using the scraped data from Flickr, we can perform a wide range of analysis to gain insights and extract meaningful information from the dataset. The dataset consists of several fields such as Photo ID, Title, Owner, Server, Tags, Source, Label, Width, Height, and URL, which provide valuable information about the photos uploaded to Flickr.

1. Analysis of Popular Tags
   
   We can identify the most frequently used tags in the dataset and determine the popularity of different themes or subjects based on the tags.

2. Photo Ownership Analysis
   
   We can analyze the distribution of photo owners and identify top contributors or users who upload the most photos. Other than that, we can also explore the relationship between photo ownership and other variables like tags or photo popularity.
   
3. Source Analysis
   
   We can analyze the sources from which photos were uploaded and identify popular platforms or applications used for uploading. Other than that, we can also explore any patterns or relationships between photo source and other variables like tags or photo characteristics.


## 7. Conclusion
To conclude, the assignment discussed the process of web scraping and obtaining an API key for accessing the Flickr API and highlighted the BeautifulSoup library for web scraping multimedia content. It explained the benefits of using MongoDB for storing multimedia data, including its flexible schema, binary data support, scalability, and performance. The recommended approach for storing multimedia data in MongoDB involves organizing it into collections and documents. The importance of web scraping multimedia content for data analysis was emphasized, enabling researchers to gather valuable insights from diverse sources and enrich their analysis.Future research suggestions include image analysis, geospatial analysis, social media trends, content recommendation systems, and sentiment analysis. These avenues provide opportunities to gain deeper insights and leverage the scraped data for various data-driven research purposes.

