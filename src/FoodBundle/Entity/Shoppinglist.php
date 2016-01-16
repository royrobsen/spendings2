<?php

namespace FoodBundle\Entity;

/**
 * Shoppinglist
 */
class Shoppinglist
{
    /**
     * @var integer
     */
    private $foodRef;

    /**
     * @var integer
     */
    private $amount;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \FoodBundle\Entity\Food
     */
    private $foodMain;


    /**
     * Set foodRef
     *
     * @param integer $foodRef
     *
     * @return Shoppinglist
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
     * Set amount
     *
     * @param integer $amount
     *
     * @return Shoppinglist
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set foodMain
     *
     * @param \FoodBundle\Entity\Food $foodMain
     *
     * @return Shoppinglist
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

