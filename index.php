<?php

function red($url)
{
  if (!headers_sent()) {
    header('Location: ' . $url);
    exit;
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="' . $url . '";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
    echo '</noscript>';
    exit;
  }
}


include('core/header.php');

@$file = $_GET['mod'];
$page = "system/$file.php";


if (file_exists($page)) {
  include($page);
} elseif (empty($_GET['mod'])) {
  red("index.html");
} else {
  include("404.php");
}


include('core/footer.php');
