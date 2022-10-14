@extends('master.admin_layout')

@section('content')

<style>
    label {
        color: white !important;
    }

    option {
        color: black;
    }

    .dataTables_info {
        color: white !important;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card mb-5">
                <div class="page-header-content header-elements-md-inline" style="background-color:#011126">
                    <div class="page-title d-flex" style="padding-top:1% !important;padding-bottom:1% !important">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data Card</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none py-0 mb-3 mb-md-0">
                        <div class="breadcrumb">
                            <a href="/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <span class="breadcrumb-item active">Data Card</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-right">
                        <button type="button" class=" mt-3 mb-1 btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>
                    <div class=" card">
                        <div class="pt-2 pr-1 pl-1 table-responsive col-sm-12 ">
                            <table id="table_id" class="table table-striped  table-striped table-border m-1 datatable-scroll-y">
                                <thead>
                                    <tr class="text-center">
                                        <th>Gambar</th>
                                        <th>Jenis Kartu</th>
                                        <th>Deskripsi</th>
                                        <th class="col-3s text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($card as $c)
                                    <tr>
                                        <td class="pr-2 pl-1 "><img width="300px" src="{{ url('/data_card/'.$c->image) }}"></td>
                                        <td class="pr-2 pl-2 ">{{$c->name}}</td>
                                        <td class="pr-2 pl-2 ">{{$c->desc}}</td>
                                        <td class="text-center">
                                        <button class="btn btn-outline-info editbtn" value="{{$c->id}}"><i class="fa-solid fa-pen"></i></button> 
                                            <button class="btn btn-outline-danger deletebtn" value="{{$c->id}}"><i class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
        $(document).on('click', '.deletebtn', function() {
            var id = $(this).val();
            // alert(id);
            $('#deleteModal').modal('show');
            $('#deleting_id').val(id);
        });
        $(document).on('click', '.editbtn', function() {
            var id = $(this).val();
            // alert(id)
            $('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/card_edit/" + id,
                success: function(response) {
                    console.log(response.card.desc)
                    $('#name').val(response.card.name);
                    $('#desc').val(response.card.desc);
                    $('#id').val(response.card.id);
                }
            });
        });
    });
    </script>

<!-- Modal Update -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#011126">
                <h5 class="modal-title">Update Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--FORM UPDATE BARANG-->
                <form action="/card/update" method="post">
                    @csrf

                    <input type="hidden" id="id" name="id"> <br />

                    <div class="form-group">
                        <label>Jenis Kartu</label>
                        <input type="text" required="required" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" required="required" class="form-control" name="desc" id="desc">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
                <!--END FORM UPDATE BARANG-->
            </div>
        </div>
    </div>
</div>
<!-- End Modal UPDATE Barang-->



    <!-- delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#011126">
                <h5 class="modal-title">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--FORM UPDATE BARANG-->
                <form action="/card_delete" method="post">
                    @csrf
                    @method('DELETE')
                    <h3>Anda yakin menghapus data ?</h3>
                    <input type="hidden" id="deleting_id" name="delete_id">
                    <input type="hidden" id="delete_by" name="delete_by" value="{{Auth::id()}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-primary">Hapus</button>
                    </div>
                </form>
                <!--END FORM UPDATE BARANG-->
            </div>
        </div>
    </div>
</div>
<!-- end delete -->

<!-- add -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center pb-3" style="background-color:#011126">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/card_store" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" id="id" name="id"> <br/>
                    <input type="hidden" id="created_by" name="created_by" value="{{Auth::id()}}">
                  
                    <div class="form-group">
                        <label>Jenis Kartu</label>
                        <input type="text" required="required" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label>Keteranagn</label>
                        <input type="text" required="required" class="form-control" name="desc" id="desc">
                    </div>
                    <div class="form-group">
                        <div style="position:relative;">
                            <a class='btn btn-info col-sm-3' href='javascript:;'>
                                Choose Image...
                            </a>
                            <img class="img-preview img-fluid mt-3 ">
                            <input type="file"  style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="image" id="image" size="40" onchange="previewImage()">
                            
                            &nbsp;
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" value="Upload" class="btn btn-outline-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')
        

        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    
    }
    </script>

@endsection