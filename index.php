<?php Header("Content-type: text/html ; charset=utf8");?>

<html>

<head>
<title>Балда</title>

</head>

<body>
<?php
include('function.php');
	
	$pole = array ( 1 => array ( $a11='*' , $a12='*' , $a13='*' , $a14='*' , $a15='*' ) ,
					2 => array ( $a21='*' , $a22='*' , $a23='*' , $a24='*' , $a25='*' ) ,
					3 => array ( $a31='*' , $a32='*' , $a33='*' , $a34='*' , $a35='*' ) ,
					4 => array ( $a41='*' , $a42='*' , $a43='*' , $a44='*' , $a45='*' ) ,
					5 => array ( $a51='*' , $a52='*' , $a53='*' , $a54='*' , $a55='*' )); 
	
	
	$strWord = "путь"; // наше слово,которое мы ввели(для проверки словаря)
	
	
	$Dict5 = file('Dictionary5.txt');
	
	$IndexRandWord5 = rand(1,2237);
	$ArrRandWord5 = str_split_unicode(trim($Dict5[$IndexRandWord5])); // возвращает вместо слова из 5 букв , массив из 5 элементов
	
	for( $i=0 ; $i<=4 ; $i++)
	{
		$pole[3][$i]=$ArrRandWord5[$i];
	}
	
	foreach ( $pole as $v1)
	{
		foreach( $v1 as $v2)
		{
			echo ( "$v2      ");
		}
		echo '<br>';
	}
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
	
	$nFlag = 'TheEnd';
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
	
	
	
	 
?>
</body>
</html>