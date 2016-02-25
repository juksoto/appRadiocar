
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Buscar</label>
            <div class="col-sm-10">
                {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => trans('admin.filter.search') ])  !!}
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">Estado</label>
            <div class="col-sm-10">
                {!! Form::select ('active',config('radiocar.active'), null,[ 'class' => 'form-control']) !!}
            </div>
        </div>


