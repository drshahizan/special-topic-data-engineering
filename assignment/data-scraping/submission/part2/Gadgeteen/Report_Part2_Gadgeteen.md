# Part 2: Web scraping text content
## Table of Content
- [Introduction](#introduction)
- [Web Scraping Google Scholar](#web-scraping-google-scholar)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongodb)
- [Conclusion](#conclusion)

## Introduction

Web scraping is the process of automatically extracting data from websites, and it plays a crucial role in gathering information for research and analysis purposes. The ability to extract information from online platforms provides researchers with valuable insights into academic publications. One valuable source of publication content is Google Scholar, a widely used academic search engine that indexes scholarly articles, theses, conference papers, and other scholarly resources. This report explores the process of web scraping text content from Google Scholar, specifically focusing on data related to the Faculty of Computing at the University of Technology Malaysia.

## Web Scraping Google Scholar

Google Scholar is a widely recognized platform for accessing academic publications, including scholarly articles, conference papers, theses, and dissertations. It offers an extensive database covering a wide range of disciplines, making it an excellent source for research data. It allows users to search for scholarly articles, view abstracts, and access full-text articles when available. Researchers often rely on Google Scholar to find relevant literature for their studies due to its comprehensive coverage and indexing of academic sources. By scraping Google Scholar, we can extract relevant information such as titles, authors, abstracts, citations, and publication dates.

### Web Scraping Process
- Detail the web scraping process, including the tools and libraries used and any challenges that were encountered.

The challenges encountered during web scraping Google Scholar included handling dynamic web page elements, handling pagination to collect multiple pages of search results, dealing with dynamic content loading through JavaScript, implementing appropriate waiting periods for page loading, and avoiding IP blocking or CAPTCHA from excessive requests.

### Dataset Obtained

The data set obtained from web scraping Google Scholar consisted of publication details related to the Faculty of Computing at the University of Technology Malaysia. The data set includes metadata such as article titles, authors, link, publication dates, description, journal name, volume and issue number, pages, publisher and citation counts. The data is stored in MongoDB for efficient querying and analysis.

## Choosing a Library for Web Scraping

Several libraries are available for web scraping, each with its own strengths and weaknesses. The three main libraries considered for this project were Beautiful Soup, Scrapy, and Selenium.

- **Beautiful Soup** is a widely used library for parsing HTML and XML documents. It provides a simple and intuitive interface for extracting data from web pages. Beautiful Soup excels at extracting structured data from static web pages but may face limitations when dealing with dynamic or JavaScript-based content.

- **Scrapy** is a comprehensive web scraping framework that offers extensive functionalities for extracting and processing data from websites. It provides more advanced features, including built-in support for handling JavaScript rendering and handling complex web scraping tasks. However, Scrapy has a steeper learning curve and may require more effort to set up and configure.

- **Selenium** is a powerful tool for automated web browsing. It allows for programmatically controlling web browsers and interacting with dynamic web page elements. Selenium is especially useful when dealing with JavaScript-rendered content or scenarios that require user interactions. However, it may introduce more complexity due to the need for browser automation.

### Criteria for Choosing the Library
The choice of library for web scraping depends on several factors, including the complexity of the target website, the desired level of automation, and the familiarity of the development team with the library. Considering the dynamic nature of Google Scholar, including JavaScript rendering and dynamic page elements, we needed a library that could handle such challenges effectively. Additionally, the ability to interact with the web page to access individual publication pages was crucial.

### Justification of the Final Choice
Considering the requirements and challenges, the chosen library for this project is a combination of BeautifulSoup and Selenium. BeautifulSoup provides a robust and intuitive way to parse the search results and individual publication pages, extracting the desired text content. Selenium enables browser automation, allowing for interaction with dynamic web page elements and capturing the full text content of the publications.

The advantages of using BeautifulSoup and Selenium together include the ability to handle dynamic web pages, access individual publication pages, and extract structured data efficiently. This combination provides a flexible and reliable solution for web scraping Google Scholar.

## Storing Data in MongoDB
- Discuss the benefits of using MongoDB for storing publication content data.
- Explain the best way to store the data in MongoDB, including the data structure and organization.
- Provide examples of how the data can be queried and analyzed using MongoDB.

## Conclusion
- Summarize the main points of the assignment and restate the importance of web scraping publication content for data analysis.
- Offer suggestions for future research or analysis using the data set obtained from Google Scholar.

Web scraping publication content, specifically from Google Scholar, provides researchers with a valuable resource for data analysis and research. By leveraging libraries in Python such as BeautifulSoup and Selenium, it is possible to extract text content related to the Faculty of Computing at the University of Technology Malaysia. The data obtained can be stored in MongoDB, which offers flexibility, scalability, and efficient querying capabilities.

Future research or analysis using the data set obtained from Google Scholar could involve exploring co-authorship networks, identifying publication trends over time, and analyzing the impact of specific research topics or authors within the Faculty of Computing. The scraped data can also be combined with other data sources for comprehensive research insights and scholarly analysis.
