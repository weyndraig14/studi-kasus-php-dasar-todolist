<?php

require_once "../Model/TodoList.php";
require_once "../bussinesLogic/addTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/removeTodoList.php";

addTodoList("Vior");
addTodoList("Okto");
addTodoList("Faqih");
addTodoList("Dani");
addTodoList("Fajar");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(4);
var_dump($success);