<?php
class Cliente{
	 public $nome, $sobre, $email, $rua, $num, $bairro, $uf, $complemento, $tel1, $tel2, $tel3, $status;
	 private $senha, $id, $cpf, $cod_cliente;
	 
	 function Cliente(){
		 $this->nome=$nome;
		 $this->sobre=$sobre;
		 $this->email=$email;
		 $this->rua=$rua;
		 $this->num=$num;
		 $this->bairro=$bairro;
		 $this->uf=$uf;
		 $this->complemento=$complemento;
		 $this->tel1=$tel1;
		 $this->tel2=$tel2;
		 $this->tel3=$tel3;
		 $this->senha=$senha;
		 $this->id=$id;
		 $this->cpf=$cpf;
		 $this->cod_cliente=$cod_cliente;
	 }
	 //criando metodos get and set
	 
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getSobre(){
		return $this->sobre;
	}
	public function setSobre($sobre){
		$this->sobre = $sobre;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getRua(){
		return $this->rua;
	}
	public function setRua($rua){
		$this->rua = $rua;
	}
	public function getNum(){
		return $this->num;
	}
	public function setNum($num){
		$this->num = $num;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function getUf(){
		return $this->uf;
	}
	public function setUf($uf){
		$this->uf = $uf;
	}
	public function getComplemento(){
		return $this->complemento;
	}
	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}
	public function getTel1(){
		return $this->tel1;
	}
	public function setTel1($tel1){
		$this->tel1 = $tel1;
	}
	 	public function getTel2(){
		return $this->tel2;
	}
	public function setTel2($tel2){
		$this->tel2 = $tel2;
	}
	 	public function getTel3(){
		return $this->tel3;
	}
	public function setTel3($tel3){
		$this->tel3 = $tel3;
	}
	 	public function getSenha(){
		return $this->senha;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	 public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function getCodcliente(){
		return $this->cod_cliente;
	}
	public function setCodcliente($cod_cliente){
		$this->cod_cliente = $cod_cliente;
	}
 }

?>