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
                <div class="secondSection__wrapper">
                    
                </div>
            </div>
        </section>
        <section class="aboutSection">
            <div class="aboutSection__about">
                <h2 class="aboutSection__about__title">O nas</h2>
                <div class="aboutSection__about__left">
                    <p class="aboutSection__about__text">
                    Międzynarodowa kancelaria prawna GEMIX jest firmą specjalizującą się w zapewnieniu pełnego zakresu usług prawnych klientom korporacyjnym i indywidualnym w zakresu prawa rosyjskiego i zagranicznego.
                    </p>
                    <p class="aboutSection__about__text">
                    Kancelaria prawna GEMIX została założona w 2007 roku, a dziś jej siłę stanowi zespół ponad 50 wykwalifikowanych prawników, adwokatów oraz doradców podatkowych posiadających doświadczenie w obsłudze prawnej dużych projektów w Rosji i na całym świecie.
                    </p>
                    <p class="aboutSection__about__text">
                    Kancelaria prawna GEMIX posiada reputację stabilnego i niezawodnego partnera biznesowego realizującego zadania poprzez zgrany zespół profesjonalistów.
                    </p>
                </div>
                <div class="aboutSection__about__right">
                    <p class="aboutSection__about__text">Naszą misją jest bycie niezawodnym partnerem dla klientów, zapewniając im obsługę prawną w celu skutecznego rozwiązywania ich problemów, koncentrując się na ostatecznym wyniku, który przekracza ich oczekiwania, przy jednoczesnym zastosowaniu indywidualnego podejścia, maksymalnego komfortu i całkowitej poufności.
                    </p>
                </div>
            </div>
            <div class="aboutSection__crew">

            </div>
            <div class="aboutSection__values">

            </div>
        </section>
    </main>
    <?php @include './components/footer.php' ?> 
</body>
</html>





