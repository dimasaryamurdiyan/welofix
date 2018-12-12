@extends('bases')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <hr>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tambah Pesanan</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('pesanan.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama Customer:</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nomor">Nomor Laundry:</label>
                            <input type="number" class="form-control" id="nomor" name="nomor">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat:</label>
                            <input type="number" class="form-control" id="berat" name="berat">
                        </div>
                        <div class="form-group">
                            <label for="barang">Jumlah Barang:</label>
                            <input type="date" class="form-control" id="barang" name="barang">
                        </div>
                        <div class="form-group">
                            <label for="jenis_paket">Jenis Paket</label>
                            <input type="text" class="form-control" id="jenis_paket" name="jenis_paket">
                        </div>
                         <div class="form-group">
                            <label for="tgl_masuk">Tanggal Masuk:</label>
                            <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai">Tanggal Selesai:</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                        </div>
                        <div class="form-group">
                            <label for="tgl_ambil">Tanggal Diambil:</label>
                            <input type="date" class="form-control" id="tgl_ambil" name="tgl_ambil">
                        </div>
                        <div class="form-group">
                            <label for="total">Total Pembayaran:</label>
                            <input type="number" class="form-control" id="total" name="total">
                        </div>
                        <div class="form-group">
                            <label for="status_pem">Status Pembayaran:</label>
                            <input type="text" class="form-control" id="status_pem" name="status_pem">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection