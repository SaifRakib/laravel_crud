<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel crud application</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
</head>
<body class="bg-light">
<div class="p-3 mb-2 bg-dark text-white">
    <div class="container">
        <div class="h3">LARAVEL CRUD APPLICATION</div>
    </div>
</div>

    <div class="container">
         <div class="row">
            <div class="col-md-12 text-right mb-3">
                 <a href="{{route('article.add')}}" class="btn btn-primary">ADD</a>
            </div>
         </div>
    </div>
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5>Articles / Add</h5></div>
                <div class="card-body">
                    <form action="{{route('article.save')}}" method="post" name="addArticle" id="addArticle">
                    @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control">

                            @if($errors->any())

                                <p>{{$errors->first('title')}}</p>

                            @endif



                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="30" rows="5" value="{{old('description')}}" class="form-control"></textarea>

                            @if($errors->any())

                            <p>{{$errors->first('description')}}</p>

                            @endif
                        </div>

                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" id="author" value="{{old('author')}}" class="form-control">

                            @if($errors->any())

                            <p>{{$errors->first('author')}}</p>

                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save Article</button>
                        </div>
                
                     </form>

                </div>
             </div>
         </div>
    </div>
</div>
     
</body>
</html>