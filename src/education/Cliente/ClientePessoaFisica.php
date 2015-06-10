<?php 

namespace Education\Cliente;

use Education\Cliente\ClienteAbstract;
use Education\Interfaces\ClientePessoaFisicaInterface;


class ClientePessoaFisica extends ClienteAbstract implements ClientePessoaFisicaInterface
{

	protected $complemento;
	protected $cep;
	protected $cpf;

	public function __construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cpf)
	{
		
		PARENT::__construct($id, $nome, $sobrenome, $tel, $endereco, $complemento, $cep, $cpf);

		$this->complemento 	= $complemento;
		$this->cep 			= $cep;
		$this->cpf			= $cpf;
	}

	public function getType()
	{
		return ClientePessoaFisicaInterface::type;
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

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getCpf()
	{
		return $this->cpf;
	}	

}

 ?>