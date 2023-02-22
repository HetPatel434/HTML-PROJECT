<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Contact-us.css">
    <title>Contact - AR-radio</title>
   
</head>
<body>
    <header>
<?php
	include("NAVIGATION/NAVIGATION.php");
     ?>
</header>
    <div class="INFO">
        <div>
            <i class="adress"></i>
            <p><b>Address: </b>Steeles Ave W Unit 8, Toronto , ON M9W 6T5</p>
             </div>
        <div>
            <i class="phone"></i>
            <p><b>Phone: </b> +1 (456) 369-2298</p>
            </div>
        <div>
            <i class="email"></i>
            <p><b>Email: </b><a href="arradio43@gmail.com" target="_blank"> AR-radio43@gmail.com</a></p>
            </div>
        
    </div>

    <div id="contact-us">
        <h1>TYPE YOUR INFORMATION</h1>
        <div class="underline"></div>
        <form action="#some.php" method="post" id="contact-form">

            <div class="name">
                <input type="text" placeholder="NAME" name="name" id="name_input" required >
            </div>
            <div class="email">
              
                <input type="email" placeholder="EMAIL" name="email" id="email_input" required>
            </div>
            
            <div class="message">
                
                <textarea placeholder="WHAT IS YOUR MASSAGE" name="message" id="message_input" cols="30" rows="7" required></textarea>
            </div>

            <div>
                <button class="SUBMIT">SEND</button>
            </div>

        </form>
    </div>
</main>


</body>
</html>