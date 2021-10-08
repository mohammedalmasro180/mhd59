@extends("admin")


@section("content")
<div class="card"  style="width:90%;">
    <div class="card-header">
    <a href="/product" type="button" class="btn btn-lg btn-success" disabled>Add</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>العنوان</th>
                    <th>النص</th>
                    <th>الصورة</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                @foreach ($products as $product)

                    <td scope="row">
                    {{ $product->id }}
                    </td>
                    <td>
                    {{ $product->address }}
                    </td>
                    <td>
                    {{ $product->text }}
                    </td>
                    
      <td>
                    <img src="assets/uploads/one/{{$product->img }}" width="100px" alt="">
                    </td>
 
                    
                    <td>
      
                    <a href="/productupdate{{$product->id}}" type="button" class="btn btn-lg btn-success" disabled>Update</a>
      </td>
      <td>
      <a  href="/prodel{{$product->id}}" type="button" class="btn btn-lg btn-danger" disabled>X</a>
      </td>
      
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">
 
    </div>
</div>
@endsection

