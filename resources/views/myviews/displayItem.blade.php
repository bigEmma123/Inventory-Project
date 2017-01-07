@extends('layouts.default')
@section('heading')
<h2>Items</h2>
@endsection
@section('content')
@foreach($items as $item)
<li>{{link_to_route('itemDescription',$item['Item'],$item['ID'])}}</li>
@endforeach
@endsection
