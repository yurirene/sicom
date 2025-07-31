<nav class="main-navbar">
    <div class="container">
        <ul>



            <li
                class="menu-item  ">
                <a href="{{ route('dashboard') }}" class='menu-link'>
                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                </a>
            </li>
            <li
                class="menu-item  ">
                <a href="{{ route('dashboard') }}" class='menu-link'>
                    <span><i class="bi bi-grid-fill"></i> Unidades</span>
                </a>
            </li>



            <li
                class="menu-item  has-sub">
                <a href="{{ route('dashboard') }}" class='menu-link'>
                    <span><i class="bi bi-stack"></i> Components</span>
                </a>
                <div
                    class="submenu ">
                    <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
                    <div class="submenu-group-wrapper">
                        <ul class="submenu-group">
                            <li
                                class="submenu-item  ">
                                <a href="component-alert.html"
                                    class='submenu-link'>Alert</a>


                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>