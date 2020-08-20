<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<title>アンケート</title>
</head>
<body>
<form method="post" action="enquete.php">
あなたが好きなケーキは？<br><br>
<?php
$cake = array('イチゴショート', 'モンブラン', 'チーズケーキ',
  'レアチーズケーキ', 'ミルフィーユ');
for ($i = 0; $i < count($cake); $i++) {
  print "<input type='radio' name='cn' value='$i'>{$cake[$i]}<br>\n";
}
?>
<br>
<input type="submit" name="submit" value="投票">
</form>
<table border='1'>
<?php
$ed = file('enquete.txt');
for ($i = 0; $i < count($cake); $i++) $ed[$i] = rtrim($ed[$i]);
if ($_POST['submit']) {
  $ed[$_POST['cn']]++;
  $fp = fopen('enquete.txt', 'w');
  for ($i = 0; $i < count($cake); $i++) {
    fwrite($fp, $ed[$i] . "\n");
  }
  fclose($fp);
}
for ($i = 0; $i < count($cake); $i++) {
  print "<tr>";
  print "<td>{$cake[$i]}</td>";
  print "<td><table><tr>";
  $w = $ed[$i] * 10;
  print "<td width='$w' bgcolor='green'> </td>";
  print "<td>{$ed[$i]} 票</td>";
  print "</tr></table></td>";
  print "</tr>\n";
}
?>
</table>
</body>
</html>
