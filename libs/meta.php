<?php
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
$APP_URL = $protocol . $_SERVER['HTTP_HOST'] . '/';
define('APP_URL', $APP_URL);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creasta Design</title>

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,700&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo APP_URL;?>assets/css/style.css">
