<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Notify the user</title>
  </head>
  <body>
    <a href="#" onclick="notifyUser()">Notify The User</a>

    <script>
      console.log(Notification.permission);

      function requestPermission(){
        if(Notification.permission !== 'granted')
          Notification.requestPermission();
          return;
      }

      // document.addEventListener('DOMContentLoaded', function(){
      //   if(Notification.permission !== 'granted')
      //     requestPermission();
      // })

      function notifyUser(){
        if (!Notification){
          console.log("Ooops, this browser doesn't support notifications");
          return;
        }

        if(Notification.permission === 'granted'){
            var notif = new Notification ('Title goes here', {
              icon: 'https://cdn2.iconfinder.com/data/icons/plump-by-zerode_/256/Mail-icon.png',
              body: 'This is our sexy message'
            })

            notif.onclick = function(){
              window.open("https://www.youtube.com/user/FunTechGuys")
            }
        } else {
          requestPermission();
        }

      }
    </script>
  </body>
</html>
