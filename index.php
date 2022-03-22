<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Bootstraplord Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column justify-content-center align-items-center my-flex-container">
    <h2>Login baebeh</h2>

    <div class="d-flex flex-column card text-white bg-dark mb-3" style="width: 400px;">
      <div class="card-body">
        <div class="form-group">
          <form action="http://httpbin.org/post" method="post">
              <div class="p-2 form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
              </div>
            
              <div class="p-2 form-group">
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">mn
              </div>
          
              <button class="submit" type="submit">Submit</button>
          </form> 
        </div>
      </div>
    </div>

    <div>
        <span>Not a member?</span>
        <a href="register-page.php"><button class="signup">Sign Up</button></a>

    </div>
    

    
</body>
</html>