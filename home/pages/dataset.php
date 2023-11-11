<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dataset.css">
    <title>Dataset</title>
</head>
<body>
   <nav class="navbar">
       <div id="logo">Dataset</div>
       <ul>
           <li> <a href="../">Home</a> </li>
       </ul>
       <form class="form-group" action="#">
           <input type="search" name="search" id="search" placeholder="Search">
           <button id="btn">Search</button>
       </form>
   </nav>

   <div class="container">
       <h1>Your dataset</h1>
       <div class="border">
           <label for="addNote">Add a Dataset</label> <br>
           <textarea name="textarea" id="textarea" cols="80" rows="5"></textarea> <br>
           <button id="myBtn">Add Dataset</button>
       </div>
       <hr class="hrStyle">
       <h1>Your Dataset</h1>
       <hr class="hrStyle">
       <div id="notes" class="notesBox"> </div>
   <script src="../js/dataset.js"></script>
</body>
</html>
