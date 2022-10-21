@extends('layout.header')

@section('page1', 'Pages')
@section('page2', 'Contacts')
@section('active_appointment', 'active')

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
            @include('contact.create')
          <div class="card-header pb-0">
            <h6>Authors</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table id="myTable">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Patient Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doctor</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reason</th>
                  </tr>
                </thead>
                <tbody>
                  @php $track = 1; @endphp
                  @foreach ($appointments as $appointment)
                    <tr>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{ $track }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $appointment->patient->name }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $appointment->department->name }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $appointment->date }}</span>
                      </td>
                      <td>
                          <p class="text-xs text-secondary mb-0">{{ $appointment->time }}</p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{ $appointment->doctor }}</p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{ $appointment->status }}</p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{ $appointment->reason }}</p>
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('appointment.edit', $appointment->id) }}" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <button class="deleteContact badge badge-sm bg-gradient-success" data-id="{{ $appointment->id }}" data-bs-toggle="modal" data-bs-target="#deleteContact">
                          Delete
                        </button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@include('contact.delete')

  @section('additional_js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $(".deleteContact").click(function(){
              console.log("Inisde");
              var deleteId = $(this).data('id');
              $("#id").val(deleteId);
            });
            $('#myTable').DataTable();
        } );
    </script>
@endsection
@endsection