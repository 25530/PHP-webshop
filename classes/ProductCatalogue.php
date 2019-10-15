<?php


class ProductCatalogue
{


    private $products;

    /**
     * ProductCatalogue constructor.
     */
    public function __construct($json_file)
    {
        if (!file_exists($json_file)) {
            throw new \Exception('Dit JSON bestand bestaat niet');
        }

        $this->products = [];

        $this->loadCatalogue($json_file);
    }

    public function getAllProducts()
    {
        return $this->products;
    }

    private function loadCatalogue($json_file)
    {
        $json = file_get_contents($json_file);
        $data = json_decode($json, true);
        foreach ($data as $product) {
            $this->products[] = new Product($product['code'], $product['title'], $product['image_url'], $product['price'], $product['description']);
        }
    }


    /**
     * @param $id
     * @return Product $product
     */
    public function getProduct($code)
    {

        foreach ($this->products as $product) {
            if ($product->getCode() == $code) {
                return $product;
            }
        }

        return false;
    }

    public function addProduct(Product $product)
    {

    }

}