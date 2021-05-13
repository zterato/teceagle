<?php
class Empresa{
	public $rz,$nfa, $rua, $num, $cep, $bairro, $uf, $comp,$email,$tel1, $tel2, $tel3;
	private $cnpj,$ie, $im, $senha,$cod_empresa;
	
	// criando construtor
	function Empresa(){
		$this->rz=$rz;
		$this->nfa=$nfa;
		 $this->email=$email;
		 $this->rua=$rua;
		 $this->num=$num;
		 $cep->cep=$cep;
		 $this->bairro=$bairro;
		 $this->uf=$uf;
		 $this->comp=$comp;
		 $this->tel1=$tel1;
		 $this->tel2=$tel2;
		 $this->tel3=$tel3;
		 $this->cnpj=$cnpj;
		 $this->ie=$ie;
		 $this->im=$im;
		 $this->senha=$senha;
		$this->cod_empresa=$cod_empresa;
	}
	
	//criando métodos get and set
	public function getRz(){
		return $this->rz;
	}
	public function setRz(){
		$this->rz=$rz;
	}
    public function getNfa(){
		return $this->nfa;
	}
	public function setNfa(){
		$this->nfa=$nfa;
	}
	public function getCep(){
		return $this->cep;
	}
	public function setCep(){
		$this->cep=$cep;
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
	public function getComp(){
		return $this->complemento;
	}
	public function setComp($comp){
		$this->comp = $comp;
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
	public function getIm(){
		return $this->im;
	}
	public function setIm($im){
		$this->im = $im;
	}
	public function getIe(){
		return $this->ie;
	}
	public function setIe($ie){
		$this->ie = $ie;
	}
	public function getCodEmpresa(){
		return $this->cod_empresa;
	}
	public function setCodEmpresas($cod_empresa){
		$this->cod_empresa= $cod_empresa;
	}
}
?>