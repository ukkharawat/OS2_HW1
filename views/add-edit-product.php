<html>
<head>
    <title>Tea Time Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../static/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/style/bootstrap.min.css">
    <script src="../static/javascript/jquery.min.js"></script>
    <script src="../static/javascript/bootstrap.min.js"></script>
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                    $('#blah').css('width', '220px');
                    $('#blah').css('height', '220px');
                    $('#form').css('padding-bottom', '50px');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Tea Time</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Product</a></li>
                <li class="active">
                    <a href="#">Sign in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-8 col-md-offset-2" id="form">
        <h1>Add Product</h1>
        <div class="form-group">
            <img id="blah" src="#" alt="your image"/>
            <input type='file' onchange="readURL(this);" />
        </div>

        <div class="form-group">
            <label class="control-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" placeholder="name">
        </div>

        <div class="form-group">
            <label for="textArea" class="control-label">Description</label>
            <textarea class="form-control" rows="3" id="textArea"></textarea>
        </div>

        <div class="form-group">
            <label class="control-label" for="price">Price</label>
            <input class="form-control" id="price" type="text" placeholder="price">
        </div>

        <div class="form-group">
            <label class="control-label" for="amount">Amount</label>
            <input class="form-control" id="amount" type="text" placeholder="amount">
        </div>
        <a href="#" class="btn btn-primary btn-block">Add product</a>
    </div>
</div>
</body>
</html>