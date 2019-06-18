<div class="columns" id="app-content">

    <div class="column is-2 is-fullheight is-hidden-touch" id="navigation">
        <aside class="menu">
            <p class="menu-label is-hidden-touch">
                General
            </p>
            <ul class="menu-list">
                <li>
                    <a class="" href="http://localhost:8888/Percetakan/dashboard">
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
                    <a class="is-active" href="http://localhost:8888/Percetakan/dashboard/supplier">
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
                    <li class="is-active"><a href="#" aria-current="page">Data Supplier</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="content-body">
            <div class="columns">
                <div class="column">
                    <table class="table is-fullwidth is-striper is-hoverable">
                        <thead>
                            <tr>
                                <th> Kode Supplier </th>
                                <th> Nama Supplier </th>
                                <th> No Telp </th>
                                <th> Alamat </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['supplier'] as $supplier) : ?>
                            <tr>
                                <td> <?= $supplier['kode_supplier'] ?> </td>
                                <td> <?= $supplier['nama_supplier'] ?> </td>
                                <td> <?= $supplier['no_telp'] ?> </td>
                                <td> <?= $supplier['alamat'] ?> </td>
                                <td>
                                    <a class="button is-danger" onClick="return confirm('Anda Yakin Ingin Menghapus Ini ?')" href="http://localhost:8888/Percetakan/supplier/deleteonedatasupplier/<?= $supplier['kode_supplier'] ?>">
                                        <span class="icon">
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </a>
                                    <button 
                                    class="button modal-button is-warning"
                                    data-target="#modalEditSupplier"
                                    data-modal="<?= $supplier['kode_supplier'] . '-' . $supplier['nama_supplier'] . '-' . $supplier['no_telp'] . '-' . $supplier['alamat'] ?>"
                                    >
                                        <span class="icon">
                                            <i class="fa fa-edit"></i>
                                        </span>
                                    </button>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                    <button class="button modal-button is-rounded is-primary is-pulled-right" data-target="#modalAddSupplier">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambah Modal -->

    <div class="modal" id="modalAddSupplier">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title"> Tambah Data Barang </p>
                <button class="delete modal-close" aria-label="close"></button>
            </header>
            <form action="http://localhost:8888/Percetakan/supplier/addonedatasupplier" method="POST">
                <section class="modal-card-body">
                    <div class="field">
                        <label for="kode_supplier" class="label"> Kode Supplier </label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="kode_supplier">
                            <span class="icon">
                                <i class="fas fa-code"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="nama_supplier" class="label">Nama Supplier</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="nama_supplier">
                            <span class="icon">
                                <i class="fas fa-parachute-box"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="no_tlp" class="label">No Telp</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="no_telp">
                            <span class="icon">
                                <i class="fas fa-phone"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="alamat" class="label">Alamat</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" name="alamat">
                            <span class="icon">
                                <i class="fas fa-address-card"></i>
                            </span>
                        </div>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-success">Save</button>
                    <button class="button button-cancel">Cancel</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- End Modal -->

    <!-- Edit Modal -->

    <div class="modal" id="modalEditSupplier">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title"> Tambah Data Barang </p>
                <button class="delete modal-close" aria-label="close"></button>
            </header>
            <form action="http://localhost:8888/Percetakan/supplier/editonedatasupplier" method="POST">
                <section class="modal-card-body">
                    <div class="field">
                        <label for="kode_supplier" class="label"> Kode Supplier </label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" id="input" name="kode_supplier">
                            <span class="icon">
                                <i class="fas fa-code"></i>
                            </span>
                        </div>
                    </div>
                    
                    <div class="field">
                        <label for="nama_supplier" class="label">Nama Supplier</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" id="input" name="nama_supplier">
                            <span class="icon">
                                <i class="fas fa-parachute-box"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="no_tlp" class="label">No Telp</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" id="input" name="no_telp">
                            <span class="icon">
                                <i class="fas fa-phone"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label for="alamat" class="label">Alamat</label>
                        <div class="control has-icons-left">
                            <input type="text" class="input is-primary" id="input" name="alamat">
                            <span class="icon">
                                <i class="fas fa-address-card"></i>
                            </span>
                        </div>
                    </div>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-success">Save</button>
                    <button class="button button-cancel">Cancel</button>
                </footer>
            </form>
        </div>
    </div>

    <!-- End Modal -->
</div>

<script src="http://localhost:8888/Percetakan/public/js/app.js"></script>
