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
   <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="stickers.php">Stickers</a>
    <a href="contact.php">Contact</a>

</footer>
</body>
</html>
