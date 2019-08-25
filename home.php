<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<head>
<title>home page</title>    
<title>ChatAI using RiveScript.js</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
  </head>
    <body bgcolor="orange">
        <h1>
            <br>
            WELCOME <?php echo $_SESSION['username']; ?>
                    </h1>

      <div style="position:relative;font-family: 'Luckiest Guy', cursive;color:white;font-size:300%;background-color:black;border-radius:10px;width:26% ">&nbsp;ZOZO</div><div align="right" style="position:relative; right:8px;"><a href="logout.php">logout</a></div>
    <div class="chat">
      <div class="messages"></div>
      <div id="edge"></div>
      <form class="actions">
        <input type="text" placeholder="Enter to send message">
      </form> 
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rivescript/2.0.0/rivescript.min.js"></script>
    <script src="script.js"></script>
            
    </body>
</html>