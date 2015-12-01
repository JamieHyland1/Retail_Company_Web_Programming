window.onload = function ()
{
    var submitBtn = document.getElementsByID('submit');
    
    submitBtn.addEventListener('click', function(event)
    { 
        var valid = true; // valid is true when theres no erros in submitting
                          // valid is false when there are validation errors
                          
                          
        if(!valid)
        {
            event.preventDefault();
        }
        
        
        
    });
};
