<?php
session_start();
ob_start();
$_SESSION['home'] = "";
include_once("inc.site.php");
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
            <div id="menuSite">
                <?include_once("inc.menuesq.php") ?>
            </div>
            <div id="contentSite">
                <? include_once("inc.publicacoes.php");?>
            </div>
        </div>
    </div>
    <div id="footer"><?include_once("inc.footer.php");?></div>
</body>
</html>
<?ob_end_flush();?>