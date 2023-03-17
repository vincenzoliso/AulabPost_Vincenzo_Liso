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

    <div class="container-fluid text-center text-white">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-header">Login</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Email:</label>
                            <input class="form-control" name="email"  type="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password:</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <button type="submit" class="btn btn-primary  btn-lg">Login</button>
                        <p class="small mt-3 fw-bold text-black">Non sei registrato?<a href="{{route('register')}}"> Clicca qui!</a></p>
                    </form>
                </div>
            </div>              
        </div>
    </div>
</x-layout>