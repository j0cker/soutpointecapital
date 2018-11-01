(function() {
  app.factory('functions', function($http) {
    return {
      loading: function() {
        console.log("[factory.js] loading");

        $('#page-loader').css('display','');
        setTimeout(function() {
          $('#page-loader').css('display','none');
        }, 3000);
      },
      loadingWait: function() {
        console.log("[factory.js] loading");

        $('#page-loader').css('display','');
      },
      loadingEndWait: function() {
        console.log("[factory.js] loading");

        $('#page-loader').css('display','none');
      },
      loadingWaitTime: function(x) {
        console.log("[factory.js] loading");

        $('#page-loader').css('display','');
        setTimeout(function() {
          $('#page-loader').css('display','none');
        }, x);
      },
      postMessage: function(name, email, body, uvp) {

        console.log("[factory][postMessage]");

        console.log("name: " + name +"email: " + email +"body: " + body + " UVP: " + uvp);

        var url = 'api/postMessage';
		  	return $http.post(url, {cache: false, name:name, email:email, body:body, uvp:uvp   });

      },
      postSubcriberSocios: function(nombre, mail, direccion, comentarios, uvp) {

        console.log("[factory][postSubscriber]");

        console.log("nombre: " + nombre + " mail: " + mail + " direccion: " + direccion + " comentarios: " + comentarios);

        var url = 'app/api/subscribersSocios';
		  	return $http.post(url, {cache: false, nombre:nombre, mail:mail, direccion:direccion, comentarios:comentarios, uvp:uvp  });

      },
      aceptarPedido: function(id, aceptar, servicio) {

        console.log("[factory][aceptarPedido]");

        console.log("id: " + id);
        console.log("aceptar: " + aceptar);
        console.log("servicio: " + servicio);

        var url = 'app/api/aceptarPedido';
		  	return $http.post(url, {cache: false, id:id, aceptar:aceptar, servicio:servicio  });

      }
    };
  });

}).call(this);
