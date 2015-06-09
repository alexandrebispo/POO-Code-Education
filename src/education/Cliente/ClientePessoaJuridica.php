<?php 

namespace education\Cliente;

use education\Cliente\ClienteAbstract;
use education\interfaces\ClientePessoaJuridicaInterface;
use education\interfaces\starImportantInterface;
use education\interfaces\enderecoCobrancaInterface;

class ClientePessoaJuridica extends ClienteAbstract implements ClientePessoaJuridicaInterface, starImportantInterface, enderecoCobrancaInterface
{

	public $complemento;
	public $cep;
	public $cnpj;
	public $star;
	public $enderecoCobranca;
	public $cepCobranca;
	public $complementoCobranca;

	public function __construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cnpj){
		parent::__construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cnpj);

		$this->complemento 	= $complemento;
		$this->cep 			= $cep;
		$this->cnpj			= $cnpj;

	}

	public function getType(){
		return ClientePessoaJuridicaInterface::type;   
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	public function getComplemento(){
		return $this->complemento;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function getStar(){
		return $this->star;
	}

	public function setStar($star){
		switch ($star) {
		    case "1 Estrela":
		        $this->star = $star;
		        break;
		    case "2 Estrelas":
		        $this->star = $star;
		        break;
		    case "3 Estrelas":
		        $this->star = $star;
		        break;
		    case "4 Estrelas":
		        $this->star = $star;
		        break;
		    case "5 Estrelas":
		        $this->star = $star;
		        break;
		     default;
		     	echo "<p class='alert-danger'>Este termo ". $star. " não classifica o cliente!</p>";
		     	break;
		}
	}

	//set o Endereco de Cobranca
	public function setEnderecoCobranca($enderecoCobranca){
		$this->enderecoCobranca = $enderecoCobranca;
	}

	//return o Endereco de Cobranca
	public function getEnderecoCobranca(){
		return $this->enderecoCobranca;
	}

	//set O Complemento do Endereço de Cobranca
	public function setComplementoCobranca($complementoCobranca){
		$this->complementoCobranca = $complementoCobranca;
	}

	//return O Complemento do Endereço de Cobranca
	public function getComplementoCobranca(){
		return $complementoCobranca;
	}

	//set CEP do endereço de Cobrança
	public function setCepCobranca($cepCobranca){
		$this->cepCobranca = $cepCobranca;
	}

	//return CEP do endereço de Cobrança
	public function getCepCobranca(){
		return $this->cepCobranca;
	}	

}

 ?>