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
    <h1 style="color: #F38" >開催決定勉強会</h1>
  </div>
  <div id="content">
<div style="text-align:right"><a href="">ログアウト</a></div>

<dl>
  <dt>ようこそ、<?php echo ht($name); ?>さん</dt>
</dl>
<table>
  <tr>
  <th>勉強会名</th>
  <th>参加希望人数</th>
  <th>講師</th>
  <th>　　</th>
  <th>　　</th>
</tr>
<tr>
<th>中級者のためのPHP講座</th>
<th>17</th>
<th>シアトル三郎</th>
<th>詳細</th>
<th>参加</th>
</tr>
<tr>
<th>これであなたもJavaScriptマスター</th>
<th>14</th>
<th>シアトル菊子</th>
<th>詳細</th>
<th>参加</th>
</tr>

</table>

<a href=""><<前へ　</a><a href="">　次へ>></a>
</ul>
</div>
<div id="foot">
</div>
  </div>
</body>
</html>
