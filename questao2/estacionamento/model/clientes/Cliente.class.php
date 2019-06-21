<?php



class Cliente {

    private $dataCadastro;
    private $endereco;
    private $telefone;
    private $tipoFaturamento;

    public function __construct() {
    }



    /**
     * Get the value of dataCadastro
     */ 
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * Set the value of dataCadastro
     *
     * @return  self
     */ 
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of tipoFaturamento
     */ 
    public function getTipoFaturamento()
    {
        return $this->tipoFaturamento;
    }

    /**
     * Set the value of tipoFaturamento
     *
     * @return  self
     */ 
    public function setTipoFaturamento($tipoFaturamento)
    {
        $this->tipoFaturamento = $tipoFaturamento;

        return $this;
    }
}