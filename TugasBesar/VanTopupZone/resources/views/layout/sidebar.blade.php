<div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="#dashboard">Edit</a></li>
            <li onclick="toggleDropdown()">Users ▼
                <ul class="dropdown-content" id="dropdown">
                    <li><a href="/game">Game</a></li>
                    <li><a href="#add-user">Add User</a></li>
                </ul>
            </li>
            <li><a href="#settings">Settings</a></li>
        </ul>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById("dropdown");
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }
    </script>