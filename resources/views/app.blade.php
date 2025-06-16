<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>{{$title}}</title>
        @yield('head')

    </head>
    <body>
        @yield('content')
        
        @yield('script')
    
        <script type="module">
            // Import the functions you need from the SDKs you need
            import { initializeApp } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-app.js";
            import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.9.1/firebase-analytics.js";
            // TODO: Add SDKs for Firebase products that you want to use
            // https://firebase.google.com/docs/web/setup#available-libraries

            // Your web app's Firebase configuration
            // For Firebase JS SDK v7.20.0 and later, measurementId is optional
            const firebaseConfig = {
                apiKey: "AIzaSyBYpZ9_Gs2fddqgw8a-ITzUXefvrQS6Thc",
                authDomain: "gameweb-7fa39.firebaseapp.com",
                databaseURL: "https://gameweb-7fa39-default-rtdb.firebaseio.com",
                projectId: "gameweb-7fa39",
                storageBucket: "gameweb-7fa39.firebasestorage.app",
                messagingSenderId: "63002255898",
                appId: "1:63002255898:web:dce28ae9bed8df795be7a3",
                measurementId: "G-4ZYG7RZKYT"
            };

            // Initialize Firebase
            const app = initializeApp(firebaseConfig);
            const analytics = getAnalytics(app);
        </script>
    </body>
</html>