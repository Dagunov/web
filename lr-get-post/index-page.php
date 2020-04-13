<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мемопостачальник</title>
	<style>
		.yellow-div-1{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #E6E49F;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.yellow-div-2{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #E6E49F;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.yellow-div-3{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #E6E49F;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.green-div-1{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #9ABD97;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}
		.green-div-2{
			box-shadow: 0 0 40px rgba(0, 0, 0, .3) inset;
			background: #9ABD97;
			font-size: 64px;
			color: #25291C;
			text-align: center;
			font-family: "Roboto";
			transition: all 1s;
		}.b1t1{
			padding-top: 30px;
			transition: all 1s;
		}
		.b1t2{
			padding-top: 60px;
			font-size: 48px;
			transition: all 1s;
			width: 900px;
			margin-left: auto;
			margin-right: auto;
		}

		.b1d1{
			transition: all 1s;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-around;
			align-content: space-around;
			padding-top: 30px;
			padding-bottom: 30px;
		}
		.b1d1 img{
			transition: all 1s;
			height: 200px;
			width: 200px;
		}


		.b2t1{
			transition: all 1s;
			padding-top: 30px;
		}
		.b2t2{
			font-size: 48px;
			transition: all 1s;
			width: 900px;
			margin-right: auto;
			margin-left: auto;
		}
		.b2d1{
			transition: all 1s;
			display: flex;
			flex-direction: column;
			padding-top: 60px;
		}
		.b2d2{
			padding-top: 80px;
			transition: all 1s;
			display: flex;
			flex-direction: column;
			padding-bottom: 30px;
		}
		.b2d2 img{
			transition: all 1s;
			width: 775px;
			height: 427px;
			margin: auto;
			padding-top: 40px;
		}



		.b3t1{
			padding-top: 30px;
			padding-bottom: 20px;
			font-size: 48px;
			transition: all 1s;
			width: 900px;
			margin-right: auto;
			margin-left: auto;
		}
		.b3t2{
			padding-top: 30px;
			padding-bottom: 20px;
			transition: all 1s;
			width: 800px;
			margin-right: auto;
			margin-left: auto;
		}
		.b3d1{
			padding-top: 40px;
			transition: all 1s;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
		}
		.b3d1 img{
			width:  260px;
			height: 260px;
			transition: all 1s;
		}
		.b3d2{
			padding-top: 20px;
			padding-bottom: 30px;
			transition: all 1s;
		}
		.b3d2 img{
			width: 1320px;
			height: 331px;
			transition: all 1s;
		}
		.b3t3{
			font-size: 48px;
			padding-top: 30px;
			transition: all 1s;
			width: 1100px;
			margin-right: auto;
			margin-left: auto;
		}
		.b3d3{
			padding-top: 60px;
			padding-bottom: 30px;
			display: flex;
			justify-content: space-around;
			transition: all 1s;
		}
		.b3d3 img{
			width: 293px;
			height: 315px;
			transition: all 1s;
		}



		.b4t1{
			padding-top: 30px;
			transition: all 1s;
			width: 900px;
			margin-right: auto;
			margin-left: auto;
		}
		.b4t2{
			transition: all 1s;
			font-size: 48px;
		}
		.b4b{
			background-color: #CF9893;
			border-radius: 80px;
			border: 1px solid #25291C;
			color: #25291C;
			padding-bottom: 16px;
			padding-top: 16px;
			margin-top: 60px;
			margin-bottom: 60px;
			width: 700px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: "Roboto";
			font-size: 36px;
			transition-duration: 0.3s;
		}
		.b4b:hover{
			background-color: #d7aaa6;
		}


		.b5t1{
			transition: all 1s;
			padding-top: 30px;
			padding-bottom: 80px;
		}
		.b5t2{
			transition: all 1s;
			font-size: 24px;
		}
		.b5d1{
			transition: all 1s;
			display: flex;
			justify-content: space-around;
			padding-bottom: 80px;
			text-align: left;
		}
		.b5d2{
			transition: all 1s;
			display: flex;
			flex-direction: column;
			width: 500px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (min-width: 992px) and (max-width: 1199px){
			.b3d2 img{
				width: 792px;
				height: 198px;
			}
			.b3d1 img{
				width:  180px;
				height: 180px;
			}
			.b3t3{
				width: 800px;
			}
			.b5d2{
				width: 400px;
			}
		}
		@media (min-width: 768px) and (max-width: 991px){
			.b1t2{
				width: 750px;
			}
			.b1d1 img{
				width: 160px;
				height: 160px;
			}
			.b2d1{
				padding-top: 20px;
			}
			.b2t2{
				width: 700px;
			}
			.b2d2 img{
				width: 500px;
				height: 300px;
			}
			.b3t1{
				width: 700px;
			}
			.b3t2{
				width: 700px;
			}
			.b3d1 img{
				width: 140px;
				height: 140px;
			}
			.b3d2 img{
				width: 700px;
				height: 185px;
			}
			.b3t3{
				width: 700px;
			}
			.b3d3 img{
				width: 200px;
				height: 220px;
			}
			.b4t1{
				width: 700px;
			}
			.b5d2{
				width: 300px;
			}
		}
		@media (min-width: 576px) and (max-width: 767px){
			.b1t2{
				width: 530px;
			}
			.b1d1{
				height: 520px;
			}
			.b2t2{
				width: 520px;
				font-size: 36px;
			}
			.b2d1{
				padding-top: 0px;
			}
			.b2d2{
				padding-top: 40px;
			}
			.b2d2 img{
				width: 370px;
				height: 210px;
			}
			.b3t1{
				width: 520px;
				font-size: 40px
			}
			.b3t2{
				width: 520px;
				font-size: 56px;
			}
			.b3d1 img{
				width: 140px;
				height: 140px;
			}
			.b3d2 img{
				width: 500px;
				height: 135px;
			}
			.b3t3{
				width: 520px;
				font-size: 40px;
			}
			.b3d3 img{
				width: 160px;
				height: 190px;
			}
			.b4t1{
				padding-top: 30px;
				font-size: 40px;
				width: 520px;
				margin-right: auto;
				margin-left: auto;
			}
			.b4b{
				padding-bottom: 16px;
				padding-top: 16px;
				margin-top: 30px;
				margin-bottom: 30px;
				width: 400px;
				font-size: 28px;
			}
			.b5t1{
				font-size: 40px;
			}
			.b5d2{
				width: 250px;
			}
			.b5t2{
				font-size: 18px;
			}
		}
		@media (max-width: 575px){
			.b1t1{
				font-size: 40px;
			}
			.b1t2{
				width: 400px;
				font-size: 24px;
			}
			.b1d1{
				padding-top: 20px;
				height: 360px;
			}
			.b1d1 img{
				width: 160px;
				height: 160px;
			}
			.b2t1{
				font-size: 40px;
			}
			.b2t2{
				width: 400px;
				font-size: 28px;
			}
			.b2d1{
				padding-top: 0px;
			}
			.b2d2{
				padding-top: 40px;
			}
			.b2d2 img{
				width: 370px;
				height: 210px;
			}
			.b3t1{
				width: 400px;
				font-size: 30px
			}
			.b3t2{
				width: 400px;
				font-size: 38px;
			}
			.b3d1 img{
				width: 120px;
				height: 120px;
			}
			.b3d2 img{
				width: 370px;
				height: 100px;
			}
			.b3t3{
				width: 400px;
				font-size: 38px;
			}
			.b3d3 img{
				width: 130px;
				height: 150px;
			}
			.b4t1{
				padding-top: 20px;
				font-size: 28px;
				width: 400px;
				margin-right: auto;
				margin-left: auto;
			}
			.b4b{
				padding-bottom: 16px;
				padding-top: 16px;
				margin-top: 30px;
				margin-bottom: 30px;
				width: 400px;
				font-size: 22px;
			}
			.b4t1{
				font-size: 40px;
			}
			.b5t1{
				font-size: 32px;
				padding-bottom: 30px;
			}
			.b5d2{
				width: 160px;
			}
			.b5t2{
				font-size: 18px;
			}
		}
	</style>
</head>
<body>
	<div class="yellow-div-1">
		<div class="b1t1">Краще - тобі!</div>
		<div class="b1t2">Найкращі мемологи України шукають меми саме для тебе.</div>
		<div class="b1d1">
			<img src="img_ind\b1p1.png">
			<img src="img_ind\b1p2.png">
			<img src="img_ind\b1p3.png">
			<img src="img_ind\b1p4.png">
		</div>
	</div>
	<div class="green-div-1">
		<div class="b2t1">Як це працює?</div>
		<div class="b2d1">
			<div class="b2d2">
				<div class="b2t2">
					1. Tи жахливо втомлений
				</div>
				<img src="img_ind\b2p1.png">
			</div>
			<div class="b2d2">
				<div class="b2t2">
					2. Bитрачаєш свій цінний час на несмішні картинки з фейсбуку
				</div>
				<img src="img_ind\b2p2.png">
			</div>
			<div class="b2d2">
				<div class="b2t2">
					3. Bрешті-решт ти заходиш на мемопостачальник.крапка.юа
				</div>
				<img src="img_ind\b2p3.png">
			</div>
			<div class="b2d2">
				<div class="b2t2">
					4. Tепер ти не тільки відпочивший, а ще й з чудовим настроєм!
				</div>
				<img src="img_ind\b2p4.png">
			</div>
		</div>
	</div>
	<div class="yellow-div-2">
		<div class="b3t1">
			“Тю, так я так і сам можу! Навіщо мені це взагалі потрібно, ще й платити вам...”
		</div>
		<div class="b3t2">
			...всього 0.99$/місяць!
		</div>
		<div class="b3t1">
			“Ну добре, це зовсім не дорого. Але я все ще можу робити це сам набагато швидше!”
		</div>
		<div class="b3t2">
			Звичайно можете. Але чи правда це легше?
		</div>
		<div class="b3t1">
			Ми беремо тільки кращі меми і тільки з кращих сайтів світу.
		</div>
		<div class="b3d1">
			<img src="img_ind\b3p1.png">
			<img src="img_ind\b3p2.png">
			<img src="img_ind\b3p3.png">
			<img src="img_ind\b3p4.png">
			<img src="img_ind\b3p5.png">
		</div>
		<div class="b3d2">
			<img src="img_ind\b3p6.png">
		</div>
		<div class="b3t3">
			А потім не тільки вміщуємо їх в одну стрічку, але ще й групуємо за категоріями!
		</div>
		<div class="b3d3">
			<img src="img_ind\b3p7.png">
			<img src="img_ind\b3p8.png">
			<img src="img_ind\b3p9.png">
		</div>
	</div>
	<div class="green-div-2">
		<div class="b4t1">
			“Ну добре, ви мене вмовили. Куди мені тиснути?”
		</div>
		<button class="b4b">Сюди, щоб отримати свій перший місяць безкоштовно</button>
		<div class="b4t2">
			або
		</div>
		<button class="b4b">Сюди, підключити підписку й насолоджуватися відпочинком</button>
	</div>
	<div class="yellow-div-3">
		<div class="b5t1">Цікаве:</div>
		<div class="b5d1">
			<div class="b5d2">
				<div class="b5t2">
					# усі меми можна переглядати як українською, так і англійською.
				</div>
				<div class="b5t2">
					# на платформі повністю відсутня будь-яка реклама.
				</div>
				<div class="b5t2">
					# існують спеціальні пропозиціі при покупці підписки на місяць чи на рік.
				</div>
			</div>
			<div class="b5d2">
				<div class="b5t2">
					# наші алгоритми будуть пропонувати вам схоже на те, що ви переглядаєте.
				</div>
				<div class="b5t2">
					# у нас є офіційний та мемний мерч у спеціальному магазині для підписників.
				</div>
				<div class="b5t2">
					# за три місяці роботи платформи у нас вже більше двадцяти тисяч підписників.
				</div>
			</div>
		</div>
	</div>
</body>