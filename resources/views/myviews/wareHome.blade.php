@extends('layouts.homeLayout')

@section('title')
<title>{{$title}}</title>
@endsection
@section('heading')
<h2>The Ware House Project</h2>
@endsection
@section('welcome')
Welcome
@endsection
@section('msg')
What would you like to do?
@endsection
@section('links')
<!--- link_to_route(routename,link name ,parameters,attr in an array)--->
{{link_to_route('addStock','Add items to the ware house',null,['class'=>'btn btn-primary'])}}
{{'    '}}<!--- space links-->
{{link_to_route('shop','View Items',null,['class'=>'btn btn-primary'])}}
@endsection