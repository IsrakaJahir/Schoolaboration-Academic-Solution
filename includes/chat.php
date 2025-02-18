<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8a69c51c01.js" crossorigin="anonymous"></script>
    <title>Chat Application</title>
    <style>

       *{
  margin-top: 0;
  margin-bottom: 0;
  margin-right: 0;
  margin-left: 0;
  box-sizing: border-box;

}

        .container {
            display: flex;
            height: 100vh;
        }
         /* Color the Menu Division */
        .Menu {
         flex: 0 0 18%; /* 20% width for the Menu Division */
         background: linear-gradient(269deg, rgba(118, 147, 203, 0.49) 1.49%, rgba(118, 203, 195, 0.15) 100%);
         text-decoration: none;
        }

        .Menu {
          display: block;
          float: left;
          height: 650px;
          box-sizing: border-box;
        }

        .Menu a{
          text-decoration: none;
          color: rgba(0, 0, 0, 0.65);
          font-family: serif;
          font-weight: 400;
        }

        li a{
          
          display: block;
          padding: 13px;
        }
        li a:hover {
          background-color: #e8eaed;
        }
        li{
          list-style-type: none;
           
        }
         
        .icon {
            padding: 20px;
            min-width: 40px;
        }

         /* Search Button Styles */
        .search-button {
            background-color: floralwhite;
            color: grsy;
            border: none;
            width: 90%;
            height: 25px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 13px;
            margin-right: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .search-icon {
        margin-right: 10px; /* Add spacing between the icon and text */
        }
       
        /* Color the Friends List Division */
        .friends-list {
            flex: 0 0 20%; /* 30% width for the Friends List Division */
            background: #e7eaf6; 
            margin-left: 10px;
            margin-top: 12px;
            margin-bottom: 12px;
            border-radius: 10px;
        } 
       /* Friend List Styles */
        .friend-list-container {
            overflow-y: auto; /* Enable vertical scrolling */
            max-height: 400px;
            margin-left: 15px; /* Set a maximum height for the friend list */
        }

        .friend-list {
            list-style-type: none;
            padding: 0;
        }

        .friend-list-item {
            margin-bottom: 5px;
        }

/* Chat Division Styles */
.chat-division {
    flex: 1; /* The Chat Division takes the rest of the available space */
    background: #eef2e2; /* Green color */
    margin-left: 10px; /* Add space to the left of the Chat Division */
    margin-top: 12px;
    margin-bottom: 12px;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
}

/* Friend's Info Styles (Account Icon and Name) */
.friend-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 10px;
}

/* Account Icon Styles */
.account-icon {
    font-size: 40px;
    color: #3498db; /* Icon color */
}

/* Friend's Name Styles */
.friend-name {
    font-size: 18px;
    font-weight: bold;
    margin-top: 5px; /* Add space between icon and name */
}

/* Chat Division Styles */
.chat-division {
    flex: 1; /* The Chat Division takes the rest of the available space */
    background: #eef2e2; /* Green color */
    margin-left: 10px; /* Add space to the left of the Chat Division */
    margin-top: 12px;
    margin-bottom: 12px;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
}

/* Friend's Info Styles (Account Icon and Name) */
.friend-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

/* Account Icon Styles */
.account-icon {
    font-size: 40px;
    color: #3498db; /* Icon color */
}

/* Friend's Details Styles (Name and additional details) */
.friend-details {
    display: flex;
    flex-direction: column;
    margin-left: 10px; /* Add space between icon and name */
}

/* Friend's Name Styles */
.friend-name {
    font-size: 18px;
    font-weight: bold;
}

/* Chat Division Styles */
.chat-division {
    flex: 1; /* The Chat Division takes the rest of the available space */
    background: #eef2e2; /* Green color */
    margin-left: 10px; /* Add space to the left of the Chat Division */
    margin-top: 12px;
    margin-bottom: 12px;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column; /* Arrange children vertically */
}
/* Friend's Info Styles (Account Icon and Name) */
.friend-info {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Align content to the left */
    margin-bottom: 10px;
}

/* Account Icon Styles */
.account-icon {
    font-size: 40px;
    color: #3498db; /* Icon color */
    margin-right: 10px; /* Add space between icon and name */
}

/* Friend's Name Styles */
.friend-name {
    font-size: 18px;
    font-weight: bold;
}

/* Individual Chat Message Styles */
.chat-message {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    max-width: 80%; /* Adjust the maximum width of messages as needed */
    overflow-y: auto; 
    overflow-wrap: break-word; /* Allow long words to break and wrap to the next line */
    word-wrap: break-word; /* For older browsers */
  
}

/* Friend's Message (Left) */
.left {
    background-color: #fff;
    text-align: left;
    clear: both;
    margin-right: auto; /* Push left-aligned messages to the left side */
}

/* Your Message (Right) */
.right {
    background-color: #3498db;
    color: #fff;
    text-align: right;
    clear: both;
    margin-left: auto; /* Push right-aligned messages to the right side */
}




/* Chat Division Styles */
.chat-division {
    position: relative;
}

/* Message Input and Send Button Styles */
.message-input {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    padding: 10px;
    border-top: 1px solid #ccc;
}

#message-text {
    flex: 1;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#send-button {
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    cursor: pointer;
}

#send-button i {
    font-size: 18px;
}



    </style>
</head>
<body>
    <div class="container">
        <!-- Menu Division -->
        <div class="Menu">
            <img src="images/logo.png" style="width: 160px; height:60px" >
                <h3 style="margin-left:20px; font-family: monospace; letter-spacing:0.1rem; margin-top:10px;">Menu</h3>

                <ul>
                <li><a href="dashboard.php"><i class="fa-solid fa-th-large fa-beat"></i>  Dashboard</i></a></li>
                <li><a href="note_storage.php"><i class="fa fa-sticky-note-o fa-beat"> </i> Note Storage</i></a></li>
                <li><a href="course.php"><i class="fa-regular fa-folder-open fa-beat"></i> Courses</a></li>
                <li><a href="todolist.html"><i class="fa-solid fa-list-check fa-beat"></i> To-do List</a></li>
                <li><a href="#about"><i class="fa fa-users fa-beat"></i> Team Project</a></li>
                <li><a href="#about"><i class="fa fa-newspaper-o fa-beat" aria-hidden="true"></i> Campus News</a></li>
                <li><a href="#about"><i class="fa fa-lock fa-beat" aria-hidden="true"></i> App Lock</a></li>
                <li><a href="#about"><i class="fa fa-hourglass-start fa-beat" aria-hidden="true"></i> Exam Preparation</a></li></ul>

                <h3 style="margin-left: 20px; font-family: monospace; letter-spacing:0.1rem; margin-top:20px;">General</h3>
                <ul>
                <li><a href="#about"><i class="fa-regular fa-circle-question fa-beat"></i> Support</a></li>
                <li><a href="#about"><i class="fa-solid fa-screwdriver-wrench fa-beat"></i>   Help & getting started</a></li>

                <li><a href="#about"><i class="fa fa-sign-out fa-beat" aria-hidden="true"></i></i> Sign Out</a></li>
                </ul>
        </div>

          <!-- Friends List Division -->
        <div class="friends-list">
            <!-- Add search button and friends list content here -->
            <button class="search-button"><i class="fas fa-search search-icon"></i>Search</button>
            <div class="friend-list-container">
                <ul class="friend-list">
                    <!-- Add more friends as list items -->
                    <li class="friend-list-item">Friend 1</li>
                    <li class="friend-list-item">Friend 2</li>
                    <!-- Add more friends as list items -->
                </ul>
            </div>
        </div>



<!-- Chat Division -->
<div class="chat-division">
    <!-- Friend's Info with Account Icon and Name -->
    <!-- Friend's Info with Account Icon and Name -->
<div class="friend-info">
    <div class="account-icon">
        <i class="fas fa-user-circle"></i> <!-- Font Awesome user circle icon -->
    </div>
    <div class="friend-name">Friend's Name</div>
</div>

    
    <!-- Chat Messages -->
    <div class="chat-messages">
        <!-- Friend's Message (Left) -->
        <div class="chat-message left">
            <div class="message-text">Hello there!.</div>
        </div>
        
        <!-- Your Message (Right) -->
        <div class="chat-message right">
            <div class="message-text">Hi! How are you doing?</div>
        </div>
        
        <!-- Add more chat messages as needed, alternating left and right -->
    </div>


   <!-- Message Input and Send Button -->
    <div class="message-input">
        <input type="text" id="message-text" placeholder="Type a message...">
        <button id="send-button"><i class="fas fa-paper-plane"></i></button>
    </div>

    
</div>








<script type="text/javascript">
    // Calculate and set message box width based on message content
function setMessageWidth() {
    const messageElements = document.querySelectorAll('.message-text');
    
    messageElements.forEach(function(messageElement) {
        const messageText = messageElement.innerText;
        const messageBox = messageElement.closest('.chat-message');
        messageBox.style.width = (messageText.length * 10) + 'px'; // Adjust the multiplier as needed
    });
}

// Call the function to set initial message box widths
setMessageWidth();

// You can call setMessageWidth() whenever a new message is added to update the widths dynamically

</script>


<script type="text/javascript">
    // Function to create and append a new message div
function appendMessage(isRight, messageText) {
    const chatMessages = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'chat-message ' + (isRight ? 'right' : 'left');
    messageDiv.innerHTML = '<div class="message-text">' + messageText + '</div>';
    chatMessages.appendChild(messageDiv);
}

// Function to update message box widths based on message content
function setMessageWidth() {
    const messageElements = document.querySelectorAll('.message-text');
    
    messageElements.forEach(function(messageElement) {
        const messageText = messageElement.innerText;
        const messageBox = messageElement.closest('.chat-message');
        messageBox.style.width = (messageText.length * 10) + 'px'; // Adjust the multiplier as needed
    });
}

// Example: Add a new message when a button is clicked
document.getElementById('add-message-button').addEventListener('click', function() {
    const messageText = prompt('Enter a new message:');
    if (messageText) {
        const isRight = Math.random() < 0.5; // Simulate alternating between left and right
        appendMessage(isRight, messageText);
        setMessageWidth();
    }
});

// Call setMessageWidth() initially to set the widths for existing messages
setMessageWidth();

</script>




</div>
</body>
</html>
