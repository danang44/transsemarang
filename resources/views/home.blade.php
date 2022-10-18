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
                      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data Slider</h4>
                      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                  </div>

                  <div class="header-elements d-none py-0 mb-3 mb-md-0">
                      <div class="breadcrumb">
                          <a href="/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                          <span class="breadcrumb-item active">Data Slider</span>
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="text-right">
                      <button type="button" class=" mt-3 mb-1 btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                          Tambah Data <i class="fa-solid fa-plus"></i>
                      </button>
                  </div>
                  <div class="card">
                      <div class="pt-2  table-responsive col-sm-12 ">
                          <table id="table_id" class="table table-striped  table-striped table-border m-1 datatable-scroll-y">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Origin</th>
                                  <th scope="col">Toward</th>
                                  <th scope="col">Jam Operasional</th>
                                  <th scope="col">Jumlah Bis</th>
                                  <th scope="col">Jumlah Halte</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($result as $datas)   
                                <tr>
                 
                                  <td>{{$datas['urut']}}</td>
                                  <td>{{$datas['origin']}}</td>
                                  <td>{{$datas['toward']}}</td>
                                  <td>{{$datas['jam_operasional']}}</td>
                                  <td>{{$datas['jumlah_bis']}}</td>
                                  <td>{{$datas['jumlah_halte']}}</td>
                                
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

@endsection