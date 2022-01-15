@extends('dashboard.base', ['page' => 'customers', 'pageTitle' => __('Customers')])

@section('content')
<customers-list><div class="preloader"></div></customers-list>
@endsection