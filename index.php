 <?php   
require_once 'second.php';
 ?> 

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto border  p-3 mt-5">
        <form action="" mehod="GET">

          <input type="text" name="mission" class="form-control" placeholder="mission to done ">
          <input type="submit" class="form-control mt-5" >
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto border  p-3 mt-5">

        <table class='table table-bordered  border-5'>
          <div class="container">
            <tbody>
    
              <?php
$x = json_decode(file_get_contents($filename), true);
    
           foreach($x as  $val){ ?>
        
        <tr>
        <td class="col-1">
        
        <h4 class=""><?php echo $val['index']; ?></h4>
        </td>
                <td class="col-5">

                <h4 class=""><?php echo  $val['mission']; ?></h4>
                </td>
                <td class="col-1">
                <div class=" text-center">
                <a href="index.php?index=<?php echo $val['index'];?>"  class=" btn btn-danger rounded-5">Delete</a>
                </div>
                </td>


                
                </tr>
          

                <?php }?>


            </tbody>

        </table>
      </div>
    </div>
  </div>














  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>