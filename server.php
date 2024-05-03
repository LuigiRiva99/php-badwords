<?php
// var_dump($_GET);

$research = $_GET['research'];
$last_name = $_GET['last_name'];
$age = $_GET['age'];
$comment = $_GET['comment'];

//salvo in una variabile la lunghezza del commento
$comment_length = strlen($comment);

//salvo in un'altra variabile il commento dell'utente censurato
//str_replace(porzioneDaModificare, conCosa, stringa) --> per inserire più termini da sostituire, nel primo parametro metto un array con all'interno tutti gli elementi da sostituire
//$count serve a contare il numero di sostituzione effettuate

//uso str_contains per vedere se l'input scritto dall'utente è presente nel paragrafo (textarea)
$inside_comment = str_contains($comment,$research);

// uso un if che mi modifica il paragrafo 
if ($inside_comment){
    $comment_censored = str_replace($research, '***', $comment, $count);
};

// var_dump($inside_comment);

//salvo in una variabile la lunghezza del commento censurato
$comment_censored_lenght = strlen($comment_censored)
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
        <!-- <h1>Ciao <?php echo $name; ?> <?php echo $last_name; ?>, alla prossima!</h1> -->
        <p>Paragrafo og: 
            <span><?php echo $comment ?></span>
        </p>
        <p>lunghezza paragrafo og: 
            <span class="blue"><?php echo $comment_length ?></span>
        </p>
        <p>paragrafo modificato: 
            <span><?php echo $comment_censored ?></span>
        </p>
        <p>lunghezza paragrafo modificato: 
            <span class="blue"><?php echo $comment_censored_lenght ?></span>
        </p>
        <p>n di parole sostituite: 
            <span class="red"><?php echo $count ?></span></p>
    </main>
</body>
</html>


<style>
    p {
        font-weight: bold
    }
    p span{
        font-weight: normal
    }

    .blue{
        color: blue
    }

    .red{
        color: red
    }
</style>
