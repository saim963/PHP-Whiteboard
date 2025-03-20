<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php 
    ob_start();
    include './partials/nav.php';
    $nav = ob_get_clean();
    $nav = str_replace('About','About Us',$nav);
    echo $nav;
    ?>

    <h1>Front Page</h1>
    <p>Hello this is Front page!!</p>
</body>
</html>
<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['sno']."</p>";
    echo "<p>".$i['enrollment_no']."</p>";
    echo "<p>".$i['password']."</p>";
    echo "<p>".$i['dt']."</p>";
    echo "<hr>";
}
?>