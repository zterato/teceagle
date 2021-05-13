<?php
class Servicos{
	//variaveis
	public $titulo, $desc, $valormim, $valormax, $data, $categ, $subcatg, $requerimento, $dispo;
	
	// declarando construtor
	function Servicos(){
		$this->titulo = $titulo;
		$this->desc=$desc;
		$this->valormim=$valormim;
		$this->valormax=$valormax;
		$this->data=$data;
		$this->categ=$categ;
		$this->subcatg=$subcatg;
		$this->requerimento=$requerimento;
		$this->dispo;
	}
	
	//declarando get and sets
	public function getTitulo(){
		return $this->titulo;
	}
	public function setTitulo($titulo){
		$this->titulo=$titula;
	}
	
	public function getDesc(){
		return $this->desc;
	}
	public function setDesc($desc){
		$this->desc=$desc;
	}
	
	public function getValormin(){
		return $this->valormin;
	}
	public function setValormin($valormin){
		$this->valormin=$valormin;
	}
	
	public function getValormax(){
		return $this->valormax;
	}
	public function setValormax($valormax){
		$this->valormax=$valormax;
	}
	
	public function getData(){
		return $this->data;
	}
	public function setData($data){
		$this->data=$data;
	}
	
	public function getCateg(){
		return $this->categ;
	}
	public function setCateg($categ){
		$this->categ=$categ;
	}
	public function getSubcatg(){
		return $this->subcatg;
	}
	public function setSubcatg($subcatg){
		$this->subcatg=$subcatg;
	}
	public function getRequerimento(){
		return $this->requerimento;
	}
	public function setRequerimento($requerimento){
		$this->requerimento=$requerimento;
	}
	
	public function getDispo(){
		return $this->dispo;
	}
	public function setDispo($dispo){
		$this->dispo=$dispo;
	}
	
}
?>