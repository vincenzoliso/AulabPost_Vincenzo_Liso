<x-layout>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="container-fluid my-5  text-center text-white">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <div class="text-header">Registrati</div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Username:</label>
                            <input class="form-control" name="name"  type="text">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email:</label>
                            <input class="form-control" name="email"  type="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password:</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password:</label>
                            <input class="form-control" name="password_confirmation" type="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Registrati</button>

                        <p class="small mt-3 fw-bold text-black">Sei gia registrato?<a href="{{route('login')}}"> Clicca qui!</a></p>
                    </form>
                </div>
            </div>              
        </div>
    </div>
</x-layout>