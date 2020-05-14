<!-- ALLERT -->
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
@endif

@if(session('primary'))
    <div class="alert alert-primary" role="alert">
        {{ session('primary') }}
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-danger" role="alert">
        {{ session('danger') }}
    </div>
@endif