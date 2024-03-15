<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Timotius");
addTodoList("Sinaga");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();