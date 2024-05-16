<style>
body {
    background-color: #f8f9fa;
}
.form-container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.error-message {
    font-size: 12px;
    color: red;
    margin-top: 5px;
}
</style>

<div class="container">
    <div class="form-container">
    <h2 class="mb-4">Добавить книгу</h2>
    <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        @if(session('admin'))
            <h3 style="font-weight: bold; color: rgb(150, 189, 129); left: 950px; top: 450px;">{{ session('admin') }}</h3>
        @endif

        <div class="mb-3">
        <label class="form-label">Название</label>
        <input type="text" name="name" class="form-control border-black" placeholder="" value="{{ old('name') }}">
        @error('name')
        <p class="error-message">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-3">
        <label class="form-label">Автор</label>
        <input type="text" name="author" class="form-control border-black" placeholder="" value="{{ old('author') }}">
        @error('author')
        <p class="error-message">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-3">
        <label class="form-label">Жанр</label>
        <input type="text" name="genre" class="form-control border-black" placeholder="" value="{{ old('genre') }}">
        @error('genre')
        <p class="error-message">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-3">
        <label class="form-label">Описание</label>
        <textarea type="text" name="description" class="form-control border-black" placeholder="" value="{{ old('description') }}"></textarea>
        @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Картинка</label>
            <input type="file" name="image" class="form-control border-black" id="image" onchange="previewImage(event)">
            <div id="imagePreviewContainer" style="display: none;">
                <img id="imagePreview" src="#" alt="Выберите изображение" style="max-width: 200px; margin-top: 10px;">
                <button type="button" id="removeImageButton" class="btn btn-danger">Удалить изображение</button>
            </div>
            @error('image')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black">Отправить</button>
    
        <script>
            // Функция для предварительного просмотра изображения перед загрузкой
            function previewImage(event) {
                var image = document.getElementById('imagePreview');
                var imageContainer = document.getElementById('imagePreviewContainer');
                imageContainer.style.display = 'block';
                image.src = URL.createObjectURL(event.target.files[0]);
            }
        
            // Функция для удаления предварительно просматриваемого изображения
            document.getElementById('removeImageButton').addEventListener('click', function() {
                var image = document.getElementById('imagePreview');
                var imageContainer = document.getElementById('imagePreviewContainer');
                image.src = '#';
                imageContainer.style.display = 'none';
                // Очищаем значение поля ввода изображения, чтобы предотвратить его отправку
                document.getElementById('image').value = '';
            });
        </script>

    </form>
    </div>
</div>