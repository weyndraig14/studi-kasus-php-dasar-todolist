<?php

require_once "../View/viewShowTodoList.php";
require_once "../bussinesLogic/addTodoList.php";

addTodoList("Enda");
addTodoList("Naufal");
addTodoList("Ilham");
addTodoList("Danendra");
addTodoList("Alfariz");

viewShowTodoList();