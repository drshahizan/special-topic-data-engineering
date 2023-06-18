<h1>ChatGPT Sentiment Analysis</h1>


## Quick Start to the application	

Steps to start the project:

### 1. Clone this repository
Open your terminal or command prompt and run the following command:

```python
git clone https://github.com/drshahizan/learn-django.git](https://github.com/drshahizan/special-topic-data-engineering.git
```

### 2. CD to this project folder
Once you have cloned this repository, locate to this project folder:

```python
cd C:\Users\user\Desktop\GitHub\special-topic-data-engineering\project\submission\Gadgeteen\chatgpt_sentiment
```

### 3. Create a virtual environment
Once you have located to the folder, you can create a virtual environment by running the following command:

```python
virtualenv env
```

### 4. Active the virtual enviroment
Once you have created the virtual environment, you can activate virtual environment by running the following command:

```python
env\Scripts\activate
```

### 5. Install requirements libraries
Once you have activated the virtual environment, you can install the requirements libraries by running the following command:

```python
pip install -r requirements.txt
```

### 6. Create database tables
Once you have install the requirements libraries, you can create database tables by running the following command:

```python
python manage.py makemigrations
```

This command will create a new migration file in the migrations directory inside your app directory.

### 7. Apply database migrations
Once you have created the migration file, you can apply the migrations by running the following command:

```python
python manage.py migrate
```

This command will create the necessary database tables based on the models you have defined.

### 8. Run the server
Finally, you can run the development server by running the following command:

```python
python manage.py runserver
```

<b> You can now access the web app in browser: http://127.0.0.1:8000/ </b>
