@extends('layout')
@section('konten')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0"></h1>
      </div>
      <div class="col-lg-12">
       <div class="card">
         <ol class="breadcrumb float-sm-left m-3">
           <li class="breadcrumb-item active ml-1">Jenis</li>
         </ol>
       </div>
      </div>
    </div>
  </div>
</div>

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
              <h2 class="card-title">Data Jenis</h2>
              <a href="jenis/create" class="btn btn-info" style="float: right">Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No</th>
                 <th>Nama Jenis</th>
                 <th>Kode Jenis</th>
                 <th>Keterangan</th> 
                 <th>OPSI</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach ($data as $d)
                  <tr>
                      <th>{{ $loop->iteration  }}</th>

                      <th>{{ $d->namajenis }}</th>

                      <th>{{ $d->kodejenis }}</th>

                       <th>{{ $d->keterangan }}</th> 

                      <th>
                        <a href="#" class="btn btn-info">Lihat</a>
                        <a href="/jenis/edit/{{ $d->idjenis }}" class="btn btn-warning">Edit</a>
                        <a href="/jenis/hapus/{{ $d->idjenis }}" class="btn btn-danger">Hapus</a>
                      </th>

                  </tr>
                  @endforeach
                 
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection