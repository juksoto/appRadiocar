<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-capitalize">id</th>
                <th class="text-capitalize">{{ trans('admin.country.country') }}</th>
                <th class="text-capitalize">{{ trans('admin.country.iso') }}</th>
                <th class="text-center text-capitalize">{{ trans('admin.status.status') }}</th>
            </tr>
            </thead>
            <tbody>
            @forelse($data -> collections as $collection)
                <tr data-id="{{ $collection->id  }}">
                    <td>  {!! $collection -> id !!}</td>
                    <td> <a href="{{ route('admin.country.edit', $collection) }}"> {!! $collection -> country !!} </a></td>
                    <td> {!! $collection -> iso !!}</td>
                    <td class="text-center"> <a href="#" class="btn-active"><span class="icon-check @if ($collection->active == 1) check-active  @else check-inactive @endif "></span></a>
                    </td>
                </tr>
            @empty
            </tbody>
        </table>

        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ trans('admin.message.no_records_found') }}
        </div>

        @endforelse
    </div>
</div>
