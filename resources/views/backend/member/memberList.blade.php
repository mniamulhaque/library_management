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
            <h1>Member List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member</li>
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
              Total Members - {{count($memberData)}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Army No</th>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Corps</th>
                  <th>Appointment</th>
                  <th>Unite/Organization</th>
                  <th>Mobile No</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($memberData as $key=>$member)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$member->rank_no}}</td>
                  <td>{{$member->rank}}</td>
                  <td>{{$member->name}}</td>
                  <td>{{$member->corps}}</td>
                  <td>{{$member->appointment}}</td>
                  <td>{{$member->unite}}</td>
                  <td>{{$member->mobile_no}}</td>
                  <td class="h5"><a href="{{url('members/'.$member->id.'/edit')}}" class="text-secondary"><i class="far fa-edit"></i> </a>@if(count($member->issueDetails) == 0)||<form action="{{ route('members.destroy', $member) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button  onclick="return confirm_delete()" class="text-danger btn btn-link" type="submit"><i class="fas fa-trash-alt"></i></button>
                    </form>
                   @endif
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
	// @error('firstname')
    // <div class="error">{{ $message }}</div>
	// @enderror

    function confirm_delete() {
      return confirm('are you sure delete this file?');
    }
</script>
@endpush