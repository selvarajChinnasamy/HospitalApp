<html>
<head>
<title>Hospital Login</title>
<link rel="icon" 
      type="image/png" 
      href="favicon.png">
</head>
<body>
<style>
body{
background: url("5.jpg");
background-size: 100% 100%;
background-repeat: no-repeat;
  font-family: 'roboto', sans-serif;
  padding: 0 1em;
  color: rgba(255,255,255,.8);
}

.login-page {
  width: 460px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:#CD5C5C;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  transition: all 0.5s;
  cursor: pointer;
}
.form button:hover{
  background:#FFA07A;
}
@media (max-width: 500px) {
.login-page {
  width: 310px;
  padding: 8% 0 0;
  margin: auto;
}
}
</style>

<div class="login-page">
<div class="form" >
<form action="hosloginDc.php">
	  <input type="text" id="Usid1" name="Usid1" placeholder="Hospital ID"/>
      <input type="password" id="paas1" name="paas1" placeholder="Password"/>
      <button type="submit" >login</button>
</form>
</div>
</div>
</body>
</html>