 <?php
include('config.php');
if(isSet($_POST['content']))
{
$content=$_POST['content'];
// mysql_query("insert into messages values ('$content')");
mysql_query($sql, 'insert into messages (msg) values ($content)');
$sql_in= mysql_query($sql, "SELECT msg,msg_id FROM messages order by msg_id desc");
$r=mysql_fetch_array($sql_in);
}
?>
<b><?php echo $r['msg']; ?></b>