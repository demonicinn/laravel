@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="profile-wrapper">
			
			<div class="top-content">
				<img src="{{url('img/profile/top.jpg')}}" alt="" class="img-fluid">
				<div class="stats-bg col-xl-12">    
					<div class="col-xs col-sm-12 col-md-12 col-lg-9 col-xl-9 offset-lg-3 offset-xl-3 profile-stats">
						<ul class="list-inline">
							<li class="list-inline-item">
								<h5>Followers</h5>
								<p>2293</p>
							</li> <!-- /li -->
							<li class="list-inline-item"> 
								<h5>Post</h5>
								<p>234</p>
							</li> <!-- /li -->                         
							<li class="list-inline-item"> 
								<h5>Comments</h5>
								<p>1203</p>
							</li> <!-- /li -->
						</ul> <!-- /list-inline -->
					</div> <!-- /profile-stats -->
				</div> <!-- /stats-bg -->
			</div> <!-- /top-content -->
			
			<!-- ////////// Profile Content //////////-->
			<div class="profile-content">
				<div class="container-fluid">
					<div class="row">

						<div class="col-xs col-sm-12 col-md-12 col-lg-3 col-xl-3">
							<div class="profile-sidebar">
								<div class="profile-widget">

									<div class="top-info">
										<img src="{{url('img/profile/profile-page.jpg')}}" alt="" class="img-fluid">
										<h5 class="name">Matthew Doe</h5>
										<p class="rank">Front-End Developer</p>

									</div> <!-- /top-info -->

									<div class="middle-info">
										<h5>About Me</h5>
										<ul class="list-unstyled">
											<li><i class="fa fa-user" aria-hidden="true"></i>Matthew Doe</li>
											<li><i class="fa fa-map-marker" aria-hidden="true"></i>Edinburgh, Scotland</li>
											<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:#">example@example.com</a></li>
											<li><i class="fa fa-phone" aria-hidden="true"></i>(934)-163-9163</li>
											<li><i class="fa fa-birthday-cake" aria-hidden="true"></i>1995-03-29</li>
										</ul> <!-- /list-unstyled -->
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia magnam quidem rem nobis dicta officia, quaerat praesentium totam labore repellendus assumenda, libero, quas tempora itaque.
										</p>
									</div> <!-- /middle-info -->
									
									<div class="bottom-info">
										<h5>Skills</h5>

										<h6>HTML5</h6>
										<div class="progress">
											<div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
										</div> <!-- /progress -->

										<h6>CSS3</h6>
										<div class="progress">
											<div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
										</div> <!-- /progress -->                             

										<h6>jQuery</h6>
										<div class="progress">
											<div class="progress-bar progress-bar-primary progress-bar-xs" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div> <!-- /progress -->

									</div> <!-- /bottom-info -->
									

								</div> <!-- /profile-widget -->
							</div> <!-- /profile-sidebar -->

						</div> <!-- /col -->
						
						<!-- ////////// Profile Activity //////////-->
						<div class="col-xs col-sm-12 col-md-12 col-lg-9 col-xl-9 profile-activity">
			
							<div class="card update-status">
								<div class="card-heading">
									<h5>Update status</h5>
								</div> <!-- /card-heading -->
								<div class="card-body">
									<form>
										<div class="form-group">
											<textarea class="form-control" id="update_status" placeholder="What's new?" rows="4"></textarea>
										</div> <!-- /form-group -->
									</form> <!-- /form -->
								</div> <!-- /card-body -->
								<div class="card-footer">
									<div class="upload-buttons">
										<button class="btn btn-link"><i class="fa fa-picture-o"></i></button>
										<button class="btn btn-link"><i class="fa fa-video-camera"></i></button>
										<button class="btn btn-link"><i class="fa fa-music"></i></button>
									</div> <!-- /upload-buttons -->
									<button type="submit" class="btn btn-primary">Submit</button>
								</div> <!-- /card-footer -->
							</div> <!-- /update-status -->

							<div class="row">
								
								<!-- ////////// Profile Posts //////////-->
								<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-6">
						
									<div class="card card-post">

										<!-- Post Content -->
										<div class="post-content">
											<div class="media">
												<div class="media-left">
													<img class="media-img" src="{{url('img/profile/post1.jpg')}}" alt="">
												</div> <!-- /media-left -->
												<div class="media-body">
													<h5><a href="#">Anna Moe</a></h5>
													<p>Added 5 min ago</p>
												</div> <!-- /media-body -->
											</div> <!-- /media -->
											<p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo id deserunt doloremque!</p>
											<img src="{{url('img/widgets/weather2.jpg')}}" class="post-img img-fluid" alt="">
											<div class="post-footer">
												<div class="post-info">
													<p class="text-muted"><a href="#">20 People</a> like this</p>
												</div> <!-- /pull-left -->
												<div class="post-action">
													<a href="#" class="btn btn-link"><i class="fa fa-thumbs-up"></i>Like</a>
													<a href="#" class="btn btn-link"><i class="fa fa-comment"></i>Comment</a>
													<a href="#" class="btn btn-link"><i class="fa fa-share"></i>Share</a>
												</div> <!-- /post-action -->
											</div> <!-- /post-footer -->
										</div> <!-- /post-content -->
										
										<!-- Post Comments -->
										<div class="post-comments">

											<div class="comment-header">
												<a href="#">Show previous comments 10</a>
											</div> <!-- /comment-header -->
											
											<!-- Single Comment with Second Comment -->
											<div class="comment">
												<div class="media">
													<img class="media-img align-self-start" src="{{url('img/profile/author2.jpg')}}" alt="">
													<div class="media-body">
														<h5><a href="#">Ricardo Doe</a></h5>
														<div class="post-action">
															<a href="#" class="btn btn-link"><i class="fa fa-thumbs-up"></i>Like</a>
															<a href="#" class="btn btn-link"><i class="fa fa-comment"></i>Reply</a>
															- 2 min ago
														</div> <!-- /post-action -->
														<p class="comment-desc">Lorem ipsum dolor sit amet, consectetur adipisicing a#. Odio sit quos aspernatur ad tempora ullam, assumenda modi, in facere odit beatae voluptate fugit ea, optio repellendus dolorum essa!</p>

														<!-- Second Comment -->
														<div class="media">
															<img class="media-img align-self-start" src="{{url('img/profile/author.jpg')}}" alt="">
															<div class="media-body">
																<h5><a href="#">Matthew Doe</a></h5>
																<div class="post-action">
																	<a href="#" class="btn btn-link"><i class="fa fa-thumbs-up"></i>Like</a>
																	<a href="#" class="btn btn-link"><i class="fa fa-comment"></i>Reply</a>
																	- 1 min ago
																</div> <!-- /post-action -->
																<p class="comment-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, perferendis.</p>
															</div> <!-- /media-body -->
														</div> <!-- /media -->

													</div> <!-- /media-body -->
											
												</div> <!-- /media -->
											</div> <!-- /comment -->
	
										</div> <!-- /post-comments -->
									
										<!-- Input For Comment -->
										<div class="post-form">
											<form>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Write...">
													<span class="input-group-btn">
														<button class="btn btn-primary" type="button">Send</button>
													</span> <!-- /input-group-btn -->
												</div> <!-- /input-group -->
											</form> <!-- /form -->
										</div> <!-- /post-form  -->

									</div> <!-- /post -->

								</div> <!-- /col -->                    

								<!-- ////////// Second Profile Posts //////////-->
								<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-6">
						
									<div class="card card-post">

										<!-- Post Content -->
										<div class="post-content">
											<div class="media">
												<div class="media-left">
													<img class="media-img" src="{{url('img/profile/author.jpg')}}" alt="">
												</div> <!-- /media-left -->
												<div class="media-body">
													<h5><a href="#">Andrew Bond</a></h5>
													<p>Added 33 min ago</p>
												</div> <!-- /media-body -->
											</div> <!-- /media -->
											<p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error porro eaque, doloremque ex consectetur fuga modi distinctio, natus magni sequi aliquid cupiditate unde molestiae rerum provident.</p>
											<img src="{{url('img/widgets/weather4.jpg')}}" class="post-img img-fluid" alt="">
											<div class="post-footer">
												<div class="post-info">
													<p class="text-muted"><a href="#">Anna Doe</a> like this</p>
												</div> <!-- /pull-left -->
												<div class="post-action">
													<a href="#" class="btn btn-link"><i class="fa fa-thumbs-up"></i>Like</a>
													<a href="#" class="btn btn-link"><i class="fa fa-comment"></i>Comment</a>
													<a href="#" class="btn btn-link"><i class="fa fa-share"></i>Share</a>
												</div> <!-- /post-action -->
											</div> <!-- /post-footer -->
										</div> <!-- /post-content -->
										
										<!-- Post Comments -->
										<div class="post-comments">

											<div class="comment-header">
												<a href="#">Show previous comments 1</a>
											</div> <!-- /comment-header -->
											
											<!-- Single Comment with Second Comment -->
											<div class="comment">
												<div class="media">
													<img class="media-img align-self-start" src="{{url('img/profile/author2.jpg')}}" alt="">
													<div class="media-body">
														<h5><a href="#">Ricardo Doe</a></h5>
														<div class="post-action">
															<a href="#" class="btn btn-link"><i class="fa fa-thumbs-up"></i>Like</a>
															<a href="#" class="btn btn-link"><i class="fa fa-comment"></i>Reply</a>
															- 22 min ago
														</div> <!-- /post-action -->
														<p class="comment-desc">Lorem ipsum dolor sit amet, consectetur adipisicing a#. Odio sit quos aspernatur ad tempora ullam, assumenda modi, in facere odit beatae voluptate fugit ea, optio repellendus dolorum essa!</p>
													</div> <!-- /media-body -->
												</div> <!-- /media -->
											</div> <!-- /comment -->
	
										</div> <!-- /post-comments -->
									
										<!-- Input For Comment -->
										<div class="post-form">
											<form>
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Write...">
													<span class="input-group-btn">
														<button class="btn btn-primary" type="button">Send</button>
													</span> <!-- /input-group-btn -->
												</div> <!-- /input-group -->
											</form> <!-- /form -->
										</div> <!-- /post-form  -->

									</div> <!-- /post -->

								</div> <!-- /col -->       

							</div> <!-- /row -->

						</div> <!-- /profile-activity -->                  

					</div> <!-- /row -->

				</div> <!-- /container-fluid -->

			</div> <!-- /profile-content -->

		</div>
@endsection