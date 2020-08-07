<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #3cb371;
    }

    #regForm {
        background-color: #ffffff;
        /* background-color: #3cb371; */
        text-align: center;
        margin: 40px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 350px;
    }

    @media only screen and (min-width: 1600px) {
        #regForm {
            background-color: #ffffff;
            /* background-color: #3cb371; */
            text-align: center;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 60%;
            min-width: 500px;
        }

        input {
            padding: 10px;
            width: 70%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }
    }

    h2,
    h4,
    .tgh {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 70%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    @media only screen and (max-width: 767px) {
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: -15px;
        margin-top: -30px;
    }

    .demoInputBox {
        padding: 10px;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
        width: 100%;
    }
</style>

<body>

    <form id="regForm" method="post" action="<?= base_url('pembukaan-rekening-tabungan'); ?>" enctype="multipart/form-data">
        <div class="row">
            <img class="center" src="<?= base_url('assets/img/logo/logo-bpr.png'); ?>" alt="">
            <h4>BPR Unisritama</h4>
        </div>
        <h2>Formulir Pembukaan Rekening Tabungan:</h2>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Personal Info:
            <p><input placeholder="Nama Lengkap..." oninput="this.className = ''" name="nm_lengkap"></p>
            <p><input placeholder="Nama Identitas..." oninput="this.className = ''" name="nm_identitas"></p>
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="no_hp"></p>

        </div>
        <div class="tab">Contact Info:
        </div>
        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>