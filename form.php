<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Quest</title>
    <meta name="author" content="🐍 Anaïs Alfonsi 🐍">
    <meta name="description" content="building up my skills ☄ 𝕸𝖎𝖆𝖔𝖚😻">
</head>
<body>
<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $dropdownErr = $messageErr = "";
$user_firstname = $user_lastname = $email = $user_phone = $dropdown = $user_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    if (empty($_POST["user_firstname"])) {
        $firstnameErr = "Firstname is required";
    } else {
        $user_firstname = test_input($_POST["user_firstname"]);
    }

    if (empty($_POST["user_lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $user_lastname = test_input($_POST["user_lastname"]);
    }

    if (empty($_POST["user_email"])) {
        $emailErr = "Email is required";
    } else {
        $user_email = test_input($_POST["user_email"]);
    }

    if (empty($_POST["user_phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $user_phone = test_input($_POST["user_phone"]);
    }

    if ($_POST["dropdown"] === "ErrorSubject") {
        $dropdownErr = "Select your request";
    } else {
        $dropdown = test_input($_POST["dropdown"]);
    }

    if (empty($_POST["user_message"])) {
        $messageErr = "Message is required";
    } else {
        $user_message = test_input($_POST["user_message"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form  action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>  method="post">
    <div>
        <label  for="firstname">Firstname</label>
        <input  type="text"  id="firstname"  name="user_firstname">
        <span class="error">* <?php echo $firstnameErr ;?></span>
        <br><br>
    </div>
    <div>
        <label  for="lastname">Lastname</label>
        <input  type="text"  id="name"  name="user_lastname">
        <span class="error">* <?php echo $lastnameErr ;?></span>
        <br><br>
    </div>
    <div>
        <label  for="email">Email</label>
        <input  type="email"  id="email"  name="user_email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
    </div>
    <div>
        <label  for="phone">Phone Number</label>
        <input  type="text"  id="phone"  name="user_phone">
        <span class="error">* <?php echo $phoneErr;?></span>
        <br><br>
    </div>
    <select class="dropdown" name="dropdown">
        <option value="ErrorSubject">--Choose your request--</option>
        <option value="🦇">  🦇  </option>
        <option value="🦂">  🦂  </option>
        <option value="🦈">  🦈  </option>
        <option value="🦎">  🦎  </option>
            <span class="error">* <?php echo $dropdownErr;?></span>
        <br><br>
    </select>
    <div>
        <label  for="message">Message</label>
        <textarea  id="message"  name="user_message"></textarea>
        <span class="error">* <?php echo $messageErr;?></span>
        <br><br>
    </div>
    <div  class="button">
        <button  type="submit" name="submit">Send your message</button>
    </div>
</form>
</body>
</html>



