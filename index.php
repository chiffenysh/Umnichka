<?php Header("Content-type: text/html ; charset=utf8");?>

<html>

<head>
<title>Балда</title>

</head>

<body>
<?php
	
	$strWord = "шоссе"; // наше слово,которое мы ввели(для проверки словаря)
	$Dict = file('Dictionary.txt');

 
	$nFlag = 'TheEnd';
	$strWordtmp = '';
	
	$nFlagPlayer = rand(1,2); // кто первым будет ходить
	//echo "$nFlagPlayer".'<br>';
	
	for (  $i=1 ; $i<=20 ; $i++)
	{
		if( $nFlagPlayer%2 == 0) 
			 echo 'Ходит 2ой игрок(функция)'.'<br>';
		else echo 'Ходит 1ой игрок(функция)'.'<br>';
		$nFlagPlayer++;
	}
	
	do 
	{
		switch ( $nFlag )
		{
			case 'А':                  // дописываем в $strWordtmp по символу
				"$strWordtmp".'а';
				break;
			case 'Б':
				"$strWordtmp".'б';
				break;
			case 'В':
				"$strWordtmp".'в';
				break;
			case 'Г':
				"$strWordtmp".'г';
				break;
			case 'Д':
				"$strWordtmp".'д';
				break;
			case 'Е':
				"$strWordtmp".'е';
				break;
			case 'Ё':
				"$strWordtmp".'ё';
				break;
			case 'Ж':
				"$strWordtmp".'ж';
				break;
			case 'З':
				"$strWordtmp".'з';
				break;
			case 'И':
				"$strWordtmp".'и';
				break;
			case 'Й':
				"$strWordtmp".'й';
				break;
			case 'К':
				"$strWordtmp".'к';
				break;
			case 'Л':
				"$strWordtmp".'л';
				break;
			case 'М':
				"$strWordtmp".'м';
				break;
			case 'Н':
				"$strWordtmp".'н';
				break;
			case 'О':
				"$strWordtmp".'о';
				break;
			case 'П':
				"$strWordtmp".'п';
				break;
			case 'Р':
				"$strWordtmp".'р';
				break;
			case 'С':
				"$strWordtmp".'с';
				break;
			case 'Т':
				"$strWordtmp".'т';
				break;
			case 'У':
				"$strWordtmp".'у';
				break;
			case 'Ф':
				"$strWordtmp".'ф';
				break;
			case 'Х':
				"$strWordtmp".'х';
				break;
			case 'Ц':
				"$strWordtmp".'ц';
				break;
			case 'Ч':
				"$strWordtmp".'ч';
				break;
			case 'Ш':
				"$strWordtmp".'ш';
				break;
			case 'Щ':
				"$strWordtmp".'щ';
				break;
			case 'Ь':
				"$strWordtmp".'ь';
				break;
			case 'Ы':
				"$strWordtmp".'ы';
				break;
			case 'Ъ':
				"$strWordtmp".'ъ';
				break;		
			case 'Э':
				"$strWordtmp".'э';
				break;
			case 'Ю':
				"$strWordtmp".'ю';
				break;
			case 'Я':
				"$strWordtmp".'я';
				break;
						
		}
		// нажимаем на экране буквы пока не нажмем определенную кнопочку , которая будет означать конец 
		// ввода слова и тогда nFlag станет 'TheEnd'
	} while ( $nFlag != 'TheEnd' ) ;
	
	$nCountLetter = mb_strlen ( $strWordtmp , "utf-8" ); //подсчет кол-ва букв в слове( для очков)
	
	// Проверка есть ли слово в словаре:
	if(in_array("$strWord"."\n", $Dict) || in_array("$strWord"."\r\n", $Dict))
		 echo 'Такое слово есть в словаре'.'<br>';
	else echo 'Нет такого слова в словаре'.'<br>';
	
	
	
	
	
	
	/*foreach ( $Dict as $key =>  $Dict) 
	{
		$Dict = trim ($Dict);
		echo "Строка #<b>"."$key"."</b> : " . "$Dict";
	}
	
	*/
	//print_r($Dict);

		
	
	 
?>
</body>
</html>