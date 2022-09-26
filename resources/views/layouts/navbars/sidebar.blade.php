<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('/img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('MRVAbogadoSoftware') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
        <!--
        Menú de Abogados inicia MRVAbogados 
  -->      
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio MRVAbogados') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'calendar' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('calendar') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Calendario') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'procesos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('procesos.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Procesos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'actuaciones' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('actuaciones.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Actuaciones') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'despachos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('despachos.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Despachos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'municipios' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('municipios.index') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Municipios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">language</i>
          <p>{{ __('Clientes') }}</p>
        </a>
      </li>
    </ul>
  </div>
  <script src="{{ asset('js/calendar.js') }}" defer></script>
</div>
