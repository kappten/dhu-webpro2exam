<html lang="ja">

<body>
<ul>
  <h1>ルーム一覧</br>
  </h1>
  <p>&nbsp;</p>
  <h4>
    発言したいルームを選択してください！
  </h4>
<br>
</br>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=webpro2exmadb;charset=utf8;','root','');
	//$stmt =$pdo->query("SELECT * FROM rooms ORDER BY on ASC");
	foreach($pdo->query("SELECT * FROM rooms") as $row){
		//var_dump($row);
		echo "<a href='http://localhost/exam/Messages/?room_id=".$row["id"]."'>".$row["name"]."</a><br>";
		//echo $row["id"]."<br>";
		
	}
?>
</ul>
</body>

</html>