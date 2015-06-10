<?php 

namespace Education\Cliente;

use Education\Cliente\ClienteAbstract;
use Education\Interfaces\ClientePessoaJuridicaInterface;

class ClientePessoaJuridica extends ClienteAbstract implements ClientePessoaJuridicaInterface
{

	protected $complemento;
	protected $cep;
	protected $cnpj;

	public function __construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cnpj)
	{
		parent::__construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cnpj);

		$this->complemento 	= $complemento;
		$this->cep 			= $cep;
		$this->cnpj			= $cnpj;

	}

	public function getType()
	{
		return ClientePessoaJuridicaInterface::type;   
	}

	public function setComplemento($complemento)
	{
		$this->complemento = $complemento;
	}

	public function getComplemento()
	{
		return $this->complemento;
	}

	public function setCep($cep)
	{
		$this->cep = $cep;
	}

	public function getCep()
	{
		return $this->cep;
	}

	public function setCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
	}

	public function getCnpj()
	{
		return $this->cnpj;
	}

}

 ?>