<?php
session_start();
ob_start();
$_SESSION['home'] = "home";
include_once("inc.cabecalho.php");
include_once("inc.scripts.php");
?>
<?include_once 'inc.header.php'?>
</head>
<body>
    <div id="container">
        <div id="header"><div id="logo" style="cursor: pointer"></div></div>
        <div id="splash"></div>
        <div id="conteudo">
            <div id="menuHome">
                <?include_once("inc.menuesq.php") ?>
            </div>
            <div id="contentHome">
                <?include_once("inc.slideimagens.php") ?>
            </div>            
        </div>
    </div>
    <div id="footer"><?include_once("inc.footer.php");?></div>
</body>
</html>
<? ob_end_flush(); ?>