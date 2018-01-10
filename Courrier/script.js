 $(function() {

 	 console.log('jQuery is ready to go !');

 	 $('#courrier').submit(function(e) {

        // -- Bloquer la redirection du formulaire
        e.preventDefault();

         if($('#newsletter').find('.has-error').length == 0) {

            //il n'y a pas d'erreur et je peux procéder à ma requète AJAX

            // console.log($(this).serialize());

            $.ajax({
                type        : $(this).attr('method'),
                url         : $(this).attr('action'),
                data        : $(this).serialize(),
                dataType    : 'JSON'
            });
        };
 	});
 	});


       
    