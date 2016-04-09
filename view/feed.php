<?php
include("sessionstart.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feed</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <body> 
        <a href='insertimage'>Insert Image</a>
        <a href='userfeed'>Your Images</a>
        <a href='password'>Change Password</a>
        <a href='comments'>Edit Comments</a>
        <h2>All Feed</h2>
        
        <div id='feed'></div>
        
    </body>
    
    <script>
        $(document).ready(function(){
            
            $.ajax({
               url:"controller/image.php",
                type:"POST",
                dataType:"json",
                data: {
                    method:"getfeed"
                },
                success:function(resp){
                    console.log(resp);
                    
                    for(var i = 0; i<resp.length; i++){
                    var thediv = document.getElementById("feed");    
                    var div = document.createElement("div");     
                    var h3 = document.createElement("h3");
                    var description = document.createElement("p");     
                    var image = document.createElement("img");
                    var msginput = document.createElement("input");
                    var message = document.createElement("button");
                        
                    h3.innerHTML = resp[i].title;
                    image.src = resp[i].path;
                    description.innerHTML = resp[i].description;
                    message.innerHTML = "Write A Comment";
                        
                    image.id = resp[i].id;
                    msginput.id = "thecomment"; 
                    message.id = resp[i].id;    

                    feed.appendChild(div);
                    div.appendChild(h3);
                    div.appendChild(image);
                    div.appendChild(description);
                    div.appendChild(msginput);
                    div.appendChild(message);

                    div.style.marginLeft = "40%";
                    description.style.fontSize = "15pt";
                    description.style.marginTop = "0";
                    h3.style.fontSize = "20pt";
                    h3.style.marginBottom = "0";
                        
                    $(image).click(function() {
                        sessionStorage.image_id = $(this).attr("id");
                        location.replace("imageinfo");
                    });    
                        
                    message.onclick = function(){
                        
                        $.ajax({
                            url:"./controller/comment.php",
                            type:"post",
                            dataType:"html",
                            data: {
                                method:"insert",
                                comment: document.getElementById("thecomment").value,
                                user_id: sessionStorage.user_id,
                                image_id: $(this).attr("id")
                            },
                            success:function(resp){
                                location.reload();
                            }
                   
                        });     
                       }    
                   
                        
                    }
                }
                
            
            });

                });

    </script>
</html>