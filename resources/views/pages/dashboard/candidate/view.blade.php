@extends('layouts.dashboard')

@section('content')
<div class="layout-page">
    <div class="content-wrapper bg-white">
        <div class="container flex-grow-1 container-p-y">
        <div class="btn-toolbar form-group mb-3">
            <div class="">
            <a href="/dashboard/candidate/create" type="button" class="btn btn-primary waves-effect waves-light mr-1">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            <div class="card card-body">
            <table id="candidate" class="table is-striped is-fullwidth" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Departement</th>
                    <th>Result</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Ketua</td>
                    <td><span class="badge bg-label-primary me-1">2st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Ketua</td>
                    <td><span class="badge bg-label-danger me-1">1st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Alice Johnson</td>
                    <td>Sekretatis</td>
                    <td><span class="badge bg-label-primary me-1">1st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Bob Williams</td>
                    <td>Sekretaris</td>
                    <td><span class="badge bg-label-primary me-1">2st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Eva Davis</td>
                    <td>Bendahara</td>
                    <td><span class="badge bg-label-danger me-1">2st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Dodi Davy</td>
                    <td>Bendahara</td>
                    <td><span class="badge bg-label-danger me-1">1st</span></td>
                    <td>
                    <ul class=" d-flex align-items-center">
                        <li>
                        <i class='bx bxs-edit'></i>
                        </li>
                        <li>
                        <i class='bx bx-low-vision'></i>
                        </li>
                        <li>
                        <i class='bx bxs-trash'></i>
                        </li>
                    </ul>
                    </td>
                </tr>
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

<script>
    new DataTable('#candidate', {
      autoWidth: false,
      columnDefs: [
        {
          targets: ['_all'],
          className: 'mdc-data-table__cell',
        },
      ],
    });
</script>

@endSection