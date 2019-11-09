
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>データ一覧</title>
</head>
<header>
<h1>データ入力</h1>
<a href="select.php">データ一覧はこちら</a>
<a href="logout.php">ログアウト</a>
</header>
<body>
<form method="post" action="insert.php">
<div class="formarea"></div>
  <fieldset>
    <legend class="midasi">入力画面</legend>
    <label>タイトル<input type="text" name="title"><br></label>
    <label>メーカー<input type="text" name="maker"><br></label>
    <label>FD,続編の有無<input type="text" name="next"><br></label>
    <label>所持〇<input type="radio" name="have" value="1">
    ×<input type="radio" name="have" value="0" checked>
    <br></label>
    <label>プレイ〇<input type="radio" name="play" value="1">
    ×<input type="radio" name="play" value="0" checked>
    <br></label>
    <label>記事〇<input type="radio" name="page" value="1">
    ×<input type="radio" name="page" value="0" checked>
    <br></label>
    <input type="submit" value="送信">
    </fieldset>
</form>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>

</script>
</html>