<?php
//var_dump($_POST);
if(!empty($_POST)){
	//echo "set";
	try{
		$pdo=new PDO('mysql:host=localhost;dbname=webpro2exmadb;charset=utf8;','root','');
		$sql="insert into messages(room_id,content) values(".intval($_POST['room_id']).",'".$_POST['article']."')";
		$pdo->query($sql);
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
	$pdo = null;
	header("location:/exam/Messages/?room_id=".$_POST['room_id']);
	exit();

}else{
	//echo "get";
		try{
				$pdo=new PDO('mysql:host=localhost;dbname=webpro2exmadb;charset=utf8;','root','');
				$msql = "select * from messages where room_id =".$_GET['room_id']."";
				$tmp = $pdo->query("select * from rooms where id=".$_GET['room_id']);
				$title;
				foreach($tmp as $row){
					$title=$row["name"];
				}
				$messages=$pdo->query($msql);
			}catch (PDOException $e){
				print('Error:'.$e->getMessage());
				die();
			}	
			$pdo = null;	
		}
?>


<html lang="ja">

<body>
<a href="/exam/ROOM">戻る</a>
<ul>
  <h1><font color="#666666">ルーム一覧</font></br>
  </h1>
  <p>&nbsp;</p>
  <h2>
    <?php echo $title;?>
  </h2>
  <h3><?php echo $title;?>の一覧です</h3>
</ul>
----------------------------------------------------------------------------------------------------------------------------------------------
</br>
<?php

foreach($messages as $row){
	echo $row["sent_at"]." ".$row["content"]."<br>";
}

?>

</br>
----------------------------------------------------------------------------------------------------------------------------------------------
</br></br>
何か話しましょう!
<form method="POST" action="index.php">
	<?php
    echo "<input type='hidden' name='room_id' value=".$_GET['room_id'].">";
    ?>
    <textarea id= "article" name="article" cols="70" rows="15"></textarea>
    <input type="submit" class="btn btn-warning btn-sm" id="btn-chat" value="Send" />
</form>
</body>
</html>