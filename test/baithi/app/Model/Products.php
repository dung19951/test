<?php


namespace App\Model;


class Products
{
    private $id;
    private $name;
    private $sectors;
    private $amount;
    private $date;
    private $describe;

    /**
     * Products constructor.
     * @param $name
     * @param $sectors
     * @param $amount
     * @param $date
     * @param $describe
     */
    public function __construct($name, $sectors, $amount, $date, $describe)
    {
        $this->name = $name;
        $this->sectors = $sectors;
        $this->amount = $amount;
        $this->date = $date;
        $this->describe = $describe;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSectors()
    {
        return $this->sectors;
    }

    /**
     * @param mixed $sectors
     */
    public function setSectors($sectors): void
    {
        $this->sectors = $sectors;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * @param mixed $describe
     */
    public function setDescribe($describe): void
    {
        $this->describe = $describe;
    }

}