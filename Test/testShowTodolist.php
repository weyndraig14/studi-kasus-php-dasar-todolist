<?php

require_once "../Model/TodoList.php";
require_once "../bussinesLogic/showTodoList.php";

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";

showTodoList();