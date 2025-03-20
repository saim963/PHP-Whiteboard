<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php practice</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php require './partials/nav.php'; ?>
    <form action="index.php" method="get">
        <label for="age">AGE:</label>
        <input type="number" name="age">
        <input type="submit" value="Submit">
    </form>
    <?php
    $arr = ['a','b','c','d'];
    print_r($arr);
    echo '<br>';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    print 'There can be multi dimentional array too!! <br>';
    $multiArr = [1=>'A',2=>'B',3=>'C',4=>['4.1'=>'Z','4.2'=>'Y','4.3'=>['4.31'=>'X','4.32'=>'W','4.33'=>'V']]];
    echo '<pre>';
    print_r($multiArr);
    echo '</pre>';
    echo 'I guess it is understood. Now we\'ll look into switch and match. <br>';
    // if (isset($_GET['age'])) {
    //     $age = $_GET['age'];
    //     switch (true) {
    //         case ($age > 0  && $age < 18):
    //             echo 'Come back when you are 18';
    //             break;
    //         case ($age >= 18 && $age <= 100):
    //             echo 'You\'re welcome!!';
    //             break;
    //         default:
    //             echo 'Seems like you are immortal!!';
    //     }
    // }else{
    //     echo 'Enter your age.';
    // }
    if(isset($_GET['age'])){
        $age = $_GET['age'];
        $message = match(true){
            ($age>0 && $age<18) => 'Come back when you\'re 18.',
            ($age>=18 && $age<=100) => 'Yes, you are eligible and welcomed.',
            default => 'Seems like you\'re immortal'
        };
        echo $message;
    }else{
        echo 'Enter your age!!';
    }
    ?>
</body>

</html>