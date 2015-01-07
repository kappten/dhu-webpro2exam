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
 foreach ( array('大学に関する話題','友達に関する話題','授業に関する話題','サークルに関する話題','ほかの話題') as $name){
	echo"<li>${name}</li>";
	}
?>
</ul>
</body>

</html>
