@extends('admin.default')

@section('page-header')
    Tasks <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.tasks.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Project Name</th>
                    <th>Assing To</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Labels</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                <th>Name</th>
                    <th>Project Name</th>
                    <th>Assing To</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Labels</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route(ADMIN . '.tasks.edit', $item->id) }}">{{ $item->name }}</a></td>
                        <td>{{ $item->project->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->deadline }}</td>
                        <td>{{ $item->status }}</td>
                        <td> 

                        @foreach ($item->labels as $label)
                        
                        
                        <label for="inputCall4" class=" peers peer-greed js-sb ai-c">
                        <span class="peer">
                            <span class="badge badge-pill fl-r {{ $label->color }} lh-0 p-10">{{ $label->name }}</span>
                        </span>
                        </label>
                        @endforeach
                    
                    </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.tasks.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.tasks.destroy', $item->id), 
                                        'method' => 'DELETE',
                                        ]) 
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                        
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>

@endsection