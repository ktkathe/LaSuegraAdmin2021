const firebaseConfig = {
  apiKey: "AIzaSyBr_PWjZ_iatbXEjiJmo9Zi9eoXLvbpw4c",
  authDomain: "velvety-ground-169815.firebaseapp.com",
  databaseURL: "https://velvety-ground-169815.firebaseio.com",
  projectId: "velvety-ground-169815",
  storageBucket: "velvety-ground-169815.appspot.com",
  messagingSenderId: "1085130972744",
  appId: "1:1085130972744:web:7017b79f69fc1dca1d027d",
  measurementId: "G-GVJH6B3BG4"
  };

  firebase.initializeApp(firebaseConfig);
  //-----------------------------------------------------------------//

  const messaging = firebase.messaging();

  //   messaging
  //       .requestPermission()
  //       .then(function() {

  //           console.log('Notification permission granted.');
  //           return messaging.getToken()
   
  //       }).then(function(token) {

         
  //         console.log(token)
   
  //       }).catch(function(err) {
  //           console.log('Unable to get permission to notify.', err);

  //       });


  // //-----------------------------------------------------------------//

  //       messaging.onMessage((payLoad) =>{
  //           console.log(payLoad);
  //       })

//   $('#device_token').val(token);