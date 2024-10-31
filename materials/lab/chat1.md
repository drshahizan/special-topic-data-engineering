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

Here's the content in Markdown format:

---

In your `style.css` file, add CSS code to style your chatbot, giving it a responsive and Gemini-like design. Experiment with different CSS properties such as colors, fonts, and backgrounds to make your clone more attractive.

```css
/* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

:root {
  /* Dark mode colors */
  --text-color: #E3E3E3;
  --subheading-color: #828282;
  --placeholder-color: #A6A6A6;
  --primary-color: #242424;
  --secondary-color: #383838;
  --secondary-hover-color: #444;
}

.light_mode {
  /* Light mode colors */
  --text-color: #222;
  --subheading-color: #A0A0A0;
  --placeholder-color: #6C6C6C;
  --primary-color: #FFF;
  --secondary-color: #E9EEF6;
  --secondary-hover-color: #DBE1EA;
}

body {
  background: var(--primary-color);
}

.header, .chat-list .message, .typing-form {
  margin: 0 auto;
  max-width: 980px;
}

.header {
  margin-top: 6vh;
  padding: 1rem;
  overflow-x: hidden;
}

body.hide-header .header {
  margin: 0;
  display: none;
}

.header :where(.title, .subtitle) {
  color: var(--text-color);
  font-weight: 500;
  line-height: 4rem;
}

.header .title {
  width: fit-content;
  font-size: 3rem;
  background-clip: text;
  background: linear-gradient(to right, #4285f4, #d96570);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.header .subtitle {
  font-size: 2.6rem;
  color: var(--subheading-color);
}

.suggestion-list {
  width: 100%;
  list-style: none;
  display: flex;
  gap: 1.25rem;
  margin-top: 9.5vh;
  overflow: hidden;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scrollbar-width: none;
}

.suggestion-list .suggestion {
  cursor: pointer;
  padding: 1.25rem;
  width: 222px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  border-radius: 0.75rem;
  justify-content: space-between;
  background: var(--secondary-color);
  transition: 0.2s ease;
}

.suggestion-list .suggestion:hover {
  background: var(--secondary-hover-color);
}

.suggestion-list .suggestion :where(.text, .icon) {
  font-weight: 400;
  color: var(--text-color);
}

.suggestion-list .suggestion .icon {
  width: 42px;
  height: 42px;
  display: flex;
  font-size: 1.3rem;
  margin-top: 2.5rem;
  align-self: flex-end;
  align-items: center;
  border-radius: 50%;
  justify-content: center;
  color: var(--text-color);
  background: var(--primary-color);
}

.chat-list {
  padding: 2rem 1rem 12rem;
  max-height: 100vh;
  overflow-y: auto;
  scrollbar-color: #999 transparent;
}

.chat-list .message.incoming {
  margin-top: 1.5rem;
}

.chat-list .message .message-content {
  display: flex;
  gap: 1.5rem;
  width: 100%;
  align-items: center;
}

.chat-list .message .text {
  color: var(--text-color);
  white-space: pre-wrap;
}

.chat-list .message.error .text {
  color: #e55865;
}

.chat-list .message.loading .text {
  display: none;
}

.chat-list .message .avatar {
  width: 40px;
  height: 40px;
  object-fit: cover;
  border-radius: 50%;
  align-self: flex-start;
}

.chat-list .message.loading .avatar {
  animation: rotate 3s linear infinite;
}

@keyframes rotate {
  100% {
    transform: rotate(360deg);
  }
}

.chat-list .message .icon {
  color: var(--text-color);
  cursor: pointer;
  height: 35px;
  width: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: none;
  font-size: 1.25rem;
  margin-left: 3.5rem;
  visibility: hidden;
}

.chat-list .message .icon.hide {
  visibility: hidden;
}

.chat-list .message:not(.loading, .error):hover .icon:not(.hide){
  visibility: visible;
}

.chat-list .message .icon:hover {
  background: var(--secondary-hover-color);
}

.chat-list .message .loading-indicator {
  display: none;
  gap: 0.8rem;
  width: 100%;
  flex-direction: column;
}

.chat-list .message.loading .loading-indicator {
  display: flex;
}

.chat-list .message .loading-indicator .loading-bar {
  height: 11px;
  width: 100%;
  border-radius: 0.135rem;
  background-position: -800px 0;
  background: linear-gradient(to right, #4285f4, var(--primary-color), #4285f4);
  animation: loading 3s linear infinite;
}

.chat-list .message .loading-indicator .loading-bar:last-child {
  width: 70%;
}

@keyframes loading {
  0% {
    background-position: -800px 0;
  }

  100% {
    background-position: 800px 0;
  }
}

.typing-area {
  position: fixed;
  width: 100%;
  left: 0;
  bottom: 0;
  padding: 1rem;
  background: var(--primary-color);
}

.typing-area :where(.typing-form, .action-buttons) {
  display: flex;
  gap: 0.75rem;
}

.typing-form .input-wrapper {
  width: 100%;
  height: 56px;
  display: flex;
  position: relative;
}

.typing-form .typing-input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  resize: none;
  font-size: 1rem;
  color: var(--text-color);
  padding: 1.1rem 4rem 1.1rem 1.5rem;
  border-radius: 100px;
  background: var(--secondary-color);
}

.typing-form .typing-input:focus {
  background: var(--secondary-hover-color);
}

.typing-form .typing-input::placeholder {
  color: var(--placeholder-color);
}

.typing-area .icon {
  width: 56px;
  height: 56px;
  flex-shrink: 0;
  cursor: pointer;
  border-radius: 50%;
  display: flex;
  font-size: 1.4rem;
  color: var(--text-color);
  align-items: center;
  justify-content: center;
  background: var(--secondary-color);
  transition: 0.2s ease;
}

.typing-area .icon:hover {
  background: var(--secondary-hover-color);
}

.typing-form #send-message-button {
  position: absolute;
  right: 0;
  outline: none;
  border: none;
  transform: scale(0);
  background: transparent;
  transition: transform 0.2s ease;
}

.typing-form .typing-input:valid ~ #send-message-button {
  transform: scale(1);
}

.typing-area .disclaimer-text {
  text-align: center;
  font-size: 0.85rem;
  margin-top: 1rem;
  color: var(--placeholder-color);
}

/* Responsive media query code for small screen */
@media (max-width: 768px) {
  .header :is(.title, .subtitle) {
    font-size: 2rem;
    line-height: 2.6rem;
  }

  .header .subtitle {
    font-size: 1.7rem;
  }

  .typing-area :where(.typing-form, .action-buttons) {
    gap: 0.4rem;
  }

  .typing-form .input-wrapper {
    height: 50px;
  }

  .typing-form .typing-input {
    padding: 1.1rem 3.5rem 1.1rem 1.2rem;
  }

  .typing-area .icon {
    height: 50px;
    width: 50px;
  }

  .typing-area .disclaimer-text {
    font-size: 0.75rem;
    margin-top: 0.5rem;
  }
}
```

In your `script.js` file, add JavaScript code to make your chatbot interactive and functional. This includes enabling features such as sending and receiving messages, toggling between light and dark themes, and managing chat history.

```javascript
const typingForm = document.querySelector(".typing-form");
const chatContainer = document.querySelector(".chat-list");
const suggestions = document.querySelectorAll(".suggestion");
const toggleThemeButton = document.querySelector("#theme-toggle-button");
const deleteChatButton = document.querySelector("#delete-chat-button");

// State variables
let userMessage = null;
let isResponseGenerating = false;

// API configuration
const API_KEY = "PASTE-YOUR-API-KEY"; // Your API key here
const API_URL = `https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=${API_KEY}`;

// Load theme and chat data from local storage on page load
const loadDataFromLocalstorage = () => {
  const savedChats = localStorage.getItem("saved-chats");
  const isLightMode = (localStorage.getItem("themeColor") === "light_mode");

  // Apply the stored theme
  document.body.classList.toggle("light_mode", isLightMode);
  toggleThemeButton.innerText = isLightMode ? "dark_mode" : "light_mode";

  // Restore saved chats or clear the chat container
  chatContainer.innerHTML = savedChats || '';
  document.body.classList.toggle("hide-header", savedChats);

  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
}

// Create a new message element and return it
const createMessageElement = (content, ...classes) => {
  const div = document.createElement("div");
  div.classList.add("message", ...classes);
  div.innerHTML = content;
  return div;
}

// Show typing effect by displaying words one by one
const showTypingEffect = (text, textElement, incomingMessageDiv) => {
  const words = text.split(' ');
  let currentWordIndex = 0;

  const typingInterval = setInterval(() => {
    // Append each word to the text element with a space
    textElement.innerText += (currentWordIndex === 0 ? '' : ' ') + words[currentWordIndex++];
    incomingMessageDiv.querySelector(".icon").classList.add("hide");

    // If all words are displayed
    if (currentWordIndex === words.length) {
      clearInterval(typingInterval);
      isResponseGenerating = false;
      incomingMessageDiv.querySelector(".icon").classList.remove("hide");
      localStorage.setItem("saved-chats", chatContainer.innerHTML); // Save chats to local storage
    }
    chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
  }, 75);
}

// Fetch response from the API based on user message
const generateAPIResponse = async (incomingMessageDiv) => {
  const textElement = incomingMessageDiv.querySelector(".text"); // Getting text element

  try {
    // Send a POST request to the API with the user's message
    const response = await fetch(API_URL, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ 
        contents: [{ 
          role: "user", 
          parts: [{ text: userMessage }] 
        }] 
      }),
    });

    const data = await response.json();
    if (!response.ok) throw new Error(data.error.message);

    // Get the API response text and remove asterisks from it
    const apiResponse = data?.candidates[0].content.parts[0].text.replace(/\*\*(.*?)\*\*/g, '$1');
    showTypingEffect(apiResponse, textElement, incomingMessageDiv); // Show typing effect
  } catch (error) { // Handle error
    isResponseGenerating = false;
    textElement.innerText = error.message;
    textElement.parentElement.closest(".message").classList.add("error");
  } finally {
    incomingMessageDiv.classList.remove("loading");
  }
}

// Show a loading animation while waiting for the API response
const showLoadingAnimation = () => {
  const html = `<div class="message-content">
                  <img class="avatar" src="images/gemini.svg" alt="Gemini avatar">
                  <p class="text"></p>
                  <div class="loading-indicator">
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                  </div>
                </div>
                <span onClick="copyMessage(this)" class="icon material-symbols-rounded">content_copy</span>`;

  const incomingMessageDiv = createMessageElement(html, "incoming", "loading");
  chatContainer.appendChild(incomingMessageDiv);

  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
  generateAPIResponse(incomingMessageDiv);
}

// Copy message text to the clipboard
const copyMessage = (copyButton) => {
  const messageText = copyButton.parentElement.querySelector(".text").innerText;

  navigator.clipboard.writeText(messageText);
  copyButton.innerText = "done"; // Show confirmation icon
  setTimeout(() => copyButton.innerText = "content_copy", 1000); // Revert icon after 1 second
}

// Handle sending outgoing chat messages
const handleOutgoingChat = () => {
  userMessage = typingForm.querySelector(".typing-input").value.trim() || userMessage;
  if(!userMessage || isResponseGenerating) return; // Exit if there is no message or response is generating

  isResponseGenerating = true;

  const html = `<div class="message-content">
                  <img class="avatar" src="images/user.jpg" alt="User avatar">
                  <p class="text"></p>
                </div>`;

  const outgoingMessageDiv = createMessageElement(html, "outgoing");
  outgoingMessageDiv.querySelector(".text").innerText = userMessage;
  chatContainer.appendChild(outgoingMessageDiv);
  
  typingForm.reset(); // Clear input field
  document.body.classList.add("hide-header");
  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
  setTimeout(showLoadingAnimation, 500); // Show loading animation after a delay
}

// Toggle between light and dark themes
toggleThemeButton.addEventListener("click", () => {
  const isLightMode = document.body.classList.toggle("light_mode");
  localStorage.setItem("themeColor", isLightMode ? "light_mode" : "dark_mode");
  toggleThemeButton.innerText = isLightMode ? "dark_mode" : "light_mode";
});

// Delete all chats from local storage when button is clicked
deleteChatButton.addEventListener("click", () => {
  if (confirm("Are you sure you want to delete all the chats?")) {
    localStorage.removeItem("saved-chats");
    loadDataFromLocalstorage();
  }
});

// Set userMessage and handle outgoing chat when a suggestion is clicked
suggestions.forEach(suggestion => {
  suggestion.addEventListener("click", () => {
    userMessage = suggestion.querySelector(".text").innerText;
    handleOutgoingChat();
  });
});

// Prevent default form submission and handle outgoing chat
typingForm.addEventListener("submit", (e) => {
  e.preventDefault(); 
  handleOutgoingChat();
});

loadDataFromLocalstorage();
```

**Important:** Your chatbot is not ready to generate responses until you configure it with a Gemini API key. To do this, add your API key to the `API_KEY` variable in the `script.js` file. You can get your free API key from [Google AI Studio](https://aistudio.google.com/app/apikey). It will look something like this: `AIzaSyAtpnKGX14bTgmx0l_gQeatYvdWvY_wOTQ`.

Once you have added your API key to the code, you'll be ready to start chatting with your Gemini chatbot. Simply open the `index.html` file in your browser to see it in action!

<img src="https://www.codingnepalweb.com/wp-content/uploads/2024/07/Build-A-Google-Gemini-Chatbot-with-HTML-CSS-and-JavaScript-Chat.jpg" alt="Image Alt Text"  height="400">


## **Conclusion and final words**

You have successfully built your own Google Gemini chatbot using HTML, CSS, and JavaScript. Following these steps, you have developed a functional chatbot capable of interacting with users, changing themes, and saving chat history using local storage.

This project not only improves your web development skills but also gives you practical experience in integrating APIs and managing application states. With your chatbot operational, you can now explore adding extra features or improving its functionality to better meet your requirements.

If you encounter any problems while building your Gemini chatbot, you can download the source code files for this project by clicking the “Download” button.

[Download Code Files](https://www.codingnepalweb.com/custom-projects/google-gemini-chatbot-html-css-javascript.zip)



## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/special-topic-data-engineering/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)
