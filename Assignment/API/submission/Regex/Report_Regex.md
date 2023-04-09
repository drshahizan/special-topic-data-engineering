<h1> Malaysia Daily Vaccination Registration API </h1>

<h2>Retrieve Data From API & Save in CSV Format</h2>
<h3>Step 1: Import the libraries</h3>

The libraries we have used are `requests`, `json` and `pandas`

- `requests` is used to send a HTTP to server and retrieve data from it,
- `json` is used to manipulate json file,
- `pandas` is used to convert json to csv

```python
import requests
import json
import pandas as pd
```

<h3>Step 2: Fetching data using Vaccination Registration API</h3>

```python
response_API = requests.get('https://myvaccination-backend.vercel.app/api/vacc_reg')
data = response_API.text
```

<h3>Step 3: Load data in json format</h3>

```python
dic = json.loads(data)
dic = dic['modifiedData']
```

<h3>Step 4: Save in DataFrame</h3>

```python
df = pd.DataFrame(dic)
```

<h3>Step 5: Save the vaccination data to a CSV file</h3>

```python
df.to_csv('vaccination.csv',index=False)
```

