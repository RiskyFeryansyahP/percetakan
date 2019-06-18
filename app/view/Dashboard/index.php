<div class="columns" id="app-content">

    <div class="column is-2 is-fullheight is-hidden-touch" id="navigation">
        <aside class="menu">
            <p class="menu-label is-hidden-touch">
                General
            </p>
            <ul class="menu-list">
                <li>
                    <a class="is-active" href="http://localhost:8888/Percetakan/dashboard">
                        <span class="icon">
                            <i class="fa fa-home"></i>
                        </span> Dashboard
                    </a>
                </li>
                <li>
                    <a class="" href="http://localhost:8888/Percetakan/dashboard/barang">
                        <span class="icon">
                            <i class="fa fa-edit"></i>
                        </span> Data Barang
                    </a>
                </li>
                <li>
                    <a class="" href="http://localhost:8888/Percetakan/dashboard/barangmasuk">
                        <span class="icon">
                            <i class="fa fa-desktop"></i>
                        </span> Barang Masuk
                    </a>
                </li>
                <li>
                    <a class="" href="http://localhost:8888/Percetakan/dashboard/supplier">
                        <span class="icon">
                            <i class="fa fa-table"></i>
                        </span> Data Supplier
                    </a>
                </li>
            </ul>
        </aside>
    </div>

    <div class="column is-10" id="page-content">
        <div class="content-header">
            <h4 class="title is-4">Dashboard</h4>
            <span class="separator"></span>
            <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">General</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="content-body">
            <div class="columns">
                <div class="column">
                    <a class="box quick-stats has-background-primary has-text-white" href="http://localhost:8888/Percetakan/dashboard/barang">
                        <div class="quick-stats-icon">
                            <span class="icon is-large">
                                <i class="fa fa-3x fa-users"></i>
                            </span>
                        </div>
                        <div class="quick-stats-content">
                            <h3 class="title is-4">Barang</h3>
                            <div class="inlinesparkline-bar"></div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a class="box quick-stats has-background-info has-text-white" href="http://localhost:8888/Percetakan/dashboard/barangmasuk">
                        <div class="quick-stats-icon">
                            <span class="icon is-large">
                                <i class="fa fa-3x fa-server"></i>
                            </span>
                        </div>
                        <div class="quick-stats-content">
                            <h3 class="title is-4">Barang Masuk</h3>
                            <div class="inlinesparkline-bar"></div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a class="box quick-stats has-background-danger has-text-white" href="http://localhost:8888/Percetakan/dashboard/barangkeluar">
                        <div class="quick-stats-icon">
                            <span class="icon is-large">
                                <i class="fa fa-3x fa-bar-chart"></i>
                            </span>
                        </div>
                        <div class="quick-stats-content">
                            <h3 class="title is-4">Barang Keluar</h3>
                            <div class="inlinesparkline-line"></div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a class="box quick-stats has-background-warning has-text-white" href="http://localhost:8888/Percetakan/dashboard/supplier">
                        <div class="quick-stats-icon">
                            <span class="icon is-large">
                                <i class="fa fa-3x fa-bell"></i>
                            </span>
                        </div>
                        <div class="quick-stats-content">
                            <h3 class="title is-4">Supplier</h3>
                            <div class="inlinesparkline-line"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
