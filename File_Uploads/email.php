<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-mail</title>
</head>
<body>
<div class="container">
    <h2>Sending emails in php from localhost with smtp</h2>
    <h3>Part 1: using sendmail</h3>
    <?php
        if(isset($_POST['send']))
        {
            if(mail($_POST['mail'],$_POST['subject'],$_POST['message']))
            {
                echo "mail is sent";
            }
            else
            {
                echo "mail sending failed";
            }
        }
    ?>
        <form role="form" method="post" enctype="multipart/form-data">
            <label for="mail">To Email: </label>
            <input type="email" name="mail" id="mail"><br>
            <label for="subject">Subject: </label>
            <input type="text" name="subject" id="subject"><br>
            <label for="message">message:  </label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type your message here..."></textarea><br>
            <input type="submit" name="send" value="Send">
        </form>
</div>
</body>
</html>