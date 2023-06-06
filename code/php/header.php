<head>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>
    <header>
        <h1>ETML - Section Informatique</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul>
                
                <?php
                    if(!$_SESSION['isConnected'])
                    {
                ?>
                <li><a href="signIn.php">Sign in</a></li>
                <li><a href="login.php">Log in</a></li>
                <?php
                    }
                    else
                    {
                ?>
                <li><a href="disconnect.php">Disconnect</a></li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </header>