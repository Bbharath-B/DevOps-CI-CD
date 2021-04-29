window.onload = function() {
	"use strict";

    var contactForm = document.getElementById("contactForm");

    contactForm.addEventListener("submit", function(e){

        e.preventDefault();

        var name = document.getElementById("name");
        var email = document.getElementById("email");
        var subject = document.getElementById("subject");
        var message = document.getElementById("message");
        var response_container = document.getElementById("response_container");

        response_container.innerHTML = '';

        const formData = new FormData();
            formData.append("name", name.value);
            formData.append("email", email.value);
            formData.append("subject", subject.value);
            formData.append("message", message.value);

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(response) {
				if (this.readyState == 4 && this.status == 200) {
					var res = JSON.parse(this.responseText);
                    if(res.response == "ok") {
                        response_container.innerHTML = res.message;
                        contactForm.reset();
                    } else {
                        response_container.innerHTML = res.message;
                    }
				}
			};
			xhttp.open("POST", "/contact/", true);
			xhttp.send(formData);
    });
    
};