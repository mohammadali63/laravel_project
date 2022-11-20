<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Form</h1>
                </div>

                <div class="card-body">
                    <form action="" method="">
                        <div class="mb-3">
                            <lavel class="form-label">Blog Title</lavel>
                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Title"/>
                        </div>

                        <div class="mb-3">
                            <lavel class="form-label">Blog Category</lavel>
                            <input type="text" name="blog_category" class="form-control" placeholder="Blog Category"/>
                        </div>

                        <div class="mb-3">
                            <lavel class="form-label">Author Name</lavel>
                            <input type="text" name="author_name" class="form-control" placeholder="Author Name"/>
                        </div>

                        <div class="mb-3">
                            <lavel class="form-label">Description</lavel>
                            <textarea name="description" class="form-control" cols="10" rows="10" id=""></textarea>
                        </div>

                        <div class="mb-3">

                            <input type="submit" name="" class="btn btn-primary form-control" value="submit"/>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
