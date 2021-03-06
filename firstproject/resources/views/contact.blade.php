<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>@charset "UTF-8";
/*PEN STYLES*/
body {
  background: #f1f1f1;
  margin-top: 2rem;
}

.contactForm {
  border-radius: 4px;
  box-sizing: border-box;
  margin: auto;
  max-width: 450px;
  overflow: hidden;
  /*SUCESS STYLES*/
}
.contactForm .formHeader {
  background: #54428E;
  border-bottom: 4px solid #54428E;
  color: #fff;
  text-align: center;
  overflow: hidden;
  /*TRANSITION*/
  transition: all 0.5s ease;
}
.contactForm .formHeader h1 {
  line-height: 1em;
}
.contactForm .formBody {
  background: #fff;
  padding: 20px 12px;
  overflow: hidden;
  /*TRANSITION*/
  transition: all 0.2s ease;
}
.contactForm .inputContainer {
  border: 1px solid #ccc;
  border-radius: 3px;
  position: relative;
  margin-bottom: 5px;
  overflow: hidden;
  background: transparent;
}
.contactForm .inputContainer .message {
  color: #FF5C5C;
  background: #FF5C5C;
  position: absolute;
  top: 0;
  bottom: 0;
  width: 0;
  margin: 0;
  line-height: 2.5em;
  text-align: center;
  overflow: hidden;
  /*TRANSITION*/
  transition: all 0.1s ease;
}
.contactForm .inputContainer label,
.contactForm .inputContainer input,
.contactForm .inputContainer textarea {
  box-sizing: border-box;
  padding: 10px;
  font-size: 14px;
  line-height: 1em;
  border: none;
  font: inherit;
}
.contactForm .inputContainer label {
  display: inline-block;
  font-size: 0.7em;
  background: #ccc;
  color: rgba(0, 0, 0, 0.3);
  line-height: 1.75em;
  border-right: 1px solid #ccc;
  /*POSITION*/
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
}
.contactForm .inputContainer textarea,
.contactForm .inputContainer input {
  width: 100%;
  max-width: 100%;
}
.contactForm .inputContainer textarea {
  margin-bottom: -5px;
}
.contactForm .inputContainer input {
  padding-left: 50px;
}
.contactForm .submitBtn {
  background: #54428E;
  color: #fff;
  border: none;
  border-radius: 3px;
  font: inherit;
  padding: 10px 18px;
  margin-top: 10px;
  float: right;
  width: auto;
  /*TRANSITION*/
  transition: background 0.5s ease;
}
.contactForm .submitBtn:hover {
  background: #54428E;
}
.contactForm.success {
  overflow: hidden;
}
.contactForm.success .formHeader {
  background: #0A8754;
  border-color: #0A8754;
  font-size: 0.75em;
}
.contactForm.success .formBody {
  height: 0;
  padding-top: 0;
  padding-bottom: 0;
}
.contactForm.success .formBody form {
  /*TRANSITION*/
  transition: opacity 0.5s ease;
  opacity: 0;
}
.contactForm .inputContainer.success {
  border-color: #82E682;
}
.contactForm .inputContainer.success:after {
  font: 1.25em/2em FontAwesome;
  color: #82E682;
  position: absolute;
  top: 0;
  right: 10px;
  content: "???";
}
.contactForm .inputContainer.success label {
  background: #82E682;
  border-color: #82E682;
}
.contactForm .inputContainer.success input,
.contactForm .inputContainer.success textarea {
  color: #0A8754;
}
.contactForm .inputContainer.error {
  border-color: #FF5C5C;
}
.contactForm .inputContainer.error .message {
  width: 100%;
}
.contactForm .inputContainer.error:after {
  font: 1.25em/2em FontAwesome;
  color: #FF5C5C;
  position: absolute;
  top: 0;
  right: 10px;
  content: "???";
}
.contactForm .inputContainer.error label {
  background: #FF5C5C;
  border-color: #FF5C5C;
}
.contactForm .inputContainer.error input,
.contactForm .inputContainer.error textarea {
  color: #FF5C5C;
}</style>
</head>
  <body>
  <!--PEN CODE-->
<div id="contactForm" class="contactForm">
	<div id="formHeader" class="formHeader">
		<h1 id="message">Contact Me</h1>
	</div>
	<div id="formBody" class="formBody">
		<form action="" method="POST" name="contactForm">
			<div class="inputContainer">
				<label for="userName">
					<i class="fa fa-lg fa-fw fa-user"></i>
				</label>
				<input name="name" id="userName" type="text" placeholder="John Smith">
			</div>
			<div class="inputContainer">
				<label for="userEmail">
					<i class="fa fa-lg fa-fw fa-envelope"></i>
				</label>
				<input name="email" id="userEmail" type="email" placeholder="jsmith@domain.com">
			</div>
			<div class="inputContainer">
				<textarea name="feedback" id="userMessage" rows="10" placeholder="Enter your message"></textarea>
			</div>
			<input id="submitBtn" class="submitBtn" type="submit" value="Send">
		</form>
	</div>
</div>
<center><p><em>NOTE: This form is for presentation only. Any form data entered is not submitted</em></p></center>
<!--END PEN CODE-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
       (function() {
	"use strict";
	var //GLOBAL VARIABLES
	input,
			container,
			//CSS CLASSES
			classSuccess = "success",
			classError = "error",
			//FORM VALIDATOR
			formValidator = {
				init: function() {
					this.cacheDom();
					this.bindEvents();
				},
				cacheDom: function() {
					//MAIN PARENT ELEMENT
					this.contactForm = document.getElementById("contactForm");
					//MAIN FORM ELEMENTS
					this.formHeader = document.querySelector("#formHeader h1");
					this.formBody = document.getElementById("formBody");
					this.inputContainer = document.getElementsByClassName("inputContainer");
					//USER INPUT ELEMENTS
					//INPUT FIELDS
					this.fields = {
						userName: document.getElementById("userName"),
						userEmail: document.getElementById("userEmail"),
						userMessage: document.getElementById("userMessage")
					};
					this.submitBtn = document.getElementById("submitBtn");
				},
				bindEvents: function() {
					var i;
					//RUN RULES ON SUBMIT BUTTON CLICK
					this.submitBtn.onclick = this.runRules.bind(this);
					//BIND EVENTS TO EACH INPUT FIELD
					for (i in this.fields) {
						if (this.fields.hasOwnProperty(i)) {
							//VARIABLES
							input = this.fields[i];
							container = input.parentElement;
							//RUN RULES WHEN INPUT HAS FOCUS
							input.onfocus = this.runRules.bind(this);
							//RESET ERRORS WHEN CONTAINER IS CLICKED
							container.onclick = this.resetErrors.bind(this, input);
						}
					}
				},
				runRules: function(evnt) {
					var target = evnt.target,
							type = evnt.type;
					//IF EVENT ON SUBMIT BUTTON
					if (target === this.submitBtn) {
						//PREVENT FORM SUBMITTION
						this.preventDefault(evnt);
						//IF INPUT HAS FOCUS
					} else if (type === "focus") {
						//RESET CLASSLIST
						this.resetClassList(target.parentElement);
						//RESET ERRORS
						this.resetErrors(target);
						return false;
					}
					//RESET CLASSLIST
					this.resetClassList();
					//CHECK FIELDS
					this.checkFields();
				},
				preventDefault: function(evnt) {
					//PREVENT DEFUALT
					evnt.preventDefault();
				},
				checkFields: function() {
					var i,
							validCount = 0,
							//EMAIL FILTER 
							filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					//CYLCE THROUGH INPUTS
					for (i in this.fields) {
						if (this.fields.hasOwnProperty(i)) {
							input = this.fields[i];
							//CHECK IF FIELD IS EMPTY
							if (input.value === "") {
								//ADD ERROR CLASS
								this.addClass(input, classError);
								//CHECK IF EMAIL IS VALID
							} else if (i === "userEmail" && !filter.test(input.value)) {
								//ADD ERROR CLASS
								this.addClass(input, classError);
							} else {
								//FIELD IS VALID
								this.addClass(input, classSuccess);
								validCount += 1;
							}
						}
					}
					//IF ALL FEILDS ARE VALID
					if (validCount === 3) {
						//SUBMIT FORM
						this.submitForm();
					}
				},
				addClass: function(input, clss) {
					container = input.parentElement;
					//IF INPUT HAS ERROR
					if (clss === classError) {
						//SHOW ERROR MESSAGE
						this.errorMessage(input);
					}
					//ADD CLASS
					input.parentElement.classList.add(clss);
				},
				errorMessage: function(input) {
					var message;
					//IF USERNAME HAS ERROR
					if (input === this.fields.userName) {
						message = "Please enter your name";
						//ELSE IF USEREMAIL HAS ERROR 
					} else if (input === this.fields.userEmail) {
						message = "Please enter a valid email";
						//ELSE IF USERMESSAGE HAS ERROR
					} else if (input === this.fields.userMessage) {
						message = "Please enter your feedback";
					}
					this.renderError(input, message);
				},
				renderError: function(input, message) {
					var html;
					//GET INPUT CONTAINER
					container = input.parentElement;
					//RENDER HTML
					html = document.createElement("div");
					html.setAttribute("class", "message");
					html.innerHTML = message;
					//IF MESSAGE ELEMENT DOESN'T EXIST
					if (!container.getElementsByClassName("message")[0]) {
						//INSERT MESSAGE TO INPUT CONTAINER
						container.insertBefore(html, container.firstElementChild);
					}
				},
				resetClassList: function(input) {
					var i;
					//IF TARGETING SPECIFIC INPUT
					if (input) {
						//GET INPUT CONTAINER
						container = input.parentElement;
						//REMOVE CLASSES
						container.classList.remove(classError, classSuccess);
						//FOCUS ON INPUT FIELD
						input.focus();
					} else {
						for (i in this.fields) {
							if (this.fields.hasOwnProperty(i)) {
								//REMOVE CLASSES FROM ALL FIELDS
								this.fields[i].parentElement.classList.remove(classError, classSuccess);
							}
						}
					}
				},
				resetErrors: function(input) {
					//GET INPUT CONTAINER
					container = input.parentElement;
					//IF CONTAINER CONTAINS ERROR
					if (container.classList.contains(classError)) {
						//RESET CLASSES
						this.resetClassList(input);
					}
				},
				submitForm: function() {
					var waitForAnimation;
					//ADD SUCCESS CLASS
					this.contactForm.classList.add(classSuccess);
					//WAIT FOR ANIMATION TO FINISH
					this.changeHeader("Sent Succesfully");
					//WAIT FOR ANIMATION TO FINISH
					setTimeout(this.changeHeader.bind(this, "Thank you for your feedback"), 1200);
				},
				changeHeader: function(text) {
					//CHANGE HEADER TEXT
					this.formHeader.innerHTML = text;
				}
			};
	//INITIATE FORM VALIDATOR
	formValidator.init();
}());
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>