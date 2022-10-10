@extends('master.admin_layout')

@section('content')
<style>
    h1 {
        font-size: 25px;
        font-weight: bold;
    }
</style>

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
                url: "/banner_edit/" + id,
                success: function(response) {
                    console.log(response.banner.deskripsi)
                    CKEDITOR.instances['deskripsi'].setData(response.banner.deskripsi);
                    $('#deskripsi').val(response.banner.deskripsi);
                    $('#id').val(response.banner.id);
               
                }
            });
        });
    });
</script>

<h1 class=" mt-5">TAMBAH BANNER</h1>
<div class="col-md-12 p-4">
    <form action="/banner_store" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        <input type="hidden" id="id" name="id"> <br />
        <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">
        <input type="hidden" id="created_by" name="created_by" value="{{Auth::id()}}">
        <div class="form-group">
           
            <input type="hidden" id="id" name="id">

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" required="required" class="form-control" id="deskripsi" cols="30" rows="10" ></textarea>
            </div>
          
            <button type="submit" value="Upload" class="btn btn-outline-primary">Simpan</button>
    </form>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('deskripsi');
</script>
</div>

@endsection

