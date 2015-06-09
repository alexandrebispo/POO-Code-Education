<?php

namespace education\interfaces;

interface enderecoCobrancaInterface
{
	//set o Endereco de Cobranca
	public function setEnderecoCobranca($enderecoCobranca);

	//return o Endereco de Cobranca
	public function getEnderecoCobranca();

	//set O Complemento do Endereço de Cobranca
	public function setComplementoCobranca($complementoCobranca);

	//return O Complemento do Endereço de Cobranca
	public function getComplementoCobranca();

	//set CEP do endereço de Cobrança
	public function setCepCobranca($cepCobranca);

	//return CEP do endereço de Cobrança
	public function getCepCobranca();	
}