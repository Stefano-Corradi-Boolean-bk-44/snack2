<?php

/*
Creiamo due pagine php. 
La prima farà una chiamata GET alla seconda attraverso un form. 
Il form avrà un input di testo in cui inserire il nome di un invitato. 
Inseriamo nell’altro file una lista di invitati prendendolo da un "database" esterno. 
Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.

*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="get">
        <input type="text" placeholder="Inserisci il tuo nome" name="name">

        <input type="submit" value="Entra" />
    </form>
</body>
</html>