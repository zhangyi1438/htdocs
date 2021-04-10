<?php

    /**
     * 
     * 静态变量：static，是在函数内部定义的变量，使用static关键字修饰用来实现夸函数共享数据的变量：
     * 函数运行结束所有的局部变量都会清空，如果重新运行一下函数，所有局部变量又会重新初始化；
     * 
     * 基本语法：
     * function 函数名(){
     *     //定义变量
     *     static 变量名 = 值； //通常在定义的时候直接赋值；
     * }
     * 
     * 
     */
        function display(){
            //定义变量
            $local = "1";
            //定义静态变量
            static $count = 1;

            echo $local++,"~",$count++,"<br>";
        }

        //调用
        display();
        display();
        display();
?>
