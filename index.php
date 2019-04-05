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
<form action="" method="post">
    push element of array separated by spaces: <br>
    Array Fist :
    <input type="text" name="string1"/>
    Array Second :
    <input type="text" name="string2">
    <input type="submit" value="Pooling"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array1 = $_POST["string1"];
    $array2 = $_POST["string2"];

    $array1 = explode(' ', $array1);
    $array2 = explode(' ', $array2);
    function arrayPooling($array1, $array2)
    {
        $array3 = $array1;
        for ($index = 0; $index < count($array2); $index++) {
            $array3[] = $array2[$index];
        }
        return $array3;
    }
    print_r(arrayPooling($array1,$array2));

}
?>
</body>
</html>