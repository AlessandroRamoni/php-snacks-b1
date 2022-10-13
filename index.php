<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks-1</title>
</head>
<body>
    
<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<div>
    <ul>
<?php
$calendario = [
    [ "partita" => 'Orlando - Chicago | 55-60'],
    [ "partita" => 'Denver - New York | 55-60'],
    [ "partita" => 'Salt Lake City - Los Angeles | 55-60'],
    [ "partita" => 'Miami - Vancouver | 55-60'],
];
for($i=0; $i < count($calendario); $i++){
    $match = $calendario[$i];
    // echo $match["partita"];
    echo "<li>". $match["partita"] ."</li>";
}
?>
</ul>
</div>



<div>
    <ul>
        <?php
    $array = [
        [
            'homeTeam' => 'ATLANTA HAWKS',
            'scoreHomeTeam' => '54',
            'visitingTeam' => 'MIAMI HEAT',
            'scoreVisitingTeam' => '34'
        ],
        [
            'homeTeam' => 'BOSTON CELTICS',
            'scoreHomeTeam' => '23',
            'visitingTeam' => 'BROOKLYN NETS',
            'scoreVisitingTeam' => '54'
        ],
        [
            'homeTeam' => 'CHARLOTTE HORNETS',
            'scoreHomeTeam' => '43',
            'visitingTeam' => 'CLEVELAND CAVALIERS',
            'scoreVisitingTeam' => '45'
        ],
    ];
    for($i = 0; $i < count($array); $i++){
        $element = $array[$i];

        // echo $element["homeTeam"];
        // echo $element["visitingTeam"];

        // echo "<li>". $match["partita"] ."</li>";
        echo "<li>". $element["homeTeam"] . "&nbsp;" . $element["scoreHomeTeam"] . "<br>". $element["visitingTeam"] . "&nbsp;" . $element["scoreVisitingTeam"] ."</li>";
    }
?>
    </ul>
</div>



<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php



$nome = $_GET['nome'];
// $mail = $_GET['mail'];
// $age = $_GET['age'];

$controllo = '';

// if (trim(strlen($name)) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)) {
//     $controllo = 'Accesso riuscito';
// } else {
//     $controllo = 'Accesso negato';
// }

if (strlen($nome > 3))  {
    $controllo = 'Accesso riuscito';
} else {
    $controllo = 'Accesso negato';
}

?>

<div>
 <?php echo $controllo ?>
</div>

<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
        
        ],
    ];

echo array_keys($posts);

    ?>


</body>
</html>