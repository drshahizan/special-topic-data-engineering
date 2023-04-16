<h1>The Movie Database (TMDB)</h1>
<p align = 'center'><img src="https://pbs.twimg.com/profile_images/1243623122089041920/gVZIvphd_400x400.jpg" alt="My Image"> </p>

<h2 align = 'center'>Group Members </h2>
<table align = 'center'>
  <tr>
    <th>Name</th> 
    <th>Matric</th>
  </tr>
  <tr>
    <td>Eddie Wong Chung Pheng</td>
    <td>A20EC0031</td>
  </tr>
  <tr>
    <td>Yong Zhi Yan</td>
    <td>A20EC0172</td>
  </tr>
    <tr>
    <td>Tan Yong Sheng</td>
    <td>A20EC0157</td>
  </tr>
    <tr>
    <td>Low Junyi</td>
    <td>A20EC0071</td>
  </tr>
  <tr>
    <td>Vincent Boo Ee Khai</td>
    <td>A20EC0231</td>
  </tr>
</table><br>

<h3>Choose API</h3>
<p> TMDB (The Movie Database) API is an ideal option for developers seeking to integrate movie and TV show information into their applications. It provides a vast database of up-to-date information on cast and crew, ratings, reviews, and other details. Its features include searching by title, keyword, or genre, sorting by popularity or release date, and an easy-to-use API documentation for seamless integration. Overall, if you need a reliable and extensive movie and TV show database TMDB API is an excellent choice.
</p>

<br>

<h1>Save TMDB API into csv format using Python</h1>

<h3>Step 1:  Import the libraries</h3>
<p>The libraries imported are as shown as below<br>
<code>import pandas as pd</code><br>
<code>import requests</code><br>
<code>from google.colab import files</code><br>
</p><br>


<h3>Step 2: Call the API using the requests library </h3>
<p>
To get the data from the TMDB website, use <code>requests.get</code> to obtain response from the TMDB API. The response will be a JSON object which contains information regarding the movies (title, overview, release date, populariity, vote average and vote count).
</p><br>

<h3>Step 3: Create a new DataFrame</h3>
<p>A dataframe is created using Pandas to store the data fetch from the TMDB API.<br>
<code>df = pd.DataFrame()</code></p><br>

<h3>Step 4:  Insert the result from the API to the Dataframe</h3>
This code snippet utilizes the requests library to send GET requests to the Top Rated Movies API endpoint provided by the Movie Database (TMDB) to obtain information on the top-rated movies.

The code first checks if the initial GET request was successful, which is indicated by a status code of 200. If it was successful, the code runs a loop for 399 iterations, which corresponds to fetching data for the first 400 pages of top-rated movies.

Within each iteration of the loop, the code sends a request to the API to retrieve the next page of top-rated movies and extracts relevant data such as movie ID, title, overview, release date, popularity, vote average, and vote count. This information is then added to a DataFrame called "temp_df".

At the end of each iteration, the data from "temp_df" is appended to another DataFrame called "df" using the .append() method. If the initial GET request was unsuccessful, indicated by a status code other than 200, the code prints an error message displaying the status code.

<code>if response.status_code == 200: </code> <br>
<code>	for i in range(1, 400): </code><br>
<code>		response = requests.get('https://api.themoviedb.org/3/\movie/top_rated?api_key=aaa7de53dcab3a19afed86880\f364e54&language=en-US&page={}'.format(i)) </code><br>
<code>		temp_df = pd.DataFrame(response.json()['results'])[['id', 'title', 'overview', 'release_date', 'popularity', 'vote_average', 'vote_count']] </code><br>
<code>		df = df.append(temp_df, ignore_index=True) </code><br>
<code>else: </code><br>
<code>	print('Error', response.status_code) </code><br>


<h3>Step 5: Print the first 5 rows of the Dataframe as confirmation</h3>
<p>
To view the first 5 rows of the dataframe, use the code: <br>
<code>df.head(5)</code>
</p><br>


<h3>Step 6: Converte the Dataframe to CSV and store it</h3>
From this step, we will save the dataframe to CSV file. The filed named as 'movie.csv'. The file will be downloaded inside our computer.Below are the code that we had applied.

<code> # Save the DataFrame as a CSV file</code><br>
<code>df.to_csv('movie_example1.csv', index=False)</code><br>

<code> # Download the CSV file to your local machine</code><br>
<code>files.download('movie_example1.csv')</code><br>
<br>

<h1>Upload the csv file to MongoDB</h1>
<h3>1. Create database</h3>
From this step, Database Name and Collection Name will be added according to our preference.
<p align = 'center'><img src="https://user-images.githubusercontent.com/95403713/230754290-26f04958-e1ae-43b8-b818-802336910fd3.png" alt="My Image"> </p>

<h3>2. Add data to the database</h3>
<p align = 'center'><img src="https://user-images.githubusercontent.com/95403713/230754298-aa7d6c5a-515f-4e87-80aa-a1d8402a30f7.png" alt="My Image"> </p>

<h3>3. Import CSV file to MongoDB</h3>
<p align = 'center'><img src="https://user-images.githubusercontent.com/95403713/230754314-6d918501-ad53-4e50-88c5-5e765cfca602.png" alt="My Image"> </p>


