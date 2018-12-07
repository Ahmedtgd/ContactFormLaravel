<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>contact</title>
    <style >
      .invalid-feedback {
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Contact Us</h1>
      <div class="row">
        <div class="col-md-6">

  @if(Session::has('flash_message'))
<div class="alert alert-success">{{Session::get('flash_message')}}</div>
  @endif

    <form method="post" action = "{{ route('contact.store') }}">
      {{ csrf_field() }}
      <div class="form-group"  >
        <label>Full Name:</label>
           <input type="text" class="form-control" name="name">
           @if($errors->has('name'))
           <small class="form-text invalid-feedback">{{$errors->first('name')}}</small>
         @endif
      </div>
      <div class="form-group">
        <label>Email Address:</label>
           <input type="text" class="form-control" name="email">
           @if($errors->has('email'))
           <small class="form-text invalid-feedback">{{$errors->first('email')}}</small>
         @endif
      </div>

      <div class="form-group">
        <label>Message:</label>
           <input type="" class="form-control" name="message">
           @if($errors->has('message'))
           <small class="form-text invalid-feedback">{{$errors->first('message')}}</small>
         @endif
      </div>

      <button class="btn btn-primary"  >Submit</button>
    </form>
    </div>
  </div>
</div>

  </body>
</html>
