<x-layout>
    <h1 class="text-center h1-creers">Lavora con noi</h1>
    <div class="container mb-5">
        {{-- row amministratore --}}
        <div class="row flex-column-reverse flex-md-row justify-content-evenly align-items-center">
            <div class="col-10 col-md-5 card-careers py-2 px-4">
                <h2>Lavora come amministratore</h2>
                <p class="text-dark">Cosa farai: Ti occuperai della gestione delle richieste di lavoro, avrai la piena gestione dei tags e delle categorie presenti in piattaforma</p>    
            </div>
            {{-- img amministratore --}}
            <div class="col-12 d-flex justify-content-center col-md-5">
                <img class="w-100" src="{{Storage::url('/img/admin.png')}}" alt="">
            </div>
        </div>
        
        {{-- row revisore --}}
        <div class="row justify-content-evenly align-items-center my-5 my-md-0">
            
            {{-- img revisore --}}
            <div class="col-12 d-flex justify-content-center col-md-5">
                <img class="w-100" src="{{Storage::url('/img/revisor.png')}}" alt="">
            </div>
            
            <div class="col-10 col-md-5 card-careers py-2 px-4">
                <h2>Lavora come Revisore </h2>
                <p class="text-dark">Cosa farai: Ti occuperai della revisione degli articoli dei vari redattori, con la possibilità di accettare, rifiutare o mandare in revisione un articolo</p>  
            </div>
        </div>
        
        {{-- row redattore --}}
        <div class="row flex-column-reverse flex-md-row justify-content-evenly align-items-center">
            <div class="col-10 col-md-5 card-careers py-2 px-4">
                <h2>Lavora come redattore</h2>
                <p class="text-dark">Cosa farai: Ti occuperai della creazione dei vari articoli e potrai modificarli ed eliminarli</p>
            </div>
            {{-- img redattore --}}
            <div class="col-12 d-flex justify-content-center col-md-5">
                <img class="w-100" src="{{Storage::url('/img/writer.png')}}" alt="">
            </div>
        </div>
    </div>
    
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    
    <h2 class="text-center margin-titolo fs-1">Compila il form per candidarti</h2>
    {{-- sezione invia candidatura --}}
    <div class="container create-article">
        <div class="row justify-content-around">
            {{-- sezione immagine form --}}
            <div class="col-12 col-md-6 col-lg-6">
                <img class="w-100" src="{{Storage::url('/img/welcome.png')}}" alt="">
            </div>
            {{-- form --}}
            <div class="col-12 col-md-6 col-lg-6">
                <form method="POST" action="{{route('careers.submit')}}">
                    @csrf
                    {{-- input ruoli --}}
                    <label class="fw-semibold">Per quale ruolo ti stai candidando?</label>
                    <select name="role" class="form-control " >
                        
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                        
                    </select>
                    <!-- email input -->
                    <div class="form-outline my-4">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') ?? Auth::user()->email}}"/>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- body input -->
                    <div class="form-outline mb-4">
                        <label class="form-label my-3 fw-semibold">Parlaci di te</label>
                        <textarea class="form-control fw-semibold @error('message') is-invalid @enderror" name="message" cols="30" rows="10">{{old('message')}}</textarea>    
                        @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    
                    </div>
                    <!-- Submit button -->
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary ">Invia la candidatura</button>
                    </div>
                </form>
                
            </div>
            
        </div>
    </div>
</x-layout>