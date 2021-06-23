<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/sass/index.css">
    <title>Kancelaria</title>
</head>
<body>
    <?php @include './components/navbar.php' ?>
    <main class="container">
        <ul class="currentPath">
            <li class="currentPath__path">
                <a href="#">Strona główna</a>
            </li>
            <li class="currentPath__path">
                <a href="#">Obszar Praktyki</a>
            </li>
            <li class="currentPath__path">
                <a href="#">Obszar Praktyki</a>
            </li>
        </ul>
        <h2 class="title">Kontakt</h2>
        <div class="contact">
            <div class="contact__wrapper">kolumna 1</div>
            <div class="contact__wrapper">kolumna 2</div>
        </div>
        <?php @include './components/valutation.php' ?>
    </main> 
    <?php @include './components/footer.php' ?> 
</body>
</html>





