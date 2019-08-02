  <?php
    foreach($css_files as $file):
    ?>
    <link rel="stylesheet" href="<?=$file;?>">
    <?php
     endforeach;
    ?>
      
      <div class="container-fluid">

      <?=$output;?>
    <?php foreach($js_files as $files): 
    ?>
    <script src="<?=$files;?>">
    </script>
    <?php endforeach; 
    ?> 
      </div>
   