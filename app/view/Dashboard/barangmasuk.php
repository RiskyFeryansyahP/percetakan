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
                    <a class="" href="/">
                        <span class="icon">
                            <i class="fa fa-desktop"></i>
                        </span> Barang Keluar
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
                    <form action="">
                        <div class="field">
                            <div class="control">
                                <div class="select is-primary">
                                    <select name="" id="">
                                        <option value="">Pilih Tanggal Barang Masuk </option>
                                        <option value=""> 22 Mei 2019 </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <table class="table is-fullwidth is-striped is-hoverable">
                            <thead>
                                <tr>
                                    <th> Nama Barang </th>
                                    <th> Nama Supplier </th>
                                    <th> Stock Masuk </th>
                                    <th> Tanggal Masuk </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> HVS F4 </td>
                                    <td> Sudiro </td>
                                    <td> 10 </td>
                                    <td> 23 Mei 2019 </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
