<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css_task/ranjithcss">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
  <style type="text/css">
  body
  { 
    background-color:lightskyblue;
  }
</style>
  <center>
  <h2>LOGIN PAGE</h2>
  </center>
  <div class="container">

  <nav>
      <img src="https://img.freepik.com/premium-photo/book-library-with-old-open-textbook-stack-piles-literature-text-archive-reading-desk_779468-5822.jpg?w=2000" width="100px" height="100px">
      <b>
  <div class="pull-right">
  <ul class="nav navbar-nav">
    <li><a href="home.php">HOME</a></li>
    <li><a href="books.php">BOOKS</a></li>
    <li><a href="section.php">SECTION</a></li>
    <li><a href="contact.php">CONTACT</a></li>
  </ul>
  </div>
  <br>
</b>
</nav>
</div>
<center>
  <form action="create_account.php" method="POST" enctype="multipart/form-data" >
<div class="container">
     <div class="col-md-4">
       <label>NAME</label>
       <input type="text" class="form-control" name="">
      </div>
     <div class="col-md-4">
       <label>EMAIL-ID</label>
       <input type="text" class="form-control" name="">
     </div>
     <div class="col-md-4">
        <label>MOBILE</label>
        <input type="text" class="form-control" name="">
      </div>
</div>
  <br>
     <div class="container">
      <div class="col-md-4">
       <label>PWD</label>
       <input type="text" class="form-control" name="">
      </div>
     <div class="col-md-4">
       <label>CONFORM PWD</label>
       <input type="text" class="form-control" name="">
     </div>
     <div class="col-md-4">
        <label>COLLAGE NAME</label>
        <input type="text" class="form-control" name="">
      </div>
</div> 
<br>
        <center>
           <br>
             <div>
               <a class="btn btn-primary" href="std_list.php" role="button">save</a>
               <a class="btn btn-primary" href="login.php" role="button">cancel</a>
             </div>
        </center>
<div class="container">

  
</div>
   
      
</body>
</html>
<style type="text/css">
  body{
    background-image: linear-gradient(to right,#1fa0ff,#12dafb,#a7fdcc);
  }
</style>


