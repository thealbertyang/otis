    <div class="nav-wrapper container">
      <a id="logo-container" href="{{ url('/') }}" class="brand-logo left">OTIS</a>
      <ul class="right main-nav hide-on-med-and-down">
      @if (Auth::guest())
      @else
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('training') }}">Training</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="myprofile"><i class="material-icons left">perm_identity</i> {{ Auth::user()->name }} <span class="caret"></span></a></li>
      @endif
      </ul>

      @if (Auth::check())
      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/') }}"><i class="material-icons left">dashboard</i> Home</a></li>
        <li><a href="{{ route('training') }}"><i class="material-icons left">stars</i> Training</a></li>
        <li><a href="{{ route('profile') }}"><i class="material-icons left">perm_identity</i> Profile</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">power_settings_new</i> Logout</a>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">subject</i></a>

      <!-- Dropdown Structure -->
      <ul id='myprofile' class='dropdown-content'>
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
      @endif
    </div>
