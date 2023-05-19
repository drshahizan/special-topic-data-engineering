# Data Integration Using Azure Data Factory 

## Steps:

### 1. Identify 3 different data sources
We had chosen to analyse beers based on its tastes, brand, reviews, and content. The dataset used was uploaded by RUTHGN in Kaggle: https://www.kaggle.com/datasets/ruthgn/beer-profile-and-ratings-data-set.

The folder contains 
1. beer_data_set
2. beer_profile_and_ratings
3. beer_reviews

### 2. Set up the Azure Data Factory
To step up the Azure Data Factory, we first need to set up `storage`, `database` , `server`.
Simply follow this [Youtube Tutorial](https://youtu.be/EpDkxTHAhOs) to finish setting up.

The finished set up will appear in the home page under resources.

#### a. Storage Account
Visit the storage account you have established, and subsequently include a container called "input" to facilitate the uploading of all the input datasets. 

#### b. Azure SQL Database
Go to the database, click on `Query editor(preview)`. A pop up will appear that asks you to log into the database. Enter the username and password. In the query, create 3 new tables to insert data as output SQL data. Ensure the data type matches with the data in the input file.

example for beer_profile_and_rating file:
```sql
CREATE TABLE beer_profile_ratings(
names varchar (100),
style varchar(100),
brewery varchar(200),
brew_fullname varchar(200),
descpt varchar (500),
abv decimal(18,2),
min_ibu int,
max_ibu int,
astr int,
body int,
alcohol int,
bitter int,
sweet int,
sour int,
salty int,
fruits int,
hoppy int,
spices int,
malty int,
review_aroma decimal(18,2),
review_app decimal(18,2),
review_palate decimal(18,2),
review_taste decimal(18,2),
review_overall decimal(18,2),
number_reviews int
)
```
Continue to create 2 other tables based on file `beer_data_set` and `beer_reviews`

### 3. Create Linked Service
Open Data Factory, click on the Manage page from the navigation bar. Then, under connections, go to linked services. Create 2 new linked services named `inputblob` (Type: Azure Blob Storage) and `outputSQL` (Type: Azure SQL Database).

### 4. Create Datasets
Navigate to author page. Under `Datasets` create new dataset (type: Azure Blob Storage), name it `beerCSV` and select format of the file u want to connect. Create another dataset (type: Azure SQL Database) and named it  `beerTable`.

### 5. Create Pipeline Canvas
Create new pipeline, name it `blob to sql`. Click on the created pipeline, then a canvas will appear. In the activities column, go to 'Move & Transform' and drag `copy data` into the canvas. The source dataset should be `beerCSV` dataset and the sink source shall be `beerTable`. Debug the canvas until success. 

### The Result


### Issues Faced



