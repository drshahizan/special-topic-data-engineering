# Assignment Part 2: Web Scraping Text Content
1. Introduction
> Briefly introduce the topic of web scraping publication content and the importance of this type of data for research and analysis.

2. Web Scraping Google Scholar

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


3. Choosing a Library for Web Scraping
> - Compare and contrast the available libraries for web scraping publication content, including Beautiful Soup, Scrapy, and Selenium.
> - Explain the criteria used to choose the appropriate library for this project.
> - Justify the final choice and explain the advantages of the chosen library.


4. Storing Data in MongoDB
> - Discuss the benefits of using MongoDB for storing publication content data.
> - Explain the best way to store the data in MongoDB, including the data structure and organization.
> - Provide examples of how the data can be queried and analyzed using MongoDB.



5. Conclusion
> - Summarize the main points of the assignment and restate the importance of web scraping publication content for data analysis.
> - Offer suggestions for future research or analysis using the data set obtained from Google Scholar.
