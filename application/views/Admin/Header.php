<html>
   <head>
    <title></title>
    <?= link_tag("Assets/css/bootstrap.min.css") ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= base_url("User/index"); ?>" >Article List</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
     <?php
        $id = $this->session->userdata('id');
        if($this->session->userdata('id')){  ?>
      
      <li class="nav-item active">
         <a class="nav-link" href="<?php echo base_url("Admin/logout") ?>" ><?php echo "Logout" ?><span class="sr-only">(current)</span></a>
      </li>
        <?php }?>    
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
       
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        
    </body>
</html>