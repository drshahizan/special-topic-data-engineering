<h1 align='center'>Web scraping multimedia content on Flickr.com </h1>
<p align="center">
  <img src="https://www.techspot.com/articles-info/2384/images/2021-12-26-image.png" height= '300px' title="Google News API">
</p>

## 1. Introduction
Web scraping, also known as data scraping, web harvesting, or web data extraction, is the process of automatically extracting information or data from websites. This involves using a computer program or a script to access web pages, extract relevant data, and then save the data in a structured format such as a spreadsheet or a database. In this project, we will perform web scraping on Flickr.com which is an online photo and video hosting service that allows users to share and store their images and videos. Flickr has millions of multimedia content that are accessible to public and are useful for many purposes. This project mainly focuses on scraping images with its metadata by using Flickr API key and python language then storing the data into MongoDB. It is impotant to know the skills of web it is an efficient and time-saving method compared to manually collecting data. In addition, web scraping is a common tool used in machine learning to train algorithms on large amounts of data. Hence why we need to learn and upskill ourselves in data scraping.

## 2. Web Scraping Flickr

Flickr is an online photo and video sharing platform that was launched in 2004. It is a popular platform among photographers and other visual content creators who use it to showcase their work, connect with other photographers, and share their content with a wider audience. Flickr is a good source of multimedia content for several reasons. Firstly, it has a large community of users who upload and share their photos and videos on the platform, meaning that there is a wide variety of multimedia content available. Secondly, Flickr has a robust search engine that allows users to search for photos and videos based on keywords, tags, and other parameters, making it easy to find specific types of multimedia content. Additionally, many Flickr users license their photos and videos under Creative Commons licenses, allowing others to use, modify, and share the content under certain conditions. Finally, Flickr allows users to comment on and interact with other users' photos and videos, creating a sense of community and engagement. Overall, these features make Flickr a valuable source of multimedia content for a range of purposes, including marketing, education, and personal use.

## Process of web scraping
Detail the web scraping process, including the tools and libraries used and any challenges that were encountered.
Discuss the data set obtained, including metadata such as data size, file type, and other relevant information.

Web Scraping Process
--
 1. Install the required libraries.
In this project, we uses python and need to install FlickrAPI. The metadata of the images displayed on Flickr are confidential are not included in the inspect. Hence, the process of web scraping require API key from flickr to extract those data.
 2. Get Flickr API key
Firstly, you need to sign up on the Flickr developer portal and navigate to keys section. Then, click on the create App button and provide the details. After that, review and agree to Flickr terms and complete the process. Lastly, Flickr will provide with the API key.
 3. Coding
Coding is the next part where we need to code on how to scrap and retrieve the data. Since most of the metadata are private, API key is used in the coding. We uses python language and code based on our understanding and research made from other web scraping projects. Our sources are from youtube, google, chatGPT and stack overflow. After multiple try and errors, we managed to get the metadata of images but not as much. We get the title, owner, length and witdth of the image, source and URL of the image. Lastly, we export the data into csv file.
 4. Upload to MongoDB 
Lastly, upload the csv file generated to MongoDB. There are two ways which are using Pymongo library then code on the text editor or open MongoDB and upload csv files. For this project, we chose to upload files directly into MongoDB.

## 3. Choosing a Library for Web Scraping
Compare and contrast the available libraries for web scraping multimedia content, including Pillow and OpenCV.
Explain the criteria used to choose the appropriate library for this project.
Justify the final choice and explain the advantages of the chosen library.

## 4. Storing Data in MongoDB
Discuss the benefits of using MongoDB for storing multimedia content data.
Explain the best way to store the data in MongoDB, including the data structure and organization.
Provide examples of how the data can be queried and analyzed using MongoDB.

## 5. Conclusion
Summarize the main points of the assignment and restate the importance of web scraping multimedia content for data analysis.
Offer suggestions for future research or analysis using the data set obtained from Flickr.
Part 2: Web scraping text content
