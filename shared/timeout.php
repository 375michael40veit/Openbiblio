<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");
  
  $tab = $_SESSION["loginPage"];
  $nav = "";
  require_once ("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE, "shared");

  include("header.php");
  
  echo $loc->getText('PwdTimeout', array("time" => OBIB_PWD_TIMEOUT));
  
  include("footer.php");
  
  ?>