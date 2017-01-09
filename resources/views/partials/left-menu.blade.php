<!-- Start Left Menu Section -->
<div class="left-side-menu">
    <!--  Menu -->
    <div class="sidebar-menu">
        <ul>
            <li class="has-sub">
                <a class="waves-effect waves-light" href=""> 
                    <i class="layout-icon icon_id-2" aria-hidden="true"></i> <span>Cards</span>
                </a>
            </li>
            <li class="has-sub">
                <a class="waves-effect waves-light" href=""> 
                    <i class="layout-icon icon_creditcard" aria-hidden="true"></i> <span>Membership</span>
                </a>
            </li>
            @can('admin-tools')
            <li class="has-sub">
                <a class="waves-effect waves-light" href="{{ route('admin.dashboard') }}"> 
                    <i class="layout-icon icon_cog" aria-hidden="true"></i> <span>Admin</span>
                </a>
            </li>
            @endcan
        </ul>
    </div>
    <div class="clearfix"></div>
    <!--  Help Box -->
    <div class="sitebar-footer">
        <a href="" data-placement="top" data-toggle="tooltip" data-original-title="Lock Screen">
            <i class="icon icon_lock_alt" aria-hidden="true"></i>
        </a>
    </div>
</div>
<!-- End Left Menu Section -->