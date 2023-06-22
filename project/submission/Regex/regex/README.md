<h2 align="center"> Sales Analysis Dashboard of Shopee Supermarket </h2>

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

## Quick Start to the application	

Steps to start the project:

### 1. Clone this repository
Open your terminal or command prompt and run the following command to clone this project:

```python
git clone https://github.com/drshahizan/learn-django.git](https://github.com/drshahizan/special-topic-data-engineering.git
```

### 2. CD to this project folder
Once the repository is cloned, go to the project folder using the following command:

```python
cd C:\Users\user\Desktop\GitHub\special-topic-data-engineering\project\submission\Regex\regex
```

### 3. Create a virtual environment
In the project folder, create a virtual environment by running this command:

```python
virtualenv env
```

### 4. Active the virtual enviroment
Activate the virtual environment using the following command:

```python
env\Scripts\activate
```

### 5. Install requirements libraries
With the virtual environment activated, install the required libraries by running this command:

```python
pip install -r requirements.txt
```

### 6. Create database tables
Once the libraries are installed, create the database tables by executing the following command:

```python
python manage.py makemigrations
```

This command will generate a migration file in the migrations directory of your app.

### 7. Apply database migrations
Apply the migrations to create the necessary database tables using this command:

```python
python manage.py migrate
```

This command will create the necessary database tables based on the models you have defined.

### 8. Run the server
Finally, start the development server by running this command:

```python
python manage.py runserver
```

<b> You can now access the web app in browser: http://127.0.0.1:8000/ </b>

