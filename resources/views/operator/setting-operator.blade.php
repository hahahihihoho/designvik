@extends('app2')

@section('content')
	<div class="form-bg container">
		<div class="row">
				<div class="col-md-8 col-md-offset-2 bottom2p bg-white nopad">
					<div class="form-horizontal bottom2p">
						<h3 style="margin: 5%;" class="center orange">Setting - Trip Operator</h3>
					</div>
					<ul class="nav nav-pills nav-justified" style="margin-bottom: -1%;">
					  	<li class="active"><a data-toggle="tab" href="#home">Operator</a></li>
				  		<li><a data-toggle="tab" href="#payment">Payment</a></li>
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
				                                <label class="control-label" for="lokasi"><i class="fa fa-map-marker"></i> Lokasi</label>
				                                <input class="form-control" id="lokasi" type="text" required>
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
			                                <h5 class="orange">Photo Operator</h5>
			                                <br/>
			                                <img src="http://www.soaptheme.net/html/travelo/images/shortcodes/team/david.png" width="150" height="150">
			                                <input readonly="" class="form-control" placeholder="Browse..." type="text">
		       								<input id="inputFile" multiple="" type="file">
			                                <input class="form-control" id="photo" placeholder="photo" type="file">
			                            </div>
			                            <div class="col-sm-6">
			                                <h5 class="orange">Photo Sampul</h5>
			                                <br/>
			                                <img src="http://www.soaptheme.net/html/travelo/images/cruise/gallery/7.jpg" width="300" height="150">
			                                <input readonly="" class="form-control" placeholder="Browse..." type="text">
		       								<input id="inputFile" multiple="" type="file">
			                                <input class="form-control" id="sampul" placeholder="photo" type="file">
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
				                    	<h5 class="orange">Payment Details</h5>
				                    </div>

			                        <div class="form-group">
			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="bank"><i class="fa fa-bank"></i> Nama Bank</label>
				                                <input class="form-control" id="bank" type="text">
			                                </div>
			                            </div>
			 
			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="cab"><i class="fa fa-map-marker"></i> Lokasi Cabang Bank</label>
				                                <input class="form-control" id="cab" type="text">
				                            </div>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                        	<div class="col-sm-6">
			                        		<div class="form-group label-floating">
				                                <label class="control-label" for="rek"><i class="fa fa-credit-card"></i> No Rekening</label>
				                                <input class="form-control" id="rek"type="number">
			                                </div>
			                            </div>

			                            <div class="col-sm-6">
			                            	<div class="form-group label-floating">
				                                <label class="control-label" for="name"><i class="fa fa-user"></i> Rekening Atas Nama</label>
				                                <input class="form-control" id="name" type="text">
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