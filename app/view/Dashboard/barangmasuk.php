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
                    <a class="is-active" href="http://localhost:8888/Percetakan/dashboard/barangmasuk">
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
                    <li class="is-active"><a href="#" aria-current="page">Barang Masuk</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="content-body">
            <div class="columns">
                <div class="column">
                    <table id="table" class="table is-fullwidth is-striped is-hoverable">
                        <thead>
                            <tr>
                                <th> Nama Barang </th>
                                <th> Nama Supplier </th>
                                <th> Stock Masuk </th>
                                <th> Tanggal Masuk </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['barangmasuk'] as $barangmasuk) : ?>
                                <tr>
                                    <td> <?= $barangmasuk['nama_barang'] ?> </td>
                                    <td> <?= $barangmasuk['nama_supplier'] ?> </td>
                                    <td> <?= $barangmasuk['stock'] ?> </td>
                                    <td> <?= $barangmasuk['tgl_masuk'] ?> </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="is-pulled-left">
                        <button class="modal-button button is-primary is-rounded" data-target="#modalBarangMasuk">
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

<!-- Modal Tambah Barang Masuk -->
<div class="modal" id="modalBarangMasuk">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title"> Barang Masuk </p>
            <button class="delete modal-close" aria-label="close"></button>
        </header>
        <form action="http://localhost:8888/Percetakan/barangmasuk/addbarangmasuk" method="POST">
            <section class="modal-card-body">
            <div class="field">
                <label for="kode_barang" class="label"> Kode Barang </label>
                <div class="control has-icons-left">
                    <div class="select is-primary is-fullwidth">
                        <select name="kode_barang" id="kode_barang">
                            <option value="" selected disabled hidden> Pilih Barang </option>
                            <?php foreach($data['barang'] as $barang) : ?>
                            <option value="<?= $barang['kode_barang'] ?>" data-option="<?= $barang['nama_barang']?>"> <?= $barang['nama_barang'] ?> </option>
                            <?php endforeach ?>
                        </select>
                        <span class="icon">
                            <i class="fas fa-code"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="kode_suppluer" class="label"> Kode Supplier </label>
                <div class="control has-icons-left">
                    <div class="select is-primary is-fullwidth">
                        <select name="kode_supplier" id="supplier">
                            <option value="" selected disabled hidden>Pilih supplier</option>
                            
                        </select>
                        <span class="icon">
                            <i class="fas fa-code"></i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="stock_masuk" class="label"> Stock Masuk </label>
                <div class="control has-icons-left">
                    <input type="number" class="input is-primary" name="stock">
                    <span class="icon">
                        <i class="fas fa-book"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label for="stock_masuk" class="label"> Stock Masuk </label>
                <div class="control has-icons-left">
                    <input type="date" class="input is-primary" name="tgl_masuk">
                    <span class="icon">
                        <i class="fas fa-book"></i>
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
<!-- End Model -->

<script src="http://localhost:8888/Percetakan/public/js/app.js"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="http://localhost:8888/Percetakan/public/js/dataTables.bulma.min.js"></script>
<script src="http://localhost:8888/Percetakan/public/js/dataTables.bulma.min.js"></script>
<script>
    $(document).ready(function() {
        $("#table").DataTable()
    })
</script>
<script>
    xhr = new XMLHttpRequest()
    var select = document.getElementById("kode_barang")
    var supplier = document.getElementById("supplier")
    select.addEventListener('change', () => {
        var data = select[select.selectedIndex]

        console.log(data.getAttribute('data-option'))

        xhr.open('POST', 'http://localhost:8888/Percetakan/supplier/getDataSupplier')
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200 ) 
            {
                console.log(xhr.response)
                var datas = JSON.parse(xhr.responseText)

                supplier.innerHTML = "<option selected disabled hidden>Pilih supplier</option>"

                datas.forEach((data) => {
                    // console.log(data.kode_supplier)
                    var elementChild = document.createElement('option')
                    elementChild.value = data.kode_supplier
                    elementChild.innerHTML = data.nama_supplier

                    supplier.appendChild(elementChild)
                })
            }
            else 
            {
                console.log("Gagal! ", xhr.status)
            }
        }

        xhr.send(encodeURI('nama_barang=' + data.getAttribute('data-option')))
    })
</script>