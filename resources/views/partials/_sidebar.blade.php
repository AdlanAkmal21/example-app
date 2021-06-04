<div class="sidebar" data-image="{{ asset('assets/img/sidebar-5.jpg') }}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                Example App
            </a>
        </div>
        <ul class="nav">
            @auth
                @if (Auth::user()->role_id == 1)
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin') }}">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        <i class="nc-icon nc-ruler-pencil"></i>
                        <p>Course</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('programmes.index') }}">
                        <i class="nc-icon nc-notes"></i>
                        <p>Programme</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('groups.index') }}">
                        <i class="nc-icon nc-paper-2"></i>
                        <p>Group</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('semesters.index') }}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Semester</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('users.index') }}">
                        <i class="nc-icon nc-circle-09"></i>
                        <p>User</p>
                    </a>
                </li>
                @elseif(Auth::user()->role_id == 2)
                <li>
                    <a class="nav-link active" href="{{ route('coordinator') }}">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @elseif(Auth::user()->role_id == 3)
                <li>
                    <a class="nav-link active" href="{{ route('tc') }}">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @endif
            @endauth
        </ul>
    </div>
</div>
