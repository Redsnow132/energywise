<!DOCTYPE html>
<html lang="en">
<head>
<title>Energywise Locations</title>
<meta charset="utf-8">
<script>
function showPanel1(){
  if(displayPanel1.value == 'Oakhill'){
   panel1.style.display = 'block';
   displayPanel1.value = 'Hide';
  } else if(displayPanel1.value == 'Hide'){
   panel1.style.display = 'none';
   displayPanel1.value = 'Oakhill';
  }
 }
 
 function showPanel2(){
  if(displayPanel2.value == 'MCHP'){
   panel2.style.display = 'block';
   displayPanel2.value = 'Hide';
  } else if(displayPanel2.value == 'Hide'){
   panel2.style.display = 'none';
   displayPanel2.value = 'MCHP';
  }
 }
</script>
</head>
<body>
<header>

</header>
<nav>
<? include("server/constants/nav.php"); ?>
</nav>
<main>

<input type="button" id="displayPanel1" onclick="showPanel1()" value="Oakhill">


<div id="panel1" style="display:none">
 panel1 placeholder
</div>


<input type="button" id="displayPanel2" onclick="showPanel2()" value="MCHP">


<div id="panel2" style="display:none">
 panel2 placeholder
</div>

</main>
<footer>

</footer>
</body>
</html>
