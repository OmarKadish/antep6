<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<! --the action function is to define the road this view will go on.
the enctype is to hide the data we enter from the search bar -->
<form action="{{route('product.save')}}" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationServer01">Name</label>
            <input type="text" class="form-control is-valid" id="validationServer01" name="name" placeholder="product's name"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationServer02">Price</label>
            <input type="text" class="form-control is-valid" id="validationServer02" name="price" placeholder="product's price"  required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
<!--
        <div class="col-md-4 mb-3">
            <label for="validationServerUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
-->
    </div>
<!--
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
-->
    @csrf
    <button class="btn btn-primary" type="submit">Save Product</button>
</form>
</body>
</html>
