<?php
/*This script written by sameer beig
 @function1 unhack() remove bad inputs
 @function2 imgsize() set image size
 @function3 isimg()     Check valid image extensions
 @vesion 1.0
 */

/**
 * @param get one parameter $a and remove bad inputs from a strings
 * @return string
 */
function unhack($a)
{
	$aa=mysql_real_escape_string(htmlentities(trim(strip_tags(stripslashes(utf8_decode($a))))));
	return $aa;
}

/**
 * @param Get  $size of the image and check image is less then 5 mb
 * @return boolean
 */
function imgsize($size)
{

	if ($size > 5242880) //5MB
	{
		$result=FALSE;
		return $result;
	}
	else
	{
		$result=TRUE;
	 return $result;
	}

}

/**
 * @param Get $img and check for valid image extension like jpg,jpeg,png,bmp,gif
 * @return boolean
 */
function isimg($img)
{
	if (!preg_match("/\.(gif|jpg|jpeg|png|bmp)$/i", $img))
	{
		$return=FALSE;
		return $return;

	}

	else
	{
		$return=TRUE;
		return $return;

	}
}
function is_email($email) {


	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return  FALSE;
	}
	else
	{
		return  $email;
	}
}



?>