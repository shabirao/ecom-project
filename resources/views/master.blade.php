<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
@yield('content')
{{View::make('footer')}}
    
</body>
<style>
.custem-login{
    hight: 500px;
    padding-top: 100px;
}
.custem-product{
    hight: 600px;
}
.slider-text{

    background-color: #0d2a363d !important;

    
}
.trending-item{
    float : left;
    width:20%;

}
.Trending Wrapper{
    margin : 20px;

}

img.slider-img{
    height : 300px !important;
    max-width: 50%;
    margin-bottom: 10px;
    margin-top: 70px;
    
}
.deatil-img{
    hight : 200px;
    width: 300px;
}
.search-box{
    width : 500px !important
}
.cart-list-divider{
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.trending-img
{
      height:100px;
}


</style>

</html>