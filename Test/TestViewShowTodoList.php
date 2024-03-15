<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Timotius");
addTodoList("Sinaga");
addTodoList("Programmer");
addTodoList("Zaman");
addTodoList("Now");

viewShowTodoList();
