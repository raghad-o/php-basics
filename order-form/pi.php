<html>
<body>
<?php
$p = $_POST['Pens'];
$b = $_POST['Books'];
$pc = $_POST['Pencils'];
echo "<h3>Your order is as follows:</h3>";
echo "<p>".$p." Pens <br></p>";
echo "<p>".$b." Books <br></p>";
echo "<p>".$pc." Pencils <br></p>";
echo " <br>";
echo "<h3>Full Details:</h3>";
echo "<p>Item:Pen, Price per piece:5, Quantity:".$p."<br></p>";
echo "<p>Item:Book, Price per piece:15, Quantity:".$b."<br></p>";
echo "<p>Item:Pencil, Price per piece:5, Quantity:".$pc."<br></p>";
?>
</body>
</html>
