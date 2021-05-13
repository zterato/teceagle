<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro Cliente</title>
</head>
   <!--CSS bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--JS bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	//botão cliente
  $("#btc").click(function(){
    $(".fcliente").toggle(1000);
	  $(".ftrabalhador, .fempresa").hide(1000);
  });
	//botão trabalhador
  $("#btt").click(function(){
    $(".ftrabalhador").toggle(1000);
	  $(".fcliente, .fempresa").hide(1000);
  });
	//botão empresa
	$("#bte").click(function(){
    $(".fempresa").toggle(1000);
	  $(".fcliente, .ftrabalhador").hide(1000);
  });
	
});
</script>
<body>
<!-- botões de ativação dos formulários -->
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" id="btc">Cliente</button>
  <button type="button" class="btn btn-secondary" id="btt">Trabalhador</button>
  <button type="button" class="btn btn-secondary" id="bte">Empresa</button>
</div>

<!-- criando formulário de teste -->
<form method="post" class="fcliente" style="display: none;">
<h1>Cadastro de Cliente</h1>
	<input type="text" name="nome" placeholder="Nome:"><br>
	<input type="text" name="sobre" placeholder="sobrenome:"><br>
	<input type="text" name="email" placeholder="Email:"><br>
	<input type="text" name="rua" placeholder="rua:"><br>
	<input type="text" name="num" placeholder="numero:"><br>
	<input type="text" name="bairro" placeholder="bairro:"><br>
	<input type="text" name="uf" placeholder="uf:"><br>
	<input type="text" name="complemento" placeholder="complemento:"><br>
	<input type="text" name="tel1" placeholder="Telefone 01:"><br>
	<input type="text" name="tel2" placeholder="Telefone 02:"><br>
	<input type="text" name="tel3" placeholder="Telefone 03:"><br>
	<input type="text" name="senha" placeholder="Senha:"><br>
	<input type="submit" value="cadastrar">
</form>
<!-- cadastro do cliente -->
<?php
	if(isset($_POST['nome'])){
	// inicando conexão
	include 'conexao.php';
	//chamando class
	require_once 'classes/Cliente.php';
	// criando obj
	$obj = new Cliente();
try{
$pdo = new PDO($host,$login,$senha);
	$sql ='INSERT INTO cliente (`nome`, `sobre`, `email`, `rua`, `num`, `bairro`, `uf`, `complemento`, `tel1`, `tel2`, `tel3`, `senha`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)';
	//chamando os métodos sets para receber os valores
	$obj->setNome($_POST['nome']);
	$obj->setSobre($_POST['sobre']);
	$obj->setEmail($_POST['email']);
	$obj->setRua($_POST['rua']);
	$obj->setNum($_POST['num']);
	$obj->setBairro($_POST['bairro']);
	$obj->setUf($_POST['uf']);
	$obj->setComplemento($_POST['complemento']);
	$obj->setTel1($_POST['tel1']);
	$obj->setTel2($_POST['tel2']);
	$obj->setTel3($_POST['tel3']);
	$obj->setSenha($_POST['senha']);
	
	// retornando valores com get
		$cliente=array($obj->getNome(),$obj->getSobre(),$obj->getEmail(), $obj->getRua(),
					  $obj->getNum(), $obj->getBairro(), $obj->getUf(), $obj->getComplemento(), $obj->getTel1(), $obj->getTel2(), $obj->getTel3(), $obj->getSenha());
	
	
	//preparando a estrutura do SQL
	$stmt = $pdo->prepare($sql);
	
	//criando um for para retornar o array
	$x=0; //contador geral
	$y=1; //posicionamento do sql
	for($x;$x<count($cliente);$x++){
	
	$stmt->bindParam($y, $cliente[$x]); //de acordo com os parametros armazenar as informações
		$y++; // inclemento do posicionamento
	}
	if($stmt->execute()){
		echo 'Salvo com sucesso';
	}else{
		echo 'Errou com sucesso';
	}
	}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	}
?>
<!-- fim do cadastro do cliente -->
<form method="post" class="ftrabalhador" style="display: none;">
<h1>Cadastro de Trabalhador</h1>
	<input type="text" name="nometb" placeholder="Nome:"><br>
	<input type="text" name="sobretb" placeholder="sobrenome:"><br>
	<input type="text" name="emailtb" placeholder="Email:"><br>
	<input type="text" name="ruatb" placeholder="rua:"><br>
	<input type="text" name="numtb" placeholder="numero:"><br>
	<input type="text" name="bairrotb" placeholder="bairro:"><br>
	<input type="text" name="uftb" placeholder="uf:"><br>
	<input type="text" name="complementotb" placeholder="complemento:"><br>
	<input type="text" name="tel1tb" placeholder="Telefone 01:"><br>
	<input type="text" name="tel2tb" placeholder="Telefone 02:"><br>
	<input type="text" name="tel3tb" placeholder="Telefone 03:"><br>
	<input type="text" name="profissao" placeholder="profissao:"><br>
	<input type="text" name="senhatb" placeholder="Senha:"><br>
	<input type="submit" value="cadastrar">
</form>
<!-- cadastro do Trabalhador -->
<?php
	if(isset($_POST['nometb'])){
	// inicando conexão
	include 'conexao.php';
	//chamando class
	require_once 'classes/Trabalhador.php';
	// criando obj
	$obj2 = new Trabalhador();
try{
$pdo = new PDO($host,$login,$senha);
	$sql ='INSERT INTO trabalhador (`nome`, `sobre`, `email`, `rua`, `num`, `bairro`, `uf`, `complemento`, `tel1`, `tel2`, `tel3`, `profissao`, `senha`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)';
	//chamando os métodos sets para receber os valores
	$obj2->setNome($_POST['nometb']);
	$obj2->setSobre($_POST['sobretb']);
	$obj2->setEmail($_POST['emailtb']);
	$obj2->setRua($_POST['ruatb']);
	$obj2->setNum($_POST['numtb']);
	$obj2->setBairro($_POST['bairrotb']);
	$obj2->setUf($_POST['uftb']);
	$obj2->setComplemento($_POST['complementotb']);
	$obj2->setTel1($_POST['tel1tb']);
	$obj2->setTel2($_POST['tel2tb']);
	$obj2->setTel3($_POST['tel3tb']);
	$obj2->setProfissao($_POST['profissao']);
	$obj2->setSenha($_POST['senhatb']);
	
	// retornando valores com get
		$trabalhador=array($obj2->getNome(),$obj2->getSobre(),$obj2->getEmail(), $obj2->getRua(),
					  $obj2->getNum(), $obj2->getBairro(), $obj2->getUf(), $obj2->getComplemento(), $obj2->getTel1(), $obj2->getTel2(), $obj2->getTel3(),$obj2->getProfissao(), $obj2->getSenha());
	
	
	//preparando a estrutura do SQL
	$stmt = $pdo->prepare($sql);
	
	//criando um for para retornar o array
	$x1=0; //contador geral
	$y1=1; //posicionamento do sql
	for($x1;$x1<count($trabalhador);$x1++){
	
	$stmt->bindParam($y1, $trabalhador[$x1]); //de acordo com os parametros armazenar as informações
		$y1++; // inclemento do posicionamento
	}
	if($stmt->execute()){
		echo 'Salvo com sucesso';
	}else{
		echo 'Errou com sucesso';
	}
	}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	}
?>
<!-- fim do cadastro do Trabalhador -->

<form method="post" class="fempresa" style="display: none;">
<h1>Cadastro da Empresa</h1>
	<input type="text" name="rz" placeholder="Razão social:"><br>
	<input type="text" name="nfa" placeholder="Nome Fantasia:"><br>
	<input type="text" name="emailep" placeholder="Email:"><br>
	<input type="text" name="ruaep" placeholder="rua:"><br>
	<input type="text" name="numep" placeholder="numero:"><br>
	<input type="text" name="bairroep" placeholder="bairro:"><br>
	<input type="text" name="ufep" placeholder="uf:"><br>
	<input type="text" name="comp" placeholder="complemento:"><br>
	<input type="text" name="tel1ep" placeholder="Telefone 01:"><br>
	<input type="text" name="tel2ep" placeholder="Telefone 02:"><br>
	<input type="text" name="tel3ep" placeholder="Telefone 03:"><br>
	<input type="text" name="senhaep" placeholder="Senha:"><br>
	<input type="submit" value="cadastrar">
</form>
<!-- cadastro do Empresa -->
<?php
	if(isset($_POST['rz'])){
	// inicando conexão
	include 'conexao.php';
	//chamando class
	require_once 'classes/Empresa.php';
	// criando obj
	$obj3 = new Empresa();
try{
$pdo = new PDO($host,$login,$senha);
	$sql ='INSERT INTO empresa (`rz`, `nfa`, `email`, `rua`, `num`, `bairro`, `uf`, `complemento`, `tel1`, `tel2`, `tel3`, `senha`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)';
	//chamando os métodos sets para receber os valores
	$obj3->setRz($_POST['rz']);
	$obj3->setNfa($_POST['nfa']);
	$obj3->setEmail($_POST['emailep']);
	$obj3->setRua($_POST['ruaep']);
	$obj3->setNum($_POST['numep']);
	$obj3->setBairro($_POST['bairroep']);
	$obj3->setUf($_POST['ufep']);
	$obj3->setComplemento($_POST['comp']);
	$obj3->setTel1($_POST['tel1ep']);
	$obj3->setTel2($_POST['tel2ep']);
	$obj3->setTel3($_POST['tel3ep']);
	$obj3->setSenha($_POST['senhatb']);
	
	// retornando valores com get
		$empresa=array($obj3->getRz(),$obj3->getNfa(),$obj3->getEmail(), $obj3->getRua(),
					  $obj3->getNum(), $obj3->getBairro(), $obj3->getUf(), $obj3->getComplemento(), $obj3->getTel1(), $obj3->getTel2(), $obj3->getTel3(), $obj3->getSenha());
	
	
	//preparando a estrutura do SQL
	$stmt = $pdo->prepare($sql);
	
	//criando um for para retornar o array
	$x2=0; //contador geral
	$y2=1; //posicionamento do sql
	for($x2;$x2<count($empresa);$x2++){
	
	$stmt->bindParam($y2, $empresa[$x2]); //de acordo com os parametros armazenar as informações
		$y2++; // inclemento do posicionamento
	}
	if($stmt->execute()){
		echo 'Salvo com sucesso';
	}else{
		echo 'Errou com sucesso';
	}
	}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	}
?>
<!-- fim do cadastro do Empresa -->

</body>
</html>