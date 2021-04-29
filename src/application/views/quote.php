<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="page-content">
    <div class="container">
        
        
        </style>
<style type="text/css">
  * {
    font-family: arial;
  }
  .address-container-parent {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  select, input[type="text"] {
    width: 260px;
    height: 28px;
    padding: 4px;
    font-size: 13px;
    margin: 2px 0px;
    border-radius: 4px;
    border: 1px solid #a1a1a1;
  }

  label {
    font-size: 14px;
    color: #343434;
  }

  .input-container {
    margin: 10px 0;
  }

  #shipfromto > .input-container {
    margin: 20px 0;
  }

  #shipfromto, .address-container {
    background: #f8f8f8;
    padding: 34px;
    box-shadow: 0px 9px 6px #d5d5d5;
    border: none;
  }

  #shipfromto {
    margin-top: 40px;
  }

  #shipfromto > h2 {
    color: #4f4f4f;
  }

  #getQuickQuote.fx-btn-primary {
    border: none;
    padding: 8px;
    border-radius: 6px;
    background-color: #939393;
    color: #fff;
    cursor: pointer;
    margin-right: 14px;
  }

  #goToPackageInfoPage.fx-btn-primary {
    border: none;
    padding: 8px;
    border-radius: 6px;
    background-color: #fff;
    color: #939393;
    border: 1px solid #939393;
    cursor: pointer;
  }

  .fx-btn-primary:hover {
    color: #fff !important;
    background-color: #5d5d5d !important;
  }

  .fx-form-buttons {
    display: flex;
    flex-direction: row-reverse;
  }
}
</style>
<style type="text/css">
	.zebra tr:nth-child(even) {background-color: #E6E6E6}
	.zebra tr:nth-child(odd) {background-color: #F5F5F5}
</style> <title>International Courier Services</title> <style id="antiClickjack">
body {
    display: none !important;
}
</style> <script type="text/javascript">
  if (self === top) {
    var antiClickjack = document.getElementById("antiClickjack");
    antiClickjack.parentNode.removeChild(antiClickjack);
  } else top.location = self.location;
</script> </head> <body id="fx-respond" style="padding-bottom: 10px" class="fx-transition"> <div id="container"> <script>var vh=0;
var fxg_header=true;
</script> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> ﻿<link rel="stylesheet" href="legacy/main-min.css" type="text/css"> <script>
vh=1;
var fxg_header=true;


/* @param [string]  [styleName] [filename with suffix e.g. "style.css"]
 * @param [boolean] [disabled]  [true disables style]
 */

        


var fx_device_type = "desktop";
var fxg_header = true;


var disableStyle = function(styleName, disabled) {
    var styles = document.styleSheets;
    var href = "";
try {
    for (var i = 0; i < styles.length; i++) {
    	  var re = new RegExp(".*?//.*?/", "");
  	    var cssStr =styles[i].href.replace(re,"/");
    	  var r = /[^\/]*$/;
    	  //alert('cssStr   ' + cssStr);
				var dirPath = cssStr.replace(r, '');
				//alert ('dirPath   ' + dirPath);
        href = styles[i].href.split("/");
        href = href[href.length - 1];
 
        if (href == styleName) {
            styles[i].disabled = disabled;
            var cssPath = dirPath + styleName;            
            loadcssfile(cssPath);
            break;
        }
    }
  }
  catch(err){}
};
function loadcssfile(styleName){
				var fileName = styleName.replace(".css","-legacy.css");
				//alert('fileName1   ' + fileName);
				//fileName = window.location.protocol + window.location.host + fileName;
				fileName = window.location.protocol + "" + fileName;
				//alert('fileName2   ' + fileName);
        var fileref=document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", fileName)
        if (typeof fileref!="undefined"){document.getElementsByTagName("head")[0].appendChild(fileref)}
}
disableStyle('master-responsive-min.css', true);
disableStyle('global-wrapper-min.css', true);
disableStyle('common-min.css', true);
disableStyle('master-min.css', true);
disableStyle('ie6-min.css', true)
disableStyle('ie-min.css', true);

function loadDoc1(file) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("auxhead").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", file, true);
  xhttp.send();
}
	
if (vh == 0) {
  if ( /MSIE 7/i.test(navigator.userAgent) || /MSIE 8/i.test(navigator.userAgent) ) {
    loadDoc1("/templates/components/headers/us/gl_old.html");
  } else {
    loadDoc1("/templates/components/headers/us/gl_new.html");
  }
}
</script> <script type="text/javascript">var fx_device_type = 'mobile';</script> <div id="content">
<div class="fx-col">
    <div class="fx-inner-grid fx-cf"> </div>
</div>
<div class="fx-grid fx-cf">
<form name="standAloneActionForm" id="rate-form" method="post" action="/ratefinder/mobilestandalone" class="fx-form fx-cf">
<input type="hidden" name="currentPage" value="rfsshipfromto"/> <input type="hidden" name="cmdcResponse" value=""> 
<div class="fx-grid fx-cf">
  <div class="fx-col">
    <div class="address-container-parent">
      <div class="address-container from">
        <div class="fx-datapoint fx-cf ">
            <label for="origCountryId">*&nbsp;From</label> 
            <div class="fx-inputwrap">
                <select name="origCountry" id="origCountryId">
                    <option value="">Select</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua/Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia-Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="BQ">Caribbean Netherlands</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CO">Colombia</option>
                    <option value="CG">Congo Brazzaville</option>
                    <option value="CD">Congo Democratic Rep. of</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TL">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FO">Faeroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong SAR, China</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau SAR, China</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="NA">Namibia</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestine Autonomous</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="MF">Saint Martin</option>
                    <option value="MP">Saipan</option>
                    <option value="WS">Samoa</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovak Republic</option>
                    <option value="SI">Slovenia</option>
                    <option value="ZA">South Africa</option>
                    <option value="KR">South Korea</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="KN">St. Kitts/Nevis</option>
                    <option value="LC">St. Lucia</option>
                    <option value="VC">St. Vincent</option>
                    <option value="SR">Suriname</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan, China</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad/Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks &amp; Caicos Islands</option>
                    <option value="VI">U.S. Virgin Islands</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US" selected="selected">United States</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis &amp; Futuna</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <div class="fx-inputwrap">
                <option value="">Select</option>
                </select> 
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Contact name</label> 
            <div class="fx-inputwrap">
                <select name="originContactNm" id="originContactNm">
                    <option value="">Select</option>
                    <option value="John">John</option>
                    <option value="Sophia">Sophia</option>
                    <option value="Jackson">Jackson</option>
                    <option value="Lucas">Lucas</option>
                    <option value="Oliver">Oliver</option>
                    <option value="Caden">Caden</option>
                    <option value="Zoe">Zoe</option>
                    <option value="Chloe">Chloe</option>
                </select>
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Address 1</label> 
            <div class="fx-inputwrap"> <input type="text" name="originAddr1" value=""> </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Address 2</label> 
            <div class="fx-inputwrap"> <input type="text" name="originAddr2" value=""> </div>
        </div>
        <div class="fx-datapoint fx-cf ">
            <label for="origZipId">*&nbsp;ZIP</label> 
            <div class="fx-inputwrap"> <input type="text" name="origZip" maxlength="9" value="" id="origZipId"> </div>
        </div>
      </div>
      <div class="address-container to">
        <div class="fx-datapoint fx-cf ">
            <label for="destCountryId">*&nbsp;To</label> 
            <div class="fx-inputwrap">
                <select name="destCountry" onchange="Countrychange()" id="destCountryId">
                    <option value="">Select</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AG">Antigua/Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia-Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="BN">Brunei</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="BQ">Caribbean Netherlands</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CO">Colombia</option>
                    <option value="CG">Congo Brazzaville</option>
                    <option value="CD">Congo Democratic Rep. of</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TL">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FO">Faeroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong SAR, China</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Laos</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau SAR, China</option>
                    <option value="MK">Macedonia</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NO">Norway</option>
                    <option value="NU">Nuie</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestine Autonomous</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="MF">Saint Martin</option>
                    <option value="MP">Saipan</option>
                    <option value="WS">Samoa</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovak Republic</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="ZA">South Africa</option>
                    <option value="KR">South Korea</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="KN">St. Kitts/Nevis</option>
                    <option value="LC">St. Lucia</option>
                    <option value="VC">St. Vincent</option>
                    <option value="SR">Suriname</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syria</option>
                    <option value="TW">Taiwan, China</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad/Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks &amp; Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="VI">U.S. Virgin Islands</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US" selected="selected">United States</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Vietnam</option>
                    <option value="WF">Wallis &amp; Futuna</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <div class="fx-inputwrap">
                <option value="">Select</option>
                </select> 
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Contact name</label> 
            <div class="fx-inpuwrap">
                <select name="destContactNm" id="destContactNm">
                    <option value="">Select</option>
                    <option value="Henry">Henry</option>
                    <option value="Ellie">Ellie</option>
                    <option value="Jack">Jack</option>
                    <option value="Nora">Nora</option>
                    <option value="Ryan">Ryan</option>
                    <option value="Scarlett">Scarlett</option>
                    <option value="William">William</option>
                    <option value="Gabriel">Gabriel</option>
                </select>
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Address 1</label> 
            <div class="fx-inputwrap"> <input type="text" name="destAddr1" value=""> </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container">
            <label>Address 2</label> 
            <div class="fx-inputwrap"> <input type="text" name="destAddr2" value=""> </div>
        </div>
        <div class="fx-datapoint fx-cf ">
            <label>*&nbsp;ZIP</label> 
            <div class="fx-inputwrap"> <input type="text" name="destZip" maxlength="9" value="" id="destZipId"> </div>
        </div>
        <div class="fx-datapoint fx-cf">
          <label class="check"> <input type="checkbox" name="shipToResidence" value="on"> This is a residential address </label>
        </div>
      </div>
    </div>
    <fieldset id="shipfromto">
        <h2>Additional Information needed</h2>
        <div class="fx-datapoint fx-cf fx-hidden input-container" id="pricingOption">
            <label>Pricing option</label> 
            <div class="fx-inputwrap" id="pricingOptionDisplayRow"> <label class="check"> <input type="radio" name="pricingOption" value="OUR_STANDARD_RATE" checked="checked" id="pricingOptionStdRateId"> OUR Standard Rate </label> <label class="check"> <input type="radio" name="pricingOption" value="OUR_ONE_RATE" id="pricingOptionOneRateId"> OUR One Rate </label> </div>
        </div>
        <div class="fx-datapoint fx-cf input-container">
            <label>No. of packages</label> 
            <div class="fx-inputwrap">
              <select name="totalNumberOfPackages" id="NumOfPackages">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
        </div>
        <div class="fx-datapoint fx-cf fx-hidden input-container" id="rowpackagesindentical">
            <label>Are packages identical?</label> 
            <div class="fx-inputwrap">
                <div class="fx-datapoint fx-cf" id="y"> <label class="radio"> <input type="radio" name="isPackageIdentical" value="Yes" id="pkiId"> Yes</label> </div>
                <div class="fx-datapoint fx-cf" id="n"> <label class="radio"> <input type="radio" name="isPackageIdentical" value="No" id="pkiId"> No</label> </div>
            </div>
        </div>
        <div class="fx-datapoint fx-cf input-container" id="viewWeight">
            <label>Weight</label> 
            <div class="fx-inputwrap"> <input type="text" name="perPackageWeight" maxlength="6" value="" onkeyup="restrictNumeric(this, event);"> </div>
            <div class="fx-datapoint fx-cf" id="viewWeightUnit">
                <div class="fx-inputwrap">
                    <select name="weightUnit">
                        <option value="lbs" selected="selected">lbs</option>
                        <option value="Kgs">kgs</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="fx-datapoint fx-cf input-container"> <label class="check"> <input type="checkbox" name="shipWithAcct" value="on"> Ship using a International Courier account number </label> </div>
        <div class="fx-datapoint fx-cf input-container">
            <label>Pickup/Dropoff</label> 
            <select name="receivedAtCode">
                <option value="10">Select</option>
                <option value="9" disabled="disabled">Pickup</option>
                <option value="2">&nbsp;&nbsp;-Schedule a pickup</option>
                <option value="1">&nbsp;&nbsp;-Use an already scheduled pickup</option>
                <option value="4">Drop off at International courier location</option>
            </select>
        </div>
        <div class="fx-datapoint fx-cf input-container">
            <label>Ship date</label> 
            <div class="fx-inputwrap">
                <select name="shipDate">
                    <option value="03302021">Today</option>
                    <option value="03312021">Tomorrow</option>
                    <option value="04012021">April 1, 2021</option>
                    <option value="04022021">April 2, 2021</option>
                    <option value="04032021">April 3, 2021</option>
                    <option value="04052021">April 5, 2021</option>
                    <option value="04062021">April 6, 2021</option>
                    <option value="04072021">April 7, 2021</option>
                    <option value="04082021">April 8, 2021</option>
                    <option value="04092021">April 9, 2021</option>
                </select>
            </div>
        </div>
    </fieldset>
    <script id="additional information needed">
      $(function(){
        populateNumPackages();
            $("#y").click(function () {
              $("#viewWeight").show();
              $("#viewWeightUnit").show();
              $("#getQuickQuote").show();
              
          });
          
          $("#n").click(function () {
              $("#viewWeight").hide();
              $("#viewWeightUnit").hide();
              $("#getQuickQuote").hide();
            
          });
          
          $("#NumOfPackages").change(function() {
              if ($(this).val() >= 2) {
                $("#rowpackagesindentical").show();
              }
              else
                {
                $("#rowpackagesindentical").hide();
                
                }
              
          });
          
          $('#pricingOptionOneRateId').click(function() {
          $("#viewWeight").hide();
          $("#viewWeightUnit").hide();
          $("#getQuickQuote").hide();

        });
        
        $('#pricingOptionStdRateId').click(function() {
          $("#viewWeight").show();
          $("#viewWeightUnit").show();
          $("#getQuickQuote").show();
        });
        
          $('input[type=radio][name=pricingOption]').change(function() {
            var value=$(this).val();
            $('#NumOfPackages').find('option').remove();
            if(value == "OUR_ONE_RATE"){
              $("#NumOfPackages").append("<option value=1>1</option>");
              $("#rowpackagesindentical").hide();
            }
            else if(value == "OUR_STANDARD_RATE"){
              populateNumPackages();
            }
              });
          
          $('#origZipId').on('blur', Countrychange);
          $('#destZipId').on('blur init', Countrychange).trigger('init');
      });
      
      function Countrychange() {
        var origincountry = $('#origCountryId').val();
        var destcountry = $('#destCountryId').val();
        var origzip = $('#origZipId').val();
        var destzip = $('#destZipId').val();

        if (origincountry == destcountry && origincountry == "US"
            && destzip != "" && origzip != "") {
          $('#pricingOption').removeClass('fx-hidden');
        } else $('#pricingOption').addClass('fx-hidden');
      }
      function populateNumPackages() {
        for(var i=1;i<=25;i++){
          $("#NumOfPackages").append("<option value=\""+i+"\">"+i+"</option>");
        }
      }
      function restrictNumeric(o, event) 
      {
        var lookFor = '*' + event.keyCode + '*';
        var ignoreKeys="*9*16*17*18*19*20*27*33*34*35*36*37*38*39*40*45*46*112*113*114*115*116*117*118*119*120*121*122*123";
        var index = ignoreKeys.indexOf(lookFor);
        if (index == -1)
            o.value=o.value.replace(/([^0-9\.])/g,"");
      }    
        </script> </div> </div> </div> <div class="fx-form-buttons"> <button id="goToPackageInfoPage" class="fx-btn-primary next-action"> Get detailed quote </button> <button class="fx-btn-primary next-action" id="getQuickQuote"> Get quick quote </button> </div> </form> <script id="ship-from-to-script" type="text/javascript">
          var ratePath = "/ratefinder/mobilestandalone?method=";
          var origCountryPath = "/ratefinder/mobilestandalone?method=originCountryChange";
          var destCountryPath = "/ratefinder/mobilestandalone?method=destinationCountryChange";
          
          $(function() {
            $('.next-action').click(function(evt) {
            evt.preventDefault();
            $('#rate-form').attr('action',ratePath + $(this).attr('id')).submit();
            });
            
            $('#origCountryId').change(function(){
              $('#rate-form').attr('action',origCountryPath).submit();
              
            });
            $('#destCountryId').change(function(){
              $('#rate-form').attr('action',destCountryPath).submit();
            });
          });
        

      function loadDoc(file) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("aux").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", file, true);
        xhttp.send();
      }
        
      if (vf == 0) {

        if ( /MSIE 7/i.test(navigator.userAgent) || /MSIE 8/i.test(navigator.userAgent) || /\/labelportal\//.test(location.href) ) {
          loadDoc("/templates/components/footers/us/gl_old.html");
        } else {
          loadDoc("/templates/components/footers/us/gl_new.html");
        }
      }

    </script>
  </div>
  <script id="wrapper-script" type="text/javascript">
    $(function(){
      // prevents any input except integer (no decimal point)
      $('input:text.integer-only').on('focus keyup', function(){
        var v = $(this).val();
        $(this).val(v ? v.replace(/[^\d]/g, '') : '');
      });
      
      // prevents any input except float (including decimal point) 
      $('input:text.float-only').on('focus keyup', function(){
        var v = $(this).val();
        $(this).val(v ? v.replace(/[^\d.]/g, '') : '');
      });
    });
  </script>
  <script type="text/javascript" >var _cf = _cf || [];  _cf.push(['_setFsp', true]);  _cf.push(['_setBm', true]);  _cf.push(['_setAu', '/webcontent/4afff1bfui264cb3355359f9679fa2']);
  </script>
  <script type="text/javascript"  src="/webcontent/4afff1bfui264cb3355359f9679fa2"></script>
</body>
</html> 



    </div>
</div>

<div class="spacer-50"></div>