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
              <form method="POST" enctype='multipart/form-data' action="{{ url('/uploadExcelPost') }}">
                 @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label>Books Catagory</label>
                          <select class="form-control" style="width: 100%;" name="book_cat" required>
                            <option value="">Select Book Catagory</option>
                            <option value="Army Publication">Army Publication</option>
                            <option value="General Books">General Books</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Upload Excel File</label>
                        <input type="file" class="form-control" id="excelfile" name="excelfile" placeholder="Upload Excel File" required>
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