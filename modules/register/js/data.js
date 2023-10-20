
$(document).ready(function () {
  $(document).on("submit", "#register", function (e) {
    e.preventDefault();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();
    var emailreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (fname == "") {
      alert("Firstname is required")
      return false;
    } else if (lname == "") {
      alert("Lastname is required")
      return false;
    } else if (email == "") {
      alert("Email is required")
      return false;
    } else if (!emailreg.test(email)) {
      alert("Invalid email address");
      return false;
    } else if (pass == "") {
      alert("Password is required")
      return false;
    }  else if (cpass == "") {
      alert("Confirm password is required")
      return false;
    } else if (pass !== cpass) {
      alert("Password not matched yet!")
      return false;
    } else {
      $.ajax({
        url: "modules/register/data.php",
        type: 'post',
        data: new FormData(this),
        contentType: false,
        processData: false,
        cache: false,
        success: function (data) {
          $('#response').html(data);
        },
      });
    }
  });
});



