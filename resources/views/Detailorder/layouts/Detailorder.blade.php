@extends('Detailorder.MainDetailorder')
@section('cucikomplit')
    <div id="detail_or_cs" class="main-content">
        <div class="container">
            <div class="baris">
                <div class="col mt-2">
                    <div class="card-md">
                        <div class="card-title card-flex">
                            <div class="card-col">
                                <h2>Detail Order</h2>
                            </div>

                            <div class="card-col txt-right">
                                <h3 class="no-order"><small>No Order : </small>{{ $data->id + 100 }}</h3>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/transaksi" method="post">
                                @csrf
                                {{--  <?= $data['or_cs_number'] ?>  --}}

                                <div class="jdl-or">
                                    <h4>Customer</h4>
                                </div>
                                <table class="tb-detail_customer">
                                    <tr>
                                        <th>Nama</th>
                                        {{--  <?= $data['nama_pel_cs'] ?>  --}}
                                        <td><input type="text" name="nama_pelanggan" readonly
                                                value="{{ $data->nama_pelanggan }}">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Nomor Telepon</th>
                                        {{--  <?= $data['no_telp_cs'] ?>  --}}
                                        <td>
                                            <input type="text" name="no_telepon" readonly
                                                value="{{ $data->no_telepon }}">
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Alamat</th>
                                        <td>
                                            <textarea name="alamat" readonly class="txt-area">
                                                {{--  <?= $data['alamat_cs'] ?>  --}}
                                                {{ $data->alamat }}
                                            </textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Order Masuk</th>
                                        {{--  <?= $data['tgl_masuk_cs'] ?>  --}}
                                        <td><input type="text" name="order_masuk" readonly
                                                value="{{ $data->order_masuk }}"></td>
                                    </tr>

                                    <tr>
                                        <th>Diambil Pada</th>
                                        {{--  <?= $data['tgl_keluar_cs'] ?>  --}}
                                        <td><input type="text" name="order_keluar" readonly
                                                value="{{ $data->order_keluar }}"></td>
                                    </tr>

                                    <tr>
                                        <th>Durasi Kerja</th>
                                        {{--  <?= $data['wkt_krj_cs'] ?>  --}}
                                        <td><input type="text" name="waktu_kerja" readonly
                                                value="{{ $data->waktu_kerja }}"></td>
                                    </tr>

                                    <tr>
                                        <th>Jenis Paket</th>
                                        {{--  <?= $data['jenis_paket_cs'] ?>  --}}
                                        <td><input type="text" name="jenis_paket" readonly
                                                value="{{ $data->jenis_paket }}"></td>
                                    </tr>
                                </table>

                                <div class="mt-1"></div>

                                <div class="jdl-or">
                                    <h4>Order</h4>
                                </div>

                                <table class="tb-detail_order">
                                    <tr>
                                        {{--  <th>Jumlah (Pcs)</th>  --}}
                                        <th>Harga Per-Pcs</th>
                                        <th>Total Bayar</th>
                                        <th>Pembayaran</th>
                                    </tr>

                                    <tr>
                                        {{--  <?= $data['jml_pcs'] ?>  --}}
                                        {{--  <td><input type="text" name="jml_pcs" readonly
                                                value="
                                            ">
                                        </td>  --}}
                                        {{--  <?= 'Rp. ' . $data['harga_perpcs'] ?>  --}}
                                        @if ($data->jenis_paket == 'Cuci Satuan Express')
                                            <td>
                                                <input type="text" name="harga" readonly value=10000>
                                            </td>
                                            <td><input type="text" name="total" readonly value=10000></td>
                                        @endif
                                        @if ($data->jenis_paket == 'Cuci Satuan Reguler')
                                            <td>
                                                <input type="text" name="harga" readonly value=8000>
                                            </td>
                                            <td><input type="text" name="total" readonly value=8000></td>
                                        @endif
                                        @if ($data->jenis_paket != 'Cuci Satuan Express' && 'Cuci Satuan Reguler')
                                            <td>
                                                <input type="text" name="harga" readonly value=25000>
                                            </td>
                                            <td><input type="text" name="total" readonly value=25000></td>
                                        @endif
                                        <td><input type="number" name="pembayaran" id='pembayaran'></td>

                                        {{--  <?= 'Rp. ' . $data['tot_bayar'] ?>  --}}
                                        {{--  <td><input type="text" name="harga" readonly value="Rp.15.000"></td>
                                        <td><input type="text" name="total" readonly value="Rp.15.000"></td>  --}}
                                    </tr>
                                </table>

                                <div class="details">
                                    <h4 class="mb-01">Keterangan:</h4>
                                    <p class="lead">
                                        <textarea name="keterangan" readonly class="txt-area">
                                            {{--  <?= $data['keterangan_cs'] ?>  --}}
                                            {{ $data->keterangan }}
                                        </textarea>
                                    </p>
                                </div>

                                <div class="form-footer_detail">
                                    <div class="buttons">
                                        <button type="submit" class="btn-sm bg-primary">Bayar
                                            Sekarang</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
