@include('inc.header')
<div class="container">
    <div class="lead text-center"> <legend>Details about <b>{{ $articles->title }}</b></legend>
    </div>
    <div class = "card mb-5">
        <div class="card-header">
            <p class="text-center"> {{ $articles->title }}</p>

        </div>
        <div class="card-body">
            <p class="text-center"> {{ $articles->description }}</p>
        </div>
    </div>
</div>

@include('inc.footer');