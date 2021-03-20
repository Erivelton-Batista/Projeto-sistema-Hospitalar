<?php 

class Cadastro{
	private $nome; 
	private $cpf; 
	private $rg; 
	private $data; 
	private $telefone; 
	private $telefone2; 
	private $email; 
	private $sangue; 
	private $cidade; 
	private $estado;
	private $rua; 
	private $numero; 
	private $complemento; 
	private $bairro; 
	private $sus;
	private $sexo;

	public function setnome($nome){
		$this->nome = $nome;
	}
	public function getnome(){
		return $this->nome;
	}

	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function getcpf(){
		return $this->cpf;
	}

	public function setrg($rg){
		$this->rg = $rg;
	}
	public function getrg(){
		return $this->rg;
	}

	public function setdata($data){
		$this->data = $data;
	}
	public function getdata(){
		return $this->data;
	}

	public function settelefone($telefone){
		$this->telefone = $telefone;
	}
	public function gettelefone(){
		return $this->telefone;
	}

	public function setTelefone2($telefone2){
		$this->telefone2 = $telefone2;
	}
	public function getTelefone2(){
		return $this->telefone2;
	}

	public function setemail($email){
		$this->email = $email;
	}
	public function getemail(){
		return $this->email;
	}

	public function setsangue($sangue){
		$this->sangue = $sangue;
	}
	public function getsangue(){
		return $this->sangue;
	}

	public function setcidade($cidade){
		$this->cidade = $cidade;
	}
	public function getcidade(){
		return $this->cidade;
	}

	public function setestado($estado){
		$this->estado = $estado;
	}
	public function getestado(){
		return $this->estado;
	}

	public function setrua($rua){
		$this->rua = $rua;
	}
	public function getrua(){
		return $this->rua;
	}

	public function setnumero($numero){
		$this->numero = $numero;
	}
	public function getnumero(){
		return $this->numero;
	}

	public function setcomplemento($complemento){
		$this->complemento = $complemento;
	}
	public function getcomplemento(){
		return $this->complemento;
	}

	public function setbairro($bairro){
		$this->bairro = $bairro;
	}
	public function getbairro(){
		return $this->bairro;
	}

	public function setsus($sus){
		$this->sus = $sus;
	}
	public function getsus(){
		return $this->sus;
	}

	public function setsexo($sexo){
		$this->sexo = $sexo;
	}
	public function getsexo(){
		return $this->sexo;
	}



}







?>