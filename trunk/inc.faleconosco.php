<?
/*
 * SETAL
 * Autor: Fabricio Nogueira
 * Data: 26/11/2009
 */
?>
<style type="text/css">
    #endereco{
        font-family: Verdana;
        font-size: 10px;
        text-align: center;
    }
</style>
<script type="text/javascript">
    $(function(){
        $("#txtTelefone").mask("(99)9999-9999",{placeholder:" "});
    });
</script>
<form name="formContato" method="post" action="pfaleconosco.php">
<table id="faleconosco" border="0" cellpadding="5" cellspacing="0" width="100%" align="center">
    <?if($_GET["msg"]!=""){?>
    <tr>
        <td valign="middle" align="center" colspan="2">
            <?switch ($_GET["msg"]){
                case 1:
                    echo"<h5><strong>Mensagem enviada com sucesso!</strong><br />em breve entraremos em contato.</h5>";
                break;
                case 2:
                    echo("<center><span class=\"destaque\">Desculpe, hove um erro no envio da mensagem Email inválido, por favor, tente novamente.</span></center><br />");
                break;
            }?>
        </td>
    </tr>
    <?}?>
    <tr>
        <td valign="top"width="30%" >
            <img src="images/Email.png" border="0" title="" alt="" />            
        </td>
        <td align="left">
            <table border="0" cellpadding="1" cellspacing="0" width="220">
                    <tr>
                        <td align="left"><input name="txtNome" type="text" class="textBordaCinza" style="width:400px" id="txtNome" value="nome" onfocus="if (document.formContato.txtNome.value == 'nome') document.formContato.txtNome.value = ''" onblur="if (document.formContato.txtNome.value == '') document.formContato.txtNome.value = 'nome'"></td>
                    </tr>
                    <tr>
                        <td align="left"><input name="txtEmail" type="text" class="textBordaCinza" style="width:400px" id="txtEmail" value="email" onfocus="if (document.formContato.txtEmail.value == 'email') document.formContato.txtEmail.value = ''" onblur="if (document.formContato.txtEmail.value == '') document.formContato.txtEmail.value = 'email'"></td>
                    </tr>
                    <tr>
                        <td align="left">
                            <select name="cboUF" id="cboUf" class="textBordaCinza" style="width:49px">
                                <option value="">UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>&nbsp;&nbsp;<input name="txtCidade" type="text" class="textBordaCinza" style="width:343px" id="txtCidade" value="cidade" onfocus="if (document.formContato.txtCidade.value == 'cidade') document.formContato.txtCidade.value = ''" onblur="if (document.formContato.txtCidade.value == '') document.formContato.txtCidade.value = 'cidade'"></td>
                    </tr>
                    <tr>
                        <td align="left"><input name="txtTelefone" type="text" class="textBordaCinza" size="20" id="txtTelefone" value="telefone" onfocus="if (document.formContato.txtTelefone.value == 'telefone') document.formContato.txtTelefone.value = ''" onblur="if (document.formContato.txtTelefone.value == '') document.formContato.txtTelefone.value = 'telefone'"><span class="normal">&nbsp;&nbsp;(DD) XXXX-XXXX</span></td>
                    </tr>
                    <tr>
                        <td align="left">
                            <select name="cboDestino" id="cboDestino" style="width:403px" class="textBordaCinza">
                                <option value="">Selecione o assunto...</option>
                                <option value="atendimento@setal.org.br">Fale com nosso atendimento</option>
                                <option value="duvidas@setal.org.br ">Exclare&ccedil;a suas d&uacute;vidas</option>
                                <option value="matricula@setal.org.br">Fa&ccedil;a sua matr&iacute;cula</option>
                                <option value="nogsantos@gmail.com">Desenvolvedor</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"><textarea name="txtMensagem" class="textAreaCinza" style="width:400px" rows="10" id="txtMensagem" onfocus="if (document.formContato.txtMensagem.value == 'mensagem') document.formContato.txtMensagem.value = ''" onblur="if (document.formContato.txtMensagem.value == '') document.formContato.txtMensagem.value = 'mensagem'">mensagem</textarea></td>
                    </tr>
                    <tr>
                        <td height="5"></td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-top:10px">
                            <input type="image" value="Enviar" id="btEnviarMensagem" src="images/btn_enviar.png" />
                            &nbsp;<input type="image" src="images/btn_limpar.png" value="Limpar" id="btLimparFormMensagem" >
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
            </table>
        </td>
</table>
    <div id="endereco">
        Rua C-212, n. 882, Qd.523, Lt. 24, Jd. Am&eacute;rica - Goi&acirc;nia, GO | [62]3941-0884<br />
        <a href="images/mapa_SETAL.jpg" rel="sexylightbox" title="Mapa de Localização Setal." class="vtip">Localiza&ccedil;&atilde;o</a>
    </div>
</form>
<script type="text/javascript" language="javascript">
    $(function(){
        var nome = $("#txtNome"),
        email = $("#txtEmail"),
        cidade = $("#txtCidade"),
        uf = $("#cboUf"),
        telefone = $("#txtTelefone"),
        mensagem = $("#txtMensagem"),
        destino = $("#cboDestino");
        $(window).load(function(){telefone.val("telefone");});
        $("#btEnviarMensagem").click(function(){
            var sErr = "";
            if(jQuery.trim(nome.val()) == "" || jQuery.trim(nome.val()) == "nome"){
                sErr += "- Nome do remetente inválido.\n";
                nome.val("nome");
            }
            if(destino.val() == ""){
                sErr += "- Informe o destinatário.\n";
            }
            if (jQuery.trim(mensagem.val()) == "" || jQuery.trim(mensagem.val()) == "mensagem"){
                sErr += "- Mensagem inválida.\n";
                mensagem.val("mensagem");
            }
            if (sErr != ""){
            sErr = "Erro(s) encontrado(s)!\n" + sErr;
            alert(sErr);
            return false;
            }else{
                return true;
            }
        });
        $("#btLimparFormMensagem").click(function(){
           nome.val("nome");
           email.val("email");
           cidade.val("cidade");
           uf.val("");
           telefone.val("telefone");
           destino.val("");
           mensagem.val("mensagem");
           return false;
        });
    });
</script>