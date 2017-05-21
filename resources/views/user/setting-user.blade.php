@extends('app2')

@section('content')
	<div class="form-bg container">
		<div class="row">
				<div class="col-md-8 col-md-offset-2 bottom2p bg-white nopad">
					<div class="form-horizontal bottom2p">
						<h3 style="margin: 5%;" class="center orange">Setting - Username</h3>
					</div>
					<ul class="nav nav-pills nav-justified" style="margin-bottom: -1%;">
					  	<li class="active"><a data-toggle="tab" href="#home">Akun</a></li>
				  		<li><a data-toggle="tab" href="#payment">Password</a></li>
					</ul>
					<hr/> 
					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<form>
			                    <div class="col-md-12">
				                    <div class="col-md-12">
				                    	<h5 class="orange">Your Details</h5>
				                    </div>

			                        <div class="form-group">
			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="username"><i class="fa fa-user"></i> Username</label>
				                                <input class="form-control" id="username" type="text" required>
			                                </div>
			                            </div>
			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="email"><i class="fa fa-envelope"></i> Email</label>
				                                <input class="form-control" id="email" type="text" required>
				                            </div>
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="col-sm-12">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="phone"><i class="fa fa-phone"></i> Phone</label>
				                                <input class="form-control" id="phone"  type="number" required>
				                            </div>
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="col-sm-6">
			                                <h5 class="orange">Photo</h5>
			                                <br/>
			                                <img src="http://www.soaptheme.net/html/travelo/images/shortcodes/team/david.png" width="150" height="150">
			                                <input readonly="" class="form-control" placeholder="Browse..." type="text">
		       								<input id="inputFile" multiple="" type="file">
			                                <input class="form-control" id="photo" placeholder="photo" type="file">
			                            </div>
			                        </div>

			                        <div class="clearfix">
			                            <button class="btn btn-raised btn-primary btn-lg btn-block top4p" type="submit" >Simpan</button>
			                        </div>
			                    </div>
			                </form>
			            </div>
			            <div id="payment" class="tab-pane fade">
							<form >
			                    
			                    <div class="col-md-12 form-content">
				                    <div class="col-md-12">
				                    	<h5 class="orange">Change Password</h5>
				                    </div>

			                        <div class="form-group">
			                            <div class="col-sm-12">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="oldpass"><i class="fa fa-lock"></i> Password Lama</label>
				                                <input class="form-control" id="oldpass" type="password">
			                                </div>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                        	<div class="col-sm-6">
			                        		<div class="form-group label-floating">
				                                <label class="control-label" for="newpass"><i class="fa fa-key"></i> Password Baru</label>
				                                <input class="form-control" id="newpass" type="password">
			                                </div>
			                            </div>

			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="retype"><i class="fa fa-keyboard-o"></i> Ketik Ulang Password Baru</label>
				                                <input class="form-control" id="retype" type="password">
				                            </div>
			                            </div>
			                        </div>

			                        <div class="clearfix">
			                            <button class="btn btn-raised btn-primary btn-lg btn-block top4p" type="submit" >Simpan</button>
			                        </div>
			                    </div>

			                </form>						
			            </div>
		            </div>
				</div>
		</div>
	</div>
@endsection