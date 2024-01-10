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


    <div id="main" class="main-content">
        <div class="container">
            <div class="baris">
                <div class="selamat-datang">
                    <div class="col-header">
                        <p class="judul-sm">Selamat Datang <span>{{ auth()->user()->email }}

                            </span></p>
                        <h2 class="judul-md">Dashboard</h2>
                    </div>

                    <div class="col-header txt-right">
                        {{--  <?= url('order/order.php') ?>  --}}
                        <a href="/Order" class="btn-lg bg-primary">+ Order Baru</a>
                    </div>
                </div>
            </div>

            <div class="baris">
                <div class="col col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-panel">
                                <div class="panel-header">
                                    <p>Jumlah Karyawan</p>

                                    <h2> {{ $user->count() }}</h2>
                                </div>
                                <div class="panel-icon">
                                    <img src="/IMG/team.png" alt="karyawan" height="48">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-panel">
                                <div class="panel-header">
                                    <p>Total Order</p>

                                    <h2>  {{ $dryclean->count() + $cucisatuan->count() + $cucikomplit->count() }}</h2>
                                </div>

                                <div class="panel-icon">
                                    <img src="/IMG/total_order.png" alt="order" height="48">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-panel">
                                <div class="panel-header">
                                    <p>Jumlah Paket Tersedia</p>
                                    {{--  <?= jmlPaket() ?>  --}}
                                    <h2></h2>
                                </div>

                                <div class="panel-icon">
                                    <img src="/IMG/jumlah_paket.png" alt="paket" height="48">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{--  <!-- Daftar Order Cuci Komplit -->  --}}
            <div class="baris">




                {{--  <?php require_once 'daftar_order/daf_or_ck.php'; ?>  --}}

                <div class="col">
                    <div class="card">
                        <div class="card-title card-flex">
                            <div class="card-col">
                                <h2>Order Cuci Komplit</h2>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="tabel-kontainer">
                                <table class="tabel-transaksi">
                                    <thead>
                                        <tr>
                                            <th class="sticky">No</th>
                                            <th class="sticky">No.Order</th>
                                            <th class="sticky">Tgl Order</th>
                                            <th class="sticky">Nama Pelanggan</th>
                                            <th class="sticky">Jenis Paket</th>
                                            <th class="sticky">Waktu Kerja</th>
                                            <th class="sticky">Berat (Kg)</th>
                                            <th class="sticky">Action</th>
                                        </tr>
                                    </thead>
                                    @if($cucikomplit->count()>0)
                                    @foreach ($cucikomplit as $Cucikomplit )


                                    <tbody>
                                        {{--  <?php $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC');
                                        if (!empty($cuci_komplit)) :?>
                                        <?php
                                        $no_ck = 1;
                                        foreach($cuci_komplit as $ck) : ?>  --}}
                                        <tr>

                                            <td> {{ $Cucikomplit->id }}</td>
                                            <td> {{ $Cucikomplit->id+100 }} </td>
                                            <td> {{ $Cucikomplit->order_masuk }}</td>
                                            <td> {{ $Cucikomplit->nama_pelanggan }}</td>
                                            <td> {{ $Cucikomplit->jenis_paket }}</td>
                                            <td> {{ $Cucikomplit->waktu_kerja }}</td>
                                            <td> {{ $Cucikomplit->berat }}</td>


                                                {{--  url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=')
                                                $ck['or_ck_number']
                                                ?>  --}}
                                                <td class="tabel-action">
                                                    <form action="/cucikomplit/{{ $Cucikomplit->id }}" method='get'>
                                                        @csrf
                                                        <button type="submit"

                                                        class="btn btn-detail">Detail</button>

                                                </form>
                                                <form action="/cucikomplit/{{ $Cucikomplit->id }}" method='post'>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" href=""
                                            onclick="return confirm('Yakin akan menghapus?');"
                                            class="btn btn-hapus">Hapus</button>

                                    </form>
                                </td>
                                        </tr>
                                        {{--  <?php $no_ck++; ?>
                                        <?php endforeach; ?>
                                        <?php else : ?>  --}}

                                        {{--  <?php endif?>  --}}
                                    </tbody>
                                    @endforeach
                                    @else

                                    <tr>
                                        <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>

                    </div>
                </div>






            </div>

            {{--  <!-- Daftar Order Cuci Kering/Dry Clean -->  --}}
            <div class="baris">
                {{--  <?php require_once 'daftar_order/daf_or_dc.php'; ?>  --}}
                <div class="col">
                    <div class="card">
                       <div class="card-title card-flex">
                          <div class="card-col">
                             <h2>Order Satuan</h2>
                          </div>
                       </div>

                       <div class="card-body">
                          <div class="tabel-kontainer">
                             <table class="tabel-transaksi">
                                <thead>
                                   <tr>
                                      <th class="sticky">No</th>
                                      <th class="sticky">No.Order</th>
                                      <th class="sticky">Tgl Order</th>
                                      <th class="sticky">Nama Pelanggan</th>
                                      <th class="sticky">Jenis Paket</th>
                                      <th class="sticky">Waktu Kerja</th>
                                      <th class="sticky">Berat (Kg)</th>
                                      <th class="sticky">Action</th>
                                   </tr>
                                </thead>
                                @if($cucisatuan->count()!=0)
                                @foreach ($cucisatuan as $Cucisatuan )


                                <tbody>
                                    {{--  <?php $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC');
                                    if (!empty($cuci_komplit)) :?>
                                    <?php
                                    $no_ck = 1;
                                    foreach($cuci_komplit as $ck) : ?>  --}}
                                    <tr>

                                        <td> {{ $Cucisatuan->id }}</td>
                                        <td> {{ $Cucisatuan->id+100 }} </td>
                                        <td> {{ $Cucisatuan->order_masuk }}</td>
                                        <td> {{ $Cucisatuan->nama_pelanggan }}</td>
                                        <td> {{ $Cucisatuan->jenis_paket }}</td>
                                        <td> {{ $Cucisatuan->waktu_kerja }}</td>
                                        <td> {{ $Cucisatuan->berat }}</td>


                                            {{--  url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=')
                                            $ck['or_ck_number']
                                            ?>  --}}
                                            <td class="tabel-action">
                                                <form action="/cucisatuan/{{ $Cucisatuan->id }}" method='get'>
                                                    @csrf
                                                    <button type="submit"

                                                    class="btn btn-detail">Detail</button>

                                            </form>
                                            <form action="/cucisatuan/{{ $Cucisatuan->id }}" method='post'>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" href=""
                                        onclick="return confirm('Yakin akan menghapus?');"
                                        class="btn btn-hapus">Hapus</button>

                                </form>
                            </td>
                                    </tr>
                                    {{--  <?php $no_ck++; ?>
                                    <?php endforeach; ?>
                                    <?php else : ?>  --}}

                                    {{--  <?php endif?>  --}}
                                </tbody>
                                @endforeach
                                @else

                                <tr>
                                    <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                                </tr>
                                @endif
                             </table>
                          </div>
                       </div>
                    </div>
                 </div>



            </div>

            {{--  <!-- Daftar Order Cuci Satuan -->  --}}
            <div class="baris">

                {{--  <?php require_once 'daftar_order/daf_or_cs.php'; ?>
              --}}

              <div class="col">
                <div class="card">
                   <div class="card-title card-flex">
                      <div class="card-col">
                         <h2>Order Dry Clean (Cuci Kering)</h2>
                      </div>
                   </div>

                   <div class="card-body">
                      <div class="tabel-kontainer">
                         <table class="tabel-transaksi">
                            <thead>
                               <tr>
                                  <th class="sticky">No</th>
                                  <th class="sticky">No.Order</th>
                                  <th class="sticky">Tgl Order</th>
                                  <th class="sticky">Nama Pelanggan</th>
                                  <th class="sticky">Jenis Paket</th>
                                  <th class="sticky">Waktu Kerja</th>
                                  <th class="sticky">Jml Barang</th>
                                  <th class="sticky">Action</th>
                               </tr>
                            </thead>
                            @if($dryclean->count()>0)
                            @foreach ($dryclean as $Dryclean )


                            <tbody>
                                {{--  <?php $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC');
                                if (!empty($cuci_komplit)) :?>
                                <?php
                                $no_ck = 1;
                                foreach($cuci_komplit as $ck) : ?>  --}}
                                <tr>

                                    <td> {{ $Dryclean->id }}</td>
                                    <td> {{ $Dryclean->id+100 }} </td>
                                    <td> {{ $Dryclean->order_masuk }}</td>
                                    <td> {{ $Dryclean->nama_pelanggan }}</td>
                                    <td> {{ $Dryclean->jenis_paket }}</td>
                                    <td> {{ $Dryclean->waktu_kerja }}</td>
                                    <td> {{ $Dryclean->berat }}</td>



                                        {{--  url('detail_order/detail_ck/detail_order_ck.php?or_ck_number=')
                                        $ck['or_ck_number']
                                        ?>  --}}


                                        {{--  <?=
                                            url('daftar_order/hapus_ck.php?or_ck_number=')
                                            $ck['or_ck_number']
                                            ?  --}}
                                            <td class="tabel-action">
                                                <form action="/dryclean/{{ $Dryclean->id }}" method='get'>
                                                    @csrf
                                                    <button type="submit"

                                                    class="btn btn-detail">Detail</button>

                                            </form>
                                            <form action="/dryclean/{{ $Dryclean->id }}" method='post'>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" href=""
                                        onclick="return confirm('Yakin akan menghapus?');"
                                        class="btn btn-hapus">Hapus</button>

                                </form>
                            </td>
                                </tr>
                                {{--  <?php $no_ck++; ?>
                                <?php endforeach; ?>
                                <?php else : ?>  --}}

                                {{--  <?php endif?>  --}}
                            </tbody>
                            @endforeach
                            @else

                            <tr>
                                <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                            </tr>
                            @endif
                         </table>
                      </div>
                   </div>
                </div>
             </div>

            </div>

        </div>
    </div>
</body>

</html>
{{--  <?php require_once '_footer.php'; ?>  --}}
