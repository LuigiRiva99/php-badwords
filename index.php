<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <main>
        <form action="./server.php">
            <!-- <p>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placehodler="inserisci il tuo nome">
            </p>
            <p>
                <label for="age">Età</label>
                <input type="text" id="age" name="age" placehodler="inserisci la tua età">
            </p>
            <p>
                <label for="last_name">Cognome</label>
                <input type="text" id="last_name" name="last_name" placehodler="inserisci il tuo cognome">
            </p> -->
            <p>
                <label for="research">Ricerca</label>
                <input type="text" id="research" name="research" placehodler="inserisci la parola">
            </p>
            <p class="comment">
                <label for="comment">Commento</label>
                <textarea id="comment" name="comment" placeholder="inserisci il tuo commento"></textarea>
            </p>
            <button>invia</button>
        </form>
    </main>
</body>
</html>


<style>
    .comment{
        display:flex;
        flex-direction:column;
    }
</style>