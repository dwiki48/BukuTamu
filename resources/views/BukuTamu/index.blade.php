@extends('layouts.app')


@section('content')
<br>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#modalPegawai">
                            <i class="fa fa-plus">
                                Tambah Data Tamu
                            </i>
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Alamat / Instansi</th>
                                        <th>No. HP</th>
                                        <th>Keperluan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($bukuTamu as $BT)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$BT->nik}}</td>
                                        <td>{{$BT->nama_tamu}}</td>
                                        <td>{{$BT->pekerjaan}}</td>
                                        <td>{{$BT->alamat}}</td>
                                        <td>{{$BT->noHP}}</td>
                                        <td>{{$BT->keperluan}}</td>
                                        <td>{{$BT->foto}}</td>
                                        <td>
                                            <a href="/BTamu/{{$BT->id_buku}}/edit" class="btn btn-info btn-sm">
                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                            <a href="/BTamu/{{$BT->id_buku}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data Tamu ?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="/cekNIK" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="Number" class="form-control" id="exampleInputEmail1" name="nik" placeholder="Masukan NIK" required>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary">Cek NIK</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="Number" class="form-control" id="exampleInputEmail1" name="nama_guru" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pegawai</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="no_guru" placeholder="Nama Pegawai" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="no_guru" placeholder="Jabatan" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('buatjs')
<script>
    $('#editGuru').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nama = button.data('nama')
        var no = button.data('no')
        var alamat = button.data('alamat')

        var modal = $(this)
        modal.find('.modal-body #id_guru').val(id);
        modal.find('.modal-body #nama_guru').val(nama);
        modal.find('.modal-body #no_guru').val(no);
        modal.find('.modal-body #alamat_guru').val(alamat);
    })
</script>
@stop