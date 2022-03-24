<?php

class Transaction
{
    private int $id;
    private DateTime $date;
    private float $amount;
    private User $user;

    /**
     * @param int $id
     * @param DateTime $date
     * @param float $amount
     * @param User $user
     */
    public function __construct(int $id =0, DateTime $date=null, float $amount=0, User $user=null)
    {
        $this->id = $id;
        $this->date = $date;
        $this->amount = $amount;
        $this->user = $user;
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
     * @return DateTime|null
     */
    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime|null $date
     */
    public function setDate(?DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return float|int
     */
    public function getAmount(): float|int
    {
        return $this->amount;
    }

    /**
     * @param float|int $amount
     */
    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    public function createTransaction(Transaction $tran , mysqli $conn) {

        $query = "INSERT INTO transactions (id,date,amount,userID) values ($tran->id,$tran->date,$tran->amount,$tran->user->getId())";
    }



}
