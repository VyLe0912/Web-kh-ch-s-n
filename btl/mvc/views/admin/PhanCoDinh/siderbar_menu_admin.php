<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="public/admin/assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
											<?php $user = $data["user_info"]; ?>
											
                                            <div class="sidebar-userpic-name"><?php echo $user; ?> </div>
											<div class="profile-usertitle-job"> administrator </div>
											
                                        </div>
                                        <div class="sidebar-userpic-btn">
									       
									        <a class="tooltips" href="./admin/logout"  id="logout" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        </li>
	                        <!-- <li class="menu-heading">
			                	<span>-- Main</span>
			                </li> -->
	                        <li class="nav-item start active">
	                            <a href="./admin" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Trang Ch???</span>
                                	<span class="selected"></span>
                                	
	                            </a>
	                        
	                        </li>
	                        <li class="nav-item">
	                            <a href="./admin/getAll_lien_he/all" class="nav-link nav-toggle">
	                                <i class="material-icons">email</i>
	                                <span class="title">Tin nh???n</span>
	                             
	                            </a>
	                            
	                        </li>
							
							<li class="nav-item">
	                            <a href="./admin/datphong" class="nav-link nav-toggle">
								<i class="material-icons">business_center</i>
	                                <span class="title">?????t ph??ng</span>
	                             
	                            </a>
	                            
	                        </li>
	                        
							<!-- phong -->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">vpn_key</i>
	                                <span class="title">Ph??ng</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_room" class="nav-link ">
	                                        <span class="title">Th??m Ph??ng M???i</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allroom" class="nav-link ">
	                                        <span class="title">Xem Danh S??ch Ph??ng</span>
	                                    </a>
	                                </li>
	                            
	                            </ul>
	                        </li>
							<!--end phong -->

							<!--start khuyen mai -->
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">shopping_basket</i>
	                                <span class="title">Khuy???n M??i</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_khuyenmai" class="nav-link ">
	                                        <span class="title">Khuy???n M??i M???i</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allkm" class="nav-link ">
	                                        <span class="title">Xem Danh S??ch</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
							<!--end khuyen mai -->

							<!--start thuoc tinh -->
							<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">view_list</i>
	                                <span class="title">Thu???c T??nh</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_thuoctinh" class="nav-link ">
	                                        <span class="title">Thu???c T??nh M???i</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/viewThuocTinh" class="nav-link ">
	                                        <span class="title">Xem Danh S??ch</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
							<!--end thuoc tinh -->


							<!-- h??nh ???nh-->
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">insert_photo</i>
	                                <span class="title">H??nh ???nh</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_image" class="nav-link ">
	                                        <span class="title">Th??m ???nh M???i</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/allimage" class="nav-link ">
	                                        <span class="title">Xem Danh S??ch</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">settings_applications</i>
	                                <span class="title">D???ch V???</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                                <li class="nav-item">
	                                    <a href="./admin/add_dichvu" class="nav-link ">
	                                        <span class="title">Th??m D???ch V???</span>
	                                    </a>
	                                </li>
	                                <li class="nav-item">
	                                    <a href="./admin/alldichvu" class="nav-link ">
	                                        <span class="title">Xem Danh S??ch</span>
	                                    </a>
	                                </li>
	                                
	                            </ul>
	                        </li>
	                       
							
	                      </ul>
	                </div>
                </div>
            </div>






