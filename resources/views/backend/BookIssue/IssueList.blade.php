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
            <h1>Issue Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Issue</li>
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
              <h3 class="card-title">Total Book Issue - {{count($IssueData)}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>Issue Date</th>
                  <th>Army No</th>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Corps</th>
                  <th>Mobile NO</th>
                  <th>Unite</th>
                  <th>Book Name</th>
                  <th>Accession No</th>
                  <th>Return Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($IssueData as $issue)
                <tr>
                  <td>{{$issue->issue_date}}</td>
                  <td>{{$issue->memberDetails->rank_no}}</td>
                  <td>{{$issue->rank}}</td>
                  <td>{{$issue->memberDetails->name}}</td>
                  <td>{{$issue->corps}}</td>
                  <td>{{$issue->mobile_no}}</td>
                  <td>{{$issue->unite}}</td>
                  <td>{{$issue->bookDetails->titlee}}</td>
                  <td>{{$issue->bookDetails->accession}}</td>
                  <td>{{$issue->return_date}}</td>
                  <td class="h5">
                    <div class="btn-group">
                      <button type="button" class="btn btn-info">Action</button>
                      <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                        <div class="dropdown-menu" role="menu">
                          <a href="#" class="dropdown-item modal-trigger" data-toggle="modal" data-target="#modal-default" data-id="{{ $issue->id }}">
          Issue Modal for {{ $issue->id }}
        </a>
                          <a class="dropdown-item" href="{{url('/returnIssue/'.$issue->id)}}">Return</a>
                          <a class="dropdown-item" href="{{url('issues/'.$issue->id.'/edit')}}">Edite</a>
                          <a class="dropdown-item" href="{{url('issues/'.$issue->id)}}">Delete</a>
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
  @include('backend.BookIssue.issueReturnModal')
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

 document.querySelectorAll('.modal-trigger').forEach(function (el) {
  el.addEventListener('click', function (e) {
    e.preventDefault(); // ডিফল্ট আচরণ বন্ধ করা
    const issueId = el.getAttribute('data-id'); // data-id থেকে issue ID আনুন
    document.getElementById('modalContent').value = issueId; // মোডালের কন্টেন্ট পরিবর্তন
    $('#modal-default').modal('show'); // Modal ম্যানুয়ালি শো করুন
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
