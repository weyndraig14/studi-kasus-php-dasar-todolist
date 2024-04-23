<?php

require_once "../Model/TodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Agung");
addTodoList("Timotius");
addTodoList("Sinaga");

var_dump($todoList);