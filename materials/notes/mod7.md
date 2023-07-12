
<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.


# Module 7: Application Programming Interface (API)

Group Gadgeteen
1. Goo Ye Jui   (A20EC0191)
2. Kelvin Ee    (A20EC0195)
3. Lee Jia Xian (A20EC0200)
4. Lee Ming Qi  (A20EC0064)
5. Ong Han Wah  (A20EC0129)


### Contents:
- [Definition](#what-is-api)
- [How it works](#how-do-apis-work)
- [Types of APIs](#types-of-apis)
- [API Protocol and Architecture](#api-protocol-and-architecture)
- [API Authentication and Security](#api-authentication-and-security)
- [API Documentation](#api-documentation)

<!---
### Others
- [Video](https://www.youtube.com/watch?v=dQw4w9WgXcQ)
-->

## What is API?
An API, or application programming interface, is a set of defined rules that enable different applications to communicate with each other. It acts as an intermediary layer that processes data transfers between systems, letting companies open their application data and functionality to external third-party developers, business partners, and internal departments within their companies.

The definitions and protocols within an API help businesses connect the many different applications they use in day-to-day operations, which saves employees time and breaks down silos that hinder collaboration and innovation. For developers, API documentation provides the interface for communication between applications, simplifying application integration.

## How do APIs work?
APIs work by enabling different software applications to communicate and exchange data with each other. APIs act as a layer of communication between applications, allowing them to interact and share resources without needing to understand the underlying code or data structures.

![image](https://user-images.githubusercontent.com/69034742/232193712-50776d91-dbb0-49bf-92fa-9c2ac0cc226e.png)

Here is a general overview of how an API works:

1. The client application makes a request to the API by sending a message using a specific protocol (such as HTTP).
2. The API receives the request and processes it. This may involve checking the client's credentials or parameters, validating the request, and performing any necessary data manipulation or processing.
3. The API then sends a response back to the client application, typically in the form of a data object or message.
4. The client application receives the response and processes it. This may involve displaying the data to the user, storing it for later use, or using it to perform some other action.

APIs are sometimes considered **contracts**, where documentation is an agreement between the parties, *“If party 1 sends a remote request structured a particular way, this is how party 2 software will respond.”*

## Types of APIs

<table>
  <tr>
    <th>Types of API</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Public APIs</td>
    <td>
      <ul>
      <li>Public APIs are openly available to developers and the general public.</li>
      <li>They are typically provided by companies or organizations to allow external developers to access their services, data, or functionalities.</li>
      <li>Public APIs are often documented and have well-defined usage guidelines to ensure proper integration and usage by developers.</li>
      <li>Examples of public APIs include social media APIs (e.g., Facebook Graph API, Twitter API) and payment gateway APIs (e.g., PayPal API).</li>
      </ul>
    </td>
  </tr>
    <tr>
    <td>Partner APIs</td>
    <td>
      <ul>
      <li>Partner APIs are designed specifically for trusted partners or selected third-party organizations.</li>
      <li>They provide access to specific features, data, or functionalities that are not available to the public.</li>
      <li>Partner APIs often require authentication and authorization to ensure that only approved partners can access the API.</li>
      <li>These APIs are commonly used in scenarios where companies want to establish integrations with strategic partners or offer value-added services to their partners.</li>
        <li>Examples of partner APIs include APIs offered by software companies to their reseller partners or APIs provided by payment processors to trusted financial institutions.</li>
      </ul>
    </td>
  </tr>
    <tr>
    <td>Private APIs</td>
    <td>
      <ul>
      <li>Private APIs, also known as internal APIs or enterprise APIs, are intended for internal use within an organization.</li>
      <li>They are designed to facilitate communication and data exchange between different applications, systems, or services within an organization.</li>
      <li>Private APIs are not exposed to the public or external developers.</li>
      <li>These APIs play a crucial role in enabling system integration, streamlining workflows, and improving internal efficiency.</li>
      <li>Examples of private APIs include APIs used by large enterprises to connect their internal systems, such as CRM APIs, HR APIs, or inventory management APIs.</li>
      </ul>
    </td>
</table>

## API Protocol and Architecture

a. RESTful APIs
- REST (Representational State Transfer) is an architectural style for designing networked applications.
- RESTful APIs are built based on the principles of REST.
- RESTful APIs use HTTP methods (GET, POST, PUT, DELETE) to perform operations on resources identified by URLs (Uniform Resource Locators).
- RESTful APIs are stateless, meaning each request is independent and doesn't rely on previous requests or stored states.
- They commonly use JSON (JavaScript Object Notation) or XML (eXtensible Markup Language) as data formats for request and response payloads.

b. SOAP APIs
- SOAP (Simple Object Access Protocol) is a protocol for exchanging structured information in web services.
- SOAP APIs use XML to define message formats and rely on the XML-based SOAP envelope for packaging requests and responses.
- They often use HTTP, SMTP, or other protocols for message transport.
- SOAP APIs are more heavyweight compared to RESTful APIs and require more bandwidth and processing power.

c. GraphQL APIs
- GraphQL is a query language for APIs and a runtime for executing those queries with existing data.
- GraphQL APIs allow clients to request specific data and shape the response according to their needs.
- Unlike RESTful APIs, where clients typically receive fixed data structures, GraphQL APIs provide more flexibility and efficiency in data retrieval.
- GraphQL APIs are language-agnostic and can be used with various programming languages and frameworks.

## API Authentication and Security
- API Authentication: APIs often require authentication mechanisms to ensure that only authorized clients can access protected resources.
  - Common authentication methods include API keys, tokens (OAuth, JWT), and username/password combinations.
- API Security: APIs need to be secured to protect sensitive data and prevent unauthorized access.
  - Security measures include using HTTPS/SSL for encrypted communication, input validation, rate limiting, and implementing access controls and authorization.

## API Documentation
- API documentation is crucial for developers to understand how to use an API effectively.
- Good documentation provides clear instructions, detailed descriptions of endpoints, request/response formats, and examples.
- Popular tools for API documentation include Swagger, OpenAPI, and Postman.



## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)



