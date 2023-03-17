<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="tags" content="
        @foreach($article->tags as $tag)
            {{$tag->name}},
        @endforeach    
    ">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <x-navbar/>
    <div class="scroll-to-top">
        <a href="#" class="scroll-link">
          <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <div class=" my-5 bg-white">
        @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
        @endif
    
        <div class="container">
            {{-- row immagine e titolo --}}
            <div class="row justify-content-center align-content-center">
                <div  class="col-12 col-md-5 d-flex align-items-center p-0 ">
                    <h1 id="titleAnimation" class="fs-show text-dark">
                        {{$article->title}}
                    </h1>
                </div>
                <div  class="col-12 col-md-7 p-0">
                    <img src="{{Storage::url($article->img)}}" id="imgAnimation" class="img-show" alt="...">
                </div>
            </div>
            {{-- row sottotitolo --}}
            <div class="row mt-4 ">
                <h3 class=" text-dark p-0"><i>"{{$article->subtitle}}"</i></h3>
            </div>
            {{-- row data --}}
            <div class="row mt-3  border-show  ">   
                <div class="col-12 col-md-12  d-flex justify-content-between align-items-center story__toolbar">
                   <p class="story__toolbar fw-bold">
                    <i class="fa-solid fa-calendar-days pe-1 pt-3"></i> 
                    {{$article->created_at->format('d/m/Y')}}
                   </p>
                     
                     <span  class="lettura">
                        <a class="text-dark fw-bold story__toolbar color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}"><i class="fa-solid fa-pen-nib pe-1 fs-5"></i>{{$article->user->name}}</a> 
                     </span>
                        <p class="story__toolbar fw-bold">
                            <i class="fa-solid pe-1 pt-3 fa-hourglass-half"></i>
                            {{$article->readDuration()}} min
                        </p>
                </div>                      
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center col-md-11">
                    <div class="mt-5">
                        <p>{{$article->body}}</p> 
                    </div>  
                </div>
            </div>
            <div class="pt-5 text-center">
                @if (Auth::user() && Auth::user()->is_revisor)
                @if ($article->is_accepted == NULL)
                <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="card-button btn-accept">Accetta Articolo</a>
                <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="card-button btn-discard mt-2">Rifiuta Articolo</a>
                @else 
                    <a href="{{route('revisor.undoArticle', compact('article'))}}" class="card-button btn-discard">Manda in revisione</a>
                    @endif
                    
                    @endif
                    <a class="card-button btn-return mt-2 mt-md-0" href="{{route('article.index')}}">Torna indietro</a> 
            </div>
        </div>          
    </div>
    <x-footer/>
    <script src="https://kit.fontawesome.com/58c29b2b44.js" crossorigin="anonymous"></script>
</body>
</html>
   


    
 <div id="progress-bar"></div>    
