<?php

class Product
{
    private int $id;
    private Transaction $transaction;
    private Product $product;

    /**
     * @param int $id
     * @param Transaction $transaction
     * @param Product $product
     */
    public function __construct(int $id, Transaction $transaction, Product $product)
    {
        $this->id = $id;
        $this->transaction = $transaction;
        $this->product = $product;
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
     * @return Transaction
     */
    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    /**
     * @param Transaction $transaction
     */
    public function setTransaction(Transaction $transaction): void
    {
        $this->transaction = $transaction;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }


}