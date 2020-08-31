<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.layouts.css-files')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')
    
    <div class="content-wrapper">
    @section('main-content')

    @show 
    </div>
    @include('admin.layouts.footer')

    @include('admin.layouts.js-files')

</div>
</body>
</html>