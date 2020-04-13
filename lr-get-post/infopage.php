<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мемопостачальник</title>
	<style>
		.yellow-div{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #E6E49F;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.green-div{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #9ABD97;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.b1d1{
			transition: all 1s;
			display: flex;
			flex-direction: column;
			padding-top: 60px;
			padding-bottom: 60px;
			width: 830px;
			margin: auto;
		}
		.b1t1{
			transition: all 1s;
		}
		.b1t2{
			transition: all 1s;
			font-size: 18px;
			padding-top: 40px;
			margin-right: auto;
		}


		.b {
			background-color: transparent;
			border: none;
			color: #25291C;
			padding-bottom: 16px;
			padding-top: 16px;
			width: 300px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: "Roboto";
			font-size: 48px;
			transition-duration: 0.3s;
		}
		.b:hover {
			background-color: #7f9b7c;
		}
		.b2d1{
			transition: all 1s;
			display: flex;
			justify-content: space-between;
			padding-top: 40px;
			padding-bottom: 60px;
		}
		.b2d2 img{
			transition: all 1s;
			width: 500px;
			height: 500px;
			border: 3px solid #25291C;
		}
		.b2d2{
			transition: all 1s;
			display: flex;
			justify-content: space-evenly;
			padding-bottom: 120px;
		}
		.b2t1{
			transition: all 1s;
			font-size: 36px;
			text-align: left;
		}
		.b2t2{
			transition: all 1s;
			font-size: 48px;
			margin-top: auto;
			margin-bottom: auto;
		}
		.b2d4{
			transition: all 1s;
			display: flex;
			flex-direction: column;
			width: 650px;
			margin-top: auto;
			margin-bottom: auto;
		}
		.b2d5{
			transition: all 1s;
			display: flex;
			justify-content: space-around;
		}




		.b2{
			background-color: #CF9893;
			border-radius: 80px;
			border: 1px solid #25291C;
			color: #25291C;
			padding-bottom: 16px;
			padding-top: 16px;
			margin-top: 60px;
			margin-bottom: 60px;
			width: 300px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: "Roboto";
			font-size: 36px;
			transition-duration: 0.3s;
		}
		.b2:hover{
			background-color: #d7aaa6;
		}

		@media (min-width: 992px) and (max-width: 1199px){
			.b2d2 img{
				width: 400px;
				height: 400px;
			}
			.b2d4{
				width: 500px;
			}
		}
		@media (min-width: 768px) and (max-width: 991px){
			.b1d1{
				width: 618px;
				font-size: 48px;
			}

			.b2d2 img{
				width: 300px;
				height: 300px;
			}
			.b2d4{
				width: 400px;
			}
			.b2t1{
				font-size: 24px;
			}
			.b2t2{
				font-size: 36px;
			}
			.b2{
				font-size: 30px;
				width: 200px;
			}
		}
		@media (min-width: 576px) and (max-width: 767px){
			.b1d1{
				width: 520px;
				font-size: 40px;
			}
			.b2d2{
				flex-direction: column;
				padding-bottom: 40px;
			}
			.b2d2 img{
				width: 350px;
				height: 350px;
			}
			.b2d4{
				width: 400px;
				margin: auto;
			}
			.b2t1{
				font-size: 24px;
			}
			.b2t2{
				font-size: 36px;
			}
			.b2{
				font-size: 30px;
				width: 200px;
			}

		}
		@media (max-width: 575px){
			.b1d1{
				width: 330px;
				font-size: 36px;
			}
			.b2d2{
				flex-direction: column;
				padding-bottom: 40px;
			}
			.b2d2 img{
				width: 350px;
				height: 350px;
			}
			.b2d4{
				width: 400px;
				margin: auto;
			}
			.b2t1{
				font-size: 24px;
			}
			.b2t2{
				padding-top: 40px;
				font-size: 36px;
			}
			.b{
				font-size: 24px;
			}
			.b2{
				font-size: 30px;
				width: 200px;
				margin: auto;
				margin-top: 40px;
			}
			.b2d5{
				flex-direction: column;
			}
		}
	</style>
</head>
<body>
	<div class="yellow-div">
		<div class="b1d1">
			<div class="b1t1">Худі ‘Verified meme expert’<br>(‘Підтверджений мемолог’)</div>
			<div class="b1t2">Код товару: КНЕРССХ</div>
		</div>
	</div>
	<div class="green-div">
		<div class="b2d1">
			<button class="b">Опис</button>
			<button class="b">Розміри</button>
			<button class="b">Відгуки</button>
		</div>
		<div class="b2d2">
			<div class="b2d3"><img src="img\p10.png"></div>
			<div class="b2d4">
				<div class="b2t1">Вважаєш себе експертом у галузі мемів? Чи не вважаєш? Якщо чесно, то це взагалі не має зупиняти тебе перед покупкою цієї шикарної худі.</div>
				<div class="b2d5">
					<div class="b2t2">899 UAH</div>
					<button class="b2">Додати до кошику</button>
				</div>
			</div>
		</div>
	</div>
</body>