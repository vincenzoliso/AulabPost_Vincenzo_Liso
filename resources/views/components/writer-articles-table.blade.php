<table class="table table-stripped table-hover border">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th class="hidden-col" scope="col">Sottotitolo</th>
        <th class="hidden-col" scope="col">Categoria</th>
        <th class="hidden-col" scope="col">Tags</th>
        <th class="hidden-col" scope="col">Creato il</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td class="fw-md-bold fw-bold">{{substr($article->title, 0, 20)}}...</td>
            <td class="hidden-col">{{substr($article->subtitle, 0, 35)}}...</td>
            <td class="hidden-col">{{$article->category->name ?? 'Non categorizzato'}}</td>
            <td class="hidden-col">
                @foreach ($article->tags as $tag)
                    {{$tag->name}},
                @endforeach 
            </td>
            <td class="hidden-col">{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', compact('article'))}}"><i class="fa-solid fa-book-open fs-4 "></i></a>
                <a href="{{route('article.edit', compact('article'))}}"><i class="fa-regular fa-pen-to-square fs-4 px-2"></i></a>
                <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn-bg-none p-0"><i class="fa-solid fa-trash fs-4"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>