@extends('layouts.dashboard')

@section('content')
<div class="layout-page">
    <div class="content-wrapper bg-white">
        <div class="container flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span>Candidate</h4>
        <div class="btn-toolbar form-group mb-3">
            <div class="add">
                <a href="/dashboard/candidate/create" type="button" class="btn btn-primary waves-effect waves-light mr-1">ADD NEW</a>
            </div>
            <div class="filter">
                <select class="form-control ml-1 border-primary" id="">
                    <option value="" disabled selected>Pilih Event</option>
                    @foreach($events as $id => $title)
                        <option value="{{ $id }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="card card-body">
            <table id="candidate" class="table is-striped is-fullwidth" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidates as $key => $candidate)
                    <tr data-event-id="{{ $candidate->event_id }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $candidate->name }}</td>
                        <td>{{ $candidate->department }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm"><i class='bx bx-pencil'></i></a>
                            <a href="" class="btn btn-info btn-sm"><i class='bx bx-low-vision'></i></a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this candidate?')"><i class='bx bx-trash'></i></button>
                            </form>
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
<!-- / Content -->


<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bulma.min.js"></script>

<!-- <script>
    new DataTable('#candidate', {
      autoWidth: false,
      columnDefs: [
        {
          targets: ['_all'],
          className: 'mdc-data-table__cell',
        },
      ],
    });
</script> -->
<script>
$(document).ready(function() {
    var table = $('#candidate').DataTable();

    $('#event_filter').on('change', function() {
        var event_id = $(this).val();

        table.columns(3).search('').draw(); // Reset search pada kolom "Status"
        if (event_id) {
            table.columns(0).search(event_id).draw();
        } else {
            table.draw();
        }
    });
});
</script>

<script>
    $(document).ready(function() {
        // Inisialisasi Select2 pada elemen select dengan id selectDropdown
        $('#selectDropdown').select2();
    });
</script>

@endSection