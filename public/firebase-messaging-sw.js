// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyD4Z983mSVSi00ZgRv0CPzz9N6GXZqdat0",
    authDomain: "laravelfirebase-b4cea.firebaseapp.com",
    databaseURL: "https://laravelfirebase-b4cea-default-rtdb.firebaseio.com",
    projectId: "laravelfirebase-b4cea",
    storageBucket: "laravelfirebase-b4cea.appspot.com",
    messagingSenderId: "557740374279",
    appId: "1:557740374279:web:9db7d7841789f8ad1c6da2",
    measurementId: "G-ZD7M263CPN"
});


// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    console.log("Message received.", payload);

    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };

    return self.registration.showNotification(
        title,
        options,
    );
});
