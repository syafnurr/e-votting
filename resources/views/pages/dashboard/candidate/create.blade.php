@extends('layouts.dashboard')

@section('content')
 <!-- Content -->
 <div class="layout-page">
    <div class="content-wrapper bg-light">
        <div class="">
        <div class="row d-flex justify-content-center align-items-center h-100 p-6">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Candidate /</span> Create</h4>
            <div class="col-xl-12">
            <form action="">
                <div class="card" style="border-radius: 15px;">
                <div class="card-body mx-4">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-3">
                        <h6 class="mb-0">Event</h6>
                    </div>
                    <div class="filter col-md-9 pe-5 mb-4">
                        <select class="form-control form-control-lg" id="selectDropdown">
                            <option value="" disabled>Pilih</option>
                            <option value="Ketua">Pemilihan Ketua</option>
                            <option value="Presiden">Pemilihan Presiden</option>
                            <option value="RT">Pemilihan RT</option>
                            <option value="Dukuh">Pemilihan Dukuh</option>
                        </select>
                    </div>
                    <hr class="mx-n3 mt-4">
                    <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-3">
                        <h6 class="mb-0">Full name</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap"/>
                    </div>
                    </div>
                    <hr class="mx-n3">
                    <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-3">
                        <h6 class="mb-0">Departement</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input type="text" class="form-control form-control-lg" placeholder="Ketua BEM 2023" />
                    </div>
                    </div>
                    <hr class="mx-n3">
                    <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-3">
                        <h6 class="mb-0">Image</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input class="form-control form-control-lg" id="" type="file" />
                        <div class="small text-muted mt-2">*file must under 5Mb</div>
                    </div>
                    </div>
                    <hr class="mx-n3">
                    <div class="px-5 py-4 d-flex justify-content-end">
                    <a href="/dashboard/candidate" type="button" class="btn btn-warning btn-lg mr-3">Back</a>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <!-- Content -->
    @endSection