<div class="album py-3 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            @foreach ($book as $item)
                <div class="col">
                    <div class="card shadow-sm" style="height: 100%;">
                        <center>
                            <a href="{{ url('/book-'.$item->id) }}" class="no-underline">
                                <img style="width: 190px; height: 300px; margin-top: 5px;" src="{{ asset('storage/' . $item->imagePath) }}" alt="Картинка">
                            </a>
                        </center>
                        <div class="card-body">
                            <p class="card-text">{{ $item->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>            
            @endforeach
        </div>
    </div>
</div>
