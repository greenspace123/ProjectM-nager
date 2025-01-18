<?php

include 'Task.php';
include 'Project.php';


$project = new Project("Разработка нового сайта");


$task1 = new Task("Дизайн главной страницы", "Создать макет главной страницы.");
$task2 = new Task("Разработка API", "Реализовать API для взаимодействия с базой данных.");


$project->addTask($task1);
$project->addTask($task2);


$task1->setStatus("В процессе");
$task2->setStatus("Выполнено");


echo $task1;
echo $task2;
echo $project;


unset($task1);
unset($task2);
unset($project);
?>
