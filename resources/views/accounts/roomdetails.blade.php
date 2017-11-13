
@extends('admin')
@section('content')
					

	<section class="rommdetails">
		<div class="container">
			<div class="row">
				<form>
					<div class="box-header with-border">
		              	<h3 class="box-title">Phòng</h3>
		            </div>
					<div class="col-md-6">
						<div class="box">
							<div class="box-body">
								<div class="form-group">
									<label>Tên Phòng</label>
									<input type="text" name="room-name" class="form-control" placeholder="Nhập tên phòng">
								</div>
								
								<div class="form-group">
									<label>Giá Phòng</label>
									<input type="text" name="price" class="form-control" placeholder="Giá">
								</div>

								<div class="form-group">
									<label>Sô Người</label>
									<input type="text" name="number" class="form-control" placeholder="Người">		
								</div>
							</div> 
						</div>
					</div>
					<div class="col-md-6">
						<div class="box">
							<div class="box-body">
								<div class="form-group">
									<label>Kích Thước Phòng</label>
									<input type="text" name="size" class="form-control" placeholder="Kích thước">
								</div>

								<div class="form-group">
									<label>Số người</label>
									<input type="text" name="number" class="form-control" placeholder=" Người">
								</div>

								<div class="form-group">
									<label>Dịch vụ phòng</label>
									<input type="text" name="service" class="form-control" placeholder=" Dịch Vụ">
								</div>

							</div>
							
						</div>
					</div>
					<div class="col-md-12">
						<div class="box">
							<div class="box-body">
								<div class="form-group">
									<label>Mô Tả</label>
									<textarea class="form-control"></textarea>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</section>





@endsection()