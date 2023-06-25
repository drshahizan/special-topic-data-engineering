# Part 2: Web scraping text content
## Table of Content
- [Introduction](#introduction)
- [Web Scraping Google Scholar](#web-scraping-google-scholar)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongodb)
- [Conclusion](#conclusion)

## Introduction

Extracting text data from websites through web scraping is an automated process involving software tools to obtain useful information from web pages. This approach is highly efficient in retrieving large volumes of data and is well-suited for extracting text content from various sources, including articles, blogs, and academic papers. 

Most of the text data comes from academic websites like Google Scholar and ResearchGate. These websites are renowned for their publication content, and their data can be utilized for various purposes. For instance, it can help track changes in research trends, analyze citation patterns, identify potential research collaborators, or extract insights for natural language processing models.

This data type is important for research and analysis because it can provide valuable insight to the researcher after analyzing and investigating the collected data. From here, it is possible to identify new research opportunities and discover emerging trends. Therefore, this will definitely save time and resources since researchers are not required to gather data from multiple sources.

Extracting text content through web scraping is essential for researchers and data analysts to gather valuable insights from online data. It plays a crucial role in the process.


## Web Scraping Google Scholar

Google Scholar is a widely-known search engine that provides free access to a plethora of academic publications. It is highly regarded for its comprehensive collection of research materials, including articles, conference papers, books, and theses. This platform is commonly used by researchers, students, and scholars across various fields to access authoritative and reliable sources for their academic pursuits. With its user-friendly interface and extensive database, Google Scholar has become an indispensable tool for anyone seeking to explore and stay up-to-date with the latest developments in their respective fields. One of the most convenient sources for publication content is easily accessible and speedy. Researchers and analysts can get the relevant data in seconds for free or through institutional subscriptions. Besides, Google Scholar provides a "cited by" feature that identifies the number of citations a particular publication has received, making it easy to identify influential articles or authors in a given field. 

### Web Scraping Process
Web scraping publication content for Google Scholar and storing it in a database involves several processes or steps. Below is an overview of the process of web scraping.

1. Selecting the URLs: First, we need to go to the Google Scholar website and identify the URL that contains the publication content of interest. In this case, we are finding all the articles produced by researchers from the Faculty of Computing at the University of Technology Malaysia.
   
2. Choosing a Web Scraping Library: Then, several libraries are available for web scraping, like BeautifulSoup, Scrapy, Selenium, and Lxml. From there, we should choose suitable libraries and apply them to extract the contents from Google Scholar. Some of the libraries used in this assignment are:
    - `BeautifulSoup`: Beautiful Soup is built on well-known Python parsers like lxml and html5lib, enabling us to experiment with various parsing techniques or trade off speed for flexibility.
    - `Selenium`: Selenium is a web driver that is used for automated testing, but it can also be used for web scraping.
3. Setting Up the Environment: After choosing suitable web scraping libraries, we need to ensure and prepare the environment, including installing the required libraries and setting up the data storage system.
   
4. Extracting Data: We can start the web scraping process by writing the code to extract publication content from Google Scholar. It should include extracting the relevant data that we need. 
    > Step 1: Import all necessary libraries.<br>
    ```python
    from bs4 import BeautifulSoup
    from selenium import webdriver
    from selenium.webdriver.common.by import By
    from selenium.webdriver.support.ui import WebDriverWait
    import time
    import pandas as pd
    ```
    > Step 2: Define the URL that needs to be scrapped and enter the keyword “Faculty of Computing, Universiti Teknologi Malaysia” to find all the researchers. Since there are several result pages, we find the next button and retrieve the page details. Then, save the researcher link and name.  <br>
    ```python
    # Set up the Selenium webdriver to open a headless Chrome browser
    options = webdriver.ChromeOptions()
    options.add_argument('headless')
    driver = webdriver.Chrome(options=options)

    # Navigate to the Google Scholar search page
    driver.get('https://scholar.google.com/citations?hl=en&view_op=search_authors&mauthors=&btnG=')

    # Find the search box and enter the search query
    search_box = driver.find_element(By.NAME, 'mauthors')
    search_box.send_keys('Faculty of Computing, "Universiti Teknologi Malaysia"')

    # Submit the search query
    search_box.submit()

    # Wait for the page to load and get the page source
    time.sleep(5)
    html = driver.page_source

    # Parse the HTML data using BeautifulSoup
    soup = BeautifulSoup(html, 'html.parser')

    names = []
    profiles = []

    # Find all the search results
    search_results = soup.find_all('div', {'class': 'gs_ai_t'})

    # get the names and links of the researchers on the first page
    for result in search_results:
        name = result.find('h3', {'class': 'gs_ai_name'}).text
        link = result.find('a')['href']
        names.append(name)
        profiles.append(link)

    # navigate to the next page and get the names and links of the researchers      
    while True:
        next_button = driver.find_element(By.XPATH, '//button[@aria-label="Next"]')
        if not next_button.is_enabled():
            break

        # click on the "Next" button to load the next page of results
        next_button.click()
        time.sleep(2)  # wait for the page to load

        # Get the new page source and parse it using BeautifulSoup
        html = driver.page_source
        soup = BeautifulSoup(html, 'html.parser')

        # Find all the search results
        search_results = soup.find_all('div', {'class': 'gs_ai_t'})

        # Loop over the search results
        for result in search_results:
            name = result.find('h3', {'class': 'gs_ai_name'}).text
            link = result.find('a')['href']

            names.append(name)
            profiles.append(link)
    ```
    > Step 3: Loop through each researcher's link to get the published publications by each of them. Save the article's data, such as title, authors, publication date, journal name, and citations. <br>
    ```python
    titles = []
    authors = []
    pub_dates = []
    journal_names = []
    citations = []

    for profile in profiles:
        # Construct the URL for the Google Scholar profile
        url = f"https://scholar.google.com/{profile}"

        # Visit the profile page using Selenium webdriver
        driver.get(url)

        # Find the "Show more" button and click it repeatedly until it is disabled
        while True:
            show_more_button = driver.find_element(By.XPATH, '//button[@id="gsc_bpf_more"]')
            if not show_more_button.is_enabled():
                break

            show_more_button.click()
            time.sleep(2)  # wait for the result to load

        # Extract the page content with BeautifulSoup
        soup = BeautifulSoup(driver.page_source, 'html.parser')
        publications = soup.find_all("tr", {"class": "gsc_a_tr"})

        # Extract metadata from the parsed HTML
        titles += [title.text for title in soup.find_all('a', class_='gsc_a_at')]
        pub_dates += [pub_date.text for pub_date in soup.find_all('span', class_='gsc_a_hc')]
        citations += [citation.text for citation in soup.find_all('a', class_='gsc_a_ac')]

        for pub in publications:
            author_elem = pub.find_all("div", {"class": "gs_gray"})[0]
            author = author_elem.text.strip()

            journal_elem = pub.find_all("div", {"class": "gs_gray"})[1]
            journal = journal_elem.text.strip()

            journal_names.append(journal)
            authors.append(author)


    # Print the extracted metadata
    print("Title:", titles)
    print("Authors:", authors)
    print("Publication Date:", pub_dates)
    print("Journal or Conference Name:", journal_names)
    print("Citations:", citations)
    print("------")

    # Close the Selenium webdriver after scraping is done
    driver.close()
    ```
    
    > Step 4: Save the data into a dataframe to have a better view and structure. <br>
    ```python
    article_dict = {'Title': titles, 'Authors': authors, "Publication Date": pub_dates, 'Journal or Conference Name': journal_names, 'Citations': citations}
    df = pd.DataFrame(article_dict)
    ```
    > Step 5: Export the data into a .csv file. <br>
    ```python
    df.to_csv('GoogleScholar.csv',index=False)
    ```

6. Storing Data: The data will be stored in the database. MongoDB is a good choice to store these scraped data due to its flexibility and scalability.
```python
import pymongo

# Connect to MongoDB
client = pymongo.MongoClient('URL')
db = client['google_scholar']
collection = db['google_scholar']

data = df.to_dict(orient='records')
collection.insert_many(data)
```

Output: 

<img width="662" alt="image" src="https://user-images.githubusercontent.com/120556342/235406334-d5727161-b2e2-43c4-9700-9dbf5897db0e.png">

### Challenges
During the web scraping process, some challenges may need to be overcome to get the required data successfully. 
1. CAPTCHAs: To prevent automated web scraping, Google Scholar is protected by CAPTCHAs. The process of solving CAPTCHAs requires human intervention, which can take a considerable amount of time, and sometimes, it will stop the web scraping process and cause errors. 
2. Dynamic content: The content on Google Scholar is dynamic, which means it is subject to frequent changes. As a result, extracting relevant data from the page can be difficult, especially if the content is loaded asynchronously.
3. IP blocking: Google Scholar can block IP addresses that are attempting to web scrape the site. From here, using blocked IP addresses makes it impossible to extract data from the site. 
It is important to handle these challenges appropriately to ensure a successful web scraping operation and ensure all extracted data are relevant.

### Description of Data Set
The data set obtained from web scraping publication content from Google Scholar will have various sizes and structures depending on the searched and retrieved keywords. Commonly, the metadata that can extract from Google Scholar includes title, author, publication date, publication type, journal or conference name, volume and issue number, pages, abstract, keywords, DOI, URL, citations, bibliographic software export formats, and full-text availability. 

In this case, we aim to retrieve the title, author, publication date, journal or conference name, and citation from Google Scholar. The size of the data will depend on the number of articles written by all of the researchers from the Faculty of Computing at the Universiti Teknologi Malaysia, while the file type of the data set will typically be in a structured format such as CSV, JSON, or XML, depending on the format chosen for storing the data. 



## Choosing a Library for Web Scraping

One of the most important steps in performing the web scraping process is selecting the web scraping library. Three libraries will be discussed: Beautiful Soup, Scrapy, and Selenium. All of them are popular libraries for web scraping for publication content and have their own strengths and weaknesses. 

<table>
    <tr>
        <th>Library</th>
        <th>Advantages</th>
        <th>Disadvantages</th>
    </tr>
    <tr>
        <td>Beautiful Soup</td>
        <td>
            <li>Simple and easy to learn.</li>
            <li>Good for small to medium-scale scraping tasks</li>
            <li>Good for pulling data out of HTML and XML files.</li>
            <li>Can be used with other libraries, such as Requests and Pandas.</li>
        </td>
        <td>
\           <li>Slower compared to Scrapy</li>
            <li>Unable to execute JavaScript Code.</li>
            <li>Cannot handle dynamic or interactive web pages.</li>
            <li>Not efficient for large-scale web scraping projects.</li>        
        </td>
    </tr>
    <tr>
        <td>Scrapy</td>
        <td>
            <li>Faster than other existing scraping libraries</li>    
            <li>Provides pipelines for data processing and storage</li>
            <li>Supports middleware, extensions, proxies, and more.</li>
            <li>Efficient and scalable for large-scale web scraping projects.</li>
        </td>
        <td>
            <li>Require longer to learn.</li>
            <li>Requires more configuration.</li>
            <li>Doesn’t handle JavaScript by default.</li> 
            <li>Steeper learning curve compared to Beautiful Soup</li>
        </td>
    </tr>
    <tr>
        <td>Selenium</td>
        <td>
            <li>Provides visual feedback during scraping</li>
            <li>Can easily handle AJAX and PJAX requests.</li>   
            <li>Can automate user interactions with a web page.</li>
            <li>Can handle JavaScript and other dynamic web page elements.</li>
        </td>
        <td>
            <li>Requires installing a web driver.</li>   
            <li>Slower than Beautiful Soup and Scrapy.</li>
            <li>Require more skills than Beautiful Soup.</li>
            <li>Slower compared to Beautiful Soup and Scrapy</li>
        </td>
    </tr>
</table>

There will be several criteria to choose the appropriate library for this assignment.
1. Ease of use: The chosen library should be compatible with programmer skills. The simple and straightforward solution will help programmers complete the task in a shorter time since the learning time  can be saved. 
2. Performance: The library should be efficient and scalable by providing high speed and handling large amounts of data.
3. Project requirement: The library should meet the goal and objective of the assignment. For example, to support large-scale web scraping and depend on the web page to be scrapped. 
4. Flexibility: The library should support various types of web pages and file formats. 
5. Documentation Quality: The library should have well-structured documentation to provide support when facing problems during the web scraping process.

Based on these criteria, Beautiful Soup and Selenium were chosen for this assignment not only because they are popular libraries that are widely used in the web scraping process but also justify based on their features such as simplicity, ability to work with different types of a web page, support dynamic pages and suitability with the scale of the assignment. 



## Storing Data in MongoDB

MongoDB is an open-source document-oriented database and leading NoSQL database. There are several benefits of using MongoDB for storing publication content data.

1. Flexibility: MongoDB provides a flexible document-oriented data model to store unstructured and complex data, which suits publication content data that vary highly in terms of structure and format.
2. Scalability: MongoDB can be scaled to handle large amounts of data and manage high traffic. This makes it a great fit to store large volumes of publication content data.
3. Querying Ability: MongoDB provides a flexible language for complex queries and data analysis. For example, the data can be grouped, filtered, and summarized in various ways by the ability of MongoDB’s aggregation. 
4. Integration with other tools: MongoDB can integrate with various tools and libraries like Python, Flask, and Django. 
5. Automatic sharding: MongoDB automatically distributes or partitions data across multiple machines. This will improve the performance in terms of storing and querying large datasets efficiently. 

MongoDB's flexibility, scalability, querying ability, integration with other tools, and automatic sharding make it a great choice for storing publication content data.

### Best way to store the data in MongoDB
The size and type of the data should be considered when storing publication content data in MongoDB to ensure high performance and efficiency. There are some ways to store publication content data in MongoDB.

1. Define a clear data schema: A schema is a JSON object that defines the structure and contents of the data. It is important to define a clear structure for the data to ensure data consistency. 
2. Use collections to organize the data: MongoDB stores data records as documents (specifically BSON documents) gathered together in collections. Each collection should consist of documents with a similar structure and data type.
3. Use nested documents to represent related data: The related data should be stored in nested documents within the same collection to reduce the number of queries needed to get the data. 
4. Use indexing to improve performance: Indexing allows MongoDB to find the desired data and quickly improve performance. For example, the fields that are frequently queried and sorted should be defined as an index. 
5. Use appropriate data types: Some common data types in MongoDB are String, Integer, Double, Boolean, and Array. The data type of each field should be defined accurately to ensure efficiency in data storage and querying. 

In summary, the best way to store publication content data in MongoDB will depend on the project's specific requirements.

### Examples of how the data can be queried and analyzed using MongoDB
MongoDB is a powerful tool for querying and analyzing data. Several examples exist of how MongoDB can query and analyze data.

1. Find all publications that contain a specific keyword
```python
db.publications.find({$text: {$search: "machine learning"}})
```

2. Count the number of publications by a particular author:
```python
db.publications.count({author: "M Othman"})
```

3. Find the publications with the highest number of citations:
```python
db.publications.find().sort({"citations": -1}).limit(10)
```

4. Calculate the average number of citations per publication:
```python
db.publications.aggregate([
    {$group: {_id: null, avg_citations: {$avg: "$citations"}}}
])
```

5. Group publications by year and count the number of publications per year:
```python
db.publications.aggregate([
    {$group: {_id: { $year: "$publication_date" }, count: {$sum: 1}}}
])
```
MongoDB can support powerful and complex data querying and analyzing like aggregation and grouping. 

## Conclusion

In conclusion, this assignment aims to perform a web scraping publication content process from Google Scholar and store the extracted data in the database. Web scraping is an important method to obtain data for analysis and research. This will involve using the tools and libraries such as Beautiful Soup, Selenium, and Scapy to extract the desired data from web pages in a shorter time. 

Web scraping also enables researchers to obtain large amounts of data from various sources, including academic journals, conference proceedings, and other publications, for their research purposes. These data will give variable insight for them to identify new research opportunities and discover emerging trends. 

Other than that, using MongoDB to store and analyze publication content data will provide benefits such as flexibility, scalability, and efficiency. This is because MongoDB has the ability to process, organize and analyze a large volume of data. Therefore, the specific data can be retrieved easily. 

Future research or analysis using the data set obtained from Google Scholar could identify the trend in research topics, identify popular authors or papers, and explore relationships between publications based on shared keywords or authors. 
