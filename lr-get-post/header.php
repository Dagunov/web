<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мемопостачальник</title>
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
		}
	</style>
</head>
<body>
	<div class="head-div">
		<img src="img\title-top.png">
		<div class="buttons">
			<button class="button">Послуги</button>
			<button class="button">Ціни</button>
			<button class="button">Про нас</button>
			<button class="button">Акаунт</button>
			<div class="topd">
				<a class="menu-button" tabindex="1"><img src="img\menu.png"></a>
				<ul class="sub-menu">
					<button class="buttonm">Послуги</button>
					<button class="buttonm">Ціни</button>
					<button class="buttonm">Про нас</button>
					<button class="buttonm">Акаунт</button>
				</ul>
			</div>
		</div>
	</div>
</body>