Hello {{ Auth::user()->name }}<br>
<a href="{{ route('local') }}">Local</a><br>
<a href="{{ url('home/oauth') }}">Dropbox</a><br><br>

<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><button class="btn btn-success">Logout</button></a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>