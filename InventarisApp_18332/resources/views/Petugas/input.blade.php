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
          <li class="breadcrumb-item ml-1"><a href="/petugas">Petugas</a></li>
           <li class="breadcrumb-item active ml-1">Tambah Petugas</li>
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
             
            <h3>Tambah Data Petugas</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <form action="store" method="POST">
                      @csrf
                      @method('POST')
                        <div class="form-group">
                            <input type="text" id="namapetugas" name="namapetugas" class="form-control" placeholder="Nama Petugas">
                        </div>
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                      </div>
                      <select name="idlevel" class="form-control" id="">
                        <option value="">-- LEVEL --</option>
                        @foreach ($data as $item)
                        <option value="{{ $item['idlevel'] }}">{{ $item['namalevel'] }}</option>
                        @endforeach
                    </select>
                      <div class="form-group">
                       <button type="submit" class="btn btn-info mt-3">Simpan Data Petugas</button>
                    </div>
                    </form>
                    
  
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
