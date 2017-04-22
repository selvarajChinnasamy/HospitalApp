<html>
<head>
<title>Patient Search</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
<style>
body {
  background: url("31.jpg");
  font-family: 'roboto', sans-serif;
  padding: 0 1em;
  color: rgba(255,255,255,.8);
}
#search{
  background: url(icons.png) no-repeat left top;
color: #ddd;
height:40px;
  display: block;
  padding-left: 3em;
  width: 100%;
  border:none;
  border-bottom:1px solid white;
}
#search:focus{
outline:none;}

nav {
  background:#111111;
  padding-right: .25em;
  position: absolute;
  left: -20em;
  top: 0;
  padding-top: 5em;
  z-index: 20;
  height:100%;
  width:20%;
  -webkit-transition: all .3s;
  -o-transition: all .3s;
  transition: all .3s;
}

nav.active { left: 0; }

#mobile-nav {
  background: url(menu-icon.png);
  cursor: pointer;
  left: 2em;
  height: 30px;
  position: absolute;
  top: 2em;
  width: 30px;
  z-index: 30;
}
.modal {
    display:none; 
    position:relative;
    z-index: 1; 
    padding-top: 30px; 
    left: 0;
    top: 0;
	margin-left:10%;
    min-   width: 50%; 
    min-height: 50%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    padding: 30px;
    border: 1px solid #888;
    width: 30%;
	color:black;
	float:right;
	margin:50px;
}


.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.select{
border:none;
width:100%;
height:45px;
border-bottom:1px solid #FF6347;
}
.select:hover,focus{
outline:none;
cursor:pointer;
}
#ajax{
display:block;
}
h3{
text-align:center;
font-family:Cursive;
}
h1{
text-align:center;
}
h4{
text-align:top;
}
.button{
width:100%;
padding:15px;
background:#FF6347;
border:none
}
.button:hover{
cursor:pointer;
background:#32CD32;
}

.button9 {
    background-color:#F08080;
    border:none;
    color: white;
	float:right;
	margin:10px;
    padding: 12px 27px;
	position:relative;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
}

.gh{
border:none;
border-bottom:1px solid #FF6347;
height:45px;
width:100%;
}
.gh:focus{
outline:none;}
h2{
	margin-top:50px;
	text-align:center;
}
/*.annimate{
	animation: skew 3s infinite;
  transform: skew(20deg);
  animation-direction: alternate;
}
@keyframes skew {
  0% {
    transform: skewX(20deg);
  }
  100% {
    transform: skewX(-20deg);
  }
}*/
</style>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "u656401271_user";
$password = "password";
$dbname =   "u656401271_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$docid=$_SESSION['docid']; 
$pass=$_SESSION['paas'];
if($docid==null){
	header("Location: login.html");
}
$sql="SELECT `Name`,`Hospital` FROM `data`.`docter` WHERE `docid`='$docid'";
$result1 = $conn->query($sql);
$row1 = $result1->fetch_assoc();
$docname=$row1['Name'];
$hosname=$row1['Hospital'];
?>
  <a href="fileup/index.php" class="button9">Upload File</a> 
 <a href="view1.html" class="button9"> View File</a>
 <a href="logout.php" class="button9" >Logout</a>
 <a href="blood.php" style=" background-color:#3CB371;" class="button9" >Blood Search</a><br><br><br><br>
<div id="mobile-nav"></div>
<h1>Electronic Health Care System</h1>
<input type="hidden" name="docid" id="docid" value="<?php echo $docid; ?>">
<h2><?php echo $hosname; ?></h2>
<h2>Welcome Dr. <?php echo $docname; ?></h2>

<nav>
 <input id="search" name="search" placeholder="Search for Patients..." onchange="ajaxFun();modelfun();ajaxFun3();" >
 
 </nav> 

<div id="myModal" class="modal">
<div id="myModal1" class="modal-content" style="transform:rotate(0deg);">
    <span class="close" onclick="modelclo1()">&times;</span>
   <input  type="text" class="gh" id="search1" name="search1" placeholder="Suffering from"  >
   <br><br><input type="text" class="gh" id="medi" name="medi" placeholder="Suggesed Medicine"  >
   <br><br><select name="issue" id="issue" class="select">
   <option>Catagory</option>
   <option value="high">High</option>
   <option value="medium">Medium</option>
   <option value="low">Low</option>
   </select>
   <br><div id="ajax1"></div> 
   <br><button type="button" class="button" onclick="ajaxFun1()">Submit</button>
  </div>
<div class="modal-content" >
    <span class="close" onclick="modelclo()">&times;</span>
   <div id="ajax"></div><br>
</div>
<div id="myModal3" class="modal-content">
    <span class="close" onclick="modelclo3()">&times;</span>
   <div id="ajax3"></div><br>
  
</div>
 
</div>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
function modelfun(){
document.getElementById('myModal').style.display = "block";
}
function modelclo(){
document.getElementById('myModal').style.display = "none";
}
function modelclo1(){
document.getElementById('myModal1').style.display = "none";
}
function modelclo3(){
document.getElementById('myModal3').style.display = "none";
}
</script>
<script>
$('#mobile-nav').click(function(event) {
  $('nav').toggleClass('active');
});
</script>
<script language = "javascript" type = "text/javascript">
        
            function ajaxFun1(){
               var ajaxRequest; 
               try {
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajax1');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               var search1 = document.getElementById('search1').value;
			   var docid = document.getElementById('docid').value;
			    var id = document.getElementById('search').value;
			    var medi = document.getElementById('medi').value;
				 var issue = document.getElementById('issue').value;
			   var queryString = "?search1=" + search1;
			   var queryString  = queryString+"&medi=" + medi;
			   var queryString = queryString+"&issue=" + issue;
			   var queryString = queryString+"&id=" + id;
			   var queryString = queryString+"&docid=" + docid;
               ajaxRequest.open("GET", "maindata.php" + queryString, true);
			   alert(queryString);
               ajaxRequest.send(null); 
            }
        
</script>
 <script language = "javascript" type = "text/javascript">
        
            function ajaxFun(){
               var ajaxRequest; 
               try {
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajax');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               var search = document.getElementById('search').value;
			   var queryString = "?search=" + search;
               ajaxRequest.open("GET", "value.php" + queryString, true);
			   /*alert(queryString);*/
               ajaxRequest.send(null); 
            }
        
            function ajaxFun3(){
               var ajaxRequest; 
               try {
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajax3');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               var search = document.getElementById('search').value;
			   var queryString = "?search=" + search;
               ajaxRequest.open("GET", "maindataget.php" + queryString, true);
			   /*alert(queryString);*/
               ajaxRequest.send(null); 
			 
            }
</script>
</body> 

</html>