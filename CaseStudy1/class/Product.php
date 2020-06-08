<?php
/**
 * Class Product
 * Author: Lei Song
 * Date: 2020-06-09
 * Version: 1
 */

class Product
{
    public $id;
    public $name;
    public $price;
    public $description;
    public $categoryID;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $description
     * @param $categoryID
     */
    public function __construct($id, $name, $price, $description, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->categoryID = $categoryID;
    }


}
