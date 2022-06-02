<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
   .btn,
.navbar .navbar-nav>a.btn {
  border-width: 2px;
  font-weight: 400;
  font-size: 0.8571em;
  line-height: 1.35em;
  margin: 10px 1px;
  border: none;
  border-radius: 0.1875rem;
  padding: 11px 22px;
  cursor: pointer;
  background-color: #888888;
  color: #FFFFFF;
}

.btn:hover,
.btn:focus,
.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled):active:focus,
.btn:active:hover,
.navbar .navbar-nav>a.btn:hover,
.navbar .navbar-nav>a.btn:focus,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active,
.navbar .navbar-nav>a.btn:not(:disabled):not(.disabled):active:focus,
.navbar .navbar-nav>a.btn:active:hover {
  background-color: #979797;
  color: #FFFFFF;
  box-shadow: none;
}

.btn:hover,
.navbar .navbar-nav>a.btn:hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn:disabled,
.btn:disabled:hover,
.btn:disabled:focus,
.btn:disabled:active,
.btn[disabled],
.btn[disabled]:hover,
.btn[disabled]:focus,
.btn[disabled]:active,
.navbar .navbar-nav>a.btn:disabled,
.navbar .navbar-nav>a.btn:disabled:hover,
.navbar .navbar-nav>a.btn:disabled:focus,
.navbar .navbar-nav>a.btn:disabled:active,
.navbar .navbar-nav>a.btn[disabled],
.navbar .navbar-nav>a.btn[disabled]:hover,
.navbar .navbar-nav>a.btn[disabled]:focus,
.navbar .navbar-nav>a.btn[disabled]:active {
  background-color: #888888;
  border-color: #888888;
}

.btn:hover,
.btn:focus,
.navbar .navbar-nav>a.btn:hover,
.navbar .navbar-nav>a.btn:focus {
  opacity: 1;
  filter: alpha(opacity=100);
  outline: 0 !important;
}

.btn:active,
.navbar .navbar-nav>a.btn:active {
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
}

.btn.btn-icon,
.navbar .navbar-nav>a.btn.btn-icon {
  height: 2.375rem;
  min-width: 2.375rem;
  width: 2.375rem;
  padding: 0;
  font-size: 0.9375rem;
  overflow: hidden;
  position: relative;
  line-height: normal;
}

.btn.btn-icon.btn-lg,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg {
  height: 3.6rem;
  min-width: 3.6rem;
  width: 3.6rem;
}

.btn.btn-icon.btn-lg i.now-ui-icons,
.btn.btn-icon.btn-lg i.fab,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg i.now-ui-icons,
.navbar .navbar-nav>a.btn.btn-icon.btn-lg i.fab {
  font-size: 1.325rem;
}

.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
.btn.btn-icon:not(.btn-footer) i.fab,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.now-ui-icons,
.navbar .navbar-nav>a.btn.btn-icon:not(.btn-footer) i.fab {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-12px, -12px);
  line-height: 1.5626rem;
  width: 23px;
}

.btn:not(.btn-icon) .now-ui-icons,
.navbar .navbar-nav>a.btn:not(.btn-icon) .now-ui-icons {
  position: relative;
  top: 1px;
}

.btn-primary {
  background-color: #f96332;
  color: #FFFFFF;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:not(:disabled):not(.disabled):active,
.btn-primary:not(:disabled):not(.disabled):active:focus,
.btn-primary:active:hover {
  background-color: #fa7a50;
  color: #FFFFFF;
  box-shadow: none;
}

.btn-primary:hover {
  box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.17);
}

.btn-primary:disabled,
.btn-primary:disabled:hover,
.btn-primary:disabled:focus,
.btn-primary:disabled:active,
.btn-primary[disabled],
.btn-primary[disabled]:hover,
.btn-primary[disabled]:focus,
.btn-primary[disabled]:active {
  background-color: #f96332;
  border-color: #f96332;
}

.btn-round {
  border-width: 1px;
  border-radius: 30px !important;
  padding: 11px 23px;
}

.btn-lg {
  font-size: 1em;
  border-radius: 0.25rem;
  padding: 15px 48px;
}

.form-control::-moz-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control:-moz-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control::-webkit-input-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control:-ms-input-placeholder {
  color: #888888;
  opacity: 0.8;
  filter: alpha(opacity=80);
}

.form-control {
  background-color: transparent;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #2c2c2c;
  line-height: normal;
  font-size: 0.8571em;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.form-control:focus {
  border: 1px solid #f96332;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline: 0 !important;
  color: #2c2c2c;
}

.form-control:focus+.input-group-text,
.form-control:focus~.input-group-text {
  border: 1px solid #f96332;
  border-left: none;
  background-color: transparent;
}

.input-group.input-lg .form-control {
  padding: 14px 18px;
}

.input-group.input-lg .form-control+.input-group-text {
  padding: 14px 18px 14px 0;
}

.input-group.input-lg .input-group-text {
  padding: 14px 0 15px 18px;
}

.input-group.input-lg .input-group-text+.form-control {
  padding: 15px 18px 15px 16px;
}

.input-group .form-control {
  padding: 10px 18px 10px 18px;
}

.input-group .form-control+.input-group-text {
  padding: 10px 18px 10px 0;
}

.input-group .input-group-text {
  padding: 10px 0 10px 18px;
}

.input-group .input-group-text+.form-control,
.input-group .input-group-text~.form-control {
  padding: 10px 19px 11px 16px;
}

.input-group-text {
  background-color: #FFFFFF;
  border: 1px solid #E3E3E3;
  border-radius: 30px;
  color: #555555;
  -webkit-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -moz-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -o-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  -ms-transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
}

.input-group-text+.form-control,
.input-group-text~.form-control {
  padding: -0.5rem 0.7rem;
  padding-left: 18px;
}

.input-group-text i {
  width: 17px;
}

.input-group {
  margin-bottom: 10px;
  position: relative;
}

.input-group[disabled] .input-group-text {
  background-color: #E3E3E3;
}

.input-group .input-group-prepend {
  margin-right: 0;
}

.input-group .input-group-prepend .input-group-text {
  border-left: 1px solid #E3E3E3;
}

.input-group .form-control:first-child,
.input-group-text:first-child {
  border-right: 0 none;
}

.input-group .form-control:last-child,
.input-group-text:last-child {
  border-left: 0 none;
}

.input-group.input-group-focus .input-group-prepend .input-group-text,
.form-group.input-group-focus .input-group-prepend .input-group-text {
  border-left: 1px solid #f96332;
}

.input-group-focus .input-group-text {
  background-color: #FFFFFF;
  border-color: #f96332;
}

.form-control[disabled],
.form-control[readonly] {
  background-color: #E3E3E3;
  color: #888888;
  cursor: not-allowed;
}

textarea.form-control {
  max-width: 100%;
  max-height: 80px;
  padding: 10px 10px 0 0;
  resize: none;
  border: none;
  border-bottom: 1px solid #E3E3E3;
  border-radius: 0;
  line-height: 2;
}

textarea.form-control:focus,
textarea.form-control:active {
  border-left: none;
  border-top: none;
  border-right: none;
}

button,
input,
textarea {
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

h1,
h2,
h3,
h4,
h5 {
  font-weight: 400;
}

small {
  font-size: 60%;
}

a {
  color: #f96332;
}

a:hover,
a:focus {
  color: #f96332;
}

h1,
.h1 {
  font-size: 3.5em;
  line-height: 1.15;
  margin-bottom: 30px;
}

h1 small,
.h1 small {
  font-weight: 700;
  text-transform: uppercase;
  opacity: .8;
}

h2,
.h2 {
  font-size: 2.5em;
  margin-bottom: 30px;
}

h3,
.h3 {
  font-size: 1.825em;
  margin-bottom: 30px;
  line-height: 1.4em;
}

h4,
.h4 {
  font-size: 1.5em;
  line-height: 1.45em;
  margin-top: 30px;
  margin-bottom: 15px;
}

h4+.category,
h4.title+.category,
.h4+.category,
.h4.title+.category {
  margin-top: -5px;
}

h5,
.h5 {
  font-size: 1.3em;
  line-height: 1.4em;
  margin-bottom: 15px;
}

h5.category,
.h5.category {
  font-weight: 400;
}

p {
  line-height: 1.61em;
  font-weight: 300;
  font-size: 1.2em;
}

.title {
  font-weight: 700;
  padding-top: 30px;
}

.title+.category {
  margin-top: -25px;
}

.description {
  color: #9A9A9A;
  font-weight: 300;
}

.category {
  text-transform: capitalize;
  font-weight: 700;
  color: #9A9A9A;
}

.text-primary {
  color: #f96332 !important;
}

.blockquote {
  border-left: none;
  border: 1px solid #888888;
  padding: 20px;
  font-size: 1.1em;
  line-height: 1.8;
}

.blockquote small {
  color: #888888;
  font-size: 0.8571em;
  text-transform: uppercase;
}

.blockquote.blockquote-primary {
  border-color: #f96332;
  color: #f96332;
}

.blockquote.blockquote-primary small {
  color: #f96332;
}

body {
  color: #2c2c2c;
  font-size: 14px;
  font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
  overflow-x: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

.nav-item .nav-link,
.navbar {
  -webkit-transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s;
  transition: all 300ms ease 0s;
}

.dropdown-toggle:after,
[data-toggle="collapse"][data-parent="#accordion"] i {
  -webkit-transition: transform 150ms ease 0s;
  -moz-transition: transform 150ms ease 0s;
  -o-transition: transform 150ms ease 0s;
  -ms-transition: all 150ms ease 0s;
  transition: transform 150ms ease 0s;
}

.dropdown-toggle[aria-expanded="true"]:after,
[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}

.button-bar {
  display: block;
  position: relative;
  width: 22px;
  height: 1px;
  border-radius: 1px;
  background: #FFFFFF;
}

.button-bar+.button-bar {
  margin-top: 7px;
}

.button-bar:nth-child(2) {
  width: 17px;
}

@font-face {
  font-family: 'Nucleo Outline';
  src: url("../fonts/nucleo-outline.eot");
  src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@-webkit-keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes nc-icon-spin {
  0% {
    -moz-transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(360deg);
  }
}

@keyframes nc-icon-spin {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.now-ui-icons.ui-1_email-85:before {
  content: "\ea2a";
}

.now-ui-icons.users_circle-08:before {
  content: "\ea23";
}

.navbar {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
  min-height: 53px;
  margin-bottom: 20px;
  box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
}

.navbar a {
  vertical-align: middle;
}

.navbar a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

.navbar p {
  display: inline-block;
  margin: 0;
  line-height: 21px;
  font-weight: inherit;
  font-size: inherit;
}

.navbar .navbar-nav .nav-link.btn {
  padding: 11px 22px;
}

.navbar .navbar-nav .nav-link.btn.btn-lg {
  padding: 15px 48px;
}

.navbar .navbar-nav .nav-link:not(.btn) {
  text-transform: uppercase;
  font-size: 0.7142em;
  padding: 0.5rem 0.7rem;
  line-height: 1.625rem;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab+p,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons+p {
  margin-left: 3px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.fab,
.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
  font-size: 18px;
  position: relative;
  top: 3px;
  text-align: center;
  width: 21px;
}

.navbar .navbar-nav .nav-link:not(.btn) i.now-ui-icons {
  top: 4px;
  font-size: 16px;
}

.navbar .navbar-nav .nav-item .nav-link:not(.btn):focus,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):hover,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):active {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 0.1875rem;
}

.navbar .navbar-brand {
  text-transform: uppercase;
  font-size: 0.8571em;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  line-height: 1.625rem;
}

.navbar .navbar-toggler {
  width: 37px;
  height: 27px;
  outline: 0;
  cursor: pointer;
}

.navbar .navbar-toggler .navbar-toggler-bar.middle-bar {
  width: 17px;
  transition: width .2s linear;
}

.navbar .navbar-toggler:hover .navbar-toggler-bar.middle-bar {
  width: 22px;
}

.navbar .button-dropdown .navbar-toggler-bar:nth-child(2) {
  width: 17px;
}

.navbar.navbar-transparent {
  background-color: transparent !important;
  box-shadow: none;
  color: #FFFFFF;
  padding-top: 20px !important;
}

.bg-primary {
  background-color: #f96332 !important;
}

.dropdown-menu {
  border: 0;
  box-shadow: 0px 10px 50px 0px rgba(0, 0, 0, 0.2);
  border-radius: 0.125rem;
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
  font-size: 14px;
}

.dropdown .dropdown-menu {
  -webkit-transform: translate3d(0, -25px, 0) !important;
  -moz-transform: translate3d(0, -25px, 0) !important;
  -o-transform: translate3d(0, -25px, 0) !important;
  -ms-transform: translate3d(0, -25px, 0) !important;
  transform: translate3d(0, -25px, 0) !important;
  visibility: hidden;
  display: block;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 100% !important;
}

.dropdown-menu .dropdown-item {
  font-size: 0.8571em;
  padding-top: .6rem;
  padding-bottom: .6rem;
  margin-top: 5px;
  -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
  background-color: rgba(222, 222, 222, 0.3);
}

.dropdown-menu .dropdown-item:disabled {
  color: rgba(182, 182, 182, 0.6);
}

.dropdown-menu .dropdown-item:disabled:hover,
.dropdown-menu .dropdown-item:disabled:focus {
  background-color: transparent;
}

.dropdown-menu:before {
  display: inline-block;
  position: absolute;
  width: 0;
  height: 0;
  vertical-align: middle;
  content: "";
  top: -5px;
  left: 10px;
  right: auto;
  color: #FFFFFF;
  border-bottom: .4em solid;
  border-right: .4em solid transparent;
  border-left: .4em solid transparent;
}

.dropdown-menu .dropdown-divider {
  background-color: rgba(222, 222, 222, 0.5);
}

.dropdown-menu .dropdown-header:not([href]):not([tabindex]) {
  color: rgba(182, 182, 182, 0.6);
  font-size: 0.7142em;
  text-transform: uppercase;
  font-weight: 700;
}

.button-dropdown {
  padding-right: 0.7rem;
  cursor: pointer;
}

.button-dropdown .dropdown-toggle {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  display: block;
}

.button-dropdown .dropdown-toggle:after {
  display: none;
}

img {
  max-width: 100%;
  border-radius: 1px;
}

.img-raised {
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
}

.footer {
  padding: 24px 0;
}

.footer.footer-default {
  background-color: #f2f2f2;
}

.footer nav {
  display: inline-block;
  float: left;
}

.footer ul {
  margin-bottom: 0;
  padding: 0;
  list-style: none;
}

.footer ul li {
  display: inline-block;
}

.footer ul li a {
  color: inherit;
  padding: 0.5rem;
  font-size: 0.8571em;
  text-transform: uppercase;
  text-decoration: none;
}

.footer ul li a:hover {
  text-decoration: none;
}

.footer .copyright {
  font-size: 0.8571em;
}

.footer:after {
  display: table;
  clear: both;
  content: " ";
}

.landing-page .header {
  height: 100vh;
  position: relative;
}

.landing-page .header .container {
  padding-top: 26vh;
  color: #FFFFFF;
  z-index: 2;
  position: relative;
}

.landing-page .header h1 {
  font-weight: 600;
}

.landing-page .header .title {
  color: #FFFFFF;
}

.landing-page .section-team .team .team-player img {
  max-width: 100px;
}

.landing-page .section-team .team-player {
  margin-bottom: 15px;
}

.landing-page .section-contact-us .title {
  margin-bottom: 15px;
}

.landing-page .section-contact-us .description {
  margin-bottom: 30px;
}

.landing-page .section-contact-us .input-group,
.landing-page .section-contact-us .send-button,
.landing-page .section-contact-us .textarea-container {
  padding: 0 40px;
}

.landing-page .section-contact-us .textarea-container {
  margin: 40px 0;
}

.landing-page .section-contact-us a.btn {
  margin-top: 35px;
}

.section {
  padding: 70px 0;
  position: relative;
  background: #FFFFFF;
}

.section .row+.category {
  margin-top: 15px;
}

.page-header {
  min-height: 100vh;
  max-height: 999px;
  padding: 0;
  color: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.page-header.page-header-small {
  min-height: 60vh;
  max-height: 440px;
}

.page-header:before {
  background-color: rgba(0, 0, 0, 0.3);
}

.page-header>.container {
  z-index: 2;
  padding-top: 12vh;
  padding-bottom: 40px;
}

.page-header .page-header-image {
  position: absolute;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.page-header .content-center {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  -ms-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  color: #FFFFFF;
  padding: 0 15px;
  width: 100%;
  max-width: 880px;
}

.page-header footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}

.page-header .container {
  height: 100%;
  z-index: 1;
  text-align: center;
  position: relative;
}

.page-header .category,
.page-header .description {
  color: rgba(255, 255, 255, 0.8);
}

.page-header:after,
.page-header:before {
  position: absolute;
  z-index: 0;
  width: 100%;
  height: 100%;
  display: block;
  left: 0;
  top: 0;
  content: "";
}

.section-story-overview {
  padding: 50px 0;
}

.section-story-overview .image-container {
  height: 335px;
  position: relative;
  background-position: center center;
  background-size: cover;
  box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.3);
  border-radius: .25rem;
}

.section-story-overview .image-container+.category {
  padding-top: 15px;
}

.section-story-overview .image-container.image-right {
  z-index: 2;
}

.section-story-overview .image-container.image-right+h3.title {
  margin-top: 120px;
}

.section-story-overview .image-container.image-left {
  z-index: 1;
}

.section-story-overview .image-container:nth-child(2) {
  margin-top: 420px;
  margin-left: -105px;
}

.section-story-overview p.blockquote {
  width: 220px;
  min-height: 180px;
  text-align: left;
  position: absolute;
  top: 376px;
  right: 155px;
  z-index: 0;
}

[data-background-color="orange"] {
  background-color: #e95e38;
}

[data-background-color="black"] {
  background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .title,
[data-background-color]:not([data-background-color="gray"]) p,
[data-background-color]:not([data-background-color="gray"]) p.blockquote,
[data-background-color]:not([data-background-color="gray"]) p.blockquote small {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .separator {
  background-color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) h1,
[data-background-color]:not([data-background-color="gray"]) h2,
[data-background-color]:not([data-background-color="gray"]) h3,
[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) h5,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-text {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) .description {
  color: rgba(255, 255, 255, 0.8);
}

[data-background-color]:not([data-background-color="gray"]) p.blockquote {
  border-color: rgba(255, 255, 255, 0.2);
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-moz-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control::-webkit-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control:-ms-input-placeholder {
  color: #ebebeb;
  opacity: 1;
  filter: alpha(opacity=100);
}

[data-background-color]:not([data-background-color="gray"]) .form-control {
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .form-control:focus {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .input-group-text {
  background-color: transparent;
  border-color: rgba(255, 255, 255, 0.5);
  color: #FFFFFF;
}

@media screen and (max-width: 991px) {
  .sidebar-collapse .navbar-collapse {
    position: fixed;
    display: block;
    top: 0;
    height: 100% !important;
    width: 300px;
    right: 0;
    z-index: 1032;
    visibility: visible;
    background-color: #999;
    overflow-y: visible;
    border-top: none;
    text-align: left;
    max-height: none !important;
    -webkit-transform: translate3d(300px, 0, 0);
    -moz-transform: translate3d(300px, 0, 0);
    -o-transform: translate3d(300px, 0, 0);
    -ms-transform: translate3d(300px, 0, 0);
    transform: translate3d(300px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .sidebar-collapse .navbar-collapse:before {
    background: #f96332;
    background: -webkit-linear-gradient(#f96332 0%, #000 80%);
    background: -o-linear-gradient(#f96332 0%, #000 80%);
    background: -moz-linear-gradient(#f96332 0%, #000 80%);
    background: linear-gradient(#f96332 0%, #000 80%);
    opacity: 0.76;
    filter: alpha(opacity=76);
    display: block;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
    margin: 0 1rem;
    margin-top: 0.3125rem;
  }

  .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn) {
    color: #FFFFFF !important;
  }

  .sidebar-collapse .navbar-collapse .dropdown-menu .dropdown-item {
    color: #FFFFFF;
  }

  .sidebar-collapse .navbar .navbar-nav {
    margin-top: 53px;
    position: relative;
    max-height: calc(100vh - 75px);
    min-height: 100%;
    overflow: auto;
  }

  .sidebar-collapse .navbar .dropdown .dropdown-menu {
    background-color: transparent;
    border: 0;
    transition: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    width: auto;
    margin: 0 1rem;
    margin-bottom: 15px;
    padding-top: 0;
    height: 125px;
    overflow-y: scroll;
  }

  .sidebar-collapse .navbar .dropdown .dropdown-menu:before {
    display: none;
  }

  .sidebar-collapse .navbar .dropdown .dropdown-item {
    padding-left: 2.5rem;
  }

  .sidebar-collapse .navbar .dropdown .dropdown-menu {
    display: none;
  }

  .sidebar-collapse .navbar .dropdown-menu .dropdown-item:focus,
  .sidebar-collapse .navbar .dropdown-menu .dropdown-item:hover {
    color: #FFFFFF;
    border-radius: 0.1875rem;
  }

  .sidebar-collapse .navbar .navbar-translate {
    width: 100%;
    position: relative;
    display: flex;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translate3d(0px, 0, 0);
    -moz-transform: translate3d(0px, 0, 0);
    -o-transform: translate3d(0px, 0, 0);
    -ms-transform: translate3d(0px, 0, 0);
    transform: translate3d(0px, 0, 0);
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .sidebar-collapse .navbar .navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 1px;
    border-radius: 1px;
    background: #FFFFFF;
  }

  .sidebar-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
    margin-top: 7px;
  }

  .sidebar-collapse .top-bar {
    transform: rotate(0);
  }

  .sidebar-collapse .middle-bar {
    opacity: 1;
  }

  .sidebar-collapse .bottom-bar {
    transform: rotate(0);
  }

  .sidebar-collapse .top-bar,
  .sidebar-collapse .middle-bar,
  .sidebar-collapse .bottom-bar {
    transition: all 0.2s;
  }

  .sidebar-collapse [class*="navbar-expand-"] .navbar-collapse {
    width: 300px;
  }

  .sidebar-collapse .wrapper {
    -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
  }

  .navbar-nav .nav-link i.fab,
  .navbar-nav .nav-link i.now-ui-icons {
    opacity: .5;
  }

  .button-dropdown {
    display: none;
  }

  .footer .copyright {
    text-align: right;
  }

  .navbar-nav .nav-link i.now-ui-icons {
    opacity: .5;
  }
}

@media screen and (min-width: 992px) {
  .navbar-collapse:not(.has-image) {
    background: transparent !important;
  }

  .navbar-nav .nav-link.btn:not(.btn-sm) {
    margin: 0;
  }

  .navbar-nav .nav-item:not(:last-child) {
    margin-right: 5px;
  }

  .dropdown-menu .dropdown-item {
    color: inherit;
    display: flex;
    align-items: center;
  }

  .dropdown-menu .dropdown-item i {
    margin-right: 5px;
    position: relative;
    top: 1px;
  }

  .footer .copyright {
    float: right;
  }
}

@media screen and (min-width: 768px) {
  .image-container.image-right {
    top: 80px;
    margin-left: -100px;
    margin-bottom: 130px;
  }

  .image-container.image-left {
    margin-right: -100px;
  }
}

@media screen and (max-width: 768px) {
  .image-container.image-left {
    margin-bottom: 220px;
  }

  .image-container.image-left p.blockquote {
    margin: 0 auto;
    position: relative;
    right: 0;
  }

  .landing-page .section-story-overview .image-container:nth-child(2) {
    margin-left: 0;
    margin-bottom: 30px;
  }
}

@media screen and (max-width: 576px) {
  .navbar[class*='navbar-expand-'] .container {
    margin-left: 0;
    margin-right: 0;
  }

  .footer .copyright {
    text-align: center;
  }
}

@media (max-width: 768px) {
  .btn {
    margin-bottom: 10px;
  }
}

#navbar .navbar {
  margin-bottom: 20px;
}

#navbar .navbar-toggler {
  pointer-events: none;
}

@font-face {
  font-family: 'Nucleo Outline';
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
  src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
  font-weight: normal;
  font-style: normal;

}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
  </style>
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          Now Ui Kit
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Back to Kit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg6.jpg');">
      </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">This is our great company.</h1>
          <div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-google-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Who we are?</h2>
            <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
          </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/login.jpg')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                  <br>
                  <br>
                  <small>-NOAA</small>
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container" style="background-image: url('https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg3.jpg')"></div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/bg1.jpg')"></div>
              <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
              <p>
                For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
              </p>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-team text-center">
      <div class="container">
        <h2 class="title">Here is our team</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Romina Hadid</h4>
                <p class="category text-primary">Model</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Ryan Tompson</h4>
                <p class="category text-primary">Designer</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src="https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Eva Jenner</h4>
                <p class="category text-primary">Fashion</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-youtube"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-contact-us text-center">
      <div class="container">
        <h2 class="title">Want to work with us?</h2>
        <p class="description">Your project is very important to us.</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="First Name...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
            </div>
            <div class="send-button">
              <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-default">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          <p>Made with <a href="https://demos.creative-tim.com/now-ui-kit/index.html" target="_blank">Now UI Kit</a> by Creative Tim</p>
        </div>
      </div>
    </footer>
  </div>
<script>var transparent = true;
var big_image;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized,
  backgroundOrange = false,
  toggle_initialized = false;

var nowuiKit,
  $navbar,
  scroll_distance,
  oVal;

$(document).ready(function() {
  //  Activate the Tooltips
  $('[data-toggle="tooltip"], [rel="tooltip"]').tooltip();

  // Activate Popovers and set color for popovers
  $('[data-toggle="popover"]').each(function() {
    color_class = $(this).data('color');
    $(this).popover({
      template: '<div class="popover popover-' + color_class + '" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
    });
  });

  // Activate the image for the navbar-collapse
  nowuiKit.initNavbarImage();

  $navbar = $('.navbar[color-on-scroll]');
  scroll_distance = $navbar.attr('color-on-scroll') || 500;

  // Check if we have the class "navbar-color-on-scroll" then add the function to remove the class "navbar-transparent" so it will transform to a plain color.

  if ($('.navbar[color-on-scroll]').length != 0) {
    nowuiKit.checkScrollForTransparentNavbar();
    $(window).on('scroll', nowuiKit.checkScrollForTransparentNavbar)
  }

  $('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
  }).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
  });

  // Activate bootstrapSwitch
  $('.bootstrap-switch').each(function() {
    $this = $(this);
    data_on_label = $this.data('on-label') || '';
    data_off_label = $this.data('off-label') || '';

    $this.bootstrapSwitch({
      onText: data_on_label,
      offText: data_off_label
    });
  });

  if ($(window).width() >= 992) {
    big_image = $('.page-header-image[data-parallax="true"]');

    $(window).on('scroll', nowuiKitDemo.checkScrollForParallax);
  }

  // Activate Carousel
  $('.carousel').carousel({
    interval: 4000
  });

  $('.date-picker').each(function() {
    $(this).datepicker({
      templates: {
        leftArrow: '<i class="now-ui-icons arrows-1_minimal-left"></i>',
        rightArrow: '<i class="now-ui-icons arrows-1_minimal-right"></i>'
      }
    }).on('show', function() {
      $('.datepicker').addClass('open');

      datepicker_color = $(this).data('datepicker-color');
      if (datepicker_color.length != 0) {
        $('.datepicker').addClass('datepicker-' + datepicker_color + '');
      }
    }).on('hide', function() {
      $('.datepicker').removeClass('open');
    });
  });


});

// Javascript just for Demo purpose, remove it from your project
nowuiKitDemo = {
  checkScrollForParallax: debounce(function() {
    var current_scroll = $(this).scrollTop();

    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });

  }, 6)

}

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};

$(window).on('resize', function() {
  nowuiKit.initNavbarImage();
});

$(document).on('click', '.navbar-toggler', function() {
  $toggle = $(this);

  if (nowuiKit.misc.navbar_menu_visible == 1) {
    $('html').removeClass('nav-open');
    nowuiKit.misc.navbar_menu_visible = 0;
    $('#bodyClick').remove();
    setTimeout(function() {
      $toggle.removeClass('toggled');
    }, 550);
  } else {
    setTimeout(function() {
      $toggle.addClass('toggled');
    }, 580);
    div = '<div id="bodyClick"></div>';
    $(div).appendTo('body').click(function() {
      $('html').removeClass('nav-open');
      nowuiKit.misc.navbar_menu_visible = 0;
      setTimeout(function() {
        $toggle.removeClass('toggled');
        $('#bodyClick').remove();
      }, 550);
    });

    $('html').addClass('nav-open');
    nowuiKit.misc.navbar_menu_visible = 1;
  }
});

nowuiKit = {
  misc: {
    navbar_menu_visible: 0
  },

  checkScrollForTransparentNavbar: debounce(function() {
    if ($(document).scrollTop() > scroll_distance) {
      if (transparent) {
        transparent = false;
        $('.navbar[color-on-scroll]').removeClass('navbar-transparent');
      }
    } else {
      if (!transparent) {
        transparent = true;
        $('.navbar[color-on-scroll]').addClass('navbar-transparent');
      }
    }
  }, 17),

  initNavbarImage: function() {
    var $navbar = $('.navbar').find('.navbar-translate').siblings('.navbar-collapse');
    var background_image = $navbar.data('nav-image');

    if (background_image != undefined) {
      if ($(window).width() < 991 || $('body').hasClass('burger-menu')) {
        $navbar.css('background', "url('" + background_image + "')")
          .removeAttr('data-nav-image')
          .css('background-size', "cover")
          .addClass('has-image');
      } else {
        $navbar.css('background', "")
          .attr('data-nav-image', '' + background_image + '')
          .css('background-size', "")
          .removeClass('has-image');
      }
    }
  },

  initSliders: function() {
    // Sliders for demo purpose in refine cards section
    var slider = document.getElementById('sliderRegular');

    noUiSlider.create(slider, {
      start: 40,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });

    var slider2 = document.getElementById('sliderDouble');

    noUiSlider.create(slider2, {
      start: [20, 60],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  }
}

// Javascript just for Demo purpose, remove it from your project
nowuiKitDemo = {
  checkScrollForParallax: debounce(function() {
    var current_scroll = $(this).scrollTop();

    oVal = ($(window).scrollTop() / 3);
    big_image.css({
      'transform': 'translate3d(0,' + oVal + 'px,0)',
      '-webkit-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-ms-transform': 'translate3d(0,' + oVal + 'px,0)',
      '-o-transform': 'translate3d(0,' + oVal + 'px,0)'
    });

  }, 6)

}

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    }, wait);
    if (immediate && !timeout) func.apply(context, args);
  };
};</script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>