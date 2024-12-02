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
            <h1>Member Register Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Member Form</li>
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
                <h3 class="card-title">{{ isset($memberData) ? 'Update ' : 'Add ' }} Member</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
               <form action="{{ isset($memberData) ? route('members.update', $memberData->id) : route('members.store') }}" method="POST">
                 @csrf
                 @if (isset($memberData))
                    @method('put')
                 @endif
                <div class="card-body">
                  <div class="row">
                    {{--<div class="col-sm-6">
                       <div class="form-group">
                          <label>Rank</label>
                          <select class="form-control select2" style="width: 100%;" id="rankk" name="rankk">

                            <option value=""></option>
                            <option value="Officer">Officer</option>
                            <option value="JCO">JCO</option>
                            <option value="NCO">NCO</option>
                            <option value="Others">Others</option>
                            <option value="Civilian">Civilian</option>
                          </select>
                        </div>
                    </div>--}}
                    <div class="col-sm-6">
                      <div class="form-group">
                          <label>Rank</label>
                          <select class="form-control select2" style="width: 100%;" id="rank" name="rank" required>
                            <option value="{{ isset($memberData) ? $memberData->rank : '' }}">{{ isset($memberData) ? $memberData->rank : 'Select Rank-----' }}</option>
                            <option value="Lieutenant">Lieutenant</option>
                            <option value="Captain">Captain</option>
                            <option value="Major">Major</option>
                            <option value="Lieutenant Cornel">Lieutenant Cornel</option>
                            <option value="Cornel">Cornel</option>
                            <option value="Brigadier General">Brigadier General</option>
                            <option value="Major General">Major General</option>
                            <option value="Lieutenant General">Lieutenant General</option>
                            <option value="Sgt">Sgt</option>
                            <option value="Cpl">Cpl</option>
                            <option value="Warrant Officer">Warrant Officer</option>
                            <option value="Senior Warrant Officer">Senior Warrant Officer</option>
                            <option value="Master Warrant Officer">Master Warrant Officer</option>
                            <option value="Honorary Lieutenant">Honorary Lieutenant</option>
                            <option value="Honorary Captain">Honorary Captain</option>
                            <option value="LCPL">LCPL</option>
                            <option value="SNK">SNK</option>
                            <option value="Librarian">Librarian</option>
                            <option value="RCO">RCO</option>
                            <option value="Head Clerk">Head Clerk</option>
                            <option value="UDC">UDC</option>
                            <option value="LDC">LDC</option>
                          </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                        <label for="publisher">Mobile Number</label>
                        <input type="number" class="form-control" value="{{ isset($memberData) ? $memberData->mobile_no : '' }}" id="mobile_no" name="mobile_no" placeholder="Enter Mobile Number" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="title">Army No</label>
                        <input type="text" class="form-control" value="{{ isset($memberData) ? $memberData->rank_no : '' }}" id="rank_no" name="rank_no" placeholder="Enter No" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="author">Name</label>
                        <input type="Text" class="form-control" value="{{ isset($memberData) ? $memberData->name : '' }}" id="name" name="name" placeholder="Enter name" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="subject">Corps</label>
                        <input type="text" class="form-control" value="{{ isset($memberData) ? $memberData->corps : '' }}" id="corps" name="corps" placeholder="Enter Corps">
                      </div>
                    </div>
					<div class="col-md-4">
                      <div class="form-group">
                        <label for="subject">Appointment</label>
                        <input type="text" class="form-control" value="{{ isset($memberData) ? $memberData->appointment : '' }}" id="appointment" name="appointment" placeholder="Enter Appointment" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">Unite/Organization</label>
                        <input type="Text" class="form-control" id="unite" value="{{ isset($memberData) ? $memberData->unite : '' }}" name="unite" placeholder="Enter Unite/Organization" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                   {{-- <div class="col-md-6">
                      <div class="form-group">
                        <label for="year_of_publication">Member Photo</label>
                        <input type="Text" class="form-control" id="photo" name="photo" placeholder="Enter photo">
                      </div>
                    </div>--}}
                  </div>
				  {{-- <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="publisher">Address</label>
                        <textarea rows="6" class="w-100" name="address"></textarea>
                      </div>
                    </div>
                  </div> --}}

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