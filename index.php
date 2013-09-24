<?php

ini_set('display_errors',0);
mb_internal_encoding("utf-8");

$db_host = "localhost";
$db_user = "root";
$db_passwd = "asdf";

$db = mysql_connect($db_host,$db_user,$db_passwd);

$db_name = "graduation";
mysql_select_db($db_name,$db);

$str_sql = "select * from main";
$rs = mysql_query($str_sql,$db) or die();

print <<<html
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css">
	<title>科学技術専門学校！求人情報サイト</title>

	<style type="text/css">
<!--
body{
	margin-top: 50;
	margin-left: 100;
	margin-wright: 50;
	color: #505050;
}
-->
</style>
</head>
<body>

<h1>企業検索</h1>
<form method="POST" action="result.php">
企業名: <input type="text" name="serch_company"/>
<br/>
<input type="submit" value="検索"/>
</form>

<form method="POST" action="result.php">
給料: <input type="number" name="serch_salary"/>
<br/>
<input type="submit" value="検索"/>
</form>

<from method="POST" action="result.php">
学部学科:
<select name ="subject">
<option value=""<selected>--学部学科選択--</option>
	<option value="deza">建築設計</option><br>
	<option value="nat">自然環境</option><br>
	<option value="bio">バイオ</option><br>
	<option value="sea">海洋生物学</option><br>
	<option value="elec">電気技術</option><br>
	<option value="info">情報システム</option><br>
	<option value="car">自動車整備</option><br>
	<option value="bike">自動二輪</option><br>
</select><br>
<input type="submit" value="送信">


<a href=http://localhost/graduation/login.php>ログイン</a>

</body>
</html>
html;

?>