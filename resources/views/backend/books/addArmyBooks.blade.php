@extends('backend.master')
  @section('title')
    Book List
  @endsection
  @section('body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Book Register Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add books Form</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Books</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/book_shelves') }}">
                 @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label>Books Catagory</label>
                          <select class="form-control" style="width: 100%;" name="book_cat">
                            <option value="Army Publication">Army Publication</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="example1">Accession_No</label>
                       <input type="text" class="form-control" id="accession" name="accession" value="{{$bookCodeNum.$bookNumber}}">
                       <input type="hidden" name="bookCodeNum" value="{{$bookCodeNum}}" >
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="titlee" name="titlee" placeholder="Enter Title">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter Publisher">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label>Type</label>
                          <select class="form-control select2" style="width: 100%;" name="types">
                            <option value="ADP">ADP</option>
                            <option value="AGP">AGP</option>
                            <option value="ATM">ATM</option>
                            <option value="ATP">ATP</option>
                            <option value="GSTP NO">GSTP NO</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="example1">Corps</label>
                       <input type="text" class="form-control" id="corps" name="corps">
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Year Of Publication</label>
                        <input type="Text" class="form-control" id="year_of_publication" name="year_of_publication" placeholder="Enter year_of_publication">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="volume">Volume</label>
                        <input type="text" class="form-control" id="volume" name="volume" placeholder="Enter Volume">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pages">pages</label>
                        <input type="Text" class="form-control" id="pages" name="pages" placeholder="Enter pages">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="location">Source/Supplier</label>
                        <input type="text" class="form-control" id="source" name="source" placeholder="Enter Source/Supplier">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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
@push('script')
<script src="{{ asset('/') }}backend/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript">
// $(document).ready(function () {
//   bsCustomFileInput.init();
// });
</script>

<script>
    @if(session('success'))
        toastr.success('{{ session('success') }}');
    @endif

    @if(session('error'))
        toastr.error('{{ session('error') }}');
    @endif
</script>
@endpush