@extends("admin")


@section("content")
<div class="card"  style="width:90%;">
    <div class="card-header">
    
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الايميل</th>
                    <th>الموضوع</th>
                    <th>الرسالة</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                @foreach ($email as $Slider)

                    <td scope="row">
                    {{ $Slider->id }}
                    </td>
                    <td>
                    {{ $Slider->name }}
                    </td>
                    <td>
                    {{ $Slider->subject }}
                    </td>
                    
      <td>
      {{ $Slider->msg }}
                    </td>
 
                  
      <td>
      <a  href="/mdel{{$Slider->id}}" type="button" class="btn btn-lg btn-danger" disabled>X</a>
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

