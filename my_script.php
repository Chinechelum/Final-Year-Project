<?php
include('utility.php');

$__error = "";
$__message = "";

function myFilter($var){
    return ($var !== "" && $var !== NULL);
}

function average($arr)
{
    if (!is_array($arr)) return false;
    
    // Filtering the array
    $filtered_array = array_filter($arr, "myFilter");
    
    // if (count($filtered_array) == 0){
    //     global $__error;
    //     $__error .= " All fields cannot be blank.";
    //     return;
    // } else{
        return array_sum($filtered_array)/count($filtered_array);
    // }
}

function store($db, $reg_no, $area_1, $score_1, $area_2, $score_2, $area_3, $score_3){
    global $__error; global $__message;
    $user_row = $db->query("SELECT * FROM prediction where reg_no = '$reg_no'");

    if ($user_row -> num_rows > 0){
        $__error .= " Registration Number already registered.";
    }else{
        $sql = "INSERT INTO prediction(reg_no, area_1, score_1, area_2, score_2, area_3, score_3) VALUES('$reg_no', '$area_1', '$score_1', '$area_2', '$score_2', '$area_3', '$score_3')";
        $result = $db->query($sql);

        if ($result){
            $__message .= " Registration successful.";
            $reg_no = ""; $area_1 = ""; $score_1 = ""; $area_2 = ""; $score_2 = ""; $area_3 = ""; $score_3 = "";
        } else {
            $__error .= " Sorry. Something went wrong! Try again.";
            // $error .= "Error occurred ".$db->error;
        }      
        
    }
}

if (isset($_POST['submit'])){
    if ($_POST['reg_no'] == "" || $_POST['reg_no'] == NULL){
        $__error .= " Registration Number must be inputted.";
    } else {
    $reg_no = $_POST['reg_no'];
    $cos101 = clean_input($_POST['cos101']);
    $cos102 = clean_input($_POST['cos102']);
    $cos104 = clean_input($_POST['cos104']);
    $cos201 = clean_input($_POST['cos201']);
    $cos251 = clean_input($_POST['cos251']);
    $cos202 = clean_input($_POST['cos202']);
    $cos222 = clean_input($_POST['cos222']);
    $cos301 = clean_input($_POST['cos301']);
    $cos303 = clean_input($_POST['cos303']);
    $cos311 = clean_input($_POST['cos311']);
    $cos331 = clean_input($_POST['cos331']);
    $cos333 = clean_input($_POST['cos333']);
    $cos341 = clean_input($_POST['cos341']);
    $cos313 = clean_input($_POST['cos313']);
    $cos315 = clean_input($_POST['cos315']);
    $cos321 = clean_input($_POST['cos321']);
    $cos335 = clean_input($_POST['cos335']);
    $cos352 = clean_input($_POST['cos352']);
    $cos372 = clean_input($_POST['cos372']);
    $cos314 = clean_input($_POST['cos314']);
    $cos316 = clean_input($_POST['cos316']);
    $cos322 = clean_input($_POST['cos322']);
    $cos334 = clean_input($_POST['cos334']);
    $cos342 = clean_input($_POST['cos342']);
    $cos451 = clean_input($_POST['cos451']);
    $cos461 = clean_input($_POST['cos461']);
    $cos415 = clean_input($_POST['cos415']);
    $cos411 = clean_input($_POST['cos411']);
    $cos413 = clean_input($_POST['cos413']);
    $cos431 = clean_input($_POST['cos431']);
    $cos453 = clean_input($_POST['cos453']);
    $cos455 = clean_input($_POST['cos455']);
    $cos457 = clean_input($_POST['cos457']);
    $cos452 = clean_input($_POST['cos452']);
    $cos462 = clean_input($_POST['cos462']);
    $cos432 = clean_input($_POST['cos432']);
    $cos454 = clean_input($_POST['cos454']);
    $cos414 = clean_input($_POST['cos414']);
    $cos412 = clean_input($_POST['cos412']);
    $cos458 = clean_input($_POST['cos458']);
    $cos464 = clean_input($_POST['cos464']);
    $cos472 = clean_input($_POST['cos472']);
    $cos456 = clean_input($_POST['cos456']);
    
    if ($__error){ //Just incase. You never know, ay?
        return;
    }

    $all_courses = array($cos101, $cos102, $cos104, $cos201, $cos251, $cos202, $cos222, $cos301, $cos303, $cos311, $cos331, $cos333, $cos341, $cos313, $cos315, $cos321, $cos335, $cos352, $cos372, $cos314, $cos316, $cos322, $cos334, $cos342, $cos451, $cos461, $cos415, $cos411, $cos413, $cos431, $cos453, $cos455, $cos457, $cos452, $cos454, $cos414, $cos412, $cos458, $cos464, $cos472, $cos456);

    $filtered_all_courses = array_filter($all_courses, "myFilter");
    
    if (count($filtered_all_courses) == 0){
        $__error .= " All fields cannot be blank.";
    } else {
        
        $system_engine_array = array($cos101, $cos102, $cos251, $cos301, $cos303, $cos341, $cos333, $cos335, $cos372, $cos334, $cos342, $cos451, $cos412, $cos472);
        
        $sw_engine_array = array($cos101, $cos102, $cos104, $cos201, $cos202, $cos222, $cos321, $cos335, $cos322, $cos451, $cos461, $cos431, $cos457, $cos462, $cos464);

        $AI_array = array($cos101, $cos102, $cos104, $cos201, $cos251, $cos202, $cos352, $cos451, $cos415, $cos453, $cos454, $cos458);
        
        $computer_networks_array = array($cos101, $cos102, $cos313, $cos352, $cos314, $cos451, $cos455, $cos456);

        $theoretical_CS_array = array($cos101, $cos102, $cos311, $cos331, $cos341, $cos315, $cos352, $cos316, $cos451, $cos411, $cos413, $cos461, $cos452, $cos432, $cos414, $cos464);


        $system_engine_avg = average($system_engine_array);
        $sw_engine_avg = average($sw_engine_array);
        $AI_avg = average($AI_array);
        $computer_networks_avg = average($computer_networks_array);
        $theoretical_CS_avg = average($theoretical_CS_array);

        $AOS = array("System Engineering" => $system_engine_avg, "Software Engineering" =>  $sw_engine_avg,"Artificial Intelligence" => $AI_avg, "Computer Networks" => $computer_networks_avg, "Theoretical Computer Science" => $theoretical_CS_avg);

        arsort($AOS);

        $length = 3;
        $start = 0;
        $first_3 = array_slice($AOS, $start, $length, true);
        $first_3_areas = array_keys($first_3);

        $area_1 = $first_3_areas[0];
        $area_2 = $first_3_areas[1];
        $area_3 = $first_3_areas[2];
        $score_1 = $first_3[$area_1];
        $score_2 = $first_3[$area_2];
        $score_3 = $first_3[$area_3];

        
        $db = connect();
        store($db, $reg_no, $area_1, $score_1, $area_2, $score_2, $area_3, $score_3);

        // header("location:/project/report.php");
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
}

        // if(empty($fname) || empty($lname) || empty($gender)
        // || empty($email) || empty($it_center) || empty($address)
        // || empty($course) || empty($password)){
        //     $error .= " All fields are required.";
        // } 
        // else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //     $error .= " Invalid Email address.";
        // } //SIMILAR TO  (BUT BETTER THAN) SPECIFYING INPUT TYPE OF THE EMAIL FEILD TO BE EMAIL AND NOT TEXT
        
        // }
        // else{
        //     $role = "student";
        //     $user_row = $db->query("SELECT * FROM users where email = '$email'");

        //     if ($user_row -> num_rows > 0){
        //         $error .= " Email already registered.";
        //     }else{
        //         $sql = "INSERT INTO users(fname, lname, email, gender, course, it_center, `address`, `password`, `user_role`) VALUES('$fname', '$lname', '$email', '$gender', '$course', '$it_center', '$address', '$hash_password', '$role')";
        //         $result = $db->query($sql);

        //         if ($result){
        //             $message .= " Registration successful.";
        //             $fname = ""; $lname = ""; $gender = ""; $email = ""; $it_center = ""; $address = ""; $course = "";
        //         } else {
        //             $error .= " Sorry. Something went wrong! Try again.";
        //             // $error .= "Error occurred ".$db->error;
        //         }
        //     }
            
            
        // }
        

?>