@extends('layouts.master')
@section('title', 'Petugas')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Petugas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Update Data Petugas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        
                        <div class="card-body">
                        <form action="{{ route('petugas.update', $petugas[0]->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="form-group">
                                    <label for="id">ID Petugas</label>
                                    <input class="form-control" type="text" name="id" id="id" placeholder="Masukan ID" value="{{ $petugas[0]->id}}" disabled>
                                </div>
                                @error('id')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama_petugas">Nama Petugas</label>
                                    <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama" value="{{ $petugas[0]->nama_petugas}}">
                                </div>
                                @error('nama_petugas')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="jabatan_petugas">Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan_petugas" id="judul" placeholder="jabatan_petugas" value="{{ $petugas[0]->jabatan_petugas}}">
                                </div>
                                @error('jabatan_petugas')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="tlp_petugas" name="tlp_petugas" id="tlp_petugas">telepon petugas</label>
                                    <input class="form-control" type="text" name="tlp_petugas" id="tlp_petugas" placeholder="telepon petugas" value="{{ $petugas[0]->tlp_petugas}}">
                                </div>
                                @error('tlp_petugas')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat_petugas" placeholder="Masukan alamat">{{ $petugas[0]->alamat_petugas }}</textarea>
                                </div>
                                @error('alamat_petugas')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                    @endsection