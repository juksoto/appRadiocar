@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ Session::get("message") }}
    </div>
@endif
<!--<section class="alert-floating ">
    <p>
    </p>
</section>-->

