@extends('../../layouts/backend')
@section('content')

  <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Form Create Transaksi</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form">

            <div class="box-body">

              <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" id="exampleInputPassword1" class="form-control" placeholder="Masukkan Password">
              </div>
              <div class="form-group">
               <label for="exampleInputFile">File input</label>
               <input type="file" id="exampleInputFile">
             </div>

             <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox">Check me out</label>
              </label>
            </div>
            </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
             </div>
           </form>
         </div>
         <!-- /.box -->

@endsection
