<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/bussinesLogic/showTodoList.php";
require_once __DIR__ . "/bussinesLogic/addTodoList.php";
require_once __DIR__ . "/bussinesLogic/removeTodoList.php";
require_once __DIR__ . "/View/viewAddTodoList.php";
require_once __DIR__ . "/View/viewRemoveTodoList.php";
require_once __DIR__ . "/View/viewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();
