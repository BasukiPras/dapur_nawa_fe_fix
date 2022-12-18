<!--  -->
<?php include("koneksi/koneksi.php");?>

<!doctype html>
<html lang="en">
  <head>
    <?php include("includes/head.php");?>
  </head>
  <body>
    <?php include("includes/navigasi.php");?>
 
    <?php 
    //pemanggilan konten halaman index
    // include("include/index.php");
    if(isset($_GET["include"])){
      $include = $_GET["include"];

      if($include=="menu"){
        include("include/menu.php");
      }else if($include=="about"){    
        include("include/about.php");
      }else if($include=="contact"){    
        include("include/contact.php");
      }else if($include=="terbaru"){    
        include("include/terbaru.php");
      }else if($include=="terbarunasigoreng"){    
        include("include/terbarunasigoreng.php");
      }else if($include=="terbarumenggoreng"){    
        include("include/terbarumenggoreng.php");
      }else if($include=="terbaruinovasi"){    
        include("include/terbaruinovasi.php");
      }else if($include=="terbarujamu"){    
        include("include/terbarujamu.php");
      }else if($include=="terbarumakanan"){    
        include("include/terbarumakanan.php");
      }else if($include=="terbarucapcay"){    
        include("include/terbarucapcay.php");
      }
    }else{
      include("include/index.php");
    }
    ?>
    
    <?php include("includes/footer.php");?>
    <!-- Optional JavaScript; choose one of the two! -->
    <?php include("includes/script.php");?>
  </body>
</html>
