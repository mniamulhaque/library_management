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
            <h1>Rank Insert Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Rank Form</li>
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
                <h3 class="card-title">Add Rank</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/rank') }}">
                 @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label>Books Catagory</label>
                          <select class="form-control select2" style="width: 100%;" name="book_cat">
                            <option selected="">Select Books Catagory--</option>
                            <option value="General Books">General Books</option>
                            <option value="Army Publication">Army Publication</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="accession_no">Accession_No</label>
                      <input type="text" class="form-control" id="accession_no" name="accession_no" placeholder="Enter accession_no">
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="author">Author</label>
                        <input type="Text" class="form-control" id="author" name="author" placeholder="Enter author">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="place_of_publication">Place Of Publication</label>
                        <input type="Text" class="form-control" id="place_of_publication" name="place_of_publication" placeholder="Enter place_of_publication">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter Publisher">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Year Of Publication</label>
                        <input type="Text" class="form-control" id="year_of_publication" name="year_of_publication" placeholder="Enter year_of_publication">
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edition">Edition</label>
                        <input type="Text" class="form-control" id="edition" name="edition" placeholder="Enter Edition">
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