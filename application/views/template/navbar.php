<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2 switch" href="#" id="modeSwitcher" data-mode="dark">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="https://avatars.abstractapi.com/v1/?api_key=dbc3fbae727540f78388aa00711c2740&name=<?php echo infoLogin()->name ?>" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url(); ?>user/changePassword/<?= $this->session->user_id; ?>">Change Password</a>
                <a class="dropdown-item" href="<?= base_url(); ?>settings">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url(); ?>logout" class="dropdown-item" id="logout">Logout</a>
            </div>
        </li>
    </ul>
</nav>