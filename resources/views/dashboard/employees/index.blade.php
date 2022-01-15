@extends('dashboard.base', ['page' => 'employees', 'pageTitle' => __('Employees')])

@section('content')
<employees-list><div class="preloader"></div></employees-list>
@endsection