<x-layout>
    {{-- <div class="container-fluid  text-center text-white">
        <div class="row justify-content-center">
            
        </div>
    </div> --}}
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
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <!-- img input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Inserisci immagine articolo</label>
                        <input type="file" name="img" class="form-control"/>
                    </div>
                    <!-- title input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Titolo</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}"/>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- subtitle input -->
                    <div class="form-outline mb-4">
                        <label class="form-label fw-semibold">Sottotitolo</label>
                        <input type="string" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror" value="{{old('subtitle')}}"/>
                        @error('subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- categorie input --}}
                    <label class="fw-semibold">Categorie</label>
                    <select name="category" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    {{-- Tags --}}
                    <div class="form-outline mt-4">
                        <label class="fw-semibold" for="tags">Tag</label>
                        <input name="tags" id="tags" class="form-control" value="{{old('tags')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <!-- body input -->
                    <div class="form-outline mb-4">
                        <label class="form-label mt-3 fw-semibold">Corpo dell'articolo</label>
                        <textarea class="form-control fw-semibold @error('body') is-invalid @enderror" name="body" cols="30" rows="10">{{old('body')}}</textarea>    
                        @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary ">Aggiungi articolo</button>
                </form>
            </div>
        </div>
    </div>
            
</x-layout>