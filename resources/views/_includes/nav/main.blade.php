<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('home') }}">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Logo" width="112" height="28">
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="#"> Learn </a>
      <a class="navbar-item" href="#"> Discuss </a>
      <a class="navbar-item" href="#"> Share </a>
    </div>
    <div class="navbar-end">
      @if (Auth::guest())
        <a href="{{ route('login') }}" class="navbar-item"> Login </a>
        <a href="{{ route('register') }}" class="navbar-item"> Signup </a>
      @else
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link"> Hey {{ Auth::user()->name }} </a>

          <div class="navbar-dropdown is-right">
            <a class="navbar-item" href="#">
              <span>
                <i class="fas fa-fw fa-user-circle m-r-5"></i>
              </span> Profile
            </a>
            <a class="navbar-item" href="#">
              <span>
                <i class="fas fa-fw fa-bell m-r-5"></i>
              </span> Notifications
            </a>
            <a class="navbar-item" href="{{ route('manage.dashboard') }}">
              <span>
                <i class="fas fa-fw fa-cog m-r-5"></i>
              </span> Manage
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <span>
                <i class="fas fa-fw fa-sign-out-alt m-r-5"></i>
              </span> Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </div>
      @endif
  </div>
</nav>