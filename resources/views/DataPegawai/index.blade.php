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
                                Tambah Data Pegawai
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
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($dataPegawai as $DP)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$DP->nip}}</td>
                                        <td>{{$DP->nama_pegawai}}</td>
                                        <td>{{$DP->jabatan}}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" data-target="#editPegawai" role="button" data-id="{{$DP->id_pegawai}}" data-nip="{{$DP->nip}}" data-nama="{{$DP->nama_pegawai}}" data-jabatan="{{$DP->jabatan}}" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true"></i>
                                                Edit
                                            </button>
                                            <a href="/pegawai/{{$DP->id_pegawai}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data Pegawai ?')">
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

<div class="modal fade" id="modalPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="/tambahPegawai" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pegawai</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_pegawai" placeholder="Nama Pegawai" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="jabatan" placeholder="Jabatan" required>
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
<div class="modal fade" id="editPegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Guru</h5>
            </div>
            <div class="modal-body">
                <form action="/editPegawai" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP</label>
                        <input type="number" class="form-control" id="id_pegawai" name="id_pegawai" hidden>
                        <input type="number" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required>
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
    $('#editPegawai').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nip = button.data('nip')
        var nama = button.data('nama')
        var jabatan = button.data('jabatan')

        var modal = $(this)
        modal.find('.modal-body #id_pegawai').val(id);
        modal.find('.modal-body #nip').val(nip);
        modal.find('.modal-body #nama_pegawai').val(nama);
        modal.find('.modal-body #jabatan').val(jabatan);
    })
</script>
@stop