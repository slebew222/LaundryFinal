<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMATIKUY Laundry | Login</title>
    {{--  <link rel="stylesheet" href="<?= url('_assets/css/login.css') ?>">  --}}
    {{--  <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">  --}}
    <link rel="stylesheet" href="/CSS/login.css">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/invoice.css">
    {{--  <link rel="stylesheet" href="/CSS/payments.css">  --}}
    <link rel="stylesheet" href="/IMG/logo/favicon-svg.svg" type="image/x-icon">
</head>

<body>

    {{--  <?php if (isset($_POST['order_cs'])) : ?>  --}}
    {{--  <?php if (order_cs($_POST) > 0) :?>  --}}
    {{--  <div class="alert">
        <div class="box">
            <img src="/IMG/berhasil.png" height="68" alt="alert sukses">
            <p>Order Berhasil Di Tambahkan</p>  --}}
    {{--  <button onclick="window.location='http://localhost/rumah_laundry/'" class="btn-alert">Ok</button>  --}}
    {{--  </div>
    </div>  --}}
    {{--  <?php else : ?>  --}}
    {{--  <div class="alert">
        <div class="box">
            <img src="/IMG/gagal.png" height="68" alt="alert gagal">
            <p>Order Gagal Di Tambahkan</p>  --}}
    {{--  <button onclick="window.location='http://localhost/rumah_laundry/'" class="btn-alert">Ok</button>  --}}
    {{--  </div>
    </div>  --}}
    {{--  <?php endif ?>
<?php endif ?>  --}}
    <div id="order_cs" class="main-content">
        <div class="container">
            <div class="baris">
                <div class="col mt-2">
                    <div class="card">
                        <div class="card-title card-flex">
                            <div class="card-col">
                                <h2>Dry Clean</h2>
                            </div>

                            <div class="card-col txt-right">
                                <a href="/Order" class="btn-xs bg-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/dryclean" method="post">
                                @csrf
                                <div class="row-input">
                                    <div class="col-form m-1">
                                        <div class="form-grup">
                                            <label for="nama_pelanggan">Nama Pelanggan</label>
                                            <input type="text" name="nama_pelanggan" placeholder="Nama lengkap"
                                                autocomplete="off" id="nama">
                                        </div>

                                        <div class="form-grup">
                                            <label for="no_telepon">Nomor Telepon</label>
                                            <input type="text" name="no_telepon" placeholder="Nomor Telepon"
                                                autocomplete="off" id="no-telp">
                                        </div>

                                        <div class="form-grup">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" rows="4" id="alamat"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-form m-1">
                                        <div class="form-grup">
                                            <label for="jenis_paket">Pilih Paket</label>
                                            <select name="jenis_paket" id="jenis_paket">

                                                <option readonly>-- Pilih Jenis Paket --</option>
                                                <option value="Dry Clean Reguler">Dry Clean Reguler</option>
                                                <option value="Dry Clean Kilat">Dry Clean Kilat</option>
                                                <option value="Dry Clean Express">Dry Clean Express</option>
                                                <option value="Hanya Strika">Hanya Strika</option>
                                                {{--  <?php foreach ($data_cs as $cs) : ?>
                                                <option><?= $cs['nama_cs'] ?></option>
                                                <?php endforeach ?>  --}}
                                            </select>
                                        </div>

                                        <div class="form-grup">
                                            <label for="Berat">Berat Pakaian</label>
                                            <input type="number" name="berat" placeholder="Berat Pakaian"
                                                autocomplete="off" id="kuantitas">
                                        </div>

                                        <div class="form-grup">
                                            <label for="order_masuk">Tanggal Order Masuk</label>
                                            <input type="date" name="order_masuk" autocomplete="off"
                                                id="tgl_order_msk">
                                        </div>

                                        <div class="form-grup">
                                            <label for="order_keluar">Tanggal Order Keluar</label>
                                            <input type="date" name="order_keluar" autocomplete="off"
                                                id="tgl_order_klr">
                                        </div>

                                        <div class="form-grup">
                                            <label for="keterangan">Keterangan</label>
                                            <textarea name="keterangan" rows="4" id="ket"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-footer">
                                    <div class="buttons">
                                        <button type="submit" class="btn-sm bg-primary">Pesan</button>
                                        <button type="reset" class="btn-sm bg-transparent">Batal</button>
                                    </div>
                                </div>
                            </form>
                            <h1>

                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
{{--  <?php require_once '../_footer.php'; ?>  --}}
