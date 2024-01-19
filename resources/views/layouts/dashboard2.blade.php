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

    <title>Dashboard | e-votting</title>

    @include('includes.style')
    
    </head>

    <body>

    <!-- @include('includes.sidebar') -->

    @yield('content')

    @include('includes.script')
    
    </body>
</html>
