<?php

namespace education\interfaces;

interface ClientePessoaJuridicaInterface
{
	const type = "Pessoa Jurídica";

	//return Tipo de Pessoa
	public function getType();

	//return O Complemento do Endereço
	public function getComplemento();

	//return CEP do endereço de Cobrança
	public function getCep();

	//return o registro do Tipo de Pessoa
	public function getCnpj();

}
?>