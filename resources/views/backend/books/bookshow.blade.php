  @extends('backend.master')
  @section('title')
    Book List
  @endsection
  @push('style')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/') }}backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  @endpush
  @section('body')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{($bookCat == 'Army Publication') ? 'Army Book List':'General Book'}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{($bookCat == 'Army Publication') ? 'Army':'General'}} Books</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Details Of {{$book->titlee}} </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Book Catagory</th>
                   <td>{{$book->book_cat}}</td>
                </tr>
                <tr>
                  <th>Accession No</th>
                   <td>{{$book->accession}}</td>
                </tr>
                <tr>
                  <th>Title</th>
                   <td>{{$book->titlee}}</td>
                </tr>
                <tr>
				  @if($bookCat == 'General Books')
                  <th>Author</th>
                   <td>{{$book->author}}</td>
                </tr>
                <tr>
                  <th>Subject</th>
                   <td>{{$book->subject}}</td>
                </tr>
                <tr>
                  <th>place of publication</th>
                   <td>{{$book->place_of_publication}}</td>
                </tr>
                <tr>
				  @else
				          <th>Types</th>
                  <td>{{($book->types == '0') ? '---':$book->types}}</td>
                </tr>
                <tr>
                  <th>Corps</th>
                  <td>{{($book->corps == '0') ? '---':$book->corps}}</td>
                </tr>
                <tr>
				  @endif
                  <th>Publisher</th>
                   <td>{{$book->publisher}}</td>
                </tr>
                <tr>
                  <th>year of publication</th>
                  <td>{{($book->year_of_publication == '0') ? '---':$book->year_of_publication}}</td>
                </tr>
                <tr>
                  <th>price</th>
                   <td>{{$book->price}}</td>
                </tr>
                <tr>
				  @if($bookCat == 'General Books')
                  <th>Edition</th>
                  <td>{{($book->edition == '0') ? '---':$book->edition}}</td>
                </tr>
                <tr>
				  @endif
                  <th>Volume</th>
                  <td>{{($book->volume == '0') ? '---':$book->volume}}</td>
                </tr>
                <tr>
                  <th>Pages</th>
                  <td>{{($book->pages == '0') ? '---':$book->pages}}</td>
                </tr>
                <tr>
                  <th>Source</th>
                  <td>{{($book->source == '0') ? '---':$book->source}}</td>
                </tr>
                <tr>
                  <th>location</th>
                  <td>{{($book->location == '0') ? '---':$book->location}}</td>
                </tr>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @endsection

@push('script')
<!-- DataTables -->
<script src="{{ asset('/') }}backend/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/') }}backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- page script -->
@endpush