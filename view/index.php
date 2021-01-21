<?php
sesseion_start();

if (!empty($_POST)) {
    if ($_POST['name'] == '') {
        $error['name'] = 'blank';
    }
    if ($_POST['email'] == '') {
        $error['email'] = 'blank';
    }
    if (strlen($_POST['passeord']) < 4) {
        $error['password'] = 'length';
    }
    if ($_POST['password'] == '') {
        $error['password'] = 'blank';
    }
    if (empty($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ひとこと掲示板</title>

    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div id="wrap">
        <div id="head">
            <h1>会員登録</h1>
        </div>
        <div id="content">
            <p>次のフォームに必要事項をご記入ください。</p>
            <form action="" method="post" enctype="multipart/form-data">
                <dl>
                    <dt>ニックネーム<span class="required">必須</span></dt>
                    <dd><input type="text" name="name" size="35" maxlength="255" /></dd>
                    <dt>メールアドレス<span class="required">必須</span></dt>
                    <dd><input type="text" name="email" size="35" maxlength="255" /></dd>
                    <dt>パスワード<span class="required">必須</span></dt>
                    <dd><input type="password" name="password" size="10" maxlength="20" /></dd>
                    <dt>写真など</dt>
                    <dd><input type="file" name="image" size="35" /></dd>
                </dl>
                <div><input type="submit" value="入力内容を確認する" /></div>
            </form>
        </div>

    </div>
</body>

</html>
