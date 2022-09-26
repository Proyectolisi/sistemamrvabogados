@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Inicio de MRVAbogados')])

@section('content')
  <div class="content">
    <div class="container-fluid">    

      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card">                       

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush