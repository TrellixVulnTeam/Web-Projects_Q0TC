﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
/**
 * ApiMedic.com Sample Avatar, a demo implementation of the ApiMedic.com Symptom Checker by priaid Inc, Switzerland
 * 
 * Copyright (C) 2012 priaid inc, Switzerland
 * 
 * This file is part of The Sample Avatar.
 * 
 * This is free implementation: you can redistribute it and/or modify it under the terms of the
 * GNU General Public License Version 3 as published by the Free Software Foundation.
 * 
 * The ApiMedic.com Sample Avatar is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * 
 * See the GNU General Public License for more details. You should have received a copy of the GNU
 * General Public License along with ApiMedic.com. If not, see <http://www.gnu.org/licenses/>.
 * 
 * Authors: priaid inc, Switzerland
 */
 -->
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="symptom_selector/selector.css?v=1">

        <link href="../css/mdb.min.css" rel="stylesheet">


    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">


    <link rel="stylesheet" type="text/css" href="symptom_selector/fontawesome/assets/css/font-awesome.min.css" />
    <script src="libs/jquery-1.12.2.min.js"></script>
    <script src="libs/json2.js"></script><!-- json for ie7 -->
    <script src="libs/jquery.imagemapster.min.js?v=1.1"></script>
    <script src="libs/typeahead.bundle.js"></script>
    
    <script src="symptom_selector/selector.js?v=3.3"></script>

	<?php 

	// session_start(); // this causes some issues with certain servers, try this if it's working with this line or not.
		
	/**
	* For Live API service use the Live API endpoints:
	* Instead of the Sandbox Authservice endpoint "https://sandbox-authservice.priaid.ch/login" you should use the Live Authservice endpoint "https://authservice.priaid.ch/login" 
	* Instead of the Sandbox Healthservice endpoint "https://sandbox-healthservice.priaid.ch" you should use the Live Authservice endpoint "https://healthservice.priaid.ch" 
    */
	
	if ( !isset( $_SESSION['userToken']) || !isset( $_SESSION['tokenExpireTime']) || time() >= $_SESSION['tokenExpireTime'] )
	{
		require 'token_generator.php';
		$tokenGenerator = new TokenGenerator("shahzaib_murad","TYNeCyad2v93Y6JU","https://authservice.priaid.ch/login");
		$token = $tokenGenerator->loadToken();
		$_SESSION['userToken'] = $token->{'Token'};
		$_SESSION['tokenExpireTime'] = time() + $token->{'ValidThrough'};
	}

	$token = $_SESSION['userToken'];
	?>

	<script type="text/javascript">

		var userToken = <?php echo "'".$token."'" ?>;
		
        $(document).ready(function () {
            $("#symptomSelector").symptomSelector(
            {
                mode: "diagnosis",
                webservice: "https://healthservice.priaid.ch",
                language: "en-gb",
                specUrl: "../all_doctors_search_spec.php?symbol=",
                accessToken: userToken
            });
        });
    </script>

	
</head>
<body>

	<div class="container">


    	<div class="row">

    <table class="table-responsive">

        <tr>
            <td class="col-md-4 col-xs-12 text-center"><h4 class="header" id="selectSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">1</span></h4></td>
            <td class="col-md-4 col-xs-12 text-center"><h4 class="header" id="selectedSymptomsTitle"><span class="badge pull-left badge-primary visible-lg margin5R">2</span></h4></td>
            <td class="col-md-4 col-xs-12 text-center"><h4 class="header" id="possibleDiseasesTitle"><span class="badge pull-left badge-primary visible-lg margin5R">3</span></h4></td>
        </tr>
        <tr>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomSelector"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="symptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="selectedSymptomList"></div></td>
            <td valign="top" class="selector_container bordered-box box-white width25"><div id="diagnosisList"></div></td>
        </tr>
    </table>

    </div>
    <div>
      


</body>
</html>
