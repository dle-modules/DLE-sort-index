
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<title>Установка Индекса сортировки для DLE 9.8</title>
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,cyrillic' rel='stylesheet'>
	<style>
		/*Общие стили*/
		html {
			background: #f1f1f1;
			}
		body {
			width: 960px;
			padding: 20px;
			margin: 20px auto;
			font:normal 14px/18px Arial, Helvetica, sans-serif;
			background: #fff;
			box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.1);
			color: #757575;
			}
		hr {
			margin: 18px 0;
			border: 0;
			border-top: 1px solid #fff;
			border-bottom: 1px solid #eee;
		}
		.preview {
			display: block;
			margin: 20px auto 40px;
			max-width: 100%;
		}
		.descr {
			font: normal 18px/24px "Trebuchet MS", Arial, Helvetica, sans-serif;
			color: #666;
			margin: 20px -20px;
			padding: 20px;
			background: #fafafa;
			box-shadow: inset 0 10px 10px -10px rgba(0, 0, 0, 0.1), inset 0 -10px 10px -10px rgba(0, 0, 0, 0.1);
			text-shadow: 0 1px 0 #fff;
			}
			b {
				color: #f60;
				}
		.descr hr {
			margin: 18px -20px;
		}
		.ta-center {
			text-align: center;
			}
		a {
			color: #f60;
			}
			a:hover {
				text-decoration: none;
				color: #06c;
				}
		.btn {
			line-height: 32px;
			font-size: 100%;
			margin: 0;
			vertical-align: baseline;
			*vertical-align: middle; 
			-webkit-appearance: button; 
			cursor: pointer; 
			*overflow: visible;  
			background: #f60;
			color: #fff;
			text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
			border: 0;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			padding: 0 15px;
		}
		.btn:hover {
			background: #06c;
			-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
			-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
		}
		article,
		.gray {
			color: #ccc;
			}
		h1, h2, h3, h4, h1 b, h2 b, h3 b, h4 b {
			font-family: 'Ubuntu Condensed', sans-serif;
			font-weight: normal;
		}
		h3 {
			margin: 0;
			}
		h2.gray {
			text-align: center;
			margin: 3em 0 1em 0;
			}
		h1 {
			line-height: 20px;
			line-height: 28px;
			}

		.clr {clear: both; height: 0; overflow: hidden;}
		li {
			margin-bottom: 20px;
			color: #f60;
			}
		li li {
			margin-bottom: 4px;
			margin-top: 4px;
		}
		li.div, li li, li h3 {
			color: #666;
		}
	   textarea {
			width: 800px;
			margin-bottom: 10px;
			vertical-align: top;
			-webkit-transition: height 0.2s;
			-moz-transition: height 0.2s;
			transition: height 0.2s;
			outline: none;
			display: block;
			color: #444;
			padding: 5px 10px;
			font: normal 14px/20px Consolas,'Courier New',monospace;
			background-color: #fff;
			white-space: pre;
			white-space: pre-wrap;
			word-break: break-all;
			word-wrap: break-word;
			text-shadow: none;
			border: 1px solid #eee;
			border: 1px solid rgba(0, 0, 0, 0.1);
			border-radius: 3px;
			-webkit-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 1px rgba(0, 0, 0, 0.05);
			-moz-box-shadow: 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 1px rgba(0, 0, 0, 0.05);
			box-shadow: 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 1px rgba(0, 0, 0, 0.05);
		}
		textarea:focus {
			background: #f1f1f1;
			border-color: #f60;
			-webkit-box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 7px rgba(0, 0, 0, 0.3);
			-moz-box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 7px rgba(0, 0, 0, 0.3);
			box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.5),  inset 0 1px 7px rgba(0, 0, 0, 0.3);
		}
	
	</style>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script>
		/*
			jQuery Autosize v1.16.6
			(c) 2013 Jack Moore - jacklmoore.com
			updated: 2013-03-12
			license: http://www.opensource.org/licenses/mit-license.php
		*/
		(function(e){var t,o={className:"autosizejs",append:"",callback:!1},n="hidden",i="border-box",s="lineHeight",a='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden;"/>',r=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],l="oninput",c="onpropertychange",h=e(a).data("autosize",!0)[0];h.style.lineHeight="99px","99px"===e(h).css(s)&&r.push(s),h.style.lineHeight="",e.fn.autosize=function(s){return s=e.extend({},o,s||{}),h.parentNode!==document.body&&e(document.body).append(h),this.each(function(){function o(){t=b,h.className=s.className,e.each(r,function(e,t){h.style[t]=f.css(t)})}function a(){var e,i,a;if(t!==b&&o(),!d){d=!0,h.value=b.value+s.append,h.style.overflowY=b.style.overflowY,a=parseInt(b.style.height,10),h.style.width=Math.max(f.width(),0)+"px",h.scrollTop=0,h.scrollTop=9e4,e=h.scrollTop;var r=parseInt(f.css("maxHeight"),10);r=r&&r>0?r:9e4,e>r?(e=r,i="scroll"):p>e&&(e=p),e+=g,b.style.overflowY=i||n,a!==e&&(b.style.height=e+"px",x&&s.callback.call(b)),setTimeout(function(){d=!1},1)}}var p,d,u,b=this,f=e(b),g=0,x=e.isFunction(s.callback);f.data("autosize")||((f.css("box-sizing")===i||f.css("-moz-box-sizing")===i||f.css("-webkit-box-sizing")===i)&&(g=f.outerHeight()-f.height()),p=Math.max(parseInt(f.css("minHeight"),10)-g,f.height()),u="none"===f.css("resize")||"vertical"===f.css("resize")?"none":"horizontal",f.css({overflow:n,overflowY:n,wordWrap:"break-word",resize:u}).data("autosize",!0),c in b?l in b?b[l]=b.onkeyup=a:b[c]=a:b[l]=a,e(window).on("resize",function(){d=!1,a()}),f.on("autosize",function(){d=!1,a()}),a())})}})(window.jQuery||window.Zepto);

		jQuery(document).ready(function($) {
			$('textarea').autosize();
			 $('textarea').click(function () {
				$(this).select();
			})
		});
	</script>

</head>
<body>
	<header role="banner">
		<h1>Инструкция по установке Индекса сортировки для DLE 9.8</h1>
	</header>
	<section role="main">  
		<div id="step_one">
		<h2><b>Шаг 1</b> (правки файлов)</h2>
		<p>Рекомендую использовать редактор <a href="http://www.sublimetext.com/" target="_blank">SublimeText 2</a>, если не в курсе что это - читайте <a href="http://pafnuty.name/thinking/137-sublime-text.html" target="_blank">краткий обзор</a> его возможностей</p>
		<div class="descr">
			<ol>

			<li>
				<h3>Открыть файлы:</h3>
				<ul>
					<li>\engine\engine.php</li>
					<li>\engine\inc\editnews.php</li>
					<li>\engine\modules\favorites.php</li>
					<li>\engine\modules\functions.php</li>
				</ul>
				<b>Найти все вхождения:</b>
				<textarea readonly>p.fixed</textarea>
				<b>Заменить на:</b>
				<textarea readonly>p.fixed, p.sorting</textarea>
			</li>
			<li>
			<h3>Открыть: \engine\engine.php</h3>
			<b>Найти:</b> 
			<textarea readonly>$attachments = array ();</textarea>
			<b>Ниже вставить:</b>
			
<textarea readonly>$sort_index = "";
		if ($config['allow_sort_index']) {
			$sort_index = ($config['news_msort_index']) ? "sorting ".$config['news_msort_index'].", " : "sorting ASC, ";
		}</textarea>
			
			<b>Найти все вхождения:</b> 
			<textarea readonly>$news_sort_by . " " . $news_direction_by .</textarea>
			<b>Заменить на:</b> 
			<textarea readonly>$sort_index.$news_sort_by . " " . $news_direction_by .</textarea>
				
			</li>


<li><h3>Открыть \engine\inc\options.php</h3>
<b>Найти:</b> 
<textarea readonly>showRow( $lang['opt_sys_navi'], $lang['opt_sys_navid'], makeDropDown( array ("0" => $lang['opt_sys_navi_1'], "1" => $lang['opt_sys_navi_2'], "2" => $lang['opt_sys_navi_3'], "3" => $lang['opt_sys_navi_4'] ), "save_con[news_navigation]", "{$config['news_navigation']}" ) );</textarea>
<b>Ниже вставить:</b>
<textarea readonly>showRow('Включить индекс сортировки', 'По умолчанию он равен 500, новости будут сортироваться в соответсвии со значением индекса, а уже после в соответствии с остальными настройками, Если индекс у двух (или более) новостей одинаковый - новости будут сортироваться в соответствии с настройками DLE.', makeDropDown(array ("0" => 'нет',"1" => 'да'), "save_con[allow_sort_index]", "{$config['allow_sort_index']}"));
	showRow('Направление индекса сортировки', 'По возрастанию: 100, 101, 102 и т.д. По убыванию: 500, 499, 498 и т.д.', makeDropDown(array ("ASC" => 'По возрастанию',"DESC" => 'По убыванию'), "save_con[news_msort_index]", "{$config['news_msort_index']}"));</textarea></li>

<li><h3>Открыть \engine\inc\addnews.php</h3>
	<b>Найти:</b>
<textarea readonly><tr>
        <td height="29" style="padding-left:5px;">{$lang['addnews_cat']}</td></textarea>
	<b>ВЫШЕ вставить:</b>
<textarea readonly><tr>
        <td height="29" style="padding-left:5px;">Индекс сортировки</td>
        <td><input type="text" name="sorting" size="5" value="500" class="edit bk"><a href="#" class="hintanchor" onMouseover="showhint('Индекс сортировки служит для дополнительной и более точной сортировки новостей', this, event, '300px')">[?]</a></td>
    </tr></textarea>
	<b>Найти:</b>
	<textarea readonly>$news_fixed = isset( $_POST['news_fixed'] ) ? intval( $_POST['news_fixed'] ) : 0;</textarea>
	<b>Ниже вставить:</b>
	<textarea readonly>$sorting = isset( $_POST['sorting'] ) ? intval( $_POST['sorting'] ) : 500;</textarea>
	<b>Найти:</b>
	<textarea readonly>$db->query( "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, descr, keywords, category, alt_name, allow_comm, approve, allow_main, fixed, allow_br, symbol, tags, metatitle) values ('$thistime', '{$member_id['name']}', '$short_story', '$full_story', '$filecontents', '$title', '{$metatags['description']}', '{$metatags['keywords']}', '$category_list', '$alt_name', '$allow_comm', '$approve', '$allow_main', '$news_fixed', '$allow_br', '$catalog_url', '{$_POST['tags']}', '{$metatags['title']}')" );</textarea>
	<b>Заменить на:</b>
	<textarea readonly>$db->query( "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, descr, keywords, category, alt_name, allow_comm, approve, allow_main, fixed, sorting, allow_br, symbol, tags, metatitle) values ('$thistime', '{$member_id['name']}', '$short_story', '$full_story', '$filecontents', '$title', '{$metatags['description']}', '{$metatags['keywords']}', '$category_list', '$alt_name', '$allow_comm', '$approve', '$allow_main', '$news_fixed', '$sorting', '$allow_br', '$catalog_url', '{$_POST['tags']}', '{$metatags['title']}')" );</textarea>
</li>
<li>
	<h3>Открыть \engine\inc\editnews.php</h3>
	  <b>Найти:</b>
<textarea readonly><tr>
        <td height="29" style="padding-left:5px;">{$lang['edit_cat']}</td></textarea>
	  <b>ВЫШЕ вставить:</b>
<textarea readonly><tr>
        <td height="29" style="padding-left:5px;">Индекс сортировки</td>
        <td><input type="text" name="sorting" size="5" value="{$row['sorting']}" class="edit bk"><a href="#" class="hintanchor" onMouseover="showhint('Индекс сортировки служит для дополнительной и более точной сортировки новостей', this, event, '300px')">[?]</a></td>
        </tr>
    <tr></textarea>
	<b> Найти:</b>
	<textarea readonly>$news_fixed = isset( $_POST['news_fixed'] ) ? intval( $_POST['news_fixed'] ) : 0;</textarea>
	<b>Ниже вставить:</b>
	<textarea readonly>$sorting = isset( $_POST['sorting'] ) ? intval( $_POST['sorting'] ) : 500;</textarea>
	<b>Найти в двух местах:</b>
	<textarea readonly>fixed='$news_fixed'</textarea>
	<b>Заменить на:</b>
	<textarea readonly>fixed='$news_fixed', sorting='$sorting'</textarea>
</li>
  
			</ol>
		</div>
</div>
<h2><b>Шаг 2</b> (Запрос в БД)</h2>
			
		<?php
			$output = bd_installer();
			echo $output;
		?>

		<p>Инструкцию подготовил: <a href="http://pafnuty.name/" target="_blank">ПафНутиЙ</a></p>
	</section>  
</body>
</html>
<?php 
	function bd_installer()
	{
	include ('engine/api/api.class.php'); 
		// Стандартный текст
		$output = '';
		// Если через $_POST передаётся параметр sortindex_install, производим инсталляцию, согласно параметрам
		if(!empty($_POST['sortindex_install']))
		{

			// Cоздание таблицы для хака
			$query = "ALTER TABLE `".PREFIX."_post` ADD `sorting` int(10) NOT NULL DEFAULT '500'";
			$dle_api->db->query($query);

			// Вывод
			$output .= '<style>#step_one {display:none;}</style>';
			$output .= '<div class="descr"><p><b>Запрос успешно выполнен!</b></p><p><b>Установка завершена!</b></p><p>Не забудьте открыть <a href="/admin.php?mod=options&action=syscon" target="_blank">настройки DLE</a>, на вкладке "Настройки вывода новостей" <b>включить индекс сортировки</b> и сохранить конфигурацию, даже если настройка не требуется, это нужно для создания записей в config.php.</p></div>';
			$output .= '

<img class="preview" src="data:image/gif;base64,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">
';
		}

		// Если через $_POST ничего не передаётся, выводим форму для установки хака
		else
		{
			// Вывод


			$output .= <<<HTML
			<p><b>Настоятельно рекомендую сделать бэкап БД!</b></p>
			<p>Для успешной работы хака необходимо завести в БД дополнительное поле, в которое будет записываться значение индекса сортировки</p>
			<p>Можно выполнить запрос в ручную, а можно автоматически, воспользовавшись кнопкой ниже.</p>
			<div class="descr">
				<h3><b>Автоматическое выполнение запроса</b> (рекомендуется)</h3>
				<p>
					<form method="POST" action="sortindex_installer.php">			
						<input type="hidden" name="sortindex_install" value="1">
						<button class="btn" type="submit">Выполнить запрос</button>
					</form>
				</p>
				<hr>
				<h3><b>Ручное выполнение запроса</b></h3>
				<p>Откройте вашу БД через phpmyadmin и выполните следующий запрос:</p>
				<textarea readonly>ALTER TABLE `dle_post` ADD `sorting` int(10) NOT NULL DEFAULT '500'</textarea>
				<p>
					<b>где dle - это префикс таблиц DLE (по умолчанию это именно dle)</b>
				</p>
			</div>
HTML;


		}

		// Функция возвращает то, что должно быть выведено
		return $output;
	}

?>

