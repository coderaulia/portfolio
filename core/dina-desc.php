<?php
if (@$_GET['mod'] == "home") {
  echo "Web Design for Business & Social Media Influcencer, feel free to reach me! &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} elseif (@$_GET['mod'] == "business") {
  echo "I do Professional Web Design for Business, Free Hosting & Domain! &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "contact") {
  echo "Contact me for more information &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "portfolio") {
  echo "My latest works &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "influencer") {
  echo "I do Professional Web Design for Influencer &ndash; Coderaulia";
} else {
  echo "Coderaulia &ndash; Web Design for Small Business & Social Media Influcencer";
}
