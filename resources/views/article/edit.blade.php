<x-layout>
    <div class="container-fluid p-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class=" text-dark">
                Modifica articoli
            </h1>
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

    
    {{-- sezione inserisci articolo --}}
    <div class="container create-article">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put') 
                    <!-- img input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Inserisci immagine articolo</label>
                        <input id="image" type="file" name="img" class="form-control"/>
                    </div>
                    <!-- title input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Titolo</label>
                        <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$article->title}}"/>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- subtitle input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Sottotitolo</label>
                        <input id="subtitle" type="string" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{$article->subtitle}}"/>
                        @error('subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- categorie input --}}
                    <label for="category" class="fw-semibold">Categorie</label>
                    <select id="category" name="category" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                    {{-- Tags --}}
                    <div class="form-outline mt-4">
                        <label class="fw-semibold" for="tags">Tag</label>
                        <input name="tags" id="tags" class="form-control" value="{{$article->tags->implode('name', ', ')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <!-- body input -->
                    <div class="form-outline mb-4">
                        <label for="body" class="form-label mt-3 fw-semibold">Corpo dell'articolo</label>
                        <textarea id="body" class="form-control fw-semibold @error('body') is-invalid @enderror" name="body" cols="30" rows="10">{{$article->body}}</textarea>    
                        @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    
                    </div>
                    <!-- Submit button -->
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary ">Aggiorna articolo</button>
                        <a class="btn" href="{{route('homepage')}}">Torna alla home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
            
</x-layout>