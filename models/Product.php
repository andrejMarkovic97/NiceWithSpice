<?php

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private string $image;

    /**
     * @param int $id
     * @param string $name
     * @param float $price
     * @param string $image
     */
    public function __construct(int $id = 0, string $name = "", float $price = 0, string $image = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float|int
     */
    public function getPrice(): float|int
    {
        return $this->price;
    }

    /**
     * @param float|int $price
     */
    public function setPrice(float|int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public static function getAllProducts(mysqli $conn)
    {

        $query = "SELECT * FROM products";

        return $conn->query($query);
    }

    public function createProduct(Product $prod, mysqli $conn)
    {
        $query = "INSERT INTO products(id,name,price,image) values ($prod->id,$prod->name,$prod->price,$prod->image)";
        return $conn->query($query);
    }

    public function updateProduct(Product $prod, mysqli $conn)
    {
        $query = "UPDATE products SET name =$prod->name,price=$prod->price,image=$prod->image WHERE id =$prod->id";
        return $conn->query($query);
    }

    public function deleteProduct(Product $prod, mysqli $conn)
    {
        $query = "DELETE from products WHERE id = $prod->id";
        return $conn->query($query);
    }
}
