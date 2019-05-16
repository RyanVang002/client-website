<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="champloo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
       
        <ul>
           
           <li style="float:left"><img width="50px" height="150px" src="images/Champloo%20Icon%20New.png" alt="Champloo logo"></li>
            
            <li style="float:left"><h2>Champloo</h2></li>
            
            <li><a  href=index.php>Home</a></li>
            
            <li><a href="about.php">About</a></li>
            
            <li><a href="stickers.php">Stickers</a></li>
            
            <li><a class="active" href="contact.php">Contact</a></li>
            
        </ul>
     
    </nav>

    
    <form action="contact-info.php" method="post">
    <div class="name">
          First Name:<font color=red>*</font> <input type="text" name="Fname"><br>
         Last Name:<font color=red>*</font> <input type="text" name="Lname"><br>
     </div>
     Email:<font color=red>*</font> <input type="text" name="Email"><br>
     Message:<font color=red>*</font> <textarea name="Message"></textarea><br> 
     <input type="reset" name="reset">
     <input type="submit" name="submit" value="go"> 
    </form>
    <footer>
 <div class="footer-flex">
  <div>
   <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="stickers.php">Stickers</a>
    <a href="contact.php">Contact</a>
  </div>
  
  <div>
       <a href="" target="_blank"><i class="fa fa-instagram" style="font-size:24px"></i></a>
       <a href="" target="_blank"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
       <a href="" target="_blank"><i class="fa fa-facebook" style="font-size:24px"></i></a>
   </div>
  
  <div>
      <h2><img width="25px" height="85px" src="images/Champloo%20Icon%20New.png" alt="Champloo logo"> Champloo</h2>
  </div>
    </div>
</footer>
</body>
</html>
