function sendMail() {
    var params={
        from_name : document.getElementById("fullName").value,
        email_id : document.getElementById("email").value,
        date : document.getElementById("date").value,
        message : document.getElementById("message").value

    }
    emailjs.send("service_w965qyf", params).then(function (res) {
        alert("Success! " + res.status);
    })
}