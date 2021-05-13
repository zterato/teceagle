	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<!--CSS bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--JS bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<script>
$(document).ready(function(){
	//botão cliente
  $("#btc").click(function(){
    $("#fcliente").toggle(1000);
	  $("#ftrabalhador, #fempresa").hide(1000);
  });
	//botão trabalhador
  $("#btt").click(function(){
    $("#ftrabalhador").toggle(1000);
	  $("#fcliente, #fempresa").hide(1000);
  });
	//botão empresa
	$("#bte").click(function(){
    $("#fempresa").toggle(1000);
	  $("#fcliente, #ftrabalhador").hide(1000);
  });
	
});
</script>
</head>

<body>
<br>
<!-- botões de ativação dos formulários -->
<center><div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" id="btc">Login Cliente</button>
  <button type="button" class="btn btn-secondary" id="btt">Login Trabalhador</button>
  <button type="button" class="btn btn-secondary" id="bte">Login Empresa</button>
</div><br><br></center>
<!-- LOGIN SEPARADOS por Jquery -->
<!-- inicio da estrutura do login CLiente -->
<div class="container" id="fcliente" style="display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<!-- inicio do formulario de login -->
		<div class="col-md-6">
		<!-- adicionar a logo -->
		<center><h1>Login Cliente</h1></center>
<form method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="emailcl" id="email">
    
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" name="senhacl" id="pwd">
    
  </div>
 <div class="form-group">
 <a href="esqueci.php">Esqueci minha senha!</a>
	</div>
	<div class="form-group">
 <a href="cadastro.php">Cadastre-se</a>
	</div>
  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<!-- fim do formulário de login -->
		<div class="col-md-3"></div>
	</div>
</div>
<!-- fim do login cliente -->

<!-- inicio da estrutura do login Trabalhador -->
<div class="container" id="ftrabalhador" style="display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<!-- inicio do formulario de login -->
		<div class="col-md-6">
		<!-- adicionar a logo -->
		<center><h1>Login Trabalhador</h1></center>
<form method="post" >
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="emailtb" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" name="senhatb" id="pwd">
  </div>
  
 <div class="form-group">
 <a href="esqueci.php">Esqueci minha senha!</a>
	</div>
	<div class="form-group">
 <a href="cadastro.php">Cadastre-se</a>
	</div>
  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<!-- fim do formulário de login -->
		<div class="col-md-3"></div>
	</div>
</div>
<!-- fim do login trabalhador -->

<!-- inicio da estrutura do login Empresa -->
<div class="container" id="fempresa" style="display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<!-- inicio do formulario de login -->
		<div class="col-md-6">
		<!-- adicionar a logo -->
		<center><h1>Login Empresa</h1></center>
<form method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="emailem" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Senha:</label>
    <input type="password" class="form-control" name="senhaem" id="pwd">
  </div>
 <div class="form-group">
 <a href="esqueci.php">Esqueci minha senha!</a>
	</div>
	<div class="form-group">
 <a href="cadastro.php">Cadastre-se</a>
	</div>
  <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<!-- fim do formulário de login -->
		<div class="col-md-3"></div>
	</div>
</div>
<!-- fim do login empresa -->

<?php
	require_once 'classes/Cliente.php';
	$cliente =  new Cliente();
	//inicio login cliente
	if(isset($_POST['emailcl'])){
		// declarar campos obrigatorios
		try{
        $pdo = new PDO($host,$login,$senha);
		//declarando variaveis de cheq
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = $senha = "";
		// declarando variaveis de erro
		$emailErr = $senhaErr = "";
		// declarandométodo de erro
		 if (empty($_POST["emailcl"])) {
         $emailErr = "Digite um email Válido";
         } else {
	     $cliente->setEmail($_POST['emailcl']);
         $email = $cliente->getEmail();
         }
		if (empty($_POST["senhacl"])) {
         $emailErr = "Digite uma senha Válida";
         } else {
		 $cliente->setSenha($_POST['senhacl']);
         $senha = $cliente->getSenha();
         }
			}
		//fim do método de erro
		if(!empty($email) and !empty($senha)){
	
		 //recebendo SQL para consulta do usuario
	 $sql="SELECT * FROM cliente WHERE email=:e and senha=:s";
	 $stmt= $pdo->prepare($sql);
		$stmt->bindParam(':e',$email);
		$stmt->bindParam(':s',$senha);
		$stmt->execute();
		if($stmt->rowCount()>0){
			//entrar no sistema sessão
			$dado = $stmt->fetch();
			session_start();
			//passando instancias para objeto
			$cliente->setCodcliente($dado['cod_cliente']);
			$cliente->setNome($dado['nome']);
			$cliente->setSobre($dado['sobre']);
			$cliente->setRua($dado['rua']);
			$cliente->setNum($dado['num']);
			$cliente->setBairro($dado['bairro']);
			$cliente->setUf($dado['uf']);
			$cliente->setComplemento($dado['complemento']);
			$cliente->setTel1($dado['tel1']);
			$cliente->setTel2($dado['tel2']);
			$cliente->setTel3($dado['tel3']);
			$cliente->setId($dado['id']);
			$cliente->setCpf($dado['cpf']);
			//finalizando instancias
			//chmando informações de autenticação do método get
			$_SESSION['cod_cliente']=$cliente->getCodcliente();
			$_SESSION['nome']=$cliente->getNome();
			$_SESSION['sobre']=$cliente->getSobre();
			$_SESSION['rua']=$cliente->getRua();
			$_SESSION['num']=$cliente->getNum();
			$_SESSION['bairro']=$cliente->getBairro();
			$_SESSION['uf']=$cliente->getUf();
			$_SESSION['complemento']=$cliente->getComplemento();
			$_SESSION['tel1']=$cliente->getTel1();
			$_SESSION['tel2']=$cliente->getTel2();
			$_SESSION['tel3']=$cliente->getTel3();
			$_SESSION['id']=$cliente->getId();
			$_SESSION['cpf']=$cliente->getCpf();
			$_SESSION['email']=$cliente->getEmail();
			$_SESSION['senha']=$cliente->getSenha();
			//finalizando autenticação do usuario
			// redirecionando para página inicial do sistema
			header("Location: homecliente.php");
			
		}else{
			
			?>
				
			<p class="txt2"><?php echo "Email ou senha incorretos"; ?></p><?php
		}
	 }else{
		?><p class="txt3"><?php echo "Preencha os campos acima"; ?></p><?php
	 }
	 
 }catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	 }
	
	?>
	
	<?php
	require_once 'classes/Trabalhador.php';
	$tb =  new Trabalhador();
	//inicio login Trabalhador
	if(isset($_POST['emailtb'])){
		// declarar campos obrigatorios
		try{
        $pdo = new PDO($host,$login,$senha);
		//declarando variaveis de cheq
		$emailtb = $senhatb = "";
		// declarando variaveis de erro
		$emailtbErr = $senhatbErr = "";
		// declarandométodo de erro
		 if (empty($_POST["emailtb"])) {
         $emailtbErr = "Digite um email Válido";
         } else {
	     $tb->setEmail($_POST['emailtb']);
         $emailtb = $tb->getEmail();
         }
		if (empty($_POST["senhatb"])) {
         $emailErr = "Digite uma senha Válida";
         } else {
		 $tb->setSenha($_POST['senhatb']);
         $senhatb = $tb->getSenha();
         }
		//fim do método de erro
		if(!empty($emailtb) and !empty($senhatb)){
	
		 //recebendo SQL para consulta do usuario
	 $sql="SELECT * FROM trabalhador WHERE email=:e and senha=:s";
	 $stmt= $pdo->prepare($sql);
		$stmt->bindParam(':e',$emailtb);
		$stmt->bindParam(':s',$senhatb);
		$stmt->execute();
		if($stmt->rowCount()>0){
			//entrar no sistema sessão
			$dado1 = $stmt->fetch();
			session_start();
			//passando instancias para objeto
			$tb->setCod($dado1['cod_trab']);
			$tb->setNome($dado1['nome']);
			$tb->setSobre($dado1['sobre']);
			$tb->setRua($dado1['rua']);
			$tb->setNum($dado1['num']);
			$tb->setBairro($dado1['bairro']);
			$tb->setUf($dado1['uf']);
			$tb->setComplemento($dado1['complemento']);
			$tb->setTel1($dado1['tel1']);
			$tb->setTel2($dado1['tel2']);
			$tb->setTel3($dado1['tel3']);
			$tb->setId($dado1['id']);
			$tb->setCpf($dado1['cpf']);
			$tb->setProfissao($dado1['profissao']);
			//finalizando instancias
			//chmando informações de autenticação do método get
			$_SESSION['cod_cliente']=$tb->getCod();
			$_SESSION['nome']=$tb->getNome();
			$_SESSION['sobre']=$tb->getSobre();
			$_SESSION['rua']=$tb->getRua();
			$_SESSION['num']=$tb->getNum();
			$_SESSION['bairro']=$tb->getBairro();
			$_SESSION['uf']=$tb->getUf();
			$_SESSION['complemento']=$tb->getComplemento();
			$_SESSION['tel1']=$tb->getTel1();
			$_SESSION['tel2']=$tb->getTel2();
			$_SESSION['tel3']=$tb->getTel3();
			$_SESSION['id']=$tb->getId();
			$_SESSION['cpf']=$tb->getCpf();
			$_SESSION['profissao']=$tb->getProfissao();
			$_SESSION['email']=$tb->getEmail();
			$_SESSION['senha']=$tb->getSenha();
			//finalizando autenticação do usuario
			// redirecionando para página inicial do sistema
			header("Location: hometrab.php");
			
		}else{
			
			?>
				
			<p class="txt2"><?php echo "Email ou senha incorretos"; ?></p><?php
		}
	 }else{
		?><p class="txt3"><?php echo "Preencha os campos acima"; ?></p><?php
	 }
	 
 }catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	 }
	
	?>
	
	
		<?php
	require_once 'classes/Empresa.php';
	$em =  new Empresa();
	//inicio login Empresa
	if(isset($_POST['emailem'])){
		// declarar campos obrigatorios
		try{
        $pdo = new PDO($host,$login,$senha);
		//declarando variaveis de cheq
		$emailem = $senhaem = "";
		// declarando variaveis de erro
		$emailemErr = $senhaemErr = "";
		// declarandométodo de erro
		 if (empty($_POST["emailem"])) {
         $emailemErr = "Digite um email Válido";
         } else {
	     $em->setEmail($_POST['emailem']);
         $emailem = $tb->getEmail();
         }
		if (empty($_POST["senhaem"])) {
         $emailemErr = "Digite uma senha Válida";
         } else {
		 $em->setSenha($_POST['senhatb']);
         $senhaem = $em->getSenha();
         }
		//fim do método de erro
		if(!empty($emailem) and !empty($senhaem)){
	
		 //recebendo SQL para consulta do usuario
	 $sql="SELECT * FROM trabalhador WHERE email=:e and senha=:s";
	 $stmt= $pdo->prepare($sql);
		$stmt->bindParam(':e',$emailem);
		$stmt->bindParam(':s',$senhaem);
		$stmt->execute();
		if($stmt->rowCount()>0){
			//entrar no sistema sessão
			$dado2 = $stmt->fetch();
			session_start();
			//passando instancias para objeto
			$em->setCodEmpresa($dado2['cod_empresa']);
			$em->setRz($dado2['rz']);
			$em->setNfa($dado2['nfa']);
			$em->setRua($dado2['rua']);
			$em->setNum($dado2['num']);
			$em->setCep($dado2['cep']);
			$em->setBairro($dado2['bairro']);
			$em->setUf($dado2['uf']);
			$em->setComp($dado2['comp']);
			$em->setTel1($dado2['tel1']);
			$em->setTel2($dado2['tel2']);
			$em->setTel3($dado2['tel3']);
			$em->setCnpj($dado2['cnpj']);
			$em->setIe($dado2['ie']);
			$em->setIm($dado2['im']);
			//finalizando instancias
			//chmando informações de autenticação do método get
			$_SESSION['cod_empresa']=$em->getCodEmpresa();
			$_SESSION['rz']=$em->getRz();
			$_SESSION['nfa']=$em->getNfa();
			$_SESSION['rua']=$em->getRua();
			$_SESSION['num']=$em->getNum();
			$_SESSION['bairro']=$em->getBairro();
			$_SESSION['uf']=$em->getUf();
			$_SESSION['comp']=$em->getComp();
			$_SESSION['cep']=$em->getCep();
			$_SESSION['tel1']=$em->getTel1();
			$_SESSION['tel2']=$em->getTel2();
			$_SESSION['tel3']=$em->getTel3();
			$_SESSION['cnpj']=$em->getCnpj();
			$_SESSION['ie']=$em->getIe();
			$_SESSION['im']=$em->getIm();
			$_SESSION['email']=$em->getEmail();
			$_SESSION['senha']=$em->getSenha();
			//finalizando autenticação do usuario
			// redirecionando para página inicial do sistema
			header("Location: homeempresa.php");
			
		}else{
			
			?>
				
			<p class="txt2"><?php echo "Email ou senha incorretos"; ?></p><?php
		}
	 }else{
		?><p class="txt3"><?php echo "Preencha os campos acima"; ?></p><?php
	 }
	 
 }catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
	 }
	
	?>
</body>
</html>