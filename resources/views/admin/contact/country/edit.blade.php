@extends('admin.layout')

@section('content')

    <section class="row">
        <article class="col-xs-">
            <img src="" alt=""/>
        </article>
        <article class="col-xs-6">
            <h1>
                {!! trans('admin.country.edit_country') !!} : {!! $data -> collection -> country !!}
            </h1>
            <p>
                {!! trans('admin.country.content_header') !!}
            </p>
        </article>
    </section>

    {!! Form::model($data -> collection,['route' => ['admin.country.update', $data -> collection], 'method' => 'PUT', 'class' => 'form-horizontal' ])!!}

    <section class="form-group">
        <section class="col-md-12">
            @include('admin.partials.message')
        </section>
    </section>

    <!-- Section Fields -->
        @include('admin.contact.country.partials.fields')
    <!-- End Section Fields -->

    <!-- Section Buttons -->
    <section class="form-group">

        <!-- Button Submit and Cancel -->
        <article class="col-md-offset-2 col-md-4">
            {!! Form::submit(trans('admin.submit.update_country'), ['class' => 'btn btn-primary' , 'id' => 'send-form']) !!}
            <a class="btn btn-danger" href="{{ route('admin.country.index') }}">{{ trans('admin.submit.back') }}</a>
        </article>
        <!-- End Button Submit and Cancel -->

        <!-- Button Destroy -->
        <article class="col-md-offset-4 col-md-2 text-right">

            {!! Form::open(['route' => ['admin.country.destroy', $data -> collection], 'method' => 'DELETE', 'class' => '' ])!!}

            @if ($data -> collection -> active == true)
                {!! Form::submit(trans('admin.submit.unpublish'), ['class' => 'btn btn-warning']) !!}
                @else
                {!! Form::submit(trans('admin.submit.publish'), ['class' => 'btn btn-success']) !!}
            @endif

            {!! Form::close()!!}

        </article>
        <!-- End Button Destroy -->
    </section>
    <!-- End Section Buttons -->

    {!! Form::close()!!}

@endsection