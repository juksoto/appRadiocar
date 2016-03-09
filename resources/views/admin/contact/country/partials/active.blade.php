<br/>
<div class="col-xs-12 col-lg-6">
    {{ trans('admin.status.status') }}
    @if ($data -> collection -> active == true)

        <span class="check-active">
        {{ trans('admin.status.published') }}
    </span>

        {!! Form::open(['route' => ['admin.country.destroy', $data -> collection], 'method' => 'DELETE', 'class' => '' ])!!}

        <article class="small-12 medium-12 large-12">

            {!! Form::submit(trans('admin.submit.unpublish'), ['class' => 'button secondary']) !!}

        </article>

        {!! Form::close()!!}

    @else

        <span class="check-inactive">
        {{ trans('admin.status.unpublished') }}
    </span>

        {!! Form::open(['route' => ['admin.country.destroy', $data -> collection], 'method' => 'DELETE', 'class' => '' ])!!}

        <article class="small-12 medium-12 large-12">

            {!! Form::submit(trans('admin.submit.publish'), ['class' => 'button success']) !!}

        </article>

        {!! Form::close()!!}

    @endif
</div>

