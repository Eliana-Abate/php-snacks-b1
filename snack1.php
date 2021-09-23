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

    


    <?php echo $numbers_array = get_random_number(1, 50, 16) ?>
    
</body>
</html>