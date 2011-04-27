<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript">
    $(function(){
        $(window).load(function(){
            $("#container").fadeIn(1000);
            $("#footer").slideDown(1000);
            $('#slider').nivoSlider();
        });
        $(document).ready(function(){
            SexyLightbox.initialize({color:'black', dir: 'sexyimages'});
        });
        $("#logo").click(function(){
            window.location.href='home.php';
        });
    });
</script>
<style type="text/css">
    .alertbox{
        background  : url(images/dialog-help.png) no-repeat scroll left top;
        margin      : 0 10px;
        padding     : 0 0 5px 40px;
        font-family : Verdana;
        font-size   : 12px;
        text-align  : left;
    }
    .alertbox .buttons{
        text-align  : right;
    }
</style>
