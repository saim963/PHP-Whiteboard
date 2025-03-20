<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
</head>
<body>
<?php 
include './partials/nav.php';  
// $sum = function(...$numbers){
//     return array_sum($numbers);
// };

// echo $sum(1,2,3,4,5,6,7);
$array = [1,2,3,4];
function foo($element){
    return $element*2;
}
$array2 = array_map('foo',$array);
echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';

// time() gives number of seconds from jan1 1970

date_default_timezone_set('Asia/Kolkata');
echo "Today is " . date("Y/m/d g:ia") . "<br>";
echo "Today is " . date("l g:ia");
?>    
</body>
</html>