<?php 

$partite = [
    [
        "squadra1" => [
            "nome" => "Dinamo Sassari",
            "punteggio" => "88"
        ],
        "squadra2" => [
            "nome" => "Trento",
            "punteggio" => "80"
        ]
        ],
    [
        "squadra1" => [
            "nome" => "Derthona",
            "punteggio" => "97"
        ],
        "squadra2" => [
            "nome" => "Cremona",
            "punteggio" => "92"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "Virtus Bologna",
            "punteggio" => "84"
        ],
        "squadra2" => [
            "nome" => "Universo Treviso",
            "punteggio" => "66"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "Varese",
            "punteggio" => "76"
        ],
        "squadra2" => [
            "nome" => "Venezia",
            "punteggio" => "68"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "VL Pesaro",
            "punteggio" => "85"
        ],
        "squadra2" => [
            "nome" => "Olimpia Milano",
            "punteggio" => "82"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "Napoli",
            "punteggio" => "86"
        ],
        "squadra2" => [
            "nome" => "Fortitudo Bologna",
            "punteggio" => "89"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "Brescia",
            "punteggio" => "88"
        ],
        "squadra2" => [
            "nome" => "Brindisi",
            "punteggio" => "67"
        ]
    ],
    [
        "squadra1" => [
            "nome" => "Trieste",
            "punteggio" => "83"
        ],
        "squadra2" => [
            "nome" => "Reggiana",
            "punteggio" => "85"
        ]
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

<h2>Elenco partite giornata 14 Seria A Basket</h2>

<ul>

    <?php 
        for($i = 0; $i < count($partite); $i++) {
            echo "<li>{$partite[$i]["squadra1"]["nome"]} - {$partite[$i]["squadra2"]["nome"]} | {$partite[$i]["squadra1"]["punteggio"]}-{$partite[$i]["squadra2"]["punteggio"]}</li>";
        }
    ?>

</ul>
    
</body>
</html>