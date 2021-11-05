<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "my_project";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn){
        return $conn;
    } else{
        return null;
    }
}

function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        if ($data == ""){
            unset($data);
        // } else if ($data > 100 || $data < 0 || gettype($data) != "integer") {
        //     global $__error;
        //     $__error .= " Invalid data type at".$data;
        // }
        }else {
        return $data;
        }
    }



?>