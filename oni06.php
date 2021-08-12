<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>鬼練１</title>
  <link rel="stylesheet" type="text/css" href="./style06.css">
</head>
<body>
  <?php
  const CHOICE = array(
    'YOUR' => '仕事に決まってるだろ！',
    'WORK' => '仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。',
    'HENTAI' => 'ぐ・・ぐへ・・ぐへへぇ・・・き・・きみが大事さぁぁ・・・ぐへへぇ。'
  );
  $answer = '';
  switch(mt_rand(0, 2)){
    case 0:
      $answer = CHOICE['YOUR'];
    break;
    case 1:
      $answer = CHOICE['WORK'];
    break;
    case 2:
      $answer = CHOICE['HENTAI'];
    break;
  }
  echo '彼女：仕事と私どっちを取るのよ！<br>';
  echo '自分：'.$answer.'<br>';
  if($answer === '仕事に決まってるだろ！'){
    echo '彼女：あたたたたたたたっーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }elseif($answer === '仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。'){
    echo '彼女：仕事してこいやーーーーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }elseif($answer === 'ぐ・・ぐへ・・ぐへへぇ・・・き・・きみが大事さぁぁ・・・ぐへへぇ。'){
    for($i=0;$i<100;$i++){

      echo '自分：あ・・アイシテルヨ・・ぐふ・ぐふふぅ。<br>';
    }
    echo '彼女：おまわりさぁぁぁぁぁぁぁぁぁぁぁぁぁぁぁぁぁぁっん！！<br>';
    echo '警察官：どうしましたか！！！！！？なんだ！お前はぁぁぁぁぁ！！！！！<br>';
    echo '自分：え・・あ・・ぃ・・いや・・・。<br>';
    echo 'カチャッ。';
  }
  ?>
</body>
</html>