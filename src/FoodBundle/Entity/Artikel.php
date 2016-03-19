<?php

namespace FoodBundle\Entity;

/**
 * Artikel
 */
class Artikel
{
    /**
     * @var string
     */
    private $artikelName;

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
     * Set artikelName
     *
     * @param string $artikelName
     *
     * @return Artikel
     */
    public function setArtikelName($artikelName)
    {
        $this->artikelName = $artikelName;

        return $this;
    }

    /**
     * Get artikelName
     *
     * @return string
     */
    public function getArtikelName()
    {
        return $this->artikelName;
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
     * @return Artikel
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
     * @return Artikel
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
     * @var integer
     */
    private $catRef;

    /**
     * @var \FoodBundle\Entity\Kategorien
     */
    private $category;


    /**
     * Set catRef
     *
     * @param integer $catRef
     *
     * @return Artikel
     */
    public function setCatRef($catRef)
    {
        $this->catRef = $catRef;

        return $this;
    }

    /**
     * Get catRef
     *
     * @return integer
     */
    public function getCatRef()
    {
        return $this->catRef;
    }

    /**
     * Set category
     *
     * @param \FoodBundle\Entity\Kategorien $category
     *
     * @return Artikel
     */
    public function setCategory(\FoodBundle\Entity\Kategorien $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \FoodBundle\Entity\Kategorien
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var string
     */
    private $code;


    /**
     * Set code
     *
     * @param string $code
     *
     * @return Artikel
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $artikelMeta;


    /**
     * Add artikelMetum
     *
     * @param \FoodBundle\Entity\FoodMeta $artikelMetum
     *
     * @return Artikel
     */
    public function addArtikelMetum(\FoodBundle\Entity\FoodMeta $artikelMetum)
    {
        $this->artikelMeta[] = $artikelMetum;

        return $this;
    }

    /**
     * Remove artikelMetum
     *
     * @param \FoodBundle\Entity\FoodMeta $artikelMetum
     */
    public function removeArtikelMetum(\FoodBundle\Entity\FoodMeta $artikelMetum)
    {
        $this->artikelMeta->removeElement($artikelMetum);
    }

    /**
     * Get artikelMeta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArtikelMeta()
    {
        return $this->artikelMeta;
    }
}
