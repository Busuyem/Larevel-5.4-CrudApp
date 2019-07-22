@include('inc.header');

<div class="container">

    <form class="form-group" method="POST" action="{{url('/insert')}}">
        {{csrf_field()}}
    <fieldset>
    <legend>Create an Article Here</legend>
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
        <div class="alert alert-danger col-md-10">
            {{$error}}
        </div>

    @endforeach

    @endif
    <div class="col-md-10">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>


    <div class="col-md-10">
      <label for="description">Description</label>
      <textarea type="email" name="description" rows = "" class="form-control" placeholder="Description"></textarea>
    </div>
    
    
  </fieldset>
  <div class="container mt-3">
  <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('/')}}" class="btn btn-info">Back</a>
    </div>
</form>
</div>

@include('inc.footer');