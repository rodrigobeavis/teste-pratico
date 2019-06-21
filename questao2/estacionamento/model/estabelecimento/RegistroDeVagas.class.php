<?php

class RegistroDeVagas {

    private $entrada;
    private $saida;
    private $reserva;
    private $vaga;
    private $cliente;

    public function __construct($vaga, $cliente) {
        $this->vaga = $vaga;
        $this->cliente = $cliente;
    }



    /**
     * Get the value of entrada
     */ 
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * Set the value of entrada
     *
     * @return  self
     */ 
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }

    /**
     * Get the value of saida
     */ 
    public function getSaida()
    {
        return $this->saida;
    }

    /**
     * Set the value of saida
     *
     * @return  self
     */ 
    public function setSaida($saida)
    {
        $this->saida = $saida;

        return $this;
    }

    /**
     * Get the value of reserva
     */ 
    public function getReserva()
    {
        return $this->reserva;
    }

    /**
     * Set the value of reserva
     *
     * @return  self
     */ 
    public function setReserva($reserva)
    {
        $this->reserva = $reserva;

        return $this;
    }

    /**
     * Get the value of vaga
     */ 
    public function getVaga()
    {
        return $this->vaga;
    }

    /**
     * Set the value of vaga
     *
     * @return  self
     */ 
    public function setVaga($vaga)
    {
        $this->vaga = $vaga;

        return $this;
    }

    /**
     * Get the value of cliente
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set the value of cliente
     *
     * @return  self
     */ 
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }
}