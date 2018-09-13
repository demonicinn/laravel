<aside class="sidebar-left">
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            
            <!--Dashboard-->
            <li class="treeview {{ ($active=='dashboard'?'active':'') }}"><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

            <!--programs-->
            <li class="treeview {{ ($active=='programs'?'active':'') }}"><a href="{{ route('programs.index') }}"><i class="fa fa-id-card-o"></i> <span>Programs</span></a></li>

            <!--Orders-->
            <li class="treeview {{ ($active=='orders'?'active':'') }}"><a href="{{ route('admin.orders') }}"><i class="fa fa-bar-chart"></i> <span>Orders</span></a></li>

            <!--Users-->
            <li class="treeview {{ ($active=='users'?'active':'') }}"><a href="{{ route('admin.users') }}"><i class="fa fa-id-card-o"></i> <span>Users</span></a></li>

            <!--Stories-->
            <li class="treeview {{ ($active=='stories'?'active':'') }}"><a href="{{ route('stories.index') }}"><i class="fa fa-sticky-note-o"></i> <span>Stories</span></a></li>

            <!--Settings-->
            <li class="treeview {{ ($active=='settings'?'active':'') }}">
                <a href="javascript:void(0)"><i class="fa fa-gear"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!--Site Configuration-->
                    <li class="{{ ($title=='Configuration'?'active':'') }}"><a href="{{ route('configuration.index') }}">Site Configuration</a></li>

                    <!--Pages-->
                    <li class="{{ ($title=='Pages'?'active':'') }}"><a href="{{ route('pages.index') }}">Pages</a></li>

                    <!--Designs-->
                    <li class="{{ ($title=='Designs'?'active':'') }}"><a href="{{ route('designs.index') }}">Designs</a></li>

                </ul>
            </li>


           
        </ul>
        <!-- /. sidebar-menu -->
    </section>
</aside>