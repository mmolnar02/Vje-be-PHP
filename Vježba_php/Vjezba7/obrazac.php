<!-- Forma treba sadržavati dva polja: jedno za ime korisnika i drugo za omiljeno jelo.
Potreban je i gumb za slanje forme. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos podataka</title>
</head>
<body>
    <form action="skripta.php" method="POST">
        <label for="name">Ime:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="favorite_food">Omiljeno jelo:</label><br>
        <input type="text" id="favorite_food" name="favorite_food"><br>
        <input type="submit" value="Pošalji">
    </form>
</body>
</html>