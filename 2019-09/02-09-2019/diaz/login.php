<html>
	<head>
		<title>Login Page Admin</title>
		<style>
        body{
            margin:0;
            padding:0;
            background-image:url("backgroumd.jpg");
            background-size:100% 100%;
            font-family:comic sans ms;
        }
        a{
            color:black;
            text-decoration:none;
        }
        #halaman{
            background-color:black;
            width:500px;
            height:250px;
            margin-top:200px;
            margin-left:auto;
            margin-right: auto;
            border:5px white double;
            border-radius: 30px;
        }
        .content{
            color:white;
        }
        .judul-content{
            text-align:center;
            padding-bottom:5px;
            border-bottom: 2px white double;
        }
        .isi-content{
            padding-left: 125px;
            padding-top: 40px;
        }
        </style>
	</head>
	<body>
		<div id="halaman">
			<div class="content">
				<p class="judul-content">Login Admin</p>
				<div class="isi-content">
					Username   :  <input type="text" name="username"><br><br>
					Password    &nbsp;:   <input type="password" name="password"><br><br>
					<input type="submit" value="Login">
				</div>
			</div>
		</div>
	</body>
</html>