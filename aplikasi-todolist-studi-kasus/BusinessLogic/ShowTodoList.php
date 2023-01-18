<?php

/**
 * Menampilkan todo di list
 */


function showTodoList(){
    global $todoList;

    echo "TODOLIST". PHP_EOL; // menampilkan dengan echo. kemudian  fungsi PHP_EOL di sini adalah untuk membuat baris baru

    foreach ($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }

    // perulangan forEach di sini digunakan untuk menampilkan nilai atau isi yang ada di dalam array. 
}