<?php

class Transaction
{
    private int $id;
    private DateTime $date;
    private float $amount;
    private User $user;
    private array $transactionList = array();

    /**
     * @param int $id
     * @param DateTime $date
     * @param float $amount
     * @param User $user
     * @param array $transactionList
     */
    public function __construct(int $id = 0, DateTime $date = null, float $amount = 0, User $user = null, array $transactionList = [])
    {
        $this->id = $id;
        $this->date = $date;
        $this->amount = $amount;
        $this->user = $user;
        $this->transactionList = $transactionList;
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
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getTransactionList(): array
    {
        return $this->transactionList;
    }

    /**
     * @param array $transactionList
     */
    public function setTransactionList(array $transactionList): void
    {
        $this->transactionList = $transactionList;
    }
}
