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
![integration 1](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/759831d6-cdfa-4421-a97d-6aab51985d38)

#### a. Storage Account
Visit the storage account you have established, click on blob service then subsequently include a container called "input" to facilitate the uploading of all the input datasets. 

![integ 2](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/2c5f32be-194f-4c4f-aeeb-1fa5e7db5826) ![integ3](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/82e265e9-32cf-4145-8fa0-58fdb4c85ef8)
![integ 4](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/dc7f41e9-5445-4e63-b69e-4d99af7a7a17)

#### b. Azure SQL Database
Go to the database, click on `Query editor(preview)`. A pop up will appear that asks you to log into the database. Enter the username and password. In the query, create 3 new tables to insert data as output SQL data. Ensure the data type matches with the data in the input file.

![4dc8e4b0fd24e59c8040ad75a292b774db972fe3](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/ba3c7f9c-b63b-4a2d-a60f-caeffd80a3cc)

![5038563a2002628b27f5523ee35c4467d8448ad8](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/a9da97c1-cf5a-49f9-ad33-1bd0eb32449b)

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
![07205f0b69c4b206d21487a9e8012df5e24fdc19](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/cabba126-8b79-4929-b75f-ccf5430021e0)

### 3. Create Linked Service
Open Data Factory, click on the Manage page from the navigation bar. Then, under connections, go to linked services. Create 2 new linked services named `inputblob` (Type: Azure Blob Storage) and `outputSQL` (Type: Azure SQL Database).

![f033204219262fe860067eecbb9d830849569cfe](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/74a93832-5cef-4f87-a85d-96fc3adf018c)

![34a582413e61af150a988bc52f362428e431a7d9](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/50f00834-799b-4f04-8287-8463e473aa85)

### 4. Create Datasets
Navigate to author page. Under `Datasets` create new dataset (type: Azure Blob Storage), name it `beerCSV` and select format of the file u want to connect. Create another dataset (type: Azure SQL Database) and named it  `beerTable`.

![8752655e9cb62741c5492dd017059c28e42a40cb](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/5b77eb58-3e0b-4b0a-af0b-0ee9970820b1)

### 5. Create Pipeline Canvas
Create new pipeline, name it `blob to sql`. Click on the created pipeline, then a canvas will appear. In the activities column, go to 'Move & Transform' and drag `copy data` into the canvas. The source dataset should be `beerCSV` dataset and the sink source shall be `beerTable`. Debug the canvas until success. After all elements had success in debugging, click on Publish.

![a6df591cb9a1c8f4a83a5d196937ffc4bcfa2935](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/bca1a36c-0139-498f-8f77-4b05ddcf3489)
![5b5a728f99df63879e583f1673d38155122f2be8](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/00a287b3-94f7-4abe-a63a-b8a65dc40b80)

### The Result
In the database, run the following code to retrieve the transfered data. The Results woll show that the database had been set up properly and had been integrated.

```sql
select * from [dbo].[beer]
```
Results:
![last](https://github.com/drshahizan/special-topic-data-engineering/assets/96984290/fbf264b1-6a4f-4e22-a82a-a6b83ff451f4)





