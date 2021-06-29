<?php
if (@$_GET['mod'] == "home") {
  echo "Coderaulia &ndash; Beautiful and Powerful Web Design for Business & Influcencer";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} elseif (@$_GET['mod'] == "business") {
  echo "I do Professional Web Design for Business &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "contact") {
  echo "Contact me for more information &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "portfolio") {
  echo "My Portfolio &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "influencer") {
  echo "I do Professional Web Design for Influencer &ndash; Coderaulia";
} else {
  echo "Coderaulia &ndash; Beautiful and Powerful Web Design for Business & Influcencer";
}
