<?php



class Vaga {

    private $numero;
    private $andar;
    private $largura;
    private $comprimento;
    private $altura;
    private $pesoMaximo;
    private $status;


    public function __construct() {
    }



    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of andar
     */ 
    public function getAndar()
    {
        return $this->andar;
    }

    /**
     * Set the value of andar
     *
     * @return  self
     */ 
    public function setAndar($andar)
    {
        $this->andar = $andar;

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
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get the value of pesoMaximo
     */ 
    public function getPesoMaximo()
    {
        return $this->pesoMaximo;
    }

    /**
     * Set the value of pesoMaximo
     *
     * @return  self
     */ 
    public function setPesoMaximo($pesoMaximo)
    {
        $this->pesoMaximo = $pesoMaximo;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}