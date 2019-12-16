<!DOCTYPE html>
<?php
# ページが開いたと同時に読み込み
$dict_path = "/Applications/MAMP/htdocs/redpen_param_editor/redpen/dict/SuggestExpressionDictionary.txt";
$dict = file_get_contents($dict_path);
if ($dict === false) {
    throw new \RuntimeException('辞書ファイルが読み込めません．');
}
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>redpen_param_editor</title>
</head>
<body>
    登録辞書の変更<br>
    <form action="change_dict.php", method="POST">
        <textarea name="dict" cols="100" rows="50"><?php echo $dict?></textarea>
        <input type="submit" value="変更" name="submit">
    </form>
</body>