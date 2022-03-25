<!-- Muhammad Amir Hamzah Bin Abd Aziz 2011685 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farentheit to Celcius Calculations</title>
</head>
<body>
<h1>Conversion of Farenheit to Celcius</h1>


<!-- Way of sending input from user -->
<!-- Name must be unique -->
<form action="2011685 - Exercise 2.php" method="get">
    Country: <br> <input type="text" name="Country"> <br><br>
    Farenheit: <br> <input type="number" name="Farenheit"> <br><br>
    <input type="submit" require>

</form>

<?php
    $celcius = ($_GET["Farenheit"] - 32) * 5 / 9;
    $decimalPoints = round($celcius, 2);
?>

<br>

<!-- We can access the information from HTML -->
<!-- $_GET["Farenheit"] = means it will get for name farenheit -->
The Country is <?php echo $_GET["Country"] ?>. <br>
The Temperature is <?php echo $decimalPoints ?> <strong>degree Celcius</strong>.



</body>
</html>