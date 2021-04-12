<?php
    header("Content-type:text/html;charset=utf-8");
    $host = "110.241.119.195";//"";
    $user = "root";
    $password = "root";
    $database = "itcase";
    $port = "3306";
    
    $conn = mysqli_connect($host,$user,$password,$database,$port);
    if(!mysqli_connect_errno()){
        
        $sql_select_database = "show databases";
        $stmt = mysqli_prepare($conn,$sql_select_database);
        //$stmt->bind_param(s,);
        $stmt->execute();
        
        $stmt->store_result();

        $stmt->bind_result($databases);

        echo "<p>the num of result is ".$stmt->num_rows."</p>";     
    
        while($stmt->fetch()){
            echo $databases."<br/>";
        }

        $stmt->free_result();

        $sql_dorp_if_exit = "DROP TABLE if exists bookss";
        $sql_create = "create table if not exists bookss(
            id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(13) NOT NULL,
            ISBN VARCHAR(13) NOT NULL,                     
            content TEXT 
        )";
        
        $sql_insert = "INSERT into bookss VALUE(
            null,'name','1234567890123','我是一本书的内容-——-content'
        )";

        var_dump($conn->query($sql_dorp_if_exit));
        var_dump($conn->query($sql_create));
        var_dump($conn->query($sql_insert));
        var_dump(mysqli_error($conn));
        $sql_select_bookss = "
            SELECT *
            FROM BOOKSS
            WHERE id = ?
        ";

        $stmt = $conn->prepare($sql_select_bookss);
        $id=1;
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->store_result();
        echo "<p>the result row is ".$stmt->num_rows."</p>";
        $stmt->bind_result($id,$name,$ISBN,$content);
        while($stmt->fetch()){
            echo $id.' '.$name.' '.$ISBN,' ',$content,'<br/>';
        }
        $stmt->free_result();
        $conn->close();
        //$result = $conn->query($sql); 
        // foreach ($result as $row) {
        //     # code...
        //     foreach ($row as $finalRes) {
        //         # code...
        //         echo $finalRes." ";
        //     }
        //     echo '<br/>';
        // }
        // echo $result;
    }else{
        var_dump("connect database failed");
    }
     
   
?>