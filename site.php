<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
           display: flex;
           justify-content: center;
           align-items: center; 
        }
    </style>
</head>
<body>
    <form action="site.php" method="post">
    Number: <input type="number" name="num1" placeholder="Type a number" style="margin-bottom: 2em";></br>
    Number: <input type="number" name="num2" placeholder="Type a number" style="margin-bottom: 2em";></br>
    Operator: <input type="text" name="op"> 
    <input type="submit" value="calculate"></br>
</form>
<?php
if(isset($_POST["op"])){
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if ($op === "+") {
    echo $num1 + $num2;
} elseif ($op === "-") {
    echo $num1 - $num2;
} elseif ($op === "*") {
    echo $num1*$num2;
} elseif ($op === "/" && $num2 !== 0) {
    echo $num1/$num2;
} else {
    echo "Invalid operator or division by 0.";
}
}
?>
</body>
</html>