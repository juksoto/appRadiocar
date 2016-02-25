    <div class="form-group">
        {!! Form::label('country', trans('admin.country.name_country')) !!}
        {!! Form::text('country', null, ['class' => 'form-control col-lg-6', 'placeholder' => trans('admin.country.enter_a_name_country')])  !!}
    </div>
    <div class="form-group">
        {!! Form::label('iso', trans('admin.country.iso_country')) !!}
        {!! Form::text('iso', null, ['class' => 'form-control', 'placeholder' => trans('admin.country.enter_a_iso_country')]) !!}
    </div>

