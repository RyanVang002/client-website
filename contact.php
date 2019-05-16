<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="champloo.css">
</head>
<body>
<nav>
       
        <ul>
            
            <li><a  href=index.php>Home</a></li>
            
            <li><a href="about.php">About</a></li>
            
            <li><a href="stickers.php">Stickers</a></li>
            
            <li><a class="active" href="contact.php">Contact</a></li>
            
        </ul>
     
    </nav>

    

           <form action="contact-info.php" method="post">
               <p> First Name:</p><font color=red>*</font> <input type="text" name="Fname"><br>
               <p>Last Name:</p><font color=red>*</font> <input type="text" name="Lname"><br>
               <p>Email:</p><font color=red>*</font> <input type="text" name="Email"><br>
               <p>Message:</p><font color=red>*</font> <textarea name="Message"></textarea><br>
         <input type="reset" name="reset">
         <input type="submit" name="submit" value="go"> 
        </form>
        
        <div class="infor">
            <h2>Alternative Way To Contact</h2>
            <p>Phone Number: (559)284-3429 </p>
            <p>Email: Matthewchea12@gmail.com  </p>
        </div>
        
    <footer>
   <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="stickers.php">Stickers</a>
    <a href="contact.php">Contact</a>

</footer>
</body>
</html>
