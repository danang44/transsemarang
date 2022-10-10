<html>
<head>
    <title>How to Use WYSIHTML5 Editor with Laravel? - Medikre.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/prettify.css"></link>
    <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.css"></link>
  
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/wysihtml5-0.3.0.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/jquery-1.7.2.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/prettify.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/bootstrap.min.js"></script>
    <script src="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">How to Use WYSIHTML5 Editor with Laravel? - Medikre.com</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>  
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="wysihtml5 form-control" name="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.wysihtml5').wysihtml5();
        });
    </script>
</body>
</html>