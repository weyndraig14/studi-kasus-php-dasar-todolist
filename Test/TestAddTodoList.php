<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Agung");
addTodoList("Timotius");
addTodoList("Sinaga");

var_dump($todoList);
