<?php
        if(isset($_GET['log']) && ($_GET['log']=='out')){
            session_destroy();
            header('location:index.php');
        }
          echo "<a class='nav-link' href='?log=out'>Logout</a>";
  ?>
