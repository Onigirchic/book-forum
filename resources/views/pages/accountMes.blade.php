<div class="container">
    <h1>Ваши предложения</h1>

    <form action="{{ route('userMessage') }}" method="post">
        @csrf

        @if(session('status') && session('status') == 'error')
            <h3 style="font-weight: bold; color: rgb(150, 189, 129);">{{ session('message') }}</h3>
        @elseif(session('status') && session('status') == 'success')
            <h3 style="font-weight: bold; color: red;">{{ session('message') }}</h3>
        @endif
        
        <textarea style="width: 30%"  id="message" name="message" placeholder="Ждем ваши предложения..." autocomplete="off" required></textarea>
        
        <div class="row">
            <div class="col-sm-12">
                <input class="btn btn-info border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black" type="submit" value="Поделиться">
            </div>
        </div>
    </form>
</div>
