@extends("../admin")


@section("content")
<form action = "{{ route(updatepost,$postsed->id)" method = "post" class="form-group" style="width:70%; margin-left:15%;"  enctype="multipart/form-data">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
@method('PUT') 
    


<!-- Earnings (Monthly) Card Example -->
<div class="col-lg-12">
<input type="hidden" value="{{$postsed->id}}" name="id">
                        

  <label for="exampleFormControlInput1" value="" class="form-label">العنوان</label>
  <input type="text"  value="  {{ $postsed->address }}"  class="form-control" id="exampleFormControlInput1" name="address">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                               <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">

                               {{ $postsed->text }}
                               </textarea>

<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" name="image" type="file" >
  <br /><br />
	<p><select name="lang" class="btn btn-primary">
  <option value="ar">العربية</option>
  <option value="en">Englech</option>
</select>
			
		</p>
        
  <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  
</div>


</div>
</form>





@endsection

