@extends('layoutadmin.template')
@section('title','Data Siswa')
@section('judul','Data Siswa')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Siswa</li>
    </ol>
@endsection

@section('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
    </script>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <a href="/pendaftaran/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Asal Sekolah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pen as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->asal_sek}}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{$item->id}}">
                                    <i class="fa fa-eye"></i>
                                </button>

                                <!-- Modal Detail-->
                                <div class="modal fade" id="detail{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item->nama}}</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">

                                                <tbody>
                                                        {{-- BIODATA SISWA --}}
                                                        <tr>
                                                            <td>NISN</td>
                                                            <th scope="row">{{$item->nisn}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>NIK</td>
                                                            <th scope="row">{{$item->nik}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Lengkap</td>
                                                            <th scope="row">{{$item->nama}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tempat Lahir</td>
                                                            <th scope="row">{{$item->tempat}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir</td>
                                                            <th scope="row">{{$item->tgl_lahir}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Agama</td>
                                                            <th scope="row">{{$item->agama}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <th scope="row">{{$item->alamat}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tempat Tinggal</td>
                                                            <th scope="row">{{$item->tempat_tinggal}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Transportasi</td>
                                                            <th scope="row">{{$item->transportasi}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nomor KPS/KKS</td>
                                                            <th scope="row">{{$item->no_kps}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Asal Sekolah</td>
                                                            <th scope="row">{{$item->asal_sek}}</th>
                                                        </tr>

                                                          {{-- DATA ORANGTUA --}}
                                                        <tr>
                                                            <td>Nama Ayah</td>
                                                            <th scope="row">{{$item->nm_ayah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir Ayah</td>
                                                            <th scope="row">{{$item->tgl_ayah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Pendidikan Ayah</td>
                                                            <th scope="row">{{$item->pendidikan_ayah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Penghasilan Ayah</td>
                                                            <th scope="row">{{$item->penghasilan_ayah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Keterangan Ayah</td>
                                                            <th scope="row">{{$item->ket_ayah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Ibu</td>
                                                            <th scope="row">{{$item->nm_ibu}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir Ibu</td>
                                                            <th scope="row">{{$item->tgl_ibu}}</th>
                                                        </tr>
                                                       <tr>
                                                            <td>Pendidikan Ibu</td>
                                                            <th scope="row">{{$item->pendidikan_ibu}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Pekerjaan Ibu</td>
                                                            <th scope="row">{{$item->pekerjaan_ibu}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Penghasilan Ibu</td>
                                                            <th scope="row">{{$item->penghasilan_ibu}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Keterangan Ibu</td>
                                                            <th scope="row">{{$item->ket_ibu}}</th>
                                                        </tr>

                                                        {{-- DATA PERIODIK CALON SISWA --}}
                                                        <tr>
                                                            <td>Tinggi</td>
                                                            <th scope="row">{{$item->tinggi}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Berat</td>
                                                            <th scope="row">{{$item->berat}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Jarak</td>
                                                            <th scope="row">{{$item->jarak}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Waktu Tempuh</td>
                                                            <th scope="row">{{$item->waktu_tempuh}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Anak Ke</td>
                                                            <th scope="row">{{$item->anak_ke}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Jumlah Saudara Kandung</td>
                                                            <th scope="row">{{$item->jumlah_saudara}}</th>
                                                        </tr>

                                                        {{-- LAMPIRAN --}}
                                                        <tr>
                                                            <td>Ijazah</td>
                                                            <th scope="row"><img src="{{ asset('/ijazah/'.$item->ijazah) }}" width="100" alt=""></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Foto</td>
                                                            <th scope="row"><img src="{{ asset('/foto/'.$item->foto) }}" width="100" alt=""></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Kartu Keluarga</td>
                                                            <th scope="row"><img src="{{ asset('/kk/'.$item->kk) }}" width="100" alt=""></th>
                                                        </tr>
                                                        <tr>
                                                            <td>KPS/KKS</td>
                                                            <th scope="row"><img src="{{ asset('/kps/'.$item->kps) }}" width="100" alt=""></th>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <a href="/pendaftaran/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal Hapus-->
                                <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Yakin ingin menghapus data Siswa <b>{{$item->nama}}</b>?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form action="/pendaftaran/{{$item->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                        </tr>
                    @endforelse

                </tfbosy>
            </table>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
