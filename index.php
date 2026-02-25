<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cover Template for Bootstrap</title>

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Hello World</h1>
        <p class="lead">
          This is a simple one page website, please feel free to comment me on github.
        </p>

        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">By @supervalentine</a>

          <?php
            $user = $_GET["username"] ?? "";
            $credential = $_GET["credential"] ?? "";

            $flag = "FLAG{example_flag_here}";

            if ($user === "sa" && $credential === "JDM82XDVMcNI^wpdW7ZQ5")
            {
                echo "<br><br>The flag is " . $flag;
            }
          ?>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner"></div>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
