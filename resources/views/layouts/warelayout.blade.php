
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/ware-style.css" >
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src='js/jquery.js' type="text/javascript"></script>
</head>
<body>
    <div class='page-header'>
    <h2>Add Items to warehouse on this page</h2>
    </div>
<div class="form-container">
    <div class='success'>
    @yield('success')
    </div>
    <div class="errors">
    @yield('error')
    </div>
    {!!Form::open(['url'=>'create/store'])!!}
    <p>Item<br />
        @yield('Item')</p>
    <p>Quantity <br />
        @yield('Quantity')</p>
    <p>Price <br/>
    @yield('Price')
    </p>
    <p>Description<br />
    @yield('Desc')
    </p>
    @yield('submit')
    {{Form::close()}}
</div>    
</body>
</html>