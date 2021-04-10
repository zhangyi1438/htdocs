<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-o-Rama Catalog Search</title>
    <?php ?>
</head>
<body>
    <h1>Book-O-Rama Catalog Search</h1>
    <form action="results.php" method="post">
        <p>
            <strong>Choose search type:</strong><br>
            <select name="searchtype" id="">
                <option value="Author">Author</option>
                <option value="Title">Title</option>
                <option value="ISBN">ISBN</option>
            </select>
            <p>
                <strong>Enter Search Term</strong>
                <input name="searchterm" type="text" size="40">
                <p><input type="submit" name="submit" value="search"></p>
            </p>
        </p>
    </form> 
</body>
</html>