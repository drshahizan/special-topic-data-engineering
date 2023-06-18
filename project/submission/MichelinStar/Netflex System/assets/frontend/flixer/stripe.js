var currency = "";
function get_stripe_currency(currencyCode) {
  currency = currencyCode;
  console.log(currencyCode);
}

var stripe = Stripe(stripe_key);
var elements = stripe.elements();

var card = elements.create("card", {
    iconStyle: "solid",
    style: {
        base: {
            iconColor: "#8898AA",
            color: "white",
            lineHeight: "36px",
            fontWeight: 300,
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSize: "19px",

            "::placeholder": {
                color: "#8898AA"
            }
        },
        invalid: {
            iconColor: "#e85746",
            color: "#e85746"
        }
    },
    classes: {
        focus: "is-focused",
        empty: "is-empty"
    }
});

card.currency = currency
card.mount("#card-element");
var inputs = document.querySelectorAll("input.field");
Array.prototype.forEach.call(inputs, function(input) {
    input.addEventListener("focus", function() {
        input.classList.add("is-focused");
    });
    input.addEventListener("blur", function() {
        input.classList.remove("is-focused");
    });
    input.addEventListener("keyup", function() {
        if (input.value.length === 0) {
            input.classList.add("is-empty");
        } else {
            input.classList.remove("is-empty");
        }
    });
});

var form = document.querySelector("form");
function setOutcome(result) {
    var successElement = document.querySelector(".success");
    var errorElement = document.querySelector(".error");
    successElement.classList.remove("visible");
    errorElement.classList.remove("visible");

    if (result.token) {
        // Use the token to create a charge or a customer
        // https://stripe.com/docs/charges
        //successElement.querySelector(".token").textContent = result.token.id;
        form.querySelector("input[name=stripeToken]").value = result.token.id;
        form.submit();
        //successElement.classList.add("visible");
    } else if (result.error) {
        errorElement.textContent = result.error.message;
        errorElement.classList.add("visible");
    }
}

card.on("change", function(event) {
    setOutcome(event);
});

document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault();
    var extraDetails = {
        //name: form.querySelector("input[name=cardholder-name]").value
    };
    stripe.createToken(card, extraDetails).then(setOutcome);
});
