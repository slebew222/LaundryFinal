<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMATIKUY Laundry | Login</title>
    {{--  <link rel="stylesheet" href="<?= url('_assets/css/login.css') ?>">  --}}
    {{--  <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">  --}}
    {{--  <link rel="stylesheet" href="/CSS/login.css">  --}}
    <link rel="stylesheet" href="/CSS/style.css">
    {{--  <link rel="stylesheet" href="/CSS/invoice.css">  --}}
    {{--  <link rel="stylesheet" href="/CSS/payments.css">  --}}
    <link rel="stylesheet" href="/IMG/logo/favicon-svg.svg" type="image/x-icon">
</head>

<body>
    <div class="main-content" id="id_order">
        <div class="container">
            <div class="baris">
                <div class="col mt-2">
                    <div class="card">
                        <div class="card-title card-flex">
                            <div class="card-col">
                                <h2>Tambah Order Baru</h2>
                            </div>

                            <div class="card-col txt-right">
                                {{--  <?= url() ?>
                                  --}}
                                <a href="/homepage" class="btn-xs bg-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body mt-2">
                            <div class="col">
                                <div class="order-sub-judul txt-center">
                                    <h3 class="mb-1">Pilih Paket</h3>
                                </div>

                                <div class="container-paket">
                                    <div class="col-paket">
                                        {{--  <?= url('order/order_ck.php') ?>  --}}
                                        <a href="/cucikomplit" class="paket">
                                            <img src="/IMG/cuci_komplit.png" alt="cuci komplit" width="160">
                                            <h4>Cuci Komplit</h4>
                                        </a>
                                    </div>

                                    <div class="col-paket">
                                        {{--  <?= url('order/order_dc.php') ?>  --}}
                                        <a href="/dryclean" class="paket">
                                            {{--  <?= url('_assets') ?>  --}}
                                            <img src="/IMG/dry_clean.png" alt="dry clean" width="160">
                                            <h4>Dry Clean</h4>
                                        </a>
                                    </div>

                                    <div class="col-paket">
                                        {{--  <?= url('order/order_cs.php') ?>  --}}
                                        <a href="/cucisatuan" class="paket">
                                            {{--  <?= url('_assets/img') ?>  --}}
                                            <img src="/IMG/kemeja_2.png" alt="cuci satuan" width="160">
                                            <h4>Cuci Satuan</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
