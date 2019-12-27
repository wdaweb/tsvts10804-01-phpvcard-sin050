<style>
    .posit {
        position: fixed;
        z-index: 9999;
        left: 0;
        right: 0;
    }

    .main {
        margin: 5% auto;
        text-align: center;
        width: 400px;
    }

    .data {
        text-align: left;
        padding: 0 20px;
        border: #000 2px solid;
        margin-bottom: 20px;
        background-color: #ffffff99;
    }

    .data p {
        min-width: 300px;
    }

    .cur:hover {
        cursor: pointer;
        display: inline-block;
    }

    body {
        background-image: linear-gradient(-45deg, #00FFCC, #BBFFEE);
        overflow: hidden;
    }



    @keyframes rollstar {

        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }

    }
</style>

<div class="main posit">
    <h1>我的履歷表單</h1>
    <form action="api.php" method="post" enctype="multipart/form-data">
        <div class="data">
            <p>你的名字 | <input type="text" name="user" value="盧宜萍"></p>
            <p>職位名稱 | <input type="text" name="title" value="網頁設計師"></p>
            <p>
                <span style="vertical-align:top">技能說明 | </span>
                <textarea name="skill" cols=30 rows=10>平面設計,包裝設計,編排規劃,網頁設計/使用軟體：photoshop,illustrator,indesign</textarea>
            </p>
            <p>email | <input type="text" name="mail" value="eping050@gmail.com"></p>
            <p>手機號碼 | <input type="text" name="phone" value="0937-381-596"></p>
            <hr>
            <p>人像照 | <input type="file" name="who" class="cur"></p>
            <p>版型選擇 |
                <select name="layout" class="cur">
                    <option value="green" selected>寶石綠</option>
                    <option value="pink">夢幻粉</option>
                    <option value="black">星空黑</option>
                    <option value="white">磚塊白</option>
                </select>
            </p>
        </div>
        <input type="submit" value="送出預覽">
    </form>
</div>
<?php
$r_many = rand(1, 100);
for ($i = 0; $i < $r_many; $i++) {


    $x = rand(1, 1000) / 10;
    $y = rand(1, 1000) / 10;
    $clrR = rand(0, 255);
    $clrG = rand(0, 255);
    $clrB = rand(0, 255);
    $size = rand(1, 5);
?>
    <div style="font-size:<?= $size ?>rem;
color:rgb(<?= $clrR ?>,<?= $clrG ?>,<?= $clrB ?>);
top:<?= $x ?>vh;
left:<?= $y ?>vw;
position:absolute;
animation:rollstar 5s infinite linear;

">★
    </div>
<?php
} ?>