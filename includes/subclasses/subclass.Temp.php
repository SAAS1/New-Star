<?php
//$new_code
    $temp	= array();
        
        foreach($reslist['resstype'][1] as $resP) //проверка всего масива элементов
		{
            $temp	+= array(
                $resP => array(
                    'max'	=> 0,
                    'plus'	=> 0,
                    'minus'	=> 0,
                )
            );
        }
        
        foreach($reslist['resstype'][2] as $resS) //проверка всего масива элементов
		{
            $temp	+= array(
                $resS => array(
                    'plus'	=> 0,
                    'minus'	=> 0,
                )
            );
        }
//$new_code