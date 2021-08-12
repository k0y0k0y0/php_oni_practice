<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>鬼練１</title>
  <link rel="stylesheet" type="text/css" href="./style04.css">
</head>
<body>
  <?php
  $answer = '仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。';

  echo '彼女：仕事と私どっちを取るのよ！<br>';
  echo '自分：'.$answer.'<br>';
  if($answer==='仕事に決まってるだろ！'){
    echo '彼女：あたたたたたたたっーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }else if($answer==='仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。'){
    echo '彼女：仕事してこいやーーーーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }
  ?>
</body>
</html>