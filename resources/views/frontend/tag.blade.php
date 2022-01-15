@extends('frontend.base', ['title' => __('Tag articles')])


@section('sub-header')
<div class="overlay"></div>
<div class="row">
    <div class="col-xl-9 mx-auto">
    <h1 class="mb-5">How can we help you today?</h1>
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
                <li class="breadcrumb-item">{{__('Tags')}}</li>
                <li class="breadcrumb-item">{{ $tag }}</li>
            </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container mb-4">
    <h2>{{ __('":tag" tag articles', ['tag' => $tag ]) }}</h2>
    @foreach($articles as $article)
        <div class="border-bottom my-2 p-2">
            <a href="{{ $article->url }}">
                <h3>{{ $article->transTitle() }}</h3>
            </a>
            <small>
                {{ Illuminate\Support\Carbon::parse($article->created_at)->format(setting('date_format')) . " - " . Illuminate\Support\Carbon::parse($article->created_at)->diffForHumans() }}
                @if ( $article->rate_total )
                . {{ __(' :rate out of :total found this helpfull', ['rate' => $article->rate_helpful, 'total' => $article->rate_total])}}
                @endif
            </small>
            <p class="p-0 m-0">{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 150, $end='...') }}</p>
        </div>
    @endforeach

    @if( $articles )
        {{ $articles->links() }}
    @endif

</div>
@endsection