<head>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <header>
        <h1>ETML - Section Informatique</h1>
        <nav>
            <ul>
                <li><a href="home.php">Menu</a></li>
                <li><a href="shop.php">Boutique</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                    if($_SESSION['admin'])
                    {
                ?>
                <li><a href="messages.php">Messages</a></li>
                <?php
                    }
                ?>
            </ul>
            <ul>
                
                <?php
                    if(!$_SESSION['isConnected'])
                    {
                ?>
                <li><a href="signIn.php">S'enregistrer</a></li>
                <li><a href="login.php">Se connecter</a></li>
                <?php
                    }
                    else
                    {
                ?>
                <li><a href="disconnect.php">Se déconnecter</a></li>
                <li><a href="basket.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg></a></li>
                <li><a href="account.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" /></svg></a></li>
                <li><a href="account.php"><?=$_SESSION['connectedUser']?></a></li>
                <?php                       
                    }
                ?>
            </ul>
        </nav>
    </header>