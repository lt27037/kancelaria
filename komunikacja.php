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
        <h2 class="title">Komunikacja z akcjonariuszami</h2>
        <section class="communication">
            <?php include './components/communicationArticle.php' ?>
            <?php include './components/communicationArticle.php' ?>
            <?php include './components/communicationArticle.php' ?>
            <?php include './components/communicationArticle.php' ?>
        </section>
        <?php @include './components/valutation.php' ?>
    </main> 
    <?php @include './components/footer.php' ?> 
</body>
</html>





