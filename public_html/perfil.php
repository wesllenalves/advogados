<?php include_once "head.php"; ?>
<style>
.formulario form{border: 1px solid #130400; padding: 5%;}
.formulario form span{}
.formulario form input{float: left;margin-left: 5%;}
.formulario form input{width: 90%;}
.formulario form .btn-cadastrar{ color: #130400;}
</style>
 <section>
<div class="formulario container">
 <form method="post" action="#">       
<span>nome</span><br>
<input type="text" name="nome"><br>

<span>E-mail</span><br>
<input type="" name=""><br>

<span>Número da OAB</span><br>
<input type="number" name="oab"><br>

<span>Estado da OAB</span><br>
<input type="text" name="uf-oab"><br>

<span>Cidades Atendidas</span><br>
<input type="text" name="cidades"><br>

<span>Curriculo</span><br>
<input type="textbox" name="curiculos"><br>

<span>Áreas de Atuação</span><br>
<input type="text" name="atuacao"><br>

<span>Serviços Prestados</span><br>
<input type="text" name="servico"><br>

<span>telefones</span><br>
<input type="telefone" name="telefone1"><br>

<span>telefones</span><br>
<input type="telefone" name="telefone2"><br>

<span>telefones</span><br>
<input type="telefone" name="telefone3"><br>

<span>telefones</span><br>
<input type="telefone" name="telefone4"><br>
<button class="btn-cadastrar">Atualizar</button>
<button class="btn">Ver Perfil</button>
    
</form>
</div>
</section>

<?php include 'footer.php'; ?>