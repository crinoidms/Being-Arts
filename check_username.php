<?php
require __DIR__. '/__connect_db.php';

if(isset($_POST['n'])){


}

function check_username($email){

    $result = null;

    $sql = "SELECT * FROM `members` WHERE `email` = '{$email}'";

    $query = mysqli_query($_SESSION['link'], $sql);

    if($query){

        if(mysqli_num_rows($query) >=1 ){
            $result = true;
        }
    }else{
        echo mysqli_error($_SESSION['link']);
    }
return $result;
}

?>