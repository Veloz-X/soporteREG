@extends('install.layouts.master', [
    'step_text' => 'Folder permissions',
    'action' => route('install.folder_permissions'),
    'step' => 2
])

@section('content')
<ul class="list-group mb-2">
    @foreach ($folders as $k => $v)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $k }}
            @if( in_array($v, [777, 775, 755]) )
                <span class="badge badge-success badge-pill">{{$v}}</span>
            @else
                <span class="badge badge-danger badge-pill">{{$v}}</span>
            @endif
        </li>
    @endforeach
</ul>
@endsection
