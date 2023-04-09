<h1 align='center'>Malaysia Holiday API</h1>
<div align='center'>
<img width=300 src='https://media.istockphoto.com/id/1199876123/vector/young-woman-running-with-suitcase-and-flight-ticket-female-in-dress-with-luggage-bag.jpg?s=612x612&w=0&k=20&c=lPxzgUB1oZAatnY7YbfH9jWHOpZ9c-QnSvuxHjiKkJQ='>

<table>
  <tr>
   <th>Group members</th>
   <th>Matric. No</th>
  </tr>
  <tr>
   <td>Chloe Racquelmae Kennedy</td>
   <td>A20EC0026</td>
  </tr>
  <tr>
   <td>Kong Jia Rou</td>
   <td>A20EC0198</td>
  </tr>
  <tr>
   <td>Lee Cai Xuan</td>
   <td>A20EC0062</td>
  </tr>
  <tr>
   <td>Singthai Srisoi</td>
   <td>A20EC0147</td>
  </tr>
</table>
</div>

## Library used

The library we have used is `requests`, `json` and `pandas`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `json` is used to manipulate json file,
- `pandas` is used to convert json to csv

```python
import requests
import json
import pandas as pd
```

## Fetching data from holidayapi using their api
```python
year = "2022"
country = "MY"
api_key = "ce9d976d-726c-4eaa-b304-07cbc741d647"
url = "https://holidayapi.com/v1/holidays?pretty&country="+country+"&year="+year+"&key="+api_key
r = requests.get(url)
```

## Getting value in json format
```python
value = r.json()
value = value['holidays']
```

## Write into file
```python
json_file = open("data.json", "w")
json.dump(value, json_file, indent = 6)  
json_file.close()
```

## Convert to CSV file
```python
df = pd.read_json (r'/content/data.json')
df.to_csv (r'/content/data.csv', index = None)
```
