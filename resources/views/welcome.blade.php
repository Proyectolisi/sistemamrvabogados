@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('MRVAbogados')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Bienvenido al inicio del Software de MRVAbogados') }}</h1>
      </div>
  </div>
</div>
@endsection
