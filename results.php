<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-O-Rama Search Results</title>
</head>
<body>
    <h1>Book-O-Rama Search Results</h1>
    <?php

        /**
         * 
        
        $searchtype = $_POST['searchtype'];
        $searchterm = trim($_POST['searchterm']);
        
        if (!$searchtype || !$searchterm) {
            echo '<p>你没有输入搜索关键字.<br>
            请返回后重新操作</p>';
            exit;
        }

        switch ($searchtype) {
            case 'Title':
            case 'Author':
            case 'ISBN':
                break;
            default:
                echo '<p>这不是一个有效的搜索类型。<br>
                请返回后重新操作</p>';
                exit;
        }

        $db = new mysqli('localhost','root','root','books');
        if (mysqli_connect_errno()) {
            echo '<p>错误：不能连接到数据库<br>
            请稍后再试</p>';
            exit;
        }

        $query = "SELECT ISBN,Author,Title,Price FROM Books WHERE $searchtype = ?"; 
        $stmt = $db->prepare($query);
        $stmt->bind_param('s',$searchterm);
        $stmt->execute();
        $stmt->store_result();

        $stmt->bind_result($isbn,$author,$title,$price);

        echo '<p>查找出来的书的个数'.$stmt->num_rows.'</p>';

        while ($stmt->fetch()){
            echo "<p><strong>Title:".$title."</strong></p>";
            echo "<br/>Author:".$author;
            echo "<br/>ISBN:".$isbn;
            echo "<br/>Price:".$price;
        }

        $stmt->free_result();
        $db->close();
        */var_dump($_POST['hobby']);

        echo '<h1>尊敬的'.$_POST['username'].'先生</h1>';
        echo '<p>您选择了'.sizeof($_POST['hobby']).'项爱好:</p> ';
        
        echo '<p>';
        for($i = 0;$i<sizeof($_POST['hobby']);$i++){
            echo $_POST['hobby'][$i].' ';
        };
        echo '</p>';
        
        echo '<p>您的职业：'.$_POST['job'].'</p>';
        echo '<p>您的个新签名：'.$_POST['intro'];


    ?>
</body>
</html>

