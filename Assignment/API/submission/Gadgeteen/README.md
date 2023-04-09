<h1 align="center"> Open Weather API </h1>

## Objective

The objective of this assignment is to collect weather data from the OpenWeather API using Python, and then save the collected data as an Excel file and also in MongoDB. This can be useful for a variety of purposes, such as analyzing weather trends or building weather forecasting models.

The project requires the use of an API key from OpenWeather, which is used to connect to their API and collect weather data. Once the data is collected, it is saved as an Excel file using Python's pandas library, and also saved in MongoDB using the PyMongo library.

Overall, this assignment requires knowledge of Python programming, working with APIs, data manipulation with pandas, and working with MongoDB.

<h2 align="center">
  Group Name
  <br>
</h2>

<p align="center">
  <a>Gadgeteen</a><br>
</p>

<h2 align="center">
  Group Members
  <br>
</h2>
<p align="center">
<table align="center">
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <th>GOO YE JUI</th>
    <th>A20EC0191</th>
  </tr>
    <tr>
    <th>KELVIN EE</th>
    <th>A20EC0195</th>
  </tr>
    <tr>
    <th>LEE MING QI</th>
    <th>A20EC0064</th>
  </tr>
    <tr>
    <th>LEE JIA XIAN</th>
    <th>A20EC0191</th>
  </tr>
    <tr>
    <th>ONG HAN WAH</th>
    <th>A20EC0129</th>
  </tr>
</table>
</p>


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

## Fetching data using Open Weather API

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

## Load data into CSV file
```python
# Save the weather data to a CSV file
with open("weather_data.csv", "w", newline="") as csvfile:
    writer = csv.writer(csvfile)
    writer.writerow(["State", "Date and Time", "Temperature (C)", "Humidity (%)", "Wind Speed (m/s)", "Description"])
    writer.writerows(weather_data)
    
# Print a message indicating that the data has been saved
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
## Python MongoDB PIP Installation using PyMongo
```python
pip install pymongo
```
