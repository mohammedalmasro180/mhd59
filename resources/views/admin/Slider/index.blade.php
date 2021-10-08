@extends("../admin")


@section("content")
<form action = "/slideradd" method = "post" class="form-group" style="width:70%; margin-left:15%;"  enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



<!-- Earnings (Monthly) Card Example -->
<div class="col-lg-12">
                        

  <label for="exampleFormControlInput1" class="form-label">العنوان</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
  <label for="exampleFormControlTextarea1" class="form-label">النص</label>
                               <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                               <div class="mb-3">
  <label for="formFile" class="form-label">الصورة</label>
  <input class="form-control" name="image" type="file" >
  </div>
  <div class="mb-3">
	<p><select name="lang" class="btn btn-primary">
  <option value="ar">العربية</option>
  <option value="en">Englech</option>
</select>
</div>
		</p>

  <button type="submit"  value = "Add student" class="btn btn-primary">اضافة</button>
  
  </div>


</div>
</form>





@endsection

