<?
$zip_pattern = "[0-9]{5}";
$str = "Mission Viejo, CA 19269";
ereg($zip_pattern,$str,$regs);
print_r($regs);
?>
