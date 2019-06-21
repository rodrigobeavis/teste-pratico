<?php



class PessoaJuridica extends Cliente{

    private $razaoSocial;
    private $nomeFantasia;
    private $CNPJ;

    public function __construct() {
    }



    /**
     * Get the value of razaoSocial
     */ 
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set the value of razaoSocial
     *
     * @return  self
     */ 
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     */ 
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     *
     * @return  self
     */ 
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Get the value of CNPJ
     */ 
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * Set the value of CNPJ
     *
     * @return  self
     */ 
    public function setCNPJ($CNPJ)
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }
}