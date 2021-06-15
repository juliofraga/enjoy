    <div class="container py-5" id="hanging-icons">
      <?php
        if(isset($_GET["reg"])){
          if($_GET["reg"] == "success"){
              echo "<div class='alert alert-success' role='alert'>";
              echo "User succesfully Registered, now you can sign in! ";
              echo "</div>";
          }
        }
        if(count($dados) > 0){
          if($dados["status"] == "error"){
            echo "  <div class='alert alert-danger' role='alert'>";
            echo $dados["mensagem"];
            echo "</div>";
          }
          else if($dados["status"] == "success"){
            echo "  <div class='alert alert-success' role='alert'>";
            echo $dados["mensagem"];
            echo "</div>";
          }else if($dados["status"] == "updatePage"){
            echo "<script>window.location.href='".URL."'</script>";
          }
        }
      ?>
      <h2 class="pb-2 border-bottom">Most Visited Functions</h2>
      <div class="row g-5 py-3">
        <?php foreach($dados["dados"] as $info){ ?>
          <div class="col-md-3 align-items-start" style="height:200px;">
            <div style="height:120px;overflow: hidden; margin-bottom:5%;">
              <h3><b><?= $info->titfun ?></b></h3>
              <p><?= $info->absfun ?></p>
            </div>
            <a href="<?= URL ?>/Functions/viewfunction/<?= $info->slugfu ?>" class="btn btn-primary">View Function</a>   
          </div>
        <?php } ?>
      </div>
    </div>