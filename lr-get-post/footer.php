<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мемопостачальник</title>
	<style>
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

		@media (min-width: 576px) and (max-width: 767px){
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
	<div class="bottom-div">
		<div class="botd1">
			<div class="bott1">Твій кращий</div>
			<img src="img\title-bot.png">
		</div>
		<div class="bott2">
			Залишилися питання?
		</div>
		<div class="bott3">
			Пишіть нам!
		</div>
		<div class="contacts">
			<div class="contact">
				<img src="img\tg.png"><span>@memegiver</span>
			</div>
			<div class="contact">
				<img src="img\gmail.png"><span>memegiver@gmail.com</span>
			</div>
			<div class="contact">
				<img src="img\fb.png"><span>https://www.facebook.com/memegiver</span>
			</div>
		</div>
		<div class="botd2">
			<img src="img\logo.png">
		</div>
	</div>
</body>