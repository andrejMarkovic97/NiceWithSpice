<?php

class Transaction
{
    private int $id;
    private Date $date;
    private double $amount;
    private User $user;

    /**
     * @param int $id
     * @param Date $date
     * @param float $amount
     * @param User $user
     */
    public function __construct(int $id, Date $date, float $amount, User $user)
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
     * @return Date
     */
    public function getDate(): Date
    {
        return $this->date;
    }

    /**
     * @param Date $date
     */
    public function setDate(Date $date): void
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

}