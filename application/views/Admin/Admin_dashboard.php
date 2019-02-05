<?php
  include_once('Header.php');
?>
   <html>
    <head></head>
    <body>
    <div class="container" style="margin-top:60px; margin-left:550px">
           <?= anchor('Admin/add_article','Add Article',['class'=>'btn btn-primary']); ?>
       </div>
    <div class="container" style="margin-top:60px">
       
        <?php if($error=$this->session->flashdata('insert_msg'))
                {  ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success">
                            <?php echo $error; ?>
                        </div>
                    </div>
                </div>    
                
        <?php } ?>
        <?php if($error=$this->session->flashdata('update_msg'))
                {  ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success">
                            <?php echo $error; ?>
                        </div>
                    </div>
                </div>    
                
        <?php } ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Article Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
               <?php foreach($articles as $article){?>
                <tr>
                    <td><?php echo $article['id']; ?> </td>
                    <td><?php echo $article['article_title']; ?></td>
                    <td><?=  anchor("Admin/edit_article/{$article['id']}",'Edit',['class'=>'btn btn-primary']);  ?></td>
                    <td><a href="#" class="btn btn-danger"> Delete</a></td>
                </tr>
            <?php  }  ?>
            
        </table>
    </div>
    </body>
</html>