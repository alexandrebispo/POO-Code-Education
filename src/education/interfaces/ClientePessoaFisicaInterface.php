<?php

namespace education\interfaces;

interface ClientePessoaFisicaInterface
{

	const type = "Pessoa Física";
	

	//return Tipo de Pessoa
	public function getType();

	//return O Complemento do Endereço
	public function getComplemento();

	//return CEP do endereço de Cobrança
	public function getCep();

	//return o registro do Tipo de Pessoa
	public function getCpf();

}
?>