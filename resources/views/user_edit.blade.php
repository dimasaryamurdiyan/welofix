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
                    <h3 class="box-title">Ubah Data Admin</h3>
                </div>
                <div class="box-body">
                    @foreach($data as $datas)
                        <form action="{{ route('user.update',   $datas->id) }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{$datas->name}}">
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{$datas->username}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{$datas->passsword}}">
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="date" name="DoB" value="{{$datas->DoB}}">
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{$datas->status}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                            </div>
                        </form>
                    @endforeach
                </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection