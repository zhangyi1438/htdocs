<?php
/*
 * 函数的定义：
 * 1.函数是一个被命名的
 * 2.独立的代码段
 * 3.他执行特定的任务
 * 4.并可以给吊用他的程序返回一个值
 * 
 * 函数的优点：
 * 1。提高程序的重用性
 * 2.提高程序的可维护性
 * 3.提高软件的开发效率
 * 4.提高软件的可靠性
 * 5.控制程序的复杂性
 * 
 * 函数的声明
 * function 函数名（）{
 *      函数体
 * }
 * 
 * function 函数名（参数一，参数二，参数。。。。）{  //参数列表，如果有多个就用，分开
 *      函数体
 * }
 * 
 * function 函数名（）{
 *      函数体
 *      返回值；
 * }
 * 
 * function 函数名（参数列表）{
 *      函数体
 *      返回值；
 * }
 * 
 * 一、函数必须调用才能执行，可以在声明之前调用，也可以在函数声明之后调用
 * 二、函数名名和变量一样，
 * 三、函数在声明时不能重名
 * 
*/
?>
<?php header("Content-Type:text/html;charset=utf-8");?>
<table border="1" width="800" align="center">
    <caption><h1>表名</h1></caption>

        <?php for($i = 1;$i<10;$i++):
            global  $bg;
            if($i%2 == 0)
                $bg = "#cccccc";
            else
                $bg = "#ffffff";
        ?>

            <tr bgcolor="<?=$bg?>">
                
            <?php for($j = 1;$j<10;$j++):?>
                <td>
                    <?php echo $i*$j ?>
                </td>
            <?php endfor;?>
            
        <?php endfor;?>
</table>
