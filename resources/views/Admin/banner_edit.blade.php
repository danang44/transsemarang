@extends('master.admin_layout')

@section('content')


<div class="text-center"> 
<h3>PERBAHARUI BANNER</h3>
</div>



@foreach($banner as $c)
<form action="/banner/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $c->id }}"> <br />
    <div class="form-group m-auto">
        <label>DESKRIPSI</label>
        <textarea name="deskripsi" required="required" class="form-control" id="deskripsi" cols="30" rows="10">{{$c->deskripsi}}</textarea>
       <br></br>
       <div class="text-center">
           <button type="submit" class="btn btn-outline-success m-auto" style="margin : auto !important" value="Simpan Data" >SIMPAN PERUBAHAN</button>
           <br></br>         
           <a href="/banner" class="btn btn-outline-danger"> KEMBALI</a>
    </div>
    </div>
</form>
@endforeach

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('deskripsi');
</script>



@endsection