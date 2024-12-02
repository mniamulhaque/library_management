@extends('backend.master')
  @section('title')
    Book List
  @endsection
  @push('style')
    
  @endpush
  @section('body')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Issue Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Issue Form</li>
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
                <h3 class="card-title">Add Issue</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{ route('issues.store') }}" method="POST">
                 @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Issue Date</label>
                        <input type="Date" class="form-control" id="issue_date" name="issue_date" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                       <div class="form-group">
                          <label>Army No</label>
                          <select class="form-control select2" style="width: 100%;" name="member_id" id="member_id" required>
                            <option value="">Select Army Num--</option>
                            @foreach($memberData as $member)
                            <option value="{{$member->id}}">{{$member->rank_no.' - '.$member->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                   {{-- <div class="col-md-6">
                      <div class="form-group">
                        <label for="author">Name</label>
                        <input type="Text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                      </div>
                    </div>--}}
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Mobile Number</label>
                        <input type="number" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Mobile No" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Rank</label>
                        <input type="text" class="form-control" id="rank" name="rank" placeholder="Enter Rank" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Corps</label>
                        <input type="text" class="form-control" id="corps" name="corps" placeholder="Enter Corps" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Unite/Organization</label>
                        <input type="Text" class="form-control" id="unite" name="unite" placeholder="Enter Unite/Organization" required>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="author">Book Name</label>
                         <select class="form-control select2" style="width: 100%;" id="book_name" name="book_name" required>
                            <option value="">Select Book Name--</option>
                            @foreach($BookSelfData as $BookSelf)
                            <option value="{{$BookSelf->id}}">{{$BookSelf->accession.' - '.$BookSelf->titlee}}</option>
                            @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Return Date</label>
                        <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Enter Mobile No" required>
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
<!---<script src="{{ asset('/') }}backend/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>-->

<!-- AdminLTE App -->

<script>
    @if(session('success'))
        toastr.success('{{ session('success') }}');
    @endif

     @error('issue_date')
        toastr.error('{{ $errors->first('issue_date') }}');
     @enderror

     @error('member_id')
        toastr.error('{{ $errors->first('member_id') }}');
     @enderror

     //Army No change
    $(document).on('change', '#member_id', function (){
        event.preventDefault();

       var member_id =  $('#member_id').val();

        $.ajax({
            url: "{{ url('/') }}/members/"+member_id,
            method: "GET",
            success: function (response) {
                console.log(response);
                $('#mobile_no').val(response.mobile_no);
                $('#rank').val(response.rank);
                $('#corps').val(response.corps);
                $('#unite').val(response.unite);

            }
        });
    });
    
</script>
@endpush