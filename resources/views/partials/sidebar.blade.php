<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="{{ route('home') }}"><img src="images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ route('home') }}"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="afficherStructure">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Structures</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="afficherService">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="afficherAgent">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Agents</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="afficherMateriel">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Matériels</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="afficherLogiciel">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Logiciels</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="maintenance">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Maintenances</span>
            </a>
          </li>
          
        </ul>
      </nav>