<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Advogados -Especializado em Diligências</title>
        <meta name="description" content="Site especializado em solicitações de trabalhos de advogados">
        <meta name="keywords" content="Site de Advogados, Advogados, Serviços de Diligências, Escritorios, Trabalho">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Wesllen Alves de Sousa">        
        <!--links-->        
        <link rel="stylesheet" href="assent/css/estilo.css"> 
        <link href="assent/css/font-lato.css" rel="stylesheet">
        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="assent/css/font-awesome.min.css">
        <script src="assent/js/fontawesome.js"></script>
        <!--Script ao clicar no 2 menu abre somente o submenu daquele id e feicha o que estava aberto-->
        <script type="text/javascript">
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            var visivel = e.style.display == 'block';
            var menus = document.querySelectorAll('[id^=menu]');
            for (var i = 0; i < menus.length; i++) {
                menus[i].style.display = 'none';
        };
        if (visivel) e.style.display = 'none';
        else e.style.display = 'block';
            }
        </script>        
    </head>
    <body>
        <header class="cabecalho">
            <a href="index.html"><h1 class="logo">Advogados - Especializado em Diligências</h1></a>
            <button class="btn-menu bg-gradient"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
            <nav class="menu">
                <a href="" class="btn-close"><i class="fa fa-times"></i></a>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#">Notificações</a></li>
                    <li><a href="#">Upadte Conta</a></li>
                    <li><a href="#">Perfil</a></li>
                </ul>
            </nav>            
        </header>
        
        <!--banner-->
        <div class="banner container">
                <div class="title">
                    <h2>Central <br>de<br> Diligências</h2>                
                </div>           
                
        <!--Menu_Baixo-->
            <nav id="nav-2" >
                <div class="navbar-2">
                    <ul>
                        <li class="drop"><a href="#" onclick="toggle_visibility('menu1');" ><i class="fa fa-gavel fa-lg" aria-hidden="true"></i></a>
                            <ul>
                                <div class="drop0" id="menu1">
                                        <li><a href="#" id="diligencia_novas">Novas</a></li>
                                        <li><a href="#">Em andamento</a></li>
                                        <li><a href="#">Fechadas</a></li>
                                </div>
                            </ul>
                        </li>
                        <li class="drop"><a href="#" onclick="toggle_visibility('menu2');"><i class="fa fa-handshake-o fa-lg" aria-hidden="true"></i></a>
                           <ul>
                                <div class="drop1" id="menu2">
                                        <li><a href="#">Advogados</a></li>
                                        <li><a href="#">Recebidas</a></li>		
                                </div>
                           </ul>
                        </li>
                        <li class="drop" ><a href="#" onclick="toggle_visibility('menu3');"><i class="fa fa-address-card-o fa-lg" aria-hidden="true"></i></a>
                            <ul>
                                <div class="drop2" id="menu3">
                                        <li><a href="#">Perfil</a></li>                                        
                                </div>
                            </ul>
                        </li>
                        <li class="drop"><a href="#" onclick="toggle_visibility('menu4');"><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>
                            <ul>
                                <div class="drop3" id="menu4">
                                        <li><a href="#">Notificações</a></li>
                                        <li><a href="#">Pagamento</a></li>
                                        <li><a href="#">Senha</a></li>
                                </div>
                            </ul>
                        </li>		
                    </ul>
                </div>
            </nav>
        </div>
        
        <!--Pedidos-->
        <div class="container">        
            <article class="pedidos">
                <div class="caixa">
                        <div class="pedido-cabecalho">
                            <h4> Diligência Brasília </h4> <span>Data:25-11-2017</span>
                        </div>
                        <div class="pedido-footer">
                            <img src="img/icon.png"><span id="nome">Primeiro nome</span>
                            <a href="#">Detalhes</a>
                            <button>Enviar</button>
                        </div>
                </div>            
            </article>
        <!--Pedidos-->
            <article class="pedidos">
                <div class="caixa">
                        <div class="pedido-cabecalho">
                            <h4> Cópia Goiania </h4> <span>Data:12-10-2017</span>
                        </div>
                        <div class="pedido-footer">
                            <img src="img/icon.png"><span id="nome">Primeiro nome</span>
                            <a href="#">Detalhes</a>
                            <button>Enviar</button>
                        </div>
                </div>
            </article>        
        </div>        
        
	<!-- Rodapé -->
        <footer class="rodape container bg-gradient">
                <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
                <p class="copyright">Copyright NodeProp 2017. Todos os direitos Reservados</p>
        </footer>
        <!-- Chama o Jquery-->
        <script src="assent/js/jquery.js"></script>        
        <!--Script para ao clicar no icone bar abrir o menur e quando clicar no icone 'x' fechar o menu-->
        <script>
            $(".btn-menu").click(function(){
               $(".menu").show(); 
            });
            $(".btn-close").click(function(){
               $(".menu").hide(); 
            });
            $(".btn-menu").click(function(){
               $("#nav-2").hide(); 
            });
            
        </script>
    </body>
</html>
