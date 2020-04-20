<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="{{ url('/home') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Channels</span> <span class="label label-important">V</span></a>
      <ul>
        <li><a href="{{ route('channel.create') }}">Add Channels</a></li>
        <li><a href="{{ route('channel.index') }}">View Channels</a></li>
       </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Visualisation</span></a></li>
    
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Profile</span> <span class="label label-important">V</span></a>
      <ul>
        <li><a href="{{ url('/admin/add-product') }}">Edit Profile</a></li>
        <li><a href="{{ url('/settings') }}">Settings</a></li>
        <li><a href="{{ url('/logout')}}">Logout</a></li>
     
      </ul>
    </li>
</div>
<!--sidebar-menu-->