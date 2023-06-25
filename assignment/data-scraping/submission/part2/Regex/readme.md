<div align="center">
  <img width=800px height=400px src="https://user-images.githubusercontent.com/120556342/232354247-1901fa8a-7260-4a40-9c67-beb1b455d597.png"/>
</div>

<h1 align=center>Part 2: Web Scraping Text Content 🎓🔍</h2>
This assignment requires going through the process of web scraping publication content of Google Scholar which is a popular search engine for academic publications. We are using Python libraries to automate the retrieval and processing of data. After that, use the PyMongo library to save the data to MongoDB.

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

## Contents📝
- 📑[Report](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part2/Regex/ReportPart2_Regex.md)
- 💻[Code](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part2/Regex/Part2_WebScrapingTextContent.ipynb)
- 📂[CSV](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/data-scraping/submission/part2/Regex/GoogleScholar.csv)

## Web Scraping Text Summary 🗂️
Web scraping effectively extracts large volumes of text data from various sources, including academic publication sites like Google Scholar. However, challenges such as CAPTCHAs, dynamic content, and IP blocking need to be handled appropriately. Libraries like Beautiful Soup and Selenium are chosen for their simplicity and ability to handle different types of web pages. The extracted data can be stored in a database like MongoDB for scalability and efficiency in analysis. The goal is to retrieve structured metadata such as title, author, publication date, journal or conference name, and citations. Researchers and data analysts can use this data to gain valuable insights for various purposes.

## Choice of storage method 🗄️
Storing our publication content data using MongoDB is an excellent choice. With its open-source NoSQL database, MongoDB offers flexibility, scalability, and a flexible query language, making managing our data easier. It integrates seamlessly with various tools and libraries and ensures efficient performance with automatic sharding. We can optimize performance by defining a clear data schema, organizing the data into collections, using nested documents to represent related data, and indexing to improve efficiency. Overall, we can trust MongoDB to be a reliable choice for storing our publication content data.

## Result 🔎
We have managed to extract text from individual researchers' links to the Faculty of Computing at Universiti Teknologi Malaysia. This has enabled us to obtain publications by each researcher and save their article data, including the title, authors, publication date, journal name, and citations.
