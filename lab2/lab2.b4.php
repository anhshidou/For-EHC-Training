<?php
$ehc = array("EHC","HackYourLimits","Training");
$train = array("EHC","HackYourLimits","Training");

echo "minLength = " . min(array_map('strlen', $ehc));
echo " maxLength = " . max(array_map("strlen", $train));

?>