<?php
header('Content-type:text/html;charset=utf-8');
if(@$_GET['id'] == ''){
    echo "<script>alert('非法访问！'); history.go(-1);</script>";
}else{
    $id = $_GET['id'];
    include'../php/conn.php';
    $sql = "select * from xwzx where id = $id";
    $result = mysql_query($sql);
	$rs=mysql_fetch_array($result);
}
?>
<FORM METHOD="POST" ACTION="posteditnews.php">
新闻id:<INPUT TYPE="hidden" NAME="id" value="<?=$rs['id']?>"/><?=$rs['id']?><br />
新闻标题：<INPUT TYPE="text" NAME="title" value="<?=$rs['title']?>"/><br />
新闻内容：<TEXTAREA NAME="content" ROWS="8" COLS="30"><?=$rs['content']?></TEXTAREA><br />
新闻图片路径：<INPUT TYPE="text" NAME="image" value="<?=$rs['image']?>"/><br />
 <INPUT TYPE="submit" name="submit" value="提交"/>
</FORM>
