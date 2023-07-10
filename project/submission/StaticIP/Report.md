<h1 align="center">💡Malaysia Energy Consumption Analysis Dashboard💡<br></br<a href="#" target="_blank" rel="noreferrer">  </a> </h1>

# Table of Content
* [Introduction](#-introduction)
* [Background](#-background)
* [Objectives](#-objectives)
* [Methodology](#-methodology)
* [Folder Structure](#-folder-structure)
* [Interface](#-interface)
* [Insights](#-insights)
* [Conclusion](#-conclusion)

## 📒 Introduction
## 🧱 Background
## 🔬 Objectives
## 🔖 Methodology

The project is using the API from the U.S. Energy Information Administration (EIA) to obtain the energy data for Malaysia. The API provides various data sets such as total energy production, consumption, imports, exports, and carbon dioxide emissions for Malaysia from 1980 to 2019. The API also provides metadata such as units, definitions, and sources for the data sets.

The project uses PHP file_get_contents function to fetch the data from the API and save it into JSON files. The JSON files are stored in a folder named “data” in the project directory. The JSON files are named according to the data set they contain, such as “total_energy_production.json”, “total_energy_consumption.json”, etc.

The JSON files are then imported into Power BI, a data visualization and analysis tool, to create interactive dashboards and reports. The dashboards and reports show the trends, patterns, and comparisons of the energy data for Malaysia over time and across different categories. The dashboards and reports also allow users to filter and drill down the data according to their needs and interests. For example, users can select a specific year, month, or energy source to view the corresponding data. The dashboards and reports are designed to be user-friendly, informative, and visually appealing.


## 🗂️ Folder Structure
## 🧿 Interface
Below are the user interface for all users:
- Register 
<img  src="./Image/register.jpg"></img>

- Login 
<img  src="./Image/login.jpg"></img>

- Dashboard
<img  src="./Image/dashboard.jpg"></img>

- Activity List
<img  src="./Image/activity.jpg"></img>

- Product List
<img  src="./Image/product.jpg"></img>

### Admin
Admins are able to view, edit and delete data in both monthly and yearly data tables. 
- Monthly List 
<img  src="./Image/month.jpg"></img>

- Yearly List 
<img  src="./Image/year.jpg"></img>

### Public User
Public Users are only allowed to view both monthly and yearly data tables.
- Monthly List 
- Yearly List

## 🔍 Insights
## 📑 Conclusion
