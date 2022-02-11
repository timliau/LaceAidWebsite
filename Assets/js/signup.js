const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    alert("user is signed in");

    var user = firebase.auth().currentUser;

    if(user != null){

      window.location.href = "index.html";

    }

  } else {
    // No user is signed in.
    console.log("no user is signed in")
  }
});


sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function login(){

  var userEmail = document.getElementById("mEmail").value;
  var userPass = document.getElementById("mPassword").value;
  console.log(userEmail);
  console.log(userPass);

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    window.alert("Error : " + errorMessage);
  });

}

function signup(){

  var userEmail = document.getElementById("pemail").value;
  var userPass = document.getElementById("ppassword").value;

  firebase.auth().createUserWithEmailAndPassword(userEmail, userPass)
  .then((userCredential) => {
    // Signed in 
    var user = userCredential.user;
    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    // ..
    window.alert("Error : " + errorMessage);
  });
}