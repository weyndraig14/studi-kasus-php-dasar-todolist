<?php

require_once "../View/viewAddTodoList.php";
require_once "../bussinesLogic/showTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Farel");
addTodoList("Gusti");
addTodoList("Aldizar");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();