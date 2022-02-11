// Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    console.log("user is signed in");

    var user = firebase.auth().currentUser;

    if(user != null){
      console.log("User is not null")
      // document.getElementById("hidelogin").style.display = "none";

      var change = document.getElementById('output');
      var tochange = '<li class="dropdown"><img src="./img/img_avatar.png" style="border-radius: 50%; height: 30px; margin-left: 4.5rem; width: 30px;" alt="Avatar"></a><ul><li><a href="../../updateprofile.html">Profile</a></li><li><a href="#">Measurement</a></li><li><a onclick="logout()" style="cursor: pointer;">Logout</a></li></ul></li>';

      change.innerHTML = tochange;
    }

  } else {
    // No user is signed in.
    console.log("no user is signed in")
  }
});

function logout(){
  firebase.auth().signOut();
  console.log("logout");
  // document.getElementById("hidelogin").style.display = "block";
  location.reload();
  // var change = document.getElementById('output');
  // var tochange = '<a href="./signup.html" class="btn" id="hidelogin">Sign up</a>';

  // change.innerHTML = tochange;
}

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");

declare();

let dark = false;

function toggleAnimation() {
  // Clone the wrapper
  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

events();
