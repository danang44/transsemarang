<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <meta name="google-signin-client_id" content="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com">
    <title>Laravel 5.8 Login with Google Account Example</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 row-block">
                <script>
                    var googleUser = {};
                    var startApp = function() {
                        gapi.load('auth2', function() {
                            auth2 = gapi.auth2.init({
                                client_id: '662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com',
                                cookiepolicy: 'single_host_origin',
                            });
                            attachSignin(document.getElementById('customBtn'));
                        });
                        console.log('gapi.auth2.init');
                    };

                    function attachSignin(element) {
                        console.log(element.id);
                        auth2.attachClickHandler(element, {},
                            function(googleUser) {
                                console.log("Yaaay");
                                document.getElementById('name').innerText = "Signed in: " +
                                    googleUser.getBasicProfile().getName();
                            },
                            function(error) {
                                console.log("Nope");
                                console.log(error);
                            }
                        );
                    }
                </script>
                <div id="g-signin2"
                    style="display: flex;flex-direction: row;align-items: center;width: 413px;height: 72px;" data-onsuccess="attachSignin" href>
                    <button id="customBtn" role="button" class="customGPlusSignIn" type="button"
                        style="display: flex;flex-direction: column;padding: 20px 32px;gap: 20px;width: 413px;height: 72px;background: #FFFFFF;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.08);backdrop-filter: blur(10px);border-radius: 8px;flex-wrap: wrap;">
                        <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg"
                            style="width: 32px;height: 32px;">
                        <span id="name"
                            style="font-weight: 600;font-size: 24px;line-height: 32px;color: #1D2939;" >Lanjutkan dengan
                            Google</span>
                    </button>
                    <script>
                        startApp();
                    </script>
                </div>
            </div>
            <a href="#" onclick="signOut();">Sign out</a>
<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
        </div>
    </div>
</body>


</html>
