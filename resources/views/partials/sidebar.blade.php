<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="/">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  @if(Auth::check() && Auth::user()->hasRole('admin') || Auth::user()->hasRole('teacher'))
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('students.index')}}">
      <i class="bi bi-people-fill"></i><span>Siswa</span>
    </a>
  </li><!-- Siswa -->
  @endif

  @if(Auth::check() && Auth::user()->hasRole('admin'))
  <li class="nav-item">
    <a class="nav-link collapsed"  href="{{route('teachers.index')}}">
      <i class="bi bi-person-lines-fill"></i><span>Pengajar</span>
    </a>
  </li><!-- Pengajar -->
  @endif
  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-calendar3"></i><span>Jadwal Belajar</span></i>
    </a>
  </li><!-- Jadwal -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('moduls.index')}}">
      <i class="bi bi-book"></i><span>Modul Belajar</span></i>
    </a>
  </li><!-- Modul -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-list-check"></i><span>Try Out</span></i>
    </a>
  </li><!-- Try Out -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('profile.index')}}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      <i class="bi bi-box-arrow-left"></i>
      <span>Log Out</span>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </a>
  </li><!-- End Log Out Page Nav -->

</ul>

</aside><!-- End Sidebar-->