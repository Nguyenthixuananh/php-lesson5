
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post">

        <label>Side1</label>
        <input type="number" name="side1">
        <label>Side2</label>
        <input type="number" name="side2">
        <label>Side3</label>
        <input type="number" name="side3">


        </select>
        <input type="submit" value="Submit">

    </form>
</div>
</body>
</html>

<?php
include_once "Shape.php";
include_once "Triangle.php";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $triangle = new Triangle("Triangle96", "red");
    $triangle->setSide1($_POST["side1"]);
    $triangle->setSide2($_POST["side2"]);
    $triangle->setSide3($_POST["side3"]);
    echo $triangle->toString();
}
?>

