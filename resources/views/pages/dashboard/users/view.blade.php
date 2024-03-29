@extends('layouts.dashboard')

@section('content')
<div class="layout-page">
    <div class="content-wrapper bg-white">
        <div class="container flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard / </span>Users</h4>
        <div class="btn-toolbar form-group mb-3">
            <div class="">
            <a href="/dashboard/users/create" type="button" class="btn btn-primary waves-effect waves-light mr-1">ADD NEW</a>
                <a href="/dashboard/users/import" type="button" class="btn btn-primary waves-effect waves-light mr-1">IMPORT EXCEL</a>
            </div>
            <div class="filter">
                <select class="form-control ml-1 border-primary" id="selectDropdown">
                    <option value="">Pemilihan Ketua</option>
                    <option value="">Pemilihan Presiden</option>
                    <option value="">Pemilihan RT</option>
                    <option value="">Pemilihan Dukuh</option>
                </select>
            </div>
            <div class="ml-auto">
                <a href="/dashboard/users/import" type="button" class="btn btn-warning waves-effect waves-light mr-1">Send All Token</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="card card-body">
            <table id="users" class="table is-striped is-fullwidth" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>No WhatsApp</th>
                    <th>Token</th>
                    <th>Progress</th>
                    <th>Status</th>
                </tr>
                </thead>
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
    $(function () {
        $('#users').DataTable({
            processing: true,
            serverSide: false,
            data: {!! $data !!},
            columns: [
                { 
                    data: null,
                    name: 'number',
                    orderable: false,
                    searchable: false,
                    render: function (data, type, full, meta) {
                        return meta.row + 1;
                    }
                },
                { data: 'name', name: 'name' },
                { data: 'notelpon', name: 'notelpon' },
                { data: 'token', name: 'token' },
                { 
                    data: 'progress',
                    name: 'progress',
                    render: function (data, type, full, meta) {
                        let badgeClass = (data === 'pending') ? 'badge bg-label-danger me-1' : 'badge bg-label-primary me-1';
                        return '<span class="' + badgeClass + '">' + data + '</span>';
                    }
                },
                    {
                        data: 'id',
                        name: 'action',
                        render: function (data, type, full, meta) {
                            return '<ul class="d-flex align-items-center">' +
                                '<li><i class="bx bxs-edit"></i></li>' +
                                '<li><i class="bx bx-low-vision"></i></li>' +
                                '<li><i class="bx bxs-trash"></i></li>' +
                                '</ul>';
                        }
                    },
            ]
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#selectDropdown').select2();
    });
</script>
@endSection