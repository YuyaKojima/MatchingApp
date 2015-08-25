<?php
//htmlspecialchars機能
function ht($value){
  return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Matching App</title>
</head>
<body>
  <div id="wrap">
  <div id="head">
    <h1 style="color: #F38" >新規勉強会登録</h1>
  </div>
  <div id="content">
<div style="text-align:right"><a href="">ログアウト</a></div>


 <p>次のフォームに必要事項を記入してください</p>
<form enctype="multipart/form-data" method = "post" action ="checkSeminar">
  <dl>
    <dt>研修名</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>カテゴリ</dt>
    <dd>
      <select name="pref" id="pref">
        <?php
        $categories = array('ヒューマンスキル','開発技術',
        '統計/ビッグデータ','デザイン','その他');
        foreach($categories as $category){
          print('<option value="'.$category.'">'.$category.'</option>');
        } ?>
      </select>
    </dd>
    <dt>参加希望人数</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>開催回数</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>一回あたりの時間</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>開催動機</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>内容詳細</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>持ち物・事前準備</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>対象者</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>開催最低人数</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
    <dt>定員</dt>
    <dd>
      <input name="name" type="text" size="35" maxlength="255" value=""/>
    </dd>
  </dl>
  <div><input type="submit" value="入力内容を確認する" /></div>
</form>



</div>
<div id="foot">
</div>
  </div>
</body>
</html>
