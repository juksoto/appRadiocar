@extends('admin.layout')

@section('content')

    <article class="row">
        <div class="col-md-12">
            <h1 class="title_main">Configuracion regional: País</h1>
        </div>
    </article>

    <article class="row">
        <div class="col-md-6">
            <a class="btn btn-default" href="{{ route('admin.country.create') }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                {{ trans('admin.submit.add_country') }}
            </a>
        </div>
    </article> <br>

    <article class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading panel-mediumgray"><strong>Mostrar sólo los elementos por</strong></div>
                <div class="panel-body">
                    {!! Form::model(Request::all(),['route' => 'admin.country.index', 'method' => 'GET', 'class' => 'form-horizontal' ])!!}
                    <div class="row">
                        <div class="col-md-6">
                            @include('admin.partials.filter-active')
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary">Filtrar</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-danger">Eliminar Filtro</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </article>
    
    <section class="small-12 large-12 medium-12 columns">
    
         @include('admin.contact.country.partials.table')

    </section>

    <section class="">
        {!! Form::open(['route' => ['admin.country.destroy', ':VALUE_ID'], 'method' => 'DELETE', 'class' => '' , 'id' => 'form-active'])!!}
        {!! Form::close()!!}
    </section>

@endsection