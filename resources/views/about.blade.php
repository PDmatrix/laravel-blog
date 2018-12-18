@extends("layout")

@section("content")
    <div class="sub-title">
        <h2>Обо мне</h2>
        <a href="/contact"><i class="icon-envelope"></i></a>
    </div>


    <div class="col-md-12 content-page">
        <div class="col-md-12 blog-post">


            <!-- My Intro Start -->
            <div class="post-title margin-bottom-30">
                <h1>Привет, я <span class="main-color">Алекс Паркер</span></h1>

                <ul class="knowledge">
                    <li class="bg-color-1">Вэб дизайнер</li>
                    <li class="bg-color-4">Вэб разработчик</li>
                    <li class="bg-color-6">Фрилансер</li>
                    <li class="bg-color-5">Консультант</li>
                </ul>

            </div>
            <!-- My Intro End -->


            <p>Я на этом сайте с 2004 года<br><b><a
                            href="/work" data-toggle="tooltip" data-placement="top"
                            title="Просмотрите мои работы.">Работа</a></b>
            </p>


            <!-- Video Start -->
            <div class="video-box margin-top-40 margin-bottom-80">
                <div class="video-tutorial">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=O2Bsw3lrhvs"
                       title="Мои мысли">
                        <img src="images/pic/my-pic.png" alt="">
                    </a>
                </div>
                <p>Просмотрите мои мысли насчет вэб дизайна</p>
            </div>
            <!-- Video End -->


            <!-- My Service Start -->
            <div class="post-title">
                <h1>Мои <span class="main-color">Услуги</span></h1>
            </div>

            <div class="list list-style-2 margin-top-30">
                <ul>
                    <li>Дизайн сайта</li>
                    <li>Разработка сайта</li>
                    <li>Разработка темы ворпресс</li>
                    <li>Разработка мобильных приложений</li>
                    <li>E-commerce разработка</li>
                    <li>UI/UX консультация</li>
                </ul>
            </div>
            <!-- My Service End -->

        </div>

        <div class="col-md-12 text-center">
            <a href="/contact" data-toggle="tooltip" data-placement="top"
               title="Посетите мои контакты" class="load-more-button">Нанять</a>
        </div>

    </div>
@endsection