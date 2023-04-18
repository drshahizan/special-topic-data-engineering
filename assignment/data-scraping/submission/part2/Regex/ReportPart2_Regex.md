# Part 2: Web scraping text content
## Table of Content
- [Introduction](#introduction)
- [Web Scraping Google Scholar](#web-scraping-google-scholar)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongodb)
- [Conclusion](#conclusion)

## Introduction
> Briefly introduce the topic of web scraping publication content and the importance of this type of data for research and analysis.
> 
Web scraping text content is the process of extracting text data from websites. It is an automatic approach that uses automated software tools to extract useful raw data from web pages and can be used to obtain large amounts of data. There are many websites that are suitable to perform web scraping and extract the text content such as articles, blogs and academic papers. 

Mostly, the text data is extracted from the website that hosts academic publication. For example, Google Scholar and ResearchGate. Both of them are famous websites for publication content and these data are helpful to use in various purposes such as tracking changes in research trends, analyzing citation patterns, identifying potential research collaborators, or extracting insights for natural language processing models.

This type of data is important for research and analysis because it can provide valuable insight to the researcher after analyzing and investigating the collected data. From here, it is possible to identify new research opportunities and discover emerging trends. Therefore, this will definitely save time and resources since researchers are not required to gather data from multiple sources.

Overall, web scraping text content plays a crucial role and acts as a valuable tool for researchers and data analysts looking to extract meaningful insights from online text data.


## Web Scraping Google Scholar
> - Explain why Google Scholar is a good source for publication content and provide a brief overview of the site.
> - Detail the web scraping process, including the tools and libraries used and any challenges that were encountered.
> - Discuss the data set obtained, including metadata such as data size, file type, and other relevant information.

### Google Scholar
Google Scholar is a freely accessible and popular search engine for academic publications. It consists of a wide variety of publication contents  such as articles, conference papers, books and theses. It is a good source for publication content because it is fast and easy to access. Researchers and analysts can get the relevant data in seconds for free or through institutional subscriptions. Other than that, Google Scholar provides a "cited by" feature that identifies the number of citations a particular publication has received, making it easy to identify influential articles or authors in a given field. 

### Web Scraping Process
Web scraping publication content for Google Scholar and storing it in a database involves a series of processes or steps. Below is an overview of the process in web scraping.
1. Selecting the URLs: First, we need to go to the Google Scholar website and identify the URL that contains the publication content of interest. In this case, we are finding all the articles that were produced by researchers who are from the Faculty of Computing at the University Technology Malaysia.
2. Choosing a Web Scraping Library: Then, there are several libraries that are available for web scraping like BeautifulSoup, Scrapy, Selenium and Lxml. From there, we should choose the suitable libraries and apply it to extract the contents from Google Scholar. Some of the libraries that used in this assignment are:
    - `BeautifulSoup`: Beautiful Soup is built on well-known Python parsers like lxml and html5lib, enabling us to experiment with various parsing techniques or trade off speed for flexibility.
    - `Selenium`: Selenium is a web driver that is used for automated testing, but it can also be used for web scraping.
3. Setting Up the Environment: After choosing suitable web scraping libraries, we need to ensure and prepare the environment which includes installing the required libraries and also setting up the data storage system.
4. Extracting Data: Now, we can start the web scraping process by writing the code to extract publication content from the Google Scholar. It should include extracting the relevant data that we need. 
5. Storing Data: Lastly, the data will be stored in the database. MongoDB is a good choice to store these scraped data due to its flexibility and scalability.

### Challenges
During the web scraping process, there may be some challenges that need to be overcome in order to get the required data successfully. 
1. CAPTCHAs: Google Scholar is protected by CAPTCHAs to prevent automated web scraping. The process of solving CAPTCHAs requires human intervention, which can take a considerable amount of time and sometimes it will stop the web scraping process and cause the error. 
2. Dynamic content: The content on Google Scholar is dynamic, which means that it is subject to frequent changes. As a result, extracting relevant data from the page can be difficult, especially if the content is loaded asynchronously.
3. IP blocking: Google Scholar can block IP addresses that are attempting to web scrape the site. From here, with the use of blocked IP addresses it becomes impossible to extract data from the site. 
It is important to handle these challenges appropriately to ensure a successful web scraping operation and make sure all of the extracted data are relevant.

### Description of Data Set
The data set obtained from web scraping publication content from Google Scholar will have various sizes and structures depending on the keywords that are searched and retrieved. Commonly, the metadata that can extract from the Google Scholar includes title, author, publication date, publication type, journal or conference name, volume and issue number, pages, abstract, keywords, DOI, URL, citations, bibliographic software export formats and full-text availability. 

In this case, we aim to retrieve the title, author, publication date, journal or conference name and citation from the Google Scholar. The size of the data will depend on the number of articles written by all of the researchers from the Faculty of Computing at the University Technology Malaysia while the file type of the data set will typically be in a structured format such as CSV, JSON, or XML, depending on the format chosen for storing the data. 



## Choosing a Library for Web Scraping
> - Compare and contrast the available libraries for web scraping publication content, including Beautiful Soup, Scrapy, and Selenium.
> - Explain the criteria used to choose the appropriate library for this project.
> - Justify the final choice and explain the advantages of the chosen library.

One of the most important steps in performing the web scraping process is selecting the web scraping library. There will be three libraries discussed which are Beautiful Soup, Scrapy, and Selenium. All of them are popular libraries for web scraping for publication content and have their own strengths and weaknesses. 

<table>
    <tr>
        <th>Library</th>
        <th>Advantages</th>
        <th>Disadvantages</th>
    </tr>
    <tr>
        <td>Beautiful Soup</td>
        <td>
            <li>Good for pull data out of HTML and XML files.</li>
            <li>Simple and easy to learn.</li>
            <li>Can be used with other libraries, such as Requests and Pandas.</li>
        </td>
        <td>
            <li>Cannot handle dynamic or interactive web pages.</li>
            <li>Unable to execute JavaScript Code.</li>
            <li>Not efficient for large-scale web scraping projects.</li>        
        </td>
    </tr>
    <tr>
        <td>Scrapy</td>
        <td>
            <li>Supports middleware, extensions, proxies, and more.</li>
            <li>Efficient and scalable for large-scale web scraping projects.</li>
            <li>Faster than other existing scraping libraries</li>          
        </td>
        <td>
            <li>Require longer to learn.</li>
            <li>Requires more configuration.</li>
            <li>Doesn’t handle JavaScript by default.</li>          
        </td>
    </tr>
    <tr>
        <td>Selenium</td>
        <td>
            <li>Can handle JavaScript and other dynamic web page elements.</li>
            <li>Can automate user interactions with a web page.</li>
            <li>Can easily handle AJAX and PJAX requests.</li>          
        </td>
        <td>
            <li>Require more skills than Beautiful Soup.</li>
            <li>Slower than Beautiful Soup and Scrapy.</li>
            <li>Requires installing a web driver.</li>              
        </td>
    </tr>
</table>

There will be several criteria to choose the appropriate library for this assignment.
1. Ease of use: The chosen library should be compatible with programmer skills. The simplicity and straightforward solution will definitely help programmers to complete the task in a shorter time since the learning time  can be saved. 
2. Performance: The library should be efficient and scalable by providing high speed and handling large amounts of data.
3. Project requirement: The library should meet the goal and objective of the assignment. For example, to support large scale web scraping and also depend on the web page to be scrapped. 
4. Flexibility: The library should support various types of web page and file format. 
5. Documentation Quality: The library should have well-structured documentation to provide support when facing problems during the web scraping process.

Based on these criteria, Beautiful Soup and Selenium were chosen for this assignment not only because they are popular libraries that are widely used in the web scraping process but also justify based on their features such as simplicity, ability to work with different types of web page, support dynamic pages and suitability with the scale of the assignment. 



## Storing Data in MongoDB
- Discuss the benefits of using MongoDB for storing publication content data.
- Explain the best way to store the data in MongoDB, including the data structure and organization.
- Provide examples of how the data can be queried and analyzed using MongoDB.

## Conclusion
- Summarize the main points of the assignment and restate the importance of web scraping publication content for data analysis.
- Offer suggestions for future research or analysis using the data set obtained from Google Scholar.
