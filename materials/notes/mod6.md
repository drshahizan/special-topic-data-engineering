<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/special-topic-data-engineering)


# Module 6: Feature Engineering

Don't forget to hit the :star: if you like this repo.

### Group: DataAce
<table>
  <tr>
    <th>Name</th>
    <th>Matric No</th>
  </tr>
  <tr>
    <td>Myza Nazifa binti Nazry</td>
    <td>A20EC0219</td>
  </tr>
  <tr>
    <td>Nur Izzah Mardhiah binti Rashidi</td>
    <td>A20EC0116</td>
  </tr>
    <tr>
    <td>Amirah Raihanah binti Abdul Rahim</td>
    <td>A20EC0182</td>
  </tr>
    <tr>
    <td>Radin Dafina binti Radin Zulkar Nain</td>
    <td>A20EC0135</td>
  </tr>
</table>

### Contents:
#### Notes
- [What is Feature Engineering — Importance, Tools and Techniques for Machine Learning](https://towardsdatascience.com/what-is-feature-engineering-importance-tools-and-techniques-for-machine-learning-2080b0269f10#:~:text=Feature%20engineering%20is%20a%20machine,while%20also%20enhancing%20model%20accuracy.)
- [Feature Engineering for Machine Learning](https://www.javatpoint.com/feature-engineering-for-machine-learning)
- [Discover Feature Engineering, How to Engineer Features and How to Get Good at It](https://machinelearningmastery.com/discover-feature-engineering-how-to-engineer-features-and-how-to-get-good-at-it/)

## Definition
What is Feature Engineering?


Firstly, we will understand the first definition. Feature engineering is a machine learning technique that leverages data to create new variables that aren’t in the training set. It can produce new features for both supervised and unsupervised learning, with the goal of simplifying and speeding up data transformations while also enhancing model accuracy. Feature engineering is required when working with machine learning models. Regardless of the data or architecture, a terrible feature will have a direct impact on your model.

To understand better, Feature engineering is the pre-processing step of machine learning, which extracts features from raw data. It helps to represent an underlying problem to predictive models in a better way, which as a result, improve the accuracy of the model for unseen data. The predictive model contains predictor variables and an outcome variable, and while the feature engineering process selects the most useful predictor variables for the model.


<img width="523" alt="image" src="https://user-images.githubusercontent.com/73205963/230713947-9ff1c216-9643-4030-8f13-2349422d3be1.png">

Since 2016, automated feature engineering is also used in different machine learning software that helps in automatically extracting features from raw data. Feature engineering in ML contains mainly four processes: Feature Creation, Transformations, Feature Extraction, and Feature Selection.

## Importance of Feature Engineering
Feature engineering refers to the process of designing artificial features into an algorithm. These artificial features are then used by that algorithm in order to improve its performance, or in other words reap better results. Data scientists spend most of their time with data, and it becomes important to make models accurate.

When feature engineering activities are done correctly, the resulting dataset is optimal and contains all of the important factors that affect the business problem. As a result of these datasets, the most accurate predictive models and the most useful insights are produced.

## Processes in Feature Engineering
1. Feature Creation: Feature creation is finding the most useful variables to be used in a predictive model. The process is subjective, and it requires human creativity and intervention. The new features are created by mixing existing features using addition, subtraction, and ration, and these new features have great flexibility.

2. Transformations: The transformation step of feature engineering involves adjusting the predictor variable to improve the accuracy and performance of the model. For example, it ensures that the model is flexible to take input of the variety of data; it ensures that all the variables are on the same scale, making the model easier to understand. It improves the model's accuracy and ensures that all the features are within the acceptable range to avoid any computational error.
 
3. Feature Extraction: Feature extraction is an automated feature engineering process that generates new variables by extracting them from the raw data. The main aim of this step is to reduce the volume of data so that it can be easily used and managed for data modelling. Feature extraction methods include cluster analysis, text analytics, edge detection algorithms, and principal components analysis (PCA).

4. Feature Selection: While developing the machine learning model, only a few variables in the dataset are useful for building the model, and the rest features are either redundant or irrelevant. If we input the dataset with all these redundant and irrelevant features, it may negatively impact and reduce the overall performance and accuracy of the model. Hence it is very important to identify and select the most appropriate features from the data and remove the irrelevant or less important features, which is done with the help of feature selection in machine learning. "Feature selection is a way of selecting the subset of the most relevant features from the original features set by removing the redundant, irrelevant, or noisy features."

## Feature Engineering Techniques
1. Imputation
Feature engineering deals with inappropriate data, missing values, human interruption, general errors, insufficient data sources, etc. Missing values within the dataset highly affect the performance of the algorithm, and to deal with them "Imputation" technique is used. Imputation is responsible for handling irregularities within the dataset.

<blockquote>For example, removing the missing values from the complete row or complete column by a huge percentage of missing values. But at the same time, to maintain the data size, it is required to impute the missing data, which can be done as:

For numerical data imputation, a default value can be imputed in a column, and missing values can be filled with means or medians of the columns.
For categorical data imputation, missing values can be interchanged with the maximum occurred value in a column.</blockquote>

2. Handling Outliers
Outliers are the deviated values or data points that are observed too away from other data points in such a way that they badly affect the performance of the model. Outliers can be handled with this feature engineering technique. This technique first identifies the outliers and then remove them out.

<blockquote>Standard deviation can be used to identify the outliers. For example, each value within a space has a definite to an average distance, but if a value is greater distant than a certain value, it can be considered as an outlier. Z-score can also be used to detect outliers.</blockquote>

3. Log transform
Logarithm transformation or log transform is one of the commonly used mathematical techniques in machine learning. Log transform helps in handling the skewed data, and it makes the distribution more approximate to normal after transformation. It also reduces the effects of outliers on the data, as because of the normalization of magnitude differences, a model becomes much robust.

4. Binning
In machine learning, overfitting is one of the main issues that degrade the performance of the model and which occurs due to a greater number of parameters and noisy data. However, one of the popular techniques of feature engineering, "binning", can be used to normalize the noisy data. This process involves segmenting different features into bins.

5. Feature Split
As the name suggests, feature split is the process of splitting features intimately into two or more parts and performing to make new features. This technique helps the algorithms to better understand and learn the patterns in the dataset.

<blockquote>The feature splitting process enables the new features to be clustered and binned, which results in extracting useful information and improving the performance of the data models.</blockquote>

6. One hot encoding
One hot encoding is the popular encoding technique in machine learning. It is a technique that converts the categorical data in a form so that they can be easily understood by machine learning algorithms and hence can make a good prediction. It enables group the of categorical data without losing any information.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


