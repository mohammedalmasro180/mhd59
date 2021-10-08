@extends("../admin")


@section("content")
<form action = "/updateSlider" method = "post" class="form-group" style="width:70%; margin-left:15%;"  enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
@method('PUT') 
    


<!-- Earnings (Monthly) Card Example -->
<div class="col-lg-12">
<input type="hidden" value="{{$Slidersed->id}}" name="id">
                        

  <label for="exampleFormControlInput1" value="" class="form-label">العنوان</label>
  <input type="text"  value="  {{ $Slidersed->address }}"  class="form-control" id="exampleFormControlInput1" name="address">
  <label for="exampleFormControlTextarea1" class="form-label">النص</label>
                               <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">

                               {{ $Slidersed->text }}
                               </textarea>

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
        
  <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  
  </div>


</div>
</form>





@endsection

