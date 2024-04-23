<?php

require_once "../Model/TodoList.php";
require_once "../View/viewRemoveTodoList.php";
require_once "../bussinesLogic/addTodoList.php";
require_once "../bussinesLogic/showTodoList.php";

addTodoList("Hegar");
addTodoList("Ibna");
addTodoList("Vanka");
addTodoList("Adit");

showTodoList();

viewAddTodoList();

showTodoList();