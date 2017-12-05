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
