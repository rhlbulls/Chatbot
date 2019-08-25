<html>
<head>
    <title>my pro</title>
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <style>
        *{
            margin:0;
            padding:0;
            overflow:hidden;
        }
        .header{
            background:rgba(89, 89, 93, 0.21);
            height:100vh;
        }
        .video-background
        {
            position:absolute;
            right:0;
            bottom:0;
            min-width:100%;
            min-height: 100%;
            width:auto;
            height:auto;
            z-index: -1;
        }
        @media(min-aspect-ratio:16/9)
        {
            .video-background
            {
                width:100%;
                height:auto;
            }
        }
        @media(min-aspect-ratio:16/9)
        {
            .video-background
            {
                width:auto;
                height:100%;
            }
        }
        .container{
            color:rgb(0, 0, 0);
        }
        .login-box{
            max-width: 700px;
            float:none;
            margin:150px auto;
        }
        .login-left{
            color:black;
            background:rgba(255, 255, 255, 0.62);
            padding:30px;
        }
        .login-rigt{
            color:white;
            background: rgba(255, 255, 255, 0.62);
            padding: 30px;
        }
        .form-control{
            background-color: transparent ! important;
        }
    </style>
</head>
    <body>
        <h1 style="position:relative; left:10px;font-family: 'Luckiest Guy', cursive;color:black;">ZOZO</h1>
        <section class="header">
            <div class="container">
                <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                <h2>login here</h2>
                    <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="Submit" class="btn btn-primary" >Login</button>
                    </form>
                </div>
                
                <div class="col-md-6 login-right">
                <h2>Register here</h2>
                    <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="Submit" class="btn btn-primary" >Register</button>
                    </form>
                </div>
                </div>
                </div>
            </div>
                <video autoplay loop class="video-background" muted plays-inline>
                    <source src="sample.mp4" type="video/mp4">    
            </video>
        </section>
        
    </body>
</html>