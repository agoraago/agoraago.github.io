<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>HTML入門-フォームの作成</title>
</head>
<body>
<table border="1">
  <tr>
    <td>名前</td>
    <td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td><?php echo htmlspecialchars($_POST["mail"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>お問合せ内容</td>
    <td><?php echo htmlspecialchars($_POST["comment"], ENT_QUOTES) ?></td>
  </tr>
</table>
</body>
</html>
