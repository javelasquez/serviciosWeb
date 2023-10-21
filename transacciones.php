<?php

class Bankingsystem 
{
    /**
     * propietario de la cuenta
     * @var string
     */
    public $owner;
    /**
     * balance del cliente
     * @var float
     */
    protected $countbalance;
    /**
     * Funcion para depositar dinero en la cuenta
     * @param float $init balance actual del cliente
     * @param float $amount valor a depositar
     * @return float
     */
    public function deposits($init,$amount)
    {
        if($amount>0){
            if($init>0){
                $this->countbalance =$init+ $amount;
            }else{
                $this->countbalance += $amount;
            }
        }else{
             $this->countbalance = 0;
        }
        return $this->countbalance;
    }
    /**
     * retirar dinero de la cuenta
     * @param float $init balance actual del cliente
     * @param float $amount monto a retirar de la cuenta
     * @return float
     * @throws Exception
     */
    public function addwithdrawal($init,$amount)
    {
       if($amount>0){
        $this->countbalance=$init;
        if ($this->countbalance < $amount) {
            throw new Exception('You can\'t withdraw ' . $amount.' insufficient balance');
        }
        $this->countbalance -= $amount;
       }else{
        $this->countbalance = 0;
       }
        return $this->countbalance;
    }
    /**
     * validar existencia de cliente
     * @return boolean
     */
    public function validacliente(){
        $clients=array('francisco','juan');
        if(in_array($this->owner, $clients)){
            return true;
        }else{
            return false;
        }
    }
}
