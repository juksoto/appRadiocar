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

    @include('admin.contact.country.partials.fields')

    <section class="form-group">
        <article class="col-sm-offset-2 col-sm-10">
            {!! Form::submit(trans('admin.submit.update_country'), ['class' => 'btn btn-primary' , 'id' => 'send-form']) !!}
            <a class="btn btn-danger" href="{{ route('admin.country.index') }}">{{ trans('admin.submit.back') }}</a>
        </article>
    </section>

    {!! Form::close()!!}

    <article class="row">
        @include('admin.contact.country.partials.active')
    </article>

@endsection