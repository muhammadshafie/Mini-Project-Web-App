<div class="modal py-5" tabindex="-1" role="dialog" id="modalDelete">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header text-center py-2">
        <div class="modal-body py-2 text-center">
          <h5>Warning</h5>
        </div>
      </div>
      <div class="modal-body py-4 text-center">
        <p>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer flex-column border-top-0">
        <button type="button" class="btn btn-primary w-100 mx-0 mb-2" data-bs-toggle="modal" data-bs-target="#modalSuccess" data-bs-dismiss="modal">Yes, I want to delete</button>
        <button type="button" class="btn btn-light w-100 mx-0" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
@include('modal.successful')