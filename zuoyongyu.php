<?php
    header("Content-Type: text/html; charset=utf8");
    $globa = "global area";

    function display(){
        global $global;
        $global = "inner";
        var_dump($GLOBALS);
    }

    display();
    var_dump($global);
?>