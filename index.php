<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="contact-title">
        <h1>Say Hello</h1>
        <h2>We are always ready to serve you!</h2>
    </div>

    <div class="contact-form">
        <form id="contact-form" action="contact-form-handeler.php" method="post">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required><br>
            <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
            <textarea name="message" class="form-control"  placeholder="Message" rows="4" required></textarea><br>
            <input type="submit" class="form-control submit" value="SEND MESSAGE">
        </form>
    </div>

</body>
</html>