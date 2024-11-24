<nav class="sidebar sidebar-offcanvas" id="sidebar">
   <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
       <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}">
           <img src="{{ asset('path/to/logo.png') }}" alt="Logo">
       </a>
   </div>

   <ul class="nav">
       <!-- Dashboard -->
       <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
           <a class="nav-link" href="{{ route('dashboard') }}">
               <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
               <span class="menu-title">Dashboard</span>
           </a>
       </li>

       <!-- Patient Management -->
       <li class="nav-item {{ request()->routeIs('table') || request()->routeIs('add.index') ? 'active' : '' }}">
           <a class="nav-link" data-bs-toggle="collapse" href="#patient-menu" aria-expanded="false">
               <i class="mdi mdi-account-group menu-icon"></i>
               <span class="menu-title">Patient</span>
               <i class="menu-arrow"></i>
           </a>
           <div class="collapse" id="patient-menu">
               <ul class="nav flex-column sub-menu">
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('add.index') }}">Patient Intake</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('table') }}">Patient Record</a>
                   </li>
               </ul>
           </div>
       </li>

       <!-- Parents -->
       <li class="nav-item {{ request()->routeIs('parent.index') ? 'active' : '' }}">
           <a class="nav-link" href="{{ route('parent.index') }}">
               <i class="mdi mdi-account-supervisor-outline menu-icon"></i>
               <span class="menu-title">Parents</span>
           </a>
       </li>

       <!-- Calendar -->
       <li class="nav-item {{ request()->routeIs('calendar.index') ? 'active' : '' }}">
           <a class="nav-link" href="{{ route('calendar.index') }}">
               <i class="mdi mdi-calendar-blank menu-icon"></i>
               <span class="menu-title">Calendar</span>
           </a>
       </li>


       <!-- Additional Pages -->
       <li class="nav-item {{ request()->routeIs('termsprivacy.index') ? 'active' : '' }}">
           <a class="nav-link" href="{{ route('termsprivacy.index') }}">
               <i class="mdi mdi-file-lock-outline menu-icon"></i>
               <span class="menu-title">Terms & Privacy</span>
           </a>
       </li>

       <li class="nav-item {{ request()->routeIs('about.index') ? 'active' : '' }}">
           <a class="nav-link" href="{{ route('about.index') }}">
               <i class="mdi mdi-information-outline menu-icon"></i>
               <span class="menu-title">About</span>
           </a>
       </li>
   </ul>
</nav>