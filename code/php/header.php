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
                <li><a href="disconnect.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" /></svg></a></li>
                <li><?=$_SESSION['connectedUser']?></li>
                <?php
                    }
                ?>
            </ul>
        </nav>
    </header>