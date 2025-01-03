<?php 
$arry =

 [
    [
    'name' => "Ahmed Khaled",
    'email' => "ahmed@gmail.com",
    'password' => "password123",
    'age' => 25,
    ],
     
    [
        'name' => "Sara Othman",
        'email' => "sara@gmail.com",
        'password' => "passwordsara",
        'age' => 24,
    ],

    [
        'name' => "Mostafa Khaled",
        'email' => "mostafa@gmail.com",
        'password' => "passwordmostafa",
        'age' => 22,

    ]
    
 
 ]


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center><h1>Hello, world!</h1></center>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">AGE</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($arry as $key => $value) { ?>
    <tr>
      <td><?php print_r($arry[$key]['name']); ?></td>
      <td><?php print_r($arry[$key]['email']); ?></td>
      <td><?php print_r($arry[$key]['password']); ?></td>
      <td><?php print_r($arry[$key]['age']); ?></td>
    </tr>
    <?php  } ?>
  </tbody>
</table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
