<style>
	header{
		display: flex;
		justify-content: space-between;
		width: 80%;
		height: 150px;
		margin: 0 auto;
		z-index: 1;
	}
	header .box-logo{
		display: flex;
		align-items: center;
		width: 40%;	
	}
	header .box-menu{
		display: flex;
		align-items: center;
		width: 60%;
	}
	header .box-menu nav{
		display: flex;
		justify-content: flex-end;
		width: 100%;
		font-size: 15px;
	}
	header .box-menu nav .main-nav{
		width: 100%;
		display: flex;
		justify-content: space-between;
		white-space: nowrap;
		list-style: none;
		margin: 0;
		padding: 0;
	}
	header .box-menu nav .main-nav li{
		position: relative;
		border-bottom: 1px solid #3070A9;
	}
	header .box-menu nav .main-nav li a{
		color: #3070A9;
		text-decoration: none;
		margin: 0 -10px;
	}
	header .box-menu nav .main-nav li a .fa-caret-down{
		font-size: 15px;
		position: absolute;
		margin: 0 5px;
	}
	header .box-menu nav .main-nav li a:hover{
		color: #18CAE8;	
	}
	header .box-menu nav .main-nav li .sub-nav{
		position: absolute;
		min-width: 200px;
		margin: 0;
		padding: 0;
		opacity: 0;
		list-style: none;
		visibility: hidden;
		transition: .3s;
		-webkit-box-shadow: 0px 20px 40px -10px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 20px 40px -10px rgba(0,0,0,0.75);
		box-shadow: 0px 20px 40px -10px rgba(0,0,0,0.75);
		background-color: #fff;
	}
	header .box-menu nav .main-nav li .sub-nav li{
		width: 100%;
		padding: 15px 0px 15px 0px;
		margin: 0 20px 0 20px;
		border: 0;
		border-left: 2px solid transparent;
	}
	header .box-menu nav .main-nav li .sub-nav li a{
		text-decoration: none;
		color: #3070BB;
		padding: 5px;
		display: block;
		margin: 0px;
	}
	header .box-menu nav .main-nav li .sub-nav li a:hover{
		border-left: 2px solid #3070BB;
		transition: .3s;
	}
	header .box-menu nav .main-nav li:hover .sub-nav{
		visibility: visible;
		opacity: 1;
	}
	header .box-menu nav .menu-mobile{
		display: none;
		font-size: 40px;
		position: absolute;
		top: 50px;
		right: 20px;
	}
	@media screen and (max-width: 1280px){
		header{
			width: 85%;
		}
		header .box-logo .logo-efectus{
			width: 300px;
		}
		header .box-menu{
			width: 80%;
		}
	}
	@media screen and (max-width: 1024px){
		header{
			width: 90%;
		}
		header .box-logo .logo-efectus{
			width: 220px;
		}
		header .box-menu{
			width: 95%;
		}
	}
	@media screen and (max-width: 960px){
		header .box-menu{
			position: absolute;
			width: 40%;
			right: 6px;
			z-index: 1;
		}
		header .box-menu nav .main-nav li a .fa-caret-down{
			display: none;
		}
		header .box-logo .logo-efectus{
			width: 300px;
		}
		header .box-menu nav .main-nav{
			display: none;
			flex-direction: column;
			align-items: flex-end;
			position: absolute;
			top: 100px;
		}
		header .box-menu nav .menu-mobile{
			display: block;
			justify-content: flex-end;
			align-items: center;
		}
		header .box-menu nav .main-nav li{
			width: 100%;
			border: none;
			text-align: right;
			background-color: #fff;
			padding: 10px;
			margin: 0 0 0 20px;
			border-bottom: 1px solid #ccc;
			border-left: 1px solid #ccc;
		}
	}
</style>
<script>
	window.onload = function(){
		document.querySelector(".menu-mobile").addEventListener("click", function(){
			if(document.querySelector(".box-menu nav ul").style.display == 'flex'){
				document.querySelector(".box-menu nav ul").style.display = 'none';
			}else{
				document.querySelector(".box-menu nav ul").style.display = 'flex';
			}
		});
	};
</script>
<header>
	<div class="box-logo">
		<a href="index.php"><img class="logo-efectus" src="imagens/identidadeVisual/logo-header-efectus-digital.png"></a>
	</div>
	<div class="box-menu">
		<nav>
			<div class="menu-mobile">
				<i class="fas fa-bars"></i>
			</div>
			<ul class="main-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">MARKETING DIGITAL<i class="fas fa-caret-down"></i></a>
					<ul class="sub-nav">
						<li><a href="#">Google Adwords</a></li>
						<li><a href="#">Social Media</a></li>
						<li><a href="#">Google Analytics</a></li>
						<li><a href="#">SEO</a></li>
					</ul>
				</li>
				<li><a href="desenvolvimento-de-site.php">DESENVOLVIMENTOS DE SITES</a></li>
				<li><a href="sobre.php">SOBRE</a></li>
				<li><a href="contato.php">CONTATO</a></li>
			</ul>
		</nav>
	</div>
</header>