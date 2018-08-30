<?php require_once '../includes/add_comment.php'; ?>
<?php require_once '../includes/get_comments.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>future-test</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">  
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<div id="header">	
			<div id="header-logo">
				<img src="images/logo.png" alt="Логотип">
			</div>
			<p class="head">Телефон: (499) 340-94-71</p>
			<p class="head">Email: <u>info@future-group.ru</u></p>
			<div id="htext1">Комментарии</div>
		</div>
	</header>
	<div id="content">
		<?php foreach ($data as $id => $arr) : ?>
		<p class="comment">
			<span class="name"><?php echo $arr['name']?></span> <span class="date"><?php echo date('H:i', strtotime($arr['date']))?> &nbsp; <?php echo date('d.m.Y', strtotime($arr['date']))?></span>
			<br><br><?php echo $arr['comment']?>
		</p>
		<?php endforeach; ?>
		
		<?php if(!empty($data)) echo '<hr>' ?>
		<div id="htext2">Оставить комментарий</div>
		<form name="sendComment" action="" method="post">
			Ваше имя
			<br><div class="error"> <?php echo $nameErr;?></div> 
			<input id="input1" type="text" name="name" value="<?php echo $name;?>">
			<br>Ваш комментарий
			<br><div class="error"> <?php echo $commentErr;?></div> 
			<textarea id="input2" name="comment" value="<?php echo $comment;?>"></textarea>
			<br><button type="submit">Отправить</button>
		</form>
	</div>
	<footer>
		<div id="footer-logo">
			<img src="images/logo.png" alt="Логотип" width="101" height="106">
		</div>
		<div id="contacts">
			<p class="footer">Телефон: (499) 340-94-71</p>
			<p class="footer">Email: <u>info@future-group.ru</u></p>
			<p class="footer">Адресс: <u>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</u></p>
		</div>
		<div id="copyright">&copy; 2010 - 2014 Future. Все права защищены</div>
	</footer>
</body>
</html>