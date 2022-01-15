@extends('dashboard.base',[
'page' => 'modules_manager',
'pageTitle' => __('Modules')
])

@section('content')
<div class="container-fluid content-row" id="modulesManager">

  <div class="card">
    <div class="card-body p-2">
      <div class="upload-module">
        <upload-module><div class="preloader"></div></upload-module>
      </div>
    </div>
  </div>

  <modules-list><div class="preloader"></div></modules-list>
  
</div>
@endsection