@extends('admin_layout.master')
@section('titre')

    NL-electro Ajouter_une_categorie
    
@endsection
@section('contenu')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categorie</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Accueil</a></li>
              <li class="breadcrumb-item active">Categorie</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter une Categorie</small></h3>
              </div>
              @if (Session::has('status'))
                  <br>
              <div class="alert alert-success"> {{Session::get('status')}}</div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('admin/savecategory')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Entrez le Nom de la categorie"  required>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                  <input type="submit" class="btn btn-primary" value="Sauvegarder" >
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