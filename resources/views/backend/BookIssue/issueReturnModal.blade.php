<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

  <form action="{{url('/returnIssuePost')}}" method="POST">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Reurn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <p>Return Book</p>
         <div class="row">
           <div class="col-md-12">
              <div class="form-group">
                <label for="year_of_publication">Return Date</label>
                <input type="hidden" value="" id="modalContent" name="issueReturn_id">
                <input type="date" class="form-control" id="return_date" name="realReturnDate" placeholder="Enter Mobile No" required>
              </div>
            </div>
         </div>
     

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </form>
  </div>
</div>