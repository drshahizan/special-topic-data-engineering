<h1 align='center'>🎓 Web Scraping Multimedia Content</h1>
<table align='center'>
  <tr>
    <th>Name</th>
    <th>Matric</th>
  </tr>
  <tr>
    <td>ADAM WAFII BIN AZUAR</td>
    <td>A20EC0003</td>
  </tr>
  <tr>
    <td>AHMAD MUHAIMIN BIN AHMAD HAMBALI</td>
    <td>A20EC0006</td>
  </tr>
    <tr>
    <td>FARAH IRDINA BINTI AHMAD BAHARUDIN</td>
    <td>A20EC0035</td>
  </tr>
    <tr>
    <td>MUHAMMAD DINIE HAZIM BIN AZALI</td>
    <td>A20EC0084</td>
  </tr>
  <tr>
    <td>MIKHEL ADAM BIN MUHAMMAD EZRIN</td>
    <td>A20EC0237</td>
  </tr>
</table>

## 1. Introduction

This assignment involves the use of the Pixabay API to retrieve 100 images based on a keyword entered by the user. The retrieved images will be stored in MongoDB along with their metadata. The process involves obtaining an API key from Pixabay, prompting the user to input a keyword, making a request to the Pixabay API using the API key and the user's keyword, parsing the JSON object returned by the API to extract relevant information, establishing a connection to MongoDB using PyMongo, creating a new database and collection to store image metadata, and creating a new document for each image in the collection. Finally, the images can be displayed to the user using a library such as Pillow or OpenCV. This assignment provides an opportunity to gain experience in working with APIs, parsing JSON data, and using MongoDB to store and retrieve data.



## 2. Web Scraping using Pixabay
Pixabay is a website that provides a platform for users to access a vast collection of free-to-use multimedia content, including images, videos, and illustrations. It allows users to search for multimedia content by keywords, filter by image or video type, and sort by popularity or date uploaded. The site also provides an easy-to-use editor that allows users to make minor adjustments to images before downloading them.

Pixabay's content is released under a Creative Commons license, which means that users can use the multimedia content without paying any licensing fees or attribution. However, there are some restrictions on the use of the content, and users are encouraged to read the site's terms of service before using any of the multimedia content. Overall, Pixabay is a valuable resource for anyone who needs free-to-use multimedia content for their personal or commercial projects.

### Advantages using Pixabay for multimedia content
<ul>
    <li>Wide range of multimedia content: Pixabay offers a vast collection of over 2 million high-quality, royalty-free images, videos, and illustrations. This means that you can easily find multimedia content for almost any type of project, whether it's for personal or commercial use.</li>
    <li>Easy to use: Pixabay has a simple and user-friendly interface that allows you to search for multimedia content quickly and easily. You can use keywords to search for specific content, filter results by image or video, and even sort by popular or latest uploads.</li>
    <li>High-quality content: All multimedia content on Pixabay is hand-picked and reviewed to ensure that it meets their high-quality standards. This means that you can be confident that the content you find on Pixabay is of excellent quality and will enhance your projects.</li>
    <li>Free to use: Pixabay offers all of its multimedia content for free, which is a huge advantage for anyone on a tight budget. You can download and use any multimedia content from the site for personal or commercial use without paying any licensing fees.</li>
</ul>

### Process of web scraping
<ol>
  <li>Install the necessary libraries.</li>
  The libraries that will be used are requests, pymongo and os. These libraries are widely used in web scraping and provide a range of tools for retrieving and analyzing data from websites.
  <li>Insert the API key, search keyword, and the number of images to be retrieved.</li>
  To retrieve Pixabay API key, we can get it from <a href="https://pixabay.com/api/docs/">Pixabay API documentation</a>. Then, specify the search keyword or query that will be used to search for specific data on the website. Lastly, specify the number of images to be retrieved.
  <li>Write the coding to web scrape.</li>
  Write code to request the web page and retrieve its HTML content. Here, we have written all the metadata that we want to retrieve specifically from an image.
  <li>Connect to the MongoDB server.</li>
  Lastly, insert connection string URI, database name and collection. By inserting all these, all the information that we have retrieved will be stored in MongoDB server.
</ol>


### Description of metadata obtained
<table>
  <tr>
    <th>Field</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>id</td>
    <td>A unique identifier for this image.</td>
  </tr>
  <tr>
    <td>imageWidth</td>
    <td>Width of the image.</td>
  </tr>
  <tr>
    <td>imageHeight</td>
    <td>Height of the image.</td>
  </tr>
  <tr>
    <td>previewWidth</td>
    <td>Width of the preview image.</td>
  </tr>
  <tr>
    <td>previewHeight</td>
    <td>Height of the preview image.</td>
  </tr>
  <tr>
    <td>webformatWidth</td>
    <td>Width of the web format image.</td>
  </tr>
  <tr>
    <td>webformatHeight</td>
    <td>Height of the web format image.</td>
  </tr>
  <tr>
    <td>imageSize</td>
    <td>Size of the image.</td>
  </tr>
  <tr>
    <td>type</td>
    <td>Type of file.</td>
  </tr>
  <tr>
    <td>tags</td>
    <td>Keyword that describes the image.</td>
  </tr>
  <tr>
    <td>view</td>
    <td>Total number of views.</td>
  </tr>
  <tr>
    <td>downloads</td>
    <td>Total number of downloads.</td>
  </tr>
  <tr>
    <td>likes</td>
    <td>Total number of likes.</td>
  </tr>
  <tr>
    <td>comments</td>
    <td>Total number of comments.</td>
  </tr>
  <tr>
    <td>user_id, user</td>
    <td>User ID and name of the contributor.</td>
  </tr>
  <tr>
    <td>pageURL</td>
    <td>Source page on Pixabay, which provides a download link for the original image of the dimension imageWidth x imageHeight and the file size imageSize.</td>
  </tr>
  <tr>
    <td>previewURL</td>
    <td>Low resolution images with a maximum width or height of 150 px (previewWidth x previewHeight).</td>
  </tr>
  <tr>
    <td>userImageURL</td>
    <td>Profile picture URL (250 x 250 px).</td>
  </tr>
  <tr>
    <td>webformatURL</td>
    <td>Medium sized image with a maximum width or height of 640 px (webformatWidth x webformatHeight).</td>
  </tr>
</table>



## 3. Choosing a Library for Web Scraping
We are working on a web scraping project using the Pixabay API. To implement the project, we have chosen to use several libraries, including Request, PyMongo, and OS. When selecting libraries for web scraping, we consider several factors to ensure that they meet our needs. Firstly, ease of use is essential for us, as some members of the team are relatively new to web scraping. We need libraries with clear documentation and simple syntax that we can all easily understand. Performance is also critical since we're working with a large amount of data. We require libraries that can handle large datasets quickly and efficiently to save us time and improve the accuracy of our results. Compatibility with other libraries and programming languages is another key factor to consider. We want to make sure that the libraries we choose work seamlessly with the other tools we're using to avoid compatibility issues. Community support is also an important consideration for us. We want to be part of a community of developers who can provide guidance and support when we encounter issues or need advice. This way, we can learn from others' experiences and collaborate on projects with like-minded individuals. Lastly, legal considerations are critical to ensure that we're complying with any relevant terms of service or legal requirements. We want to avoid any legal issues that could arise from using certain libraries or tools for web scraping. Overall, by carefully considering the above factors, we have selected the Request, PyMongo, and OS libraries to implement our web scraping project using the Pixabay API. These libraries meet our needs for ease of use, performance, compatibility, community support, and legal considerations, making them ideal for our project.


## 4. Storing Data in MongoDB

MongoDB provides several benefits when it comes to storing multimedia content data. One key advantage is its ability to handle unstructured data, such as multimedia files, in a flexible and scalable manner. This makes it easier to manage large volumes of multimedia content, and also allows for easy updates and modifications to the data. In relation to the previous summary, MongoDB can be used to store image metadata retrieved from the Pixabay API. The best way to store multimedia content data in MongoDB involves organizing the data into collections based on their type or purpose. Each document within the collection can contain metadata such as the filename, file type, file size, and other relevant information. To query and analyze the data, MongoDB provides a powerful set of tools that allow for filtering, sorting, and aggregation. For instance, one can query and analyze the image metadata stored in MongoDB to identify the most popular tags or image dimensions across all the retrieved images. Overall, MongoDB is an effective solution for storing and managing multimedia content data, offering flexibility, scalability, and powerful querying and analysis capabilities.

## 5. Conclusion

In conclusion, this assignment provides us with an excellent opportunity to gain practical experience in web scraping using an API and working with MongoDB to store and retrieve data. By retrieving and storing images based on a user's input keyword, we will become familiar with the process of making API requests, parsing JSON data, and establishing a connection to a database using PyMongo. Additionally, this project provides an opportunity to explore different libraries for displaying images such as Pillow or OpenCV. Overall, this project is an excellent way for us to improve our skills in web scraping and data management, which are valuable in various data-driven industries.
