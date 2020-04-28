<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<style>
		.head-div{
			background: #BDC2BF;
			font-size: 24px;
			color: #25291C;
			font-family: "Roboto";
			transition: all 1s;
			display: flex;
			justify-content: space-between;
		}
		.head-div img{
			width: 300px;
			height: 60px;
			transition: all 1s;
		}
		.button {
			background-color: #BDC2BF;
			border: none;
			color: #25291C;
			padding-bottom: 16px;
			padding-top: 16px;
			width: 175px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: "Roboto";
			font-size: 24px;
			float: left;
			transition-duration: 0.3s;
		}
		.buttonm{
			background-color: #BDC2BF;
			border: none;
			color: #25291C;
			padding-bottom: 4px;
			padding-top: 4px;
			width: 120px;
			text-align: left;
			text-decoration: none;
			display: inline-block;
			font-family: "Roboto";
			font-size: 18px;
			transition-duration: 0.3s;
		}
		.buttonm:hover {
			background-color: #acb1ae;
		}
		.menu-button {
			display: none;
			background-color: #BDC2BF;
			border: none;
			text-decoration: none;
			margin-left: auto;
		}
		.sub-menu{
			display: none;
			margin-left: -40px;
		}
		.menu-button:focus ~ .sub-menu, 
		.menu-button:active ~ .sub-menu, 
		.sub-menu:hover { 
		   display: block; 
		} 
		.topd{
			display: flex;
			flex-direction: column;
		}
		.menu-button {
			display: none;
			background-color: #BDC2BF;
			border: none;
			text-decoration: none;
		}
		.button:hover {
			background-color: #acb1ae;
		}
		.bottom-div{
			background: #BDC2BF;
			text-align: center;
			font-size: 36px;
			color: #25291C;
			font-family: "Roboto";
			transition: all 1s;
		}
		.botd1{
			display: flex;
			transition: all 1s;
			justify-content: center;
			padding-top: 30px;
		}
		.bott1{
			transition: all 1s;
			padding-top: 18px;
		}

		.bott2{
			transition: all 1s;
			padding-top: 80px;
		}
		.bott3{
			transition: all 1s;
			padding-top: 80px;
			font-size: 64px;
		}
		.botd2{
			padding-bottom: 30px;
			transition: all 1s;
		}


		.contacts{
			display: flex;
			flex-direction: column;
			margin-top: 45px;
			transition: all 1s;
		}
		.contacts span{
			padding-left: 20px;
			transition: all 1s;
		}
		.contact{
			display: flex;
			justify-content: center;
			margin-top: 35px;
			transition: all 1s;
		}
		.contacts img{
			height: 43px;
			width: 43px;
			transition: all 1s;
		}

		@media (min-width: 992px) and (max-width: 1199px){
			.button{
				width: 150px;
			}
		}
		@media (min-width: 768px) and (max-width: 991px){
			.button{
				width: 108px;
			}
		}
		@media (min-width: 576px) and (max-width: 767px){
			.button{
				display: none;
			}
			.menu-button{
				display: inline-block;
			}
			.menu-button img{
				width: 55px;
				height: 55px;
			}
			.botd1{
				flex-direction: column;
			}
			.botd1 img{
				width: 370px;
				height: 50px;
				margin: auto;
			}
			.botd2{
				padding-top: 20px;
			}
			.botd2 img{
				width: 300px;
				height: 200px;
			}
			.bott2{
				padding-top: 40px;
			}
			.bott3{
				padding-top: 40px;
			}
			.contact{
				font-size: 27px;
			}
			.contacts img{
				height: 35px;
				width: 35px;
			}
			.contacts{
				margin-top: 0px;
			}
		}
		@media (max-width: 575px){
			.button{
				display: none;
			}
			.menu-button{
				display: inline-block;
			}
			.menu-button img{
				width: 55px;
				height: 55px;
			}
			.botd1{
				flex-direction: column;
			}
			.botd1 img{
				width: 370px;
				height: 50px;
				margin: auto;
			}
			.botd2{
				padding-top: 20px;
			}
			.botd2 img{
				width: 300px;
				height: 200px;
			}
			.bott2{
				padding-top: 40px;
			}
			.bott3{
				padding-top: 40px;
			}

			.contacts img{
				height: 27px;
				width: 27px;
			}
			.contacts span{
				font-size: 18px;
			}
			.contact{
				margin-top: 15px;
			}
			.contacts{
				margin-top: 20px;
			}
		}
	</style>
</head>
<body>
	<div class="head-div">
		<div class="buttons">
			<button class="button">Послуги</button>
			<button class="button">Ціни</button>
			<button class="button">Про нас</button>
			<button class="button">Акаунт</button>
			<div class="topd">
				<a class="menu-button" tabindex="1">M</a>
				<ul class="sub-menu">
					<button class="buttonm">Послуги</button>
					<button class="buttonm">Ціни</button>
					<button class="buttonm">Про нас</button>
					<button class="buttonm">Акаунт</button>
				</ul>
			</div>
		</div>
	</div>
	<div>
		@yield('content')
	</div>
	<div class="bottom-div">
		<div class="botd1">
			<div class="bott1">Твій кращий</div>
		</div>
		<div class="bott2">
			Залишилися питання?
		</div>
		<div class="bott3">
			Пишіть нам!
		</div>
		<div class="contacts">
			<div class="contact">
				<span>@memegiver</span>
			</div>
			<div class="contact">
				<span>memegiver@gmail.com</span>
			</div>
			<div class="contact">
				<span>https://www.facebook.com/memegiver</span>
			</div>
		</div>
		<div class="botd2">
			M
		</div>
	</div>
</body>