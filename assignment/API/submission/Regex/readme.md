<div align="center">
  <img src="https://user-images.githubusercontent.com/120556342/231046603-021cdd4a-de06-4c33-b1d2-8ff7a46e2bfd.png"/>
</div>

<h1 align=center>🏥 Malaysia Daily Vaccination Registration API </h1>

This assignment requires gathering Malaysia vaccination registration data from the MyVaccine API. We use Python libraries to automate the retrieval and processing of data from the API and then save the data to a CSV file. After that, use the PyMongo library to save the data to MongoDB.

<h2 align=center>Group Members Regex<img width=30px; height=30px src="https://user-images.githubusercontent.com/120556342/215398734-609ba04a-88e5-44b5-9eaa-239ac8edd091.png"></h2>
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

## Contents📝
- 📑[Report](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/API/submission/Regex/Report_Regex.md)
- 💻[Code](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/API/submission/Regex/Vaccination.ipynb)
- 📂[CSV](https://github.com/drshahizan/special-topic-data-engineering/blob/main/assignment/API/submission/Regex/vaccination.csv)

## Implementation Summary
The Malaysia Daily Vaccination Registration API can be used to retrieve vaccination registration data and store it in CSV format. The libraries used are requests, json, and pandas. The retrieved data is converted to JSON format and saved in a DataFrame. The vaccination data is then saved to a CSV file. To store the CSV file in MongoDB, the pymongo and csv libraries are used. The CSV file is converted to a dictionary and inserted into the MongoDB collection using the insert_one() method. The data can be verified in MongoDB Compass.

## Result
We were able to retrieve data using the API and successfully upload it to MongoDB.
