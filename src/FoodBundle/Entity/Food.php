<?php

namespace FoodBundle\Entity;

/**
 * Food
 */
class Food
{
    /**
     * @var string
     */
    private $foodName;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set foodName
     *
     * @param string $foodName
     *
     * @return Food
     */
    public function setFoodName($foodName)
    {
        $this->foodName = $foodName;

        return $this;
    }

    /**
     * Get foodName
     *
     * @return string
     */
    public function getFoodName()
    {
        return $this->foodName;
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foodData;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foodData = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add foodDatum
     *
     * @param \FoodBundle\Entity\FoodMeta $foodDatum
     *
     * @return Food
     */
    public function addFoodDatum(\FoodBundle\Entity\FoodMeta $foodDatum)
    {
        $this->foodData[] = $foodDatum;

        return $this;
    }

    /**
     * Remove foodDatum
     *
     * @param \FoodBundle\Entity\FoodMeta $foodDatum
     */
    public function removeFoodDatum(\FoodBundle\Entity\FoodMeta $foodDatum)
    {
        $this->foodData->removeElement($foodDatum);
    }

    /**
     * Get foodData
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFoodData()
    {
        return $this->foodData;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shoplist;


    /**
     * Add shoplist
     *
     * @param \FoodBundle\Entity\Shoppinglist $shoplist
     *
     * @return Food
     */
    public function addShoplist(\FoodBundle\Entity\Shoppinglist $shoplist)
    {
        $this->shoplist[] = $shoplist;

        return $this;
    }

    /**
     * Remove shoplist
     *
     * @param \FoodBundle\Entity\Shoppinglist $shoplist
     */
    public function removeShoplist(\FoodBundle\Entity\Shoppinglist $shoplist)
    {
        $this->shoplist->removeElement($shoplist);
    }

    /**
     * Get shoplist
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShoplist()
    {
        return $this->shoplist;
    }
}
