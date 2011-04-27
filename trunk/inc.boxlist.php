        <style type="text/css">

            h3 {
                margin: 0;
                padding: 7px 0 0 0;
                font-size: 16px;
                text-transform: uppercase;
            }

            div#feature_list {
                width: 750px;
                height: 240px;
                overflow: hidden;
                position: relative;
            }

            div#feature_list ul {
                position: absolute;
                top: 0;
                list-style: none;
                padding: 0;
                margin: 0;
            }

            ul#tabs {
                left: 0;
                z-index: 2;
                width: 320px;
            }

            ul#tabs li {
                font-size: 12px;
                font-family: Arial;
            }

            ul#tabs li img {
                padding: 5px;
                border: none;
                float: left;
                margin: 10px 10px 0 0;
            }

            ul#tabs li a {
                color: #222;
                text-decoration: none;
                display: block;
                padding: 10px;
                height: 60px;
                outline: none;
            }

            ul#tabs li a:hover {
                text-decoration: underline;
            }

            ul#tabs li a.current {
                background:  url('images/feature-tab-current.png');
                color: #FFF;
            }

            ul#tabs li a.current:hover {
                text-decoration: none;
                cursor: default;
            }

            ul#output {
                right: 0;
                width: 463px;
                height: 240px;
                position: relative;
            }

            ul#output li {
                position: absolute;
                width: 463px;
                height: 240px;
            }

            ul#output li a {
                position: absolute;
                bottom: 10px;
                right: 10px;
                padding: 8px 12px;
                text-decoration: none;
                font-size: 11px;
                color: #FFF;
                background: #000;
                -moz-border-radius: 5px;
            }

            ul#output li a:hover {
                background: #D33431;
            }
        </style>
        <script language="javascript">
            $(document).ready(function() {

                $.featureList(
                $("#tabs li a"),
                $("#output li"), {
                    start_item	:	0
                }
            );
            });
        </script>
    </head>
    <body>
        <div id="content">
            <div id="feature_list">
                <ul id="tabs">
                     <li>
                        <a href="javascript:;">
                            <img src="images/setal.png" />
                            <h3>Semana Teol&oacute;gica</h3>
                            <span>de 28 a 30 de Junho de 2010.</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="images/applications.png" />
                            <h3>Projeto Mission&aacute;rio</h3>
                            <span>10&ordm; Projeto Mission&aacute;rio.</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="images/programming.png" />
                            <h3>Estude no Setal</h3>
                            <span>Conhe&ccedil;a nossos professores.</span>
                        </a>
                    </li>
                </ul>
                <ul id="output">
                    <li>
                        <img src="images/semanaTeologica.png" />
                        <a href="site.php?secao=semanateologica">Mais detalhes</a>
                    </li>
                    <li>
                        <img src="images/projetoMissionario.png" />
                        <a href="site.php?secao=projetomissionario">Mais detalhes</a>
                    </li>
                    <li>
                        <img src="images/banner_estudeSetal.png" />
                        <a href="site.php?secao=professores">Mais detalhes</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>