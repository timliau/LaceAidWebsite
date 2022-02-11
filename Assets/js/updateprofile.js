firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      // User is signed in, see docs for a list of available properties
      // https://firebase.google.com/docs/reference/js/firebase.User
      var uid = user.uid;
      const dbRef = firebase.database().ref();
        dbRef.child("users").child(uid).get().then((snapshot) => {
            if (snapshot.exists()) {
                console.log(snapshot.val());
            } else {
                console.log("No data available");
            }
        }).catch((error) => {
        console.error(error);
        });
      //...
    } else {
      // User is signed out
      // ...
    }
  });

