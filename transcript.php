<?php
include('my_script.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Prediction</title>
        <!-- <link href = "css/bootstrap.css" rel = "stylesheet"> -->
        <link rel = "stylesheet" href = "style.css">
        
    </head>
	<body>
 
    <header>
        <div class="container">
        <a href="index.php"><img src = "images\CS UNN logo.png"></a>
        </div>
    </header>
    
    <section class="features">
            <h1>Enter the result.</h1>
            <p><b><i>Leave blank any you did not offer.</i></b></p>
            <?php if($__error){
                    echo '<div color = "red" class = "alert alert-danger" role = "alert"><b><i>'.$__error.'</i></b></div>';
                }
                if($__message){
                    echo '<div class = "alert alert-success" role = "alert">'.$__message.'</div>';
                }?>
            <form method="POST">
                <div>
                    <p><label for = "reg_no">Enter your Registration Number: </label>
                    <input type="text" name="reg_no" required minlength="11" maxlength="11" size="12"></p>
                </div>
                <div>
                    <p><label for = "cos101">COS 101: Introduction to Computer Science</label>
                    <input type = "number" name="cos101" class="number" min="45" max="100"></input></p>

                    <p><label for = "cos102">COS 102: Introduction to Computer Systems</label>
                    <input type = "number" name="cos102" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos104">COS 104: Computing Practice</label>
                    <input type = "number" name="cos104" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos201">COS 201: Computer Programming I</label>
                    <input type = "number" name="cos201" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos251">COS 251: Machine and Assembly Language</label>
                    <input type = "number" name="cos251" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos202">COS 202: Computer Programming II</label>
                    <input type = "number" name="cos202" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos222">COS 222: File Processing</label>
                    <input type = "number" name="cos222" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos301">COS 301: Introduction to Digital Design</label>
                    <input type = "number" name="cos301" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos303">COS 303: Introduction to Micro Computer Systems</label>
                    <input type = "number" name="cos303" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos311">COS 311: Numerical Methods I</label>
                    <input type = "number" name="cos311" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos331">COS 331: Compiler Construction I</label>
                    <input type = "number" name="cos331" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos333">COS 333: Operating Systems I</label>
                    <input type = "number" name="cos333" class="number" min="45" max="100"></input type = "number"></p>
                    
                    <p><label for = "cos341">COS 341: Computer Architecture I</label>
                    <input type = "number" name="cos341" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos313">COS 313 (or MTH 341): Switching Algebra & Discrete Structures I</label>
                    <input type = "number" name="cos313" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos315">COS 315: Operations Research I</label>
                    <input type = "number" name="cos315" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos321">COS 321: Database Design & Management I</label>
                    <input type = "number" name="cos321" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos335">COS 335: Systems Analysis & Design</label>
                    <input type = "number" name="cos335" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos352">COS 352: Data Structures</label>
                    <input type = "number" name="cos352" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos372">COS 372: Laboratory for Digital Design</label>
                    <input type = "number" name="cos372" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos314">COS 314 (or MTH 342): Switching Algebra & Discrete Structures II</label>
                    <input type = "number" name="cos314" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos316">COS 316: Automata Theory & Formal Languages</label>
                    <input type = "number" name="cos316" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos322">COS 322: Database Design & Management II</label>
                    <input type = "number" name="cos322" class="number" min="45" max="100"></input type = "number"></p>

                    <p<label for = "cos334">COS 334: Operating Systems II</label>
                    <input type = "number" name="cos334" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos342">COS 342: Computer Architecture II</label>
                    <input type = "number" name="cos342" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos451">COS 451: Algorithms</label>
                    <input type = "number" name="cos451" class="number" min="45" max="100"></input type = "number"></p>

                    <p<label for = "cos461">COS 461: Organisation of Programming Languages</label>
                    <input type = "number" name="cos461" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos415">COS 415: Systems Modelling & Simuation</label>
                    <input type = "number" name="cos415" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos411">COS 411: Numerical Methods II</label>
                    <input type = "number" name="cos411" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos413">COS 413: Queuing Theory</label> 
                    <input type = "number" name="cos413" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos431">COS 431: Software Engineering & Management</label>
                    <input type = "number" name="cos431" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos453">COS 453: Computer Process Control</label>
                    <input type = "number" name="cos453" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos455">COS 455: Data Communication & Networks I</label>
                    <input type = "number" name="cos455" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos457">COS 457: Computer Graphics </label>
                    <input type = "number" name="cos457" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos452">COS 452: Computer Centre Management</label>
                    <input type = "number" name="cos452" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos462">COS 462: Structured Programming</label> 
                    <input type = "number" name="cos462" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos432">COS 432: Compiler Construction II </label>
                    <input type = "number" name="cos432" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos454">COS 454: Artificial Intelligence</label> 
                    <input type = "number" name="cos454" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos414">COS 414: Operations Research II </label>
                    <input type = "number" name="cos414" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos412">COS 412: Computer Performance Evaluation </label>
                    <input type = "number" name="cos412" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos458">COS 458: Expert Systems </label>
                    <input type = "number" name="cos458" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos464">COS 464: Concurrent Programming </label>
                    <input type = "number" name="cos464" class="number" min="45" max="100"></input type = "number"></p>
                    
                    <p><label for = "cos472">COS 472: Advanced Digital Laboratory </label>
                    <input type = "number" name="cos472" class="number" min="45" max="100"></input type = "number"></p>

                    <p><label for = "cos456">COS 456: Data Communication & Networks II </label>
                    <input type = "number" name="cos456" class="number" min="45" max="100"></input type = "number"></p>
                </div>



            <!-- <div>
                <select name="courses">
                    <option value="course_1">COS 251: Machine and Assembly Language</option> <option value="course_2">COS 301: Introduction to Digital Design</option> <option value="course_3">COS 303: Introduction to Micro Computer Systems</option>
                    <option value="course_4">COS 341: Computer Architecture </option> 
                    <option value="course_5">COS 333: Operating Systems I </option>
                    <option value="course_6">COS 372: Laboratory for Digital Design </option>
                    <option value="course_7">COS 334: Operating Systems II </option>
                    <option value="course_8">COS 342: Computer Architecture II </option>
                    <option value="course_9">COS 412: Computer Performance Evaluation</option>
                    <option value="course_10">COS 472: Advanced Digital Laboratory </option>
                </select>

                <input type = "number" name="" class="number" min="45" max="100"></input type = "number">                        
            </div>

            <select name="grades"> <option value="A">A</option> <option value="B">B</option> <option value="C">C</option> <option value="D">D</option> <option value="E">E</option> <option value="F">F</option></select>
             

            <div>
                <select name="courses"> <option value="course_1">COS103: Computer Hardware Organisation</option> <option value="course_2">COS105: Introduction to Computer Science for Physical Sciences</option> <option value="course_3">MTH111: Elementary Mathematics I</option> <option value="course_4">MTH121: Elementary Mathematics II</option> </select>

                <input type = "number" name="" class="number" min="45" max="100"></input type = "number">
            </div>

            <div>
                <select name="courses"> <option value="course_1">COS103: Computer Hardware Organisation</option> <option value="course_2">COS105: Introduction to Computer Science for Physical Sciences</option> <option value="course_3">MTH111: Elementary Mathematics I</option> <option value="course_4">MTH121: Elementary Mathematics II</option> </select>

                <input type = "number" name="" class="number" min="45" max="100"></input type = "number">      
            </div> -->
            <div>
                <button type = "submit" name="submit">Submit</button>
            </div>
        </form>

        

    </section>   
    <!--<section class="features">
        features
    </section>-->

    <!--<section class="quote">
        quote
    </section>
    <footer>
    footer
    </footer>-->
</body>
</html>
