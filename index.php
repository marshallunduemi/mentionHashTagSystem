<?php
//extract the values attached to @ and # symbol convert text to clickable links
function convert_clickable_links($message)
{
  $parsedMessage = preg_replace(array('/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/', '/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('<a href="$1" target="_blank">$1</a>', '$1<a href="http://thewallclone.com/$2">@$2</a>',  '$1<a target="_blank" href="http://thewallclone.com/search.php?s=$2&searching=yes">#$2</a>'), $message);
  return $parsedMessage;
}

$message="Hello @kelvin how are you doing? Join me here #TheWallClone it’s happening"; 
// string

echo "<p>".convert_clickable_links($message)."</p>"; 
// call function
?>
