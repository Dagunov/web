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
		.b1t1{
			transition: all 1s;
			padding-top: 40px;
		}
		.b1t2{
			transition: all 1s;
			font-size: 48px;
			padding-top: 60px;
		}
		.b1t3{
			transition: all 1s;
			font-size: 24px;
			padding-top: 40px;
			padding-bottom: 40px;
		}



		.b1 {
			background-color: transparent;
			border: none;
			display: inline-block;
			font-family: "Roboto";
			transition-duration: 0.3s;
		}
		.b2 {
			background-color: transparent;
			border: none;
			display: inline-block;
			font-family: "Roboto";
			transition-duration: 0.3s;
		}
		.b1:hover {
			background-color: #acc9a9;
		}
		.b2:hover {
			background-color: #acc9a9;
		}
		.b2d1{
			transition: all 1s;
			display: flex;
			justify-content: space-evenly;
			padding-top: 40px;
		}
		.b2d2{
			transition: all 1s;
			margin-top: auto;
			margin-bottom: auto;
		}
		.b2d3{
			transition: all 1s;
			display: flex;
			flex-direction: column;
		}
		.b2d4{
			transition: all 1s;
			display: flex;
			justify-content: space-between;
		}
		.b2d5{
			transition: all 1s;
			display: flex;
			justify-content: space-between;
			margin-top: 20px;
		}
		.b2d6{
			transition: all 1s;
			display: flex;
			flex-direction: column;
			width: 180px;
			height: 230px;
			padding-left: 10px;
			padding-right: 10px;
		}
		.b2d7{
			padding-top: 30px;
		}
		.b2d img{
			transition: all 1s;
			width: 180px;
			height: 180px;
			border: 3px solid #25291C;
		}
		.b2t1{
			transition: all 1s;
			font-size: 24px;
		}

		.b2t2{
			transition: all 1s;
			padding-top: 80px;
			padding-bottom: 60px;
		}
		.b2t2 a{
			transition: all 1s;
			color: #25291C;
		}
		.b2t3{
			transition: all 1s;
			padding-top: 80px;
			padding-bottom: 60px;
			display: none;
			font-size: 48px;
		}
		.b2t3 a{
			transition: all 1s;
			color: #25291C;
		}@media (min-width: 992px) and (max-width: 1199px){
			.b2d6{
				width: 140px;
				height: 180px;
				padding-left: 10px;
				padding-right: 10px;
			}
			.b2d img{
				width: 140px;
				height: 140px;
			}
			.b2d2 img{
				width: 45px;
				height: 280px;
			}
		}
		@media (min-width: 768px) and (max-width: 991px){
			.b2d6{
				width: 110px;
				height: 140px;
				padding-left: 4px;
				padding-right: 4px;
			}
			.b2t1{
				font-size: 18px;
			}
			.b2d img{
				width: 110px;
				height: 110px;
			}
			.b2d2 img{
				width: 40px;
				height: 260px;
			}
		}
		@media (min-width: 576px) and (max-width: 767px){
			.b2d6{
				width: 200px;
				height: 270px;
				padding-left: 10px;
				padding-right: 10px;
			}
			.b2t1{
				font-size: 24px;
			}
			.b2d img{
				width: 200px;
				height: 200px;
			}
			.b2d2 img{
				display: none;
			}
			.b2t2{
				display: none;
			}
			.b2t3{
				display: inline-block;
			}
			.b2d7{
				display: none;
			}
			.b2d3{
				flex-direction: row;
			}
			.b2d4{
				flex-direction: column;
			}
			.b2d5{
				margin-top: 0px;
				flex-direction: column;
			}
		}
		@media (max-width: 575px){
			.b2d6{
				width: 250px;
				height: 380px;
				padding-left: 10px;
				padding-right: 10px;
			}
			.b2t1{
				font-size: 24px;
			}
			.b2d img{
				width: 250px;
				height: 250px;
			}
			.b2d2 img{
				display: none;
			}
			.b2t2{
				display: none;
			}
			.b2t3{
				display: inline-block;
			}
			.b2d7{
				display: none;
			}
			.b2d3{
				flex-direction: row;
			}
			.b2d4{
				flex-direction: column;
			}
			.b2d5{
				display: none;
			}
			.b2t3{
				font-size: 38px;
				padding-top: 20px;
			}
		}
	</style>
</head>
<body>
	<div class="yellow-div">
		<div class="b1t1">Мемний мерч.</div>
		<div class="b1t2">Бо що може бути краще, ніж показати свій улюбленний мем усьому світу?</div>
		<div class="b1t3">Нашого логотипу немає ніде, бо ви й так розповісте про нас усім своїм знайомим, чи не так?</div>
	</div>
	<div class="green-div">
		<div class="b2d1">
			<div class="b2d2"><button class="b1"><img src="img\left.png"></button></div>
			<div class="b2d3">
				<div class="b2d4">
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p1.png"></a></div><div class="b2t1">699 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p2.png"></a></div><div class="b2t1">899 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p3.png"></a></div><div class="b2t1">699 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p4.png"></a></div><div class="b2t1">699 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p5.png"></a></div><div class="b2t1">799 UAH</div></div>
				</div>
				<div class="b2d5">
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p6.png"></a></div><div class="b2t1">899 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p7.png"></a></div><div class="b2t1">899 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p8.png"></a></div><div class="b2t1">899 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p9.png"></a></div><div class="b2t1">899 UAH</div></div>
					<div class="b2d6"><div class="b2d"><a href=""><img src="img\p10.png"></a></div><div class="b2t1">899 UAH</div></div>
				</div>
			</div>
			<div class="b2d2"><button class="b2"><img src="img\right.png"></button></div>
		</div>
		<div class="b2d7"><img src="img\p11.png"></div>
		<div class="b2t2"><a href="">Всі категорії...</a></div>
		<div class="b2t3"><a href="">Завантажити ще...</a></div>
	</div>
</body>