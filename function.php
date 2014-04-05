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
	
?>	