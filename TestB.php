<?php
require_once "TestA.php";

class TestB {
    public function ta(){
        echo TestA::ta();
    }
}



$t = new TestB();
$t->ta();