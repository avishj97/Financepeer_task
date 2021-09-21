<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		.menu-btn{
			background: transparent;
			border:1;
			position: absolute;
			top: 100px;
			left: 800px;
			border-radius: 30px;
			font-family: "Berlin Sans FB";
			font-size: 20px;
			outline: none;
			float: right;
			cursor: pointer;
		}
		#home{
			left: 900px;
		}
		#profile{
			left: 1100px;
		}
		#logout{
			left: 1300px;
		}
		.chat-btn{
			height: 100px;
			width: 200px;
			top: 300px;
			position: absolute;
			left: 650px;
			background: white;
			border: 1px solid white;
			outline: none;
			font-family: "Britannic Bold";
			font-size: 25px;
			border-radius: 10px;
			color: black;
			cursor: pointer;
			display: block;
			box-shadow: 0 0 50px 5px;
			font-weight: bold;
			
		}
		.create-btn{
			background: transparent;
			border: 1px solid white;
			position: absolute;
			top: 500px;
			border-radius: 30px;
			font-family: "Berlin Sans FB";
			font-size: 20px;
			height: 50px;
			outline: none;
			display: none;
			cursor: pointer;
			color: white;
			padding: 10px;
		}
		.create-btn:hover{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			background-color: rgba(255,255,255,0.5);
		}
		#create{
			left: 525px;
		}
		#join{
			left: 800px;
		}
		.title{
			font-family: "Bauhaus 93";
			font-size: 30px;
			color: white;
			top: 60px;
			left: 70px;
			float: left;
			position: absolute;
			
		
		}
		.welcome-user{
			height: 27px;
			width: 250px;
			border-radius: 10px;
			text-align: center;
			
			background-color: rgba(255,255,255,0.5);
			font-size:20px; 
			position:absolute; 
			top:40px; 
			left:630px;
		}
		
	</style>
</head>
<body background="Picture3.png">
<div>
<div class="title">

	FinancePeer

</div>

<span id="emailid" class="welcome-user">Welcome <strong><i><?php session_start(); echo $_SESSION['user']; ?></i></strong></span>

<form>
	
	<span id="logout" class="menu-btn" onmouseover="change(this)" onmouseout="changeback(this)" onclick="location.href='index.php';">Logout</span>
</form>
<form>
	<input type="button" name="chat" class="chat-btn" value="Upload" onclick="show()" onmouseover="glow(this)" onmouseout="normal(this)">
	
</form>
<script type="text/javascript">
	
	var s=document.getElementById("chat");
	
	var out=document.getElementById("logout");
	var eid=document.getElementById("emailid");
	
	localStorage.setItem("email", eid);

	function show(){
		if(c.style.display==="block"){
			c.style.display="none";
			j.style.display="none";	
		}
		else{
			c.style.display="block";
			j.style.display="block";
		}
	}
	function glow(s){
		s.style.height="106px";
		s.style.width="210px";
		s.style.top="297px";
		s.style.left="645px";
		s.style.fontSize="30px";

	}
	function normal(s){
		s.style.height="100px";
		s.style.width="200px";
		s.style.top="300px";
		s.style.left="650px";
		s.style.fontSize="25px";
		
	}
	function change(h){
		h.style.color="white";
	}
	function changeback(h){
		h.style.color="black";
	}



</script>
</div>
</body>
</html>