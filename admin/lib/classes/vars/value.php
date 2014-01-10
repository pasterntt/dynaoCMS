<?php

class varsValue extends vars {
	
	public $counts = 15;
	public $DynType = 'VALUE';
	
	public function getOutValue($sql) {
		
		foreach($this->outVars[1] as $key=>$type) {
			
			$num = $this->outVars[2][$key];
			
			if(!$this->isType($type, $num)) {
				continue;	
			}			
			
			$sqlEntry = strtolower($this->DynType).$num;	
			$sqlEntry = $sql->get($sqlEntry);
			
			// DYN_HTML_VALUE bleibt unberührt
			if($type == 'HTML_'.$this->DynType) {
				//nothing
			} else {				
				$sqlEntry = htmlspecialchars($sqlEntry);
			}
			
			
			$this->content = str_replace(
				$this->outVars[0][$key],
				$sqlEntry,
				$this->content
			);
			
		}
		
		return $this;
		
	}
	
	
}

?>