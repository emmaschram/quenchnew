<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./css/my.css">
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        
    <body>
    <section class='loginsection'>
        <h1>Login</h1>
        <input type='text' id='username' placeholder='username' />
        <input type='text' id='password' placeholder='password' />
        <button id='login'>Login</button></br></br>
        <span>Don't have an account? <a href='user'>Sign Up</a></span>
    </section>    
    </body>
    
    <script>
<<<<<<< HEAD:view/login.html
        $(document).ready(function(){
            sessionStorage.user_id = -1;
            document.getElementById("login").onclick = function(){
                $.ajax({
                    url:"./controller/user.php",
                    type:"post",
                    dataType:"json",
                    data: {
                        method:"login",
                        username: document.getElementById("username").value,
                        password: document.getElementById("password").value
                    },
                    success:function(resp){
                        console.log(resp);
                        sessionStorage.user_id = resp[0].id;
                        location.replace("feed");
                    }
                });
=======
      $(document).ready(function(){
            //var user_id = 1;
            document.getElementById('sub').onclick = function(){
            $.ajax({
               url:"model/loggingin.php",
                type:"POST",
                dataType:"json",
                data: {
                    username: document.getElementById('username').value,
                    password: document.getElementById('password').value
                },
                success:function(resp){
                    alert("Logged in!");
                    window.location.replace("#/feed");
                    user_id = resp[0].id;

                },
                error: function (resp){
                    alert("error");
                }
            });
            
>>>>>>> origin/master:view/login.php
            }

<<<<<<< HEAD:view/login.html
        });
    </script>
</html>
=======
</html>
>>>>>>> origin/master:view/login.php
