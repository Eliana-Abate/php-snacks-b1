<!-- SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero 
più di una volta. Stampare i numeri in pagina. -->


<?php 
    function get_random_number($min, $max, $items) {
    
        $numbers = [];

        while (count($numbers) < $items) {
            $random = rand($min, $max);

            if (!in_array($random, $numbers)) {
                $numbers[] = $random;
            }

        }

        return $numbers;
        
    }

?>

<?php $numbers_array = [] ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <h1>Lista casuale di 15 numeri compresi tra 1 e 50</h1>

    <?php $numbers_array = get_random_number(1, 50, 15) ?>
    <ul>
      <?php foreach ($numbers_array as $num) {?> 
        <li><?php echo $num ?> </li>
      <?php } ?>
    </ul>

    <?php var_dump($numbers_array); ?>
    
</body>
</html>