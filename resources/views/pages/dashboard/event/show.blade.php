@extends('layouts.dashboard')

@section('content')
 <!-- Content -->
 <div class="layout-page">
    <div class="content-wrapper bg-light">
        <div class="">
        <div class="row d-flex justify-content-center align-items-center h-100 p-6">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Event /</span> Create</h4>
            <div class="col-xl-12">
                <form action="/dashboard/event/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card" style="border-radius: 15px;">
                    <div class="card-body mx-4">
                        <div class="row align-items-center pt-4 pb-3">
                        <div class="col-md-3 ps-3">
                            <h6 class="mb-0">Name Event</h6>
                        </div>
                        <div class="col-md-9 pe-5">
                            <input type="text" class="form-control form-control-lg" name="title" placeholder="Pemilihan Ketua BEM" value="{{ $data->title }}"/>
                        </div>
                        </div>
                        <hr class="mx-n3">
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-3">
                                <h6 class="mb-0">Tanggal Pemilihan</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <input maxlength="200" type="date" name="tgl_pemilihan" required="required" class="form-control" placeholder="Pilih Tanggal Pemilihan" value="{{ $data->tgl_pemilihan }}"/>
                            </div>
                        </div>
                        <hr class="mx-n3">
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-3">
                                <h6 class="mb-0">Pilih Jam Dimulai</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                            <input maxlength="200" type="text" name="jam_dimulai" required="required" class="form-control" name="time" placeholder = "Pilih jam dimulai pemilihan (WIB)" value="{{ $data->jam_dimulai }}">                              
                            </div>
                        </div>
                        <hr class="mx-n3">
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-3">
                                <h6 class="mb-0">Pilih Jam Selesai</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <input maxlength="200" type="text" required="required" class="form-control" name="jam_selesai" placeholder = "Pilih jam dimulai pemilihan (WIB)" value="{{ $data->jam_selesai }}">                              
                            </div>
                        </div>
                        <hr class="mx-n3">
                        <div class="row align-items-center py-3">
                            <div class="col-md-3 ps-3">
                                <h6 class="mb-0">Live Counting</h6>
                            </div>
                            <div class="col-md-9 pe-5">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                </div>
                            </div>
                        </div>
                        <hr class="mx-n3">
                        <div id="tanggalPengumuman">
                            <div class="row align-items-center py-3 form-group">
                                <div class="col-md-3 ps-3">
                                    <h6 class="mb-0">Tanggal Pengumuman</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input maxlength="200" type="date" name="tgl_pengumuman" class="form-control" placeholder="Pilih Tanggal Pemilihan" value="{{ $data->tgl_pengumuman }}"/>
                                </div>
                            </div>
                            <hr class="mx-n3">
                        </div>
                        <div id="waktuPengumuman">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-3">
                                    <h6 class="mb-0">Jam Pengumuman</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                <input maxlength="200" type="text" class="form-control" name="jam_pengumuman" placeholder = "Pilih Jam Dimulai Pemilihan (WIB)" value="{{ $data->jam_pengumuman }}">                              
                                </div>
                            </div>
                            <hr class="mx-n3">
                        </div>
                        <div class="px-5 py-4 d-flex justify-content-end">
                        <a href="/dashboard/event" type="button" class="btn btn-warning btn-lg mr-3">Back</a>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

<!-- Clock Picker -->
<script>
    // Pastikan dokumen telah dimuat sebelum menjalankan script
    $(document).ready(function () {
        // Inisialisasi clockpicker pada elemen input dengan nama "time"
        $("input[name=time]").clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            default: 'now',
            donetext: "Select",
            init: function () {
                console.log("clockpicker initiated");
            },
            beforeShow: function () {
                console.log("before show");
            },
            afterShow: function () {
                console.log("after show");
            },
            beforeHide: function () {
                console.log("before hide");
            },
            afterHide: function () {
                console.log("after hide");
            },
            beforeHourSelect: function () {
                console.log("before hour selected");
            },
            afterHourSelect: function () {
                console.log("after hour selected");
            },
            beforeDone: function () {
                console.log("before done");
            },
            afterDone: function () {
                console.log("after done");
            }
        });
    });
</script>

@endSection