<?php
// var_dump($_GET);

$name = $_GET['name'];
$last_name = $_GET['last_name'];
$age = $_GET['age'];
$comment = $_GET['comment'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Ciao <?php echo $name; ?> <?php echo $last_name; ?>, alla prossima!</h1>
        <p><?php echo $comment ?></p>
    </main>
</body>
</html>
