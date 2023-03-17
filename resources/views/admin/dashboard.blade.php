<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <h1 class="text-center">Bentornato Amministratore</h1>
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

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Amministratore </h2>
                <x-requests-table
                    :roleRequests="$adminRequests" role="amministratore"
                />
            </div>
        </div>
    </div> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Revisore</h2>
                <x-requests-table
                    :roleRequests="$revisorRequests" role="revisore"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Redattore</h2>
                <x-requests-table
                    :roleRequests="$writerRequests" role="redattore"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Tags della piattaforma</h2>
                <x-metainfo-table
                    :metaInfos="$tags" metaType="tags"
                />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table
                    :metaInfos="$categories" metaType="categorie"
                />
                <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex">
                    @csrf
                    <input type="text" name='name' class="form-control me-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>