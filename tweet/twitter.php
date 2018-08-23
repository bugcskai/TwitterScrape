<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, Twitter - by Kai!</title>
  </head>
  <body>    
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
         <h1>Hello, Twitter!</h1>

          <form action="tweetsearch.php" class="text-left">
            <div class="form-group">
              <label for="user">User Search</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
              <input type="text" class="form-control" id="user" placeholder="Hello" value="KidspotSocial" name="user">
            </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
            <input type="hidden" name="searchuser" value="1">
          </form>

          <form action="tweetsearch.php"  class="text-left">
            <div class="form-group">
              <label for="hash">Hash Tag Search</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">#</span>
                </div>
               <input type="text" class="form-control" id="hash" placeholder="Another input" value="KidspotSocial" name="hash">
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Search</button>
            </div>
            <input type="hidden" name="searchhash" value="1">
          </form>

        </div>
      </section>
      <section>
        <div class="container">
          <pre>
          <div class="output" id="output">
=================================
this
is
the output
that will be shown here.
=================================
</div>
          </pre>        
        </div>
      </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
  </body>
</html>