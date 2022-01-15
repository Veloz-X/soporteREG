@extends('my_account.base', ['page' => 'homepage', 'pageTitle' => __('My tickets')])
@section('content') 
<div class="my-3">
    <mya-ticket-list><div class="preloader"></div></mya-ticket-list>
</div>
@endsection