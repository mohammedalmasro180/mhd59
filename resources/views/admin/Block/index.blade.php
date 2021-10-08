@extends("../admin")


@section("content")
<form action = "/blockup" method = "post" class="form-group" style="width:70%; margin-left:15%;"  enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">




<!-- Earnings (Monthly) Card Example -->
<div class="col-lg-12">
<div class="mb-3">
  <label for="formFile" class="form-label">الصورة</label>
  <input class="form-control" name="image" type="file" >
  </div>

                        
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">العنوان الاول</label>
  <input type="text" value="{{$block->adresread}}" class="form-control" id="exampleFormControlInput1" name="address1">
  </div>
                        
<div class="mb-3">
  
<label for="exampleFormControlInput1" class="form-label">العنوان الثاني</label>
  <input type="text"  value="{{$block->address}}" class="form-control" id="exampleFormControlInput1" name="address2">
  </div>
  
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">النص</label>
                               <textarea name="text1"  value="{{$block->text}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                               </div>

                               <div class="mb-3">
  <label for="formFile" class="form-label">الصورة2</label>
  <input class="form-control" name="image2" type="file" >
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">3الصورة</label>
  <input class="form-control" name="image3" type="file" >
 </div>

 
 
                                 
                               <div class="mb-3">
  <label for="formFile" class="form-label">الصورة</label>
  
  <input class="form-control" name="image4" type="file" >
  </div>
  
                        
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">العنوان الثالث</label>
  <input type="text3" class="form-control" value="{{$block->address2}}"  id="exampleFormControlInput1" name="address3">
  </div>

  
                        
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">العنوان الرابع</label>
  <input type="text4" class="form-control" value="{{$block->address2}}"  id="exampleFormControlInput1" name="address4">
  </div>


  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> النص الثاني</label>
                               <textarea name="text5" value="{{$block->text2}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                               </div>


                               <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> النص الثالث</label>
                               <textarea name="text6" value="{{$block->text3}}" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

