<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="username"></label>
    <input type="text" name="username">
    <label for="pass"></label>
    <input type="password" name="pass">
    <label for="stuur"></label>
    <input type="submit" name="stuur">
</form>
    <?php

$variabele1 = 10;
$variabele2 = 10;

if ( $variabele1 == $variabele2 ) {
    echo "De twee waarden zijn gelijk";
}

$variabele3 = 10;
$variabele4 = 10;

if ( $variabele3 != $variabele4 ) {
    echo "De twee waarden zijn gelijk";
}

$variabele5 = 10;
$variabele6 = 10;

if ( $variabele5 == $variabele6 ) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

if (isset($post['stuur'])){
    echo $post;
}
?>
    
</body>
</html>

