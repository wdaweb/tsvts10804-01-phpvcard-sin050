<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="theme/<?= $_SESSION['info']['layout'] ?>.css">

<div class="card-main">
    <img src="upload/<?= $_SESSION['info']['who'] ?>" class="who">
    <h2>關於<span class="clr"><?= $_SESSION['info']['user'] ?></span></h2>
    <h4 class="clr" style="letter-spacing:10px;"><?= $_SESSION['info']['title'] ?></h4>
    <hr class="hr">
    <p><?= $_SESSION['info']['skill'] ?></p>
    <div class="box"><?= $_SESSION['info']['mail'] ?></div>
    <div class="box"><?= $_SESSION['info']['phone'] ?></div>
</div>
<button style="margin:50px auto;display:block" onclick="window.history.go(-1)">回頁面</button>