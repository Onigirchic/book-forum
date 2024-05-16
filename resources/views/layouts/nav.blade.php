<div class="container sticky-top">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between border-bottom m-0 p-0 bg-white">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            {{-- <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> --}}
                <div class="container mx-auto">
                    <div class="flex justify-center">
                        <img src="{{asset('img/logo/logo.png')}}" class="w-2/3" alt="">
                    </div>
                </div>
            </a>    
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            @if(session('user_data'))
                <li><a href="{{ route('home') }}" class="nav-link text-black">Главная</a></li>
                <li><a href="{{ route('catalog') }}" class="nav-link px-2 text-black">Каталог</a></li>
                <li><a href="{{ route('inform') }}" class="nav-link px-2 text-black">О нас</a></li>
                @if(session('user_data')['role'] == 'user')
                    <li><a href="{{ route('account') }}" class="nav-link px-2 text-black">Аккаунт</a></li>
                @elseif (session('user_data')['role'] == 'admin')
                    <li><a href="{{ route('account') }}" class="nav-link px-2 text-black">Аккаунт</a></li>
                    <li><a href="{{ route('admin') }}" class="nav-link px-2 text-black">Админ панель</a></li>
                @endif
            @else
            <li><a href="{{ route('home') }}" class="nav-link px-2 text-black">Главная</a></li>
            <li><a href="{{ route('catalog') }}" class="nav-link px-2 text-black">Каталог</a></li>
                <li><a href="{{ route('inform') }}" class="nav-link px-2 text-black">О нас</a></li>
            @endif
        </ul>

        <?dd(session('user_data'));
        ?>
        
        <div class="col-md-3 text-end">
            @if(session('user_data'))
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary  border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black">Выход</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="me-2" style="text-decoration: none;">
                    <button type="button" class="btn btn-outline-primary  border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black">Регистрация</button>
                </a>
                <a href="{{ route('login') }}" class="me-2" style="text-decoration: none;">
                    <button type="button" class="btn btn-outline-primary  border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black">Вход</button>
                </a>
            @endif
        </div>
        
        
    </header>
</div>