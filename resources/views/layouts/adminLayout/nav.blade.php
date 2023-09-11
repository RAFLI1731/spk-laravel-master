<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.alternatif.index') }}" aria-expanded="false" aria-controls="form-elements">
          <i class="icon-columns menu-icon"></i>
          <span class="menu-title">Data Lansia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.kriteria.index') }}" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Kriteria</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sub.index') }}" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Data Sub Kriteria</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.bobot.index') }}" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Pembobotan</span>
        </a>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.smart.index') }}" aria-expanded="false" aria-controls="charts">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Perhitungan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.ranking.index') }}" aria-expanded="false" aria-controls="charts">
          <i class="icon-bar-graph menu-icon"></i>
          <span class="menu-title">Perankingan</span>
        </a>
      </li>
    </ul>
  </nav>
