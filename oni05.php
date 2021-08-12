<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>鬼練１</title>
  <link rel="stylesheet" type="text/css" href="./style05.css">
</head>
<body>
  <?php
  /*
  $word = mt_rand(0, 2);
  
  if($word===0) $answer = '仕事に決まってるだろ！';
  elseif($word===1) $answer = '仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。';
  else $answer = 'ぐ・・ぐへ・・ぐへへぇ・・・き・・きみが大事さぁぁ・・・ぐへへぇ。';

  echo '彼女：仕事と私どっちを取るのよ！<br>';
  echo '自分：'.$answer.'<br>';
  if($answer === '仕事に決まってるだろ！'){
    echo '彼女：あたたたたたたたっーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }elseif($answer === '仕事よりも君が大事さ。仕事はもう嫌で嫌で嫌で。。嫌で嫌で嫌で。。ほんと嫌なんだ。'){
    echo '彼女：仕事してこいやーーーーーー！！<br>';
    echo '自分：ひでぶっ！！';
  }elseif($answer === 'ぐ・・ぐへ・・ぐへへぇ・・・き・・きみが大事さぁぁ・・・ぐへへぇ。'){
    echo '彼女：ひぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃ！！';
    echo '自分：ひでぶっ！！';
  }
  */
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
    echo '彼女：ひぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃぃ！！<br>';
    echo '自分：ひでぶっ！！';
  }
  ?>
</body>
</html>