<?php

include('utility.php');
$db = connect();
$error = ""; $message = "";
if (isset($_POST['submit'])){
    if ($_POST['reg_no'] == "" || $_POST['reg_no'] == NULL){
        $__error .= " Registration Number must be inputted.";
    } else {
            // header("location:/project/report.php");
        $reg_no = $_POST['reg_no'];
        $sql = "SELECT * FROM prediction WHERE reg_no='$reg_no'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            echo
            '<!DOCTYPE html>
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title></title>
                    <meta name="description" content="">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <header>
                    <div class="container">
                    <a href="index.php"><img src = "images\CS UNN logo.png"></a>
                    </div>
                    </header>
                </body>
            </html>';
            $student = $result->fetch_assoc();
            echo '<section style = "center">';
                echo "The most suited areas of specializations for <b>".$student["reg_no"]."</b> are: <br>";
                echo $student["area_1"].": ".$student["score_1"]."%"."<br>";
                echo $student["area_2"].": ".$student["score_2"]."%"."<br>";
                echo $student["area_3"].": ".$student["score_3"]."%"."<br>";
            echo '</section>';
            die();
            }
        }
    }

// include('my_script.php');
?> 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Existing Prediction</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <div class="container">
            <a href="index.php"><img src = "images\CS UNN logo.png"></a>
            </div>
        </header>
        <?php if($error){
                    echo '<div color = "red" class = "alert alert-danger" role = "alert"><b><i>'.$error.'</i></b></div>';
                }
                if($message){
                    echo '<div class = "alert alert-success" role = "alert">'.$message.'</div>';
                }?>
        <section>
        <form method="POST">
            <div>
                <p><label for = "reg_no">Enter your Registration Number: </label>
                <input type="text" name="reg_no" required minlength="11" maxlength="11" size="12"></p>
            </div>

            <div>
                <button type = "submit" name="submit">Submit</button>
            </div>

        </form>
        </section>
    </body>
</html>