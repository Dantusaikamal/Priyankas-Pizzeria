<?php
// Start the session
session_start();

if(isset($_SESSION['username'])){
  echo "<p style='color:white; padding-left:900px; '>" . "Welcome '{$_SESSION['username']}'";
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F203304992515454" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F203304992515454" title="oEmbed Form">
<meta property="og:title" content="Pizza Order Form" >
<meta property="og:url" content="https://form.jotform.com/203304992515454" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/favicon.ico">
<link rel="canonical" href="https://form.jotform.com/203304992515454" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Pizza Order Form</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21977" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21977" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21977" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
@import "//www.jotform.com/themes/css/buttons/form-submit-button-simple_red.css";
*,
*:after,
*:before {
  box-sizing: border-box;
}
.form-all {
  font-family: "Inter", sans-serif;
}
.main .jotform-form {
  width: 100%;
  padding: 0 3%;
}
.form-all {
  display: flex;
  flex-direction: column;
  /* margin:72px */
  margin: 0px auto;
  width: 100%;
  max-width: 710px;
}
.form-line.form-line-active {
  -webkit-transition-property: all;
  -moz-transition-property: all;
  -ms-transition-property: all;
  -o-transition-property: all;
  transition-property: all;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #ffffe0;
}
.form-label-left,
.form-label-right {
  width: 230px;
}
.form-label {
  display: flex;
  font-size: 16px;
  font-weight: 500;
  word-break: break-word;
}
.form-label.form-label-auto {
  width: 100%;
  margin-bottom: 14px;
}
.form-label-top {
  width: 100%;
  margin-bottom: 14px;
}
.form-label:not(.form-label-top) {
  margin-right: 10px;
  margin-top: .625em;
  margin-bottom: .625em;
}
.form-label-right {
  justify-content: flex-end;
  text-align: right;
}
.form-all {
  font-size: 16px;
}
.supernova {
  background-color: #ffffff;
  background-color: #ecedf3;
}
.supernova body {
  background-color: transparent;
}
/* | */
@media screen and (min-width: 480px) {
  .supernova .form-all {
    border-radius: 3px;
    box-shadow: 0 4px 4px rgba(87, 100, 126, 0.21);
  }
}
/* | */
.supernova .form-all,
.form-all {
  background-color: #ffffff;
}
.form-header-group {
  border-color: #e6e6e6;
}
.form-matrix-table tr {
  border-color: #e6e6e6;
}
.form-matrix-table tr:nth-child(2n) {
  background-color: #f2f2f2;
}
.form-all {
  color: #2c3345;
}
.form-header-group .form-header {
  color: #2c3345;
}
.form-header-group .form-subHeader {
  color: #404a64;
}
.form-sub-label {
  color: #404a64;
}
.form-label-top,
.form-label-left,
.form-label-right,
.form-html {
  color: #2c3345;
}
.form-checkbox-item label,
.form-radio-item label {
  color: #404a64;
}
.form-radio-item,
.form-checkbox-item {
  padding-bottom: 0px !important;
}
.form-radio-item:last-child,
.form-checkbox-item:last-child {
  padding-bottom: 0;
}
.radio-button-style-item {
  background-position: center;
  background-repeat: no-repeat;
  background-size: 40px;
  padding: 0;
  margin: 0 12px 12px 0;
  background-color: #4E4E4E;
  border: 1px solid #696969;
}
.radio-button-style-item img {
  opacity: 0;
}
.radio-button-style-item:nth-child(1) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 62'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Ccircle cx='12.5' cy='49.5' r='8.5' fill='%232E69FF'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Cpath stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M43 49.5l3.3 3.5 6.7-7'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(2) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 60 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='24' height='24' x='.5' y='37.5' fill='%23fff' stroke='%232E69FF' rx='12'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24.9' height='24.9' x='.2' y='37.1' fill='%232E69FF' rx='12.5'/%3E%3Ccircle cx='12.7' cy='49.6' r='3.7' fill='%23fff'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%23fff' stroke='%23C3CAD8' rx='1.5'/%3E%3Crect width='24' height='24' x='35.5' y='37.5' fill='%232E69FF' stroke='%232E69FF' rx='1.5'/%3E%3Crect width='7' height='7' x='44' y='46' fill='%23fff' rx='1'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(3) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 62 63'%3E%3Cdefs/%3E%3Crect width='24' height='24' x='.5' y='.5' fill='%23fff' stroke='%23C3CAD8' rx='12'/%3E%3Crect width='22' height='22' x='1.5' y='1.5' stroke='%23C3CAD8' stroke-width='3' rx='11'/%3E%3Cpath fill='%232E69FF' d='M9.3 47c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.4.4.8.6 1.3.6.6 0 1-.2 1.3-.6l12.9-13c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L11.7 49.3 9.3 47z'/%3E%3Cpath fill='%232E69FF' d='M12.7 62.1c7 0 12.6-5.5 12.6-12.5 0-1-.8-1.8-1.8-1.8-1.1 0-1.8.7-1.8 1.8 0 5-4 9-9 9s-8.9-4-8.9-9a8.8 8.8 0 0112-8.4c.9.4 2-.2 2.3-1 .4-1-.2-2-1-2.4a12 12 0 00-4.4-.7C5.7 37.1.2 42.7.2 49.6c0 7 5.6 12.5 12.5 12.5z'/%3E%3Cmask id='a' fill='%23fff'%3E%3Crect width='25' height='25' x='35' rx='2'/%3E%3C/mask%3E%3Crect width='25' height='25' x='35' fill='%23fff' stroke='%23C3CAD8' stroke-width='6' mask='url(%23a)' rx='2'/%3E%3Cpath fill='%232E69FF' d='M51.5 39.8a1.5 1.5 0 000-3v3zm8.1 9.3a1.5 1.5 0 10-3 0h3zm-3.5 10h-17v3h17v-3zm-17.6-.6V40.3h-3v18.2h3zm.5-18.7h12.5v-3H39v3zm20.6 18.7v-9.4h-3v9.4h3zM39 59a.5.5 0 01-.5-.5h-3c0 2 1.6 3.5 3.5 3.5v-3zm17.1 3c2 0 3.5-1.5 3.5-3.5h-3c0 .3-.2.5-.5.5v3zM38.5 40.3c0-.3.3-.5.5-.5v-3c-1.9 0-3.5 1.6-3.5 3.5h3zM44.8 46.8c-.7-.8-1.8-.8-2.5 0-.8.7-.8 1.8 0 2.5l3.6 3.7c.3.3.7.5 1.3.5.5 0 .9-.2 1.2-.5l12.7-12.8c.7-.7.7-1.8 0-2.5-.7-.8-1.8-.8-2.6 0L47.2 49l-2.4-2.3z'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(4) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 53 57'%3E%3Cdefs/%3E%3Ccircle cx='9' cy='9' r='9' fill='%23C3CAD8'/%3E%3Cpath stroke='%23C3CAD8' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37 9l4.3 5L50 4'/%3E%3Ccircle cx='9' cy='47.8' r='9' fill='%232E69FF'/%3E%3Cpath stroke='%232E69FF' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M37.4 48.5l4.1 4.6 8.2-9.3'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(5) {
  display: none;
}
.radio-button-style-item:nth-child(6) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3C/svg%3E");
}
.radio-button-style-item:nth-child(7) {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='//www.w3.org/2000/svg' fill='none' viewBox='0 0 45 63'%3E%3Cdefs/%3E%3Crect width='45' height='26' y='37' fill='%232E69FF' rx='13'/%3E%3Ccircle cx='31' cy='50' r='10' fill='%23fff'/%3E%3Ccircle cx='27.4' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Ccircle cx='34.5' cy='48.5' r='1.4' fill='%232E69FF'/%3E%3Cpath fill='%232E69FF' d='M31 56c2 0 3.5-1.3 3.5-3h-7c0 1.7 1.6 3 3.5 3z'/%3E%3Crect width='45' height='26' fill='%23C3CAD8' rx='13'/%3E%3Ccircle cx='14' cy='13' r='10' fill='%23fff'/%3E%3Ccircle cx='10.4' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Ccircle cx='17.5' cy='11.5' r='1.4' fill='%23C3CAD8'/%3E%3Cpath fill='%23C3CAD8' d='M14 16c-2 0-3.5 1.3-3.5 3h7c0-1.7-1.6-3-3.5-3z'/%3E%3C/svg%3E");
}
.form-single-column .form-checkbox-item,
.form-single-column .form-radio-item {
  width: 100%;
}
.form-checkbox-item .editor-container div,
.form-radio-item .editor-container div {
  position: relative;
}
.form-checkbox-item .editor-container div:before,
.form-radio-item .editor-container div:before {
  display: inline-block;
  vertical-align: middle;
  left: 0;
  width: 20px;
  height: 20px;
}
.supernova {
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-attachment: fixed;
  background-size: auto;
  background-size: cover;
}
.supernova {
  background-image: none;
  background-image: url("https://www.jotform.com/uploads/LaurelWood/form_files/7693.5e96cee15f7cb5.15565580.jpg");
}
#stage {
  background-image: none;
  background-image: url("https://www.jotform.com/uploads/LaurelWood/form_files/7693.5e96cee15f7cb5.15565580.jpg");
}
/* | */
.form-all {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
  background-repeat: repeat;
}
.form-header-group {
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center top;
}
li.form-line {
  margin-top: 12px;
  margin-bottom: 12px;
}
.form-line {
  padding: 12px 10px;
}
.form-all {
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
}
.form-section:first-child {
  -webkit-border-radius: 6px 6px 0 0;
  -moz-border-radius: 6px 6px 0 0;
  border-radius: 6px 6px 0 0;
}
.form-section:last-child {
  -webkit-border-radius: 0 0 6px 6px;
  -moz-border-radius: 0 0 6px 6px;
  border-radius: 0 0 6px 6px;
}
.form-all .qq-upload-button,
.form-all .form-submit-button,
.form-all .form-submit-reset,
.form-all .form-submit-print {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.form-all .form-pagebreak-back,
.form-all .form-pagebreak-next {
  font-size: 1em;
  padding: 9px 15px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: normal;
}
.header-large h1.form-header {
  font-size: 2em;
}
.header-large h2.form-header {
  font-size: 1.5em;
}
.header-large h3.form-header {
  font-size: 1.17em;
}
.header-large h1 + .form-subHeader {
  font-size: 1em;
}
.header-large h2 + .form-subHeader {
  font-size: .875em;
}
.header-large h3 + .form-subHeader {
  font-size: .75em;
}
.header-default h1.form-header {
  font-size: 2em;
}
.header-default h2.form-header {
  font-size: 1.5em;
}
.header-default h3.form-header {
  font-size: 1.17em;
}
.header-default h1 + .form-subHeader {
  font-size: 1em;
}
.header-default h2 + .form-subHeader {
  font-size: .875em;
}
.header-default h3 + .form-subHeader {
  font-size: .75em;
}
.header-small h1.form-header {
  font-size: 2em;
}
.header-small h2.form-header {
  font-size: 1.5em;
}
.header-small h3.form-header {
  font-size: 1.17em;
}
.header-small h1 + .form-subHeader {
  font-size: 1em;
}
.header-small h2 + .form-subHeader {
  font-size: .875em;
}
.header-small h3 + .form-subHeader {
  font-size: .75em;
}
.form-header-group {
  text-align: center;
}
.form-line {
  zoom: 1;
}
.form-line:before,
.form-line:after {
  display: table;
  content: '';
  line-height: 0;
}
.form-line:after {
  clear: both;
}
.form-captcha input,
.form-spinner input {
  width: 648px;
}
.form-textbox,
.form-textarea {
  width: 100%;
  max-width: 648px;
}
.form-input,
.form-matrix-table {
  width: 100%;
  max-width: 648px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 648px;
}
[data-type="control_payment"] .form-sub-label-container {
  width: auto;
}
[data-type="control_payment"] .form-sub-label-container .form-dropdown {
  width: 100%;
}
.form-header-group {
  font-family: "Inter", sans-serif;
}
.form-section {
  padding: 0px 38px;
}
div.form-header-group {
  margin: 0px -38px;
}
div.form-header-group {
  padding: 40px 52px;
}
.form-textbox,
.form-textarea {
  padding: 1px 10px -1px 10px;
}
.form-textbox,
.form-textarea,
.form-radio-other-input,
.form-checkbox-other-input,
.form-captcha input,
.form-spinner input {
  background-color: #ffffff;
}
.form-textbox,
.form-textarea {
  width: 100% !important;
  max-width: 648px;
}
[data-type="control_textbox"] .form-input,
[data-type="control_textarea"] .form-input,
[data-type="control_fullname"] .form-input,
[data-type="control_phone"] .form-input,
[data-type="control_datetime"] .form-input,
[data-type="control_address"] .form-input,
[data-type="control_email"] .form-input,
[data-type="control_passwordbox"] .form-input,
[data-type="control_autocomp"] .form-input,
[data-type="control_textbox"] .form-input-wide,
[data-type="control_textarea"] .form-input-wide,
[data-type="control_fullname"] .form-input-wide,
[data-type="control_phone"] .form-input-wide,
[data-type="control_datetime"] .form-input-wide,
[data-type="control_address"] .form-input-wide,
[data-type="control_email"] .form-input-wide,
[data-type="control_passwordbox"] .form-input-wide,
[data-type="control_autocomp"] .form-input-wide {
  width: 100%;
  max-width: 648px;
}
.form-matrix-table {
  width: 100%;
  max-width: 648px;
}
[data-type="control_dropdown"] .form-input,
[data-type="control_birthdate"] .form-input,
[data-type="control_time"] .form-input,
[data-type="control_dropdown"] .form-input-wide,
[data-type="control_birthdate"] .form-input-wide,
[data-type="control_time"] .form-input-wide {
  width: 100%;
  max-width: 648px;
}
[data-type="control_dropdown"] .form-dropdown {
  width: 100% !important;
  max-width: 648px;
}
.form-label {
  font-family: "Inter", sans-serif;
}
li[data-type="control_image"] div {
  text-align: left;
}
li[data-type="control_image"] img {
  border: none;
  border-width: 0px !important;
  border-style: solid !important;
  border-color: false !important;
}
.form-line-column {
  width: calc(50% - 8px);
}
.form-line-column.form-line-column-clear {
  width: calc(43%);
}
.form-line-error {
  overflow: hidden;
  -webkit-transition-property: none;
  -moz-transition-property: none;
  -ms-transition-property: none;
  -o-transition-property: none;
  transition-property: none;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -ms-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -ms-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  background-color: #fff4f4;
}
.form-line-error .form-error-message {
  background-color: #f23a3c;
  clear: both;
  float: none;
}
.form-line-error .form-error-message .form-error-arrow {
  border-bottom-color: #f23a3c;
}
.form-line-error input:not(#coupon-input),
.form-line-error textarea,
.form-line-error .form-validation-error {
  border: 1px solid #f23a3c;
  -webkit-box-shadow: 0 0 3px #f23a3c;
  -moz-box-shadow: 0 0 3px #f23a3c;
  box-shadow: 0 0 3px #f23a3c;
}
.ie-8 .form-all {
  margin-top: auto;
  margin-top: initial;
}
.ie-8 .form-all:before {
  display: none;
}
[data-type="control_clear"] {
  display: none;
}
/* | */
@media screen and (max-width: 480px), screen and (max-device-width: 767px) and (orientation: portrait), screen and (max-device-width: 415px) and (orientation: landscape) {
  .testOne {
    letter-spacing: 0;
  }
  .form-all {
    border: 0;
    max-width: initial;
  }
  .form-sub-label-container {
    width: 100%;
    margin: 0;
    margin-right: 0;
    float: left;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  span.form-sub-label-container + span.form-sub-label-container {
    margin-right: 0;
  }
  .form-sub-label {
    white-space: normal;
  }
  .form-submit-button,
  .form-submit-print,
  .form-submit-reset {
    width: 100%;
    margin-left: 0!important;
  }
  div[id*=at_] {
    font-size: 14px;
    font-weight: 700;
    height: 8px;
    margin-top: 6px;
  }
}
#propsFormLayout #enableFormCols {
  display: none;
}
#propsLabels .sb-input-color + .sb-seperator + .sb-col-half + .sb-col-half.even {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color + .sb-seperator + .sb-option,
#propsRadio .sb-option + .sb-seperator + .sb-option.sb-col-half {
  display: none;
}
#propsRadio .sb-option.sb-col-half.even.sb-input-color {
  padding-left: 18px;
  padding-right: 12px;
}
#propsPageBreaks .sb-option:nth-child(20),
#propsPageBreaks .sb-seperator:nth-child(21) {
  display: none;
}
#propsButtons .sb-option:nth-child(20),
#propsButtons .sb-seperator:nth-child(21) {
  display: none;
}
#buttonSizeChangeContainer {
  display: none;
}
#buttonSizeChangeContainer + .sb-option.sb-col-half.even {
  padding-left: 18px;
  padding-right: 12px;
}

/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 710px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      .supernova {
        background-image: url("https://www.jotform.com/uploads/LaurelWood/form_files/7693.5e96cee15f7cb5.15565580.jpg");
      }
      #stage {
        background-image: url("https://www.jotform.com/uploads/LaurelWood/form_files/7693.5e96cee15f7cb5.15565580.jpg");
      }
    
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/guest_3662ae4d541503e3/form_files/gold.5fbff3111c13f5.46450804.png");
      display: inline-block;
      height: 140px;
      position: absolute;
      background-size: 140px 140px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 160px !important;
    }
    .form-all:before {
      top: -150px;
      left: 0;
      background-position: top left;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
.form-header {
    font-size : 45px !important;
}


    /* Injected CSS Code */
</style>

<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.21977" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.21977" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.21977" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21977" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/payments/paypalSPB.js?v=3.3.21977" type="text/javascript"></script>
<script src="https://www.paypal.com/sdk/js?client-id=undefined&commit=false&currency=USD&vault=true" data-partner-attribution-id="JotForm_P4P"></script>
<script src="https://cdn.jotfor.ms/js/libraries/promise-polyfill.js"></script>
<script type="text/javascript">
	JotForm.init(function(){
      productID = {"0":"input_7_1001","1":"input_7_1002","2":"input_7_1007","3":"input_7_1008","4":"input_7_1005","5":"input_7_1006"};
      paymentType = "product";
      JotForm.setCurrencyFormat('USD',true, 'point');
      JotForm.totalCounter({"input_7_1001":{"price":"15","quantityField":"input_7_quantity_1001_0","specialPriceField":"input_7_custom_1001_1","specialPriceList":["15","20","25"]},"input_7_1002":{"price":"13","quantityField":"input_7_quantity_1002_0","specialPriceField":"input_7_custom_1002_1","specialPriceList":["13","15","22"]},"input_7_1007":{"price":"15","quantityField":"input_7_quantity_1007_0","specialPriceField":"input_7_custom_1007_1","specialPriceList":["15","20","25"]},"input_7_1008":{"price":"14","quantityField":"input_7_quantity_1008_0","specialPriceField":"input_7_custom_1008_1","specialPriceList":["14","19","24"]},"input_7_1005":{"price":"8","quantityField":"input_7_quantity_1005_0"},"input_7_1006":{"price":"8","quantityField":"input_7_quantity_1006_0"}});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('blur', function(){isNaN(this.value) || this.value < 1 ? this.value = '0' : this.value = parseInt(this.value)})});
      $$('.form-product-custom_quantity').each(function(el, i){el.observe('focus', function(){this.value == 0 ? this.value = '' : this.value})});
      JotForm.handleProductLightbox();

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("5", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
 JotForm.formatDate({date:(new Date()), dateField:$("id_"+5)});
      JotForm.setPhoneMaskingValidator( 'input_11_full', '(###) ###-####' );
if (window.JotForm && JotForm.accessible) $('input_8').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
      JotForm.alterTexts(undefined);
      JotForm.alterTexts(undefined, true);
	JotForm.clearFieldOnHide="disable";
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"pizzaOrder","qid":"1","text":"Pizza Order Form","type":"control_head"},{"name":"order","qid":"2","text":"Order ","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},null,{"name":"pickupDate","qid":"5","text":"Pickup Date","type":"control_datetime"},{"name":"pickupTime","qid":"6","text":"Pickup Time","type":"control_time"},{"name":"menu","qid":"7","text":"Menu","type":"control_paypalSPB"},{"name":"additionalNotes","qid":"8","text":"Additional Notes","type":"control_textarea"},null,null,{"name":"phoneNumber","qid":"11","text":"Phone Number","type":"control_phone"},{"name":"email","qid":"12","subLabel":"example@example.com","text":"Email","type":"control_email"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"pizzaOrder","qid":"1","text":"Pizza Order Form","type":"control_head"},{"name":"order","qid":"2","text":"Order ","type":"control_button"},{"name":"name","qid":"3","text":"Name","type":"control_fullname"},null,{"name":"pickupDate","qid":"5","text":"Pickup Date","type":"control_datetime"},{"name":"pickupTime","qid":"6","text":"Pickup Time","type":"control_time"},{"name":"menu","qid":"7","text":"Menu","type":"control_paypalSPB"},{"name":"additionalNotes","qid":"8","text":"Additional Notes","type":"control_textarea"},null,null,{"name":"phoneNumber","qid":"11","text":"Phone Number","type":"control_phone"},{"name":"email","qid":"12","subLabel":"example@example.com","text":"Email","type":"control_email"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="https://submit.jotform.com/submit/203304992515454/" method="post" name="form_203304992515454" id="203304992515454" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="203304992515454" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <div class="formLogoWrapper Left">
      <img class="formLogoImg" src="gold.png" height="140" width="140">
    </div>
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Left { top: -150px; left: 0; text-align: left;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Pizza Order Form
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_paypalSPB" id="id_7" data-payment="true">
        <label class="form-label form-label-top" id="label_7" for="input_7"> Menu </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <div>
            <div data-wrapper-react="true">
              <div class="filter-container">
              </div>
              <input type="hidden" id="use_paypal_button" />
              <input type="hidden" name="simple_fpc" data-payment_type="paypalSPB" data-component="payment1" value="7" />
              <input type="hidden" name="payment_total_checksum" id="payment_total_checksum" data-component="payment2" />
              <div id="image-overlay" class="overlay-content" style="display:none">
                <img id="current-image" />
                <span class="lb-prev-button">
                  prev
                </span>
                <span class="lb-next-button">
                  next
                </span>
                <span class="lb-close-button">
                  ( X )
                </span>
                <span class="image-overlay-product-container">
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110.jpg" />
                    </li>
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110 copy 4.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110 copy 2.jpg" />
                    </li>
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/slices-pizza_23-2147517737 copy 3.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110 copy.jpg" />
                    </li>
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110 copy 3.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/slices-pizza_23-2147517737 copy 4.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/transparent-plastic-glass-drink-juice-with-straw_1284-32543.jpg" />
                    </li>
                  </ul>
                  <ul class="form-overlay-item" hasicon="false" hasimages="true" iconvalue="">
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/lemon-lime-lemonade-lemonade-green-illustration_1416-918.jpg" />
                    </li>
                    <li class="image-overlay-image">
                      <img src="https://www.jotform.com/uploads/LaurelWood/form_files/lemon-lime-lemonade-lemonade-green-illustration_1416-918 copy.jpg" />
                    </li>
                  </ul>
                </span>
              </div>
              <div data-wrapper-react="true">
                <span class="form-product-item hover-product-item  show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1001">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1001" name="q7_menu[][id]" value="1001" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1001" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1001">
                            Pizza Neapolitan
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1001">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1001_price">
                                15.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1001_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1001][item_0]" id="input_7_quantity_1001_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1001_1" style="min-height:13px" aria-hidden="false"> Size </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1001][item_1]" id="input_7_custom_1001_1">
                            <option value="Small"> Small </option>
                            <option value="Medium"> Medium </option>
                            <option value="Large"> Large </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_7_1001_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item  show_image show_desc show_option new_ui" categories="non-categorized" pid="1002">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1002" name="q7_menu[][id]" value="1002" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110%20copy%202.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1002" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1002">
                            Pizza Pepperoni
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1002">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1002_price">
                                13.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1002_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1002][item_0]" id="input_7_quantity_1002_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1002_1" style="min-height:13px" aria-hidden="false"> Size </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1002][item_1]" id="input_7_custom_1002_1">
                            <option value="Small"> Small </option>
                            <option value="Medium"> Medium </option>
                            <option value="Large"> Large </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item  show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1007">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1007" name="q7_menu[][id]" value="1007" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/pizza-assortment-set_1284-20110%20copy.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1007" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1007">
                            Pizza Mare e Monti
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1007">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1007_price">
                                15.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1007_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1007][item_0]" id="input_7_quantity_1007_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1007_1" style="min-height:13px" aria-hidden="false"> Size </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1007][item_1]" id="input_7_custom_1007_1">
                            <option value="Small"> Small </option>
                            <option value="Medium"> Medium </option>
                            <option value="Large"> Large </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_7_1007_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item  show_image show_desc show_option show_subtotal new_ui" categories="non-categorized" pid="1008">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1008" name="q7_menu[][id]" value="1008" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/slices-pizza_23-2147517737%20copy%204.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1008" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1008">
                            Pizza Supreme
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1008">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1008_price">
                                14.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1008_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1008][item_0]" id="input_7_quantity_1008_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1008_1" style="min-height:13px" aria-hidden="false"> Size </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1008][item_1]" id="input_7_custom_1008_1">
                            <option value="Small"> Small </option>
                            <option value="Medium"> Medium </option>
                            <option value="Large"> Large </option>
                          </select>
                        </span>
                      </span>
                      <br/>
                      <span class="form-special-subtotal">
                        <span class="form-item-subtotal">
                          Item subtotal:
                        </span>
                        <span data-wrapper-react="true">
                          $
                          <span id="input_7_1008_item_subtotal">
                            0.00
                          </span>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item  show_image show_desc show_option new_ui" categories="non-categorized" pid="1005">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1005" name="q7_menu[][id]" value="1005" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/transparent-plastic-glass-drink-juice-with-straw_1284-32543.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1005" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1005">
                            Orange Juice
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1005">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1005_price">
                                8.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1005_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1005][item_0]" id="input_7_quantity_1005_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1005_1" style="min-height:13px" aria-hidden="false"> Extra </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1005][item_1]" id="input_7_custom_1005_1">
                            <option value="None"> None </option>
                            <option value="Extra Ice"> Extra Ice </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="p_item_separator ">
                </div>
                <span class="form-product-item hover-product-item  show_image show_desc show_option new_ui" categories="non-categorized" pid="1006">
                  <div data-wrapper-react="true" class="form-product-item-detail new_ui">
                    <div class="p_col">
                      <div class="p_checkbox">
                        <input type="checkbox" class="form-checkbox  form-product-input" id="input_7_1006" name="q7_menu[][id]" value="1006" />
                        <div class="checked">
                        </div>
                        <div class="select_border">
                        </div>
                      </div>
                    </div>
                    <div class="p_image">
                      <div class="image_area form-product-image-with-options" style="background-image:url(&quot;https://www.jotform.com/uploads/LaurelWood/form_files/lemon-lime-lemonade-lemonade-green-illustration_1416-918.jpg&quot;)">
                        <div class="image_zoom">
                        </div>
                      </div>
                    </div>
                    <div for="input_7_1006" class="form-product-container">
                      <span data-wrapper-react="true">
                        <div class="title_description">
                          <span class="form-product-name" id="product-name-input_7_1006">
                            Lemonade
                          </span>
                          <span class="form-product-description" id="product-name-description-input_7_1006">
                            Ingredients will be written here.
                          </span>
                        </div>
                        <span class="form-product-details">
                          <b>
                            <span data-wrapper-react="true">
                              $
                              <span id="input_7_1006_price">
                                8.00
                              </span>
                            </span>
                          </b>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_quantity_1006_0" style="min-height:13px" aria-hidden="false"> Quantity </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1006][item_0]" id="input_7_quantity_1006_0">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                            <option value="8"> 8 </option>
                            <option value="9"> 9 </option>
                            <option value="10"> 10 </option>
                          </select>
                        </span>
                      </span>
                      <span class="form-sub-label-container" style="vertical-align:top">
                        <label class="form-sub-label" for="input_7_custom_1006_1" style="min-height:13px" aria-hidden="false"> Options </label>
                        <span class="select_cont">
                          <select class="form-dropdown" name="q7_menu[special_1006][item_1]" id="input_7_custom_1006_1">
                            <option value="Normal"> Normal </option>
                            <option value="Pink"> Pink </option>
                          </select>
                        </span>
                      </span>
                    </div>
                  </div>
                </span>
                <div class="payment_footer new_ui ">
                  <div class="total_area">
                    <div class="form-payment-total">
                      <div id="total-text">
                        Total
                      </div>
                      <div class="form-payment-price">
                        <span data-wrapper-react="true">
                          $
                          <span id="payment_total">
                            0.00
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="text" name="cc_paypalSPB_orderID" id="cc_paypalSPB_orderID" class="form-textbox" readonly="" tabindex="-1" style="opacity:0;z-index:-1;pointer-events:none;position:absolute;width:0;height:0;left:-400px;top:-400px;padding:0;border:none;margin:0" />
            <input type="text" name="cc_paypalSPB_payerID" id="cc_paypalSPB_payerID" class="form-textbox" readonly="" tabindex="-1" style="opacity:0;z-index:-1;pointer-events:none;position:absolute;width:0;height:0;left:-400px;top:-400px;padding:0;border:none;margin:0" />
            <div class="complete-payment-prompt" style="display:none">
              The payment is ready! It will be completed once you submit the form.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_datetime" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="lite_mode_5"> Pickup Date </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_5" name="q5_pickupDate[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="11" autoComplete="off" aria-labelledby="label_5 sublabel_5_month" />
                <span class="date-separate" aria-hidden="true">
                   .
                </span>
                <label class="form-sub-label" for="month_5" id="sublabel_5_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="currentDate form-textbox validate[limitDate]" id="day_5" name="q5_pickupDate[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="26" autoComplete="off" aria-labelledby="label_5 sublabel_5_day" />
                <span class="date-separate" aria-hidden="true">
                   .
                </span>
                <label class="form-sub-label" for="day_5" id="sublabel_5_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_5" name="q5_pickupDate[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="2020" autoComplete="off" aria-labelledby="label_5 sublabel_5_year" />
                <label class="form-sub-label" for="year_5" id="sublabel_5_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_5" size="12" data-maxlength="12" maxLength="12" data-age="" value="11.26.2020" data-format="mmddyyyy" data-seperator="." placeholder="MM.DD.YYYY" autoComplete="off" aria-labelledby="label_5 sublabel_5_litemode" />
              <img class="showAutoCalendar newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_5_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_5" id="sublabel_5_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_time" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6_hourSelect"> Pickup Time </label>
        <div id="cid_6" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <div class="time-wrapper">
              <span class="form-sub-label-container hasAMPM" style="vertical-align:top">
                <input type="text" class="time-dropdown form-textbox" id="input_6_timeInput" name="q6_pickupTime[timeInput]" placeholder="HH : MM" aria-labelledby="label_6 sublabel_6_hour" data-mask="hh:MM" value="" data-version="v2" />
                <input type="hidden" id="input_6_hourSelect" name="q6_pickupTime[hourSelect]" />
                <input type="hidden" id="input_6_minuteSelect" name="q6_pickupTime[minuteSelect]" />
                <label class="form-sub-label" for="input_6_timeInput" style="min-height:13px" aria-hidden="false"> Hour Minutes </label>
              </span>
            </div>
            <div class="time-wrapper">
              <span class="form-sub-label-container" style="vertical-align:top">
                <select class="time-dropdown form-dropdown" id="input_6_ampm" name="q6_pickupTime[ampm]" data-component="time-ampm" aria-labelledby="label_6 sublabel_6_ampm">
                  <option value="AM"> AM </option>
                  <option selected="" value="PM"> PM </option>
                </select>
                <label class="form-sub-label" for="input_6_ampm" id="sublabel_6_ampm" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> AM/PM Option </label>
              </span>
            </div>
            <span class="form-sub-label-container until-wrapper" style="vertical-align:top">
              <div class="until-text" id="until_6">
                Until
              </div>
              <label class="form-sub-label" for="until_6" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> until </label>
            </span>
            <div class="time-wrapper">
              <span class="form-sub-label-container hasAMPM" style="vertical-align:top">
                <input type="text" class="time-dropdown form-textbox" id="input_6_timeInputRange" name="q6_pickupTime[timeInputRange]" placeholder="HH : MM" aria-labelledby="label_6 sublabel_6_hourRange" data-mask="hh:MM" value="" data-version="v2" />
                <input type="hidden" id="input_6_hourSelectRange" name="q6_pickupTime[hourSelectRange]" />
                <input type="hidden" id="input_6_minuteSelectRange" name="q6_pickupTime[minuteSelectRange]" />
                <label class="form-sub-label" for="input_6_timeInputRange" style="min-height:13px" aria-hidden="false"> Hour Minutes </label>
              </span>
            </div>
            <div class="time-wrapper">
              <span class="form-sub-label-container" style="vertical-align:top">
                <select class="time-dropdown form-dropdown" id="input_6_ampmRange" name="q6_pickupTime[ampmRange]" data-component="time-ampm-range" aria-labelledby="label_6 sublabel_6_ampmRange">
                  <option value="AM"> AM </option>
                  <option selected="" value="PM"> PM </option>
                </select>
                <label class="form-sub-label" for="input_6_ampmRange" id="sublabel_6_ampmRange" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> AM/PM Option </label>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_3">
        <label class="form-label form-label-top" id="label_3" for="first_3"> Name </label>
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_3" name="q3_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" />
              <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_3" name="q3_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" />
              <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_email" id="id_12">
        <label class="form-label form-label-top" id="label_12" for="input_12"> Email </label>
        <div id="cid_12" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" id="input_12" name="q12_email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_12 sublabel_input_12" />
            <label class="form-sub-label" for="input_12" id="sublabel_input_12" style="min-height:13px" aria-hidden="false"> example@example.com </label>
          </span>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_phone" id="id_11">
        <label class="form-label form-label-top" id="label_11" for="input_11_full"> Phone Number </label>
        <div id="cid_11" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_11_full" name="q11_phoneNumber[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_11" />
            <label class="form-sub-label is-empty" for="input_11_full" id="sublabel_11_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Additional Notes </label>
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <textarea id="input_8" class="form-textarea" name="q8_additionalNotes" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_8"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="center" class="form-buttons-wrapper form-buttons-center paypal-submit-container  jsTest-button-wrapperField">
            <div class="paypal-submit-button-wrapper">
            </div>
            <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Order
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203304992515454" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='203304992515454'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "203304992515454-203304992515454";
}
  </script>
 
</form></body>
</html>
<script src="js/orderform.js"></script>
  
?>


