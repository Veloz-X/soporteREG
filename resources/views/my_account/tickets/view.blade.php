@extends('my_account.base', ['page' => 'view_ticket', 'pageTitle' => __('My ticket')])


@section('page-heading') 
@endsection

@section('content') 
<div class="container page-ticket"> 
    <mya-ticket :ticketid="{{$ticket->id}}"></mya-ticket>
</div>
@endsection

@section('head_assets')
@parent
<link href="{{ asset('assets/libs/vue-select/vue-select.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/libs/vue-select/vue-select.min.js') }}"></script>
@endsection