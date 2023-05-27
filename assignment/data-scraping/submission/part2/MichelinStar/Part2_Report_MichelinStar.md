<h1 align=center>Web scraping Google Scholar Content</h1>

## 1. Introduction

<p align=justify>
Web scraping is a automated data extraction process from websites using various kind of tools, libraries and softwares. Publication content is defined as the published information through mediums like academic journals, books, newspapers, websites, blogs, and etc. Thus, web scraping publication content indicates the process of extracting data from online publication sources using suitable tools. In this assignment, we will be performing web scraping publication content on Google Scholar by extracting the related data to Faculty of Computing at University of Technology Malaysia. 

The importance of web scraping publication content can be discussed from a few perpectives, including research insights, literature reviews, data-driven analysis, text mining and natural language processing, and to keep updated with latest information. 
</p>
<table>
<tr>
<td>
<b>Research insights</b>
</td>
<td>
Researchers can obtain information such as title, abstracts, keywords, authors, publication dates, and citation counts through web scraping which is significant in observing trends of emerging topics, and performing robust analysis. 
</td>
</tr>

<tr>
<td>
<b>Literature reviews</b>
</td>
<td>
Through web scraping, the researcher can conduct analysis on large number of papers efficiently to identify the common themes, future trends, research gaps and etc. This process is significant for the researcher in order to make a stronger conclusion. 
</td>
</tr>

<tr>
<td>
<b>Data-driven analysis</b>
</td>
<td>
By performing quantitative analysis on the scraped information, the researcher can identify the relationship between variable, correlations, and also carry out statistical analysis to find useful and meaningful insights. 
</td>
</tr>

<tr>
<td>
<b>Text mining and natural language processing</b>
</td>
<td>
The researcher can use natural language processing algorithm during the web scraping process to extract information of the specific topic of interest by romiving noise. They can also carry out sentiment analysis, entity recognization, text summary and etc. towards the scraped information. 
</td>
</tr>

<tr>
<td>
<b>Keep updated with latest information</b>
</td>
<td>
The researchers can always stay updated with the latest research information such as latest published articles, journals and papers via web scraping. This enables them to identify emerging research areas, and explore potential oppurtunities. 
</td>
</tr>

</table>


## 2. Web Scraping Search Results from Google Scholar

<p align=justify>
Google Scholar is a web search engine specifically designed to index the collection of research resources including articles, journals, and etc. which is published by the academic publications. Many researchers, students, and users usually uses Google Scholar to conduct research since there are many free academic references and resources on it. 
</p><br>
<b>Why Google Scholar is a good source for publication content?</b><br>
<ul>
<li>
Google Scholar has <b>comprehensive coverage</b> that includes variety of academic resources in all kinds of disciplines. 
</li>
<li>
Google Scholar provides <b>citation tracking</b> feature which enable researchers to track the amount of their publications' citations by other researchers. 
</li>
<li>
In order to narrow down the search result into a precise area, Google Scholar provides <b>advanced search options</b> which enables users to filter their search results according to authors, citations, date range and etc. 
</li>
</ul>

<h4> Web Scraping Process </h4>

1. Import all neccesary libraries

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241145412-6cd7a895-d987-4770-9150-408afaee0093.png">
</div></br>

2. Set up the Proxies API key and auth key. In order to obtain Proxies API, first need to create an account in <a href="https://www.proxiesapi.com">Proxies API</a>. It will generate an api for free to use.

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241145558-63a35b6f-e6f8-43a7-835e-47d8ae56fa63.png">
</div></br>

The following explanation discusses our group's interaction with the Proxies API. It involves two key components - the API key and auth key. It's crucial to note that our group had to obtain our unique API key and auth key  from Proxies API. With the two lines of code, we're authenticating our group's identity with the Proxies API by defining our shared 'URL' and 'auth_key'. These are unique to each user and serve as our credentials for accessing Google Scholar.

3. Establish the Proxies API client

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241145837-450f70ee-558e-4250-bcb1-7b7a168c2d08.png">
</div></br>

Now we define a fuction named "get_data" which recieve a page number to scrap more data from other pages. After that, we assign url to the Google Scholar website contain search parameter which is <strong>Faculty of Computing University Technology Malaysia</strong> Next, defining a params dict for the parameters to be sent to the API. By using the request fuction to save the parameter into response object. Here, 'html.parser' signifies that the data we receive from the Google Scholar will be in a html format, converted into a Python dictionary.

4. Set up BeautifulSoup to find each data by assigning class. 

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241161933-c75f7519-bdeb-4962-b5e6-c16cf41dc2aa.png">
</div></br>

Here, our group executes the search operation with our defined parameters and retrieves the information matching our criteria. The search results are stored in the variables stated above for subsequent analysis and processing.

5. Scrap with Regex

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241162263-6beebbd4-64ef-4263-b017-53fc96f4affc.png">
</div></br>

From the Google Scholar we notice that the author is always before the first "-". Therefore by using Regex we are able to strip it using the regex formula <strong>'^(.*?)\s*-'</strong>. Other information such as journal, publication date, conference name and cited by are also using the same library but different formula to extract it. 

6. Extract URL from a tag

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241162471-8ca81205-9b3e-45c1-96a7-ab01e624e425.png">
</div></br>

Firstly, from the h3 tag which assign to "url" we need to find the "a" tag which contain the link by setting the "href=True". If the request able to find the content in within the "h3" tag then it will be append to the list named "all1".

7. Pass data into dataframe and Save

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241162827-88093f9d-5794-4224-95df-8e20a0403923.png">
</div></br>

Next, by using the for loop we are able to change the "no_pages" to scrap more data and store it inside the "result" list. After that we pass it all into the dataframe by using pandas function "DatFrame" and assign suitable title for each column. "to_csv" function is used to save the dataframe value into csv file.

1. Read the CSV file

<div align="center">
  <img src="https://user-images.githubusercontent.com/120614477/241163074-f7e55b44-4f55-46aa-a38b-f79a297ea73a.png">
</div></br>

Lastly, we use "read_csv" to observe the data in the dataframe before downlaoding into local storage. The top 10 results will be displayed in the output. 

## 3.  Choosing a Library for Web Scraping

In our web scraping project, we have chosen to utilize the following libraries:

<table>
  <tr>
    <th>Library</th>
    <th>Purpose</th>
  </tr>
  <tr>
    <td>BeautifulSoup</td>
    <td>Navigate, search, and modify a parse tree in HTML, XML files</td>
  </tr>
  <tr>
    <td>requests</td>
    <td>Make a request to a web page, and print the response text</td>
  </tr>
  <tr>
    <td>csv</td>
    <td>Manage CSV files, write metadata to CSV format</td>
  </tr>
    <tr>
    <td>regex</td>
    <td>Used to check if a string contains the specified search pattern</td>
  </tr>
    <tr>
    <td>pandas</td>
    <td>Library used for working with data sets. It has functions for analyzing, cleaning, exploring, and manipulating data.</td>
  </tr>
</table>

These libraries play critical roles in our web scraping project, facilitating key functionalities such as establishing connections to the BeautifulSoup, retrieving relevant URLs, downloading articles and research papers, and effectively managing data in CSV format.

## 4.  Storing Data in MongoDB

In our web scraping project, we chose MongoDB as the optimal data storage solution for several reasons. MongoDB's flexible schemaless structure accommodates the evolving nature of scraped data, while its scalability efficiently handles large datasets. The robust querying capabilities enable complex analysis, and seamless integration with Python simplifies data processing. MongoDB's JSON-like document storage aligns well with the structure of our scraped data, ensuring efficient representation and retrieval. Overall, selecting MongoDB as our data storage solution provides a strong foundation for our web scraping project, harnessing its flexibility, scalability, querying capabilities, Python integration, and compatibility with our data structure.

## 5.  Conclusion

In conclusion, our web scraping project utilizing the BeautifulSoup and MongoDB as the data storage solution has been a remarkable journey that yielded invaluable insights and presented us with invaluable learning opportunities. Through the process of web scraping, we skillfully extracted and meticulously analyzed a vast collection of research resources, comprising articles, journals, and metadata, sourced directly from Google Scholar. This endeavor granted us a profound understanding of various research areas, spanning disciplines such as studies and article analysis, thereby broadening our horizons and enriching our knowledge base.

By harnessing the power of MongoDB, a flexible and scalable NoSQL database, we not only stored the scraped data efficiently but also harnessed its innate strengths for seamless querying and analysis. The versatility and agility of MongoDB allowed us to adapt and evolve with ease as our project progressed, accommodating any changes in data structure or volume effortlessly. This experience highlighted the significance of employing the right technology to effectively manage and derive insights from the vast sea of information that our web scraping efforts uncovered.
