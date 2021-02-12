<section class="container p-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            @if ($looping)
            
            <td scope="col">Name</td>
            <td scope="col"></td>
                
            @else

            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col"></th>
            <th scope="col"></th>

            @endif
          </tr>
        </thead>
        <tbody>
            @if ($looping)
            @foreach ($members as $member)
            <tr>
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->nom}}</td>
                <td><a href="/member/show/{{$member->id}}" class="btn btn-primary">details</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                    <th scope="row">{{$member->id}}</th>
                    <td>{{$member->nom}}</td>
                    <td>{{$member->age}}</td>
                    <td>{{$member->genre}}</td>
                    <td><a href="/member/edit/{{$member->id}}" class="btn btn-warning">edit</a></td>
                    <td>
                        <form action="/member/delete/{{$member->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>

            @endif
         
        </tbody>
      </table>
</section>