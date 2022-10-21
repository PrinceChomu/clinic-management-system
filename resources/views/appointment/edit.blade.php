@extends('layout.header')

@section('page1', 'Pages')
@section('page2', 'Contacts')
@section('active_contact', 'active')

@section('additional_style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
@endsection

@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        @include('includes.messages')
        <div class="card mb-4" style="padding: 3% 4% 4% 4%;">
            <li class="nav-item d-flex align-items-center">
                <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#createContact">
                    Create New
                </button>
            </li>
            
          <div class="card-header pb-0">
            <h4>Edit Livestock</h4>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                <div class="modal-body">
      
                    <label>First Name</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fname" value="{{ $contact->fname }}">
                    </div>
      
                    <label>Last Name</label>
                    <div class="mb-3">
                        <input type="datetime" class="form-control" name="lname" value="{{ $contact->sname }}">
                    </div>
      
                    <label>Email</label>
                    <div class="mb-3">
                        <input type="datetime" class="form-control" name="email" value="{{ $contact->email }}">
                    </div>
      
                    <label>Contact Type</label>
                    <div class="mb-3">
                        <select class="form-control" name="type">
                            <option></option>
                            <option value="Auditor" {{ $contact->contact_type == "Auditor" ? "selected" : "" }}>Auditor</option>
                            <option value="Breeder" {{ $contact->contact_type == "Breeder" ? "selected" : "" }}>Breeder</option>
                            <option value="Buyer" {{ $contact->contact_type == "Buyer" ? "selected" : "" }}>Buyer</option>
                            <option value="Certifier" {{ $contact->contact_type == "Certifier" ? "selected" : "" }}>Certifier</option>
                            <option value="Contact" {{ $contact->contact_type == "Contact" ? "selected" : "" }}>Contact</option>
                            <option value="Consultant" {{ $contact->contact_type == "Consultant" ? "selected" : "" }}>Consultant</option>
                            <option value="Contractor" {{ $contact->contact_type == "Contractor" ? "selected" : "" }}>Contractor</option>
                            <option value="Customer" {{ $contact->contact_type == "Customer" ? "selected" : "" }}>Customer</option>
                            <option value="Employee" {{ $contact->contact_type == "Employee" ? "selected" : "" }}>Employee</option>
                            <option value="Purchaser" {{ $contact->contact_type == "Purchaser" ? "selected" : "" }}>Purchaser</option>
                            <option value="Supplier" {{ $contact->contact_type == "Supplier" ? "selected" : "" }}>Supplier</option>
                            <option value="Vendor" {{ $contact->contact_type == "Vendor" ? "selected" : "" }}>Vendor</option>
                            <option value="Veterinarian" {{ $contact->contact_type == "Veterinarian" ? "selected" : "" }}>Veterinarian</option>
                            <option value="Wholesale Customer" {{ $contact->contact_type == "Wholesale Customer" ? "selected" : "" }}>Wholesale Customer</option>
                        </select>
                    </div>
      
                    <label>Keywords</label>
                    <div class="mb-3">
                        <input type="type" class="form-control" name="keywords" value="{{ $contact->keywords }}">
                    </div>
      
                    <label>Primary Phone</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="pphone" value="{{ $contact->phone }}">
                    </div>
      
                    <label>Mobile Phone</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="mphone" value="{{ $contact->mobile_phone }}">
                    </div>
      
                    <label>Fax</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fax" value="{{ $contact->fax }}">
                    </div>
      
                    <label>Company</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="company" value="{{ $contact->company }}">
                    </div>
      
                    <label>Country</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="country" value="{{ $contact->country }}">
                    </div>
      
                    <label>Address</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="address" value="{{ $contact->address }}">
                    </div>
      
                    <label>City</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="city" value="{{ $contact->city }}">
                    </div>
      
                    <label>State/Province</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="province" value="{{ $contact->province }}">
                    </div>
      
                    <label>Postal Code</label>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="postal_code" value="{{ $contact->code }}">
                    </div>
      
                    <label>Description</label>
                    <div class="mb-3">
                        <textarea class="form-control" aria-label="describe" name="description">
                            {{ $contact->description }}
                        </textarea>
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
    </div>
</div>
@include('contact.create')


@section('additional_js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        } );
    </script>
@endsection
@endsection