<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Club</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./assets/popcorn.png" alt="logo">
            <p>Cinéma Club</p>
        </div>

        <form id="tarifs" method="get">
            <input type="text" name="fname" placeholder="Prénom">
            <input type="text" name="lname" placeholder="Nom">
            <input type="text" name="age" placeholder="Age">

            <input type="submit" value="Calculer">
        </form>

        <?php require './functions.php';

        if (!empty($_GET)) :

            $data = checkData($_GET);

            if (is_array($data)) :
                $age = $data['age'];

                $result = calcRate($age);

                $tarif = $result['tarif'];
                $prix = $result['prix'];
        ?>

                <h1>Tarif : <?= $tarif ?></h1>
                <h2>Prix place : <?= $prix ?></h2>

            <?php else : $error = $data ?>
                <h2 class="error"><?= $error ?></h2>

            <?php endif ?>
        <?php endif ?>
    </div>
</body>

</html>