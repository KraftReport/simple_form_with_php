<?php 
$error =0;
$login =0;

if(isset($_POST['submit'])){
    include('connect.php');
     $name = $_POST['name'];
     $password = $_POST['password'];

     $sql = "select * from `signup` where name='$name' and password='$password'";
     $result = mysqli_query($con,$sql);

     if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $login=1;
            session_start();
            $_SESSION['name']=$name;
            header('location:home.php');
            
        }else{
             $error=1;
     }
}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
 
<?php

if($error){
  $alert = '<div class="  columns-4">
  <div class="bg-red-100 border border-red-400 text-red-700  px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">Error !</strong>
  <span class="block sm:inline">Invalid password or user name.</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div></div>';
  echo $alert;
}else if($login){
  $galert= '<div class="  columns-4">
  <div class="bg-sky-100 border border-sky-400 text-sky-700  px-4 py-3 rounded relative" role="alert">
  <strong class="font-bold">SUCCESS !</strong>
  <span class="block sm:inline">Log in successful.</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
    <svg class="fill-current h-6 w-6 text-sky-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div></div>';
echo $galert;

};

 

?>
 
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
     <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-sky-500"><i class="fa-solid fa-user text"></i>  Log in</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="log.php" method="POST">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-blue-500">User name</label>
        <div class="mt-2">
          <input id="name" name="name" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-blue-500">Password</label>
          <div class="text-sm">
           </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" name="submit">Log in</button>
      </div>
      <div class=""><a class="ml-40 inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="sign.php"><i class="fa-solid fa-pen-nib"></i>
        Sign in ?
      </a></div>
    </form>

    <!-- #endregion -->
  </div>
</div>

</body>
<script src="https://kit.fontawesome.com/e2397b357b.js" crossorigin="anonymous"></script>
<script>
  var alertdel =document.querySelectorAll('.alert-del');
  alertdel.forEach((x)=>{
    x.addEventListener('click',()=>{
      x.parentElement.classList.add('hidden');
    })
  })
</script>
</html>