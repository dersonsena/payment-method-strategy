<?php

namespace App\Models;

class Card
{
    private $number;
    private $ValidDate;
    private $securityCode;
    private $flag;

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidDate()
    {
        return $this->ValidDate;
    }

    /**
     * @param mixed $ValidDate
     * @return Card
     */
    public function setValidDate($ValidDate)
    {
        $this->ValidDate = $ValidDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param mixed $securityCode
     * @return Card
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param CardFlag $flag
     * @return Card
     */
    public function setFlag(CardFlag $flag)
    {
        $this->flag = $flag;
        return $this;
    }
}