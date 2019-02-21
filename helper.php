<?php
session_start();
function getSession($form,$index)
{
	if(isset($_SESSION[$form][$index])){
		return $_SESSION[$form][$index];
	}
	return ;
}