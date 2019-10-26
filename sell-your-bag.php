<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Brandville</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="brandville.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script defer src="https://kit.fontawesome.com/f7ff30a061.js" crossorigin="anonymous"></script>
  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- include header-->
    <?php include 'navbar.php'?>
    <!-- submiting items section-->
    <section id="body">
     <!-- vetem ne telefon -->
     <div class="container label-cont">
       <div class="row">
         <div class="col-12 text-center">
           <br>
     <label class="sell-ur-item">SELL YOUR ITEM</label>
 </div>
 </div>
 </div>
 <hr class="hr-nav">
   <div class="container">
 <div class="row  text-center">
   <div class="col">
       <h2 class="h2-submit">Submit item for quote</h2>
       <div class="row">
         <div class="col text-center">
   <hr class="hr-submit">
     </div>
       </div>
     </div>
   </div>
 </div>


 <div class="row">
 <div class="col-lg-12 ">
   <div class="container">
 <form action="">
   <div class="row">
   <div class="col-lg-6">
     <div class="container">
   <div class="form-group">
     <div class="row">
       <div class="col-lg-6 ">
         <label for="email">Designer <i class="fas fa-question-circle"></i></label><br>
         <select class="mdb-select md-form">
     <option class="value" value="" disabled="" selected=""></option>
     <option class="value" value="1">Option 1</option>
     <option class="value" value="2">Option 2</option>
     <option class="value" value="3">Option 3</option>
   </select>
       </div>
   <div class="col-lg-6">
     <label for="pwd">Category</label><br>
     <select class="mdb-select md-form">
 <option class="value" value="" disabled="" selected=""></option>
 <option class="value" value="1">Sell your bag</option>
 <option class="value" value="2">Sell your watch</option>
 </select>
   </div>
 </div>
 </div>
 <div class="form-group">
     <label class="name">Item Name</label><br>
     <input class="input-name" type="name" value="">
 </div>
 <div class="form-group">
 <label for="comment">  Item Details &amp; Condition Comments <i class="fas fa-question-circle"></i></label><br>
 <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
 </div>
 <div class="form-group">
     <label for="email">E-mail</label><br>
     <input type="email" value="" class="email">
   </div>
 </div>
 </div>


 <!-- images upload -->
 <div class="col col-lg-6 ">
   <div class="container images-upload-container">
   <p>Product Images <i class="fas fa-question-circle"></i></p>
   <div class="pic-container">
     <div class="form-group">
     <div class="row upload-row">
     <div class="col-4">
     <div class="avatar-zone">
 </div>
 </div>
 <div class="col-4">
 <div class="avatar-zone">
 </div>
 </div>
 <div class="col-4">
 <div class="avatar-zone">
 </div>
 </div>
 </div>
 <div>
 </div>
 </div>
 <br>
 <div class="form-group">
 <div class="row upload-row">
 <div class="col-4">
 <div class="avatar-zone">
 </div>
 </div>
 <div class="col-4">
 <div class="avatar-zone">
 </div>
 </div>
 <div class="col-4">
 <div class="avatar-zone">
 </div>
 </div>
 </div>
 </div>
 </div>
    <br>
    <div class="row">
      <div class="col-12">
        <button type="submit" class="upload-prod" action="">SUBMIT <i class="fas fa-angle-right"></i></button>
      </div>
    </div>
 </div>

               </div>
               </div>
                  </form>
                </div>
              </div>
            </div>

</section>
<!-- including bottom menu and footer-->
<?php include 'bottom-menu+footer.php' ?>
  </body>
</html>
