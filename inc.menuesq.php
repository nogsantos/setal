<?php
/*
 * Descrição: Menu esquerdo.
 * Autor: Fabricio Nogueira
 * Data: 16/12/2009
 */
if($_SESSION['home'] != "home"):?>
<div id="sidebar">
    <ul>
        <li class="alt"><a href="home.php" title="P&aacute;gina inicial." class="vtip">Home</a></li>
        <li><a href="site.php?secao=estudar" title="Download de documentos do setal." class="vtip">Documentos</a></li>
        <li class="alt"><a href="http://www.tocandoasnacoes.com.br" target="_blank" title="Miss&atilde;o Tocando as Na&ccedil;&otilde;es." class="vtip">Tocando as Na&ccedil;&otilde;es</a></li>
        <li><a href="site.php?secao=faleconosco" title="Entre em contato com o SETAL, e exclare&ccedil;a todas as suas d&uacute;vidas." class="vtip">Fale Conosco</a></li>
        <li class="alt"><a href="site.php?secao=horario" title="Hor&aacute;rio 2011 I." class="vtip">Hor&aacute;rio 2011 I</a></li>
        <li><a href="site.php?secao=matriz" title="Matriz Curricular 2011." class="vtip">Matriz curricular 2011</a></li>
    </ul>
</div>
<?  else :?>
<!-- end #content -->
<div id="sidebar">
        <ul>
            <li class="alt"><a href="site.php?secao=semanateologica" title="3&ordf; Semana Teol&oacute;gica." class="vtip">3&ordf; Semana Teol&oacute;gica</a></li>
            <li><a href="inc.quemsomos.php?TB_iframe=true&height=350&width=860" rel="sexylightbox" title="Conhe&ccedil;a um pouco do nosso trabalho." class="vtip">Quem Somos</a></li>
            <li class="alt"><a href="inc.proposito.php?TB_iframe=true&height=350&width=860" rel="sexylightbox" title="Conhe&ccedil;a qual &eacute; o prop&oacute;sito do SETAL." class="vtip">Prop&oacute;sito</a></li>
            <li><a href="site.php?secao=estudar" title="Download de documentos do setal." class="vtip">Documentos</a></li>
            <li class="alt"><a href="http://www.tocandoasnacoes.com.br" target="_blank" title="Miss&atilde;o Tocando as Na&ccedil;&otilde;es." class="vtip">Tocando as Na&ccedil;&otilde;es</a></li>
            <li><a href="site.php?secao=faleconosco" title="Entre em contato com o SETAL, e exclare&ccedil;a todas as suas d&uacute;vidas." class="vtip">Fale Conosco</a></li>
            <li class="alt"><a href="site.php?secao=horario" title="Hor&aacute;rio 2011 I." class="vtip">Hor&aacute;rio 2011 I</a></li>
            <li><a href="site.php?secao=matriz" title="Matriz Curricular 2011." class="vtip">Matriz curricular 2011</a></li>
        </ul>
</div>
<!-- end #sidebar -->
<?  endif;?>
