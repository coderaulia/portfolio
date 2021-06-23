<?php
if (@$_GET['mod'] == "home") {
  echo "Coderaulia &ndash; Web Design for Business & Social Media Influcencer";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} elseif (@$_GET['mod'] == "business") {
  echo "We do Professional Web Design for Business &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "contact") {
  echo "Contact us for more information &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "portfolio") {
  echo "Our Portfolio &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "influencer") {
  echo "We do Professional Web Design for Influencer &ndash; Coderaulia";
} else {
  echo "Coderaulia &ndash; Web Design for Small Business & Social Media Influcencer";
}
