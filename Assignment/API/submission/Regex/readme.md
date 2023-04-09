<h1 align=center>🏥 Malaysia Daily Vaccination Registration API </h1>

<h2 align=center>Group Members <img width=30px; height=30px src="https://user-images.githubusercontent.com/120556342/215398734-609ba04a-88e5-44b5-9eaa-239ac8edd091.png"></h2>
<table align=center>
  <tr>
    <th>Name</th>
    <th>Matric</th>
  </tr>
  <tr>
    <td>HONG PEI GEOK</td>
    <td>A20EC0044</td>
  </tr>
  <tr>
    <td>MADIHAH BINTI CHE ZABRI</td>
    <td>A20EC0074</td>
  </tr>
    <tr>
    <td>MAIZATUL AFRINA SAFIAH BINTI SAIFUL AZWAN</td>
    <td>A20EC0204</td>
  </tr>
    <tr>
    <td>NURARISSA DAYANA BINTI MOHD SUKRI</td>
    <td>A20EC0120</td>
  </tr>
  <tr>
    <td>SAKINAH AL'IZZAH BINTI MOHD ASRI</td>
    <td>A20EC0142</td>
  </tr>
</table>


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

<h3>Step 4: Save the vaccination data to a CSV file</h3>

```python
df.to_csv('vaccination.csv',index=False)
```
