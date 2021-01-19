// alert('hi');
function verifyphone() {
  var msgbox = document.getElementById('vermsgbox');
  msgbox.innerHTML = "<input type='text' size='7' class='text-center font-small' style='border:none; border-bottom:2px #bbb solid; background-color:#eee; margin-right:4px' placeholder='OTP' id='otpbox'><button type='button' class='btn btn-success p-0' onclick='otpfn()'>Send</button>";
  otpms = Math.floor((Math.random() * 999999) + 111111);
  console.log(otpms);
  const phoneNumber = '+917986574360';
  const appVerifier = window.recaptchaVerifier;
  firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
    .then((confirmationResult) => {
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
      // ...
    }).catch((error) => {
      // Error; SMS not sent
      // ...
    });

}
function otpfn() {
  enteredotp = document.getElementById('otpbox').value;
  if (enteredotp == otpms) {
    alert(otpms + 'correct');
    righticon = '<i class="far fa-check-circle success"></i>';
    document.getElementById('phverifymsg').innerHTML = righticon;
  }
  else {
    alert(otpms + 'incorrect');
  }
}
// Password hide show button
function togpassvisi() {
  var pasinput = document.getElementById("password");
  var eyebtn = document.getElementById('togvisi');
  var classes = eyebtn.getAttribute('class');
  eyebtn.removeAttribute('class');
  // console.log(classes);
  if (pasinput.type === "password") {
    pasinput.type = "text";
    eyebtn.setAttribute('class', 'fas fa-eye-slash hs');
  } else {
    pasinput.type = "password";
    eyebtn.setAttribute('class', 'fas fa-eye hs');
  }
}