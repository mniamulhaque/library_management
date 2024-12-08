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
            <h1>General Book {{ isset($books) ? 'Update' : 'Register' }} Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ isset($books) ? 'Update' : 'Add' }} books Form</li>
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
                <h3 class="card-title">{{ isset($books) ? 'Update' : 'Add' }} Books</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ isset($books) ? route('book_shelves.update',$books->id) :route('book_shelves.store') }}">
                 @csrf
                 @if (isset($books))
                    @method('put')
                 @endif
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="form-group">
                       <select class="form-control" name="book_cat" required hidden>
                            <option value="{{ isset($books) ? $books->book_cat : 'General Books' }}">{{ isset($books) ? $books->book_cat : 'General Books' }}</option>
                        </select>
                      <label for="example1">Accession_No</label>
                       <input type="text" class="form-control" id="accession" name="accession" value="{{isset($books) ? $books->accession : $bookCodeNum.$bookNumber}}">
                       <input type="hidden" name="bookCodeNum" value="{{$bookCodeNum}}" required>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="titlee" value="{{ isset($books) ? $books->titlee : '' }}" name="titlee" placeholder="Enter Title" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="author">Author</label>
                        <input type="Text" class="form-control" value="{{ isset($books) ? $books->author : '' }}" id="author" name="author" placeholder="Enter author" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" value="{{ isset($books) ? $books->subject : '' }}" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="place_of_publication">Place Of Publication</label>
                        <input type="Text" value="{{ isset($books) ? $books->place_of_publication : '' }}" class="form-control" id="place_of_publication" name="place_of_publication" placeholder="Enter place_of_publication" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" value="{{ isset($books) ? $books->publisher : '' }}" class="form-control" id="publisher" name="publisher" placeholder="Enter Publisher" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Year Of Publication</label>
                        <input type="Text" value="{{ isset($books) ? $books->year_of_publication : '' }}" class="form-control" id="year_of_publication" name="year_of_publication" placeholder="Enter year_of_publication" required>
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" value="{{ isset($books) ? $books->price : '' }}" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edition">Edition</label>
                        <input type="Text" value="{{ isset($books) ? $books->edition : '' }}" class="form-control" id="edition" name="edition" placeholder="Enter Edition" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="volume">Volume</label>
                        <input type="text" value="{{ isset($books) ? $books->volume : '' }}" class="form-control" id="volume" name="volume" placeholder="Enter Volume" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pages">pages</label>
                        <input type="Text" value="{{ isset($books) ? $books->pages : '' }}" class="form-control" id="pages" name="pages" placeholder="Enter pages" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="location">Source/Supplier</label>
                        <input type="text" value="{{ isset($books) ? $books->source : '' }}" class="form-control" id="source" name="source" placeholder="Enter Source/Supplier">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" value="{{ isset($books) ? $books->location : '' }}" class="form-control" id="location" name="location" placeholder="Enter Location" required>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ isset($books) ? 'Update' : 'Submit' }}</button>
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