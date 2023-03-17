<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th class="fw-bolder fs-4" scope="col">Titolo</th>
        <th class="hidden-col fs-4" scope="col">Sottotitolo</th>
        <th class="hidden-col fs-4 col-md-3" scope="col">Redattore</th>
        <th class="col-md-3 fs-4" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td class="fw-md-bold fw-bold">{{substr($article->title, 0, 35)}}...</td>
            <td class="hidden-col">{{substr($article->subtitle, 0, 35)}}...</td>
            <td class="hidden-col">{{$article->user->name}}</td>
            <td class="">
                @if(is_null($article->is_accepted))

                  <a href="{{route('article.show', compact('article'))}}" class="btn" id="mybottone4">Leggi articolo</a>
                  <a href="{{route('article.show', compact('article'))}}" id="myicon4"><i class="fa-regular fs-5 fa-pen-to-square"></i></a>
                @else 
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn" id="mybottone3">Manda in revisione</a>
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" id="myicon3"><i class="fa-regular fs-5 fa-share-from-square"></i></a>
                @endif  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>