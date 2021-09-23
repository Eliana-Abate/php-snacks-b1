<!-- SNACK 2
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). 
Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

    $class = [
        ['name' => 'John', 
        'surname' => 'Doe', 
        'subject' => ['7', '6', '3', '8', '5'],
        ],

        ['name' => 'Alice', 
        'surname' => 'Smith', 
        'subject' => ['6', '6', '7', '6', '8'],
        ],

        ['name' => 'Walter', 
        'surname' => 'White', 
        'subject' => ['4', '7', '6', '5', '5'],
        ],

        ['name' => 'Jessica', 
        'surname' => 'Brown', 
        'subject' => ['8', '9', '7', '9', '7'],
        ],
    ];

    function get_votes_average($subject) {

        $sum = 0;

        for ($i = 0; $i < count($subject); $i++) {

            $sum += ($subject[$i] / count($subject));
        }

        return $sum;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

     

    <?php
        $array = ['8', '9', '7', '9', '7'];

        echo $average = get_votes_average($array);
    
     ?>
    
</body>
</html>