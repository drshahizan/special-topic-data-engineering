## 1. Introduction

Automated retrieval and aggregation of images, videos, audio, and other multimedia materials from websites is known as web scraping of multimedia content. This category of data can be highly advantageous in several domains, such as computer vision, natural language processing, marketing, and social media analysis, for research and examination purposes.

## 2. Web Scraping Flickr

Flickr is a good source for multimedia content because it hosts a vast collection of user-generated images and videos, searchable by tags and keywords. It is an online photo and video sharing platform where users can upload, organize and share their multimedia content with the world. The site also features social networking tools, such as groups, comments, and photo communities, to facilitate interaction among users.

The web scraping process starts off with finding the tags of pictures that will be used in order to extract all the data from. Then, we will be using an API called flickrapi and the BeautifulSoup library. From the tags we provided, pictures that contains the tags will be collected and from there information such as Picture Id, Camera Make, Camera Model, Exposure, Aperture, Exposure, ISO, Metering Mode, Flash, Focal Length, Color Space, and Lens Model will be extracted from every picture. After extracting all the information needed, it will then be exported into a CSV file with the title being the tag. Perhaps the biggest challenge for us was finding out that not all picture shared all the information we needed as the CSV file contains some null values which we believe could not be avoided as the publisher themselves did not feel obliged to share all the information we needed. The CSV file is 19 KB in size which can be considered small as it only contains 120 rows of data.

## 3. Choosing a Library for Web Scraping
- Compare and contrast the available libraries for web scraping multimedia content, including Pillow and OpenCV.
- Explain the criteria used to choose the appropriate library for this project.
- Justify the final choice and explain the advantages of the chosen library.

## 4. Storing Data in MongoDB

Discuss the benefits of using MongoDB for storing multimedia content data:
1. Scalability: MongoDB is designed to scale horizontally, which means it can handle large volumes of multimedia content data without sacrificing performance.

2. Flexibility: MongoDB's document-based structure allows for flexible data modeling and the ability to store multimedia content data in a wide variety of formats.

3. Querying and Indexing: MongoDB provides powerful querying and indexing capabilities that enable efficient searching and analysis of multimedia content data, including support for geospatial queries.

4. Automatic Sharding: MongoDB automatically partitions data across multiple servers for efficient storage and retrieval of multimedia content data.

5. High Availability: MongoDB provides automatic failover and replication, ensuring that multimedia content data remains available even in the event of hardware failures or other issues.

7. Rich API Support: MongoDB has a rich API with support for a wide variety of programming languages, making it easy to integrate multimedia content data into applications.

8. GridFS: MongoDB's GridFS feature allows for efficient storage and retrieval of large multimedia content data files, such as videos or high-resolution images.

9. Dynamic Schema: MongoDB's dynamic schema allows for changes in data structure or format over time, making it easy to adapt to evolving needs for storing multimedia content data.

Overall, MongoDB's scalability, flexibility, powerful querying and indexing capabilities, automatic sharding, high availability, rich API support, GridFS feature, and dynamic schema make it an excellent choice for storing multimedia content data.

- Explain the best way to store the data in MongoDB, including the data structure and organization.
- Provide examples of how the data can be queried and analyzed using MongoDB.

## 5. Conclusion
- Summarize the main points of the assignment and restate the importance of web scraping multimedia content for data analysis.
- Offer suggestions for future research or analysis using the data set obtained from Flickr.

