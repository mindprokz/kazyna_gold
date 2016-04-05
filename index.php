<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<!-- html manifest="app.cache" -->
<head>

	<meta charset="utf-8">

	<title>KazynaGold - ювелирные изделия по индивидуальному дизайну в Астане</title>
	<meta name="description" content="«Kazyna Gold» создает уникальные ювелирные украшения из золота на заказ. А также Вы можете выбрать готовые украшения из нашей коллекции. Неповторимый дизайн, высокое качество подтвержденное Национальным центром экспертизы и сертификации, делает наши изделия непревзойденными. ">
	<meta name="Keywords" content="золото, золото на заказ, украшения,">
	<!-- css normalize -->
	<style>
		.clear:after{content:" ";display:table;clear:both}*{box-sizing:border-box}body{margin:0;padding:0}h1,h2,h3,h4,h5,h6,ul,li,figure,p{-webkit-margin-before:0;-webkit-margin-after:0;font-weight:400;margin:0;-webkit-padding-start:0}a{text-decoration:none}
	</style>
	<!-- Bootstrap v3.3.4 Grid Styles -->
	<style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#337ab7;text-decoration:none}a:hover,a:focus{color:#23527c;text-decoration:underline}a:focus{outline:thin dotted;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}</style>
	<!-- Header CSS (First Sections of Website: compress & paste after release from _header.css here) -->
	<style></style>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 minimum-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://code.angularjs.org/1.4.8/angular-animate.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/controller.js"></script>

</head>

<body ng-app="kazyna_app" ng-controller="kazyna_main">
	<!-- Здесь пишем код -->
<nav>
	<div class="content">
		<div class="catalog">
			<img src="<?php echo get_template_directory_uri();?>/img/logo-menu.png" alt="">
			<img src="<?php echo get_template_directory_uri();?>/img/burger_menu.png" alt="burger menu" ng-click="mobile_menu_click()">
			<ul class="{{mobile_menu_class}}">
				<li><a href="#main" ng-click="mobile_menu_click()">Главная </a></li>
				<li><a href="#works" ng-click="mobile_menu_click()">Как создаем</a></li>
				<li><a href="#catalog" ng-click="mobile_menu_click()">Каталог</a></li>
				<li><a href="#example" ng-click="mobile_menu_click()">Изделия в наличии</a></li>
				<li><a href="#contact" ng-click="mobile_menu_click()">Контакты</a></li>
			</ul>
		</div>
	</div>
</nav>
<section class="section1">
	<a name="main"></a>
	<div class="content clear">
		<div class="left_info">
			<h2>Kazyna Gold</h2>
			<h3>Отечественный производитель ювелирных украшений</h3>
		</div>
		<div class="center_info">
			<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
		</div>
		<div class="right_info">
			<h3>+7 (771) <span class="bold">97-77-340</span></h3>
			<h4>sales@kazyna-gold.kz</h4>
		</div>
	</div>
</section>
<section class="section2">
	<div class="ornament_top"></div>
	<div class="content">
		<h3>Создание ювелирных изделий от дизайна до реализации</h3>
		<h4>
			<span class="bold">
				Кольца <img src="<?php echo get_template_directory_uri();?>/img/list_image.png" alt="list">
				Серьги  <img src="<?php echo get_template_directory_uri();?>/img/list_image.png" alt="list">
				Кулоны   <img src="<?php echo get_template_directory_uri();?>/img/list_image.png" alt="list">
				Сувениры
			 из чистого золота
			</span>
		</h4>
	</div>
	<div class="ornament"></div>
	<div class="video">
		<div class="shadow">
			<iframe width="540" height="325" src="https://www.youtube.com/embed/2wgdz2wxJdI" frameborder="0" allowfullscreen></iframe>
		</div>
		<a><span>Посмотрите видео</span></a>
		<img src="<?php echo get_template_directory_uri();?>/img/model1.png" alt="model_1">
		<img src="<?php echo get_template_directory_uri();?>/img/model2.png" alt="model_2">
	</div>
</section>
<section class="section3">
	<a name="works"></a>
	<div class="content clear">
		<h2>Как создаем <span>эксклюзивное украшение для вас</span></h2>
		<div class="icon_list clear">
			<div class="icon_elem">
				<h3>Разрабатываем дизайн по индивидуальному желанию заказчика</h3>
				<div class="img_icon">
					<img src="<?php echo get_template_directory_uri();?>/img/icon_1.png" alt="icon">
					<img src="<?php echo get_template_directory_uri();?>/img/arrow_icon.png" alt="icon_arrow">
				</div>
			</div>
			<div class="icon_elem">
				<h3>Создаем и утверждаем 3D модель</h3>
				<div class="img_icon">
					<img src="<?php echo get_template_directory_uri();?>/img/icon_2.png" alt="icon">
					<img src="<?php echo get_template_directory_uri();?>/img/arrow_icon.png" alt="icon_arrow">
				</div>
			</div>
			<div class="icon_elem">
				<h3>Печатаем 3Д модель в воске</h3>
				<div class="img_icon">
					<img src="<?php echo get_template_directory_uri();?>/img/icon_3.png" alt="icon">
					<img src="<?php echo get_template_directory_uri();?>/img/arrow_icon.png" alt="icon_arrow">
				</div>
			</div>
			<div class="icon_elem last">
				<h3>Изготавливаем эксклюзивное украшение, которое будет только у Вас</h3>
				<div class="img_icon">
					<img src="<?php echo get_template_directory_uri();?>/img/icon_4.png" alt="icon">
				</div>
			</div>
		</div>
		<h3 class="mobile_head">
			<span class="first">Все изделия изготавливаются</span>
			<span class="second">из чистого золота высокой пробы</span>
			<span class="third">Опрабированой в национальной палате</span>
		</h3>
		<h4 class="mobile_head">
			<span class="first">Сроки изготовления</span>
			<span class="second">от 3 до 5 недель</span>
		</h4>
	</div>
</section>
<section id="magazine">
	<a name="catalog"></a>
	<div class="content">
		<h3>Примеры работ</h3>
		<h4>Все изделия из золота с подтвержденной пробой Национального центра экспертизы и сертификации</h4>
		<h5>Примеры наших работ по индивидуальному заказу</h5>
		<div id="canvas" style="opacity: 0">
			<div class="magazine-viewport">
				<div class="container">
					<div class="magazine">
						<!-- Next button -->
						<div ignore="1" class="next-button"></div>
						<!-- Previous button -->
						<div ignore="1" class="previous-button"></div>
					</div>
				</div>
			</div>

			<!-- Thumbnails -->
			<div class="thumbnails">
				<div>
					<ul>
						<li class="d">
							<img <?php echo get_template_directory_uri();?>/pages/1-thumb.jpg" width="76" height="100" class="page-1">
							<img src="<?php echo get_template_directory_uri();?>/pages/2-thumb.jpg" width="76" height="100" class="page-2">
							<span>1</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/2-thumb.jpg" width="76" height="100" class="page-3">
							<img src="<?php echo get_template_directory_uri();?>/pages/3-thumb.jpg" width="76" height="100" class="page-4">
							<span>2-3</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/4-thumb.jpg" width="76" height="100" class="page-5">
							<img src="<?php echo get_template_directory_uri();?>/pages/5-thumb.jpg" width="76" height="100" class="page-6">
							<span>4-5</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/6-thumb.jpg" width="76" height="100" class="page-7">
							<img src="<?php echo get_template_directory_uri();?>/pages/7-thumb.jpg" width="76" height="100" class="page-8">
							<span>6-7</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/8-thumb.jpg" width="76" height="100" class="page-9">
							<img src="<?php echo get_template_directory_uri();?>/pages/9-thumb.jpg" width="76" height="100" class="page-10">
							<span>8-9</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/10-thumb.jpg" width="76" height="100" class="page-11">
							<img src="<?php echo get_template_directory_uri();?>/pages/11-thumb.jpg" width="76" height="100" class="page-12">
							<span>10-11</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/12-thumb.jpg" width="76" height="100" class="page-13">
							<img src="<?php echo get_template_directory_uri();?>/pages/13-thumb.jpg" width="76" height="100" class="page-14">
							<span>12-13</span>
						</li>
						<li class="d">
							<img src="<?php echo get_template_directory_uri();?>/pages/14-thumb.jpg" width="76" height="100" class="page-15">
							<span>14</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<h5>Сроки изготовления от 3 до 5 недель</h5>
		<img src="<?php echo get_template_directory_uri();?>/img/model3.png" alt="model">
	</div>
	<div class="ornament"></div>
</section>
<section id="form">
	<div class="content">
		<div class="mobile_block">
			<a class="button"><span>Посмотрите видео</span></a>
			<iframe width="300" height="165" src="https://www.youtube.com/embed/2wgdz2wxJdI" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="big_device_block clear">
			<h3 class="first">Так же в нашем магазине вы можете <br> выбрать уже готовые украшения
			</h3>
			<h3 class="second">По адресу: <br>
				<span>Ул. Ахмета Байтурсынова 5, <br> ЖК Хайвилл блок D6</span></h3>
			<form action="wp-content/themes/kazyna_gold/mail.php" id="application" method="POST" name="application">
				<h2>Закажите бесплатную консультацию</h2>
				<input type="text" name="name"  maxlength="20"  placeholder="Ваше имя" required>
				<input type="tel" name="telephone" maxlength="20" placeholder="Ваш телефон" required>
				<button>Отправить</button>
			</form>
		</div>
	</div>
	<div class="ornament"></div>
	<img src="<?php echo get_template_directory_uri();?>/img/model4.png" alt="model">
</section>
<section id="catalog">
	<a name="example"></a>
	<div class="content clear">
		<div class="menu">
			<div class="content_menu">
				<h3 data-text="Категории" class="gradient_text">Категории</h3>
				<h4 data-text="выберите категорию" class="gradient_text">выберите категорию</h4>
				<div class="line"></div>
			</div>
			<div ng-repeat="iter in catalog_filter" class="category_elem {{iter.active}}" ng-click="main_filter_func($index)">
				<div class="content_menu">
					<img ng-src="{{'<?php echo get_template_directory_uri();?>/img/icon_catalog/'+iter.src+'.png'}}" alt="">
					<h2>{{iter.name}}</h2>
					<div class="line"></div>
				</div>
			</div>
		</div>
		<div class="window">
			<h3 class="header">Примеры готовой продукции</h3>
			<h3 class="mobile_header">Так же в нашем магазине вы можете выбрать уже готовые украшения</h3>
			<div class="info">
				<div class="border">
					<div class="border1">
						<div class="border2">
							<div class="post_content clear">
								<div class="mobile_select">
									<select name="" id="" ng-model="filter_param" ng-change="mobile_select_filter_func()">
										<option value="etno">Этнодизайн</option>
										<option value="obr_">Обручальные кольца</option>
										<option value="ring">Кольца</option>
										<option value="serg">Серьги</option>
										<option value="chil_collect">Детская коллекция</option>
										<option value="cullon">Кулоны</option>
										<option value="another">Остальное</option>
									</select>
									<div class="select_image">
										<img ng-src="<?php echo get_template_directory_uri();?>/img/icon_catalog/{{mobile_icon_show + 1}}.png" alt="">
									</div>
								</div>
								<div class="image">
									<div class="watched_mobile"><span>{{active_elem + 1}}</span> из {{length_watch[1]}}</div>
									<img ng-src="{{catalog_window.src_big}}" alt="image">
									<a href="{{catalog_window.src_big}}" class="fancybox">
										<img src="<?php echo get_template_directory_uri();?>/img/zoom.png" alt="zoom">
									</a>
									<div class="arrow arrow_left" ng-click="arrow_click(active_elem - 1)"></div>
									<div class="arrow arrow_right" ng-click="arrow_click(active_elem + 1)"></div>
								</div>
								<button ng-click="show_post == 'show_text' ? show_post = 'hide_text' : show_post = 'show_text'">Описание</button>
								<div class="text {{show_post}}">
									<h3>Артикул: <span>{{catalog_window.articul}}</span></h3>
									<h3>Вес: <span>{{catalog_window.weight}}</span></h3>
									<h3>Вставки / Камни: <span>{{catalog_window.stones}}</span></h3>
									<h3>Размеры в наличии:<span>{{catalog_window.size}}</span></h3>
									<h3>Описание</h3>
									<p>{{catalog_window.content}}</p>
									<h2>Цена: <span>{{catalog_window.price}}</span></h2>
									<div id="get_form" class="button">Заказать</div>
								</div>
							</div>
							<div class="thumbnails_conf clear">
								<div class="arrow_left" ng-click="previous_button()"></div>
								<div class="content_catalog">
									<div class="wrapper" style="left: {{'-' + filter_begin * width + 'px'}};">
										<div ng-repeat="thumb in catalog_thumnail | filter : filter_param " class="catalog_elem_thumb" ng-click="thumbnail_click($index)">
											<img ng-src="{{thumb.src_thumb}}" alt="thumbnail">
											<div class="frame"></div>
										</div>
									</div>
								</div>
								<div class="arrow_right" ng-click="next_button()"></div>
							</div>
							<h3 class="watched">Вы просмотрели: {{ length_watch[0] +' из '+ length_watch[1] }}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="map">
	<a name="contact"></a>
	<div class="content clear">
		<div class="info">
			<h2>Контакты</h2>
			<h3>
				<span class="adress">Казахстан, г. Астана <wbr> ул. Байтурсынова, д. 5 ЖК Хайвилл, блок D6</span>
				<br>
				<span class="bold">E-mail:</span> <span class="mail">sale@kazyna-gold.kz</span> <br>
				<span class="bold">Телефон:</span> <span class="number">+7 (771) 97-77-340</span></h3>
		</div>
	</div>
	<div id="map_canvas_main"></div>
</section>
<footer>
	<div class="content clear">
		<h3> <span>ТОО «KazynaGold»</span> —  © 2015</h3>
		<img src="<?php echo get_template_directory_uri();?>/img/mindpro.png" alt="mindpro">
	</div>
</footer>
<div id="top_header2">
	<div class="content clear">
		<img src="<?php echo get_template_directory_uri();?>/img/kazyna.png" alt="logo">
		<ul class="menu">
			<li><a href="#main"">Главная </a></li>
			<li><a href="#works"">Как создаем</a></li>
			<li><a href="#catalog"">Каталог</a></li>
			<li><a href="#example"">Изделия в наличии</a></li>
			<li><a href="#contact"">Контакты</a></li>
		</ul>
		<div class="contact">
			<div class="number">+7 (771) <span class="bold"> 97-77-340</span></div>
			<div class="mail">sales@kazyna-gold.kz</div>
		</div>
	</div>
</div>
<div id="form_modal" class="form_modal not_active_form">
	<div class="wrapper_form">
		<div class="closer close__form">
			<svg version="1.1" id="icon__close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve">
				<g>
					<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312 c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"></path>
				</g>
			</svg>
		</div>
		<form id="application_2"  action="mail.php" method="POST" name="application_2">
			<h2>Оставьте заявку</h2>
			<input type="text" name="name" maxlength="20" placeholder="Введите ваше имя" required>
			<input type="email" name="email" maxlength="30" placeholder="Введите ваш E-mail" required>
			<input name="telephone" type="tel" maxlength="20" placeholder="Введите ваш телефон" required />
			<button>Отправить</button>
		</form>
	</div>
</div>
<div id="mail" class="not_visible_mail"></div>
<!--     Пример формы обратной связи          -->
	<!--<div class="main">-->
      <!--<h3>Внимание</h3>-->
      <!--<p>Оставьте ваши контактные данные и наш консультант<br/>свяжется с вами в течении 30 секунд</p>-->

		<!--<form id="application" action="mail.php" method="POST" name=" application ">-->
			<!--<input name="name" id="applicationName" maxlength="20" placeholder="Введите ваше имя" required />-->
			<!--<input name="email" type="email" id="applicationEmail" maxlength="20" placeholder="Введите ваш E-mail" required/>-->
			<!--<input name="telephone" type="Tel" id="applicationTelephone" maxlength="20" placeholder="Введите ваш телефон" required />-->
			<!--<input type="submit">-->
			<!--<div id="app"> Отправить </div>-->
		<!--</form>-->
	<!--</div>-->
	<!--<div id="mail" class="not_visible_mail">-->
	<!--</div>-->
	<!--<div class="hidden"></div>-->
	<!--&lt;!&ndash;[if lt IE 9]>-->
	<!--<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/es5-shim.min.js"></script>-->
	<!--<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/html5shiv.min.js"></script>-->
	<!--<script src="<?php echo get_template_directory_uri();?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>-->
	<!--<script src="<?php echo get_template_directory_uri();?>/libs/respond/respond.min.js"></script>-->
	<!--<![endif]&ndash;&gt;-->

	<!-- Load CSS (remove/comment after release) -->
	<script>
	//Load Libs CSS
	var ms=document.createElement("link");
	ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri();?>/libs/animate/animate.css";
	document.getElementsByTagName("head")[0].appendChild(ms);

	//Fancy box css
	var ms=document.createElement("link");
	ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.css";
	document.getElementsByTagName("head")[0].appendChild(ms);
	
	//main css
	var ms=document.createElement("link");
	ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri();?>/css/style.css";
	document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<!-- Load Scripts -->
<script>var scr = {"scripts":[
	{"src" : "<?php echo get_template_directory_uri();?>/libs/modernizr/modernizr.2.5.3.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/libs/jquery/jquery-1.11.2.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/libs/animate/animate-css.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/libs/Wow/wow.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/libs/hash/hash.js", "async" : false},
	{"src" : "http://maps.google.com/maps/api/js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/libs/fancybox/source/jquery.fancybox.pack.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri();?>/js/common.js", "async" : false},
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
</body>
</html>