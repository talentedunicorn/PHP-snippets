<?php 
	function treeOut($tree) {
		$listItems = "";

		foreach($tree as $key => $val) {
			$listItems .= "<li". ( (is_array($val))? " class='folder'><i class='icon-folder-close-alt'></i> ". $key . treeOut($val) : " class='file'><i class='icon-file-alt'></i> ". $val ) ."</li>";
		}

		return "<ul class='dir'>". $listItems . "</ul>";
	}
?>