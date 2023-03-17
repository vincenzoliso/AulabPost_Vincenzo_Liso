<div class="table-responsive">
    <table class="table align-middle ">
        <thead>
            <tr>
                <th class="fixed-width" scope="col">#</th>
                <th class="fixed-width" scope="col">Nome Tag</th>
                <th class="fixed-width" scope="col">Q.ta Articoli collegati</th>
                <th class="fixed-width" scope="col">Aggiorna</th>
                <th class="fixed-width" scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metaInfos as $metaInfo)
            <tr >
                <th scope="row">{{$metaInfo->id}}</th>  
                <td>{{$metaInfo->name}}</td>
                <td>{{count($metaInfo->articles)}}</td>

                @if ($metaType == 'tags')
                <td>
                    <form action="{{route('admin.editTag',['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <input type="text" name="name" placeholder="Nuovo nome Tag" class="form-control w-75 d-inline">
                            <button class="border-none"type="submit"><i  id="myicon5" class="fa-solid fa-square-check fs-4 mt-1"></i></button>
                            <button id="mybottone5" class="btn mt-1" type="submit">Aggiorna</button>
                        </div>                        
                    </form>
                </td>
                <td>
                    <form  action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="text-center">
                            <button class="border-none" type="submit"><i id="myicon6" class="fa-solid fa-trash-can"></i></button>
                        </div>                                        
                        <button id="mybottone6" class="btn" type="submit">Elimina</button>
                    </form>
                </td>
                
                @else
                <td>
                    <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <input type="text" name="name" placeholder="Nuovo nome Categoria" class="form-control w-75 d-inline">
                            <button class="border-none" type="submit"><i  id="myicon7" class="fa-solid fa-square-check fs-4 mt-1"></i></button>
                            <button id="mybottone7" class="btn mt-1" type="submit">Aggiorna</button>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="text-center">
                            <button class="border-none" type="submit"><i id="myicon8" class="fa-solid fa-trash-can"></i></button>
                        </div>
                        <button id="mybottone8" class="btn" type="submit">Elimina</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>