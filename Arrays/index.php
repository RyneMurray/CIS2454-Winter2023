<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   
        $scores = array(95, 97, 100, 82, 100);
        
        $scores[] = 78;
        
        $scores[10] = 92;
        
        print_r($scores);
        
        end($scores);
        
        $last_index = key($scores);
        
        for ($index = 0; $index <= $last_index; $index++) {
            if (isset($scores[$index])) {
                echo "$index : $scores[$index] </br>";
            }
        }
        
        foreach ($scores as $score) {
            echo "</br>$score";
        }
        
        $names_and_scores = array('Eric' => 100, 'Jeb' => 95, 'Journey' => 75);
        $names_and_scores[] = 23;
        print_r($names_and_scores);
        
        if ($names_and_scores['Eric'] > 94) {
            echo "Eric gets an A";
        }
        
        $names_and_scores['Vivi'] = 94;
        
        $names_and_scores['Jeb'] = 99;
        
        print_r($names_and_scores);
        
        foreach ($names_and_scores as $name => $score) {
            echo " </br> $name has a score of: $score";
        }
        
        ?>
    </body>
</html>
