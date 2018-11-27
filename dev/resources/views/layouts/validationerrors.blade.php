<div class="row">
    <div class="col-md-9 text-danger">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-danger">{{$error}}</div>
                <br>
            @endforeach
        @endif
        @isset($err){{$err}}<br>@endisset
    </div>
</div>