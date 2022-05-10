<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("shinta");
addTodoList("nur");
addTodoList("rohmah");

showTodoList();

removeTodoList(3);

showTodoList();