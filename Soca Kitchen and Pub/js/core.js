/*
    Author: Isaac Luy
    URL: http://dev.isaacluy.com
    Version: 1
*/
var Soca = ( function (name) { return name; }( Soca || {} ));

Soca.Home = ( function ()
{	
	var startCarrousel = function (){
		$('.carousel').carousel();
	};

    var startInstafeed = function() {
        var feed = new Instafeed({
            get: 'tagged',
            tagName: 'socakitchen',
            clientId: 'e9c5b90346024cbf87734a1216',
            template: '<div class="item"><a href="{{link}}"><img src="{{image}}" class="img-responsive"/></a></div>',
            resolution: "standard_resolution",
            limit: 0
        });
        feed.run();
    };

	var init = function (){
		startCarrousel();
	};
	
	return {
		init : function() {
			init();
		}
	};	
})();

Soca.Contact = (function ()
{
	var startFormValidation = function (){
		$('#contactForm').bootstrapValidator({
    	    message: 'This value is not valid',
    	    feedbackIcons: {
    	        valid: 'glyphicon glyphicon-ok',
    	        invalid: 'glyphicon glyphicon-remove',
    	        validating: 'glyphicon glyphicon-refresh'
    	    },
    	    fields: {
    	        fname: {
    	            message: 'The username is not valid',
    	            validators: {
    	                notEmpty: {
    	                    message: 'The username is required and cannot be empty'
    	                },
    	                stringLength: {
                        min: 2,
                        message: 'The username must be more than 2 characters long'
                    	},
    	                regexp: {
    	                    regexp: /^[a-zA-Z0-9_]+$/,
    	                    message: 'The username can only consist of alphabetical, number and underscore'
    	                }
    	            }
    	        },
    	        email: {
    	            validators: {
    	                notEmpty: {
    	                    message: 'The email is required and cannot be empty'
    	                },
    	                emailAddress: {
    	                    message: 'The input is not a valid email address'
    	                }
    	            }
    	        },
    	        message: {
    	            validators: {
    	                notEmpty: {
    	                    message: 'A message is required and cannot be empty'
    	                }
    	            }
    	        }
    	    }
    	});
	};

	var init = function (){
		startFormValidation();
	};

	return {
		init : function(){
			init();
		}
	}

})();

Soca.WWU = (function ()
{
    var startFormValidation = function (){
        $('#wwuForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                fname: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                        min: 2,
                        message: 'The username must be more than 2 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_]+$/,
                            message: 'The username can only consist of alphabetical, number and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                cv: {
                    validators: {
                        notEmpty: {
                            message: 'Please attach a CV to your application'
                        }
                    }
                }
            }
        });
    };

    var init = function (){
        startFormValidation();
    };

    return {
        init : function(){
            init();
        }
    }

})();

$(document).ready(function () {

	//Mobile Menu Init
	$('#menu').slicknav();

	// Page JS Init
	var bc = $('body').attr('class');
	
	if(bc.indexOf("home") >= 0) {
		Soca.Home.init();
	} else if(bc.indexOf("contact") >= 0) {
		Soca.Contact.init();
	} else if(bc.indexOf("work") >= 0) {
        Soca.WWU.init();
    }

});