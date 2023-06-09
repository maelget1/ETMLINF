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
        $req = $this->connector->prepare("INSERT INTO `t_account` (`acc_id`, `acc_username`, `acc_mail`, `acc_firstname`, `acc_lastname`, `acc_password`) VALUES (NULL, :username, :mail, :firstname, :lastname, :userpassword)");
        $req->bindValue(':username', $username, PDO::PARAM_STR);
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
        $req->bindValue(':lastname', $name, PDO::PARAM_STR);  
        $req->bindValue('userpassword', $password, PDO::PARAM_STR); 
        $req->execute();
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
        $req = $this->connector->prepare("SELECT `acc_id`, `acc_username`, `acc_isAdmin`, `acc_mail`, `acc_password` FROM `t_account` WHERE `acc_username` = :username");
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

    function sendMessage($name, $mail, $message)
    {
        $req = $this->connector->prepare("INSERT INTO `t_message` (`mes_id`, `mes_name`, `mes_mail`, `mes_message`) VALUES (NULL, :username, :usermail, :usermessage);");
        $req->bindValue('username', $name, PDO::PARAM_STR);
        $req->bindValue('usermail', $mail, PDO::PARAM_STR);
        $req->bindValue('usermessage', $message, PDO::PARAM_STR);
        $req->execute();
    }

    function selectAllMessages()
    {
        $req = $this->connector->query("SELECT * FROM `t_message`");
        $messages = $this->createData($req);
        return $messages;
    }

    function addProduct($userId, $productId)
    {
        $req = $this->connector->prepare("INSERT INTO `t_basket` (`bas_id`, `bas_fk_userID`, `bas_fk_productID`) VALUES (NULL, :userID, :productID);");
        $req->bindValue('userID', $userId, PDO::PARAM_INT);
        $req->bindValue('productID', $productId, PDO::PARAM_INT);
        $req->execute();
    }

    function listBasketProducts($userId)
    {
        $req = $this->connector->prepare("SELECT t_product.pro_name, t_product.pro_price, t_basket.bas_id FROM t_product INNER JOIN t_basket ON t_basket.bas_fk_userID = :userID AND t_basket.bas_fk_productID = t_product.pro_id");
        $req->bindValue('userID', $userId, PDO::PARAM_INT);
        $req->execute();
        $products = $this->createData($req);
        return $products;
    }

    function removeFromCart($id)
    {
        $req = $this->connector->prepare("DELETE FROM `t_basket` WHERE `t_basket`.`bas_id` = :id");
        $req->bindValue('id', $id, PDO::PARAM_INT);
        $req->execute();
    }
}

?>