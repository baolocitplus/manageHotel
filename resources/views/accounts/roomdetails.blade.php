
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
									<label>Loại Phòng</label>
									<select class="form-control" name="catagory">
										<option value="#">Loại 1</option>
										<option value="#">Loại 2</option>
										<option value="#">Loại 3</option>
										<option value="#">Loại 4</option>
									</select>
								</div>
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

								<div class="form-group">
									<label>Tình trạng Phòng (1: Còn phòng , 2: Hết phòng )</label>
									<select class="form-control" name="catagory">
										<option value="#">1</option>
										<option value="#">2</option>
									</select>
								</div>

							</div>
							
						</div>
					</div>
					<div class="col-md-12">
						<div class="box">
							<div class="box-body">
								<div class="form-group">
									<label>Mô Tả</label>
									<textarea class="form-control" name="content" style="height: 200px"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<label>Chọn hình ảnh</label>
					</div>
					@for($i=1;$i<=6;$i++)
					<div class="col-md-4">

						<div class="form-inline" style="margin-bottom: 20px">
							<input type="file" name="files[]">
						</div>
					</div>
					@endfor
					<div class="col-md-12" style="text-align: center;">
						<button type="submit" class="btn btn-lg btn-primary" id="js-upload-submid">Save</button>
					</div>
				</form>
			</div>
		</div>
<style type="text/css">
	/* layout.css Style */
	.upload-drop-zone {
	  height: 200px;
	  border-width: 2px;
	  margin-bottom: 20px;
	}

	/* skin.css Style*/
	.upload-drop-zone {
	  color: #ccc;
	  border-style: dashed;
	  border-color: #ccc;
	  line-height: 200px;
	  text-align: center
	}
	.upload-drop-zone.drop {
	  color: #222;
	  border-color: #222;
	}
</style>
{{--<script type="text/javascript">--}}

	{{--+ function($) {--}}
	{{--'use strict';--}}

	{{--// UPLOAD CLASS DEFINITION--}}
	{{--// ======================--}}

	{{--var dropZone = document.getElementById('drop-zone');--}}
	{{--var uploadForm = document.getElementById('js-upload-form');--}}

	{{--var startUpload = function(files) {--}}
	{{--console.log(files)--}}
	{{--}--}}

	{{--uploadForm.addEventListener('submit', function(e) {--}}
	{{--var uploadFiles = document.getElementById('js-upload-files').files;--}}
	{{--e.preventDefault()--}}

	{{--startUpload(uploadFiles)--}}
	{{--})--}}

	{{--dropZone.ondrop = function(e) {--}}
	{{--e.preventDefault();--}}
	{{--this.className = 'upload-drop-zone';--}}

	{{--startUpload(e.dataTransfer.files)--}}
	{{--}--}}

	{{--dropZone.ondragover = function() {--}}
	{{--this.className = 'upload-drop-zone drop';--}}
	{{--return false;--}}
	{{--}--}}

	{{--dropZone.ondragleave = function() {--}}
	{{--this.className = 'upload-drop-zone';--}}
	{{--return false;--}}
	{{--}--}}

	{{--}(jQuery);--}}
{{--</script>--}}
	</section>





@endsection()