<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css?<?= time() ?>">
    <title>HTSTA Final Project</title>
</head>

<body>
    <?php
    include_once("commonCode.php");
    navBar("Cart");
    ?>

    <h1>Shopping cart contents</h1>
    <table>
        <tr>
            <th>Item</th>
            </th>Quantity</th>
        </tr>
        <?php
        foreach ($_SESSION["Cart"] as $itemId => $itemQuantity) {
        ?>
            <tr>
                <td><?= $itemId ?> </td>
                <td><?= $itemQuantity ?> </td>
            </tr>
        <?php
        }

        ?>
    </table>

</body>

</html>