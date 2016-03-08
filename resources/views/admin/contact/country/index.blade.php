@extends('admin.layout')

@section('content')

    <article class="row">
        <div class="col-md-12">
            <h1 class="title_main">Configuración regional: País</h1>
        </div>
    </article>
    @include('admin.partials.message')

    <section class="row">
        {!! Form::model(Request::all(),['route' => 'admin.country.index', 'method' => 'GET', 'class' => 'form-inline' ])!!}
        <article class="col-md-6 filter-section">
            <div class="form-search search-only form-group ">
                <i class="search-icon glyphicon glyphicon-search"></i>
                {!! Form::text('search', null, ['class' => 'form-control search-query', 'placeholder' => trans('admin.filter.search') ])  !!}
            </div>

            <div class="form-group">
                {!! Form::select ('active' , config('radiocar.active') , null , [ 'class' => 'form-control ']) !!}
            </div>
            <button type="submit" class="btn btn-primary">
                <span class=" glyphicon glyphicon-filter" aria-hidden="true"></span>
                Filtrar
            </button>
            <button type="submit" class="btn btn-danger">
                <span class=" glyphicon glyphicon-remove" aria-hidden="true"></span>
                Filtro
            </button>
        </article>
        {!! Form::close()!!}

        <article class="col-md-6 text-right">
            <a class="btn btn-success" href="{{ route('admin.country.create') }}">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                {{ trans('admin.submit.add_country') }}
            </a>
        </article>
    </section>



    <section class="small-12 large-12 medium-12 columns">
    
         @include('admin.contact.country.partials.table')

    </section>

    <section class="">
        {!! Form::open(['route' => ['admin.country.destroy', ':VALUE_ID'], 'method' => 'DELETE', 'class' => '' , 'id' => 'form-active'])!!}
        {!! Form::close()!!}
    </section>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{URL::asset('js/custom/custom.js')}}"></script>
@endsection