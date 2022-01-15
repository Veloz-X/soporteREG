@extends('dashboard.base', ['page' => 'articles', 'pageTitle' => __('Articles'), 'hideTitle' => true])

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12 m-2">
        
        <a href="{{ route('dashboard.manage_articles') }}" class="btn btn-sm btn-outline-secondary mr-2" title="{{__('Manage articles')}}" data-toggle="tooltip" data-placement="top" data-placement="top">
            <i class="fas fa-angle-left"></i>
        </a>

        <h5 class="header-title d-inline text-capitalize">
            @isset($article_id){{__('Edit article')}} 
            <a :href="$myaccount_url+'manage_articles/create'" class="btn btn-sm btn-outline-secondary" ><i class="fas fa-plus"></i> {{__('New')}}</a>
            @else {{__('New article')}} @endisset
        </h5>

        @isset($article_id)
        <a href="{{ url('articles/'.$article_id) }}" class="btn btn-sm btn-outline-secondary float-right" target="_blank"><i class="far fa-eye"></i> {{__('View')}}</a>
        @endisset
            
    </div>
    <div class="col-md-12">
        <article-create-form @isset($article_id)article_id="{{ $article_id }}"@endisset><div class="preloader"></div></article-create-form>
    </div>
</div>
</div>
@endsection