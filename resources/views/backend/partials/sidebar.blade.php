<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon far fa-circle text-info"></i>
						<p>Dashboard</p>
					</a>
				</li>

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Users
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.users.index') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.users.create') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Categories
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.categories.index') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.categories.create') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Products
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="{{ route('admin.products.index') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('admin.products.create') }}" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="{{ route('logout') }}" class="nav-link">
						<i class="nav-icon far fa-circle text-info"></i>
						<p>Logout</p>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</aside>
