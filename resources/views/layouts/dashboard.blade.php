<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>e-votting</title>

    <meta name="description" content="" />

    @include('includes.style')
    
  </head>

  <body>

    @include('includes.sidebar')


    @yield('content')

    <!-- Content -->
<!-- <div class="layout-page">
    <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Status</h4>
        <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
            <div class="col-lg-2 col-md-2 col-2 mb-4">
                <div class="card rounded">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img
                            src="{{ url('assets/img/icons/users.png') }}"
                            alt="chart success"
                            class="rounded" />
                        </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Users</span>
                    <h3 class="card-title mb-2">12,628</h3>
                </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-2 mb-4">
                <div class="card rounded">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ url('assets/img/icons/content.png') }}" alt="Credit Card" class="rounded" />
                        </div>
                    </div>
                    <span class="d-block mb-1">Content</span>
                    <h3 class="card-title text-nowrap mb-2">6</h3>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-3 mb-4">
                <div class="card rounded">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ url('assets/img/icons/completed.png') }}" alt="Credit Card" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Users Completed</span>
                    <h3 class="card-title mb-2">11,357</h3>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-3 mb-4">
                <div class="card rounded">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ url('assets/img/icons/pending.png') }}" alt="Credit Card" class="rounded" />
                        </div>
                    </div>
                    <span class="fw-medium d-block mb-1">Users Pending</span>
                    <h3 class="card-title mb-2">1,357</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div> 
</div> -->
<!-- / Content -->
   
      
    @include('includes.script')

  </body>
</html>
