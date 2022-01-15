@extends('dashboard.base', ['page' => 'articles', 'pageTitle' => __('Articles')])

@section('content')
<div class="container">
    <app-articles><div class="preloader"></div></app-articles>
</div>
@endsection
