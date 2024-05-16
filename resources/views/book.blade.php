@include('layouts.header')

    <div class="container marketing" style="margin-top: 30px">
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading fw-bold lh-1">{{ $bookShow->name }}</h2>
            <h4 class=" fw-normal lh-1">Автор: {{ $bookShow->author }}</h4>
            <h4 class="featurette-heading fw-normal lh-1">Жанр: {{ $bookShow->genre }}</h4>
            <p class="lead">{{ $bookShow->description }}</p>
            </div>
            <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="width:50%; border-radius: 3%;"  src="{{ asset('storage/' . $bookShow->imagePath) }}" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
            </div>
            <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                @auth
                    <form action="{{ route('follow') }}" method="post" >
                        @csrf
                        @if(session('follow'))
                            <h3 style="font-weight: bold; color: rgb(150, 189, 129); left: 950px; top: 450px;">{{ session('follow') }}</h3>
                        @endif
                        <input type="hidden" id="userId" name="userId" value="{{ session('user_data')['id'] }}" required>
                        
                        <input type="hidden" id="bookId" name="bookId" value="{{ $bookShow->id }}" required>
                        
                        <button type="submite" class="btn btn-lg btn-primary border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black">В избранное</button>
                    </form>
                @else
                    <p class="font-bold">Войдите в аккаунт, чтобы добавить в избранное</p>
                @endauth
            </div>
        </div>

        <form action="{{ route('userComment') }}" method="post" >
            @csrf
            
            @if(session('userComment')) 
                <h3 style="font-weight: bold; color: rgb(150, 189, 129); left: 950px; top: 450px;">{{ session('userComment') }}</h3>
            @endif

        <div class="input-group mb-3">
            @if (!session('user_data'))
            <input type="text" name="comment" class="form-control" placeholder="Войдите в аккаунт, чтобы оставить комментарий" autocomplete="off" aria-label="Recipient's username" aria-describedby="basic-addon2">
            @else
                <input type="text" name="comment" style="border-radius: 5px" class="form-control border-black" placeholder="Ваш комментарий" autocomplete="off" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <input type="hidden" name="bookId" value="{{ $id }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black" type="submite">Отправить</button>
                </div>
            @endif
        </div>

        </form>
        
        @foreach($comments as $comment)

        <div class="list-group" style="margin-bottom: 20px">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{ $comment->loginUser }}</h5>
                <small class="text-muted">
                    {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                </small>
            </div>
            <p class="mb-1">{{ $comment->comment }}</p>
        </div>

        @endforeach
        
    </div>

@include('layouts.footer')

