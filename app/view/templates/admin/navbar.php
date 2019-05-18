<nav class="navbar columns is-fixed-top" role="navigation" aria-label="main navigation" id="app-header">
    <div class="navbar-brand is-primary column is-2 is-paddingless">
        <a class="navbar-item" href="/">
            PERCETAKAN
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="touchMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    
    <div id="touchMenu">
        
    </div>

    <div id="navMenu" class="navbar-menu column is-hidden-touch">
        <div class="navbar-end">
            <div class="navbar-item">
                <a class="button is-white" title="Notifications">
                    <span class="icon">
                        <i class="fa fa-lg fa-bell"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item">
                <a class="button is-white" title="Logout" href="http://localhost:8888/Percetakan/userauthentication/logout">
                    <span class="icon">
                        <i class="fa fa-lg fa-power-off"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item has-dropdown">
                <a class="navbar-link">
                    <figure class="image avatar is-32x32">
                        <img class="is-rounded" src="http://localhost:8888/Percetakan/public/images/user1.png">
                    </figure>
                    &nbsp; Hi, <?= $data['username'];?>
                </a>
                <div class="navbar-dropdown is-right">
                    <a class="navbar-item">
                        Overview
                    </a>
                    <a class="navbar-item">
                        Elements
                    </a>
                    <a class="navbar-item">
                        Components
                    </a>
                    <hr class="navbar-divider">
                    <div class="navbar-item">
                        Version 0.7.1
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>