<?php
include ("../init.php");
use Models\Student;

$student= new Student('', '', '', '', '', '');
$student->setConnection($connection);
$all_students = $student->displayStudents();

$template = $mustache->loadTemplate('student/index.mustache');
echo $template->render((compact('all_students')));

