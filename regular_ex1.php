<?
$zip_pattern = "[0-9]{5}";
$str = "Mission Viejo, CA 92692";
ereg($zip_pattern,$str,$regs);
echo $regs[0];
?>
