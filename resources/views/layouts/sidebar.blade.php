    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item {{ Request::is('/dashboard') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>
            <li class="nav-item {{ Request::is('user') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="/user">
                    <i class="bi bi-person-square"></i>
                    <span>User</span>
                </a>
            </li>
            <!-- New Kategori Menu Item -->
        <li class="nav-item {{ Request::is('kategori-service') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/kategori-service">
                <i class="bi bi-tag-fill"></i>
                <span>Kategori Service</span>
            </a>
        </li>
        <!-- New Kategori Menu Item -->
        <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/services">
                <i class="bi bi-tag-fill"></i>
                <span>Service</span>
            </a>
        </li>
        <!-- New Kategori Menu Item -->
            <li class="nav-item {{ Request::is('kategori') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="/kategori">
                    <i class="bi bi-tag-fill"></i>
                    <span>Kategori Blog</span>
                </a>
            </li>
        <!-- New Artikel Menu Item -->
        <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/blog">
                <i class="bi bi-file-earmark-text"></i>
                <span>Blog</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="/contact-be">
                <i class="bi bi-file-earmark-text"></i>
                <span>Contact</span>
            </a>
        </li>
        </ul>

    </aside><!-- End Sidebar-->

    @push('extra-js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                var path = window.location.pathname;
                $('.menu li a').each(function() {
                    if ($(this).attr('href') === path) {
                        $(this).addClass('active');
                    }
                });
            });
        </script>
    @endpush
