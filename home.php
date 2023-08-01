<?php 

session_start();
if(!isset($_SESSION['name'])){
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<?php 

echo '<div class="  columns-4">
<div class="bg-sky-100 border border-sky-400 text-sky-700  px-4 py-3 rounded relative" role="alert">
<strong class="font-bold">SUCCESS !</strong>
<span class="block sm:inline">Log in successful.</span>
<span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
  <svg class="fill-current h-6 w-6 text-sky-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
</span>
</div></div>';

?>
    

<div class="ml-96 mt-60 ">
<div class="ml-20">
<div class="ml-12 max-w-sm rounded overflow-hidden shadow-lg">
  <div class="px-6 py-4">
    <div class=" ml-12 font-bold text-xl  mb-2"><strong class="text-emerald-500">Welcome !</strong> <?php echo $_SESSION['name'] ?> </div>
  
</div>
  </div>
</div>
</div>
<button class="rounded-full mt-20 ml-20  font-bold text-white bg-red-500 p-2"><a href="logout.php"> <i class="fa-solid text-white fa-right-from-bracket"></i> Logout</a></button>
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