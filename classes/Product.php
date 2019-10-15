<?php


class Product
{

    private $title;
    private $image_url;
    private $price;
    private $description;
    private $code;

    public function __construct($code, $title, $image_url, $price, $description)
    {

        $this->code = $code;
        $this->title = $title;
        $this->image_url = $image_url;
        $this->price = $price;
        $this->description = $description;

    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }
    

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image_url;
    }


}