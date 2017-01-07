@extends('layouts.warelayout')
<title>Add Stock</title>
<!--<br >display errors-->

@section('error')
<!--Item error-->
@if($errors->has('Item'))
<li>{{$errors->first('Item')}}</li>
@endif
<!---Quantity error-->
@if($errors->has('Quantity'))
<li>{{$errors->first('Quantity')}}</li>
@endif
<!--Price error-->
@if($errors->has('Price'))
<li>{{$errors->first('Price')}}</li>
@endif
<!----Description error-->
@if($errors->has('Description'))
<li>{{$errors->first('Description')}}</li>
@endif
@endsection

<!----------->
@section('success')
@if(session('success'))
{{session('success')}}
@endif
@endsection
<!-----------success message---->

<!------------>
{{csrf_field()}}
    @section('Item')
{{Form::text('Item',null,['class'=>'form-control'])}}
    @endsection
    @section('Quantity')
{{Form::text('Quantity',null,['class'=>'form-control'])}}
    @endsection
    @section('Price')
{{Form::text('Price',null,['class'=>'form-control'])}}
    @endsection
@section('submit')
{{Form::submit('Add to stock',['class'=>'btn btn-primary'])}}
@endsection
@section('Desc')
{{Form::textarea('Description',null,['class'=>'form-control','rows'=>'5','cols'=>'70'])}}
@endsection
