@extends('frontend.base', ['title' => $article->title])

@section('sub-header')
<div class="overlay"></div>
<div class="row">
    <div class="col-xl-9 mx-auto">
        <h1 class="mb-5">{{__('¿Cómo podemos ayudarle hoy?')}}?</h1>
    </div>
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <search-bar></search-bar>
    </div>
    @endsection

    @section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-capitalize">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Help center')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{$article->category->url}}">@if($article->category)
                                {{$article->category->name}} @else {{__('General')}} @endif</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            
            <div class="col-sm-3 border-right page-aside sticky-section">
                <div class="sticky-section-item">
                @if(count($related_articles))
                <div class="mb-4">
                    <h3>{{__('Related articles')}}</h3>
                    <div class="list-group">
                        @foreach ($related_articles as $related_article)
                        <a href="{{ $related_article->url }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                {{$related_article->title}}
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(count($article->tags))
                <div>
                    <h4 class="m-1">{{__('Tags')}}</h4>
                    @foreach ($article->tags as $tag)
                    <a href="{{ $tag->url }}" class="btn btn-outline-secondary btn-sm m-1">{{$tag->name}}</a>
                    @endforeach
                </div>
                @endif
                </div>
            </div>
            
            <div class="col-sm-9 p-2">
                <div class="article-header mb-2">
                    <h1>{{$article->transTitle()}}</h1>
                    <small>
                        {{ Illuminate\Support\Carbon::parse($article->created_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->created_at)->diffForHumans() }}
                    </small>
                    @can('update_article')
                    <div class="clearfix">
                        <a href="{{ route('dashboard') }}#/articles/edit/{{$article->id}}"
                            class="float-right"><i class="far fa-edit"></i> {{__('edit')}}</a>
                    </div>
                    @endcan
                </div>

                <div class="article-body">
                    {!! $article->transContent() !!}
                </div>

                <div>
                    <small>
                        {{ __('last_update') }} : {{ Illuminate\Support\Carbon::parse($article->updated_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->updated_at)->diffForHumans() }}
                    </small>
                </div>

                @if(defaultSetting('ticket_allowed', true))
                <div class="row justify-content-center my-5">
                    <div class="col-lg-12 text-center">
                        <h4>{{__('still_no_luck_we_can_help')}}!</h4>
                    </div>
                    <div class="col-auto mb-3">
                        <a href="{{ route('my_account.tickets.create') }}" class="btn btn-success btn-sm"><i
                                class="fas fa-ticket-alt"></i> {{__('Submit a ticket')}}</a>
                    </div>
                    <div class="col-lg-12 text-center">{{__('submit_ticket_text')}}.</div>
                </div>
                @endif

                <hr />
                <div class="row justify-content-center mb-5" id="article-rate">
                    <article-rate article_id="{{$article->id}}" rate='{{ $article->rate_helpful}}'
                        total="{{ $article->rate_total }}" />
                </div>
            </div>
        </div>

    </div>
    @endsection

    @section("styles")

    @parent()
    <link rel="stylesheet" href="{{ asset('assets/libs/lightbox/css/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/prism/prism.css') }}" />
    @endsection

    @section('footer_js')
    @parent()
    
    <script src="{{ asset('assets/libs/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/libs/prism/prism.js') }}"></script>

    <script>
        var img = jQuery(".article-body img");

        img.each(function() {
            var element = jQuery(this);
            if( this.parentElement.tagName != "A" ){
                var a = jQuery("<a />", {href: element.attr("src"), 'data-lightbox': 'Article image'});
                element.wrap(a);
            }
        });
    </script>

    <script>
        var headings = document.querySelectorAll(".article-body h2");
        var sections = []

        headings.forEach(function(item) {
            item.childNodes.forEach(function(child) {
                if(child.nodeName == "A" && child.hasAttribute('id')){
                    sections.push([child.getAttribute('id'), item.textContent]);
                }
            });
        });

        if( sections.length > 0 ){
            var sectionsList = "<h3>{{__('Article sections')}}</h3>"
            sectionsList += "<ul class='list-group my-2'>";
            sections.forEach(function(item) {
                sectionsList += "<li class='list-group-item'><a href='#"+item[0]+"'>"+item[1]+"</a></li>"
            });
            sectionsList += "</ul>"
            let elem = document.querySelector ('.page-aside .sticky-section-item')
            elem.innerHTML = sectionsList+elem.innerHTML;
        }

        
    </script>
@endsection