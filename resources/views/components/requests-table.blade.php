<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <th class="fixed-width" scope="col">#</th>
        <th class="fixed-width" scope="col">Nome</th>
        <th class="fixed-width" scope="col">Email</th>
        <th class="fixed-width" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($roleRequests as $user)
          <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>
                @switch($role)
                    @case('amministratore')
                          <div class="text-center">
                              <a  href="{{route('admin.setRevisor',compact('user'))}}"><i id="myicon1" class="fa-solid  user_check fa-user-check "></i></a> 
                          </div>
                          <a href="{{route('admin.setAdmin',compact('user'))}}" class="btn" id="mybottone1">Attiva {{$role}}</a>
                        @break
                    @case('revisore')
                          <div class="text-center">
                            <a  href="{{route('admin.setRevisor',compact('user'))}}"><i id="myicon" class="fa-solid  user_check fa-user-check "></i></a> 
                          </div>
                          <a href="{{route('admin.setRevisor',compact('user'))}}" id="mybottone" class="btn " >Attiva {{$role}}</a>
                        @break
                    @case('redattore')
                          <div class="text-center">
                            <a  href="{{route('admin.setRevisor',compact('user'))}}"><i id="myicon2" class="fa-solid  user_check fa-user-check "></i></a> 
                          </div>                              
                          <a href="{{route('admin.setWriter',compact('user'))}}" id="mybottone2" class="btn">Attiva {{$role}}</a>
                    @break      
                @endswitch                
              </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>