<?php

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $adress;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct(int $id = 1, string $name = "", string $email = "", string $password = "", string $adress = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->adress = $adress;
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }


    public static function loginUser($user, mysqli $conn)
    {
        $query = "SELECT * FROM users WHERE email='$user->email' and password='$user->password'";

        return $conn->query($query);
    }

    public function createUser(User $user,mysqli $conn) {
        $query = "INSERT INTO users (id,name,email,password,adress) values ($user->id,$user->name,$user->email,$user->password,$user->adress)";
        return $conn->query($query);
    }

    public function updateUser(mysqli $conn)
    {
        $query = "UPDATE users SET name = $this->name, email = $this->email,password=$this->password WHERE id = $this->id";
        return $conn->query($query);
    }

    public function deleteUser(mysqli $conn)
    {
        $query = "DELETE FROM users WHERE id=$this->id";
        return $conn->query($query);
    }
}
