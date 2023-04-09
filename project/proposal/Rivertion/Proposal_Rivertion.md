<h1 align='center'><b>Image Analysis for Rotten Fruit Detection 🍇🍉🍎🍐🍓</b></h1> 

## Table of Contents
* [📜 Executive Summary](#-executive-summary)
* [📝 Background](#-background)
* [🎯 Goals and Objectives](#-goals-and-objectives)
* [🔍 Scope](#-scope)
* [📄 Methodology](#-methodology)
* [⚙️ System Architecture](#-system-architecture)
* [🛑 Risks and Limitations](#-risks-and-limitations)
* [⏳ Deliverables and Milestones](#-deliverables-and-milestones)
* [📚 Resources](#-resources)
* [🧰 Technical Specifications](#-technical-specifications)
* [🏁 Timeline and Deliverables](#-timeline-and-deliverables)
* [📄 Conclusion](#-conclusion)

## 📜 Executive Summary

Rotten fruits can cause significant problems for the fruit industry, leading to economic losses, food waste, and even potential health risks for consumers. Manual inspection for detecting rotten fruits can be time-consuming and often unreliable, making it difficult to ensure consistent fruit quality. However, recent advancements in machine learning algorithms and computer vision have opened up new opportunities for improving the accuracy and efficiency of image analysis for fruit quality control.

This project aims to develop an image analysis system for detecting rotten fruits that utilizes state-of-the-art machine learning techniques. The system will analyze images of fruits and identify which ones are in a state of decay, enabling more efficient and accurate fruit quality control. This will have significant benefits for the fruit industry, as it will allow for improved quality control and reduced waste.

To achieve this goal, the project will collect a diverse dataset of fruit images, including both healthy and rotten fruits. The dataset will be preprocessed to enhance image quality and extract features relevant to fruit quality. The team will then train and evaluate a deep learning model, such as a convolutional neural network, to accurately classify fruits as healthy or rotten.

The system will have a user-friendly interface, allowing for easy input of fruit images and displaying the results of the analysis. The performance of the system will be validated using a separate test dataset, and its accuracy will be compared to existing methods for fruit quality control.

In summary, this project aims to develop an accurate and reliable system for detecting rotten fruits using image analysis, which will have significant benefits for the fruit industry. By utilizing machine learning algorithms, the system will enable more efficient and consistent fruit quality control, reducing waste and improving the safety of food products.


## 📝 Background:
<p align="center">
<img src="https://icanandiam.com/wp-content/uploads/2022/03/72596-rotten-fruit-oranges-getty-delfinkina-1200.1200w.tn_.jpg" alt="Playground" height="250"></img>
</p>

Rotten fruits are a significant problem in the fruit industry, leading to economic losses, food waste, and even potential health risks for consumers. The detection of rotten fruits is a crucial step in the fruit production chain to ensure that only high-quality fruits reach the market. Manual inspection by human operators is the most common method used for detecting rotten fruits, but it can be time-consuming, labor-intensive, and subject to human error. Automated systems for detecting rotten fruits using image analysis have been proposed as a more efficient and reliable alternative to manual inspection.

Early attempts at automated fruit quality inspection relied on simple image processing techniques such as color and texture analysis. These techniques could only achieve limited accuracy and were sensitive to lighting conditions and camera angles. In recent years, advances in machine learning algorithms and computer vision have enabled more sophisticated approaches for fruit quality inspection. Convolutional neural networks (CNNs) have been shown to be highly effective for image classification tasks, including fruit quality inspection.

Several studies have investigated the use of CNNs for detecting rotten fruits. For example, one study used a deep learning approach to classify apples as healthy or rotten based on images taken from different viewpoints. Another study proposed a method for detecting rot in apples using a combination of texture and color features.

Despite the progress made in automated fruit quality inspection, several challenges still need to be addressed. One major  challenge is the integration of image analysis systems into the fruit production chain, ensuring that the system is scalable, user-friendly, and cost-effective.

In summary, automated systems for detecting rotten fruits using image analysis have the potential to improve the efficiency and accuracy of fruit quality control. Recent advancements in machine learning algorithms and computer vision have enabled more sophisticated approaches for fruit quality inspection. However, several challenges still need to be addressed, including the development of a diverse image dataset and the integration of image analysis systems into the fruit production chain.


## 🎯 Goals and Objectives:

Goals:
The primary goal of this project is to develop an accurate and reliable system for detecting rotten fruits using image analysis. The specific objectives include:

1. Collecting a diverse dataset of fruit images, including both healthy and rotten fruits.
2. Preprocessing the image dataset to enhance image quality and extract features relevant to fruit quality.
3. Training and evaluating a deep learning model, such as a convolutional neural network, to accurately classify fruits as healthy or rotten.
4. Developing a user-friendly interface for the system, allowing for easy input of fruit images and displaying the results of the analysis.
5. Validating the performance of the system using a separate test dataset and comparing its accuracy to existing methods for fruit quality control.

By achieving these objectives, this project will provide a valuable tool for the fruit industry, allowing for improved quality control and reduced waste.


## 🔍 Scope: 
<p align="center">
<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/39749ec2da99317d7cc519446651431dc14ac85d/project/proposal/Rivertion/image/ss.png" alt="Scope" height="400"></img>
</p>

The scope of this project is to develop an image analysis system for detecting rotten fruits using machine learning algorithms. The system will analyze images of fruits and accurately identify which ones are in a state of decay. The project will involve the following activities:

Collecting a diverse dataset of fruit images, including both healthy and rotten fruits, with a range of lighting conditions and camera angles.
Preprocessing the image dataset to enhance image quality and extract features relevant to fruit quality.
Designing and implementing a deep learning model, such as a convolutional neural network, to accurately classify fruits as healthy or rotten.
Developing a user-friendly interface for the system, allowing for easy input of fruit images and displaying the results of the analysis.
Validating the performance of the system using a separate test dataset and comparing its accuracy to existing methods for fruit quality control.
The project will focus on the detection of rotten fruits in images, and will not include physical inspection of fruits or other aspects of fruit quality control. The project will use existing tools and libraries for machine learning and image analysis, rather than developing new algorithms from scratch. The project will be limited to the detection of rotten fruits in a controlled laboratory environment, and the system's performance may vary in real-world settings.

The project team will consist of machine learning experts, computer vision specialists, and domain experts in the fruit industry. The project will be conducted over a period of six months and will be evaluated based on the accuracy and efficiency of the developed system. The project's deliverables will include a report detailing the methodology, results, and conclusions of the project, as well as a functional prototype of the image analysis system.


## 📄 Methodology:

The proposed data science project for developing a Image Analysis System for Fruit Rotten Detection will be executed using the following methodology:

1. ``Data Collection``
  	<ul>
 		<li>The project will use the Google API to scrape fruit images from the internet. Specifically, the project will utilize Google's Custom Search JSON API to search for fruit images and download them in bulk. The API will be configured to search for a variety of fruits and retrieve both healthy and rotten images. Each image will be labeled as healthy or rotten for training the model.</li>
  	</ul>
2. ``Data Cleaning and Preprocessing``
  	<ul>
  		<li>The collected dataset will be preprocessed to enhance image quality and extract features relevant to fruit quality. Preprocessing steps may include resizing, cropping, normalization, and color correction to ensure consistency across all images. The images will also be converted to grayscale and segmented to extract fruit regions from the background. Feature extraction techniques such as Histogram of Oriented Gradients (HOG) and Local Binary Patterns (LBP) will be applied to extract relevant features from the segmented fruit regions.</li>
  	</ul>
3. ``Model Selection and Training``
  	<ul>
  		<li>A deep learning model, such as a Convolutional Neural Network (CNN), will be trained on the preprocessed dataset to accurately classify fruits as healthy or rotten. The model will be optimized by adjusting hyperparameters, such as learning rate, batch size, and number of epochs. A separate validation dataset will be used to evaluate the model's performance and make any necessary adjustments.</li>
  	</ul>
4. ``Model Evaluation and Comparison``
  	<ul>
  		<li>The accuracy of the developed system will be evaluated using a separate test dataset that was not used during the training or validation process. The performance of the system will be compared to existing methods for fruit quality control, such as manual inspection and traditional image processing techniques.</li>
  	</ul>
5. ``Data Visualization``
  	<ul>
  		<li>The results of the analysis will be displayed in a user-friendly interface, allowing for easy input of fruit images and displaying the results of the analysis. The system may also generate visualizations, such as heatmaps or bar charts, to provide insights into the performance of the model.</li>
  	</ul>


## ⚙️ System Architecture:

The system architecture for rotten fruit detection using image analysis includes several components that work together to perform the task of detecting rotten fruits in images. The proposed system architecture is as follows:

<img src="https://github.com/drshahizan/special-topic-data-engineering/blob/028ad0e6b1ad457de7de210b7da3759020e2e23f/project/proposal/Rivertion/image/system_architecture.jpg" alt="SystemArchitecture"></img>


| No. | Components | Description |
| ------------- | ------------- | ------------- |
| 1. | Image Acquisition | The first step in the process is to acquire the images of the fruits. This can be done using web scraping or API. These images will be processed and analyzed to detect the presence of any rotten fruit. |
| 2. | Pre-processing | The acquired images will be pre-processed to remove any noise or artifacts that may interfere with the image analysis process. This may include resizing, cropping, and normalization. |
| 3. | Image Analysis | The pre-processed images will be analyzed to detect the presence of any rotten fruit using image analysis techniques. This may include feature extraction. |
| 4. | Storage and Management | The analyzed images and their corresponding results will be stored in a MongoDB database. MongoDB is a NoSQL database that is highly scalable and flexible, making it a suitable choice for storing large volumes of image data. |
| 5. | Machine Learning | A deep learning model, such as a convolutional neural network, will be trained on the preprocessed image dataset using TensorFlow or Keras. |
| 6. | Data Visualization | Data analysis and visualization tools such as Python and R will be used to analyze the data stored in the MongoDB database. This will enable the identification of trends and patterns in the data that can be used to improve the accuracy of the system. |


## 🛑 Risks and Limitations:

Even though analyzing rotten fruit images gives a lot of advantages, this process also poses several risks and limitations that should be considered. Below are points for technical, financial and legal risks:

<ol>
	<li> Technical Risks: </li>
<ul>
  <li> Accuracy: Image analysis algorithms rely on accurate and reliable data to make accurate predictions. However, variations in lighting, colors, and textures can affect the accuracy of the predictions. In addition, different types of fruits may have different shapes and sizes, making it challenging to create a one-size-fits-all algorithm for fruit detection.</li>
  <li> False positives and false negatives: Image analysis algorithms can produce false positives (detecting fruit as rotten when it is not) and false negatives (failing to detect rotten fruit). This can lead to unnecessary waste of good fruit or contamination of batches of fruit, resulting in significant costs.</li>
  <li> Hardware limitations: Image analysis requires a high-resolution camera and a powerful computer with advanced image processing capabilities, which can be expensive and require specialized expertise to set up and maintain.</li>
</ul>
	<li> Financial Risks: </li>
<ul>
  <li> Equipment and software costs: Implementing image analysis requires an initial investment in high-quality cameras, image processing software, and other hardware. The cost of these components can be significant, depending on the size and complexity of the fruit processing operation.</li>
  <li> Labor costs: Even with image analysis, there may still be a need for human labor to sort and handle the fruit, which can add to the overall cost of the process.</li>
</ul>
	<li> Legal Risks: </li>
<ul>
  <li> Liability: The use of image analysis for fruit detection does not eliminate the need to comply with food safety regulations and standards. If contaminated or rotten fruit is not detected and removed, it can lead to legal liabilities related to food safety and product liability.</li>
  <li> Data privacy: Image analysis involves the collection and storage of data, which may include personal or sensitive information. The misuse or mishandling of this data can result in legal liabilities related to data privacy and security.</li>
</ul>
</ol>

## ⏳ Deliverables and Milestones:

<table border="1" align="center">
  <tr>
    <th>Deliverables and Milestones</th>
    <th>Timeframe</th>
  </tr>
  <tr>
    <td>Planning and Requirements Gathering</td>
    <td>Week 1-2</td>
  </tr>
  <tr>
    <td>Data Exploration and Cleaning</td>
    <td>Week 3-5</td>
  </tr>
  <tr>
    <td>Feature Engineering</td>
    <td>Week 6</td>
  </tr>
  <tr>
    <td>Model Selection and Training</td>
    <td>Week 7-9</td>
  </tr>
  <tr>
    <td>Model Evaluation and Refinement</td>
    <td>Week 10</td>
  </tr>
  <tr>
    <td>Dashboard Development</td>
    <td>Week 11-12</td>
  </tr>
  <tr>
    <td>Deployment and Documentation</td>
    <td>Week 13-14</td>
  </tr>
</table>



## 📚 Resources:

<ol>
		<li>Staff:</li>
<ul>
		<li>Project Manager: responsible for managing the project timeline, ensuring milestones are met, and overseeing the work of the team.</li>
		<li>Data Scientist(s): responsible for data collection, preprocessing, modeling, and evaluation.</li>
		<li>Data Engineer(s): responsible for setting up the data infrastructure, managing data pipelines, and ensuring data quality.</li>
		<li>UI/UX Designer: responsible for designing the user interface and ensuring a seamless user experience.</li>
		<li>Quality Assurance Engineer: responsible for testing the system, identifying bugs, and ensuring the system is working correctly.</li>
		<li>Subject Matter Expert(s): responsible for providing domain expertise on fruit quality control and advising on dataset collection and annotation.</li>
</ul>
		<li>Equipment:</li>
<ul>
		<li>High-performance computing infrastructure: required for training and evaluating deep learning models.</li>
		<li>High-quality cameras: required for capturing high-resolution fruit images.</li>
		<li>Workstations/laptops: required for data preprocessing, modeling, and development.</li>
	</ul>
		<li>Software:</li>
	<ul>
		<li>Python: required for data processing, modeling, and evaluation.</li>
		<li>MongoDB: require for storing the data collected</li>
		<li>Deep learning frameworks such as TensorFlow, PyTorch, or Keras: required for developing deep learning models.</li>
		<li>Image processing libraries such as OpenCV: required for preprocessing and analyzing images.</li>
		<li>Version control systems such as Git: required for code management.</li>
		<li>User interface development frameworks such as React or Angular: required for developing a user-friendly interface.</li>
		<li>Cloud services such as Amazon Web Services or Google Cloud Platform: required for hosting the system and running computations.</li>
	</ul>
		<li>Other Expenses:</li>
	<ul>
		<li>Data collection and annotation: expenses related to collecting and annotating the fruit image dataset.</li>
		<li>Licensing fees: expenses related to purchasing licenses for software or datasets.</li>
		<li>Travel expenses: expenses related to attending conferences or meetings related to the project.</li>
		<li>Miscellaneous expenses: expenses related to hardware maintenance, data storage, or other unforeseen costs.</li>
	</ul>
</ol>

## 🧰 Technical Specifications:

<table>
  <tr>
    <th align= "left">Data sources</th>
    <td>The data source for the proposed data science project will be fruit images. These images will be acquired using web scrapping method from Google API. </td>
  </tr>
  <tr>
    <th align= "left">Data schema</th>
    <td>The data schema will include the following fields:
	    <li>Image: The original fruit image</li><li>Pre-processed Image: The image after pre-processing</li><li>Result: The analysis result (rotten or not rotten)</li></td>
  </tr>
  <tr>
    <th align= "left">Data transformations</th>
    <td>The following data transformations will be applied:
	  <li>Pre-processing: Image resizing, cropping, and normalization</li><li>Image Analysis: Image segmentation, feature extraction, and classification</li></td>
  </tr>
  <tr>
    <th align= "left">Machine learning algorithms</th>
    <td>The following machine learning algorithms will be used for image analysis:
	<li>Convolutional Neural Network (CNN) for feature extraction</li>
	<li>K-Nearest Neighbors (KNN) for classification</li>
</td>
  </tr>
  <tr>
    <th align= "left">Data visualization tools</th>
    <td>MongoDB charts, Python's Matplotlib and Seaborn libraries</td>
  </tr>
  <tr>
    <th align= "left">Programming language</th>
    <td>Python, MongoDB Query Language (MQL), OpenCV, Keras, and TensorFlow frameworks for image processing and machine learning</td>
  </tr>
  <tr>
    <th align= "left">Frameworks</th>
    <td>TensorFlow, Keras</td>
  </tr>
  <tr>
    <th align= "left">Libraries</th>
    <td>Matplotlib, Seaborn, Scikit learn, Numpy</td>
  </tr>
  <tr>
    <th align= "left">Hardware & software requirements</th>
    <td>
      <ul>
        <li>RAM: 8GB or higher</li>
        <li>Storage: At least 500GB of storage</li>
        <li> Windows operating system (recomended) installed with all softwares mentioned such as MongoDB and Django</li>
      </ul>
    </td>
  </tr>
  <tr>
    <th align= "left">Data security measures</th>
    <td>
	  <ul>
	    <li>Password protection and encryption for the MongoDB database</li>
	    <li>Use of secure data transmission protocols such as SSL/TLS for data transfer</li>
	    <li>Regular backups and disaster recovery planning</li>
	  </ul>
	</td>
  </tr>
</table>

## 🏁 Timeline and Deliverables: 

<div class="gantt">

  ```mermaid
gantt
    title Image Analysis for Rotten Fruit Detection Gantt Chart
    dateFormat  YYYY-MM-DD
    section Planning and Requirements Gatherings
    Requirements Gatherings  :2023-03-19 , 14d
  
    section Data Exploration and Cleaning
    Data Collection            :2023-04-02  , 10d
    Data Cleaning              :2023-04-12 , 6d
    Data Analysis              :2023-04-18 , 5d
  
    section Feature Engineering
    Features identification        :2023-04-23 , 7d
 
    section Model Selection and Training
    Model Selection        :2023-04-30 , 7d
    Model Training     :2023-05-07 , 7d
	
    section Model Evaluation and Refinement
    Model Evaluation        :2023-05-08 , 2d
    Model Refinement        :2023-05-10 , 3d
   
    section Dashboard development
    Dashboard development              :2023-05-14 , 14d
    Testing     :2023-05-28 , 2d
  
    section Deployment and documentation
    Deployment     :2023-05-29  , 15d
    Documentation     :2023-06-13 , 7d
  
  ```
  </div>



<p>Deliverables and Milestones:</p>
<ol>
	<li>Planning and Requirements Gathering (Week 1-2):</li>
	<ul>
		<li>Define project objectives and goals</li>
		<li>Identify data sources and collection methods</li>
		<li>Determine hardware and software requirements</li>
		<li>Finalize project plan and timeline</li>
		<li>Deliverable: Project plan and timeline</li>
	</ul><br>
		<li>Data Exploration and Cleaning (Week 3-5):</li>
	<ul>
		<li>Gather and preprocess a diverse dataset of fruit images, including both healthy and rotten fruits, with a range of lighting conditions and camera angles</li>
		<li>Analyze and visualize the dataset to identify data quality issues and outliers</li>
		<li>Clean and normalize the dataset to prepare it for feature engineering</li>
		<li>Deliverable: Cleaned dataset</li>
	</ul><br>
		<li>Feature Engineering (Week 6):</li>
	<ul>
		<li>Extract relevant features from the image dataset, such as color and texture</li>
		<li>Preprocess the features to reduce dimensionality and optimize performance</li>
		<li>Deliverable: Feature set</li>
	</ul><br>
		<li>Model Selection and Training (Week 7-9):</li>
	<ul>
		<li>Research and evaluate different deep learning models, such as convolutional neural networks, for fruit quality classification</li>
		<li>Train the selected model on the feature set using appropriate hyperparameters and optimization techniques</li>
		<li>Monitor and tune model performance as needed</li>
		<li>Deliverable: Trained deep learning model</li>
	</ul><br>
		<li>Model Evaluation and Refinement (Week 10):</li>
	<ul>
		<li>Evaluate the performance of the trained model using a separate test dataset</li>
		<li>Refine the model as needed to improve accuracy and reduce false positives/negatives</li>
		<li>Deliverable: Optimized deep learning model</li>
	</ul><br>
		<li>Dashboard Development (Week 11-12):</li>
	<ul>
		<li>Develop a user-friendly interface for the system to allow for easy input of fruit images and displaying the results of the analysis</li>
		<li>Incorporate visualization tools to help users interpret results</li>
		<li>Deliverable: Fruit quality control dashboard</li>
	</ul><br>
		<li>Deployment and Documentation (Week 13-14):</li>
	<ul>
		<li>Integrate the fruit quality control dashboard into the fruit production chain</li>
		<li>Develop documentation for the system, including user guides and technical manuals</li>
		<li>Conduct final testing and quality assurance checks to ensure the system is scalable, user-friendly, and cost-effective</li>
		<li>Deliverable: Deployed fruit quality control system with documentation</li>
	</ul><br>
	<p>Quality Assurance and Testing Procedures:
		To ensure the quality and accuracy of the system, the following procedures will be followed:
	</p>
	<ul>
		<li>Regular testing and evaluation of the deep learning model using a separate test dataset</li>
		<li>Continuous monitoring and tuning of model performance to minimize false positives/negatives</li>
		<li>Integration of visualization tools to help users interpret results</li>
		<li>User acceptance testing and feedback to ensure the dashboard is user-friendly and meets industry standards</li>
		<li>Final testing and quality assurance checks before deployment to ensure the system is scalable, reliable, and cost-effective.</li>
	</ul>
</ol>


## 📄 Conclusion:

In conclusion, the proposed solution of developing an image analysis system for detecting rotten fruits, utilizing state-of-the-art machine learning techniques, can significantly benefit the fruit industry by improving fruit quality control and reducing waste. The project aims to collect a diverse dataset of fruit images, preprocess them to enhance image quality and extract features relevant to fruit quality, train and evaluate a deep learning model to classify fruits as healthy or rotten, and develop a user-friendly interface for the system. The project has several potential limitations and challenges, such as the integration of the system into the fruit production chain. However, recent advancements in machine learning algorithms and computer vision have enabled more sophisticated approaches for fruit quality inspection, making this project highly promising.

Therefore, we urge decision-makers in the fruit industry to approve this proposal and proceed with the project. By achieving the proposed objectives, this project will provide a valuable tool for the fruit industry, allowing for improved quality control and reduced waste, which will have a significant impact on the economic, environmental, and social sustainability of the industry.
