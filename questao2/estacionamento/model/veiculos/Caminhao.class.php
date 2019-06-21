<?php


class Caminhao extends Veiculo {

    private $numeroDeEixos;
    private $pesoBruto;
    private $comprimento;
    private $largura;

    public function __construct() {
    }

    /**
     * Get the value of numeroDeEixos
     */ 
    public function getNumeroDeEixos()
    {
        return $this->numeroDeEixos;
    }

    /**
     * Set the value of numeroDeEixos
     *
     * @return  self
     */ 
    public function setNumeroDeEixos($numeroDeEixos)
    {
        $this->numeroDeEixos = $numeroDeEixos;

        return $this;
    }

    /**
     * Get the value of pesoBruto
     */ 
    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set the value of pesoBruto
     *
     * @return  self
     */ 
    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get the value of comprimento
     */ 
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set the value of comprimento
     *
     * @return  self
     */ 
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get the value of largura
     */ 
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set the value of largura
     *
     * @return  self
     */ 
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }
}