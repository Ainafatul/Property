<!doctype html>
<html lang="en">
@include('layout.Head')
<body>
<div class="page-wrapper chiller-theme toggled" style="background: #E5F5F3">
    @include('admin.Sidebar')

    <main class="page-content" style="overflow-y: auto;max-height: 100vh;padding-bottom: 128px">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
</div>
<script>
    @include('layout.Script')
    @stack('scripts')
</script>
</body>
</html>
