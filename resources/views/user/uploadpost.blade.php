<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1><center>This is upload page </h1>
<form action="post" enctype="multipart/form-data" >
   <h2> Choose The platform </h2>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Instagram
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    SnapChat
  </label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Facebook
  </label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
  LinkedIn
  </label>
</div>
    
    <div class="container">
       <h2>Choose the image</h2> 
        <div class="form-group mt-2">
         <lable for="File "></lable>
         <input type="file" name="" id="" class="form-control" placeholder ="upload your content" aria-describedly="helpId">   
         <button class="btn-primary">Upload</button>
    </div>
    <form method="POST" action='posts.store'>
    

    <div class="form-group">
        <label for="content"><h2>Content</h2> </label>
        <textarea id="content" name="content" class="form-control"></textarea>
    </div>
<h2>Seletct time To Schedule post</h2>
    <div class="form-group">
        <label for="scheduled_at">Scheduled Time</label>
        <input type="datetime-local" id="scheduled_at" name="scheduled_at" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Schedule Post</button>
</form>

</div>
</form> 
</body>
</html>