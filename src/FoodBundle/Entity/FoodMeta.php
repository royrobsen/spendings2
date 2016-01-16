<?php

namespace FoodBundle\Entity;

/**
 * FoodMeta
 */
class FoodMeta
{
    /**
     * @var integer
     */
    private $foodRef;

    /**
     * @var \DateTime
     */
    private $purchaseDate;

    /**
     * @var \DateTime
     */
    private $expireDate;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $abgang;
    
    /**
     * Set foodRef
     *
     * @param integer $foodRef
     *
     * @return FoodMeta
     */
    public function setFoodRef($foodRef)
    {
        $this->foodRef = $foodRef;

        return $this;
    }

    /**
     * Get foodRef
     *
     * @return integer
     */
    public function getFoodRef()
    {
        return $this->foodRef;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return FoodMeta
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set expireDate
     *
     * @param \DateTime $expireDate
     *
     * @return FoodMeta
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     *
     * @return FoodMeta
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set abgang
     *
     * @param integer $abgang
     *
     * @return FoodMeta
     */
    public function setAbgang($abgang)
    {
        $this->abgang = $abgang;

        return $this;
    }

    /**
     * Get abgang
     *
     * @return integer
     */
    public function getAbgang()
    {
        return $this->abgang;
    }
    
    /**
     * Set price
     *
     * @param float $price
     *
     * @return FoodMeta
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \FoodBundle\Entity\Food
     */
    private $foodMain;


    /**
     * Set foodMain
     *
     * @param \FoodBundle\Entity\Food $foodMain
     *
     * @return FoodMeta
     */
    public function setFoodMain(\FoodBundle\Entity\Food $foodMain = null)
    {
        $this->foodMain = $foodMain;

        return $this;
    }

    /**
     * Get foodMain
     *
     * @return \FoodBundle\Entity\Food
     */
    public function getFoodMain()
    {
        return $this->foodMain;
    }
}
