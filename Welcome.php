<html>
<head>
<title>$_POST-to collect form data</title>
</head>
<body>
welcome User:
<?php
echo $_POST["name"];
?><br><br>
your email address is:
<?php
echo $_POST["email"];
?><br><br>
Your password is:
<?php
echo $_POST["Password"];
?><br><br>
Your Maths Number are:
<?php
echo $_POST["Maths"];
?><br><br>
Your Marks of English
<?php
echo $_POST["English"];
?><br><br>
</body>
</html>