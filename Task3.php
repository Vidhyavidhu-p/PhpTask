<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <style>
        body{
            background-color: whitesmoke;
            text-align: center;
        }
        .head{
            background-color: black;
            color:white;
        }
        fieldset{
            border: 15px solid black;
            padding: 10px;
            margin: 20px;
        }
      
    </style>
</head>
<body>
     <h1 class="head">MS University</h1>
       
           <fieldset>
          <h2> Student Marksheet </h2> <hr>
            <img src="/Assets/student.jpg" alt="MS University Logo"><br>
    
        <?php
        class StudentMarks
        {
        public $student_name = "<b>Priya</b>";
        public $student_id ="2025301";
        public $student_class ="FirstClass";
        public $student_tamilmark = "80";
        public $student_englishmark = "85";
        public $student_mathsmark = "90";
        public $student_physicsmark = "90";
        public $student_chemistrymark = "89";
        public $student_computermark ="97";      
        public $student_totalmark = "531";
        }

       $student = new StudentMarks();
        echo " " . $student->student_name . "<br><br>";
        echo "Id : " . $student->student_id . "<br><br>";
        echo "Class: " . $student->student_class . "<br><br>";
        echo "Tamilmark: " . $student->student_tamilmark . "<br><br>";
        echo "Englishmark: " . $student->student_englishmark . "<br><br>";
        echo "Mathsmark: " . $student->student_mathsmark . "<br><br>";
        echo "Physicsmark: " . $student->student_physicsmark . "<br><br>";
        echo "Chemistrymark: " . $student->student_chemistrymark . "<br><br>";
        echo "Computermark: " . $student->student_computermark . "<br><br>";
        echo "Totalmark: " . $student->student_totalmark . "<br>";
        ?>
        </h3>
        </fieldset>
     
    <?php 
    $isActive=true;
    ?>
    <h2>Boolean data type The boolean value is: 
        <?php echo $isActive; ?></h2>


</body>
</html>
