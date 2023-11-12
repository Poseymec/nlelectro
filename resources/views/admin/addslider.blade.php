@extends('admin_layout.master')
@section('titre')

    NL-electro Ajouter_un_slider
    
@endsection
@section('contenu')

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Accueil</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Slider</h3>
              </div>
              <!-- /.card-header -->
             @if (count($errors)>0)
              <div class="alert alert-danger">
                <ul>
              @foreach ($errors->All() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
              </div>
              @endif
              @if (Session::has('status'))
                <br>
                <div class="alert alert-success"> {{Session::get('status')}}</div>
            @endif
              <!-- form start -->
              <form  action="{{url('/admin/saveslider')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider description 1</label>
                    <input type="text" name="description1" class="form-control" id="exampleInputEmail1" placeholder="Entrez la description du slider" required>
                  </div
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider description 2</label>
                    <input type="text" name="description2" class="form-control" id="exampleInputEmail1" placeholder="Entrez la description du slider" required>
                  </div>
                  <label for="exampleInputFile">Slider image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file"  name="image" class="custom-file-input" id="exampleInputFile" required>
                      <label class="custom-file-label" for="exampleInputFile">Choisir le fichier</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Télécharger</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-warning">Submit</button> -->
                  <input type="submit" class="btn btn-warning" value="Sauvegarder" >
                </div>
              </form>
            </div>
            <!-- /.card --> 
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection