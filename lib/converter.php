<?php
/*
 * Algemeine Functionen um Typen umzuwandeln
 */



function array2table($in, $border = true){
	if ($border){
		$out = "<table border='1'><tr>";
	}else{
		$out = "<table><tr>";
	}
	
	
	$set = $in;
	list ( $key, $set ) = each ( $set );
	while( list ( $key, $val ) = each ( $set ) ){
		$out.="<th>$key</th>";
	}
	$out.="</tr>";
	
	$set = $in;
	while( list ( $key1, $val1 ) = each ( $set ) ){
		$out.="<tr>";
		while( list ( $key, $val ) = each ( $val1 ) ){
			$out.="<th>$val</th>";
		}
		$out.="</tr>";
	}	
	$out.= "</tabel>";
	return $out;
}
function array2select($in, $name = '', $sel = '', $opt = '', $selected = False){
	$out = "<select name='$name' $sel>";
	
	$set = $in;
	 
	while( list ( $key, $val ) = each ( $set ) ){
		if ($selected == $val){
			$out.="<option selected='selected'$opt>$val</option>\n";
		}else{
			$out.="<option $opt>$val</option>\n";
		}
	}
	$out.="</select>";
	return $out;
}
function array2br($in){
	$set = $in;
	if ($in){ 
		while( list ( $key, $val ) = each ( $set ) ){
			$out.= $val."<br>";
		}
	}
	return $out;
}
function array2str($in, $ab=0, $bis=999){
	$set = $in;
	if ($in){ 
		while( list ( $key, $val ) = each ( $set ) ){
			$i++;
			if (($i > $ab)and($i < $bis)){
				$out.= $val;
			}
		}
	}
	return $out;
}

function array2nl($in, $ab=0, $bis=999){
	$set = $in;
	if ($in){ 
		while( list ( $key, $val ) = each ( $set ) ){
			$i++;
			if (($i > $ab)and($i < $bis)){
				$out.= $val."\r\n";
			}
		}
	}
	return $out;
}



function array2list($in, $border = true){
	$set = $in;
	if ($border){
		$out = "<table border='1'>";
	}else{
		$out = "<table>";
	}
	if ($in){ 
		while( list ( $key, $val ) = each ( $set ) ){
			$out.= "<tr><td>$key</td><td>$val</td></tr> \r\n";
		}
	}
	$out.= "</table>";
	return $out;;
}

function array2edit($in, $border = true){
	$set = $in;
	if ($border){
		$out = "<table border='1'>";
	}else{
		$out = "<table>";
	}
	if ($in){ 
		while( list ( $key, $val ) = each ( $set ) ){
			$out.= "<tr><td>$key</td><td><input name='$key' value='$val' /></td></tr> \r\n";
		}
	}
	$out.= "</tabel>";
	return $out;;
}