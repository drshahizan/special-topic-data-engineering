# Part 2: Web scraping text content
## Table of Content
- [Introduction](#introduction)
- [Web Scraping Google Scholar](#web-scraping-google-scholar)
- [Choosing a Library for Web Scraping](#choosing-a-library-for-web-scraping)
- [Storing Data in MongoDB](#storing-data-in-mongodb)
- [Conclusion](#conclusion)

## Introduction

Web scraping text content is the process of extracting text data from websites. It is an automatic approach that uses automated software tools to extract useful raw data from web pages and can be used to obtain large amounts of data. There are many websites that are suitable to perform web scraping and extract the text content such as articles, blogs and academic papers. 

Mostly, the text data is extracted from the website that hosts academic publication. For example, Google Scholar and ResearchGate. Both of them are famous websites for publication content and these data are helpful to use in various purposes such as tracking changes in research trends, analyzing citation patterns, identifying potential research collaborators, or extracting insights for natural language processing models.

This type of data is important for research and analysis because it can provide valuable insight to the researcher after analyzing and investigating the collected data. From here, it is possible to identify new research opportunities and discover emerging trends. Therefore, this will definitely save time and resources since researchers are not required to gather data from multiple sources.

Overall, web scraping text content plays a crucial role and acts as a valuable tool for researchers and data analysts looking to extract meaningful insights from online text data.


## Web Scraping Google Scholar

Google Scholar is a freely accessible and popular search engine for academic publications. It consists of a wide variety of publication contents  such as articles, conference papers, books and theses. It is a good source for publication content because it is fast and easy to access. Researchers and analysts can get the relevant data in seconds for free or through institutional subscriptions. Other than that, Google Scholar provides a "cited by" feature that identifies the number of citations a particular publication has received, making it easy to identify influential articles or authors in a given field. 

### Web Scraping Process
Web scraping publication content for Google Scholar and storing it in a database involves a series of processes or steps. Below is an overview of the process in web scraping.
1. Selecting the URLs: First, we need to go to the Google Scholar website and identify the URL that contains the publication content of interest. In this case, we are finding all the articles that were produced by researchers who are from the Faculty of Computing at the University Technology Malaysia.
2. Choosing a Web Scraping Library: Then, there are several libraries that are available for web scraping like BeautifulSoup, Scrapy, Selenium and Lxml. From there, we should choose the suitable libraries and apply it to extract the contents from Google Scholar. Some of the libraries that used in this assignment are:
    - `BeautifulSoup`: Beautiful Soup is built on well-known Python parsers like lxml and html5lib, enabling us to experiment with various parsing techniques or trade off speed for flexibility.
    - `Selenium`: Selenium is a web driver that is used for automated testing, but it can also be used for web scraping.
3. Setting Up the Environment: After choosing suitable web scraping libraries, we need to ensure and prepare the environment which includes installing the required libraries and also setting up the data storage system.
4. Extracting Data: Now, we can start the web scraping process by writing the code to extract publication content from the Google Scholar. It should include extracting the relevant data that we need. 
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
    > Step 3: Loop through each researcher link to get the publications that are published by each of them. Save the articles data such as title, authors, publication date, journal name and citations. <br>
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

5. Storing Data: Lastly, the data will be stored in the database. MongoDB is a good choice to store these scraped data due to its flexibility and scalability.
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
During the web scraping process, there may be some challenges that need to be overcome in order to get the required data successfully. 
1. CAPTCHAs: Google Scholar is protected by CAPTCHAs to prevent automated web scraping. The process of solving CAPTCHAs requires human intervention, which can take a considerable amount of time and sometimes it will stop the web scraping process and cause the error. 
2. Dynamic content: The content on Google Scholar is dynamic, which means that it is subject to frequent changes. As a result, extracting relevant data from the page can be difficult, especially if the content is loaded asynchronously.
3. IP blocking: Google Scholar can block IP addresses that are attempting to web scrape the site. From here, with the use of blocked IP addresses it becomes impossible to extract data from the site. 
It is important to handle these challenges appropriately to ensure a successful web scraping operation and make sure all of the extracted data are relevant.

### Description of Data Set
The data set obtained from web scraping publication content from Google Scholar will have various sizes and structures depending on the keywords that are searched and retrieved. Commonly, the metadata that can extract from the Google Scholar includes title, author, publication date, publication type, journal or conference name, volume and issue number, pages, abstract, keywords, DOI, URL, citations, bibliographic software export formats and full-text availability. 

In this case, we aim to retrieve the title, author, publication date, journal or conference name and citation from the Google Scholar. The size of the data will depend on the number of articles written by all of the researchers from the Faculty of Computing at the University Technology Malaysia while the file type of the data set will typically be in a structured format such as CSV, JSON, or XML, depending on the format chosen for storing the data. 



## Choosing a Library for Web Scraping

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

MongoDB is an open-source document-oriented database and leading NoSQL database. There are several benefits of using MongoDB for storing publication content data.

1. Flexibility: MongoDB provides a flexible document-oriented data model to store unstructured and complex data which suit with publication content data that vary highly in terms of structure and format.
2. Scalability: MongoDB can be scaled to handle large amounts of data and manage high traffic. This makes it a great fit to store large volumes of publication content data.
3. Querying Ability: MongoDB provides a flexible query language which allows complex queries and data analysis. For example, the data can be grouped, filtered and summarized in various ways by the ability of MongoDB’s aggregation. 
4. Integration with other tools: MongoDB can integrate with a wide variety of tools and libraries like Python, Flask and Django. 
5. Automatic sharding: MongoDB automatic distributing or partitioning data across multiple machines. This will improve the performance in terms of storing and querying large datasets efficiently. 

Overall, MongoDB's flexibility, scalability, querying ability, integration with other tools and automatic sharding make it a great choice for storing publication content data.

### Best way to store the data in MongoDB
The size and type of the data should be considered when storing publication content data in MongoDB in order to ensure the high performance and efficiency. There are some ways to store publication content data in MongoDB.

1. Define a clear data schema: A schema is a JSON object that defines the structure and contents of the data. It is important to define a clear structure for the data to ensure data consistency. 
2. Use collections to organize the data: MongoDB stores data records as documents (specifically BSON documents) which are gathered together in collections. Each collection should consist of documents that have a similar structure and type of data.
3. Use nested documents to represent related data: The related data should be stored in nested documents within the same collection in order to reduce the number of queries needed to get the data. 
4. Use indexing to improve performance: By using indexing, it allows mongoDB to quickly find the desired data and improve the performance. For example, the fields that are frequently queried and sorted should be defined as an index. 
5. Use appropriate data types: Some of the common data types in MongoDB are String, Integer, Double, Boolean and Array. The data type of each field should be defined accurately to ensure efficiency in data storage and querying. 

In summary, the best way to store publication content data in MongoDB will depend on the specific requirements of the project.

### Examples of how the data can be queried and analyzed using MongoDB
MongoDB is a powerful tool for querying and analyzing data. There are several examples of how the data can be queried and analyzed using MongoDB.

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
Overall, MongoDB can support powerful and complex data querying and analyzing like aggregation and grouping. 

## Conclusion

In conclusion, this assignment aims to perform a web scraping publication content process from Google Scholar and store the extracted data in the database. Web scraping is an important method to obtain the data for analysis and research. This will involve using the tools and libraries such as Beautiful Soup, Selenium and Scapy to extract the desired data from web pages in a shorter time. 

Web scraping also enables researchers to obtain large amounts of data from various sources including academic journals, conference proceedings, and other publications for their research purposes. These data will give variable insight for them to identify new research opportunities and discover emerging trends. 

Other than that, the use of MongoDB to store and analyze publication content data will provide benefits such as flexibility, scalability, and efficiency. This is because MongoDB has the ability to process, organize and analyze a large volume of data. Therefore, the specific data can be retrieved easily. 

Future research or analysis using the data set obtained from Google Scholar could identify the trend in research topics, identifying popular authors or papers and exploring relationships between publications based on shared keywords or authors. 
