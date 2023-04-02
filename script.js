jQuery(document).ready(function () 
{
//###START

var v_typeSpeed = jQuery('#typed-strings').data('typespeed');
var v_startDelay = jQuery('#typed-strings').data('startdelay');
var v_loop = jQuery('#typed-strings').data('loop');

if(v_typeSpeed){attr_str += 'typeSpeed:' + parseInt(v_typeSpeed) +',\n';}
if(v_startDelay){attr_str += 'startDelay:' + parseInt(v_startDelay) +',\n';}
if(v_loop){attr_str += 'loop:' + parseBool(v_loop) +'';}

var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
	  attr_str
	// loop:true
  });
  
//###END
	
});
