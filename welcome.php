<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Image Upload</title>
    <style>
        h3 ,h4{
            background:blueviolet;

        }
        .container{
        background-image:url("assets/Blog-post/images.jpg")
        }
        
        
        
    </style>
  </head>
  <body  >
  
  
  <div class="container mt-4">

<h3><?php echo "Welcome ". $_SESSION['username']?>! Now you can uplaod a photo</h3>
<h4> Dear user  you want to convert you original image in to digital painting please upload  photo</h4>
<hr>




   
        <br>
        <div class="ui container">
            <form class="ui mini form" action="add-post.php" method="POST" enctype="multipart/form-data">
                <h1 class="ui header olive" ><strong>Image  Upload</strong></h1>
                
                <div class="ui field">
                    <div class="ui mini input">
                        <textarea name="message" id="" cols="30" rows="3" placeholder="message"></textarea>
                    </div>
                </div>
<br>
                <div class="ui field">
                    <div class="ui mini input">
                        <input type="file" name="images" id="images" required="required" multiple="multiple" />
                    </div>
                </div>

<br>


                <div class="ui field">
                    <button class="ui blue mini button " type="submit" name="submit">Upload Posts</button>
                </div>

            </form>
            <br>
            <br>
            <br>



    
<a href='logout.php'>Log Out</a>
<hr>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


