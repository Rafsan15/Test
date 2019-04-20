<?php
/**
 * Created by PhpStorm.
 * User: ctbd
 * Date: 4/20/2019
 * Time: 3:50 PM
 */


?>


<html>
    <head></head>
    <body>
        <form action="" method="POST" >
            <input type="text" name="Name" placeholder="Enter your Name">
            <input type="submit" value="Submit" name="Submit">
        </form>

    <?php
        if(isset($_POST["Submit"])){
            if(strlen($_POST["Name"])<5 || strlen($_POST["Name"])>10){
                echo  "<P style='color: green'> Invalid Input</P>";
            }
        }
    ?>
    </body>
</html>
