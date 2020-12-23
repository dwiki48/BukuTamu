@extends('layouts.app')


@section('content')
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Tambah Data Tamu</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="/simpanTamu" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">NIK</label>
                                    <input type="number" class="form-control" id="inputEmail4" name="nik" value="{{$DataTamu->nik}}" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Nama</label>
                                    <input type="text" class="form-control" id="inputPassword4" name="nama_tamu" value="{{$DataTamu->nama_tamu}}" placeholder="Masukan Nama" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Pekerjaan</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="pekerjaan" value="{{$DataTamu->pekerjaan}}" placeholder="Masukan Pekerjaan" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">No HP</label>
                                    <input type="number" class="form-control" id="inputPassword4" name="noHP" value="{{$DataTamu->noHP}}" placeholder="Masukan No HP" readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Keperluan</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="keperluan" value="{{$DataTamu->keperluan}}" placeholder="Masukan Pekerjaan" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="customFile">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Pilih Pegawai</label>
                                    <select id="inputState" class="form-control" name="id_pegawai" required>
                                        <option value="">Pilih Pegawai.....</option>
                                        @foreach($dataPeg as $dataPeg)
                                        <option value="{{$dataPeg->id_pegawai}}">{{$dataPeg->nama_pegawai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                <textarea class="form-control" id="inputAddress" name="alamat" rows="3" readonly>{{$DataTamu->alamat}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-lg-right">Simpan</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('buatjs')
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@stop