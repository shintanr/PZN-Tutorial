<?php

namespace Data;
class Shape {
    public function getCorner(){
        return 2;
    }
}

class Rectangle extends Shape {
    public function getCorner(){
        return 4;
    }  

    public function getParentCorner(){
        return parent::getCorner();
    }

}