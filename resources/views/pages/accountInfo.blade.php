
<div class="container mt-10">
    <div class="main-body">
        <div class="row gutters-sm">
            @include('pages.accountAvatar')
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Имя</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ session('user_data')['name'] }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Почта</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ session('user_data')['email'] }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Роль</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ session('user_data')['role'] }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info border-black bg-gradient-to-r from-purple-400 to-purple-600 hover:bg-gradient-to-r hover:from-fuchsia-400 hover:to-fuchsia-600 text-black" href="{{ route('profile.edit') }}">Редактировать</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

