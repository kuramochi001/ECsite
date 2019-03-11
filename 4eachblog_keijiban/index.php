<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <title>4eachblog 掲示板</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>

<?php
 mb_internal_encoding("utf8");
 $pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
 $stmt = $pdo->query("select*from 4each_keijiban");
?>
	
<img src="4eachblog_logo.jpg">
 <header>
  <ul>
   <li>トップ</li>
   <li>プロフィール</li>
   <li>4eachについて</li>
   <li>登録フォーム</li>
   <li>問い合わせ</li>
   <li>その他</li>
  </ul>
 </header>   
   
 <main>
 <div class="left">
  <h1>プログラミングに役立つ掲示板</h1>
  <div class="form">
  　<h3>入力フォーム</h3> 
  　<form method="post" action="insert.php">
　　<div>
    <labrl>ハンドルネーム</labrl>
    <br>
    <input type="text" class="text" size="35" name="handlname">
   </div>
   
   <div>
    <label>タイトル</label>
    <br>
    <input type="text" class="text" size="35" name="title">
   </div>

   <div>
    <label>コメント</label>
    <br>
    <textarea cols="35" rows="7" name="comments"></textarea>
   </div>
    
   <div>
    <input type="submit" class="submit" value="送信する">
   </div>
  </form>
 </div>
 
 <div class="main-comments">
<?php
while($row = $stmt->fetch()){
 echo"<div class='kiji'>";
 echo"<h3>".$row['title']."</h3>";
 echo"<div class='contents'>";
 echo $row['comments'];
 echo"<div class='handlname'>posted by".$row['handlname']."</div>";
 echo"</div>";
 echo"</div>";
}
?>
</div>
</div>
     
 <div class="right">
  　<h2>人気の記事</h2>
  　 <ul>
   　 <li>PHP オススメ本</li>
   　 <li>PHP MYAdiminの使い方</li>
    　<li>今人気のエディタ TOP5</li>
    　<li>HTMLの基礎</li>
   　</ul>
  　<h2>オススメリンク</h2>
   　<ul>
    　<li>インターノウス株式会社</li>
    　<li>XAMPPのダウンロード</li>
    　<li>Eclipseのダウンロード</li>
    　<li>Bracketsのダウンロード</li>
   　</ul>
  　<h2>カテゴリ</h2>
   　<ul>
    　<li>HTML</li>
   　 <li>PHP</li>
    　<li>MySQL</li>
    　<li>JavaScript</li>
   　</ul>
 　</div>  
 </main>
    
 <footer>
 <p>copyright©️internos 4each blog is the one which provides A to Z about programming.</p>
 </footer>
	
</body>
</html>