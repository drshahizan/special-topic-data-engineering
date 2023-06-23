<div align="center">
  <img width=300px height=150px src="https://user-images.githubusercontent.com/99240177/232822671-98a60054-f4dc-4f84-a7b8-6ed4473e3038.png"/>
</div>

<h1 align=center>Part 1: Web scraping Multimedia Content 📸 🔍</h1>
This assignment entails web scraping image content from Flickr, a popular photo-sharing platform with a large collection of images and videos. Our group scraped sunset images. To automate data retrieval and processing, we use Python libraries. Then, save the data to MongoDB using the PyMongo library.

<h2 align=center>Group Members <img width=30px; height=30px src="https://user-images.githubusercontent.com/120556342/215398734-609ba04a-88e5-44b5-9eaa-239ac8edd091.png"></h2>
<table align=center>
  <tr>
    <th>Name</th>
    <th>Matric</th>
  </tr>
  <tr>
    <td>HONG PEI GEOK</td>
    <td>A20EC0044</td>
  </tr>
  <tr>
    <td>MADIHAH BINTI CHE ZABRI</td>
    <td>A20EC0074</td>
  </tr>
    <tr>
    <td>MAIZATUL AFRINA SAFIAH BINTI SAIFUL AZWAN</td>
    <td>A20EC0204</td>
  </tr>
    <tr>
    <td>NURARISSA DAYANA BINTI MOHD SUKRI</td>
    <td>A20EC0120</td>
  </tr>
  <tr>
    <td>SAKINAH AL'IZZAH BINTI MOHD ASRI</td>
    <td>A20EC0142</td>
  </tr>
</table>

## Contents 📝
- 📑[Report](https://github.com/drshahizan/special-topic-data-engineering/blob/a5cec6ce0fbdcfa3f63a3f72d1fa18b3a3f594d6/assignment/data-scraping/submission/part1/Regex/Regex_Report.md)
- 💻[Code](https://github.com/drshahizan/special-topic-data-engineering/blob/a5cec6ce0fbdcfa3f63a3f72d1fa18b3a3f594d6/assignment/data-scraping/submission/part1/Regex/Regex_Flickr.py)
- 💾[Scraped Dataset](https://github.com/drshahizan/special-topic-data-engineering/blob/a5cec6ce0fbdcfa3f63a3f72d1fa18b3a3f594d6/assignment/data-scraping/submission/part1/Regex/flickr_scraping.csv)

## Web Scraping Process Summary 🗂️
To begin web scraping on Flickr, python libraries are imported, and an API key and endpoint URLs are defined. Specific tags or keywords can be used to identify desired images or videos. API calls are made to retrieve search results, and the metadata for each image or video is accessed through the Flickr API. The metadata collected includes title, author, URL, camera make, and model. The data is stored in a CSV file or database for further analysis, and images are downloaded using the OpenCV library. Finally, the data is uploaded to MongoDB Atlas using a connection string. Based on the requirements for the web scraping multimedia content assignment, the Request and OpenCV libraries were chosen as they provide suitable features for simple web content retrieval and advanced multimedia processing capabilities.

## Choice of Storage 🗄️
MongoDB is chosen for storing multimedia content due to its dynamic schema. The binary data support and powerful querying capabilities make storing and retrieving multimedia content easy. To optimize performance and facilitate efficient querying, it is essential to consider the data structure and organization when storing data in MongoDB.

## Results 🔎
We have successfully scraped and downloaded 100 multimedia contents from Flickr, including their titles, authors, URLs, camera make, and model.
