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
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  
				  @if($bookCat == 'General Books')
                  <th>Subject</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>place And Publisher</th>
                  <th>Year</th>
                  <th>Pages</th>
                  <th>Edition</th>
                  <th>Volume</th>
                  <th>Cost</th>
                  <th>Location</th>
				  @else
                  <th>Title</th>
				          <th>Publisher</th>
                  <th>Corps</th>
                  <th>Types and No</th>
                  <th>Year</th>
                  <th>Volume/Part</th>
                  <th>Pages</th>
                  <th>Cost</th>
                  <th>Location</th>
				  @endif

                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($books as $key=>$book)
                <tr>
                  <td>{{$book->accession}}</td>
				  @if($bookCat == 'General Books')
                  <td>{{$book->subject}}</td>
                  <td>{{$book->author}}</td>
                  <td>{{$book->titlee}}</td>
                  <td>{{$book->place_of_publication}} , {{$book->publisher}}</td>
                  <td>{{($book->year_of_publication == '0') ? '---':$book->year_of_publication}}</td>
                  <td>{{($book->pages == '0') ? '---':$book->pages}}</td>
                  <td>{{($book->edition == '0') ? '---':$book->edition}}</td>
                  <td>{{($book->volume == '0') ? '---':$book->volume}}</td>
                  <td>{{$book->price}}</td>
                  <td>{{($book->location == '0') ? '---':$book->location}}</td>
				  @else
                  <td>{{$book->titlee}}</td>
                  <td>{{$book->publisher}}</td>
                  <td>{{($book->corps == '0') ? '---':$book->corps}}</td>
                  <td>{{($book->types == '0') ? '---':$book->types}}</td>
                  <td>{{($book->year_of_publication == '0') ? '---':$book->year_of_publication}}</td>
                  <td>{{($book->volume == '0') ? '---':$book->volume}}</td>
                  <td>{{($book->pages == '0') ? '---':$book->pages}}</td>                  
                  <td>{{$book->price}}</td>
                  <td>{{($book->location == '0') ? '---':$book->location}}</td>
				  @endif
                  
                  <td>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                          <a class="dropdown-item" href="{{url('/book_shelves/'.$book->id)}}">View</a>
                          <a class="dropdown-item" href="{{url('book_shelves/'.$book->id.'/edit')}}">Edite</a>
                          {{--<a class="dropdown-item" onclick="return confirm_delete()" href="{{url('book_shelves/'.$book->id)}}">Delete</a>--}}
                        </div>
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
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
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