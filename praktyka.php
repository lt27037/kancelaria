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
        <h2 class="title">Obszary praktyki</h2>
        <section class="practicArticles">
            <?php include './components/practicArticle.php' ?>
            <?php include './components/practicArticle.php' ?>
            <?php include './components/practicArticle.php' ?>
            <?php include './components/practicArticle.php' ?>
            <?php include './components/practicArticle.php' ?>
            <?php include './components/practicArticle.php' ?>
        </section>
        <?php @include './components/valutation.php' ?>
    </main> 
    <?php @include './components/footer.php' ?> 
</body>
</html>





