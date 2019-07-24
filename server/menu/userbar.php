<div class="kt-header__topbar-item kt-header__topbar-item--user">
									<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
										<span class="kt-header__topbar-welcome">Hi,</span>
                                        <span class="kt-header__topbar-username"><? echo $_SESSION['sign']; ?></span>
                                        
										<span class="kt-header__topbar-icon"><b><? echo strtoupper($_SESSION['sign'][0]); ?></b></span>
										<img alt="Pic" src="<? echo $_SESSION['avatar'];?>" class="kt-hidden"/>
									</div>
									<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

										<!--begin: Head -->
										<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(./assets/media/misc/bg-1.jpg)">
											<div class="kt-user-card__avatar">
												<img class="kt-hidden" alt="Pic" src="<? echo $_SESSION['avatar'];?>" />

												<span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><? echo strtoupper($_SESSION['sign'][0]); ?></span>
											</div>
											<div class="kt-user-card__name">
                                            <? echo $_SESSION['name']; ?>
											</div>
											
										</div>

										<!--end: Head -->

										<!--begin: Navigation -->
										<div class="kt-notification">
											<a href="./chinh-sua-hashtag" class="kt-notification__item">
												<div class="kt-notification__item-icon">
													<i class="flaticon2-calendar-3 kt-font-success"></i>
												</div>
												<div class="kt-notification__item-details">
													<div class="kt-notification__item-title kt-font-bold">
														Chỉnh sửa Hashtag
													</div>
													<div class="kt-notification__item-time">
														Thay đổi Hashtag khi duyệt bài
													</div>
												</div>
											</a>
											<?php 
												function generateRandomString($length = 10) {
													$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
													$charactersLength = strlen($characters);
													$randomString = '';
													for ($i = 0; $i < $length; $i++) {
														$randomString .= $characters[rand(0, $charactersLength - 1)];
													}
													return $randomString;
												}
												$_SESSION['csrf'] = generateRandomString();

											?>
											<div class="kt-notification__custom kt-space-between">
												<a href="dang-xuat?csrf=<? echo $_SESSION['csrf']; ?>" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Đăng xuất</a>
											</div>
										</div>

										<!--end: Navigation -->
									</div>
								</div>
