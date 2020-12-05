
<!DOCTYPE html>
<html lang="ru">
<head>
  
    <meta charset="UTF-8">
    <title>Спасибо!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    color: #313E47;
    font-family: Arial;
    text-align: center;
    background: url(body.jpg) repeat;
    padding-top: 60px;
}
h2 {    
    font-size: 36px;
    font-weight: 700;
    line-height: 44px;    
    text-transform: uppercase;
}
h3 {
	color:#464646;
    font-size: 32px; 	
}
.success {
	font-size: 21px;
	line-height: 1.4em;
}

.shiny-button {
  display: inline-block;
  text-align: center;
  border-width: 1px;
  border-style: solid;
  text-transform: uppercase;
  text-decoration: none;
  line-height: 1.1;
  font-weight: normal;
  font-family: sans-serif;
  color: #FFFFFF;
  font-size: px;
  background-color: #f7aa0c;
  background-image: -webkit-linear-gradient(top, #f7ac11 0%, #e3b149 48%, #f7aa0c 49%, #f7aa0c 82%, #f8b327 100%);
  background-image: -moz-linear-gradient(top, #f7ac11 0%, #e3b149 48%, #f7aa0c 49%, #f7aa0c 82%, #f8b327 100%);
  background-image: -o-linear-gradient(top, #f7ac11 0%, #e3b149 48%, #f7aa0c 49%, #f7aa0c 82%, #f8b327 100%);
  background-image: linear-gradient(top, #f7ac11 0%, #e3b149 48%, #f7aa0c 49%, #f7aa0c 82%, #f8b327 100%);
  border-color: hsl(40, 34%, 41%);
  -webkit-box-shadow: inset 0 0 1px 1px #f9c456, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: inset 0 0 1px 1px #f9c456, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 0 1px 1px #f9c456, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  -webkit-text-shadow: 1px 1px 1px #986805;
  -moz-text-shadow: 1px 1px 1px #986805;
  -o-text-shadow: 1px 1px 1px #986805;
  text-shadow: 1px 1px 1px #986805;
  -webkit-border-radius: 32px;
  -moz-border-radius: 32px;
  border-radius: 32px;
  padding: 12px 30px 12px 30px;
}

.shiny-button strong {
  letter-spacing: 1px;
  font-size: 15px;
}

.shiny-button:hover {
  color: #FFFFFF;
  background-color: #f7af1b;
  background-image: -webkit-linear-gradient(top, #f7b120 0%, #e5b656 48%, #f7af1b 49%, #f7af1b 82%, #f8b836 100%);
  background-image: -moz-linear-gradient(top, #f7b120 0%, #e5b656 48%, #f7af1b 49%, #f7af1b 82%, #f8b836 100%);
  background-image: -o-linear-gradient(top, #f7b120 0%, #e5b656 48%, #f7af1b 49%, #f7af1b 82%, #f8b836 100%);
  background-image: linear-gradient(top, #f7b120 0%, #e5b656 48%, #f7af1b 49%, #f7af1b 82%, #f8b836 100%);
  border-color: hsl(40, 32%, 42%);
  -webkit-box-shadow: inset 0 0 1px 1px #facb6a, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: inset 0 0 1px 1px #facb6a, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 0 1px 1px #facb6a, 0 0 1px 3px rgba(0, 0, 0, 0.15);
  -webkit-text-shadow: 1px 1px 1px #a67206;
  -moz-text-shadow: 1px 1px 1px #a67206;
  -o-text-shadow: 1px 1px 1px #a67206;
  text-shadow: 1px 1px 1px #a67206;
}

.shiny-button:active {
  color: #FFFFFF;
  background-color: #eca108;
  background-image: -webkit-linear-gradient(top, #e29a08 0%, #f7aa0c 100%);
  background-image: -moz-linear-gradient(top, #e29a08 0%, #f7aa0c 100%);
  background-image: -o-linear-gradient(top, #e29a08 0%, #f7aa0c 100%);
  background-image: linear-gradient(top, #e29a08 0%, #f7aa0c 100%);
  padding: 13px 30px 11px 30px;
}


@media (max-width: 900px)  {
body {
	padding-top: 20px;
}
h2 {
	font-size: 23px;
	line-height: 33px;
}
.success {
	font-size: 17px;
    line-height: 1.5em;
}
h3 {
	font-size: 21px;
}	
	
}

 @media screen and (min-width: 768px){
   .rwd-break { display: none; }
}
</style>
  
  
</head>
<body>
  
  
	<div class="main">
		<img src="index.png">
		<h2>Спасибо!<br class="rwd-break"> Ваш заказ принят!</h2>
		<p class="success">В ближайшее время с Вами свяжется оператор для подтверждения заказа. Вечерние заявки обрабатываются на следующий день. Скидка сохраняется за вами при заказе, пожалуйста, не нужно оставлять повторных заказов.<br>Пожалуйста, включите ваш контактный телефон.</p>
		<!--<h3>Спасибо что выбрали нас!</h3>	-->	
		<a href="" class="shiny-button" onclick="history.back();return false;"><strong>Вернуться на сайт</strong></a>
    </div>
  
  
</body>
</html>