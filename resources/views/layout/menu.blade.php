
<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <a class="h5 text-white" href="index.php">
                    <img src="{{asset('assets/img/logo-light.png')}}" alt="logo" class="logo">
                    <span class="h5 sidebar-mini-hide">Digi-Sail</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li><a class="active" href="{{URL::to('/experince')}}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Experiences List</span></a></li>
                    <li><a class="active" href="{{URL::to('/experince/create')}}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Add Experience</span></a></li>
                    <li><a href="evaluation.php"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Evaluation</span></a></li>
                    <li><a href="{{Url('/project')}}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Add Project</span></a></li>
                    <li><a href="{{Url('/post')}}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Add Post</span></a></li>
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->
