<?php 

// no direct access
defined('_JEXEC') or die('Restricted access'); 

if(count($this->items) > 0) { 
	
	foreach ($this->items as $row) {
		// URL information
		$line  = '&Itemid='.$this->menus[$row->treeId];
		$line .= '&treeId='.$row->treeId;
		$line .= '&personId='.$row->app_id.'!'.$row->id.'|';
		
		// names
		$line .= $row->familyName.'|';
		$line .= $row->firstName.'/'.$row->familyName.'/|';
		
		// birth + death information
		$line .= $row->birthDate.'|'.$row->birthPlace.'|';
		$line .= $row->deathDate.'|'.$row->deathPlace.'|';		
		
		print($line.chr(10));
		unset($line);	
	}
}

?>

