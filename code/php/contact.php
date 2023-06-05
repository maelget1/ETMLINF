<!DOCTYPE html>
<html lang="en">

    <?php
        include_once("../html/header.html");
    ?>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop Page</title>
        <link rel="stylesheet" href="../css/contact.css">
    </head>

    <main>
        <h2>Contact Us</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </main>

    <?php
        include_once("../html/footer.html");
    ?>

</html>