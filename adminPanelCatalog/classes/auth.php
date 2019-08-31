<?php
/**
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 27-06-2019
 * Summary-
 * API Used-
 * Limitations-
 */


class auth
{
    protected $username;
    protected $password;
    protected $email;
    protected $phno;
    protected $pdo;
    private $user;

    /**
     * auth constructor.
     * @param $username
     * @param $password
     * @param $pdo
     */
    public function __construct($username, $password, $pdo)
    {
        $this->username = $username;
        $this->password = $password;
        $this->pdo = $pdo;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @param mixed $phno
     */
    public function setPhno($phno): void
    {
        $this->phno = $phno;
    }




    public function createUser(){
        $sql="INSERT INTO users(username,pass,email,phno) VALUES(?,?,?,?); ";
        $stmt= $this->pdo->prepare($sql);
        $res = $stmt->execute([$this->username,$this->password,$this->email,$this->phno]);

        if ($res)
            return true;
        return false;
    }

    public function login(){
        $query="SELECT * FROM users WHERE username=? AND pass=?;";
        $stmt= $this->pdo->prepare($query);
        $stmt->execute([$this->username,$this->password]);
        $res=$stmt->rowCount();
        if ($res){

            $this->user=$stmt->fetch(PDO::FETCH_ASSOC);

            return true;
        }

        return false;
    }



    public function getDetails(){

        return $this->user;

    }

    public function updateField($f,$data,$table){
        $sql="UPDATE ".$table." SET ".$f." = ".$data.";";
        $stmt=$this->pdo->prepare($sql);
        $res=$stmt->execute();
        if ($res)
            return true;

        return false;

    }

}