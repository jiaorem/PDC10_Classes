<?php

include ("../init.php");
use Models\Teacher;

$teacher= new Teacher('', '', '', '', '', '');
$teacher->setConnection($connection);
$all_teachers = $teacher->displayTeachers();

$template = $mustache->loadTemplate('teacher/index.mustache');
echo $template->render((compact('all_teachers')));
?>
