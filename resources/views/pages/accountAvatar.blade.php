            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            {{-- <img src="{{ asset('storage/avatars/' . session('user_data')['avatar']) }}" alt="Аватар" class="rounded-circle" width="150"> --}}
                            <div class="mt-3">
                                <h4>{{ session('user_data')['name'] }}</h4>
                                <p class="text-secondary mb-1">{{ session('user_data')['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>