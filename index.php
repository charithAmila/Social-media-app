<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MyTest</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="public/css/blog.css" rel="stylesheet">
    <script src="public/js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
	      <div class="col-md-6 col-md-offset-3" style="margin-top: 100px;">
                  <form action="lib/routes/routes.php" method="POST">
                      <div class="row">
                          <div class="col-md-2">
                              <label>Post</label>
                          </div>
                      </div>
                      <textarea class="form-control" rows="6" name="s_post" placeholder="Write your post "></textarea>
                      <br/>
                      <div class="row">
                          <div class="col-md-10">
                              <label>
                                  <input type="checkbox" name="media" value="fb"> Facebook 
                              </label>
                              <label>
                                  <input type="checkbox" name="media" value="tw"> Twitter 
                              </label>
                          </div>
                      </div>
                      <br/>
                      <button class="btn btn-sm btn-info">POST</button>
                  </form>
	      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

