<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
<?php
if (isset($_POST)) {
$errors = [];
$message = $_POST['message'];
$pickcontact = $_POST['pickcontact'];
$pickrequest = $_POST['pickrequest'];
if (empty($_POST['email'])) {
$errors['email'] = "❗️The field email is required";
}
if (empty($_POST['name'])) {
$errors['name'] = "❗️The field Name is required";
}
if (empty($_POST['message'])) {
$errors['message'] = "❗️The field message is required";
}
if ($_POST['pickcontact'] === 'NoChoice') {
$errors['pickcontact'] = "❗️Please choose a Contact";
}
if ($_POST['pickrequest'] === 'NoChoice') {
$errors['pickrequest'] = "❗️Please choose a Request";
}
}
