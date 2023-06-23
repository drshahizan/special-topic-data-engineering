<h1 align='center'> 
  Sales Analysis Dashboard of Shopee Supermarket by Households Supplies Category <img height='50px' width='50px' src='https://user-images.githubusercontent.com/120556342/228145762-83c369fc-a6b8-49da-a2be-fd31b7f280c3.png'>
</h1>

# 📝Table of Content
- [Introduction](#introduction)
- [Background](#️background)
- [Objectives](#objectives)
- [Scope](#️scope)
- [Methodology](#️methodology)
- [Project Structure](#️project-structure)
- [Interface](#️interface)
  - [Admin](#admin)
  - [Public User](#public-user)
- [Insight](#️insight)
- [Conclusion](#️conclusion)
- [Quick Start](#️quick-start)

## Introduction

The e-commerce industry has witnessed significant growth over the past decade, with more and more consumers opting to shop online for their everyday needs. As part of this trend, online marketplaces have emerged as popular platforms for retailers and consumers to connect and transact.

Shopee, one of the leading e-commerce platforms in Southeast Asia, has gained immense popularity due to its user-friendly interface, wide product selection, and competitive pricing. Shopee Supermarket, a dedicated section within the Shopee platform, focuses on providing consumers with a convenient and comprehensive shopping experience for household supplies.

In this rapidly evolving world of e-commerce, businesses are constantly seeking ways to gain a competitive edge and maximize their sales potential. Data-driven decision-making has emerged as a crucial factor in achieving these goals. The Sales Analysis Dashboard of Shopee Supermarket by Households Supplies Category is a comprehensive and innovative tool designed to empower businesses operating in the e-commerce space, particularly those involved in selling household supplies on the popular Shopee platform.

Therefore, this project aims to produce an e-commerce analytics dashboard that helps to optimize e-Shopee Supermarket operations and to improve profitability by leveraging the insights provided by Shopee Supermarket Household Supplies Category. Sales data will be used to identify which products are selling well and which are not, to understand seasonal trends and to optimize pricing strategies.

## Background

This project focused on the household supplies category that encompasses a broad range of essential products that are used by consumers on a regular basis. This category includes items such as cleaning supplies, kitchenware, home organization products, personal care items, and much more. With the increasing demand for these products, it has become crucial for businesses operating in this sector to deeply understand market dynamics, consumer preferences, and sales performance.

The Sales Analysis Dashboard of Shopee Supermarket by Households Supplies Category was developed to address this need. This project aims to leverage the wealth of transactional data available on the Shopee platform to provide valuable insights into the sales performance and trends within the household supplies category.

The development of this project involves the integration of advanced data analytics techniques, including data collection, processing, analysis, and visualization. Through interactive charts, graphs, and visualizations, users can explore and analyze the sales data from various perspectives, such as product subcategories, brands, and customer behavior.

The Sales Analysis Dashboard of Shopee Supermarket by Households Supplies Category is designed to cater to the specific needs of businesses operating in the e-commerce space, particularly those involved in selling household supplies. This project aims to empower businesses to optimize their operations, enhance customer satisfaction, and achieve sustainable growth in the highly competitive online marketplace by providing a comprehensive and user-friendly interface for data analysis.

## Objectives

Around 80% of eCommerce businesses have been failing because of insufficient marketing strategy and selling the wrong product at the wrong price. Therefore, an effective marketing plan is the key to success for all businesses. The business owner has to collect sales data and then analyze it himself. Without doing this, the business owner cannot understand the current situation of the marketplace.

However, modern technology can help to solve this problem effectively. Therefore, the owner's time will not be wasted to the maximum extent. The Sales Analysis Dashboard of Shopee Supermarket by Households Supplies Category of our project targets to achieve the following objectives.
- Provide a comprehensive overview of sales performance within the household supplies category on the Shopee Supermarket platform.
- Analyze sales data to identify top-selling products, popular brands, and customer preferences within the household supplies category.
- Provide actionable insights to optimize pricing strategies and maximize profitability within the household supplies category.
- Improve customer satisfaction by understanding purchasing patterns, preferences, and shopping behavior.

## Scope

1. Product Scope
   - The analysis will specifically concentrate on the household supplies category within the Shopee Supermarket.
   - The household supplies category may include products such as cleaning supplies, kitchen essentials, personal care items, and other relevant household-related products.

2. Data Collection Scope
   - Utilizing a web scraping tool, specifically a Chrome extension, to extract relevant data from the Shopee Supermarket website.
   - The product data such as name, price, rating, sold amount and image have been extracted.

3. Data Cleaning and Preprocessing Scope
   - Applying data cleaning techniques using Python to ensure the extracted data is accurate, consistent, and ready for analysis.
   - For example, handling missing data and removing duplicates.

4. Data Storage Scope
   - MongoDB: Utilizes MongoDB to store user data, as it offers flexibility, scalability, and the capability to handle diverse data structures.
   - SQL: Use MySQL to store Shopee data, which efficiently handles transactional and inventory data.

5. Data Analysis Scope
   - Statistical analysis: Conduct statistical analysis to gain insights into sales patterns, trends, and correlations within the household supplies category.
   - Data visualization: Creating visual representations (charts, graphs, dashboards, etc.) to communicate the analyzed data and findings effectively.


## Methodology

1. ``Data Collection``: Gather sales data from the Shopee Supermarket platform related to household supplies.

2. ``Data Cleaning and Preparation``: This step includes data cleaning and data transforming process where all retrieved data will be cleaned to make sure there are no noisy and dirty data. Hence, the quality of the data increases which later will produce more complete, accurate, and consistent results. Then, transform the format of the data if needed.

3. ``Data Analysis``: Utilize various analytical techniques to gain insights from the sales data including product analysis.

4. ``Data Visualization``: Create visually appealing and informative dashboards and reports to present the analyzed data. 

5. ``Insights and Recommendations``: Interpret the findings from the analysis and generate actionable insights. Identify opportunities for improvement, growth, and optimization within the household supplies category.

## Project Structure

```bash
< PROJECT ROOT >
   |
   |-- core/                            
   |    |-- settings.py                  # Project Configuration  
   |    |-- urls.py                      # Project Routing
   |
   |-- home/
   |    |-- views.py                     # APP Views 
   |    |-- urls.py                      # APP Routing
   |    |-- models.py                    # APP Models 
   |    |-- tests.py                     # Tests  
   |    |-- templates/                   # Theme Customisation 
   |         |-- accounts                # Account Folder
   |              |-- login.html        
   |              |-- password_change.html 
   |              |-- password_change_done.html 
   |              |-- password_reset.html 
   |              |-- password_reset_complete.html
   |              |-- password_reset_confirm.html
   |              |-- password_reset_done.html
   |              |-- register.html
   |         |-- admin                   # Admin Folder
   |         |-- includes               
   |         |-- layouts                     
   |         |-- pages                   # Website Pages Folder         
   |              |-- index.html
   |              |-- prod_details.html
   |              |-- product.html
   |              |-- report.html
   |              |-- registration 
   |     
   |-- requirements.txt                  # Project Dependencies
   |
   |-- env.sample                        # ENV Configuration (default values)
   |-- manage.py                         # Start the app - Django default start script
   |
   |-- ************************************************************************
```

## Interface
1. Login Page

Users must log in with their username and password to access the page. If they do not have an account, they can create one by clicking the "register" button. Once logged in, you should be able to view all the content on the page.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/ea8a13d5-763a-408b-bf25-da42cfae4647"/></div>

2. Register Page

Users have the option to register themselves to gain access to the system.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/6fac6c4a-9874-4734-b400-0b24e52eba98"/></div>
   
3. Reset password Page

If the user forgets their password, they can reset it and receive a password reset email.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/0b0b1c6f-2e2b-4370-83c8-9fc3b52ca25e"/></div>
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/39da4fb8-b391-47a2-a8e6-a5454c1efa81"/></div>

4. Change Password Page

The user can modify their password within the website.

5. Sidebar Navigation

#### Admin
The sidebar navigation for admins provides various options, including access to the dashboard, to view all products and details, a report of product sales, and the option to export the reports in CSV format.

#### Public User
The dashboard, which includes analyses, product information, sales, and product reports, can be accessed by the public user. The reports can also be exported to CSV format for easy use.

5. Dashboard

The Shopee Supermarket provides its users with a Tableau-integrated dashboard that facilitates the analysis of household supplies. This dashboard serves as a visual representation of the analysis.
    <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/7a0e7f3a-2a42-4f30-892c-43aa2a2cf70e"/></div>

5. Product Catalog Page

The product catalog provides a comprehensive overview of all the products utilized in the analysis and brief information about each.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/fca73892-ee80-48f9-a2a4-4b7b5ee0ef5c"/></div>
   
7. Product Details Page

By clicking on the product, users can access and review its details.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/fdf84d46-6441-4daa-a7a1-6cef0a54853d"/></div>
   
9. Report Page

<li>Product Report</li>
The report provides a comprehensive list of all products available at Shopee Supermarket, complete with their original links.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/50dd9948-6d59-4cf0-b982-8bff1a9befbe"/></div>

<li>Sales Report</li>
On this page, users will find a comprehensive breakdown of the total sales of each product.
   <div align="center"><img src="https://github.com/drshahizan/special-topic-data-engineering/assets/99240177/bb9b5f4d-cb54-4a6f-afd4-4049ba5519c2"/></div>


## Insight
Top-Selling Products: The Vinda Deluxe Kitchen Wipes 2 x 40s, with 18,200 total sold.
Price-Sales Relationship: 
Customer Satisfaction: 
High-Rated Products: The Vinda Deluxe Kitchen Wipes 2 x 40s, with 7,200 of 5 star ratings
Market Trends: 
Product Performance: 

## Conclusion
The Sales Analysis Dashboard of Shopee Supermarket has successfully analyzed sales data and provided valuable insights within the household supplies category. Relevant data was gathered from the Shopee Supermarket website using a web scraping tool, and then cleaned and stored in databases. Valuable patterns, trends, and correlations were uncovered through statistical analysis which can be used to make data-driven decisions and optimize sales strategies. The use of data visualization techniques made it easier to communicate the findings to stakeholders. The project utilized various technologies and methodologies, including web scraping, Python for data cleaning, MongoDB and SQL for data storage, and statistical analysis techniques. The Sales Analysis Dashboard provided a user-friendly interface for accessing and interacting with the analyzed data. Overall, the project has provided valuable insights into sales patterns, trends, and correlations, empowering businesses to make informed decisions and drive growth within the household supplies market segment.

## Quick Start
[How To Run This Project](https://github.com/drshahizan/special-topic-data-engineering/blob/main/project/submission/Regex/regex/README.md)


