ines (16 sloc)  343 Bytes
   
<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool // return valuenya tipena bool
{
    global $todoList;

    if ($number > sizeof($todoList)) { // jika number yang dimasukkan lebih dari jumlah todolist yang ada, maka akan mengembalikan nilai false 
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    } // kode ini digunakan untuk mereplace, atau mengganti tempat. misal nomor 2 dihapus, maka nomor 3 akan menggantikan nomor 2

    unset($todoList[sizeof($todoList)]); // unset ini digunakan mereset size dari todolist setelah dihapus

    return true;
}