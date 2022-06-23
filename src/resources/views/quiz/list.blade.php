<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

<body>
    <div class="links">
        <a href="./quiz/1">東京</a>
        <a href="./quiz/2">広島</a>
    </div>   
</body>
</html>

<?php
// phpinfo();
require("./db_connect.php");
// あるものを呼び出す際に使うやつ,相対パス


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testtesttest</title>
    <link rel="stylesheet" href="quizy.css">
    <link rel="stylesheet" href="riset.css">
</head>

<body>
<?php



?>
    <p><a href="./quiz.php?id=1">東京の難読地名クイズ</a></p>
    <p><a href="./quiz.php?id=2">広島の難読地名クイズ</a></p>


</body>

</html>



 