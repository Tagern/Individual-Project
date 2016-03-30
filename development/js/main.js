//NAVIGATION HIDE
var  mn = $(".navigation");
    mns = "navigation-scrolled";
    hdr = $('header').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
  } else {
    mn.removeClass(mns);
  }
});

// TOGGLE DISPLAY
function toggle_visibility() {
   var e = document.getElementById('all-values');
   if(e.style.display == 'block')
      e.style.display = 'none';
   else
      e.style.display = 'block';
}

//DOCUMENT ONLOAD FOR SLIDE LEFT ELEMENT
$(document).ready(function() {
    if( $(window).width() > 1100 ) {
    	$("#moving-cog").click(function() {
    		document.getElementById("moving-cog").style.marginLeft = "-80px";
    	});
    } 
    else {
    	$("#moving-cog").click(null);

    }
    $("#moving-cog").click(toggle_visibility);
});

//RESIZING FOR SLIDE LEFT ELEMENT
$(window).resize(function() {
    if( $(window).width() > 1100 ) {
    	$("#moving-cog").click(function() {
    		document.getElementById("moving-cog").style.marginLeft = "-80px";
    	});
    } else {
    	$("#moving-cog").unbind('click');
    	document.getElementById("moving-cog").style.marginLeft = "";
    }
    $("#moving-cog").click(toggle_visibility);
});



