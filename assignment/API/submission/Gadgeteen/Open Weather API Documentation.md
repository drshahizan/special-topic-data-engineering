# Open Weather API Documentation

- [Library](#Library-used)
- [Fetching data using Open Weather API](#Open-Weather-API-Documentation)
- [Loop through each state and retrieve the weather data](#Loop-through-each-state-and-retrieve-the-weather-data)
- [Save the weather data to a CSV file](#Save-the-weather-data-to-a-CSV-file)
- [Store the collected data in MongoDB database](#Store-the-collected-data-in-MongoDB-database)

## Library used

The library we have used is `requests`, `csv` , `datetime` and `json`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `csv` is used to manipulate csv,
- `json` is used to manipulate csv,
- `datetime` is used to get the current date and time

```python
import requests
import json
import csv
from datetime import datetime
```

## Open Weather API Documentation

1. Go to the OpenWeatherMap website at <a href="https://openweathermap.org/">https://openweathermap.org/</a> and click on the "Sign up" button in the top right corner of the page.

2. Fill in your details, including your email address and a password, and then click on the "Create Account" button.

3. Once you have created an account, log in to the OpenWeatherMap website using your email address and password.

4. Click on the "API Keys" tab in the navigation menu at the top of the page.

5. Click on the "Generate new API key" button.

6. Give your API key a name and select the API plan that you want to use.

7. Click on the "Generate" button to create your API key.

8. Your API key will now be displayed on the screen. Make sure to copy it and keep it in a safe place, as you will need it to access the OpenWeatherMap API.

<div align="center">
  <img src="https://user-images.githubusercontent.com/95162273/230924187-eb187d9b-99f9-453c-90b7-522bb709d24d.png" alt = "Open Weather API logo" width=900/>
</div>

9. Paste your API Key in the code below.

```python
# Enter your API key here
api_key = "d818e156d080744b840822d35e60eefe"

# Define the states and their respective coordinates
states = {
    "Johor": {"lat": 1.9344, "lon": 103.3587},
    "Kedah": {"lat": 6.1254, "lon": 100.3673},
    "Kelantan": {"lat": 6.1274, "lon": 102.2385},
    "Kuala Lumpur": {"lat": 3.1390, "lon": 101.6869},
    "Labuan": {"lat": 5.2767, "lon": 115.2417},
    "Melaka": {"lat": 2.1896, "lon": 102.2501},
    "Negeri Sembilan": {"lat": 2.7297, "lon": 101.9381},
    "Pahang": {"lat": 3.9319, "lon": 103.0044},
    "Penang": {"lat": 5.4149, "lon": 100.3298},
    "Perak": {"lat": 4.5908, "lon": 101.0804},
    "Perlis": {"lat": 6.4553, "lon": 100.4141},
    "Sabah": {"lat": 5.9804, "lon": 116.0735},
    "Sarawak": {"lat": 1.5497, "lon": 110.3634},
    "Selangor": {"lat": 3.0738, "lon": 101.5183},
    "Terengganu": {"lat": 5.3117, "lon": 103.1324}
}

# Define the API endpoint URL
url = "https://api.openweathermap.org/data/2.5/weather"
```

## Get the current date and time
```python
current_time = datetime.now().strftime("%d/%m/%Y %H:%M:%S")
```

## Create a list to store the weather data for each state
```python
weather_data = []
```

## Loop through each state and retrieve the weather data
```python
for state, coords in states.items():
    # Define the API parameters
    params = {
        "lat": coords["lat"],
        "lon": coords["lon"],
        "appid": api_key,
        "units": "metric"
    }
    
    # Send a GET request to the API endpoint
    response = requests.get(url, params=params)

    # Check for any API errors
    if response.status_code != 200:
        print(f"Error: {response.json()['message']}")
        continue

    # Parse the JSON response
    data = json.loads(response.content)

    # Retrieve the necessary weather information
    temperature = data.get("main", {}).get("temp")
    humidity = data.get("main", {}).get("humidity")
    wind_speed = data.get("wind", {}).get("speed")
    description = data.get("weather", [{}])[0].get("description")

    # Add the weather data to the list
    weather_data.append([state, current_time, temperature, humidity, wind_speed, description])
```

## Save the weather data to a CSV file
```python
with open("weather_data.csv", "w", newline="") as csvfile:
    writer = csv.writer(csvfile)
    writer.writerow(["State", "Date and Time", "Temperature (C)", "Humidity (%)", "Wind Speed (m/s)", "Description"])
    writer.writerows(weather_data)
```

## Print a message indicating that the data has been saved
```python
print("Weather data has been saved to weather_data.csv")
```

## Print the data collected from the API

```python
for state, coords in states.items():
      # Print the weather information for the state
    print(f"State: {state}")
    print(f"Date and Time: {current_time}")
    print(f"Temperature: {temperature}°C")
    print(f"Humidity: {humidity}%")
    print(f"Wind speed: {wind_speed} m/s")
    print(f"Description: {description}")
    print("="*30)
```

## Store the collected data in MongoDB database

Install and import pymongo library to interact with the MongoDB database.

```python
pip install pymongo
```

```python
import pymongo
```

Get the URI for your MongoDB database:

1. Go to the MongoDB Atlas dashboard (https://cloud.mongodb.com/).
2. Click on the "Clusters" option in the left-hand menu.
3. Click on the "Connect" button for the cluster you want to connect to.
4. Select "Connect Your Application" in the Connection Methods tab.
5. Choose your driver and version.
6. Copy the URI string and paste it into your application code.

  > Note that the URI string will include a username and password, as well as the name of the database and the replica set (if applicable). Make sure to keep this information secure and do not share it publicly.

Create a connection to the MongoDB database using the pymongo library and MongoDB database credentials including the Mongo URI, database name and collection name.

```python
# Create a new MongoDB client
client = pymongo.MongoClient(mongo_uri)

# Select the database
db = client["<database>"]

# Select the collection
collection = db["<collection>"]
```

After collecting the data from API, arrange the data needed in dictionary format and use `insert_one()` method to insert the document into the collection of the database.

```python
document = {
    "state": state,
    "date_time": current_time,
    "temperature": temperature,
    "humidity": humidity,
    "wind_speed": wind_speed,
    "description": description
}

collection.insert_one(document)
```

The image below shows the MongoDB Compass screenshot of documents successfully inserted into the collection of database.

![MongoDB_Compass_Screenshot](https://user-images.githubusercontent.com/69034742/230757635-17ba0b13-b75d-4661-8750-210cf43c9692.png)
