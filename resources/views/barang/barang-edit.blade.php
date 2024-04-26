@extends('template.main')
@section('title', 'Edit Barang')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/barang">Produk</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/barang" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/barang/{{ $barang->id_barang }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama_produk">Nama Produk</label>
                                            <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Nama Produk" value="{{old('nama_produk',$barang->nama_produk)}}" required>
                                            @error('nama_produk')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="kategory_produk">Kategori Produk</label>
                                            <input type="text" name="kategory_produk" class="form-control @error('kategory_produk') is-invalid @enderror" id="kategory_produk" placeholder="Kategory Produk" value="{{old('kategory_produk', $barang->kategory_produk)}}" required>
                                            @error('kategory_produk')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="harga_barang">Harga Barang</label>
                                            <input type="number"  name="harga_barang" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" placeholder="Harga Barang" value="{{old('harga_barang', $barang->harga_barang)}}" required>
                                            @error('harga_barang')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="harga_jual">Harga Jual</label>
                                            <input type="number" min="1" name="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" id="harga_jual" placeholder="Harga Jual" value="{{old('harga_jual',$barang->harga_jual)}}" required>
                                            @error('harga_jual')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Stok" value="{{old('stok',$barang->stok)}}" required>
                                        @error('stok')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                    Reset</button>
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection