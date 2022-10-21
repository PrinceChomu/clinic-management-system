  <!-- Modal -->
  <div class="modal fade" id="createContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create New Contact</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('contacts.store') }}" method="POST">
          @csrf
          <div class="modal-body">

              <label>First Name</label>
              <div class="mb-3">
                  <input type="text" class="form-control" name="fname">
              </div>

              <label>Last Name</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="lname">
              </div>

              <label>Email</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="email">
              </div>

              <label>Contact Type</label>
              <div class="mb-3">
                  <select class="form-control" name="type">
                      <option></option>
                      <option value="Auditor">Auditor</option>
                      <option value="Breeder">Breeder</option>
                      <option value="Buyer">Buyer</option>
                      <option value="Certifier">Certifier</option>
                      <option value="Contact">Contact</option>
                      <option value="Consultant">Consultant</option>
                      <option value="Contractor">Contractor</option>
                      <option value="Customer">Customer</option>
                      <option value="Employee">Employee</option>
                      <option value="Purchaser">Purchaser</option>
                      <option value="Supplier">Supplier</option>
                      <option value="Vendor">Vendor</option>
                      <option value="Veterinarian">Veterinarian</option>
                      <option value="Wholesale Customer">Wholesale Customer</option>
                  </select>
              </div>

              <label>Keywords</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="keywords">
              </div>

              <label>Primary Phone</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="pphone">
              </div>

              <label>Mobile Phone</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="mphone">
              </div>

              <label>Fax</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="fax">
              </div>

              <label>Company</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="company">
              </div>

              <label>Country</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="country">
              </div>

              <label>Address</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="address">
              </div>

              <label>City</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="city">
              </div>

              <label>State/Province</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="province">
              </div>

              <label>Postal Code</label>
              <div class="mb-3">
                  <input type="datetime" class="form-control" name="postal_code">
              </div>

              <label>Description</label>
              <div class="mb-3">
                  <textarea class="form-control" aria-label="describe" name="description"></textarea>
              </div>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>