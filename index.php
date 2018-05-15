<?php
require_once "recaptchalib.php";
?>
<!DOCTYPE html>
<hmtl>
	<header>
	<meta charset="UTF-8">
	<meta name="author" content="Codens">		
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name='theme-color' content='#4caf50'/>
	<meta name="keywords" content="Pesquisa de Mercado">
	<meta name="description" content="Pesquisa de Mercado para Revendedores e Autonomos">
	<meta name="msapplication-TileColor" content="#4caf50">
	<meta name="theme-color" content="#4caf50">
	<meta charset="uft-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<title>Pesquisa</title>
	</header>
	<style>
	.search{
		font-size:30px;
		text-align:center;
		margin-top:50px;
	}
	</style>
	<body>
		<div class="container">
			<p class="search">Pesquisa  para revendedores e autônomos.</p>
		</div>
		<div class="container">
			<form class="form-horizontal" action="enviar.php" method="POST">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="nome" style="float:left;">Nome</label>
                            <input type="text" class="form-control" name="nome" placeholder="Nome" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="email" style="float:left;">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="telefone" style="float:left;">O que voc&ecirc; revende ?</label>
                            <input type="text" class="form-control" name="oquevende" placeholder="Ex: Produto de beleza">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
	                        <br>
	                        <label for="exampleFormControlSelect1">Qual Marca?</label>
	                        <select class="form-control" id="" name="qualmarca">
						      <option value="">Selecione</option>
						      <option value="Avon">Avon</option>
						      <option value="Brilhe Mais">Brilhe Mais</option>
						      <option value="Cacau Show">Cacau Show</option>
						      <option value="Demillus">Demillus</option>
						      <option value="Eudora">Eudora</option>
						      <option value="Herbalife">Herbalife</option>
						      <option value="Hinode">Hinode</option>
						      <option value="Jequiti">Jequiti</option>
						      <option value="Mary kay">Mary kay</option>
						      <option value="Natura">Natura</option>
						      <option value="O boticário">O Botic&aacute;rio</option>
						      <option value="Racco">Racco</option>
						      <option value="Ralifla">Ralifla</option>
						      <option value="Tupperware">Tupperware</option>
						      <option value="Up!">Up!</option>
						      <option value="Yakult">Yakult</option>
						      <option value="Vende seu próprio produto">Vendo meu pr&oacute;prio produto</option>
						      <option value="Outros">Outras</option>
						    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="telefone" style="float:left;">Como voc&ecirc; controla suas vendas?</label>
                            <textarea name="controledevendas" placeholder="Ex: Controlo minhas vendas e meus gastos atrav&eacute;s de papel e caneta ou planilha." class="form-control" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="telefone" style="float:left;">Voc&ecirc; conhece algum aplicativo ou site para ter este controle?</label>
                            <input type="text" value="" class="form-control" name="algumapp" placeholder="Site x, Aplicativo A">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="telefone" style="float:left;">Voc&ecirc; pagaria por um aplicativo para controlar suas vendas ?</label>
	                        <select class="form-control" id="">
						      <option value="Sim">Sim</option>
						      <option value="N&atilde;o">N&atilde;o</option>
						    </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
	                        <br>
	                        <label for="exampleFormControlSelect1">Quanto voc&ecirc; estaria disposto a investir?</label>
	                        <select class="form-control" id="" name="quantoinvestir">
						      <option value="R$ 9,99">R$ 9,99</option>
						      <option value="R$ 14,99" selected>R$ 14,99</option>
						      <option value="R$ 19,99">R$ 19,99</option>
						    </select>
                        </div>
                    </div>	
					<div class="g-recaptcha" data-sitekey="6LeKN1kUAAAAADTsK_nfIPNbEamkir4EmcKVRzF9"></div>
					<br>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" name="solicitar" class="btn btn-success float-right">Enviar Pesquisa</button>
                            <br><br>
                        </div>
                    </div>
                </form>
		</div>
	</body>
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</hmtl>