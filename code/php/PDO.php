<?php
class PDOconn{
    private $connector;

    function __construct()
    {
        $this->connection();
    }

    private function connection() {
        // Se connecter via PDO
        try
        {
            $this->connector = new PDO('mysql:host=localhost;dbname=ETMLINF;charset=utf8' , 'root', 'root');
        }
        catch (PDOException $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
    }

    function createUser($username, $name, $firstname, $password, $mail)
    {
        $req = $this->connector->query("INSERT INTO `t_account` (`acc_id`, `acc_username`, `acc_mail`, `acc_firstname`, `acc_lastname`, `acc_password`, `acc_basket`) VALUES (NULL, '$username', '$mail', '$firstname', '$name', '$password', NULL);");
    }
}

?>