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

    <script>
        $(function() {
            $("#date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-5 ">
                    <div class="page-header-content header-elements-md-inline " style="background-color:#011126">
                        <div class="page-title d-flex " style="padding-top:1% !important;padding-bottom:1% !important">
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data
                                Artikel</h4>
                            <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                    class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none py-0 mb-3 mb-md-0">
                            <div class="breadcrumb">
                                <a href="/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">DATA ARTIKEL</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <h3>PERBAHARUI ARTIKEL</h3>
                    </div>
                    <div class="col-md-12 p-4">
                        <form action="/article_store" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id"> <br />
                            {{-- <input type="hidden" id="iduser" name="iduser" value="{{ Auth::id() }}"> --}}

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" required="required" class="form-control" name="title" id="title" required autocomplete="title">
                            </div>
                            <div class="form-group">
                                <label>TANGGAL</label>
                                <input type="date" required="required" class="form-control" name="date" id="date">
                            </div>

                            <div class="form-group">
                                <label>INTI ARTIKEL</label>
                                {{-- @if (old('intro'))
                                    @foreach ($article as $c)
                                        <textarea name="intro" required="required" class="form-control" id="intro" cols="30" rows="10"
                                            value="{{ $c->intro }}"></textarea>
                                    @endforeach
                                @else --}}
                                    <textarea name="intro" required="required" class="form-control" id="intro" cols="30" rows="10"
                                        value="text"></textarea>
                                {{-- @endif --}}
                            </div>

                            <div class="form-group">
                                <label>ARTIKEL LENGKAP</label>
                                {{-- @if (old('content'))
                                    @foreach ($article as $c)
                                        <textarea name="content" required="required" class="form-control" id="content" cols="30" rows="10"
                                            value="{{ $c->content }}"></textarea>
                                    @endforeach
                                @else --}}
                                    <textarea name="content" required="required" class="form-control" id="content" cols="30" rows="10"
                                        value="text" required autocomplete="content"></textarea>
                                {{-- @endif --}}
                            </div>

                            <div class="form-group">
                                <label>PUBLIKASI</label>
                                <div class="col-md-3">
                                    <select id="flag" type="text" class="form-control @error('flag') is-invalid @enderror" name="flag" data-container-css-class="border-teal" data-dropdown-css-class="border-teal" required>
                                        <!-- <option value="1">admin</option> -->
                                        <option value="1">Publish</option>
                                        <option value="0">Tidak Sekarang</option>
                                    </select>
                                    @error('flag')
                                    <span class="invalid-feedback" flag="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <div style="position:relative;">
                                    <a class='btn btn-info col-sm-3' href='javascript:;'>
                                        Choose Image...
                                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="gambar" size="40" onchange='$("#upload-file-info").html($(this).val());'>
                                    </a>
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>  --}}

                            <div class="form-group">
                                <div style="position:relative;">
                                    <a class='btn btn-info col-sm-3' href='javascript:;' >
                                        Choose Image...
                                    </a>
                                    <img class="img-preview img-fluid mt-3 " style="width:400px; height:100%;">
                                    <input type="file"
                                        style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'
                                        name="gambar" id="gambar" size="40" onchange="previewImage()">
                                    &nbsp;
                                    <span class='label label-info' id="upload-file-info"></span>
                                </div>
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary col-sm-3">
                        </form>
                    </div>

                    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

                    <script>    
                        CKEDITOR.replace('intro');
                        CKEDITOR.replace('content');
                        CKEDITOR.config.autoParagraph = false;
                        function previewImage() {
                            const image = document.querySelector('#gambar');
                            const imgPreview = document.querySelector('.img-preview')


                            imgPreview.style.display = 'block';
                            const oFReader = new FileReader();
                            oFReader.readAsDataURL(image.files[0]);

                            oFReader.onload = function(oFREvent) {
                                imgPreview.src = oFREvent.target.result;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
