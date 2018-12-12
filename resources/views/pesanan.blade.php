@extends('bases')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Pesanan</h3>
                </div>
                <div class="box-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nomor Laundry</th>
                            <th>Berat</th>
                            <th>Jumlah Barang</th>
                            <th>Jenis Paket</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Tanggal Diambil</th>
                            <th>Total Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->cust_name }}</td>
                                <td>{{ $d->cust_num }}</td>
                                <td>{{ $d->kg_laundry }}</td>
                                <td>{{ $d->pcs_laundry }}</td>
                                <td>{{ $d->type_laundry }}</td>
                                <td>{{ $d->dateIn }}</td>
                                <td>{{ $d->dateDone }}</td>
                                <td>{{ $d->dateTaken }}</td>
                                <td>{{ $d->total_payment }}</td>
                                <td>{{ $d->payment_stats }}</td>
                                <td>
                                    <form action="{{ route('user.destroy', $d->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('user.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection