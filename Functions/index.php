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
        function list_users($name = NULL) {
            // if not null
            if (isset($name)) {
               return array($name); 
            }
            else {
            return array("Eric", "Jeb", "Vivi");
        }
        } 
        
        print_r(list_users("Bob"));
        print_r(list_users());
        ?>
    </body>
</html>
