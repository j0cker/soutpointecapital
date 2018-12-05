(function() {
    app.controller('index', function($scope, functions, $window) {

        functions.loading();

        console.log("[IndexCtrl]");

        $scope.map = function(map) {

            console.log("[IndexCtrl][map] " + map);

            $("#map" + map).css("display", "inline-block");

            if (map == 1) {
                $("#map2").css("display", "none");
                $("#map3").css("display", "none");
                $('html,body').animate({
                        scrollTop: $("#map1").offset().top
                    },
                    'slow');
            }
            if (map == 2) {
                $("#map1").css("display", "none");
                $("#map3").css("display", "none");
                $('html,body').animate({
                        scrollTop: $("#map2").offset().top
                    },
                    'slow');
            }
            if (map == 3) {
                $("#map1").css("display", "none");
                $("#map2").css("display", "none");
                $('html,body').animate({
                        scrollTop: $("#map3").offset().top
                    },
                    'slow');
            }

        }

        $scope.send = function() {
                console.log("[IndexCtrl][send]");

                functions.loadingWait();

                var name = "";
                var email = "";
                var body = "";
                name = $("#name").val();
                email = $("#email").val();
                body = $("#body").val();

                console.log("[IndexCtrl][send] name: " + name);
                console.log("[IndexCtrl][send] email: " + email);
                console.log("[IndexCtrl][send] body: " + body);

                if (name == "") {
                    toastr["error"]("Write a name", "");
                    $("#send1").effect("shake");
                    $("#name").effect("shake");
                    functions.loadingEndWait();
                } else if (email.indexOf("@") == "-1" || email.indexOf(".") == "-1") {
                    toastr["error"]("Write a valid email", "");
                    $("#send1").effect("shake");
                    $("#email").effect("shake");
                    functions.loadingEndWait();
                } else if (body == "") {
                    toastr["error"]("Write a message", "");
                    $("#send1").effect("shake");
                    $("#body").effect("shake");
                    functions.loadingEndWait();
                } else {

                    functions.postMessage(name, email, body, 0).then(function(response) {

                        if (response.data.success == "TRUE") {
                            console.log("[IndexCtrl][postMessage]");

                            toastr["success"]("Thank you! Your message <br />has been successfully sent.", "");
                            functions.loadingEndWait();

                        } else {
                            toastr["warning"](response.data.description, "");
                            functions.loadingEndWait();
                        }
                    }, function(response) {
                        /*ERROR*/
                        toastr["error"]("Inténtelo de nuevo más tarde", "");
                        functions.loadingEndWait();

                    }); /*fin postSubscriber*/
                }

            } //fin send ng

    }); //fin controller index

    return;

}).call(this);