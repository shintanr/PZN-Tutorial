<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Shinta");
addTodoList("Nurrohmah");

var_dump($todoList);