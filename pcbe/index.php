<?php
session_start();
if (!isset($_SESSION['admin'])) {
	// header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Peoples - coop - Admin Dashboard ">

	<title>Peoples - coop - Admin Dashboard </title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

	<!-- peoplescoop CSS -->
	<link id="peoplescoop-css" href="assets/css/peoplescoop.css" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="index.php" title="peoplescoop">
						<img class="ec-brand-icon" src="assets/img/favicon.png" alt="" />
						<span class="ec-brand-name text-truncate">ADMIN</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li class="active">
							<a class="sidenav-item-link" href="index.php">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>

						<!-- Vendors -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group-outline"></i>
								<span class="nav-text">Vendors</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="vendor-card.html">
											<span class="nav-text">Vendor Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="vendor-list.html">
											<span class="nav-text">Vendor List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="vendor-profile.html">
											<span class="nav-text">Vendors Profile</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Users</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									<li>
										<a class="sidenav-item-link" href="user-card.html">
											<span class="nav-text">User Grid</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="user-list.html">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.html">
											<span class="nav-text">Users Profile</span>
										</a>
									</li>
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="main-category.html">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="sub-category.html">
											<span class="nav-text">Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Products</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="product-add.php">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-list.php">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-grid.html">
											<span class="nav-text">Grid Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="product-detail.html">
											<span class="nav-text">Product Detail</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Orders</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="new-order.html">
											<span class="nav-text">New Order</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-history.html">
											<span class="nav-text">Order History</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="order-detail.html">
											<span class="nav-text">Order Detail</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="invoice.html">
											<span class="nav-text">Invoice</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Reviews -->
						<li>
							<a class="sidenav-item-link" href="review-list.html">
								<i class="mdi mdi-star-half"></i>
								<span class="nav-text">Reviews</span>
							</a>
						</li>

						<!-- Brands -->
						<li>
							<a class="sidenav-item-link" href="brand-list.html">
								<i class="mdi mdi-tag-faces"></i>
								<span class="nav-text">Brands</span>
							</a>
							<hr>
						</li>

						<!-- Authentication -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-login"></i>
								<span class="nav-text">Authentication</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="authentication" data-parent="#sidebar-menu">
									<li class="">
										<a href="sign-in.html">
											<span class="nav-text">Sign In</span>
										</a>
									</li>
									<li class="">
										<a href="sign-up.html">
											<span class="nav-text">Sign Up</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Icons -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-diamond-stone"></i>
								<span class="nav-text">Icons</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="icons" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="material-icon.html">
											<span class="nav-text">Material Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="font-awsome-icons.html">
											<span class="nav-text">Font Awsome Icon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="flag-icon.html">
											<span class="nav-text">Flag Icon</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Other Pages -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-image-filter-none"></i>
								<span class="nav-text">Other Pages</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="otherpages" data-parent="#sidebar-menu">
									<li class="has-sub">
										<a href="404.html">404 Page</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="assets/img/user/user.png" class="user-image" alt="User Image" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
										<div class="d-inline-block">
											John Deo <small class="pt-1">john.example@gmail.com</small>
										</div>
									</li>
									<li>
										<a href="user-profile.html">
											<i class="mdi mdi-account"></i> My Profile
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-email"></i> Message
										</a>
									</li>
									<li>
										<a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
									</li>
									<li class="right-sidebar-in">
										<a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
									</li>
									<li class="dropdown-footer">
										<a href="index.php"> <i class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<li class="dropdown notifications-menu custom-dropdown">
								<button class="dropdown-toggle notify-toggler custom-dropdown-toggler">
									<i class="mdi mdi-bell-outline"></i>
								</button>

								<div class="card card-default dropdown-notify dropdown-menu-right mb-0">
									<div class="card-header card-header-border-bottom px-3">
										<h2>Notifications</h2>
									</div>

									<div class="card-body px-0 py-0">
										<ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab"
											role="tablist">
											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link active pb-3" id="home2-tab"
													data-bs-toggle="tab" data-bs-target="#home2" role="tab"
													aria-controls="home2" aria-selected="true">All (10)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
													data-bs-target="#profile2" role="tab" aria-controls="profile2"
													aria-selected="false">Msgs (5)</a>
											</li>

											<li class="nav-item mx-3 my-0 py-0">
												<a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
													data-bs-target="#contact2" role="tab" aria-controls="contact2"
													aria-selected="false">Others (5)</a>
											</li>
										</ul>

										<div class="tab-content" id="myNotifications">
											<div class="tab-pane fade show active" id="home2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Nitin</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg"
																	alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Lovina</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Crinali</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification event-active">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Yearly Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i
																	class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span
																		class="my-1 btn btn-sm btn-success">Accept</span>
																	<span
																		class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span
																		class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</ul>
											</div>

											<div class="tab-pane fade" id="profile2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u6.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Hardiko</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u7.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browin</h4>
																	<p class="last-msg">Nam ut nisi erat. Ut quis tortor
																		varius, hendrerit arcu quis, congue nisl. In
																		scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification media-active">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u1.jpg"
																	alt="Image">
																<span class="status active"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">jenelia</h4>
																	<p class="last-msg">Donec mattis augue a nisl
																		consequat, nec imperdiet ex rutrum. Fusce et
																		vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-white">
																		<i class="mdi mdi-clock-outline"></i> Just
																		now...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u2.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Bhavlio</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">
															<div class="position-relative mr-3">
																<img class="rounded-circle" src="assets/img/user/u5.jpg"
																	alt="Image">
																<span class="status away"></span>
															</div>
															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Browini</h4>
																	<p class="last-msg">Lorem ipsum dolor sit, amet
																		consectetur adipisicing elit. Nam itaque
																		doloremque odio, eligendi delectus vitae.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

												</ul>
											</div>

											<div class="tab-pane fade" id="contact2" role="tabpanel">
												<ul class="list-unstyled" data-simplebar style="height: 360px">
													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification event-active">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
																<i class="mdi mdi-calendar-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Upcomming event added</h4>
																	<p class="last-msg font-size-14">03/Jan/2020 (1pm -
																		2pm)</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 10 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
																<i class="mdi mdi-chart-areaspline font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Sales report</h4>
																	<p class="last-msg font-size-14">Lorem ipsum dolor
																		sit, amet consectetur adipisicing elit. Nam
																		itaque doloremque odio, eligendi delectus vitae.
																	</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 1 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
																<i
																	class="mdi mdi-account-multiple-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Request</h4>
																	<p class="last-msg font-size-14">Add Dany Jones as
																		your contact consequat nec imperdiet ex rutrum.
																		Fusce et vehicula enim. Sed in enim.</p>

																	<span
																		class="my-1 btn btn-sm btn-success">Accept</span>
																	<span
																		class="my-1 btn btn-sm btn-secondary">Delete</span>

																	<span
																		class="font-size-12 font-weight-medium text-secondary d-block">
																		<i class="mdi mdi-clock-outline"></i> 5 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
																<i class="mdi mdi-server-network-off font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">Server overloaded</h4>
																	<p class="last-msg font-size-14">Donec mattis augue
																		a nisl consequat, nec imperdiet ex rutrum. Fusce
																		et vehicula enim. Sed in enim eu odio vehic.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 30 min
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>

													<li>
														<a href="javscript:void(0)"
															class="media media-message media-notification">

															<div
																class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-purple text-white">
																<i class="mdi mdi-playlist-check font-size-20"></i>
															</div>

															<div class="media-body d-flex justify-content-between">
																<div class="message-contents">
																	<h4 class="title">New Task complete</h4>
																	<p class="last-msg font-size-14">Nam ut nisi erat.
																		Ut quis tortor varius, hendrerit arcu quis,
																		congue nisl. In scelerisque, sem ut ve.</p>

																	<span
																		class="font-size-12 font-weight-medium text-secondary">
																		<i class="mdi mdi-clock-outline"></i> 2 hrs
																		ago...
																	</span>
																</div>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<ul class="dropdown-menu dropdown-menu-right d-none">
									<li class="dropdown-header">You have 5 notifications</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-plus"></i> New user registered
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-remove"></i> User deleted
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 07 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-chart-areaspline"></i> Sales report is ready
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 12 PM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-account-supervisor"></i> New client
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 10 AM</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="mdi mdi-server-network-off"></i> Server overloaded
											<span class=" font-size-12 d-inline-block float-right"><i
													class="mdi mdi-clock-outline"></i> 05 AM</span>
										</a>
									</li>
									<li class="dropdown-footer">
										<a class="text-center" href="#"> View All </a>
									</li>
								</ul>
							</li>
							<li class="right-sidebar-in right-sidebar-2-menu">
								<i class="mdi mdi-settings-outline mdi-spin"></i>
							</li>
						</ul>
					</div>
				</nav>
			</header>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<!-- Top Statistics -->
					<div class="row">
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-1">
								<div class="card-body">
									<h2 class="mb-1">1,503</h2>
									<p>Daily Signups</p>
									<span class="mdi mdi-account-arrow-left"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-2">
								<div class="card-body">
									<h2 class="mb-1">79,503</h2>
									<p>Daily Visitors</p>
									<span class="mdi mdi-account-clock"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-3">
								<div class="card-body">
									<h2 class="mb-1">15,503</h2>
									<p>Daily Order</p>
									<span class="mdi mdi-package-variant"></span>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
							<div class="card card-mini dash-card card-4">
								<div class="card-body">
									<h2 class="mb-1">$98,503</h2>
									<p>Daily Revenue</p>
									<span class="mdi mdi-currency-usd"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- Sales Graph -->
							<div id="user-acquisition" class="card card-default">
								<div class="card-header">
									<h2>Sales Report</h2>
								</div>
								<div class="card-body">
									<ul class="nav nav-tabs nav-style-border justify-content-between justify-content-lg-start border-bottom"
										role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-bs-toggle="tab" href="#todays" role="tab"
												aria-selected="true">Today's</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#monthly" role="tab"
												aria-selected="false">Monthly </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-bs-toggle="tab" href="#yearly" role="tab"
												aria-selected="false">Yearly</a>
										</li>
									</ul>
									<div class="tab-content pt-4" id="salesReport">
										<div class="tab-pane fade show active" id="source-medium" role="tabpanel">
											<div class="mb-6" style="max-height:247px">
												<canvas id="acquisition" class="chartjs2"></canvas>
												<div id="acqLegend" class="customLegend mb-2"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4 col-md-12 p-b-15">
							<!-- Doughnut Chart -->
							<div class="card card-default">
								<div class="card-header justify-content-center">
									<h2>Orders Overview</h2>
								</div>
								<div class="card-body">
									<canvas id="doChart"></canvas>
								</div>
								<a href="#" class="pb-5 d-block text-center text-muted"><i
										class="mdi mdi-download mr-2"></i> Download overall report</a>
								<div class="card-footer d-flex flex-wrap bg-white p-0">
									<div class="col-6">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #4c84ff"></i>Order Completed</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #80e1c1 "></i>Order Unpaid</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #ff7b7b "></i>Order returned</li>
											</ul>
										</div>
									</div>
									<div class="col-6 border-left">
										<div class="p-20">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #8061ef"></i>Order Pending</li>
												<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #ffa128"></i>Order Canceled</li>
												<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #7be6ff"></i>Order Broken</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-md-12 p-b-15">
							<!-- User activity statistics -->
							<div class="card card-default" id="user-activity">
								<div class="no-gutters">
									<div>
										<div class="card-header justify-content-between">
											<h2>User Activity</h2>
											<div class="date-range-report ">
												<span></span>
											</div>
										</div>
										<div class="card-body">
											<div class="tab-content" id="userActivityContent"> 
												<div class="tab-pane fade show active" id="user" role="tabpanel">
													<canvas id="activity" class="chartjs"></canvas>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex flex-wrap bg-white border-top">
											<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-12 p-b-15">
							<div class="card card-default">
								<div class="card-header flex-column align-items-start">
									<h2>Current Users</h2>
								</div>
								<div class="card-body">
									<canvas id="currentUser" class="chartjs"></canvas>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white border-top">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-8 col-12 p-b-15">
							<!-- World Chart -->
							<div class="card card-default" id="analytics-country">
								<div class="card-header justify-content-between">
									<h2>Purchased by Country</h2>
									<div class="date-range-report ">
										<span></span>
									</div>
								</div>
								<div class="card-body vector-map-world-2">
									<div id="regions_purchase" style="height: 100%; width: 100%;"></div>
								</div>
								<div class="border-top mt-3">
									<div class="row no-gutters">
										<div class="col-lg-6">
											<div class="world-data-chart border-bottom pt-15px pb-15px">
												<canvas id="hbar1" class="chartjs"></canvas>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="world-data-chart pt-15px pb-15px">
												<canvas id="hbar2" class="chartjs"></canvas>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white">
									<a href="#" class="text-uppercase py-3">In-Detail Overview</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12 p-b-15">
							<!-- Top Sell Table -->
							<div class="card card-default Sold-card-table">
								<div class="card-header justify-content-between">
									<h2>Sold by Items</h2>
									<div class="tools">
										<button class="text-black-50 mr-2 font-size-20"><i
												class="mdi mdi-cached"></i></button>
										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button"
												id="dropdown-units" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" data-display="static"></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="#">Action</a></li>
												<li class="dropdown-item"><a href="#">Another action</a></li>
												<li class="dropdown-item"><a href="#">Something else here</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body py-0 compact-units" data-simplebar style="height: 534px;">
									<table class="table ">
										<tbody>
											<tr>
												<td class="text-dark">Backpack</td>
												<td class="text-center">9</td>
												<td class="text-right">33% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">T-Shirt</td>
												<td class="text-center">6</td>
												<td class="text-right">150% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Coat</td>
												<td class="text-center">3</td>
												<td class="text-right">50% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Necklace</td>
												<td class="text-center">7</td>
												<td class="text-right">150% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Jeans Pant</td>
												<td class="text-center">10</td>
												<td class="text-right">300% <i
														class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Shoes</td>
												<td class="text-center">5</td>
												<td class="text-right">100% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">T-Shirt</td>
												<td class="text-center">6</td>
												<td class="text-right">150% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Watches</td>
												<td class="text-center">18</td>
												<td class="text-right">160% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">Inner</td>
												<td class="text-center">156</td>
												<td class="text-right">120% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
											<tr>
												<td class="text-dark">T-Shirt</td>
												<td class="text-center">6</td>
												<td class="text-right">150% <i
														class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i>
												</td>
											</tr>
										</tbody>
									</table>

								</div>
								<div class="card-footer d-flex flex-wrap bg-white">
									<a href="#" class="text-uppercase py-3">View Report</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 p-b-15">
							<!-- Recent Order Table -->
							<div class="card card-table-border-none card-default recent-orders" id="recent-orders">
								<div class="card-header justify-content-between">
									<h2>Recent Orders</h2>
									<div class="date-range-report">
										<span></span>
									</div>
								</div>
								<div class="card-body pt-0 pb-5">
									<table class="table card-table table-responsive table-responsive-large"
										style="width:100%">
										<thead>
											<tr>
												<th>Order ID</th>
												<th>Product Name</th>
												<th class="d-none d-lg-table-cell">Units</th>
												<th class="d-none d-lg-table-cell">Order Date</th>
												<th class="d-none d-lg-table-cell">Order Cost</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>24541</td>
												<td>
													<a class="text-dark" href=""> Coach Swagger</a>
												</td>
												<td class="d-none d-lg-table-cell">1 Unit</td>
												<td class="d-none d-lg-table-cell">Oct 20, 2018</td>
												<td class="d-none d-lg-table-cell">$230</td>
												<td>
													<span class="badge badge-success">Completed</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href=""
															role="button" id="dropdown-recent-order1"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>24541</td>
												<td>
													<a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
												</td>
												<td class="d-none d-lg-table-cell">2 Units</td>
												<td class="d-none d-lg-table-cell">Nov 15, 2018</td>
												<td class="d-none d-lg-table-cell">$550</td>
												<td>
													<span class="badge badge-primary">Delayed</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href="#"
															role="button" id="dropdown-recent-order2"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>24541</td>
												<td>
													<a class="text-dark" href=""> Hat Black Suits</a>
												</td>
												<td class="d-none d-lg-table-cell">1 Unit</td>
												<td class="d-none d-lg-table-cell">Nov 18, 2018</td>
												<td class="d-none d-lg-table-cell">$325</td>
												<td>
													<span class="badge badge-warning">On Hold</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href="#"
															role="button" id="dropdown-recent-order3"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>24541</td>
												<td>
													<a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
												</td>
												<td class="d-none d-lg-table-cell">5 Units</td>
												<td class="d-none d-lg-table-cell">Dec 13, 2018</td>
												<td class="d-none d-lg-table-cell">$200</td>
												<td>
													<span class="badge badge-success">Completed</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href="#"
															role="button" id="dropdown-recent-order4"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>24541</td>
												<td>
													<a class="text-dark" href=""> Speed 500 Ignite</a>
												</td>
												<td class="d-none d-lg-table-cell">1 Unit</td>
												<td class="d-none d-lg-table-cell">Dec 23, 2018</td>
												<td class="d-none d-lg-table-cell">$150</td>
												<td>
													<span class="badge badge-danger">Cancelled</span>
												</td>
												<td class="text-right">
													<div class="dropdown show d-inline-block widget-dropdown">
														<a class="dropdown-toggle icon-burger-mini" href="#"
															role="button" id="dropdown-recent-order5"
															data-bs-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false" data-display="static"></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li class="dropdown-item">
																<a href="#">View</a>
															</li>
															<li class="dropdown-item">
																<a href="#">Remove</a>
															</li>
														</ul>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xl-5">
							<!-- New Customers -->
							<div class="card ec-cust-card card-table-border-none card-default">
								<div class="card-header justify-content-between ">
									<h2>New Customers</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20">
											<i class="mdi mdi-cached"></i>
										</button>
										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button"
												id="dropdown-customar" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" data-display="static">
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="#">Action</a></li>
												<li class="dropdown-item"><a href="#">Another action</a></li>
												<li class="dropdown-item"><a href="#">Something else here</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body pt-0 pb-15px">
									<table class="table ">
										<tbody>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u1.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Selena
																	Wagner</h6>
															</a>
															<small>@selena.oi</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">$150</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u2.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Walter
																	Reuter</h6>
															</a>
															<small>@walter.me</small>
														</div>
													</div>
												</td>
												<td>5 Orders</td>
												<td class="text-dark d-none d-md-block">$200</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u3.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Larissa
																	Gebhardt</h6>
															</a>
															<small>@larissa.gb</small>
														</div>
													</div>
												</td>
												<td>1 Order</td>
												<td class="text-dark d-none d-md-block">$50</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u4.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Albrecht
																	Straub</h6>
															</a>
															<small>@albrech.as</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">$100</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u5.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Leopold
																	Ebert</h6>
															</a>
															<small>@leopold.et</small>
														</div>
													</div>
												</td>
												<td>1 Order</td>
												<td class="text-dark d-none d-md-block">$60</td>
											</tr>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.html"><img
																	class="profile-img rounded-circle w-45"
																	src="assets/img/user/u3.jpg"
																	alt="customer image"></a>
														</div>
														<div class="media-body align-self-center">
															<a href="profile.html">
																<h6 class="mt-0 text-dark font-weight-medium">Larissa
																	Gebhardt</h6>
															</a>
															<small>@larissa.gb</small>
														</div>
													</div>
												</td>
												<td>1 Order</td>
												<td class="text-dark d-none d-md-block">$50</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="col-xl-7">
							<!-- Top Products -->
							<div class="card card-default ec-card-top-prod">
								<div class="card-header justify-content-between">
									<h2>Top Products</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20"><i
												class="mdi mdi-cached"></i></button>
										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button"
												id="dropdown-product" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" data-display="static">
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="#">Update Data</a></li>
												<li class="dropdown-item"><a href="#">Detailed Log</a></li>
												<li class="dropdown-item"><a href="#">Statistics</a></li>
												<li class="dropdown-item"><a href="#">Clear Data</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body mt-10px mb-10px py-0">
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">Baby cotton shoes</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">58</span>Sales</p>
											<p class="d-none d-md-block">Statement belting with double-turnlock hardware
												adds “swagger” to a simple.</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">$520</span>
												<del>$580</del>
											</p>
										</div>
									</div>
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">Hoodies for men</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">20</span>Sales</p>
											<p class="d-none d-md-block">Statement belting with double-turnlock hardware
												adds “swagger” to a simple.</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">$250</span>
												<del>$300</del>
											</p>
										</div>
									</div>
									<div class="row media d-flex pt-15px pb-15px">
										<div
											class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
											<a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
										</div>
										<div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
											<a href="#">
												<h6 class="mb-10px text-dark font-weight-medium">Long slive t-shirt</h6>
											</a>
											<p class="float-md-right sale"><span class="mr-2">10</span>Sales</p>
											<p class="d-none d-md-block">Statement belting with double-turnlock hardware
												adds “swagger” to a simple.</p>
											<p class="mb-0 ec-price">
												<span class="text-dark">$480</span>
												<del>$654</del>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="#" target="_blank"> Peoples - Coop Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Chart -->
	<script src="assets/plugins/charts/Chart.min.js"></script>
	<script src="assets/js/chart.js"></script>

	<!-- Google map chart -->
	<script src="assets/plugins/charts/google-map-loader.js"></script>
	<script src="assets/plugins/charts/google-map.js"></script>

	<!-- Date Range Picker -->
	<script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/date-range.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- peoplescoop Custom -->
	<script src="assets/js/peoplescoop.js"></script>
</body>

</html>