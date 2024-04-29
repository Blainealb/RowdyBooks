
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight'); 
			} else {
		    label.removeClass('highlight');   
			}   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
    		label.removeClass('highlight'); 
			} 
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});


/*

$(document).ready(function() {

//-------------------------- Updated By Loren Isenhour: EMAIL validation -----------------------------    
    //check for UTSA email
    function isValidUTSAEmail(email) {
        return /^[^@]+@(my\.)?utsa\.edu$/.test(email);
    }

    //update the error message
    function updateFeedback(feedbackElement, isValid) {
        var message = 'Please enter a valid UTSA email address.';
        feedbackElement.text(message);
        feedbackElement.css('display', isValid ? 'none' : 'block');
    }

    //constant check of email input
    $('.email').on('input', function() {
        var email = $(this).val();
        var feedbackElement = $(this).closest('form').find('.email-feedback');
        updateFeedback(feedbackElement, isValidUTSAEmail(email));
    });

    //prevent submission if invalid email
    $('form').submit(function(e) {
        var email = $(this).find('.email').val();
        var feedbackElement = $(this).find('.email-feedback');

        if (!isValidUTSAEmail(email)) {
            e.preventDefault();
            updateFeedback(feedbackElement, false);
            $(this).find('.email').focus();
        }
    });
//--------------------------------------------------------------------------------------------------------  


//-------------------------- Updated By Loren Isenhour: PASSWORD validation ------------------------------   
    // Check for valid password
    function isValidPassword(password) {
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);
    }

    // Update the error message for the password
    function updatePasswordFeedback(feedbackElement, isValid) {
        var message = 'Password must contain at least 8 characters, including 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character (@,$,!,%,*,?,&).';
        feedbackElement.text(message);
        feedbackElement.css('display', isValid ? 'none' : 'block');
    }

    // Constant check of password input
    $('.password').on('input', function() { 
        var password = $(this).val();
        var feedbackElement = $(this).closest('form').find('.password-feedback');
        updatePasswordFeedback(feedbackElement, isValidPassword(password));
    });

    // Prevent submission if invalid password
    $('form').submit(function(e) {
        var password = $(this).find('.password').val();
        var feedbackElement = $(this).find('.password-feedback');

        if (!isValidPassword(password)) {
            e.preventDefault();
            updatePasswordFeedback(feedbackElement, false);
            $(this).find('.password').focus();
        }
    });
//-------------------------------------------------------------------------------------------------------


    $('.form').find('input, textarea').on('keyup blur focus', function(e) {
        var $this = $(this),
            label = $this.prev('label');

        if (e.type === 'keyup') {
                if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight');
                } else {
                label.removeClass('highlight');
                }
        } else if (e.type === 'focus') {

          if( $this.val() === '' ) {
                label.removeClass('highlight');
                }
          else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }
    });

    $('.tab a').on('click', function (e) {

        e.preventDefault();

        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');

        target = $(this).attr('href');

        $('.tab-content > div').not(target).hide();

        $(target).fadeIn(600);

      });

}); 
*/
