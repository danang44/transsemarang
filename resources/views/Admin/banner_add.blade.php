@extends('master.admin_layout')

@section('content')
<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

<h1 class=" mt-5">TAMBAH BANNER</h1>
<div class="col-md-12 p-4">
    <form action="/banner_store" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="modal-body">
            <form action="/banner_store" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
     
                
                <input type="hidden" id="id" name="id"> <br />
                <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" id="created_by" name="created_by" value="{{Auth::id()}}">
                <div class="form-group">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        @if(old('deskripsi'))
                        @foreach($banner as $c)
                        <textarea name="deskripsi" required="required" class="form-control" id="deskripsi" cols="30" rows="10" value="{{ $c->deskripsi }}"></textarea>
                        @endforeach

                     @else
                     <textarea name="deskripsi" required="required" class="form-control" id="deskripsi" cols="30" rows="10" value="text"></textarea>
                        @endif
                      
                    </div>
        <input type="submit" value="Simpan" class="btn btn-primary col-sm-3">
    </form>
</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('deskripsi');
</script>
@endsection
</div>