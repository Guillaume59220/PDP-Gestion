$('#username').editable({
    type: 'text',
    url: '/post',    
    pk: 1,    
    title: 'Enter username',
    ajaxOptions: {
        type: 'put'
    }        
});
 
//ajax emulation
$.mockjax({
    url: '/post',
    responseTime: 200,
    response: function(settings) {
        console.log(settings);
    }
});