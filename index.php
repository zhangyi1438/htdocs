<?php
 

 $a = 10;
 $b = $a;
 $b = 5;
 echo $a,$b,'</br>';

 $c = 10;
 $d = &$c;
 $d = 5;
 echo $c,$d,'</br>';

 define('PI',3.14);

 const PII = 3;



 define('-_-','smile');

 echo PI;
 echo constant('-_-');

 //ϵͳ����

 echo PHP_INT_MAX,"</br>",PHP_INT_SIZE,"</br>",PHP_VERSION;

 //ħ������

 echo '<hr/>';

 echo __DIR__,'<br/>',__FILE__,'<br/>',__LINE__,'<br/>';
 echo __LINE__;
 
 //���ε���������

 $a = 120;
 $b = 0b110;
 $c = 0120;
 $d = 0x120;

 echo $a,'~',$b,'~',$c,'~',$d;
//������ ԭ�� ���� ����

echo '<hr/>';
 $a = 1;
 echo ++$a,'~';
 echo $a,'<br/>';
 $a = 1;
 echo $a++,'~';
 echo $a,'<br/>';

 echo '<hr/>' ;
$a = 1;
 switch ($a){
     case 1:
        echo '11111';
        break;
 }

 echo '<hr/>' ;

 for($a = 1;$a <= 10;$a ++){
     echo $a;
     echo '<br/>' ;
 }

 echo '<hr/>' ;

 $a = 1;
 while ($a<=100){
     if($a % 5 != 0){
        $a++; 
        continue;
     }
     echo $a,'<br/>';
     $a++;
 }

 echo '<hr/>' ;
?>
<table border="1">
    <?php for($a = 1;$a < 10;$a++): ?>
        <tr>
            <?php for($b = 1;$b < 10;$b++):?>
                <td> <?php echo $a.'*'.$b.'='.$a * $b ?> </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>
