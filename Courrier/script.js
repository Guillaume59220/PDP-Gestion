 $(function() {

 	 console.log('jQuery is ready to go !');

 	 $('#courrier').submit(function(e) {

        // -- Bloquer la redirection du formulaire
        e.preventDefault();

         if($('#newsletter').find('.has-error').length == 0) {

            }
        });
    });