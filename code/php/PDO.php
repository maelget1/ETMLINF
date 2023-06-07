<?php
class PDOconn{
    private $connector;
    public $result;

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

    public function createData($req)
    {
        $results = $req->fetchALL(PDO::FETCH_ASSOC);
        return $results;
    }

    function createUser($username, $name, $firstname, $password, $mail)
    {
        $req = $this->connector->query("INSERT INTO `t_account` (`acc_id`, `acc_username`, `acc_mail`, `acc_firstname`, `acc_lastname`, `acc_password`, `acc_basket`) VALUES (NULL, '$username', '$mail', '$firstname', '$name', '$password', NULL);");
    }

    function searchDuplicate($username, $mail)
    {
        $req = $this->connector->prepare("SELECT * FROM `t_account` WHERE `acc_username` = :username OR `acc_mail` = :email");
        $req->bindValue('username', $username, PDO::PARAM_STR);
        $req->bindValue('email', $mail, PDO::PARAM_STR);
        $req->execute();
        $user = $this->createData($req);
        return $user;
    }

    function loginUser($username)
    {
        $req = $this->connector->prepare("SELECT `acc_username`, `acc_isAdmin`, `acc_mail`, `acc_password` FROM `t_account` WHERE `acc_username` = :username");
        $req->bindValue('username', $username, PDO::PARAM_STR);
        $req->execute();
        $user = $this->createData($req);
        return $user;
    }

    function selectAllProducts()
    {
        $req = $this->connector->query("SELECT * FROM `t_product`");
        $products = $this->createData($req);
        return $products;
    }
}

?>