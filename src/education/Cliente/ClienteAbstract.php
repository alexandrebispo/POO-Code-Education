<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/27/15
 * Time: 11:39 AM
 */

namespace Education\Cliente;

use Education\Interfaces\StarImportantInterface;
use Education\Interfaces\EnderecoCobrancaInterface;

abstract class ClienteAbstract implements StarImportantInterface, EnderecoCobrancaInterface
{

    protected $id;
    protected $nome;
    protected $sobrenome;
    protected $tel;
    protected $endereco;

    private   $star;
    protected $enderecoCobranca;
    protected $cepCobranca;
    protected $complementoCobranca;

    public function __construct($id, $nome, $sobrenome, $tel, $endereco){
        $this->id          = $id;
        $this->nome        = $nome;
        $this->sobrenome   = $sobrenome;
        $this->tel         = $tel;
        $this->endereco    = $endereco;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    abstract public function getType();


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
        return $this->complementoCobranca;
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