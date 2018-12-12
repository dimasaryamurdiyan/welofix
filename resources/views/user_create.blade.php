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
                    <h3 class="box-title">Tambah Admin</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('user.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="tgl">Tanggal Lahir:</label>
                            <input type="date" class="form-control" id="date" name="DoB">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <input type="text" class="form-control" id="status" name="status">
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