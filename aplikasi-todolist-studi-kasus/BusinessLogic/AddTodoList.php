<?php

/**
 * Menambah todo ke list
 */

 function addTodoList(string $todo){
     global $todoList; // kenapa global, karena ambil dari model/todolist

     $number = sizeof($todoList) + 1; // untuk penomoran. karena indeks dimulai dari 0, maka untuk mumbernya, si

     $todoList[$number] = $todo; 
 }


