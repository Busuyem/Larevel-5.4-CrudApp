@include('inc.header');

<div class="container">

<form class="form-group" method="POST" action="{{url('/edit', array($articles->id))}}">
{{csrf_field()}}
  <fieldset>
    <legend>Update Your Article</legend>
        <div>

            <label for="title">Title</label>
            <input type="text" name="title" value="{{$articles->title}}" class="form-control" placeholder="Title">
        </div>
    


    <div>
      <label for="description">Description</label>
      <textarea type="text" name="description" class="form-control" rows='10' placeholder="Description">{{$articles->description}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{'/'}}" class="btn btn-info m-2">Back</a>
  </fieldset>
</form>
</div>

@include('inc.footer')

