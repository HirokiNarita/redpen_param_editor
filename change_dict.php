<?php
$dict = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dict = $_POST['dict'];
    echo "編集しました";
  } else {
    throw new \RuntimeException('編集に失敗しました．');
  }
$dict_path = "/Applications/MAMP/htdocs/redpen_param_editor/redpen/dict/SuggestExpressionDictionary.txt";
file_put_contents($dict_path, $dict);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>redpen_param_editor</title>
</head>
<body>
    <br>
    登録辞書の変更<br>
    <form action="change_dict.php", method="POST">
        <textarea name="dict" cols="100" rows="50"><?php echo $dict?></textarea>
        <input type="submit" value="変更" name="submit">
    </form>
</body>
</html>