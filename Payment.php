<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="payment.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/mystyle.css">
    <script src="/Java/myscript.js"></script>
    <title>Payment Page</title>
    <script>
        function validatepay() {
    let fn = document.getElementById("full");
    let el = document.getElementById("email");
    let add = document.getElementById("addd");
    let c = document.getElementById("city");
    let st = document.getElementById("state");
    let zip = document.getElementById("code");
    let noc = document.getElementById("nameon");
    let ccn = document.getElementById("ccnn");
    let em = document.getElementById("exmounth");
    let ey = document.getElementById("exy");
    let cvv = document.getElementById("cvcvc");

    let resetup = true;

    let fullName = fn.value.trim();
    let email = el.value.trim();
    let address = add.value.trim();
    let city = c.value.trim();
    let state = st.value.trim();
    let zipCode = zip.value.trim();
    let nameOnCard = noc.value.trim();
    let creditCardNumber = ccn.value.trim();
    let expMonth = em.value.trim();
    let expYear = ey.value.trim();
    let cvvNumber = cvv.value.trim();

    if (!validateName(nameOnCard)) {
        noc.placeholder = "Please Enter a Valid Name on Card";
        resetup = false;
    }

    if (!validateEmail(email)) {
        el.placeholder = "Please Enter a Valid Email";
        resetup = false;
    }

    if (!validateName(fullName)) {
        fn.placeholder = "Please Enter a Valid Name";
        resetup = false;
    }

    if (fullName === "") {
        fn.placeholder = "Please Enter Your Name";
        resetup = false;
    }

    if (email === "") {
        el.placeholder = "Please Enter Your Email";
        resetup = false;
    }

    if (address === "") {
        add.placeholder = "Please Enter Your Address";
        resetup = false;
    }

    if (city === "") {
        c.placeholder = "Please Enter Your City";
        resetup = false;
    }

    if (state === "") {
        st.placeholder = "Please Enter Your State";
        resetup = false;
    }

    if (zipCode === "") {
        zip.placeholder = "Please Enter Zip Code";
        resetup = false;
    }

    if (isNaN(zipCode) || zipCode <= 0) {
        zip.value = '';
        zip.placeholder = "Please Enter Correct Zip Code";
        resetup = false;
    }

    if (creditCardNumber === "") {
        ccn.placeholder = "Please Enter Credit Card Number";
        resetup = false;
    }

    if (isNaN(creditCardNumber) || creditCardNumber <= 0) {
        ccn.value = '';
        ccn.placeholder = "Please Enter Valid Credit Card Number";
        resetup = false;
    }

    if (expMonth === "") {
        em.placeholder = "Please Enter Exp Month";
        resetup = false;
    }

    if (isNaN(expMonth) || expMonth <= 0) {
        em.value = '';
        em.placeholder = "Please Enter Correct Exp Month";
        resetup = false;
    }

    if (expYear === "") {
        ey.placeholder = "Please Enter Exp Year";
        resetup = false;
    }

    if (isNaN(expYear) || expYear <= 0) {
        ey.value = '';
        ey.placeholder = "Please Enter Correct Exp Year";
        resetup = false;
    }

    if (cvvNumber === "") {
        cvv.placeholder = "Please Enter CVV";
        resetup = false;
    }

    if (isNaN(cvvNumber) || cvvNumber <= 0) {
        cvv.value = '';
        cvv.placeholder = "Please Enter Correct CVV";
        resetup = false;
    }

    if (!resetup) {
        return false;
    }

    alert("Payment successfully\nYour ticket number is: 4111\n");
    window.location.href = 'index2';
    return true;
}
    </script>
   
     

</head>

<body id="body-pay">
    <div class="container-pay">
        <form onsubmit="return validatepay()" action="../Routes/submitpay" method="post">
            <div class="row-pay">
                <div class="col-pay">
                    <h3 class="title-pay">Billing Address</h3>

                    <div class="inputbox-pay">
                        <label for="full">Name:</label>
                        <input type="text" placeholder="Enter Your Name" id="full" maxlength="50" name="name" required>
                    </div>

                    <div class="inputbox-pay">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="example@example.com" id="email" name="email" required>
                    </div>

                    <div class="inputbox-pay">
                        <label for="addd">Address:</label>
                        <input type="text" placeholder="Enter Your Address" id="addd" name="address" required>
                    </div>

                    <div class="inputbox-pay">
                        <label for="city">City:</label>
                        <input type="text" placeholder="Enter Your City" id="city" name="city" required>
                    </div>

                    <div class="flex-pay">
                        <div class="inputbox-pay" style="flex: 2;">
                            <label for="state">State:</label>
                            <input type="text" placeholder="Enter Your State" id="state" name="state" required>
                        </div>

                        <div class="inputbox-pay" style="flex: 1;">
                            <label for="code">Zip Code:</label>
                            <input type="text" placeholder="12345" id="code" pattern="\d{5}|\d{5}-\d{4}" name="zipCode" required>
                        </div>
                    </div>
                </div>

                <div class="col-pay">
                    <h3 class="title-pay">Payment</h3>

                    <div class="inputbox-pay">
                        <label for="nameon">Name on Card:</label>
                        <input type="text" placeholder="Name on Card" id="nameon" name="nameOnCard" required>
                    </div>

                    <div class="inputbox-pay">
                        <label for="ccnn">Credit Card Number:</label>
                        <input type="text" placeholder="1111-2222-3333-4444" id="ccnn" pattern="\d{4}-\d{4}-\d{4}-\d{4}" name="cardNumber" required>
                    </div>

                    <div class="flex-pay">
                        <div class="inputbox-pay">
                            <label for="exmonth">Exp Month:</label>
                            <input type="number" placeholder="MM" id="exmonth" min="1" max="12" name="expMonth" required>
                        </div>

                        <div class="inputbox-pay">
                            <label for="exy">Exp Year:</label>
                            <input type="number" placeholder="YY" id="exy" min="24" max="35" name="expYear" required>
                        </div>
                    </div>

                    <div class="inputbox-pay">
                        <label for="cvcvc">CVV:</label>
                        <input type="text" placeholder="123" id="cvcvc" pattern="\d{3}" name="cvv" required>
                    </div>
                </div>
            </div>
            <input type="submit" value="Pay Now" class="submit-btn">
        </form>
    </div>
</body>
</html>
