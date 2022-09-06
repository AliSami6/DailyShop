      // Defining a function to display error message
      function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }

    // Defining a function to validate form
    function validateForm() {
        // Retrieving the values of form elements
        var name = document.contactForm.name.value;
        var email = document.contactForm.email.value;
        var subject = document.contactForm.subject.value;
        var company = document.contactForm.company.value;
        var msg = document.contactForm.msg.value;


        // Defining error variables with a default value
        var nameErr = emailErr = subjectErr = companyErr = msgErr = true;

        // Validate name
        if(name == "") {
            printError("nameErr", "Please enter your name");
        } else {
            var regex = /^[a-zA-Z\s]+$/;
            if(regex.test(name) === false) {
                printError("nameErr", "Please enter a valid name");
            } else {
                printError("nameErr", "");
                nameErr = false;
            }
        }


        // Validate email address
        if(email == "") {
            printError("emailErr", "Please enter your email address");
        } else {
            // Regular expression for basic email validation
            var regex = /^\S+@\S+\.\S+$/;
            if(regex.test(email) === false) {
                printError("emailErr", "Please enter a valid email address");
            } else{
                printError("emailErr", "");
                emailErr = false;
            }
        }

        // Validate subject
        if(subject == "") {
            printError("subjectErr", "Please enter your subject");
        } else {
            var regex = /^[a-zA-Z\s]+$/;
            if(regex.test(subject) === false) {
                printError("subjectErr", "Please enter a valid subject");
            } else {
                printError("subjectErr", "");
                subjectErr = false;
            }
        }
        // Validate subject
        if(company == "") {
            printError("companyErr", "Please enter your company");
        } else {
            var regex = /^[a-zA-Z\s]+$/;
            if(regex.test(company) === false) {
                printError("companyErr", "Please enter a valid company");
            } else {
                printError("companyErr", "");
                companyErr = false;
            }
        }
        // Validate msg
        if(msg == "") {
            printError("msgErr", "Please enter your msg");
        } else {
            var regex = /^[a-zA-Z\s]+$/;
            if(regex.test(msg) === false) {
                printError("msgErr", "Please enter a valid msg");
            } else {
                printError("msgErr", "");
                msgErr = false;
            }
        }

        // Prevent the form from being submitted if there are any errors
        if((nameErr || emailErr || companyErr || subjectErr || msgErr) == true) {
            return false;
        } else {
            // Creating a string from input data for preview
            var dataPreview = "You've entered the following details: \n" +
                            "Full Name: " + name + "\n" +
                            "Email Address: " + email + "\n" +
                            "Subject : " + subject + "\n" +
                            "Company: " + company + "\n" +
                            "Message: " + msg + "\n";

            // Display input data in a dialog box before submitting the form
            alert(dataPreview);
        }
    };
