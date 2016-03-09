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

@if(Session::has('message_floating'))
    <section class="alert-floating alert {{ Session::get("message_alert") }} alert-dismissable">
        <p>
            {{ Session::get("message_floating") }}
        </p>
    </section>

    @section('scripts')
        @parent
        <script type="text/javascript">
            $(document).ready(function() {
                showAlertFloating();
                console.log('entre');
            });
        </script>
    @endsection

@endif

