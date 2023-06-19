<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# Visual Studio Code: develop web application using MongoDb and Django

To use Visual Studio Code to develop a web application using MongoDB and Django, you can follow these steps:

1. Install MongoDB: First, you need to install `MongoDB` on your computer. You can download and install MongoDB from the official MongoDB website.

2. Install Django: You also need to install `Django`, which is a Python web framework. You can install Django using pip by running the following command in the terminal:

    ``` python
    pip install Django
    ``` 
3. Install the Python extension for Visual Studio Code: To get the most out of Django development in Visual Studio Code, you can install the Python extension for Visual Studio Code. You can do this by going to the Extensions view `Ctrl + Shift + X` and searching for `Python`.

4. Create a new Django project: To create a new Django project, open the terminal in Visual Studio Code and run the following command:

    ``` python
    django-admin startproject myproject
    ```
    Replace `myproject` with the name of your project.


5. Install the Django MongoDB Engine: To use MongoDB with Django, you need to install the `Django MongoDB Engine`. You can install it using pip by running the following command in the terminal:
    ``` python
    pip install djongo
    ``` 
6. Configure the settings for your Django project: You need to configure the settings for your Django project to use MongoDB. Open the settings.py file in your Django project and add the following lines of code:

    ``` python
    DATABASES = {
        'default': {
            'ENGINE': 'djongo',
            'NAME': 'mydatabase',
        }
    }
    ``` 
    
    Replace `mydatabase` with the name of your MongoDB database.

7. Create a new Django app: To create a new Django app, open the terminal in Visual Studio Code and run the following command:

    ``` python
    python manage.py startapp myapp
    ``` 
    
    Replace `myapp` with the name of your app.

8. Define your models: Define your models in the models.py file in your Django app. You can use Django's model fields to define the fields for your MongoDB documents.

9. Create the MongoDB collections: To create the MongoDB collections for your models, run the following command in the terminal:

    ``` python
    python manage.py makemigrations
    python manage.py migrate
    ``` 

10. Start the Django development server: To start the Django development server, open the terminal in Visual Studio Code and run the following command:

    ``` python
    python manage.py runserver
    ``` 
    
    This will start the development server, and you can view your Django project by opening a web browser and navigating to `http://127.0.0.1:8000/`.

That's it! You're now ready to start developing your web application using MongoDB and Django in Visual Studio Code.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)


