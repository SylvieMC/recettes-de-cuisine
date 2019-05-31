@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter un avatar</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('avatar.store')}}">
          @csrf
          <div class="form-group">    
              <label for="url">Url de votre avatar :</label>
              <input type="text" class="form-control" name="url"/>
          </div>                  
          <button type="submit" class="btn btn-primary">Ajouter l'avatar</button>
      </form>
  </div>
</div>
</div>
@endsection