<?php
class Movie {
    public $name;
    public $length;
    public $release_year;
    public $budget = 100;
    public $earnings;
    public $profit = 0;

    function __construct($_name, $_length, $_release_year, $_earnings) {
        $this->name = $_name;
        $this->length = $_length;
        $this->release_year = $_release_year;
        $this->earnings = $_earnings;
    }

    function calcProfit() {
        $this->profit = $this->earnings - $this->budget;
    }

    function getProfit() {
        return $this->profit;
    }
}

$alien = new Movie("alien","1:50h", 1980, 150);
$matrix = new Movie("matrix", "2.30h", 2001, 125);
$alien->calcProfit();
$matrix->calcProfit();

$profit_alien = $alien->getProfit();
$profit_matrix = $matrix->getProfit();


var_dump($alien);
var_dump($matrix);

var_dump($profit_alien);
var_dump($profit_matrix);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-1</title>
</head>
<body>
    
</body>
</html>