<?php
$groupVars = array("natl","ethn","religion","gender","major","fanof","pol","family","team","livewith");
$naVals = array("N/A","N/a","n/A","n/a","NA","Na","nA","na","None","none","NONE"," ","  ","");
$activeGroupVars = array();
foreach ($groupVars as $gV) {
  $notNA = true;
  foreach ($naVals as $nV) {
    if ($gV == $nV) {$notNA = false;};
  };
  if ($notNA) {
    array_push($activeGroupVars, $g);
  };
};

$group = $activeGroupVars[mt_rand(0,count($activeGroupVars)-1)];

echo "thing";
echo json_encode($group);
?>
