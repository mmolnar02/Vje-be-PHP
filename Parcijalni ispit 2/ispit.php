<?php

// error_reporting(0);

// 1. Učitavanje riječi iz words.json datoteke i ispis u desnu tablicu
$wordsData = file_get_contents('words.json');
$words = json_decode($wordsData) ?? [];



// 2. Provjera je li forma poslana i obrada unesene riječi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newWord = $_POST['new_word'];

    // Provjera jesu li svi potrebni podaci uneseni
    if (!empty($newWord)) {
        if (empty($newWord)){
            header('Location: ispit.php?error=1');
            exit;
        }
        // 3. Izračun broja slova, suglasnika i samoglasnika
        function countVowels($word) {
            return preg_match_all('/[aeiou]/i', $word);
        }

        function countConsonants($word) {
            return $consonants = strlen(str_ireplace(array('a','e','i','o','u',' '), '', strtolower($word))); ;
        }

        $numLetters = strlen($newWord);
        $numVowels = countVowels($newWord);
        $numConsonants = countConsonants($newWord);

        // 4. Dodavanje riječi u datoteku words.json
        $wordEntry = array(
            'word' => $newWord,
            'num_letters' => $numLetters,
            'num_vowels' => $numVowels,
            'num_consonants' => $numConsonants
        );

        $words[] = $wordEntry;
        file_put_contents('words.json', json_encode($words), JSON_PRETTY_PRINT);

        // Preusmjeravanje na istu stranicu kako bi se osvježili podaci
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<body>
    <div style="width: 1000px; margin:auto ">
        <div style="float: left; width: 50%">
            <h2>Upišite riječ: </h2>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="text" id="new_word" name="new_word" require>
                    <button type="submit">Pošalji</button>
                </form>
        </div>
        <div style="float: right; width: 50%">
            <table border="1">
                <tr>
                    <th>Riječ</th>
                    <th>Broj slova</th>
                    <th>Broj samoglasnika</th>
                    <th>Broj suglasnika</th>
                </tr>
                <?php foreach ($words as $wordEntry) : ?>
                <tr>
                    <td><?= $wordEntry->word ?></td>
                    <td><?= $wordEntry->num_letters ?></td>
                    <td><?= $wordEntry->num_vowels ?></td>
                    <td><?= $wordEntry->num_consonants ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <!-- Forma za unos novih riječi -->
    
</body>
</html>