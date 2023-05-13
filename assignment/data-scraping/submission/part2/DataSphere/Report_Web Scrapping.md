## Introduction 

The method of obtaining data from web pages is called web scraping. One of the most often extracted types of data from websites is text content.Typically, online scraping text material entails utilizing a software programme to retrieve the needed information from a website. Utilizing the website's APIs, will be used for this.
Once the text content has been extracted, it will be stored in a database and analyzed using a variety of tools and processes, such as sentiment analysis or natural language processing. Text content from websites can be scraped for a variety of reasons, including competition intelligence, content analysis, and market research.


## Steps in Web Scrapping 

### Step 1
Step 1 is installing Python packages using the pip package manager. By running this code, we are installing these packages on your system so that you can use them in your Python code.

```
!pip install selenium beautifulsoup4 pymongo requests
```

### Step 2
step 2 installs Chrome and ChromeDriver on a Linux system using the command-line package manager apt-get.

After installing Chrome, it downloads the latest version of ChromeDriver from the official Google ChromeDriver storage using wget and unzips the downloaded file using unzip. It then moves the chromedriver executable to the /usr/bin directory, changes the ownership to root, and sets the permissions to make it executable using chmod.

Thus, this code automates the installation process of Chrome and ChromeDriver on a Linux system, which is necessary for automating web browsing using the selenium package.

```
!apt-get update
!apt-get install -y wget curl unzip xvfb libxi6 libgconf-2-4

# install Chrome
!wget -q -O - https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb > google-chrome-stable_current_amd64.deb
!dpkg -i google-chrome-stable_current_amd64.deb
!apt-get -y -f install

# download and install ChromeDriver
!wget -q https://chromedriver.storage.googleapis.com/$(curl -s https://chromedriver.storage.googleapis.com/LATEST_RELEASE)/chromedriver_linux64.zip
!unzip chromedriver_linux64.zip
!mv chromedriver /usr/bin/chromedriver
!chown root:root /usr/bin/chromedriver
!chmod +x /usr/bin/chromedriver
```

### Step 3
Step 3 creates a connection to a MongoDB database called db01 hosted on the learningcluster.p8bbacm.mongodb.net server using the pymongo package.

It uses the MongoClient() method to connect to the MongoDB server, passing the connection string as an argument. The connection string includes the username (terence), password (qCZgfWgGHCBSqCqk), and the name of the database (test) to connect to.

Once connected, it selects the db01 database and assigns it to the db variable. It then creates a collection called GoogleScholar within the db01 database and assigns it to the collection variable.

Step 3 code is used for connecting to a MongoDB database and creating a collection for storing data retrieved from a website or an API.

```
import pymongo

client = pymongo.MongoClient("mongodb+srv://terence:qCZgfWgGHCBSqCqk@learningcluster.p8bbacm.mongodb.net/test")
db = client["db01"]
collection = db["GoogleScholar"]
```

### Step 4
Step 4 imports the pandas package and assigns it to the variable pd.
```
import pandas as pd
```

### Step 5
step 5 uses the selenium package to automate a web browser (Chrome) and scrape data from a Google Scholar page. Then, the code first imports the necessary packages and sets up the Chrome driver options, including headless browsing and disabling the sandbox and shared memory usage. It then sets the path to the ChromeDriver binary and starts the Chrome driver using the webdriver.Chrome() method, passing the options variable as an argument. Next, the code navigates to a specific UTM faculty page on Google Scholar using the get() method.Inside a try block, the code waits for the page to load using WebDriverWait() and then searches for an element using the find_elements() method. The code then iterates through each lecturer on the page and prints their name using find_element() and By.XPATH to locate the relevant element on the page. Finally, the code checks if there is a next button available, clicks it if it is enabled, and breaks the loop if it is not.If the code encounters a TimeoutException, it prints a message indicating that a captcha has been reached.
```

# test workin

from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import StaleElementReferenceException
from selenium.common.exceptions import TimeoutException
import time

# Set up options for the Chrome driver
options = webdriver.ChromeOptions()
options.add_argument('--headless')
options.add_argument('--no-sandbox')
options.add_argument('--disable-dev-shm-usage')

# set the path to the ChromeDriver binary
chrome_driver_path = '/usr/bin/chromedriver'

# Start the Chrome driver
driver = webdriver.Chrome('chromedriver',options=options)

# Navigate to UTM faculty page on Google Scholar
driver.get("https://scholar.google.com/citations?view_op=view_org&hl=en&org=14000212712167289655")


try:

  while True:

      # Wait for the page to load
      WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "gs_ai_t")))

      # Get the lecturers and amount of them on the page
      lecturers = driver.find_elements(By.CLASS_NAME, "gs_ai_t")
      amount_lect = len(lecturers)

      # Define words related to computer faculty
      words = ["computing", "computer"]

      # Create an empty dataframe with two columns named name and link for lecturers of computing faculty
      df = pd.DataFrame(columns=['Name', 'Link_2_Profile'])

      # Initialise a variable to save the number of lecturers
      numberlect = 0

      # Iterate over each lecturer
      for lecturer in lecturers:

          name_lect = lecturer.find_element(By.XPATH, "./child::h3[@class='gs_ai_name']")
          print(name_lect.text)
      
      # Check if there is a next button available
      footer = driver.find_element(By.CLASS_NAME, "gsc_pgn")
      next_button = footer.find_element(By.XPATH, "./child::button[@aria-label='Next']")
      
      
      if next_button.is_enabled():
        next_button.click()
      else:
        break
      
      
except TimeoutException:
  print()
  print()
  print('Captcha Reached')

```
#### Output : 
![outputss2](https://github.com/drshahizan/special-topic-data-engineering/assets/120614334/39509eed-2e5c-4f61-8c4e-f4d63920d679)

#### Output in MongoDB: 

![outputss1](https://github.com/drshahizan/special-topic-data-engineering/assets/120614334/369ab42d-7fc0-4e16-ae1c-4c9fe29b9b06)



