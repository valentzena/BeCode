<!-- Header -->
<header style="background: #007bff; color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
      <h1>Admin Dashboard</h1>
      <nav>
        <a href="#dashboard" style="color: white; margin-right: 15px; text-decoration: none;">Dashboard</a>
        <a href="#profile" style="color: white; margin-right: 15px; text-decoration: none;">Profile</a>
        <a href="#settings" style="color: white; margin-right: 15px; text-decoration: none;">Settings</a>
      </nav>
      <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-light" style="background: white; color: #007bff; border: none; padding: 8px 15px; cursor: pointer;">Logout</button>
      </form>
    </header>