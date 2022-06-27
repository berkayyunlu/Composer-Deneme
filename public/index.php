<html>






<form action="index.php" method="get">
    date: <input type="text" name="date"><br>
    <input type="submit">
</form>

</html>


<?php




require  __DIR__ . '/../vendor/autoload.php';

use Intervention\Zodiac\Calculator;

$zodiac = Calculator::make($_GET["date"]);
printf($zodiac);
die();

$zodiac = Calculator::make('first day of June 2008');

//print_r($zodiac->name());
?>