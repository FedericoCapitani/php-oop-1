<?php
class Movie {
    public $name;
    public $length;
    public $release_year;

    function __construct($_name, $_length, $_release_year) {
        $this->name = $_name;
        $this->length = $_length;
        $this->release_year = $_release_year;
    }
}

$alien = new Movie("alien","1:50h", 1980);
$matrix = new Movie("matrix", "2.30h", 2001);

var_dump($alien);
var_dump($matrix);
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