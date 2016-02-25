@extends('admin.layout')

@section('content')

    <section class="row">
        <article class="col-xs-">
            <img src="" alt=""/>
        </article>
        <article class="col-xs-6">
            <h1>Editar  País: {!! $data -> collection -> country !!}</h1>
            <p>
                Ingresa la informacion necesaria
            </p>
        </article>
    </section>

    <div class="row">
        {!! Form::model($data -> collection,['route' => ['admin.contact.country.update', $data -> collection], 'method' => 'PUT', 'class' => 'form-horizontal' ])!!}
        <section class="col-xs-12">
            @include('admin.partials.message')
        </section>
    </div>

    <article class="row">
        <section class="col-xs-12 col-lg-6">
            @include('admin.contact.country.partials.fields')
        </section>
    </article>

    <div class="row">
        <article class="col-xs-12 col-lg-6">
            {!! Form::submit(trans('admin.submit.update_country'), ['class' => 'btn btn-primary']) !!}
            <a class="btn btn-danger" href="{{ route('admin.contact.country.index') }}">{{ trans('admin.submit.back') }}</a>
        </article>
    </div>
    {!! Form::close()!!}

    <article class="row">
        @include('admin.contact.country.partials.active')
    </article>

@endsection