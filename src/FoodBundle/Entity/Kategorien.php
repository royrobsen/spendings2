<?php

namespace FoodBundle\Entity;

/**
 * Kategorien
 */
class Kategorien
{
    /**
     * @var string
     */
    private $categoryName;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $foodData;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $shoplist;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foodData = new \Doctrine\Common\Collections\ArrayCollection();
        $this->shoplist = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Kategorien
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
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
     * Add foodDatum
     *
     * @param \FoodBundle\Entity\FoodMeta $foodDatum
     *
     * @return Kategorien
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
     * Add shoplist
     *
     * @param \FoodBundle\Entity\Shoppinglist $shoplist
     *
     * @return Kategorien
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $artikel;


    /**
     * Add artikel
     *
     * @param \FoodBundle\Entity\Artikel $artikel
     *
     * @return Kategorien
     */
    public function addArtikel(\FoodBundle\Entity\Artikel $artikel)
    {
        $this->artikel[] = $artikel;

        return $this;
    }

    /**
     * Remove artikel
     *
     * @param \FoodBundle\Entity\Artikel $artikel
     */
    public function removeArtikel(\FoodBundle\Entity\Artikel $artikel)
    {
        $this->artikel->removeElement($artikel);
    }

    /**
     * Get artikel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtikel()
    {
        return $this->artikel;
    }
}
