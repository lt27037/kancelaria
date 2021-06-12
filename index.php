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
    <main class="homePage">
        <section class="topSection">
            <img src="assets/img/logo-tarcza.svg" alt="logo" class="topSection__logo" >
            <h1 class="topSection__title">
                Title placeholder two lines
            </h1>
            <p class="topSection__text">
            Kancelarię stanowi zespół wykwalifikowanych prawników posiadających doświadczenie w obsłudze prawnej dużych projektów na całym świecie.
            </p>
            <button class="button">O NAS</button>
        </section>
        <section class="secondSection">
            <div class="secondSection__leftColumn">
                <h2 class="secondSection__title">
                    Placeholder for title
                </h2>
                <img 
                    src="assets/img/secondSection.png"
                    alt="img"
                    class="secondSection__leftColumn__img"
                >
            </div>
            <div class="secondSection__rightColumn">
                
            </div>
        </section>
    </main>
    <?php @include './components/footer.php' ?> 
</body>
</html>