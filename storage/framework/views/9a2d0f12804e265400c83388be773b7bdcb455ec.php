<!-- Main navigation -->
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
	<div class="pull-left image">
	  <img src="<?php echo e(asset('/bower_components/admin-lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
	</div>
	<div class="pull-left info">
	  <p><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->lastname); ?></p>
	  <!-- Status -->
	  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
  </div>

  <!-- search form (Optional) 
  <form action="#" method="get" class="sidebar-form">
	<div class="input-group">
	  <input type="text" name="q" class="form-control" placeholder="Search...">
	  <span class="input-group-btn">
		  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		  </button>
		</span>
	</div>
  </form>
   /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu" data-widget="tree">
		<li class=" <?php if(\Request::is('admin/dashboard')): ?> active <?php endif; ?> ">
			<a href="<?php echo e(url('/admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
		</li>

	<li class="treeview <?php if(\Request::is('admin/users')): ?> active <?php endif; ?>">
	  <a href="#"><i class="fa fa-users"></i> <span>Users</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		  </span>
	  </a>
	  <ul class="treeview-menu">
		<li>
			<a href="<?php echo e(url('/admin/users')); ?>"><i class="fa fa-users"></i> <span>All Users</span></a>
		</li>
		<!-- <li>
			<a href="<?php echo e(url('/admin/users')); ?>"><i class="fa fa-users"></i> <span>Add User</span></a>
		</li> -->
	  </ul>
	</li>
	<!-- Optionally, you can add icons to the links -->
	<li class="treeview <?php if(\Request::is('admin/vehicle') || \Request::is('admin/vehiclecategory')): ?> active <?php endif; ?> ">
	 <a href="<?php echo e(route('vehicle')); ?>"><i class="fa fa-car"></i> <span>Vehicle</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		  </span>
	  </a>
	  <ul class="treeview-menu">
	  	<li><a href="<?php echo e(url('/admin/vehicle')); ?>"><i class="fa fa-car"></i>Vehicle </a></li>
		<li><a href="<?php echo e(url('/admin/vehiclecategory')); ?>"><i class="fa fa-car"></i>Vehicle Category</a></li>
	
	  </ul>
	</li>



	 <li class="treeview <?php if(\Request::is('admin/pakagecategory') || \Request::is('admin/pakagetype')): ?> active <?php endif; ?> ">
	 <a href="<?php echo e(url('/admin/pakagecategory')); ?>"><i class="fa fa-list"></i> <span>Pakage Manager
</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		  </span>
	  </a>
	  <ul class="treeview-menu">
	  	<li><a href="<?php echo e(url('/admin/pakagecategory')); ?>"><i class="fa fa-list"></i>Category</a></li>
		<li><a href="<?php echo e(url('/admin/pakagetype')); ?>"><i class="fa fa-list"></i>Type</a></li>
		<li><a href="<?php echo e(url('/admin/vehiclecategory')); ?>"><i class="fa fa-list"></i>Pakage</a></li>
	  </ul>
	</li>


	<li class="treeview <?php if(\Request::is('admin/roles') || \Request::is('admin/permissions') ): ?> active <?php endif; ?>">
	  <a href="<?php echo e(url('/admin/roles')); ?>"><i class="fa fa-user"></i> <span>Roles</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		  </span>
	  </a>
	  <ul class="treeview-menu">
		<li>
			<a href="<?php echo e(url('/admin/roles')); ?>"><i class="fa fa-user"></i> <span>All Roles</span></a>
		</li>
		<li>
			<a href="<?php echo e(url('/admin/permissions')); ?>"><i class="fa fa-key"></i> <span>All Permissions</span></a>
		</li>
	  </ul>
	</li>


  </ul>
  <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->