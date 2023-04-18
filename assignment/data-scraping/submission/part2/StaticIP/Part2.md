# Assignment Part 2: Web Scraping Text Content

## Table of content
* [Introduction](#Introduction)
* [Web Scraping Google Scholar](#Web-Scraping-Google-Scholar)
* [Choosing a Library for Web Scraping](#Choosing-a-Library-for-Web-Scraping)
* [Storing data in MongoDB](#Storing-Data-in-MongoDB)
* [Conclusion](#Conclusion)

## Introduction
> Briefly introduce the topic of web scraping publication content and the importance of this type of data for research and analysis.

## Web Scraping Google Scholar

> - Explain why Google Scholar is a good source for publication content and provide a brief overview of the site.
> - Detail the web scraping process, including the tools and libraries used and any challenges that were encountered.
> - Discuss the data set obtained, including metadata such as data size, file type, and other relevant information.

Google Scholar is a good source for publication content because it provides a comprehensive and easy way to search for scholarly literature across various disciplines and sources. Google Scholar indexes articles, theses, books, abstracts, and court opinions from academic publishers, professional societies, online repositories, universities, and other web sites¹. Google Scholar also provides features such as citation analysis, related articles, author profiles, and library links².

A brief overview of the site is as follows:

- The homepage of Google Scholar allows users to enter a query in the search box and choose to search by articles or case law. Users can also access advanced search options, settings, and help pages from the menu icon on the top left corner.
- The search results page shows a list of relevant publications with their titles, authors, sources, year of publication, number of citations, and snippets. Users can also filter the results by year, sort them by relevance or date, and access more options such as saving, citing, or creating alerts from the menu icon on the right side of each result.
- The citation page shows the details of a publication, such as its abstract, full text link, related articles, versions, citations, and references. Users can also export the citation in various formats or import it to a reference manager from the menu icon on the left side of the page.
- The author profile page shows the information of an author, such as their name, affiliation, email, verified publications, citation metrics, co-authors, and areas of interest. Users can also follow an author to get updates on their new publications or citations.

The web scraping process is the process of extracting data from web pages using automated scripts or programs. The web scraping process typically involves the following steps:

- Identify the target web pages and data to be scraped
- Request the web pages from a web server using a web client such as a browser or a library
- Parse the HTML code of the web pages using a parser or a library
- Extract the desired data from the HTML elements using selectors or expressions
- Store or process the extracted data in a file or a database

Some challenges that may be encountered during web scraping are:

- Dynamic or interactive web pages that require JavaScript execution or user interaction to load or display data
- Anti-scraping techniques such as CAPTCHA, IP blocking, rate limiting, or encryption that prevent or limit web scraping activities
- Legal or ethical issues such as violating terms of service or privacy policies of web sites or infringing intellectual property rights of data owners

The data set obtained from web scraping Google Scholar depends on the query and the scope of the scraping. For example,

- A data set obtained from scraping all publications related to "machine learning" from Google Scholar may contain metadata such as title, author, source, year, citation count, abstract, full text link, etc. for each publication.
- A data set obtained from scraping all citations of a specific publication from Google Scholar may contain metadata such as title, author, source, year, citation context, etc. for each citation.
- A data set obtained from scraping all author profiles related to "computer science" from Google Scholar may contain metadata such as name, affiliation, email, verified publications count,
citation metrics (total citations,
h-index,
i10-index), co-authors count,
areas of interest,
etc. for each author.

The data size and file type of the data set may vary depending on the number and format of the scraped data. For example,

- A data set obtained from scraping 1000 publications related to "machine learning" from Google Scholar may have a data size of about 10 MB and a file type of CSV (comma-separated values) or JSON (JavaScript Object Notation).
- A data set obtained from scraping 100 citations of a specific publication from Google Scholar may have a data size of about 1 MB and a file type of XML (Extensible Markup Language) or HTML (Hypertext Markup Language).
- A data set obtained from scraping 100 author profiles related to "computer science" from Google Scholar may have a data size of about 5 MB and a file type of JSON or XML.


## Choosing a Library for Web Scraping
> - Compare and contrast the available libraries for web scraping publication content, including Beautiful Soup, Scrapy, and Selenium.
> - Explain the criteria used to choose the appropriate library for this project.
> - Justify the final choice and explain the advantages of the chosen library.

Beautiful Soup, Scrapy, and Selenium are three popular libraries for web scraping publication content in Python. They have different features and capabilities that make them suitable for different scenarios and tasks. Here is a brief comparison and contrast of the three libraries:

- Beautiful Soup is a library that can parse and extract data from HTML or XML documents. It can handle malformed or irregular HTML code and provide various methods to navigate and manipulate the DOM tree. Beautiful Soup is easy to use and has a large community of users and documentation. However, Beautiful Soup cannot execute JavaScript code or handle dynamic or interactive web pages. It also requires another library such as Requests or urllib to fetch the web pages from the web server.
- Scrapy is a framework that can crawl and scrape data from web pages and websites. It can handle multiple requests concurrently and asynchronously, follow links, extract data using XPath or CSS selectors, and store or process the data in various formats or pipelines. Scrapy is fast, scalable, and robust. It also has built-in features such as caching, logging, throttling, proxies, etc. However, Scrapy has a steeper learning curve and requires more configuration and coding than Beautiful Soup. It also cannot execute JavaScript code or handle dynamic or interactive web pages natively.
- Selenium is a library that can automate web browsers such as Chrome or Firefox. It can launch a browser, load a web page, and execute actions on the page such as clicking, typing, scrolling, etc. Selenium can also access and manipulate the DOM elements of the page using JavaScript code. Selenium can handle dynamic or interactive web pages that require JavaScript execution or user interaction. However, Selenium is slower, heavier, and less reliable than Beautiful Soup or Scrapy. It also requires installing a web driver for each browser and may encounter issues such as timeouts or synchronization.

<table>
  <thead>
    <tr>
      <th>Library</th>
      <th>Description</th>
      <th>Pros</th>
      <th>Cons</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Beautiful Soup</td>
      <td>A Python library used for web scraping HTML and XML document</td>
      <td>
      <li>Flexible</li>
      <li>Support various parsers</li>
      <li>Good for small scraping tasks</li>
      </td>
      <td>
      <li>Slower than Scrapy</li>
      <li>Does not handle dynamic content</li>
      </td>
    </tr>
    <tr>
      <td>Scrapy</td>
      <td>A Python framewokr used for web crawling and scraping websites</td>
      <td>
      <li>Fast and scalable</li>
      <li>Support parallel scraping</li>
      <li>Handle dynamic content</li>
      <li>Built-in support for data extraction and storage</li>
      </td>
      <td>
      <li>Steeper learning curve</li>
      <li>Require more setup</li>
      <li>May be overskill for simple scraping tasks</li>
      </td>
    </tr>
    <tr>
      <td>Selenium</td>
      <td>A web testing library used for automating web browser</td>
      <td>
      <li>Handle dynamic content</li>
      <li>Support various web browsers</li>
      <li>Good for scraping JavaScript-heavy websites</li>
      </td>
      <td>
      <li>Slower than other libraries</li>
      <li>Require more setup</li>
      <li>Not ideal for large scale scraping tasks</li>
      </td>
    </tr>
    <tr>
      <td>Serpapi</td>
      <td>Paid web scraping APU for accessing structured search engine results data</td>
      <td>
      <li>Support for multiple search engines</li>
      <li>Handle complex scraping tasks</li>
      <li>Large number of search results</li>
      </td>
      <td>
      <li>Paid service</li>
      <li>Limited customization</li>
      </td>
    </tr>
  </tbody>
</table>


The criteria used to choose the appropriate library for this project depend on the requirements and objectives of the project. Some possible criteria are:

- The type and structure of the publication content to be scraped
- The complexity and interactivity of the web pages or websites to be scraped
- The speed and scalability of the web scraping process
- The ease of use and maintenance of the web scraping code
- The availability and quality of documentation and support

Serpapi and Scrapy are two different tools for web scraping. Serpapi is a web service that provides an API to scrape and parse search engine results pages (SERPs) from Google and other search engines². Scrapy is a high-level web scraping framework that allows you to create spiders to crawl and extract data from websites¹.

Some of the differences between Serpapi and Scrapy are:

- Serpapi handles the infrastructure, proxies, CAPTCHAs, and parsing of SERPs for you, while Scrapy requires you to write your own code and manage your own infrastructure.
- Serpapi charges a monthly fee based on the number of searches you make, while Scrapy is free and open source.
- Serpapi provides legal protection for scraping public data under the US First Amendment², while Scrapy does not offer any legal guarantees or advice.
- Serpapi focuses on scraping SERPs from various search engines, while Scrapy can scrape any website with any structure or content.

Serpapi is a web service that offers an easy and reliable way to scrape and parse search engine results pages (SERPs) from Google and other search engines. By using Serpapi, I can benefit from several advantages, such as:

- we don't have to worry about the infrastructure, proxies, CAPTCHAs, and parsing of SERPs, as Serpapi handles all of that for me.
- we can access the structured data from SERPs in JSON format through a simple API request, without writing any code or dealing with HTML or JavaScript.
- we can get accurate and up-to-date results from any location in the world, as Serpapi uses Google's geolocated parameters and routes my request through the nearest proxy server.
- we can enjoy legal protection for scraping public data under the US First Amendment, as Serpapi assumes scraping and parsing liabilities for me.

Based on these benefits, I have decided to use Serpapi for my web scraping project. I think Serpapi is the best tool for my use case, as it saves me time, money, and hassle. I can focus on analyzing and using the data from SERPs, rather than scraping and parsing it myself.

```python
from serpapi import GoogleSearch
import pandas as pd

params = {
  "engine": "google_scholar",
  "q": ["Faculty of Computing", "University of Technology Malaysia", "University Teknologi Malaysia"],
  "api_key": "d85f885fa922044364556b1bb9f717a5618e5243b772573cc2ea3b1302ada8cd"
}

search = GoogleSearch(params)
results = search.get_dict()
organic_results = results["organic_results"]

df = pd.DataFrame(organic_results)
df.to_csv('result.csv') 
```

## Storing Data in MongoDB
> - Discuss the benefits of using MongoDB for storing publication content data.
> - Explain the best way to store the data in MongoDB, including the data structure and organization.
> - Provide examples of how the data can be queried and analyzed using MongoDB.

Benefits of using MongoDB for storing publication content data
- Flexible data model
- Scalable
- High performance
- Geospatial queries
- Data replication and backup

<table>
  <thead>
    <tr>
      <th>Ways to store data in MongoDB</th>
      <th>Explanation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Define clear and consistent data structures</td>
      <td>To ensure data is organized and easy to query</td>
    </tr>
    <tr>
      <td>Use embedded documents</td>
      <td>MongoDB supports embedded documents and it can be used to store related data in a single document. This can reduce the need for complex joins</td>
    </tr>
    <tr>
      <td>Normalize data when appropriate</td>
      <td>Store data in separate collectiions rathen than embedding them in a single document</td>
    </tr>
    <tr>
      <td>Consider data sharding</td>
      <td>To distribute data across multiple servers or clusters. This can reduce the risk of downtime due to hardware failures or network outages</td>
    </tr>
    <tr>
      <td>Ensure data consistency</td>
      <td>MongoDB supports atomic operations which can help ensure data consistency</td>
    </tr>
  </tbody>
</table>

Examples of how the data can be queried and analyzed using MongoDB

1) Basic Queries

Find all articles that were published in a certain date range using following query

``` python
db.articles.find({publishedDate: {$gte: ISODate("2022-01-01"), $lte: ISODate("2022-12-31")}})
```

2) Aggregation

Used to group, filter and transofrm data

``` python
db.articles.aggregate([
   {$group: {_id: "$author", count: {$sum: 1}}},
   {$sort: {count: -1}}
])
```

3) Text search

Used to seach through publication content data

``` python
db.articles.find({$text: {$search: "COVID-19"}})
```

4) Geospatial queries

Used to analyze publication content data that includes location information

``` python
db.articles.find({location: {$geoWithin: {$centerSphere: [[lng, lat], radius]}}})
```




## Conclusion
> - Summarize the main points of the assignment and restate the importance of web scraping publication content for data analysis.
> - Offer suggestions for future research or analysis using the data set obtained from Google Scholar.
