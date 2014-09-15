<?php

return array (
  'Common' => 
  array (
    'afterSave' => 
    array (
      0 => '\\Espo\\Hooks\\Common\\Stream',
    ),
    'afterRemove' => 
    array (
      0 => '\\Espo\\Hooks\\Common\\Stream',
    ),
  ),
  'Note' => 
  array (
    'afterSave' => 
    array (
      0 => '\\Espo\\Hooks\\Note\\Notifications',
    ),
  ),
);

?>