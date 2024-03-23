<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">

</head>
<body class="antialiased">
   <div class="container">
      <h1>Login as an administrator</h1>
      <form action="{{ route('dashboard') }}" method="POST">
           @csrf

           <div class="form-group">
               <label for="name">Username:</label>
               <input type="text" class="form-control" id="name" name="name" required>
           </div>
           <div class="form-group">
               <label for="password">Password:</label>
               <input type="password" class="form-control" id="password" name="password" required>
           </div>
           <button type="submit" class="btn btn-primary">Login</button>
       </form>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
