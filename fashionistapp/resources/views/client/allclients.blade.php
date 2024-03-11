@extends('master')
@section('content')
<div class="page-content">


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    New Client
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
        </div>
        <div class="modal-body">
            <form id="save_form" action="/saveclient" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="recipient-name" class="form-label">Full Name:</label>
                  <input type="text" class="form-control" id="fullname" name="fullname">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="form-label">Phone Number:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="form-label">Gender:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="form-label">Address:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>

              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="form_submit()">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">All Clients Database</h6>

    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>SN</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Measurement</th>
            <th>Date Registered</th>
          </tr>
        </thead>
        <tbody>
            @php
                 $count = 1;
            @endphp

            @foreach ($clients as $client)

            <tr>
                <td>{{ $count }}</td>
                <td>{{ $client->name }}</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
           </tr>
           @php
                 $count = 0;
            @endphp
            @endforeach


        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>


<script type="text/javascript">
    function form_submit() {
        var fn = document.getElementById("fullname").value;
        if (fn == "") {
            alert("Enter Client's full name");
            return false;
            }


            document.getElementById("save_form").submit();
     }
    </script>
@endsection
