<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Quest</title>
    <meta name="author" content="🐍 Anaïs Alfonsi 🐍">
    <meta name="description" content="building up my skills ☄ 𝕸𝖎𝖆𝖔𝖚😻">
</head>
<body>
<?php if (isset($_POST['submit'])) {

    ?>
    <div class="successPage">
        <h2>👑💀🔥 Success! 🔥💀👑</h2>
        <img src="https://media.giphy.com/media/R06XN6UYyU04E/giphy.gif" alt="swag" class="successgif">
        <h2>
            <?php
            if(isset($_POST['submit'])) {
                echo "Thanks " .$_POST['user_firstname'] ." " .$_POST['user_lastname'] .", for having contacted us about: " .$_POST['dropdown'] ."." ." <br> " .
                    "Our customer service will respond to your request as soon as possible."." <br> " ."They may send you an email to this address: " .$_POST['user_email']
                    .", or contact you on the phone to this number: " .$_POST['user_phone'] ."." ." <br> " ." <br> " ."Your message: " .$_POST['user_message'];
            }?>
        </h2>
    </div>
<?php } ?>
</body>
</html>