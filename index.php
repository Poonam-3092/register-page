<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"><!-- statement to link css file -->
</head>
<body>
    <img class=po1 src="po2.jpg" alt="purple ocean" >
    <div class="container">
        <h1>Registration Into Metaverse</h1>
        <P>Enter your details and submit this form to confirm your participation in this event</P>
        <!-- <p class="submitMsg">Thanks for submitting your form. We are happy to see you
             in the purple ocean</p> -->
        <form action="index.php" method="post"></form>
        <input type="text" name="name" id="name" placeholder="Enter your name:">
        <input type="text" name="age" id="age" placeholder="Enter your age:">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender:">
        <input type="email" name="Email" id="Email" placeholder="Enter your Email:">
        <input type="email" name="phone" id="phone" placeholder="Enter your Phone No:"> 
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here:"></textarea>  
        <input type="submit" name="submit" class="btn">
        <!-- <button class="btn">submit</button>      -->
        <!-- <button class="btn">reset</button>      -->
        
    </div>
    <script src="index.js"></script><!--statement to link javascript  file  -->
</body>
</html>