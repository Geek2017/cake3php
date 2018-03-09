

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>



  
  <form class="modal-content animate" action="/dev/users/login" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img style="width:180px;height:150px;" src="data:image/png;base64,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" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>



    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>




<script>
    
document.getElementById("logout").children[0].style.display = "none"
document.getElementById("login").children[0].style.display = "none"

</script>