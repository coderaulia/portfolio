<?php
if (@$_GET['mod'] == "home") {
  echo "Web Design for Small Business & Social Media Influcencer &ndash; @Coderaulia";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} else {
  echo "Web Design for Small Business & Social Media Influcencer &ndash; @Coderaulia";
}
