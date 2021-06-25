<?php
if (@$_GET['mod'] == "home") {
  echo "https://pro.auliasatriow.com/";
} elseif (@$_GET['mod'] == "login") {
  echo "Masuk | " . $site;
} elseif (@$_GET['mod'] == "business") {
  echo "https://pro.auliasatriow.com/business.html";
} elseif (@$_GET['mod'] == "contact") {
  echo "https://pro.auliasatriow.com/contact.html";
} elseif (@$_GET['mod'] == "portfolio") {
  echo "https://pro.auliasatriow.com/portfolio.html";
} elseif (@$_GET['mod'] == "influencer") {
  echo "https://pro.auliasatriow.com/influencer.html";
} else {
  echo "https://pro.auliasatriow.com/business.html";
}
