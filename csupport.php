<!DOCTYPE html>
<html>
<head>
  <title>Customer Support Chat</title>
  <style>
  body{
  background-color:#fff5fc;
  }
    #chatbox {
      height: 100px;
      width: 100%;
      border: 1px solid #ccc;
      padding: 10px;
	  background-color:#bef7f4;
      overflow-y: scroll;
    }
	h1{
	text-align:center;
	
	}
	#message{
	
	padding:0.6rem;
  width: 27rem;
  border: none;
  background-color:rgba(136, 133, 133, 0.6);
  color:white;
  border: none;
  outline:none;
	}
	
	
	button{
	width: 10rem;
    background-color: #F9522E;
    padding: 8px;
    outline: none;
    border-color: transparent;
    color: #fff;
    font-family:sans-serif;
    font-size: 18px;
    font-weight: bold;
    letter-spacing: 2px;
    text-align: center;
    margin-top: 0.9rem;
    border-radius: 12px;
    cursor: pointer;
 }
 button:hover{
  background-color: orange;
	}
	
  </style>
</head>
<body>
<button style="background:#FF5733; color:white;">
        <a href="safetravel-homepage.php">Home</a>
</button> 
  <h1>Customer Support Chat</h1>

  <div id="chatbox"></div>

  <input type="text" id="message" placeholder="Type your message...">
  <button onclick="sendMessage()">Send</button>

  <script>
    function sendMessage() {
      var messageInput = document.getElementById('message');
      var message = messageInput.value;
      var chatbox = document.getElementById('chatbox');

      if (message !== '') {
        var messageElement = document.createElement('p');
        messageElement.innerText = 'you: ' + message;
        chatbox.appendChild(messageElement);
        messageInput.value = '';
        chatbox.scrollTop = chatbox.scrollHeight;
      }
    }
  </script>
</body>
</html>