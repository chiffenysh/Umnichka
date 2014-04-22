<?php
	
	//Строка -> массив
	function str_split_unicode($str, $l = 0) 
	{
		if ($l > 0) 
		{
			$ret = array();
			$len = mb_strlen($str, "UTF-8");
			for ($i = 0; $i < $len; $i += $l) 
			{
				$ret[] = mb_substr($str, $i, $l, "UTF-8");
			}
			return $ret;
		}
		return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
	}
	//Существование слова в словаре
	function inDictionary ( $strWord )
	{
		$Dict  = file('Dictionary.txt' );
		if(in_array("$strWord"."\n", $Dict) || in_array("$strWord"."\r\n", $Dict))
			echo '<br>'.'Такое слово есть в словаре'.'<br>';
		else echo '<br>'.'Нет такого слова в словаре'.'<br>';
	}
	// Правильно ли поставлено слово ( рядом с буквой ли?)
	function CorrectPosition( $nFlagPos )
	{
		if( $nFlagPos=='*' )
		{
		
			if( ($pole[i+1][j]!= '*') || ($pole[i-1][j]!= '*') || ($pole[i][j-1]!= '*') || ($pole[i][j+1]!= '*') ) ;
			// не доделано
		}
	}
	// функция установки буквы в поле
	function InstallLetter ( $name )
	{
		switch ( $name )
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
	
	}
	
?>	