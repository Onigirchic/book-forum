<div class="flex items-center justify-center mt-2">
    <h1 class="text-4xl font-bold">Новостной журнал</h1>
</div>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
                <a href="{{ route('news1') }}" class="no-underline">
                    <div class="card shadow-sm">
                        <img style="border-radius: 1%;" src="{{asset('img/news2.jpg')}}" alt="">
                        <div class="card-body">
                        <p class="card-text">Лучшие фэнтези и фантастика 2023 года</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col">
                <a href="{{ route('news2') }}" class="no-underline">
                    <div class="card shadow-sm">
                        <img style="border-radius: 1%;" src="{{asset('img/news3.jpg')}}" alt="">
                        <div class="card-body">
                        <p class="card-text">Криминальные драмы о жизни гангстеров</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="{{ route('news3') }}" class="no-underline">
                    <div class="card shadow-sm">
                        <img style="border-radius: 1%;" src="{{asset('img/news.jpg')}}" alt="">
                        <div class="card-body">
                        <p class="card-text">Топ детективов и триллеров 2023 года</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        </div>
    </div>