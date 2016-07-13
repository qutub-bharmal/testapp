

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <!-- font owsome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<section class="content">
<div class="container">


<!--
<script  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"></script>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"></script> -->


<form method="POST" action="/test" accept-charset="UTF-8">
    <!-- <input type="hidden" name="_token" value="{{{ Session::getToken() }}}"> -->
    <div class="form-group">
        <label for="password">Product</label>
        <input class="form-control" placeholder="Product Name"  name="product_name" id="product_name">
    </div>

    </br>
    <div class="form-group">
        <label for="password">Quantity in stock</label>
        <input class="form-control" placeholder="Quantity"  name="quantity" id="quantity">
    </div>
    </br>
    <div class="form-group">
        <label for="password">Price per item</label>
        <input class="form-control" placeholder="Price"  name="price" id="price">
    </div>
    </br>


<button type="submit" class="btn btn-primary">Submit</button>

</form>


@if(($result))
<div>
   <div>
   <h3>Task Result</h3>
       <div>
           <pre style="font-size: 10px;line-height: 100%;">

            <div class="content">
                <div class="table-responsive">
                    <table class="table table-bordered table table-striped table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>TotalValue</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $product)
                            <tr >
                                <td>{{$product->productName}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->totalValue}}</td>
                                <td>{{$product->date}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">Total</td>
                                <td colspan="3">{{$count}}</td>

                            <tr>
                        </tbody>
                    </table>
                </div>

           </pre>
       </div>
   </div>
</div>
@endif
</div>
</section>