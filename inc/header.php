<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <div class="col-xs-3"><img src="img/Fav.png" alt="Logo" width="30px"></div>
      <div class="col-xs-9">Narmada Path</div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
<!--     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text"></i> Pages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
          </ul>
        </li> -->
        

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt"></i> Categories <span class="caret"></span></a>

          <ul class="dropdown-menu">           
           <?php
              $query = "SELECT * FROM categories ORDER BY id DESC";
              $run = mysqli_query($con, $query);
              if(mysqli_num_rows($run) > 0){
                  while($row = mysqli_fetch_array($run)){
                      $category = $row['category'];
                      $id = $row['id'];
                      echo "<li><a href='index.php?cat=".$id."'>$category</a></li>";
                  }   
              }
              else{
                  echo "<li><a href='#'>No Category Yet</a></li>";
              }
              ?>
          </ul> 
        </li>
        
     
        <li><a href="Contact-us.php"><i class="fa fa-phone"></i> Contact Us</a></li>                
      </ul> 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-md-2"></div>
<div class="col-md-8"><div class="jumbotron">
  <div class="container">
    <div id="details" class="animate fadeInLeft">
        
    </div>
  </div>
  <img src="img/Head.png" alt="TOP Image">
</div>   
</div>
<div class="col-md-2"></div>    
<!--<div class="jumbotron">
  <div class="container">
    <div id="details" class="animate fadeInLeft">
        
    </div>
  </div>
  <img src="img/Head.jpg"ā alt="TOP Image">
</div>   -->
