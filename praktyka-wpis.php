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
        <h2 class="title">Nieruchomości i budownictwo</h2>
        <div class="practicArticleWrapper">
            <div class="practicArticleWrapper__left">
                kolumna 1
            </div>
            <div class="practicArticleWrapper__right">
                <ul class="practicMenu">
                    <li class="practicMenu__item">
                        <a href="#">Alternatywne metody rozwiązywania sporów</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Nieruchomości i budownictwo</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka celna i wspieranie zagranicznej działalności gospodarczej</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka handlowa</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka karna</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka korporacyjna / fuzje i przejęcia</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka podatkowa</a>
                    </li>
                    <li class="practicMenu__item">
                        <a href="#">Praktyka prawa pracy</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php @include './components/valutation.php' ?>
    </main> 
    <?php @include './components/footer.php' ?> 
</body>
</html>





