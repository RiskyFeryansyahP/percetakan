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
                                    <a href="http://localhost:8888/Percetakan/barang/deleteonebarang/<?= $barang['kode_barang']?>" onClick="return confirm('Anda ingin menghapus data ini ?')" title="Hapus" class="button is-danger">
                                        <span class="icon">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </a>
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
                        <button class="modal-button button is-primary is-rounded" data-target="#modalTambahBarang">
                            <span class="icon icon-small">
                                <i class="fa fa-plus"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal" id="modalTambahBarang">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title"> Tambah Data Barang </p>
                <button class="delete modal-close" aria-label="close"></button>
            </header>
            <form action="http://localhost:8888/Percetakan/barang/addonebarang" method="POST">
                <section class="modal-card-body">
                    <div class="field">
                        <label for="kode_barang" class="label">Kode Barang</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="kode_barang" placeholder="Kode Barang" required="true">
                            <span class="icon">
                                <i class="fa fa-code"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="kode_barang" class="label">Nama Barang</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="nama_barang" placeholder="Nama Barang" required="true">
                            <span class="icon">
                                <i class="fa fa-book"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="kode_barang" class="label">Stock Barang</label>
                        <div class="control has-icons-left">
                            <input type="number" class="input is-primary" name="stock" placeholder="Stock Barang" required="true">
                            <span class="icon">
                                <i class="fa fa-book"></i>
                            </span>
                        </div>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-success">Save changes</button>
                    <button class="button button-cancel">Cancel</button>
                </footer>
            </form>
        </div>
    </div>
    <!-- End Modal -->
</div>


<script src="http://localhost:8888/Percetakan/public/js/app.js"></script>
