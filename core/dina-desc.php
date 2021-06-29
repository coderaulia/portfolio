<?php
if (@$_GET['mod'] == "home") {
  echo "Elegant, SEO Friendly and Powerful Web Design for Business & Influcencer, feel free to reach me! &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} elseif (@$_GET['mod'] == "business") {
  echo "I do Professional Web Design for Business, SEO Friendly, Free Hosting & Domain! &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "contact") {
  echo "Contact me for more information &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "portfolio") {
  echo "My latest works &ndash; Coderaulia";
} elseif (@$_GET['mod'] == "influencer") {
  echo "I do Professional Web Design for Influencer &ndash; Coderaulia";
} else {
  echo "Coderaulia &ndash; Elegant, SEO Friendly and Powerful Web Design for Business & Influcencer";
}
