<section class="container mt-5 p-5">
    <form class="bg-secondary text-white rounded p-5" action="{{$values? '/member/update/'.$member->id : '/member/add'}}" method="post">
        @csrf
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="nom" value="{{$values? $member->nom : null}}">
        </div>
        <div class="form-group">
          <label>Age</label>
          <input type="number" class="form-control" name="age" value="{{$values? $member->age : null}}">
        </div>
        <div class="form-group">
          <select class="custom-select" name="genre">

            @if ($values)
              @if ($member->genre == "Homme")
                <option value="Homme" selected>Man</option>
                <option value="Femme">Woman</option>
              @else
                <option value="Homme">Man</option>
                <option value="Femme" selected>Woman</option>
                  
              @endif
            @else
              <option value='null' selected>Please select a gender</option>
              <option value="Homme">Man</option>
              <option value="Femme">Woman</option>
              @endif

            </select>

              
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light text-secondary">{{$values? 'Edit' : 'Add'}}</button>
          </div>
        </form>
        <a href="{{$values? '/member/show/'.$member->id : '/'}}" class="my-3 btn btn-secondary">Go Back</a>
</section>