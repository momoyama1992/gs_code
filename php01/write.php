
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
    <h1>書き込みました。</h1>
This is a Pen. とdata.txt に書き込みます。
<?php
// $name = $_POST["name"];
// $mail = $_POST["mail"];
// $age = $_POST["age"];
// $memo = $_POST["memo"];
// $c = ",";
// $str = $date.$name.$mail.$c.$age.$memo;

$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$memo = $_POST["memo"];

$c = ",";
$str = '<p>'.$date.$name.$mail.$c.$age.$memo.'<p>';

//文字作成
$date = date("Y-m-d H:i:s");
//File書き込み
// $file = fopen("data/data.txt","a");	// ファイル読み込み
// fwrite($file, $date.$c.$str."\n");
// fclose($file);

$file = fopen("read.php","a");	// ファイル読み込み
fwrite($file, $date.$c.$str."\n");
fclose($file);

?>



<ul>
<li><a href="post.php">戻る</a></li>
<li><a href="read.php">確認する</a></li>
</ul>
</body>
</html>