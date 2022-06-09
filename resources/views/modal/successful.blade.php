<div class="modal fade py-5" tabindex="-1" role="dialog" id="modalSuccess">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header text-center py-2">
        <div class="modal-body py-2 text-center">
          <h5>Notification</h5>
        </div>
      </div>
      <div class="modal-body py-4 text-center">
        <p>Successful Deleted</p> 
      </div>
      <div class="modal-footer flex-column border-top-0">
        <button type="button" onclick="window.location.href='/userdelete?rid={{ $user->id }}'"  class="btn btn-lg btn-primary w-100 mx-0" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
