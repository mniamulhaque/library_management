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
            <h1>{{($bookCat == 'Army Publication') ? 'Army Book List':'General Book List'}}</h1>
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
              <h3 class="card-title">Total Books - {{count($books)}} </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL No</th>
                  <th>Book Catagory</th>
                  <th>Accession No</th>
                  <th>Title</th>
				  @if($bookCat == 'General Books')
                  <th>Author</th>
                  <th>Subject</th>
                  <th>place of publication</th>
				  @else
				  <th>Types</th>
                  <th>Corps</th>
				  @endif
                  <th>publisher</th>
                  <th>year of publication</th>
                  <th>price</th>
				  @if($bookCat == 'General Books')
                  <th>edition</th>
				  @endif
                  <th>volume</th>
                  <th>pages</th>
                  <th>source</th>
                  <th>location</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $key=>$book)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$book->book_cat}}</td>
                  <td>{{$book->accession}}</td>
                  <td>{{$book->titlee}}</td>
				  @if($bookCat == 'General Books')
                  <td>{{$book->author}}</td>
                  <td>{{$book->subject}}</td>
                  <td>{{$book->place_of_publication}}</td>
				  @else
				  <td>{{($book->types == '0') ? '---':$book->types}}</td>
				  <td>{{($book->corps == '0') ? '---':$book->corps}}</td>
				  @endif
                  <td>{{$book->publisher}}</td>
                  <td>{{($book->year_of_publication == '0') ? '---':$book->year_of_publication}}</td>
                  <td>{{$book->price}}</td>
				  @if($bookCat == 'General Books')
                  <td>{{($book->edition == '0') ? '---':$book->edition}}</td>
				  @endif
                  <td>{{($book->volume == '0') ? '---':$book->volume}}</td>
                  <td>{{($book->pages == '0') ? '---':$book->pages}}</td>
                  <td>{{($book->source == '0') ? '---':$book->source}}</td>
                  <td>{{($book->location == '0') ? '---':$book->location}}</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">Action</button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="{{url('/book_shelves/'.$book->id)}}">View</a>
                          <a class="dropdown-item" href="{{url('book_shelves/'.$book->id.'/edit')}}">Edite</a>
                          <a class="dropdown-item" href="{{url('book_shelves/'.$book->id)}}">Delete</a>
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                @endforeach
               
                </tbody>
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
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
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