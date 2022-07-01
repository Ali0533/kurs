@extends('welcome')

@section('content')
    <div class="infoForPayAndShip">
        <div class="container">
            <h2>Оплата и доставка</h2>
            <p>Доставка материалов осуществляется в день обращения, или по согласованию в удобное для Вас время. Работаем без выходных.</p>
            <p>Вы так же можете забрать материалы самовывозом с нашего склада во Владимире.</p>

            <h3>Каким транспортом осуществляем доставку:</h3>
            <ul>
                <li>Газель: грузоподъемность 1.5 тонны</li>
                <li>Самосвал Газель: объем кузова 2м</li>
                <li>Самосвал ЗИЛ: объем кузова 5м3</li>
                <li>Самосвал КАМАЗ: объем кузова 10м3</li>
            </ul>

            <h3>Сколько стоит доставка:</h3>
            <p>Стоимость доставки для каждого клиента расчитывается индивидуально. Она складывается из необходимого объема материала и киллометража (расстояние от производственной площадки до объекта).</p>
            <p>Для каждого заказчика подберем приемлимую цену. На оптовые заказы предоставляем индивидуальные скидки.</p>

            <h3>Способы оплаты:</h3>

            <ul>
                <li>Наличными водителю при получении</li>
                <li>Онлайн переводом на карту Сбер</li>
                <li>По безналичному расчету (для юридических лиц)</li>
                <li>В офисе компании любым удобным для вас способом</li>
            </ul>

            <div class="slider">
                <div class="item">
                    <img src="/resources/media/img/gazel.jpg" alt="Первый слайд">
                    <div class="slideText">Газель</div>
                </div>

                <div class="item">
                    <img src="/resources/media/img/gazelSamosval.jpg" alt="Второй слайд">
                    <div class="slideText">Самосвал Газель</div>
                </div>

                <div class="item">
                    <img src="/resources/media/img/zil.jpg" alt="Третий слайд">
                    <div class="slideText">Самосвал ЗИЛ</div>
                </div>

                <div class="item">
                    <img src="/resources/media/img/Kamaz.jpg" alt="Третий слайд">
                    <div class="slideText">Самосвал КАМАЗ</div>
                </div>

                <a class="prev" onclick="minusSlide()">&#10094;</a>
                <a class="next" onclick="plusSlide()">&#10095;</a>
            </div>

            <div class="slider-dots">
                <span class="slider-dots_item" onclick="currentSlide(1)"></span>
                <span class="slider-dots_item" onclick="currentSlide(2)"></span>
                <span class="slider-dots_item" onclick="currentSlide(3)"></span>
                <span class="slider-dots_item" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <h3>Доставка щебня и песка</h3>
                <a href="tel:89209098997">+7 (920) 909 89 97</a>
                <p>ali.adilov.2016@mail.ru</p>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlide() {
            showSlides(slideIndex += 1);
        }

        function minusSlide() {
            showSlides(slideIndex -= 1);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("item");
            var dots = document.getElementsByClassName("slider-dots_item");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endsection
