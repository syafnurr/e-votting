@extends('layouts.dashboard')

@section('content')
<div class="layout-page">
    <div class="content-wrapper bg-white">
        <div class="container flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Event</h4>
        <div class="btn-toolbar form-group mb-3">
            <div class="">
            <a href="/dashboard/event/create" type="button" class="btn btn-primary waves-effect waves-light mr-1">ADD NEW</a>
            </div>
        </div>
        <div class="row">
            <div class="card card-body">
            <table id="events" class="table is-striped is-fullwidth" style="width:100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Pelaksanaan</th>
                    <th>Dimulai</th>
                    <th>Selesai</th>
                    <th>Pengumuman</th>
                    <!-- <th>Jam Pengumuman</th> -->
                    <th style="width: 170px;">Action</th>
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
    $('#events').DataTable({
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
            { data: 'title', name: 'title' },
            { 
                data: 'tgl_pemilihan', 
                name: 'tgl_pemilihan',
                render: function (data, type, full, meta) {
                    return data && '<span class="badge text-bg-info">' + data + '</span>';
                }
            },
            { 
                data: 'jam_dimulai', 
                name: 'jam_dimulai',
                render: function (data, type, full, meta) {
                    return data && '<span class="badge text-bg-success">' + data + '</span>';
                }
            },
            { 
                data: 'jam_selesai', 
                name: 'jam_selesai',
                render: function (data, type, full, meta) {
                    return data && '<span class="badge text-bg-warning">' + data + '</span>';
                }
            },
            { 
                data: 'tgl_pengumuman', 
                name: 'tgl_pengumuman',
                render: function (data, type, full, meta) {
                    return data && '<span class="badge text-bg-info">' + data + '</span>';
                }
            },
            {
                data: 'id',
                name: 'action',
                render: function (data, type, full, meta) {
                    return '<div class="btn-group" role="group">' +
                        '<a href="/dashboard/event/edit/' + data + '" class="btn btn-primary btn-sm"><i class="bx bx-pencil"></i></a> ' + // Tambahkan spasi setelah tombol pertama
                        '<a href="/dashboard/event/show/' + data + '" class="btn btn-info btn-sm"><i class="bx bx-low-vision"></i></a> ' + // Tambahkan spasi setelah tombol kedua
                        '<form action="/dashboard/event/delete/' + data + '" method="POST" class="d-inline">' +
                        '@csrf' +
                        '@method("DELETE")' +
                        '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this candidate?\')"><i class="bx bx-trash"></i></button>' +
                        '</form>' +
                        '</div>';
                }
            },

        ]
    });
});

</script>

@endSection