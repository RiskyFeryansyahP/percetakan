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
                    <a class="" href="/">
                        <span class="icon">
                            <i class="fa fa-edit"></i>
                        </span> Data Barang
                    </a>
                </li>
                <li>
                    <a class="" href="/">
                        <span class="icon">
                            <i class="fa fa-desktop"></i>
                        </span> Barang Masuk
                    </a>
                </li>
                <li>
                    <a class="" href="/">
                        <span class="icon">
                            <i class="fa fa-desktop"></i>
                        </span> Barang Keluar
                    </a>
                </li>
                <li>
                    <a class="" href="/">
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
                    <li class="is-active"><a href="#" aria-current="page">Data Barang</a></li>
                </ul>
            </nav>
        </div>

        <div class="content-body">
            <div class="columns">
                <div class="column">
                    <table class="table is-fullwidth is-striped is-hoverable">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['barang'] as $barang) : ?>
                            <tr>
                                <td> <?= $barang['kode_barang'] ?> </td>
                                <td> <?= $barang['nama_barang'] ?> </td>
                                <td> <?= $barang['stock'] ?> </td>
                                <td>
                                    <button class="button is-danger">
                                        <span class="icon">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </button>
                                    <button class="button is-warning">
                                        <span class="icon">
                                            <i class="fa fa-edit"></i>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="is-pulled-right">
                        <button class="button is-primary is-rounded">
                            <span class="icon icon-small">
                                <i class="fa fa-plus"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
