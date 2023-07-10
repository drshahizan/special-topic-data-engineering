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

#### a. Import the Libraries for Web Scraping

```python
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from bs4 import BeautifulSoup
from tqdm.notebook import tqdm
import pymongo
import time
import re
```

#### b. Define the Google Scholar URL that you want to scrape

```python
url = 'https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=Faculty+of+Computing%2C+Universiti+Teknologi+Malaysia'
```

#### c. Inspect the web page to understand the HTML pattern of the webpage

![image](https://github.com/drshahizan/special-topic-data-engineering/assets/97009588/225c0ecd-b6e6-4666-876d-917e536ed503)

#### d. Web Scraping Using Selenium and Beautiful Soup

After understanding the HTML pattern of the webpage, we can now start scraping the webpage using the libraries that we have imported just now

```python
scholar_list = []
astart = 0

# Set up the Selenium driver
driver = webdriver.Chrome()

while True:
    
    driver.get(url)

    # Wait for the page to load
    driver.implicitly_wait(10)

    # Get the page source and parse it using Beautiful Soup
    html = driver.page_source
    soup = BeautifulSoup(html, 'html.parser')

    # Find all the scholars, their affiliations and emails on the page
    scholars = soup.find_all('h3', class_='gs_ai_name')
    affs = soup.find_all('div', class_='gs_ai_aff')
    emails = soup.find_all('div', class_='gs_ai_eml')

    for scholar, aff, eml in zip(scholars, affs, emails):
        # ignore scholars from Universiti Teknologi Mara (UiTM)
        if not (re.search('MARA', aff.text, re.IGNORECASE) or re.search('uitm', eml.text, re.IGNORECASE)):
            # add UTM FC scholars to the list
            scholar_list.append(f"https://scholar.google.com{scholar.find('a')['href']}")

    # get next page link from the next page button if it is present
    if soup.select_one(".gsc_pgn button.gs_btnPR").get('onclick'):
        after_author = re.search(r"after_author\\x3d(.*)\\x26", str(soup.select_one(".gsc_pgn button.gs_btnPR").get('onclick'))).group(1)
        astart += 10
        url = f'{url}&after_author={after_author}&astart={astart}'
    else:
        break

with tqdm(total=len(scholar_list)) as pbar:  #progress bar
    for scholar_url in scholar_list:

        driver.get(scholar_url)

        # click show more button in the profile page
        for _ in range(0,3):
            try:
                #Wait up to 10s until the element is loaded on the page
                element = WebDriverWait(driver, 5).until(
                    #Locate element by id
                    EC.presence_of_element_located((By.ID, 'gsc_bpf'))
                )
            finally:
                element.click()
            time.sleep(2)

        # Get the page source and parse it using Beautiful Soup
        html = driver.page_source
        soup = BeautifulSoup(html, 'html.parser')

        # get the links for all articles on the page of the scholar
        links = soup.find_all('a', class_='gsc_a_at')
        links_list = []
        for link in links:
            links_list.append(f'https://scholar.google.com{link["href"]}')

        # loop through all article links of the scholar
        for url in links_list:

            driver.get(url)

            # Wait for the page to load
            driver.implicitly_wait(10)

            # Get the page source and parse it using Beautiful Soup
            html = driver.page_source
            soup = BeautifulSoup(html, 'html.parser')

            result = soup.find('div', id='gsc_vcpb')

            # format the data in dictionary format
            document = {}
            if result.find('a', class_='gsc_oci_title_link'):
                document['Title'] = result.find('a', class_='gsc_oci_title_link').text
                document['Link'] = result.find('a', class_='gsc_oci_title_link')['href']
            else:
                document['Title'] = result.find('div', id='gsc_oci_title').text
            
            for field, value in zip(result.find_all('div', class_='gsc_oci_field'), result.find_all('div', class_='gsc_oci_value')):
                if field.text == 'Scholar articles':
                    break
                elif field.text == 'Total citations':
                    document[field.text] = int(re.search(r'\d+', value.find('a').text).group())
                else:
                    document[field.text] = value.text

```

#### e. Insert Data into MongoDB
Insert the document into MongoDB at each iteration.
```python
collection.insert_one(document)
```

### Challenges Encountered

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

Using MongoDB for storing publication content data offers several benefits:

- Flexible Schema: MongoDB is a NoSQL database that provides a flexible schema design. In the context of publication content, this flexibility allows us to store data in a schema-less manner, accommodating variations in article structures and fields. This is particularly useful when dealing with diverse publications with different metadata formats.

- Scalability: MongoDB is designed to scale horizontally, allowing us to handle large volumes of publication data efficiently. It supports automatic sharding, which distributes data across multiple servers, enabling high performance and scalability as the data grows.

- Querying and Indexing: MongoDB provides powerful querying capabilities, including the ability to perform complex queries and aggregations. We can index specific fields to optimize query performance and ensure fast retrieval of publication data based on various criteria such as authors, keywords, publication date, etc.

- Document-oriented Storage: MongoDB stores data in a JSON-like document format called BSON (Binary JSON). This document-oriented storage aligns well with the structure of publication content, as each article or publication can be represented as a document.

- Integration with Python and other languages: MongoDB provides official drivers for various programming languages, including Python. This allows for seamless integration between the Python code and the database, making it convenient to interact with and manipulate publication content data.

```python

# Define the MongoDB connection parameters
mongo_uri = "<mongo_uri>"
db_name = '<database_name>'
collection_name = '<collection_name>'

# Create a new MongoDB client
client = pymongo.MongoClient(mongo_uri)

# Select the database
db = client[db_name]

# Select the collection
collection = db[collection_name]

```

```python
# insert the document into MongoDB database
collection.insert_one(document)
```

## Conclusion

Web scraping publication content, specifically from Google Scholar, provides researchers with a valuable resource for data analysis and research. By leveraging libraries in Python such as BeautifulSoup and Selenium, it is possible to extract text content related to the Faculty of Computing at the University of Technology Malaysia. The data obtained can be stored in MongoDB, which offers flexibility, scalability, and efficient querying capabilities.

Future research or analysis using the data set obtained from Google Scholar could involve exploring co-authorship networks, identifying publication trends over time, and analyzing the impact of specific research topics or authors within the Faculty of Computing. The scraped data can also be combined with other data sources for comprehensive research insights and scholarly analysis.
