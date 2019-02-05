<?php 
include_once('Header.php');
?>
<html>
    <head>
    
    </head>
    <body>
           
            
    <div class="container" style="margin-top:60px">
       
        
        <table class="table">
            <thead>
                <th>Image</th>
                <th>Article Title</th>
                <th>Article Body</th>
                
            </thead>
               <?php foreach($article as $article){?>
                <tr>
                    <td><?php if(! is_null($article['image_path'])){}
                        ?><img src=<?php echo $article['image_path']?> width="200px" height ="200px"     >   </td>
                    <td><?php echo $article['article_title']; ?></td>
                    <td><?php echo $article['article_body']; ?>    </td>
                </tr>
            <?php  }  ?>
            
        </table>
    </div>
        
    
    </body>
</html>

