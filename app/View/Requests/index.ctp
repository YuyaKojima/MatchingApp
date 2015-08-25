<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Mini 掲示板</title>
</head>
<body>
  <div id="wrap">
  <div id="head">
    <h1 style="color: #F38" >開催リクエスト勉強会一覧</h1>
  </div>
  <div id="content">
<div style="text-align:right"><a href="logout.php">ログアウト</a></div>

<form action="" method="post">
<dl>
  <dt>ようこそ、<?php echo h($member['name']); ?>さん</dt>
<dt>メッセージを入力してください</dt>
<dd>
<textarea name = "message" cols="50" rows="5"><?php echo h($message); ?></textarea>

<input type="hidden" name="reply_post_id" value="<?php echo h($_REQUEST['res']); ?>"> </input>


</dd>
</dl>
<div>
<input input type="submit" value="投稿する" />
</div>
</form>

<?php while($post = mysqli_fetch_assoc($posts)): ?>

  <div class="msg">
  <img src="../member_picture/<?php echo h($post['picture']); ?>" width="70" height="70"
   alt="<?php echo h($post['name']); ?>"/>
   <p><?php echo makeLink(h($post['message'])); ?><span class="name">
     (<?php echo h($post['name']); ?>)</span>
   [<a href="index.php?res=<?php echo h($post['id']); ?>">Re</a>]</p>

     <p class="day"><a href="view.php?id=<?php echo
     h($post['id']); ?>"><?php echo
     h($post['created']); ?></a>

   <?php
   if($post['reply_post_id'] > 0): ?>
  <a href="view.php?id=<?php echo h($post['reply_post_id']); ?>">返信元のメッセージ</a>
   <?php endif; ?>
<?php
if ($_SESSION['id']==$post['member_id']): ?>
[<a href="delete.php?id=<?php echo h($post['id']); ?>" style="color: #F33">削除</a>]
<?php endif; ?>
   </p>
  </div>
<?php endwhile; ?>

<ul class="paging">
<?php if ($page > 1){ ?>
<li><a href="index.php?page=<?php print($page -1); ?>">前のページヘ</a></li>
<?php } else{ ?>
<li>前のページヘ</li>
<?php }?>
<?php if ($page < $maxPage){ ?>
<li><a href="index.php?page=<?php print($page +1); ?>">次のページヘ</a></li>
<?php } else{ ?>
<li>次のページヘ</li>
<?php }?>
</ul>
</div>
<div id="foot">
</div>
  </div>
</body>
</html>
