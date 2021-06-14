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
                <h2 class="secondSection__title">Placeholder for title</h2>
                <img 
                    src="assets/img/secondSection.png"
                    alt="img"
                    class="secondSection__leftColumn__img"
                >
            </div>
            <div class="secondSection__rightColumn">
                <div class="secondSection__wrapper">
                    <h3 class="secondSection__label">Wsparcie</h3>
                    <p class="secondSection__text">
                    Naszym głównym zadaniem jest wsparcie klienta w procesie podejmowania decyzji biznesowych. Od wyboru formy prawnej przedsiębiorstwa po pomoc w rozwiązywaniu wszelkiego rodzaju problemów pojawiających się w trakcie działalności klienta.
                    </p>
                </div>
                <div class="secondSection__wrapper">
                    <h3 class="secondSection__label">Rozwiązania</h3>
                    <p class="secondSection__text">
                    Naszym głównym zadaniem jest wsparcie klienta w procesie podejmowania decyzji biznesowych. Od wyboru formy prawnej przedsiębiorstwa po pomoc w rozwiązywaniu wszelkiego rodzaju problemów pojawiających się w trakcie działalności klienta.
                    </p>
                </div>
                <div class="secondSection__wrapper">
                    <h3 class="secondSection__label">Doświadczenie</h3>
                    <p class="secondSection__text">
                    Naszym głównym zadaniem jest wsparcie klienta w procesie podejmowania decyzji biznesowych.
                    </p>
                </div>
            </div>
        </section>
        <section class="aboutSection">
            <div class="aboutSection__about">
                <h2 class="aboutSection__title">O nas</h2>
                <div class="aboutSection__about__left">
                    <p class="aboutSection__text">
                    Międzynarodowa kancelaria prawna GEMIX jest firmą specjalizującą się w zapewnieniu pełnego zakresu usług prawnych klientom korporacyjnym i indywidualnym w zakresu prawa rosyjskiego i zagranicznego.
                    </p>
                    <p class="aboutSection__text">
                    Kancelaria prawna GEMIX została założona w 2007 roku, a dziś jej siłę stanowi zespół ponad 50 wykwalifikowanych prawników, adwokatów oraz doradców podatkowych posiadających doświadczenie w obsłudze prawnej dużych projektów w Rosji i na całym świecie.
                    </p>
                    <p class="aboutSection__text">
                    Kancelaria prawna GEMIX posiada reputację stabilnego i niezawodnego partnera biznesowego realizującego zadania poprzez zgrany zespół profesjonalistów.
                    </p>
                </div>
                <div class="aboutSection__about__right">
                    <p class="aboutSection__text">Naszą misją jest bycie niezawodnym partnerem dla klientów, zapewniając im obsługę prawną w celu skutecznego rozwiązywania ich problemów, koncentrując się na ostatecznym wyniku, który przekracza ich oczekiwania, przy jednoczesnym zastosowaniu indywidualnego podejścia, maksymalnego komfortu i całkowitej poufności.
                    </p>
                </div> 
            </div>
            <div class="aboutSection__crew">
                <h2 class="aboutSection__title">Kim jesteśmy</h2>
                <p class="aboutSection__text">Zespół specjalistów gwarantujący całkowitą poufność i wysoki poziom oferowanych usług prawnych. Dla nas jest ważne budowanie uczciwych i bezpośrednich relacji z klientem, opartych na sumienności i przyzwoitości, aby jak najlepiej chronić jego interesy.</p>
                <p class="aboutSection__text">
                Terminowość i skuteczność naszych usług. Wierzymy, że pomoc jest skuteczna wtedy, gdy jest terminowa, dlatego wartość naszych usług opieramy o wiedzę i profesjonalizm naszych pracowników, aby spełnić oczekiwania klientów.
                </p>
            </div>
            <div class="aboutSection__values">
                <h2 class="aboutSection__title font-dark">Nasze wartości</h2>
                <p class="aboutSection__text font-dark">
                Niezawodność. Usługi świadczone są przez naszych doświadczonych i wysoko wykwalifikowanych specjalistów z różnych dziedzin prawa.Indywidualność każdego klienta. Uważamy, że indywidualne podejście do rozwiązywania problemów jest niezwykle ważne. Całą pracę budujemy wokół potrzeb i zainteresowań klienta.
                </p>
                <p class="aboutSection__text font-dark">
                Terminowość i skuteczność naszych usług. Wierzymy, że pomoc jest skuteczna wtedy, gdy jest terminowa, dlatego wartość naszych usług opieramy o wiedzę i profesjonalizm naszych pracowników, aby spełnić oczekiwania klientów.
                </p>
            </div>
        </section>
        <?php @include './components/valutation.php' ?>
        <section class="members">
            <h2 class="members__title">Członkowstwo</h2>
            <img src="./assets/img/izba-adwokacka.png" alt="Logo" class="members__logo">
        </section>
        <section class="partners">
            <h2 class="partners__title">Partnerzy</h2>
            <p class="partners__label">pl.gemixgroup.com</p>
            <img src="./assets/img/logo-gemix@1x.svg" alt="Logo" class="partners__logo">
        </section>
    </main>
    <?php @include './components/footer.php' ?> 
</body>
</html>





