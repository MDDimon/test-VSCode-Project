<?php


function is_msk_site($host_name) {
if ( $host_name == 'naro-fominsk.fabrikauyuta.ru' || $host_name == 'novomoskovsk.fabrikauyuta.ru' || $host_name == 'kaluga.fabrikauyuta.ru' || $host_name == 'tula.fabrikauyuta.ru' || $host_name == 'serpuhov.fabrikauyuta.ru' || $host_name == 'obninsk.fabrikauyuta.ru' || $host_name == 'mozhajsk.fabrikauyuta.ru'   ) {
	return true;
} else {
	return false;
}

}

function is_ryazan_site($host_name) {
if ( $host_name == 'fabrikauyuta.ru' || $host_name == 'kolomna.fabrikauyuta.ru' || $host_name == 'luhovitsy.fabrikauyuta.ru' || $host_name == 'voskresensk.fabrikauyuta.ru' || $host_name == 'bronnitsy.fabrikauyuta.ru' /*|| $host_name == 'bronnitsy.fabrikauyuta.ru' || $host_name == '.fabrikauyuta.ru'  || $host_name == 'voskresensk.fabrikauyuta.ru' || $host_name ==  'egorevsk.fabrikauyuta.ru'*/  ) {
	return true;
} else {
	return false;
}

}


function is_forbest_site($host_name) {
if ($host_name == "balashiha.fabrikauyuta.ru"
||  $host_name == "chehov.fabrikauyuta.ru"
||  $host_name == "dedovsk.fabrikauyuta.ru"
||  $host_name == "dmitrov.fabrikauyuta.ru"
||  $host_name == "dolgoprudnyj.fabrikauyuta.ru"
||  $host_name == "domodedovo.fabrikauyuta.ru"
||  $host_name == "dubna.fabrikauyuta.ru"
||  $host_name == "dzerzhinskij.fabrikauyuta.ru"
||  $host_name == "egorevsk.fabrikauyuta.ru"
||  $host_name == "elektrostal.fabrikauyuta.ru"
||  $host_name == "fryazino.fabrikauyuta.ru"
||  $host_name == "himki.fabrikauyuta.ru"
||  $host_name == "istra.fabrikauyuta.ru"
||  $host_name == "ivanteevka.fabrikauyuta.ru"
||  $host_name == "kashira.fabrikauyuta.ru"
||  $host_name == "klin.fabrikauyuta.ru"
||  $host_name == "korolyov.fabrikauyuta.ru"
||  $host_name == "kotelniki.fabrikauyuta.ru"
||  $host_name == "krasnoarmejsk.fabrikauyuta.ru"
||  $host_name == "krasnogorsk.fabrikauyuta.ru"
||  $host_name == "krasnoznamensk.fabrikauyuta.ru"
||  $host_name == "likino-dulyovo.fabrikauyuta.ru"
||  $host_name == "lobnya.fabrikauyuta.ru"
||  $host_name == "losino-petrovskij.fabrikauyuta.ru"
||  $host_name == "lytkarino.fabrikauyuta.ru"
||  $host_name == "lyubercy.fabrikauyuta.ru"
||  $host_name == "malahovka.fabrikauyuta.ru"
||  $host_name == "msk.fabrikauyuta.ru"
||  $host_name == "mytishchi.fabrikauyuta.ru"
||  $host_name == "nahabino.fabrikauyuta.ru"
||  $host_name == "noginsk.fabrikauyuta.ru"
||  $host_name == "obninsk.fabrikauyuta.ru"
||  $host_name == "odincovo.fabrikauyuta.ru"
||  $host_name == "orekhovo-zuevo.fabrikauyuta.ru"
||  $host_name == "ozyory.fabrikauyuta.ru"
||  $host_name == "pavlovskij-posad.fabrikauyuta.ru"
||  $host_name == "podolsk.fabrikauyuta.ru"
||  $host_name == "protvino.fabrikauyuta.ru"
||  $host_name == "pushkino.fabrikauyuta.ru"
||  $host_name == "ramenskoe.fabrikauyuta.ru"
||  $host_name == "reutov.fabrikauyuta.ru"
||  $host_name == "schelcovo.fabrikauyuta.ru"
||  $host_name == "sergiev-posad.fabrikauyuta.ru"
||  $host_name == "shatura.fabrikauyuta.ru"
||  $host_name == "solnechnogorsk.fabrikauyuta.ru"
||  $host_name == "stupino.fabrikauyuta.ru"
||  $host_name == "tomilino.fabrikauyuta.ru"
||  $host_name == "vidnoe.fabrikauyuta.ru"
||  $host_name == "vlasiha.fabrikauyuta.ru"
||  $host_name == "zelenograd.fabrikauyuta.ru"
||  $host_name == "zhukovskij.fabrikauyuta.ru"
||  $host_name == "troitck.fabrikauyuta.ru"
||  $host_name == "zaraisk.fabrikauyuta.ru"
||  $host_name == "climovsk.fabrikauyuta.ru"
||  $host_name == "volokolamsk.fabrikauyuta.ru"
||  $host_name == "golitcino.fabrikauyuta.ru"
||  $host_name == "zvenigorod.fabrikauyuta.ru"
||  $host_name == "kurovskoe.fabrikauyuta.ru"
||  $host_name == "pushchino.fabrikauyuta.ru"
||  $host_name == "staraia-kupavna.fabrikauyuta.ru"
||  $host_name == "hotkovo.fabrikauyuta.ru"
||  $host_name == "chernogolovka.fabrikauyuta.ru"
||  $host_name == "elektrogorsk.fabrikauyuta.ru"
||  $host_name == "elektrougli.fabrikauyuta.ru"
||  $host_name == "yakhroma.fabrikauyuta.ru" 

||  $host_name == "chelyabinsk.fabrikauyuta.ru" 
||  $host_name == "ekb.fabrikauyuta.ru"  
||  $host_name == "krasnoyarsk.fabrikauyuta.ru"  
||  $host_name == "kzn.fabrikauyuta.ru"  
||  $host_name == "nnov.fabrikauyuta.ru"  
||  $host_name == "novosibirsk.fabrikauyuta.ru" 
||  $host_name == "omsk.fabrikauyuta.ru"  
||  $host_name == "rostov-na-donu.fabrikauyuta.ru"  
||  $host_name == "samara.fabrikauyuta.ru"  
||  $host_name == "ufa.fabrikauyuta.ru"  
||  $host_name == "voronezh.fabrikauyuta.ru"		 	
 ) {
	return true;
} else {
	return false;
}

}

function region_contacts($data) {
	global $host_name;
	global $phone3;

	global $work_address1;
	global $work_address2;
	global $work_address3;


	$host_name = $_SERVER['HTTP_HOST'];
	
	$mailto = 'zakaz@fabrikauyuta.ru'; //FABRIKAUYUTA.RU@YANDEX.RU
	
	//Вычисление и установка даты акции
	$date_today = strftime('%d');
	$date_mount = strftime('%m');
	$date_year = strftime('%y');
	$stock = '15';

	/*
	if ($date_today >= $stock) {
		$number_day = cal_days_in_month(CAL_GREGORIAN, $date_mount, $date_year); // узнаем сколько дней в данном месяце
    	$action_day = $number_day; // устанавливаем последний день месяца в качестве даты акции
    	//$action_day = '30';
	} else {

    	$action_day = '15';
	}

	*/

	if ($date_today >= 1 && $date_today < 5) {
		$action_day = '5';
	}

	if ($date_today >= 5 && $date_today < 10) {
		$action_day = '10';
	}

	if ($date_today >= 10 && $date_today < 15) {
		$action_day = '15';
	}

	if ($date_today >= 15 && $date_today < 20) {
		$action_day = '20';
	}

	if ($date_today >= 20 && $date_today < 25) {
		$action_day = '25';
	}

	if ($date_today >= 25 && $date_today < 30) {
		$action_day = '30';
	}

	$best_prices = $action_day . "." . $date_mount;
	
	//$best_prices = '15.12';//Дата окончания акции
	
	if ($host_name == 'fabrikauyuta.ru') {
		$logo_url = '/img/logos/_logo.png'; 
		$logo_name = '«Фабрика уюта»';
		$company = '«Фабрика уюта»';
	} else {
		$logo_url = '/img/logo_n2.png';	
		$logo_name = '«Фабрика Уюта»';//Название логотипа (вставляется в блоках)
		$company = '«Фабрика Уюта»';//Название компании (вставляется в тексте и в title description) //Пластиковые окна
	} 
		

		$city = 'Рязань';//город
		$in_city = 'Рязани';//город в предложном падеже
		$no_city = 'Рязани';//городв в родительном падеже
		$delivery_on = "Рязани";
		$city_region = 'Рязанской области'; //в какой области?
		$phone1 = '+7(4912)46-61-42';// +7(499)938-79-22 телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
		$phone1_prefix = '+74912466142'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
		$phone2 = '+7(958)100-46-62';//8 (800) 350-83-28 8(800)350-89-84 Вывод отключен
		$phone2_prefix = '+79581004662';
		$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
		$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
		$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru //oknazvd@yandex.ru
		
		$phone_foter = '+7(4912)46-61-42';
		
		$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
		$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
  		//$phone1 = '8 (4912) 57-59-40';//телефон 
  		//$phone_foter = '<span class="comagic2_phone_off">8(4912)46-61-42</span>';
		//$phone1 = '8 (499) 938-64-98';

		$office_name = 'Офис в Рязани';
		$office_address = 'г. Рязань, Гагарина д.33.'; //г. Рязань, Московское шоссе д.20.
		$map_office = '';

$need_href1 = "<a href=' https://oknaorg.ru/ryazan/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-ryazani/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-ryazani' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

	//<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=113287726134" width="100%" height="400" frameborder="0"></iframe>
		// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
		$portfolio_address1 = 'Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32';//Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
		$portfolio_address2 = 'Г. РЯЗАНЬ, ПРОСПЕКТ ПЕРВОМАЙСКИЙ, Д.59';
		$portfolio_address3 = 'РЯЗАНСКАЯ ОБЛАСТЬ';
		$portfolio_address4 = 'Г. РЯЗАНЬ, УЛИЦА ВЕЛИКАНОВА, Д.11';
		$meta_tag_yandex = ''; //подтверждение прав для яндекс вебмастера 
		$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"78d8d648d5609a48c45a6afd5cc840932700","metrics":{"metrika":"57522094","ga":"UA-155849174-1"},"cssClass":"comagic_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
		$yam_code = '54203503';


	if ($host_name == 'msk.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Москва'; //город
			$in_city = 'Москве'; //город в предложном падеже
			$no_city = 'Москвы'; //городв в родительном падеже
			$delivery_on = "Москве";
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Москва, ул НАГОРНЫЙ ПРОЕЗД 10к2';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. МОСКВА,  ПР-Т. ВОЛГОГРАДСКИЙ, Д.182'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. МОСКВА, УЛИЦА КОСМОНАВТА ВОЛКОВА, Д.3';
			$portfolio_address3 = 'ЗЕЛЕНОГРАД';
			$portfolio_address4 = 'Г. МОСКВА, ПР-Т. БУДЕННОГО, Д.27';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'novomoskovsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/novomoskovsk_logo.png'; 
			$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Новомосковска»';
			$company = '«Фабрика уюта»'; //$company = '«Окна Новомосковска»';
	
			$city = 'Новомосковск';
			$in_city = 'Новомосковске';
			$no_city = 'Новомосковска';
			$delivery_on = "Новомосковску";
			$city_region = 'Новомосковском округе'; //в какой области?
			$phone1 = '+7(4872)51-50-95'; //+7(4872)33-72-43 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74872515095'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
				$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(4872)51-50-95';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Офис в Новомосковске';
			$office_address = 'г. Новомосковск, ул. Комсомольская  д.1';
			$map_office = '';
$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/okna-novomoskovska/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-novomoskovska' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г.НОВОМОСКОВСК';
			$portfolio_address2 = 'Г.НОВОМОСКОВСК';
			$portfolio_address3 = 'НОВОМОСКОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. НОВОМОСКОВСК';
			$meta_tag_yandex = ''; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302_","metrics":{"metrika":"57338260_"},"cssClass":"comagic2_phone_","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '66666666666';
	
			}

			elseif ($host_name == 'kolomna.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
	
			$city = 'Коломна';
			$in_city = 'Коломне';
			$no_city = 'Коломны';
			$delivery_on = "Коломне";
			$city_region = 'Коломенском округе'; //в какой области?
			$phone1 = '+7(495)414-22-12';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74954142212'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '+7(958)100-46-62';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '+79581004662';
			$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
			$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru //oknazvd@yandex.ru
			
			
			$phone_foter = '+7(495)414-22-12';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			
			$office_name = 'Офис в Каломне';
			$office_address = 'г. Коломна, ул. Зеленая д.31а';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/kolomna/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-kolomny/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-kolomny' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. КОЛОМНА, УЛИЦА ЛЕНИНА, Д.58';
			$portfolio_address2 = 'Г. КОЛОМНА, ПРОСПЕКТ КИРОВА, Д.56';
			$portfolio_address3 = 'КОЛОМЕНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КОЛОМНА, УЛИЦА МАКЕЕВА, Д.96';
			$meta_tag_yandex = ''; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';
	
			}elseif ($host_name == 'luhovitsy.fabrikauyuta.ru') {

$logo_url = '/img/logos/_logo.png'; 
$logo_name = '«Фабрика уюта»';
$company = '«Фабрика уюта»';
	
			$city = 'Луховицы';
			$in_city = 'Луховицах';
			$no_city = 'Луховиц';
			$delivery_on = "Луховицам";
			$city_region = 'Луховицком районе'; //в какой области?
			$phone1 = '+7(495)414-22-12';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74954142212'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '+7(958)100-46-62';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '+79581004662';
			$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
			$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru //oknazvd@yandex.ru
			
			$phone_foter = '+7(495)414-22-12';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Офис в Луховицах';
			$office_address = 'г. Луховицы, Куйбышева. д.88';// г. Луховицы, Новорязанское ш. д.88
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/Luhovitsy/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-luhovits/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-luhovits' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ЛУХОВИЦЫ, УЛИЦА ОСТРОВСКОГО, Д.6';
			$portfolio_address2 = 'Г. ЛУХОВИЦЫ, УЛИЦА МИРА, Д.42';
			$portfolio_address3 = 'ЛУХОВИЦКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ЛУХОВИЦЫ, УЛИЦА ЖУКОВСКОГО, Д.40';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
	
			}elseif ($host_name == 'bronnitsy.fabrikauyuta.ru') {

$logo_url = '/img/logos/_logo.png'; 
$logo_name = '«Фабрика уюта»';
$company = '«Фабрика уюта»';
	
			$city = 'Бронницы';
			$in_city = 'Бронницах';
			$no_city = 'Бронниц';
			$delivery_on = "Бронницам";
			$city_region = 'Бронницком районе'; //в какой области?
			$phone1 = '+7(495)414-22-12';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74954142212'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '+7(958)100-46-62';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '+79581004662';
			$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
			$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru //oknazvd@yandex.ru
			
			
			$phone_foter = '+7(495)414-22-12';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Офис в Бронницах';
			$office_address = 'г. Бронницы, Советская. д.17';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/bronnitsy/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-bronnits/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-bronnits' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. БРОННИЦЫ, КОМСОМОЛЬСКИЙ ПЕР, Д.4';
			$portfolio_address2 = 'Г. БРОННИЦЫ, УЛИЦА СТРОИТЕЛЬНАЯ, Д.1';
			$portfolio_address3 = 'БРОННИЦКИЙ РАЙОН';
			$portfolio_address4 = 'Г. БРОННИЦЫ, КИРПИЧНЫЙ ПР-Д, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера <meta name="yandex-verification" content="a3240e88ff7fc3a3" />
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
	
			}elseif ($host_name == 'ramenskoe.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
	
			$city = 'г. Раменское';
			$in_city = 'Раменском';//Раменском
			$no_city = 'Раменского';//Раменского
			$delivery_on = "Раменскому";
			$city_region = 'Раменском районе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Офис в Раменском';
			$office_address = 'г. Раменское, Бронницкая д.6';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/ramenskoe/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. РАМЕНСКОЕ, УЛИЦА ПРИБОРОСТРОИТЕЛЕЙ, Д.47';
			$portfolio_address2 = 'Г. РАМЕНСКОЕ, УЛИЦА ЧУГУНОВА, Д.24';
			$portfolio_address3 = 'РАМЕНСКИЦКИЙ РАЙОН';
			$portfolio_address4 = 'Г. РАМЕНСКОЕ, УЛИЦА КРЫМСКАЯ, Д.11';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
	
			}elseif ($host_name == 'voskresensk.fabrikauyuta.ru') {

$logo_url = '/img/logos/_logo.png'; 
$logo_name = '«Фабрика уюта»';
$company = '«Фабрика уюта»';
	
			$city = 'Воскресенск';
			$in_city = 'Воскресенске';
			$no_city = 'Воскресенска';
			$delivery_on = "Воскресенску";
			$city_region = 'Воскресенском районе'; //в какой области?
			$phone1 = '+7(495)414-22-12';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74954142212'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '+7(958)100-46-62';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '+79581004662';
			$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
			$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru //oknazvd@yandex.ru
			
			
			$phone_foter = '+7(495)414-22-12';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Офис в Воскресенске';
			$office_address = 'г. Воскресенск, Советская. д.2';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/voskresensk/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-voskresenska/' target='_blank'>";  
	$need_href3 = "<a href=' https://www.otzyvru.com/okna-voskresenska' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ВОСКРЕСЕНСК, УЛИЦА БЫКОВСКОГО, Д.52';
			$portfolio_address2 = 'Г. ВОСКРЕСЕНСК, УЛИЦА ЖЕЛЕЗНОДОРОЖНАЯ, Д.4';
			$portfolio_address3 = 'ВОСКРЕСЕНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ВОСКРЕСЕНСК, УЛИЦА ОКТЯБРЬСКАЯ, Д.11';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';

			}elseif ($host_name == 'balashiha.fabrikauyuta.ru') {
	
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Балашихе';
			$in_city = 'Балашихе';
			$no_city = 'Балашихи';
			$delivery_on = "Балашихе";
			$city_region = 'округе Балашиха'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Балашиха, шоссе Энтузиастов, д.5Б';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/balashiha/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. БАЛАШИХА, УЛИЦА МОЛОДЁЖНАЯ, Д.2';
			$portfolio_address2 = 'Г. БАЛАШИХА, УЛИЦА ПАРКОВАЯ, Д.13';
			$portfolio_address3 = 'ОКРУГ БАЛАШИХА';
			$portfolio_address4 = 'Г. БАЛАШИХА, УЛИЦА ПЕРВОМАЙСКАЯ, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'podolsk.fabrikauyuta.ru') {
	
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Подольск';
			$in_city = 'Подольске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Подольска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Подольску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Подольском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Подольск, Рабочая улица, д.3';
			$map_office = '';
    $need_href1 = "<a href='https://oknaorg.ru/podolsk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ПОДОЛЬСК, УЛИЦА КОМСОМОЛЬСКАЯ, Д.79А';
			$portfolio_address2 = 'Г. ПОДОЛЬСК, УЛИЦА ВЕЛЛИНГА, Д.7';
			$portfolio_address3 = 'ПОДОЛЬСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ПОДОЛЬСК, УЛИЦА ВЫСОТНАЯ, Д.7';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';

			}elseif ($host_name == 'himki.fabrikauyuta.ru') {
			
			$city = 'Химки';
			$in_city = 'Химках';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Химок';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Химкам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Химкинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Химки, Юбилейный проспект, д.50';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/himki/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ХИМКИ, УЛИЦА МОЛОДЁЖНАЯ, Д.30А';
			$portfolio_address2 = 'Г. ХИМКИ, УЛИЦА 9 МАЯ, Д.18Б';
			$portfolio_address3 = 'ХИМКИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ХИМКИ, УЛИЦА МОЛОДЁЖНАЯ, Д.76';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'korolyov.fabrikauyuta.ru') {
			
			$city = 'Королёв';
			$in_city = 'Королёве';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Королёва';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Королёву";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Королёвском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Королёв, улица Дзержинского, д.7';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/korolev/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КОРОЛЁВ, ПРОСПЕКТ КОРОЛЁВА, Д.24';
			$portfolio_address2 = 'Г. КОРОЛЁВ, УЛИЦА САККО И ВАНЦЕТТИ, Д.20';
			$portfolio_address3 = 'КОРОЛЁВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КОРОЛЁВ, УЛИЦА 50-ЛЕТИЯ ВЛКСМ, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'mytishchi.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Мытищи';
			$in_city = 'Мытищах';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Мытищ';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Мытищам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Мытищинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Мытищи, улица Мира, д.15/12';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/mt/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. МЫТИЩИ, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. МЫТИЩИ, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МЫТИЩИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. МЫТИЩИ, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'lyubercy.fabrikauyuta.ru') {
			
			$city = 'Люберцы';
			$in_city = 'Люберцах';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Люберец';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Люберцам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Люберецком округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Люберцы, улица Смирновская, д.19';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/lyubertsy/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛЮБЕРЦЫ, УЛИЦА КРАСНОАРМЕЙСКАЯ, Д.18';
			$portfolio_address2 = 'Г. ЛЮБЕРЦЫ, УЛИЦА ПОБРАТИМОВ, Д.22';
			$portfolio_address3 = 'ЛЮБЕРЕЦКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЛЮБЕРЦЫ, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'krasnogorsk.fabrikauyuta.ru') {
			
			$city = 'Красногорск';
			$in_city = 'Красногорске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Красногорска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Красногорску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Красногорском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Красногорск, улица Ленина, д.13';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/krasnogorsk/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КРАСНОГОРСК, УЛИЦА ОКТЯБРЬСКАЯ, Д.19Б';
			$portfolio_address2 = 'Г. КРАСНОГОРСК, ВОЛОКОЛАМСКОЕ ШОССЕ, Д.1А';
			$portfolio_address3 = 'КРАСНОГОРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КРАСНОГОРСК, УЛИЦА ПУШКИНСКАЯ, Д.21';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'elektrostal.fabrikauyuta.ru') {
			
			$city = 'Электросталь';
			$in_city = 'Электростали';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Электростали';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Электростали";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Электростальском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Электросталь, проспект Ленина, д.40/8';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/elektrostal/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ЭЛЕКТРОСТАЛЬ, УЛИЦА НИКОЛАЕВА, Д.16А';
			$portfolio_address2 = 'Г. ЭЛЕКТРОСТАЛЬ, ФРЯЗЕВСКОЕ ШОССЕ, Д.106';
			$portfolio_address3 = 'ЭЛЕКТРОСТАЛЬСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЭЛЕКТРОСТАЛЬ, УЛИЦА РАДИО, Д.17';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'odincovo.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Одинцово';
			$in_city = 'Одинцово';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Одинцово';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Одинцово";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Одинцовском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Одинцово, улица Маршала Жукова, д.32';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/odintsovo/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ОДИНЦОВО, УЛИЦА САДОВАЯ, Д.28';
			$portfolio_address2 = 'Г. ОДИНЦОВО, УЛИЦА СЕВЕРНАЯ, Д.44';
			$portfolio_address3 = 'ОДИНЦОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ОДИНЦОВО, КРАСНОГОРСКОЕ ШОССЕ, Д.8К2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'domodedovo.fabrikauyuta.ru') {
			
			$city = 'Домодедово';
			$in_city = 'Домодедово';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Домодедово';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Домодедово";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Домодедовском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Домодедово, Кутузовский проезд, д.12';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/domodedovo/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДОМОДЕДОВО, КУТУЗОВСКИЙ ПРОЕЗД, Д.19';
			$portfolio_address2 = 'Г. ДОМОДЕДОВО, КАШИРСКОЕ ШОССЕ, Д.34';
			$portfolio_address3 = 'ДОМОДЕДОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДОМОДЕДОВО, УЛИЦА РАБОЧАЯ, Д.44';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'schelcovo.fabrikauyuta.ru') {
			
			$city = 'Щёлково';
			$in_city = 'Щёлково';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Щёлково';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Щёлково";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Щёлковском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Щёлково, Пролетарский проспект, д.8';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/shelkovo/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЩЁЛКОВО, УЛИЦА КОМАРОВА, Д.4';
			$portfolio_address2 = 'Г. ЩЁЛКОВО, УЛИЦА ЦЕНТРАЛЬНАЯ, Д.2';
			$portfolio_address3 = 'ЩЁЛКОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЩЁЛКОВО, ПРОЛЕТАРСКИЙ ПРОСПЕКТ, Д.11';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'serpuhov.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/serpuhov_logo.png'; 
			$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Серпухова»';
			$company = '«Фабрика уюта»'; //$company = '«Окна Серпухова»';
			
			$city = 'Серпухов';
			$in_city = 'Серпухове';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Серпухова';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Серпухову";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Серпуховском округе'; //в какой области?
			$phone1 = '+7(499)938-94-84'; //+7(499)938-79-22 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999389484'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(499)938-94-84';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Серпухов, улица 2-я Московская, д.15';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/serpuhov/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-serpuhova/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-serpuhova' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. СЕРПУХОВ, УЛИЦА ТЕАТРАЛЬНАЯ, Д.26А';
			$portfolio_address2 = 'Г. СЕРПУХОВ, УЛИЦА ЧЕРНЫШЕВСКОГО, Д.32';
			$portfolio_address3 = 'СЕРПУХОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СЕРПУХОВ, УЛИЦА СОВЕТСКАЯ, Д.38';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'orekhovo-zuevo.fabrikauyuta.ru') {
			
			$city = 'Орехово-Зуево';
			$in_city = 'Орехово-Зуево';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Орехово-Зуево';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Орехово-Зуево";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Орехово-Зуевском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Орехово-Зуево, Центральный бульвар, д.3';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/orehovozuevo/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ОРЕХОВО-ЗУЕВО, УЛИЦА ЯКОВА ФЛИЕРА, Д.7';
			$portfolio_address2 = 'Г. ОРЕХОВО-ЗУЕВО, ЦЕНТРАЛЬНЫЙ БУЛЬВАР, Д.7';
			$portfolio_address3 = 'ОРЕХОВО-ЗУЕВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ОРЕХОВО-ЗУЕВО, УЛИЦА КООПЕРАТИВНАЯ, Д.12';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			
			}elseif ($host_name == 'dolgoprudnyj.fabrikauyuta.ru') {
			
			$city = 'Долгопрудный';
			$in_city = 'Долгопрудном';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Долгопрудного';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Долгопрудному";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Долгопрудненском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Долгопрудный, Институтский переулок, д.4/9';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/dolgoprud/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДОЛГОПРУДНЫЙ, УЛИЦА МОЛОДЁЖНАЯ, Д.10';
			$portfolio_address2 = 'Г. ДОЛГОПРУДНЫЙ, УЛИЦА СПОРТИВНАЯ, Д.5К1';
			$portfolio_address3 = 'ДОЛГОПРУДНЕНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДОЛГОПРУДНЫЙ, УЛИЦА ПЕРВОМАЙСКАЯ, Д.28А';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'zhukovskij.fabrikauyuta.ru') {
			
			$city = 'Жуковский';
			$in_city = 'Жуковском';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Жуковского';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Жуковскому";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Жуковском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Жуковский, улица Гагарина, д.7';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/zhukovsky/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЖУКОВСКИЙ, УЛИЦА МЯСИЩЕВА, Д.24';
			$portfolio_address2 = 'Г. ЖУКОВСКИЙ, УЛИЦА ЛОМОНОСОВА, Д.16';
			$portfolio_address3 = 'ЖУКОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЖУКОВСКИЙ, УЛИЦА СЕМАШКО, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'reutov.fabrikauyuta.ru') {
			
			$city = 'Реутов';
			$in_city = 'Реутове';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Реутова';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Реутову";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Реутовском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Реутов, улица Гагарина, д.2';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/reutov/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. РЕУТОВ, УЛИЦА ЛЕНИНА, Д.21';
			$portfolio_address2 = 'Г. РЕУТОВ, УЛИЦА ЛЕСНАЯ, Д.11К1';
			$portfolio_address3 = 'РЕУТОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. РЕУТОВ, УЛИЦА НОВАЯ, Д.18';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'pushkino.fabrikauyuta.ru') {
			
			$city = 'Пушкино';
			$in_city = 'Пушкино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Пушкино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Пушкино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Пушкинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Пушкино, улица Чехова, д.14';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/pushkino/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПУШКИНО, УЛИЦА КРЫЛОВА, Д.8/5';
			$portfolio_address2 = 'Г. ПУШКИНО, ПРОЕЗД РОЗАНОВА, Д.5';
			$portfolio_address3 = 'ПУШКИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ПУШКИНО, ПРОСПЕКТ МОСКОВСКИЙ, Д.52К5';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'sergiev-posad.fabrikauyuta.ru') {
			
			$city = 'Сергиев Посад';
			$in_city = 'Сергиев Посаде';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Сергиев Посада';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Сергиев Посаду";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Сергиево-Посадском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Сергиев Посад, Новоугличское шоссе, д 85';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/sergievposad/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СЕРГИЕВ ПОСАД, УЛИЦА БЕРОУНСКАЯ, Д.14';
			$portfolio_address2 = 'Г. СЕРГИЕВ ПОСАД, ПРОСПЕКТ КРАСНОЙ АРМИИ, Д.5';
			$portfolio_address3 = 'СЕРГИЕВО-ПОСАДСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СЕРГИЕВ ПОСАД, УЛИЦА КАРЛА ЛИБКНЕХТА, Д.9/38';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'noginsk.fabrikauyuta.ru') {
			
			$city = 'Ногинск';
			$in_city = 'Ногинске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Ногинска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Ногинску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Богородском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Ногинск, улица Трудовая, д.4Б';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/noginsk/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. НОГИНСК, УЛИЦА ЛЕСНОВА, Д.7';
			$portfolio_address2 = 'Г. НОГИНСК, УЛИЦА РОГОЖСКАЯ, Д.26';
			$portfolio_address3 = 'БОГОРОДСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. НОГИНСК, УЛИЦА 3-ГО ИНТЕРНАЦИОНАЛА, Д.41';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'lobnya.fabrikauyuta.ru') {
			
			$city = 'Лобня';
			$in_city = 'Лобне';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Лобни';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Лобне";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Лобнянском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22'; //+7(499)938-79-22 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Лобня, улица Ленина, д.19к1';
			$map_office = '';
$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛОБНЯ, УЛИЦА 40 ЛЕТ ОКТЯБРЯ, Д.12';
			$portfolio_address2 = 'Г. ЛОБНЯ, УЛИЦА ФИЗКУЛЬТУРНАЯ, Д.4';
			$portfolio_address3 = 'ЛОБНЯНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЛОБНЯ, УЛИЦА ОКРУЖНАЯ, Д.13';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'klin.fabrikauyuta.ru') {
			
			$city = 'Клин';
			$in_city = 'Клину';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Клина';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Клину";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Клинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Клин, улица Гагарина, д.35';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/klin%20/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КЛИН, ВОЛОКОЛАМСКОЕ ШОССЕ, Д.3';
			$portfolio_address2 = 'Г. КЛИН, УЛИЦА МИРА, Д.46';
			$portfolio_address3 = 'КЛИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КЛИН, УЛИЦА ЛИТЕЙНАЯ, Д.59/10';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'ivanteevka.fabrikauyuta.ru') {
			
			$city = 'Ивантеевка';
			$in_city = 'Ивантеевке';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Ивантеевки';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Ивантеевке";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Клинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Ивантеевка, улица Новая Слобода, д.4';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/ivanteevka/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ИВАНТЕЕВКА, УЛИЦА ПИОНЕРСКАЯ, Д.3';
			$portfolio_address2 = 'Г. ИВАНТЕЕВКА, УЛИЦА СМУРЯКОВА, Д.10';
			$portfolio_address3 = 'ИВАНТЕЕВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ИВАНТЕЕВКА, УЛИЦА НОВОСЁЛКИ, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'dubna.fabrikauyuta.ru') {
			
			$city = 'Дубна';
			$in_city = 'Дубне';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Дубна';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Дубне";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Дубненском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Дубна, проспект Боголюбова, д.15';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/dubna/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href=' https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДУБНА, УЛИЦА СТРОИТЕЛЕЙ, Д.16';
			$portfolio_address2 = 'Г. ДУБНА, УЛИЦА ВАВИЛОВА, Д.16';
			$portfolio_address3 = 'ДУБНЕНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДУБНА, УЛИЦА ПОНТЕКОРВО, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'egorevsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';	
			
			$city = 'Егорьевск';
			$in_city = 'Егорьевске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Егорьевска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Егорьевску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Егорьевском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Егорьевск, улица Советская, д.105/7';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/egorevsk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ЕГОРЬЕВСК, УЛИЦА КАРЛА МАРКСА, Д.68';
			$portfolio_address2 = 'Г. ЕГОРЬЕВСК, 6-Й МИКРОРАЙОН, Д.4А';
			$portfolio_address3 = 'ЕГОРЬЕВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЕГОРЬЕВСК, УЛИЦА ОКТЯБРЬСКАЯ, Д.95';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'chehov.fabrikauyuta.ru') {
			
			$city = 'Чехов';
			$in_city = 'Чехове';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Чехова';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Чехову";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Чеховском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Чехов, улица Молодёжная, д.1';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/chehov/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ЧЕХОВ, УЛИЦА МОСКОВСКАЯ, Д.81';
			$portfolio_address2 = 'Г. ЧЕХОВ, УЛИЦА ЧЕХОВА, Д.63';
			$portfolio_address3 = 'ЧЕХОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЧЕХОВ, УЛИЦА ВИШНЁВАЯ, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'dmitrov.fabrikauyuta.ru') {
			
				$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Дмитров';
			$in_city = 'Дмитрове';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Дмитрова';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Дмитрову";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Дмитровском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Дмитров, микрорайон имени А.М. Маркова, 3А';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/dmitrov/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДМИТРОВ, УЛИЦА МОСКОВСКАЯ, Д.8';
			$portfolio_address2 = 'Г. ДМИТРОВ, БОЛЬШЕВИСТСКИЙ ПЕРЕУЛОК, Д.4А';
			$portfolio_address3 = 'ДМИТРОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДМИТРОВ, УЛИЦА ПОДЪЯЧЕВА, Д.15';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'vidnoe.fabrikauyuta.ru') {
			
			$city = 'Видное';
			$in_city = 'Видном';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Видного';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Видному";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Ленинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Видное, улица Школьная, д.21';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/vidnoe%20%20/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ВИДНОЕ, УЛИЦА СТРОИТЕЛЬНАЯ, Д.3';
			$portfolio_address2 = 'Г. ВИДНОЕ, СОВЕТСКИЙ ПРОЕЗД, Д.3';
			$portfolio_address3 = 'ЛЕНИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ВИДНОЕ, УЛИЦА ЦЕНТРАЛЬНАЯ, Д.15';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'stupino.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Ступино';
			$in_city = 'Ступино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Ступино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Ступино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Ступинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Ступино, улица Пушкина, д.24к2';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/stupino/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. СТУПИНО, УЛИЦА САДОВАЯ, Д.2/1';
			$portfolio_address2 = 'Г. СТУПИНО, УЛИЦА ЧАЙКОВСКОГО, Д.52';
			$portfolio_address3 = 'СТУПИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СТУПИНО, УЛИЦА АНДРОПОВА, Д.33';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'pavlovskij-posad.fabrikauyuta.ru') {
			
			$city = 'Павловский Посад';
			$in_city = 'Павлово Посаде';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Павлово Посада';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Павлово Посаду";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Павлово-Посадском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Павловский Посад, улица Кирова, д.39';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПАВЛОВСКИЙ ПОСАД, УЛИЦА ВОКЗАЛЬНАЯ, Д.3';
			$portfolio_address2 = 'Г. ПАВЛОВСКИЙ ПОСАД, УЛИЦА КАЛЯЕВА, Д.18К2';
			$portfolio_address3 = 'ПАВЛОВО-ПОСАДСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ПАВЛОВСКИЙ ПОСАД, БОЛЬШОЙ ЖЕЛЕЗНОДОРОЖНЫЙ ПРОЕЗД, Д.60';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'naro-fominsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/naro-fominsk_logo.png'; 
			$logo_name = '«Фабрика уюта»'; // $logo_name = '«Окна Наро-Фоминска»';
			$company = '«Фабрика уюта»'; // $company = '«Окна Наро-Фоминска»';
			
			$city = 'Наро-Фоминск';
			$in_city = 'Наро-Фоминске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Наро-Фоминска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Наро-Фоминску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Наро-Фоминском округе'; //в какой области?
			$phone1 = '+7(499)938-94-84'; //+7(499)938-79-22 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999389484'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(499)938-94-84';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Наро-Фоминск, площадь Свободы, д.2';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/naro-fominsk%20/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-naro-fominska/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-naro-fominska' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. НАРО-ФОМИНСК, УЛИЦА МАРШАЛА ЖУКОВА, Д.24';
			$portfolio_address2 = 'Г. НАРО-ФОМИНСК, УЛИЦА ПОЛУБОЯРОВА, Д.5';
			$portfolio_address3 = 'НАРО-ФОМИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. НАРО-ФОМИНСК, УЛИЦА ЛУГОВАЯ, Д.7';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'fryazino.fabrikauyuta.ru') {
			
			$city = 'Фрязино';
			$in_city = 'Фрязино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Фрязино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Фрязино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Фрязинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Фрязино, улица Московская, д.2В';
			$map_office = '';
$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ФРЯЗИНО, УЛИЦА ИНСТИТУТСКАЯ, Д.6А';
			$portfolio_address2 = 'Г. ФРЯЗИНО, УЛИЦА ЛЕНИНА, Д.26';
			$portfolio_address3 = 'ФРЯЗИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ФРЯЗИНО, ПРОСПЕКТ МИРА, Д.21';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'lytkarino.fabrikauyuta.ru') {
			
			$city = 'Лыткарино';
			$in_city = 'Лыткарино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Лыткарино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Лыткарино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Лыткаринском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Лыткарино, улица Ленина, д.19';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/lytkarino/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛЫТКАРИНО, УЛИЦА СОВЕТСКАЯ, Д.11';
			$portfolio_address2 = 'Г. ЛЫТКАРИНО, КВАРТАЛ 3А, Д.23';
			$portfolio_address3 = 'ЛЫТКАРЕНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЛЫТКАРИНО, УЛИЦА КОЛХОЗНАЯ, Д.6К1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'dzerzhinskij.fabrikauyuta.ru') {
			
			$city = 'Дзержинский';
			$in_city = 'Дзержинском';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Дзержинского';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Дзержинскому";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Дзержинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Дзержинский, улица Лесная, д.1';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/dzerzhinskij/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДЗЕРЖИНСКИЙ, УЛИЦА ШАМА, Д.10';
			$portfolio_address2 = 'Г. ДЗЕРЖИНСКИЙ, УЛИЦА СПОРТИВНАЯ, Д.21';
			$portfolio_address3 = 'ДЗЕРЖИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДЗЕРЖИНСКИЙ, УЛИЦА ТОМИЛИНСКАЯ, Д.28';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'solnechnogorsk.fabrikauyuta.ru') {
			
			$city = 'Солнечногорск';
			$in_city = 'Солнечногорске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Солнечногорска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Солнечногорску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Солнечногорском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Солнечногорск, улица Красная, д.120';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/solnechnogorsk/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СОЛНЕЧНОГОРСК, УЛИЦА НАБЕРЕЖНАЯ, Д.7А';
			$portfolio_address2 = 'Г. СОЛНЕЧНОГОРСК, УЛИЦА ВОЕННЫЙ ГОРОДОК, Д.53К4';
			$portfolio_address3 = 'СОЛНЕЧНОГОРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СОЛНЕЧНОГОРСК, УЛИЦА 2-Я ВОЛОДАРСКАЯ, Д.9';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'kashira.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Кашира';
			$in_city = 'Кашире';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Кашира';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Каширу";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Каширском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = '+7(958)100-46-62'; //Номер указывается на странице контактов
			$phone3_prefix = '+79581004662'; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Кашира, улица Советская, д.1';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/kashira/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. КАШИРА, УЛИЦА СТРЕЛЕЦКАЯ, Д.58';
			$portfolio_address2 = 'Г. КАШИРА, ПЛОЩАДЬ ВОЛОДАРСКОГО, Д.6';
			$portfolio_address3 = 'КАШИРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КАШИРА, УЛИЦА НОВАЯ, Д.10';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'kotelniki.fabrikauyuta.ru') {
			
			$city = 'Котельники';
			$in_city = 'Котельниках';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Котельников';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Котельникам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'округе Котельники'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Котельники, 2-й Покровский проезд, д.12';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/kotelniki/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КОТЕЛЬНИКИ, МИКРОРАЙОН БЕЛАЯ ДАЧА, Д.6';
			$portfolio_address2 = 'Г. КОТЕЛЬНИКИ, ЮБИЛЕЙНАЯ, Д.10';
			$portfolio_address3 = 'ОКРУГ КОТЕЛЬНИКИ';
			$portfolio_address4 = 'Г. КОТЕЛЬНИКИ, МИКРОРАЙОН БЕЛАЯ ДАЧА, Д.15';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'nahabino.fabrikauyuta.ru') {
			
			$city = 'Нахабино';
			$in_city = 'Нахабино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Нахабино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Нахабино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Красногорском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Нахабино, улица Советская, д.32';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. НАХАБИНО, УЛИЦА БЕЛОБОРОДОВА, Д.8';
			$portfolio_address2 = 'Г. НАХАБИНО, УЛИЦА КРАСНОАРМЕЙСКАЯ, Д.49';
			$portfolio_address3 = 'КРАСНОГОРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. НАХАБИНО, УЛИЦА КОРОЛЁВА, Д.13';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'krasnoznamensk.fabrikauyuta.ru') {
			
			$city = 'Краснознаменск';
			$in_city = 'Краснознаменске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Краснознаменска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Краснознаменску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Краснознаменском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Краснознаменск, улица Победы, д.4Г';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/krasnoznamensk/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КРАСНОЗНАМЕНСК, ПРОСПЕКТ МИРА, Д.2';
			$portfolio_address2 = 'Г. КРАСНОЗНАМЕНСК, УЛИЦА КРАСНОЗНАМЁННАЯ, Д.2А';
			$portfolio_address3 = 'КРАСНОЗНАМЕНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КРАСНОЗНАМЕНСК, УЛИЦА СТРОИТЕЛЕЙ, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'protvino.fabrikauyuta.ru') {
			
			$city = 'Протвино';
			$in_city = 'Протвино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Протвино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Протвино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Протвинском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$phone2_prefix = '';
			$office_name = '';
			$office_address = 'г. Протвино, улица Ленина, д.7';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/protvino/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПРОТВИНО, МОЛОДЁЖНЫЙ ПРОЕЗД, Д.7';
			$portfolio_address2 = 'Г. ПРОТВИНО, УЛИЦА ЮЖНАЯ, Д.1';
			$portfolio_address3 = 'ПРОТВИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ПРОТВИНО, МОЛОДЁЖНЫЙ ПРОЕЗД, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'istra.fabrikauyuta.ru') {
			
			$city = 'Истра';
			$in_city = 'Истре';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Истры';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Истре";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Истринском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Истра, улица 9 Гвардейской Дивизии, д.49';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/istra/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ИСТРА, УЛИЦА ЮБИЛЕЙНАЯ, Д.6';
			$portfolio_address2 = 'Г. ИСТРА, ПРОСПЕКТ ГЕНЕРАЛА БЕЛОБОРОДОВА, Д.24';
			$portfolio_address3 = 'ИСТРИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ИСТРА, УЛИЦА УРИЦКОГО, Д.40';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'shatura.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Шатура';
			$in_city = 'Шатуре';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Шатуры';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Шатуре";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Шатурском районе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Шатура, пр Ильича, д.59';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/Shatura/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ШАТУРА, УЛИЦА БОСОВА, Д.12';
			$portfolio_address2 = 'Г. ШАТУРА, РАБОЧИЙ ПРОЕЗД, Д.5А';
			$portfolio_address3 = 'ШАТУРСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ШАТУРА, УЛИЦА МОРОЗОВА, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'tomilino.fabrikauyuta.ru') {
			
			$city = 'Томилино';
			$in_city = 'Томилино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Томилино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Томилино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Люберецком районе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Томилино, улица Гаршина, д.9А';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/tomilino/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ТОМИЛИНО, УЛИЦА ГАРШИНА, Д.9АК3';
			$portfolio_address2 = 'Г. ТОМИЛИНО, УЛИЦА ПИОНЕРСКАЯ, Д.12';
			$portfolio_address3 = 'ЛЮБЕРЕЦКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ТОМИЛИНО, УЛИЦА ГАРШИНА, Д.9АК14';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера

			}elseif ($host_name == 'mozhajsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/mozhajsk_logo.png'; 
			$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Можайска»';
			$company = '«Фабрика уюта»'; //$company = '«Окна Можайска»';
			
			$city = 'Можайск';
			$in_city = 'Можайске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Можайска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Можайску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Можайском округе'; //в какой области?
			$phone1 = '+7(499)938-94-84'; //+7(499)938-79-22 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999389484'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(499)938-94-84';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Можайск, улица Московская, д.22А';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/mozhaysk/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-mojayska/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-mojayska' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. МОЖАЙСК, УЛИЦА КОММУНИСТИЧЕСКАЯ, Д.34';
			$portfolio_address2 = 'Г. МОЖАЙСК, УЛИЦА АКАДЕМИКА ПАВЛОВА, Д.2';
			$portfolio_address3 = 'МОЖАЙСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. МОЖАЙСК, УЛИЦА ПОЛОСУХИНА, Д.8';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'dedovsk.fabrikauyuta.ru') {
			
			$city = 'Дедовск';
			$in_city = 'Дедовске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Дедовска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Дедовску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Истринском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Дедовск, улица Гагарина, д.3';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/dedovsk/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ДЕДОВСК, УЛИЦА ГВАРДЕЙСКАЯ, Д.11';
			$portfolio_address2 = 'Г. ДЕДОВСК, УЛИЦА КРАСНЫЙ ОКТЯБРЬ, Д.4';
			$portfolio_address3 = 'ИСТРИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ДЕДОВСК, УЛИЦА ПОБЕДЫ, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'likino-dulyovo.fabrikauyuta.ru') {
			
			$city = 'Ликино-Дулёво';
			$in_city = 'Ликино-Дулёво';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Ликино-Дулёво';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Ликино-Дулёво";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Истринском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Ликино-Дулёво, улица Ленина, д.4/1';
			$map_office = '';
$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛИКИНО-ДУЛЁВО, УЛИЦА КОММУНИСТИЧЕСКАЯ, Д.50А';
			$portfolio_address2 = 'Г. ЛИКИНО-ДУЛЁВО, УЛИЦА ЮБИЛЕЙНАЯ, Д.1';
			$portfolio_address3 = 'ОРЕХОВО-ЗУЕВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЛИКИНО-ДУЛЁВО, УЛИЦА СТЕПАНА МОРОЗКИНА, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'aprelevka.fabrikauyuta.ru') {
			
			$city = 'Апрелевка';
			$in_city = 'Апрелевке';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Апрелевки';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Апрелевке";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Наро-Фоминском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Апрелевка, улица Ленина, д.6';
			$map_office = '';

    $need_href1 = "<a href='https://oknaorg.ru/aprelevka/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. АПРЕЛЕВКА, УЛИЦА СЕНТЯБРЬСКАЯ, Д.2';
			$portfolio_address2 = 'Г. АПРЕЛЕВКА, УЛИЦА ЖАСМИНОВАЯ, Д.4';
			$portfolio_address3 = 'НАРО-ФОМИНСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. АПРЕЛЕВКА, УЛИЦА ДУБКИ, Д.17';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'krasnoarmejsk.fabrikauyuta.ru') {
			
			$city = 'Красноармейск';
			$in_city = 'Красноармейске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Красноармейска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Красноармейску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Красноармейском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Красноармейск, микрорайон Северный, д.21А';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/krasnoarmejsk%20/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КРАСНОАРМЕЙСК, УЛИЦА ДАЧНАЯ, Д.11';
			$portfolio_address2 = 'Г. КРАСНОАРМЕЙСК, ПРОСПЕКТ ИСПЫТАТЕЛЕЙ, Д.9';
			$portfolio_address3 = 'КРАСНОАРМЕЙСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КРАСНОАРМЕЙСК, УЛИЦА СПОРТИВНАЯ, Д.12';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'vlasiha.fabrikauyuta.ru') {
			
			$city = 'Власиха';
			$in_city = 'Власихе';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Власихи';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Власихе";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'округе Власиха'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Власиха, улица Маршала Жукова, д.16';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/vlasiha/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ВЛАСИХА, МИКРОРАЙОН ШКОЛЬНЫЙ, Д.1';
			$portfolio_address2 = 'Г. ВЛАСИХА, УЛИЦА СОЛНЕЧНАЯ, Д.4';
			$portfolio_address3 = 'ОКРУГ ВЛАСИХА';
			$portfolio_address4 = 'Г. ВЛАСИХА, УЛИЦА ЛЕСНАЯ, Д.34';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'malahovka.fabrikauyuta.ru') {
			
			$city = 'Малаховка';
			$in_city = 'Малаховке';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Малаховки';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Малаховке";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Люберецком районе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Малаховка, улица Шоссейная, д.6';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/malahovka/company/list' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. МАЛАХОВКА, ТЕАТРАЛЬНЫЙ ПРОЕЗД, Д.2';
			$portfolio_address2 = 'Г. МАЛАХОВКА, УЛИЦА КОМСОМОЛЬСКАЯ, Д.13';
			$portfolio_address3 = 'ЛЮБЕРЕЦКИЙ РАЙОН';
			$portfolio_address4 = 'Г. МАЛАХОВКА, УЛИЦА КИРОВА, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'ozyory.fabrikauyuta.ru') {
			
			$city = 'Озёры';
			$in_city = 'г. Озёры';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'г. Озёры';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "г. Озёры";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Озёрском районе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Озёры, Коммунистическая площадь, д.3А';
			$map_office = '';
	$need_href1 = "<a href='https://oknaorg.ru/ozera/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-ozery/' target='_blank'>";  
	$need_href3 = "<a href=' https://www.otzyvru.com/okna-ozery' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ОЗЁРЫ, УЛИЦА ТРУДОВАЯ, Д.16';
			$portfolio_address2 = 'Г. ОЗЁРЫ, УЛИЦА ВОРОВСКОГО, Д.33';
			$portfolio_address3 = 'ОЗЁРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ОЗЁРЫ, КОММУНИСТИЧЕСКАЯ ПЛОЩАДЬ, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}elseif ($host_name == 'losino-petrovskij.fabrikauyuta.ru') {
			
			$city = 'Лосино-Петровский';
			$in_city = 'г. Лосино-Петровский';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'г. Лосино-Петровский';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "г. Лосино-Петровский";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'округе Лосино-Петровский'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Лосино-Петровский, улица Ленина, д.5';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛОСИНО-ПЕТРОВСКИЙ, МИКРОРАЙОН ПРИБРЕЖНЫЙ, Д.34';
			$portfolio_address2 = 'Г. ЛОСИНО-ПЕТРОВСКИЙ, УЛИЦА СТРОИТЕЛЕЙ, Д.3';
			$portfolio_address3 = 'ЛОСИНО-ПЕТРОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЛОСИНО-ПЕТРОВСКИЙ, УЛИЦА ПУШКИНА, Д.6';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}

			elseif ($host_name == 'obninsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/obninsk_logo.png'; 
			$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Обнинска»';
			$company = '«Фабрика уюта»'; //$company = '«Окна Обнинска»';
			
			$city = 'Обнинск';
			$in_city = 'Обнинске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Обнинска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Обнинску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'округе Обнинска'; //в какой области?
			$phone1 = '+7(4842)33-34-25'; //+7(4842)20-01-69 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74842333425'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(4842)33-34-25';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Обнинск, улица Гагарина, д.33';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ОБНИНСК, АКСЕНОВА, Д.4Б';
			$portfolio_address2 = 'Г. ОБНИНСК, ПРОСПЕКТ МАРКСА, Д.54';
			$portfolio_address3 = 'ОКРУГ Г. ОБНИНСКА';
			$portfolio_address4 = 'Г. ОБНИНСК, УЛИЦА ГАГАРИНА, Д.33';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}

			elseif ($host_name == 'kaluga.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logos/kaluga_logo.png'; 
			$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Калуги»';
			$company = '«Фабрика уюта»'; //$company = '«Окна Калуги»';

			$city = 'Калуга';
			$in_city = 'Калуге';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Калуги';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Калуге";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Калужской области'; //в какой области?
			$phone1 = '+7(4842)33-34-25'; //+7(4842)20-01-69 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74842333425'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(4842)33-34-25';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Калуга, ул. 65 лет победы, д 43';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/kaluga/company/list' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-kalugi' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-kalugi' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. КАЛУГА, УЛИЦА ЛЕНИНА, Д.127';
			$portfolio_address2 = 'Г. КАЛУГА, УЛИЦА КАРЛА МАРКСА, Д.4';
			$portfolio_address3 = 'КАЛУЖСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. КАЛУГА, УЛИЦА МОСКОВСКАЯ, Д.24';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 


			elseif ($host_name == 'tula.fabrikauyuta.ru') {

				$logo_url = '/img/logos/_logo.png'; //$logo_url = '/img/logo_tula.png';

				$logo_name = '«Фабрика уюта»'; //$logo_name = '«Окна Тулы»';//Название логотипа (вставляется в блоках)				
				$company = '«Фабрика уюта»'; //$company = '«Окна Тулы»';//Название компании (вставляется в тексте и в title description) //Пластиковые окна
			
			$city = 'Тула';
			$in_city = 'Туле';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Тулы';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Туле";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Тульской области'; //в какой области?
			$phone1 = '+7(4872)51-50-95'; //+7(4872)33-72-43 //телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74872515095'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'fabrika1uyuta@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(4872)51-50-95';
			$wa_number = '+7(991)409-43-41';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79914094341';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Тула, Калужское шоссе, д. 11';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/tula/company/list ' target='_blank'>";  
	$need_href2 = "<a href='https://ru.otzyv.com/okna-tuly/' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/okna-tuly ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			$portfolio_address1 = 'Г. ТУЛА, УЛИЦА ЛЕНИНА, Д.127';
			$portfolio_address2 = 'Г. ТУЛА, УЛИЦА КАРЛА МАРКСА, Д.4';
			$portfolio_address3 = 'ТУЛЬСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ТУЛА, УЛИЦА МОСКОВСКАЯ, Д.24';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
  

  			elseif ($host_name == 'peterburg.fabrikauyuta.ru') {

			//	$logo_name = '«Окна Тулы»';//Название логотипа (вставляется в блоках)
			//	$logo_url = '/img/logo_tula.png';
			//	$company = '«Окна Тулы»';//Название компании (вставляется в тексте и в title description) //Пластиковые окна
			
			$city = 'Санкт-Петербург';
			$in_city = 'Санкт-Петербурге';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Санкт-Петербурга';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "области";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'городу'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Санкт-Петербург, Московский проспект, д. 106';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. САНКТ-ПЕТЕРБУРГ, УЛИЦА ДОЛГООЗЕРНАЯ, Д.34А';
			$portfolio_address2 = 'Г. САНКТ-ПЕТЕРБУРГ, ПРОСПЕКТ ГРАЖДАНСКИЙ, Д.79 к.4Б';
			$portfolio_address3 = 'ЛЕНИНГРАДСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. САНКТ-ПЕТЕРБУРГ, ШОССЕ МОСКОВСКОЕ, Д.24';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 

			elseif ($host_name == 'boksitogorsk.fabrikauyuta.ru') {
			
			$city = 'Бокситогорск';
			$in_city = 'Бокситогорске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Бокситогорска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Бокситогорску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Бокситогорском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Бокситогорск, ул. Павлова, д 21';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. БОКСИТОГОРСК, УЛИЦА МЕТАЛЛУРГОВ, Д.2';
			$portfolio_address2 = 'Г. БОКСИТОГОРСК, УЛИЦА СОЦИАЛИСТИЧЕСКАЯ, Д.1';
			$portfolio_address3 = 'БОКСИТОГОРСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. БОКСИТОГОРСК, УЛИЦА САДОВАЯ, Д.5А';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
			
			elseif ($host_name == 'svetogorsk.fabrikauyuta.ru') {
			
			$city = 'Светогорск';
			$in_city = 'Светогорске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Светогорска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Светогорску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Выборгском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Светогорск, ул. Рощинская, д 2';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СВЕТОГОРСК, УЛИЦА ПОГРАНИЧНАЯ, Д.3';
			$portfolio_address2 = 'Г. СВЕТОГОРСК, УЛИЦА СПОРТИВНАЯ, Д.6';
			$portfolio_address3 = 'ВЫБОРГСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. СВЕТОГОРСК, УЛИЦА КРАСНОАРМЕЙСКАЯ, Д.12';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
						
			elseif ($host_name == 'podporozhje.fabrikauyuta.ru') {
			
			$city = 'Подпорожье';
			$in_city = 'Подпорожье';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Подпорожья';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Подпорожью";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Подпорожском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Подпорожье, ул. Исакова, д 9';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПОДПОРОЖЬЕ, УЛИЦА КРАСНОАРМЕЙСКАЯ, Д.1';
			$portfolio_address2 = 'Г. ПОДПОРОЖЬЕ, УЛИЦА СВИРСКАЯ, Д.82А';
			$portfolio_address3 = 'ПОДПОРОЖСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ПОДПОРОЖЬЕ, УЛИЦА СОСНОВАЯ, Д.9';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
									
			elseif ($host_name == 'priozersk.fabrikauyuta.ru') {
			
			$city = 'Приозерск';
			$in_city = 'Приозерске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Приозерска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Приозерску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Приозерском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Приозерск, ул. Исакова, д 9';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПРИОЗЕРСК, УЛИЦА КРАСНОАРМЕЙСКАЯ, Д.5';
			$portfolio_address2 = 'Г. ПРИОЗЕРСК, УЛИЦА ГОГОЛЯ, Д.9';
			$portfolio_address3 = 'ПРИОЗЕРСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ПРИОЗЕРСК, УЛИЦА ГАГАРИНА, Д.18';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
												
			elseif ($host_name == 'lodejnoepole.fabrikauyuta.ru') {
			
			$city = 'Лодейное Поле';
			$in_city = 'Лодейном Поле';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Лодейного Поля';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Лодейному Полю";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Лодейнопольском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Лодейное Поле, ул. Гагарина, д 9';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛОДЕЙНОЕ ПОЛЕ, УЛИЦА КАРЛА МАРКСА, Д.49';
			$portfolio_address2 = 'Г. ЛОДЕЙНОЕ ПОЛЕ, УЛИЦА ПОГРАНИЧНАЯ, Д.19к3';
			$portfolio_address3 = 'ЛОДЕЙНОПОЛЬСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ЛОДЕЙНОЕ ПОЛЕ, УЛИЦА РЕСПУБЛИКАНСКАЯ, Д.51';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} 
															
			elseif ($host_name == 'pikaljovo.fabrikauyuta.ru') {
			
			$city = 'Пикалёво';
			$in_city = 'Пикалёво';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Пикалёво';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Пикалёво";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Бокситогорском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Пикалёво, ул. Школьная, д 55';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ПИКАЛЁВО, 6-Й МИКРОРАЙОН, Д.33';
			$portfolio_address2 = 'Г. ПИКАЛЁВО, УЛИЦА ШКОЛЬНАЯ, Д.8';
			$portfolio_address3 = 'БОКСИТОГОРСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ПИКАЛЁВО, УЛИЦА СТРОИТЕЛЬНАЯ, Д.26';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																		
			elseif ($host_name == 'kommunar.fabrikauyuta.ru') {
			
			$city = 'Коммунар';
			$in_city = 'Коммунаре';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Коммунара';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Коммунару";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Гатчинском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Коммунар, шоссе Ленинградское, д 20';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КОММУНАР, УЛИЦА ИЖОРСКАЯ, Д.28';
			$portfolio_address2 = 'Г. КОММУНАР, УЛИЦА ГАТЧИНСКАЯ, Д.18А';
			$portfolio_address3 = 'ГАТЧИНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КОММУНАР, УЛИЦА ЖЕЛЕЗНОДОРОЖНАЯ, Д.27К2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																					
			elseif ($host_name == 'nikolskoe.fabrikauyuta.ru') {
			
			$city = 'Никольское';
			$in_city = 'Никольском';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Никольского';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Никольскому";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Тосненском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Никольское, ул. Комсомольская, д 11';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. НИКОЛЬСКОЕ, УЛИЦА ЛЕСНАЯ, Д.10';
			$portfolio_address2 = 'Г. НИКОЛЬСКОЕ, УЛИЦА ЗАВОДСКАЯ, Д.6';
			$portfolio_address3 = 'ТОСНЕНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. НИКОЛЬСКОЕ, УЛИЦА ЗАПАДНАЯ, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																								
			elseif ($host_name == 'otradnoe.fabrikauyuta.ru') {
			
			$city = 'Отрадное';
			$in_city = 'Отрадном';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Отрадного';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Отрадному";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Кировском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Отрадное, ул. Гагарина, д 5А';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ОТРАДНОЕ, УЛИЦА СОВЕТСКАЯ, Д.21';
			$portfolio_address2 = 'Г. ОТРАДНОЕ, ШОССЕ НИКОЛЬСКОЕ, Д.2К2';
			$portfolio_address3 = 'КИРОВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ОТРАДНОЕ, УЛИЦА ДРУЖБЫ, Д.16';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																											
			elseif ($host_name == 'kirovsk.fabrikauyuta.ru') {
			
			$city = 'Кировск';
			$in_city = 'Кировске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Кировска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Кировску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Кировском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Кировск, ул. Новая, д 12';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КИРОВСК, УЛИЦА КИРОВА, Д.26';
			$portfolio_address2 = 'Г. КИРОВСК, УЛИЦА ЭНЕРГЕТИКОВ, Д.11';
			$portfolio_address3 = 'КИРОВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КИРОВСК, УЛИЦА СЕВЕРНАЯ, Д.5';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																														
			elseif ($host_name == 'slantsy.fabrikauyuta.ru') {
			
			$city = 'Сланцы';
			$in_city = 'Сланцах';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Сланцев';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Сланцам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Сланцевском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Сланцы, ул. Кирова, д 44';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СЛАНЦЫ, УЛИЦА БАРАНОВА, Д.7';
			$portfolio_address2 = 'Г. СЛАНЦЫ, УЛИЦА ЛЕНИНА, Д.19Б';
			$portfolio_address3 = 'СЛАНЦЕВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. СЛАНЦЫ, УЛИЦА МАКСИМА ГОРЬКОГО, Д.11';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																	
			elseif ($host_name == 'luga.fabrikauyuta.ru') {
			
			$city = 'Луга';
			$in_city = 'Луге';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Луги';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Луге";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Лужском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Луга, ул. Красной Артиллерии, д 7/18';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ЛУГА, УЛИЦА МИККЕЛИ, Д.11';
			$portfolio_address2 = 'Г. ЛУГА, УЛИЦА СОФЬИ ПЕРОВСКОЙ, Д.20';
			$portfolio_address3 = 'ЛУЖСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ЛУГА, УЛИЦА МИККЕЛИ, Д.1К3';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																	
			elseif ($host_name == 'tosno.fabrikauyuta.ru') {
			
			$city = 'Тосно';
			$in_city = 'Тосно';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Тосно';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Тосно";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Тосненском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Тосно, проспект Ленина, д 20';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ТОСНО, УЛИЦА ПОБЕДЫ, Д.19А';
			$portfolio_address2 = 'Г. ТОСНО, УЛИЦА БЛИННИКОВА, Д.18';
			$portfolio_address3 = 'ТОСНЕНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ТОСНО, УЛИЦА ПЕСОЧНАЯ, Д.40';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																	
			elseif ($host_name == 'kudrovo.fabrikauyuta.ru') {
			
			$city = 'Кудрово';
			$in_city = 'Кудрово';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Кудрово';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Кудрово";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Всеволожском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Кудрово, проспект Европейский, д 14к1';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КУДРОВО, УЛИЦА ЦЕНТРАЛЬНАЯ, Д.54К2';
			$portfolio_address2 = 'Г. КУДРОВО, ЕВРОПЕЙСКИЙ ПРОСПЕКТ, Д.20К3';
			$portfolio_address3 = 'ВСЕВОЛОЖСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КУДРОВО, УЛИЦА ОБЛАСТНАЯ, Д.5К2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																				
			elseif ($host_name == 'volhov.fabrikauyuta.ru') {
			
			$city = 'Волхов';
			$in_city = 'Волхове';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Волхова';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Волхову";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Волховском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Волхов, проспект Кировский, д 45';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ВОЛХОВ, УЛИЦА ФЕДЮНИНСКОГО, Д.10Б';
			$portfolio_address2 = 'Г. ВОЛХОВ, УЛИЦА АВИАЦИОННАЯ, Д.34';
			$portfolio_address3 = 'ВОЛХОВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ВОЛХОВ, УЛИЦА МАРАТА, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																							
			elseif ($host_name == 'kingisepp.fabrikauyuta.ru') {
			
			$city = 'Кингисепп';
			$in_city = 'Кингисеппе';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Кингисеппа';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Кингисеппу";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Кингисеппском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Кингисепп, ул. Большая Советская, д 25';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КИНГИСЕПП, УЛИЦА ВОРОВСКОГО, Д.32';
			$portfolio_address2 = 'Г. КИНГИСЕПП, КРИККОВСКОЕ ШОССЕ, Д.12А';
			$portfolio_address3 = 'КИНГИСЕППСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КИНГИСЕПП, УЛИЦА СТРОИТЕЛЕЙ, Д.7';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																										
			elseif ($host_name == 'kirishi.fabrikauyuta.ru') {
			
			$city = 'Кириши';
			$in_city = 'Киришах';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Киришей';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Киришам";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Киришском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Кириши, ул. Советская, д 17';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. КИРИШИ, УЛИЦА ЛЕНИНГРАДСКАЯ, Д.11';
			$portfolio_address2 = 'Г. КИРИШИ, УЛИЦА ЭНЕРГЕТИКОВ, Д.7';
			$portfolio_address3 = 'КИРИШСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КИРИШИ, БУЛЬВАР МОЛОДЁЖНЫЙ, Д.21';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																													
			elseif ($host_name == 'sertolovo.fabrikauyuta.ru') {
			
			$city = 'Сертолово';
			$in_city = 'Сертолово';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Сертолово';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Сертолово";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Всеволожском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Сертолово, ул. Советская, д 17';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СЕРТОЛОВО, УЛИЦА ЛЕНИНГРАДСКАЯ, Д.11';
			$portfolio_address2 = 'Г. СЕРТОЛОВО, УЛИЦА ЭНЕРГЕТИКОВ, Д.7';
			$portfolio_address3 = 'ВСЕВОЛОЖСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. СЕРТОЛОВО, БУЛЬВАР МОЛОДЁЖНЫЙ, Д.21';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																
			elseif ($host_name == 'tikhvin.fabrikauyuta.ru') {
			
			$city = 'Тихвин';
			$in_city = 'Тихвине';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Тихвина';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Тихвину";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Тихвинском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Тихвин, 3-й микрорайон, д 2/3';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ТИХВИН, УЛИЦА ЯРОСЛАВА ИВАНОВА, Д.1';
			$portfolio_address2 = 'Г. ТИХВИН, МИКРОРАЙОН 1А, Д.1';
			$portfolio_address3 = 'ТИХВИНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ТИХВИН, УЛИЦА МАШИНОСТРОИТЕЛЕЙ, Д.42';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																			
			elseif ($host_name == 'murino.fabrikauyuta.ru') {
			
			$city = 'Мурино';
			$in_city = 'Мурино';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Мурино';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Мурино";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Всеволожском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Мурино, бульвар Менделеева, д 6';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. МУРИНО, УЛИЦА ЕКАТЕРИНИНСКАЯ, Д.8К1';
			$portfolio_address2 = 'Г. МУРИНО, ВОРОНЦОВСКИЙ БУЛЬВАР, Д.5К5';
			$portfolio_address3 = 'ВСЕВОЛОЖСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. МУРИНО, ПЕТРОВСКИЙ БУЛЬВАР, Д.11К1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																						
			elseif ($host_name == 'sosnovyjbor.fabrikauyuta.ru') {
			
			$city = 'Сосновый Бор';
			$in_city = 'Сосновом Боре';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Соснового Бора';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Сосновому Бору";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Сосновоборском округе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Сосновый Бор, ул. Солнечная, д 16';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. СОСНОВЫЙ БОР, УЛИЦА ПЕТРА ВЕЛИКОГО, Д.4';
			$portfolio_address2 = 'Г. СОСНОВЫЙ БОР, УЛИЦА ЛЕНИНГРАДСКАЯ, Д.10';
			$portfolio_address3 = 'СОСНОВОБОРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СОСНОВЫЙ БОР, УЛИЦА ПАРКОВАЯ, Д.60';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																									
			elseif ($host_name == 'vsevologsk.fabrikauyuta.ru') {
			
			$city = 'Всеволожск';
			$in_city = 'Всеволожске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Всеволожска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Всеволожску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Всеволожском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Всеволожск, пр-т. Всеволожский, д 43';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ВСЕВОЛОЖСК, УЛИЦА ВОККА, Д.12К2';
			$portfolio_address2 = 'Г. ВСЕВОЛОЖСК, УЛИЦА АЛЕКСАНДРОВСКАЯ, Д.90/13';
			$portfolio_address3 = 'СОСНОВОБОРСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ВСЕВОЛОЖСК, ПРОСПЕКТ ДОБРОВОЛЬСКОГО, Д.20К2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																												
			elseif ($host_name == 'viborg.fabrikauyuta.ru') {
			
			$city = 'Выборг';
			$in_city = 'Выборге';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Выборга';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Выборгу";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Выборгском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Выборг, пр-т. Ленина, д 32';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ВСЕВОЛОЖСК, УЛИЦА РУБЕЖНАЯ, Д.28';
			$portfolio_address2 = 'Г. ВСЕВОЛОЖСК, УЛИЦА АКУЛОВА, Д.10';
			$portfolio_address3 = 'ВЫБОРГСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ВСЕВОЛОЖСК, ПРОСПЕКТ МОСКОВСКИЙ, Д.2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			}
																																																															
			elseif ($host_name == 'gatchina.fabrikauyuta.ru') {
			
			$city = 'Гатчина';
			$in_city = 'Гатчине';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Гатчины';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Гатчине";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Гатчинском районе'; //в какой области?
			$phone1 = '+7(812)602-59-47';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78126025947'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(812)602-59-47';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Гатчина, пр-т. 25 Октября, д 13';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	

			$portfolio_address1 = 'Г. ГАТЧИНА, УЛИЦА АКАДЕМИКА КОНСТАНТИНОВА, Д.9';
			$portfolio_address2 = 'Г. ГАТЧИНА, УЛИЦА ЧЕХОВА, Д.18';
			$portfolio_address3 = 'ГАТЧИНСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. ГАТЧИНА, УЛИЦА ЛЕЙТЕНАНТА ШМИДТА, Д.3';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'zelenograd.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Зеленоград'; //город
			$in_city = 'Зеленограде'; //город в предложном падеже
			$no_city = 'Зеленограда'; //городв в родительном падеже
			$delivery_on = "Зеленограда";
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Зеленоград, проспект Генерала Алексеева, 27Ас2';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/zelenograd/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ЗЕЛЕНОГРАД,  ПР-Т. ПАНФИЛОВСКИЙ, Д.1204'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ЗЕЛЕНОГРАД, УЛИЦА КАРЛА МАРКСА, Д.20';
			$portfolio_address3 = 'ЗЕЛЕНОГРАД';
			$portfolio_address4 = 'Г. ЗЕЛЕНОГРАД, ПР-Т. ГЕНЕРАЛА АЛЕКСЕЕВА, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'novosibirsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Новосибирск'; //город
			$in_city = 'Новосибирске'; //город в предложном падеже
			$no_city = 'Новосибирска'; //городв в родительном падеже
			$delivery_on = "Новосибирска";
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(383)242-73-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73832427322'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(383)242-73-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Новосибирск, улица Петухова, 79к7';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. НОВОСИБИРСК,  КАРЛА МАРКСА, Д.57'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. НОВОСИБИРСК, УЛИЦА КОСМОНАВТОВ, Д.33';
			$portfolio_address3 = 'Новосибирск';
			$portfolio_address4 = 'Г. НОВОСИБИРСК, ПР-Т. КРАСНЫЙ, Д.31';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'kzn.fabrikauyuta.ru') {

		$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Казань'; //город
			$in_city = 'Казани';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Казани';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Казани";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Республики Татарстан'; //в какой области?
			$phone1 = '+7(843)207-16-82';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78432071682'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru	
			
			$phone_foter = '+7(843)207-16-82';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Казань, улица Мартына Межлаука, 2/42';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. КАЗАНЬ, УЛИЦА ХАДИ ТАКТАША, Д.117'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. КАЗАНЬ, УЛИЦА СПАРТАКОВСКАЯ, Д.88Б';
			$portfolio_address3 = 'РЕСПУБЛИКА ТАТАРСТАН';
			$portfolio_address4 = 'Г. КАЗАНЬ, УЛИЦА АБСАЛЯМОВА, Д.26А';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'nnov.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Нижний Новгород'; //город
			$in_city = 'Нижнем Новгороде';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Нижнего Новгорода';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Н. Новгороду";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Нижегородской области'; //в какой области?
			$phone1 = '+7(831)235-09-53';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78312350953'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'oknazvd@yandex.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(831)235-09-53';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Нижний Новгород, улица Ошарская, 15';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. НИЖНИЙ НОВГОРОД, УЛИЦА БОРИСА ПАНИНА, Д.5'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. НИЖНИЙ НОВГОРОД, ПРОСПЕКТ ГАГАРИНА, Д.17В';
			$portfolio_address3 = 'НИЖЕГОРОДСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. НИЖНИЙ НОВГОРОД, УЛИЦА ТИХОРЕЦКАЯ, Д.4';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'chelyabinsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Челябинск'; //город
			$in_city = 'Челябинске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Челябинска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Челябинску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Челябинской области'; //в какой области?
			$phone1 = '+7(3512)25-62-98';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73512256298'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(3512)25-62-98';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Челябинск, улица Пушкина, 70';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ЧЕЛЯБИНСК, УЛИЦА ДЗЕРЖИНСКОГО, Д.99Б'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ЧЕЛЯБИНСК, УЛИЦА ДМИТРИЯ НЕАПОЛИТАНОВА, Д.18';
			$portfolio_address3 = 'ЧЕЛЯБИНСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЧЕЛЯБИНСК, УЛИЦА ХУДОЖНИКА РУСАКОВА, Д.7Б';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'samara.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Самара'; //город
			$in_city = 'Самаре';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Самары';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Самаре";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Самарской области'; //в какой области?
			$phone1 = '+7(846)219-27-35';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78462192735'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru		
			
			$phone_foter = '+7(846)219-27-35';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Самара, улица Льва Толстого, 57';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. САМАРА, УЛИЦА УРИЦКОГО, Д.28'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. САМАРА, УЛИЦА ЕРОШЕВСКОГО, Д.70';
			$portfolio_address3 = 'САМАРСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. САМАРА, УЛИЦА ГАЛАКТИОНОВСКАЯ, Д.106А';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'omsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Омск'; //город
			$in_city = 'Омске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Омска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Омску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Омской области'; //в какой области?
			$phone1 = '+7(3812)99-16-04';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73812991604'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru	
			
			$phone_foter = '+7(3812)99-16-04';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Омск, улица Герцена, 38';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ОМСК, УЛИЦА КРАСНЫЙ ПУТЬ, Д.103К4'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ОМСК, УЛИЦА ЗАОЗЁРНАЯ, Д.36';
			$portfolio_address3 = 'ОМСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ОМСК, УЛИЦА ЖУКОВСКОГО, Д.33/2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'rostov-na-donu.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Ростов-на-Дону'; //город
			$in_city = 'Ростове-на-Дону';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Ростова-на-Дону';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Ростову-на-Дону";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Ростовской области'; //в какой области?
			$phone1 = '+7(8633)33-52-37';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+78633335237'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(8633)33-52-37';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Ростов-на-Дону, Газетный переулок, 72/107';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. РОСТОВ-НА-ДОНУ, УЛИЦА ПРОФСОЮЗНАЯ, Д.29/22'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. РОСТОВ-НА-ДОНУ, УЛИЦА 339-Й СТРЕЛКОВОЙ ДИВИЗИИ, Д.17/3';
			$portfolio_address3 = 'РОСТОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. РОСТОВ-НА-ДОНУ, ПРОСПЕКТ КОРОЛЁВА, Д.15/2';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'ekb.fabrikauyuta.ru') {

		$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Екатеринбург'; //город
			$in_city = 'Екатеринбурге';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Екатеринбургу';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Екатеринбургу";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Свердловской области'; //в какой области?
			$phone1 = '+7(3432)26-90-63';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73432269063'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '+7(3432)26-90-63';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Екатеринбург, улица Радищева, 25';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ЕКАТЕРИНБУРГ, УЛИЦА БЕЛОРЕЧЕНСКАЯ, Д.17К5'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ЕКАТЕРИНБУРГ, УЛИЦА БИСЕРТСКАЯ, Д.16К2';
			$portfolio_address3 = 'СВЕРДЛОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЕКАТЕРИНБУРГ, УЛИЦА НОВАТОРОВ, Д.8В';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'ufa.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Уфа'; //город
			$in_city = 'Уфе';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Уфы';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Уфе";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Республике Башкортостан'; //в какой области?
			$phone1 = '+7(3472)58-85-29';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73472588529'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru	
			
			$phone_foter = '+7(3472)58-85-29';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Уфа, улица Цюрупы, 42';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. УФА, УЛИЦА СОФЬИ ПЕРОВСКОЙ, Д.54'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. УФА, УЛИЦА ЗАКИ ВАЛИДИ, Д.3';
			$portfolio_address3 = 'РЕСПУБЛИКА БАШКОРТОСТАН';
			$portfolio_address4 = 'Г. УФА, УЛИЦА ПЕРВОМАЙСКАЯ, Д.49';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'krasnoyarsk.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Красноярск'; //город
			$in_city = 'Красноярске';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Красноярска';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Красноярску";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Красноярском крае'; //в какой области?
			$phone1 = '+7(391)989-76-34';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+73919897634'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru		
			
			$phone_foter = '+7(391)989-76-34';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Красноярск, улица Робеспьера, 19';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. КРАСНОЯРСК, УЛИЦА ПАРАШЮТНАЯ, Д.72'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. КРАСНОЯРСК, УЛИЦА 9 МАЯ, Д.27';
			$portfolio_address3 = 'КРАСНОЯРСКИЙ КРАЙ';
			$portfolio_address4 = 'Г. КРАСНОЯРСК, УЛИЦА АКАДЕМГОРОДОК, Д.1';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'voronezh.fabrikauyuta.ru') {

			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Воронеж'; //город
			$in_city = 'Воронеже';//Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Воронежа';//Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Воронежу";//Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Воронежской области'; //в какой области?
			$phone1 = '+7(4732)12-30-14';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74732123014'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru	
			
			$phone_foter = '+7(4732)12-30-14';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. Воронеж, улица Свободы, 22';
			$map_office = '';
	$need_href1 = "<a href='#' target='_blank'>";  
	$need_href2 = "<a href=' https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */	
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ВОРОНЕЖ, УЛИЦА ШЕНДРИКОВА, Д.10'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ВОРОНЕЖ, УЛИЦА БОГДАНА ХМЕЛЬНИЦКОГО, Д.50А';
			$portfolio_address3 = 'ВОРОНЕЖСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ВОРОНЕЖ, УЛИЦА ВЛАДИМИРА НЕВСКОГО, Д.38Б';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		}

		/******************* 2021 *******************/

		 elseif ($host_name == 'troitck.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Троицк';
			$in_city = 'Троицке'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Троицка'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Троицку"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Троицком округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Троицк, Академическая площадь, 4'; 
			$portfolio_address1 = 'г. Троицк, ул. Радужная, 6';
			$portfolio_address2 = 'г. Троицк, ул. Звёздная, 7';
			$portfolio_address3 = 'г. Троицк, п. Первомайское, ул. Парковая, 9';
			$portfolio_address4 = 'ТРОИЦКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/troitsk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ТРОИЦК, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ТРОИЦК, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'ТРОИЦКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ТРОИЦК, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'zaraisk.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Зарайск';
			$in_city = 'Зарайске'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Зарайска'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Зарайску"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Зарайском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Зарайск, ул. Ленинская, 31'; 
			$portfolio_address1 = 'г. Зарайск, ул. Лесная, 18';
			$portfolio_address2 = 'г. Зарайск, ул. Молодежная, 1';
			$portfolio_address3 = 'г. Зарайск, д. Авдеево, 28';
			$portfolio_address4 = 'ЗАРАЙСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/zaraisk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЗАРАЙСК, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЗАРАЙСК, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'ЗАРАЙСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ЗАРАЙСК, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'climovsk.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Климовск';
			$in_city = 'Климовске'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Климовска'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Климовску"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Климовском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Климовск, ул. Западная, 3А'; 
			$portfolio_address1 = 'г. Климовск, ул. Дмитрия Холодова, 13А';
			$portfolio_address2 = 'г. Климовск, посёлок Южный, 22';
			$portfolio_address3 = 'г. Климовск, ул. Заводская улица, 24';
			$portfolio_address4 = 'КЛИМОВСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/klimovsk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. КЛИМОВСК, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. КЛИМОВСК, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'КЛИМОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КЛИМОВСК, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'volokolamsk.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Волоколамск';
			$in_city = 'Волоколамске'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Волоколамска'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Волоколамску"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Волоколамском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Волоколамск, ул. Панфилова, 13'; 
			$portfolio_address1 = 'г. Волоколамск, ул. Парковая, д. 7';
			$portfolio_address2 = 'г. Волоколамск, ул. Ново-Солдатская улица, 14';
			$portfolio_address3 = 'г. Волоколамск, с. Ильинское, ул. Центральная, д. 37';
			$portfolio_address4 = 'ВОЛОКОЛАМСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ВОЛОКОЛАМСК, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ВОЛОКОЛАМСК, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'ВОЛОКОЛАМСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ВОЛОКОЛАМСК, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'golitcino.fabrikauyuta.ru') { 
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Голицино';
			$in_city = 'Голицино'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Голицино'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Голицино"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Одинцовском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Голицино, Виндавский просп., 16А'; 
			$portfolio_address1 = 'г. Голицино, 1-й Рабочий переулок, 8';
			$portfolio_address2 = 'г. Голицино, ул. Советская, 52/6';
			$portfolio_address3 = 'г. Голицино, Крестьянский проспект, 11А';
			$portfolio_address4 = 'ОДИНЦОВСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/golicyno/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ГОЛИЦИНО, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ГОЛИЦИНО, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'ОДИНЦОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. ГОЛИЦИНО, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'zvenigorod.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Звенигород';
			$in_city = 'Звенигород'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Звенигород'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Звенигород"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Звенигород,  ул. Московская, 15'; 
			$portfolio_address1 = 'г. Звенигород,  ул. Пролетарская, 14';
			$portfolio_address2 = 'г. Звенигород,  ул. Соловьёвская, 30';
			$portfolio_address3 = 'г. Звенигород,  ул. Чехова, 38';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЗВЕНИГОРОД, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЗВЕНИГОРОД, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЗВЕНИГОРОД, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'kurovskoe.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Куровское';
			$in_city = 'Куровском'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Куровского'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Куровскому"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Куровском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Куровское, ул. Вокзальная, 8'; 
			$portfolio_address1 = 'г. Куровское, ул. Советская, 118';
			$portfolio_address2 = 'г. Куровское, ул. Первомайская, 104';
			$portfolio_address3 = 'г. Куровское, ул. Комсомольская, 21';
			$portfolio_address4 = 'КУРОВСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. КУРОВСКОЕ, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. КУРОВСКОЕ, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'КУРОВСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. КУРОВСКОЕ, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'pushchino.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Пущино';
			$in_city = 'Пущино'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Пущино'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Пущино"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Пущино, микрорайон В, 10'; 
			$portfolio_address1 = 'г. Пущино, микрорайон В, 29';
			$portfolio_address2 = 'г. Пущино, микрорайон В, 35';
			$portfolio_address3 = 'г. Пущино, деревня Большое Грызлово, Тупиковый проезд, 2А';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ПУЩИНО, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ПУЩИНО, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ПУЩИНО, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'staraia-kupavna.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Старая купавна';
			$in_city = 'Старой купавне'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Старой купавны'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Старой купавне"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Богородском округе'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Старая купавна, ул. Кирова, 19'; 
			$portfolio_address1 = 'г. Старая купавна, ул. Фрунзе, 8';
			$portfolio_address2 = 'г. Старая купавна, ул. Комиссаровская, 1';
			$portfolio_address3 = 'г. Старая купавна,  ​пос. Рыбхоз, Бисеровское шоссе, 5Б';
			$portfolio_address4 = 'БОГОРОДСКИЙ ОКРУГ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. СТАРАЯ КУПАВНА, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. СТАРАЯ КУПАВНА, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'БОГОРОДСКИЙ ОКРУГ';
			$portfolio_address4 = 'Г. СТАРАЯ КУПАВНА, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'hotkovo.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Хотьково';
			$in_city = 'Хотьково'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Хотьково'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Хотьково"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Хотьково, ул. Михеенко, 14'; 
			$portfolio_address1 = 'г. Хотьково,  ул. Черняховского, 9';
			$portfolio_address2 = 'г. Хотьково,  ул. Калинина, 13';
			$portfolio_address3 = 'г. Хотьково,  2-я улица Митино, 37';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ХОТЬКОВО, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ХОТЬКОВО, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ХОТЬКОВО, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'chernogolovka.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Черноголовка';
			$in_city = 'Черноголовке'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Черноголовки'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Черноголовке"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Черноголовка, Школьный бул., 19А'; 
			$portfolio_address1 = 'г. Черноголовка, ул. Центральная, 18';
			$portfolio_address2 = 'г. Черноголовка, ул. Солнечная, 4Б';
			$portfolio_address3 = 'г. Черноголовка, Берёзовая улица, 11';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЧЕРНОГОЛОВКА, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЧЕРНОГОЛОВКА, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЧЕРНОГОЛОВКА, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'elektrogorsk.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Электрогорск';
			$in_city = 'Электрогорске'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Электрогорска'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Электрогорску"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Электрогорск, ул. Кржижановского, 14'; 
			$portfolio_address1 = 'г. Электрогорск, ул. Советская, 44';
			$portfolio_address2 = 'г. Электрогорск, ул. Горького, 28';
			$portfolio_address3 = 'г. Электрогорск, 1-я Юго-Западная улица, 24';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЭЛЕКТРОГОРСК, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЭЛЕКТРОГОРСК, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЭЛЕКТРОГОРСК, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'elektrougli.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Электроугли';
			$in_city = 'Электроуглях'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Электроуглей'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Электроуглям"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Электроугли, ул. Школьная, 35'; 
			$portfolio_address1 = 'г. Электроугли, ул. Комсомольская, 36';
			$portfolio_address2 = 'г. Электроугли, ул. Троицкая, 27';
			$portfolio_address3 = 'г. Электроугли, ул. Маяковского, 10/5';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/elektrougli/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЭЛЕКТРОУГЛИ, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЭЛЕКТРОУГЛИ, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЭЛЕКТРОУГЛИ, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'yakhroma.fabrikauyuta.ru') {
			
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';
			
			$city = 'Яхрома';
			$in_city = 'Яхроме'; //Пластиковые окна в region_contacts('in_city'); и region_contacts('city_region'); напрямую с завода.
			$no_city = 'Яхромы'; //Доставим ваши окна совершенно бесплатно в пределах 100 км от region_contacts('no_city');
			$delivery_on = "Яхроме"; //Бесплатная доставка по region_contacts('delivery_on')
			$city_region = 'Московской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = '';
			$office_address = 'г. Яхрома, площадь Генерала Кузнецова, 3'; 
			$portfolio_address1 = 'г. Яхрома, ул. Первомайская, 4';
			$portfolio_address2 = 'г. Яхрома, ул. Ленина, 3';
			$portfolio_address3 = 'г. Яхрома, Суровцовский проезд, 5';
			$portfolio_address4 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$map_office = '';
$need_href1 = "<a href='' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */

			/*$portfolio_address1 = 'Г. ЯХРОМА, ЛЁТНАЯ УЛИЦА, Д.30К1';
			$portfolio_address2 = 'Г. ЯХРОМА, УЛИЦА БОРИСОВКА, Д.16А';
			$portfolio_address3 = 'МОСКОВСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ЯХРОМА, УЛИЦА ЮБИЛЕЙНАЯ, Д.38К3';*/
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
$yam_code = '57338260';
			
			} elseif ($host_name == 'vladimir.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Владимир'; //город
			$in_city = 'Владимире'; //город в предложном падеже
			$no_city = 'Владимира'; //городв в родительном падеже
			$delivery_on = "Владимиру";
			$city_region = 'Владимирской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. ВЛАДИМИР, ул КНЯГИНИНСКАЯ 7';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ВЛАДИМИР,  ПР-Т. ОКТЯБРЬСКИЙ, Д.45'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ВЛАДИМИР, УЛИЦА ЮБИЛЕЙНАЯ, Д.3';
			$portfolio_address3 = 'ВЛАДИМИРСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ВЛАДИМИР, УЛИЦА НИЖНЯЯ ДУБРОВА, Д.7';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'kovrov.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Ковров'; //город
			$in_city = 'Коврове'; //город в предложном падеже
			$no_city = 'Коврова'; //городв в родительном падеже
			$delivery_on = "Коврову";
			$city_region = 'Ковровского района'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. КОВРОВ, ул ПУГАЧЁВА 10';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. КОВРОВ, УЛИЦА ПАРКОВАЯ, Д.2'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. КОВРОВ, УЛИЦА БЕЛИНСКОГО, Д.1/3';
			$portfolio_address3 = 'КОВРОВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. КОВРОВ, УЛИЦА ТУМАНОВА, Д.8А';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'murom.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Муром'; //город
			$in_city = 'Муроме'; //город в предложном падеже
			$no_city = 'Мурома'; //городв в родительном падеже
			$delivery_on = "Мурому";
			$city_region = 'Муромского района'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. МУРОМ, ул ОКТЯБРЬСКАЯ 54';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. МУРОМ, УЛИЦА ЗАВОДСКАЯ, Д.21'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. МУРОМ, УЛИЦА КЛЕНОВАЯ, Д.12А';
			$portfolio_address3 = 'МУРОМСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. МУРОМ, УЛИЦА ВЛАДИМИРСКАЯ, Д.6';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'aleksandrov.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Александров'; //город
			$in_city = 'Александрове'; //город в предложном падеже
			$no_city = 'Александрова'; //городв в родительном падеже
			$delivery_on = "Александрову";
			$city_region = 'Александровского района'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. АЛЕКСАНДРОВ, ул РЕВОЛЮЦИИ 40';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. АЛЕКСАНДРОВ, УЛИЦА КОССОВИЧ, Д.9'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. АЛЕКСАНДРОВ, УЛИЦА МАЯКОВСКОГО, Д.11';
			$portfolio_address3 = 'АЛЕКСАНДРОВСКИЙ РАЙОН';
			$portfolio_address4 = 'Г. АЛЕКСАНДРОВ, УЛИЦА СОВХОЗ ПРАВДА, Д.28';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		} elseif ($host_name == 'gus-hrustalnyj.fabrikauyuta.ru') {
		
			$logo_url = '/img/logos/_logo.png'; 
			$logo_name = '«Фабрика уюта»';
			$company = '«Фабрика уюта»';

			$city = 'Гусь-Хрустальный'; //город
			$in_city = 'Гусь-Хрустальном'; //город в предложном падеже
			$no_city = 'Гусь-Хрустального'; //городв в родительном падеже
			$delivery_on = "Гусь-Хрустальному";
			$city_region = 'Владимирской области'; //в какой области?
			$phone1 = '+7(499)938-79-22';//телефон  8 (499) 938-64-98 //телефон 8 (4912) 57-59-40
			$phone1_prefix = '+74999387922'; //телефон в международном формате с полным префиксом (используется для набора номера с моб. телефона) без скобок и тире
			$phone2 = '8(800)350-89-84';//8 (800) 350-83-28 Вывод отключен
			$phone2_prefix = '88003023958';
			$phone3 = ''; //Номер указывается на странице контактов
			$phone3_prefix = ''; //Номер указывается на странице контактов
			$office_mail = 'zakaz@fabrikauyuta.ru'; //zakaz@fabrikauyuta.ru
			
			
			$phone_foter = '8(499)938-79-22';
			$wa_number = '+7(977)573-65-93';//Номер указывается на странице контакты,в человеческо понятном виде
			$wa_number_prefix = '79775736593';//Номер для ссылки на чат, подставляется в ссылку.
			
			$office_name = 'Центральный офис';
			$office_address = 'г. ГУСЬ-ХРУСТАЛЬНЫЙ, ул ОРЛОВСКАЯ 11';
			$map_office = '';
$need_href1 = "<a href='https://oknaorg.ru/msk/company/list' target='_blank'>";   $need_href1_off = 0;
	$need_href2 = "<a href='https://ru.otzyv.com/proizvodstvo-okon-fabrika-uyuta' target='_blank'>";  
	$need_href3 = "<a href='https://www.otzyvru.com/proizvodstvo-okon-fabrika-uyuta ' target='_blank'>";  
	$need_href_end = "</a>"; /* </a> */
			// Адреса указанные в блоке Окна установленные в 2019 году. Необходимо вписать полный адрес как пример Г. РЯЗАНЬ, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address1 = 'Г. ГУСЬ-ХРУСТАЛЬНЫЙ, УЛИЦА РЯЗАНСКАЯ, Д.19'; //Г. МОСКВА, УЛИЦА НОВОСЕЛОВ, Д.32
			$portfolio_address2 = 'Г. ГУСЬ-ХРУСТАЛЬНЫЙ, ПР-Т. ТЕПЛИЦКИЙ, Д.28';
			$portfolio_address3 = 'ВЛАДИМИРСКАЯ ОБЛАСТЬ';
			$portfolio_address4 = 'Г. ГУСЬ-ХРУСТАЛЬНЫЙ, УЛИЦА ТРАНСПОРТНАЯ, Д.18';
			$meta_tag_yandex = '<meta name="yandex-verification" content="a3240e88ff7fc3a3" />'; //подтверждение прав для яндекс вебмастера
			$zadarma_code = '<script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"37490eab64427747a1a6c002a84b308a3302","metrics":{"metrika":"57338260"},"cssClass":"comagic2_phone_off","domain":"fabrikauyuta.ru"});});})(window, "zTrackerCallbacks");</script><script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js_off"></script>'; //подтверждение прав для яндекс вебмастера
			$yam_code = '57338260';

		}


	switch ($data) {

		case 'logo_name':
			echo $logo_name;
			break;
		case 'logo_url':
			echo $logo_url;
			break;	
		case 'company':
			echo $company;
			break;
		case 'best_prices':
			echo $best_prices;
			break;
		case 'city':
			echo $city;
			break;
		case 'in_city':
			echo $in_city;
			break;
		case 'no_city':
			echo $no_city;
			break;
		case 'delivery_on':
			echo $delivery_on;
			break;
		case 'city_region':
			echo $city_region;
			break;
		case 'phone1':
			echo $phone1;
			break;
		case 'phone1_prefix':
			echo $phone1_prefix;
			break;
		case 'phone2':
			echo $phone2;
			break;
		case 'phone2_prefix':
			echo $phone2_prefix;
			break;
		case 'phone3':
			echo $phone3;
			break;
		case 'phone3_prefix':
			echo $phone3_prefix;
			break;
		case 'office_mail':
			echo $office_mail;
			break;
		case 'office_name':
			echo $office_name;
			break;
		case 'office_address':
			echo $office_address;
			break;

			case 'work_address1':
			echo $work_address1;
			break;

			case 'work_address2':
			echo $work_address2;
			break;

			case 'work_address3':
			echo $work_address3;
			break;

		case 'map_office':
			echo $map_office;
			break;

		case 'need_href1':
			echo $need_href1;
			break;
		case 'need_href1_off':
			return $need_href1_off;
			break;
				
			case 'need_href2':
			echo $need_href2;
			break;
			case 'need_href3':
			echo $need_href3;
			break;
			case 'need_href_end':
			echo $need_href_end;
			break;

		case 'portfolio_address1':
			echo $portfolio_address1;
			break;
		case 'portfolio_address2':
			echo $portfolio_address2;
			break;
		case 'portfolio_address3':
			echo $portfolio_address3;
			break;
		case 'portfolio_address4':
			echo $portfolio_address4;
			break;
		case 'meta_tag_yandex':
			echo $meta_tag_yandex;
			break;
        case 'zadarma_code':
			echo $zadarma_code;
			break;
        case 'phone_foter':
			echo $phone_foter;
			break;
        case 'yam_code':
			echo $yam_code;
			break;
		case 'mailto':
			echo $mailto;
			break;
		case 'host_name':
			echo $host_name;
			break;
		case 'wa_number':
			echo $wa_number;
			break;
		case 'wa_number_prefix':
			echo $wa_number_prefix;
			break;
	}

}

function footer_text () {
	echo '<i>fabrikauyuta.ru © Разработано <a href="#" target="_blank">Dmitriyy_Olegovich</a></i> ';
}

