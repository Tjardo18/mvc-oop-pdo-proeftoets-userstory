<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Kilometers Invoeren</title>
</head>

<body>

    <header>
        <a href="<?= URLROOT; ?>" class="logo">
            <i class="ri-home-3-fill"></i>
            <span>TJARDO</span>
        </a>

        <ul class="navbar">
            <li><a href="<?= URLROOT; ?>">Home</a></li>
            <li><a href="<?= URLROOT; ?>/instructeur">Instructeurs</a></li>
            <li><a href="<?= URLROOT; ?>/kilometer" class="active">Kilometers</a></li>
        </ul>

        <div class="main">
            <a href="#" class="user">
                <i class="ri-user-fill"></i>
                Sign In
            </a>
            <a href="#">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>
        <h1>
            <?= $data['title']; ?>
        </h1>
        <h3>
            <?= $data['type'] . ' ' . $data['kenteken']; ?>
        </h3>

        <div class="card">
            <div class="ruimte">
                <form action="" method="post">
                    <label for="kmstand">Kilometerstand</label>
                    <br>
                    <input type="text" id="kmStand" name="kmStand">
                    <br>
                    <button type="submit">Voer In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= URLROOT; ?>/js/nav.js"></script>

</body>

</html>