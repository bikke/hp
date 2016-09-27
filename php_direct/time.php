<?php
$now=time();
print "<p style=\"color:white;\">";
echo date("F/d (l)");
print "</p>";

print <<< EOD
<SCRIPT LANGUAGE="JavaScript">
<!--
function clock(){
c = new Date();
document.clk.digital.value=c.getHours()+":"+c.getMinutes()+":"+c.getSeconds();
setTimeout('clock()',1000);
}
// -->
</SCRIPT>
<hr>
<FORM NAME="clk">
<INPUT SIZE"5" NAME="digital">
</FORM>
<SCRIPT LANGUAGE="JavaScript">
<!--
clock();
// -->
</SCRIPT>
<hr>
EOD;
?>