<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

       include('Student.php');
       $students = array();
       
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->status('Freshman');
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['AA123'] = $first;
                
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['AA456'] = $second;
        
        $third = new Student();
        $third->surname = "Jinhui";
        $third->first_name = "Huang";
        $third->add_email('work','2524500884@qq.com');
        $third->add_grade(90);
        $third->add_grade(90);
        $third->add_grade(95);
        $students['AA789'] = $third;
        
        $fourth = new Student();
        $fourth->surname = "Tengfeng";
        $fourth->first_name = "Huang";
        $fourth->add_email('work','760201280@qq.com');
        $fourth->add_grade(95);
        $fourth->add_grade(80);
        $fourth->add_grade(85);
        $students['BB789'] = $fourth;
        
         ksort($students);
         foreach($students as $student)
         echo $student->toString();

        ?>
    </body>
</html>
