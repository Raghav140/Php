  <html>
<head>
<title>string function</title>
</head>
<body>
<?php
$string="Lemon, Mango!";
$upperCaseString=strtoupper($string);
$lowerCaseString=strtolower($string);
$stringLength=strlen($string);
$firstCharUpperCase=ucfirst($string);

echo "Original String:" .$string ."<br>";
echo "Upper Case:" .$upperCaseString ."<br>"; 
echo "Lower Case:" .$lowerCaseString ."<br>";
echo "String Length:" .$stringLength ."<br>";
echo "First Char Uppercase: ".$firstCharUpperCase ."<br>";
?>
</body>
</html>