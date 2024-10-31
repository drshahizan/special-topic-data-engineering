<a href="https://github.com/drshahizan/special-topic-data-engineering/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/special-topic-data-engineering" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/network/members"><img src="https://img.shields.io/github/forks/drshahizan/special-topic-data-engineering" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/special-topic-data-engineering" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/issues"><img src="https://img.shields.io/github/issues/drshahizan/special-topic-data-engineering" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/special-topic-data-engineering/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/special-topic-data-engineering?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Fspecial-topic-data-engineering&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

# Lab 1: **Build A Google Gemini Chatbot with HTML CSS and JavaScript**

<a href="https://github.com/drshahizan/special-topic-data-engineering/blob/main/materials/chatbot.md">
<img src="https://www.codingnepalweb.com/wp-content/uploads/2024/07/Build-A-Google-Gemini-Chatbot-with-HTML-CSS-and-JavaScript-Home.jpg" alt="Image Alt Text"  height="400">
</a>

AI chatbots like Google Gemini or ChatGPT have changed how we interact with technology, making conversations with machines almost human. As a beginner web developer, have you ever thought about building your own AI chatbot? The good news is that it is possible to build a Google Gemini-like chatbot using HTML, CSS, and JavaScript.

For those who aren’t familiar, Gemini is an advanced chatbot model developed by Google, similar to ChatGPT. It uses artificial intelligence to produce human-like responses and has become popular for its natural conversational abilities. With this chatbot, users will be able to chat, copy responses, and toggle between light and dark themes. Additionally, the themes and chat history will be saved in the browser’s local storage, ensuring they persist even after a page refresh.

## **Steps to Build Gemini Chatbot in HTML & JavaScript**

To build an interactive and functional Gemini chatbot using HTML, CSS, and JavaScript, follow these simple step-by-step instructions:

1. Create a folder with any name you like, e.g., `gemini-chatbot`.
2. Inside it, create the necessary files: `index.html`, `style.css`, and `script.js`.
3. Download the [Images](https://codingnepalweb.com/custom-projects/gemini-clone-html-css-javascript-images.zip) folder and put it in your project directory. This folder contains logos you’ll need for this chatbot project.

In your `index.html` file, add the essential HTML markup to structure your Gemini chat layout. It features a greetings header, suggestion list, chat section, and typing form, all structured with semantic tags.

```html
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gemini Chatbot | CodingNepal</title>
  <!-- Linking Google Fonts For Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <!-- Header Greetings -->
    <h1 class="title">Hello, there</h1>
    <p class="subtitle">How can I help you today?</p>

    <!-- Suggestion list -->
    <ul class="suggestion-list">
      <li class="suggestion">
        <h4 class="text">Help me plan a game night with my 5 best friends for under $100.</h4>
        <span class="icon material-symbols-rounded">draw</span>
      </li>
      <li class="suggestion">
        <h4 class="text">What are the best tips to improve my public speaking skills?</h4>
        <span class="icon material-symbols-rounded">lightbulb</span>
      </li>
      <li class="suggestion">
        <h4 class="text">Can you help me find the latest news on web development?</h4>
        <span class="icon material-symbols-rounded">explore</span>
      </li>
      <li class="suggestion">
        <h4 class="text">Write JavaScript code to sum all elements in an array.</h4>
        <span class="icon material-symbols-rounded">code</span>
      </li>
    </ul>
  </header>

  <!-- Chat List / Container -->
  <div class="chat-list"></div>

  <!-- Typing Area -->
  <div class="typing-area">
    <form action="#" class="typing-form">
      <div class="input-wrapper">
        <input type="text" placeholder="Enter a prompt here" class="typing-input" required />
        <button id="send-message-button" class="icon material-symbols-rounded">send</button>
      </div>
      <div class="action-buttons">
        <span id="theme-toggle-button" class="icon material-symbols-rounded">light_mode</span>
        <span id="delete-chat-button" class="icon material-symbols-rounded">delete</span>
      </div>
    </form>
    <p class="disclaimer-text">
      Gemini may display inaccurate info, including about people, so double-check its responses.
    </p>
  </div>

  <script src="script.js"></script>
</body>
</html>
```

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)
