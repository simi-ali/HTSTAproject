<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTSTA Final Project</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="\HTSTAProject/HTSTA_FinalProject_2024_FerSi630/style.css?<?= time() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include("commonCode.php");
    navBar("Forum");

    if (isset($_POST["newMessage"])) {
        $_POST["newMessage"] = htmlspecialchars($_POST["newMessage"]);
        $sqlInsert = $connection->prepare("INSERT into Messages(messageText,username) values(?,?)");
        $sqlInsert->bind_param("ss", $_POST["newMessage"], $_SESSION["Username"]);
        $sqlInsert->execute();
    }

    ?>
    <main>
        <h2>space</h2>
        <h1>
            Welcome to our Forum messaging space.
        </h1>
        <div id="AllPreviousMessages">
            <?php
            $sqlSelect = $connection->prepare("SELECT * from Messages");
            $sqlSelect->execute();
            $result = $sqlSelect->get_result();
            while ($row = $result->fetch_assoc()) {
            ?>
                <div>
                    <?= $row["username"] ?> wrote: <?= $row["messageText"] ?>
                </div>
            <?php
            }
            ?>

        </div>
        <div id="newMessage">
            <form method="POST">
                <input name="newMessage" placeholder="Type a new message">
                <input type="submit" value="Send message">
            </form>
        </div>
        </footer>
</body>

</html>