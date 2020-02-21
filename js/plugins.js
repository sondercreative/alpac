// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.



/*
 * jquery.simpleTabs 1.0.0
 * Copyright 2014 Hugo Silva
 * Licensed under MIT: http://www.opensource.org/licenses/mit-license.php
 */

(function($) {

    $.fn.simpleTabs = function() {
        
        //each filter list
        return this.each( function() {

            
            var $linksList = $(this).find('a');
            
            
            
            var updateContent = function(){
                
                // go through each link, hide corresponding target, and show selected target
                $linksList.each(function(){
                    
                    var $thisLink = $(this);
                    var target = $thisLink.attr('href');
                    var isActive = $thisLink.hasClass('is-active');
                    
                    $(target + '-simple-tabs')[isActive ? 'fadeIn' : 'hide']();
                                        
                });
                
            }
            
            
            
            // initialize
            $linksList.each(function(e){
                
                var $thisLink = $(this);
                
                // add suffix to target ID to avoid snchor scrolling
                var $target = $($thisLink.attr('href'));
                $target.attr('id', $target.attr('id') + '-simple-tabs');
                
                $thisLink.click(function(e){
                
                    var isActive = $thisLink.hasClass('is-active');

                    if(!isActive){

                        // remove active class from current
                        $linksList.filter('.is-active').removeClass('is-active');

                        // added active class to clicked button
                        $thisLink.addClass('is-active');

                        updateContent();

                    }
                    
                });
                
            });
            
            
            
            var $hashLink;
            
            // define default in the following order when provided: hash, is-active class, first item
            if(  window.location.hash && ($hashLink = $linksList.filter('[href="' + window.location.hash + '"]') ).length > 0  ) { // if hash exists and a corresponding tab was found
                
                $linksList.filter('.is-active').removeClass('is-active');
                $hashLink.addClass('is-active is-default-tab');
                
            } else if ( $linksList.filter('.is-active').length > 0 ) { // if .is-active is defined
                $linksList.filter('.is-active').addClass('is-default-tab');
            }else {
                $linksList.first().addClass('is-active is-default-tab'); // else, default to first item
            }
            
            
            
            // add listener to update tabs on hash change (IF supported)
            window.onhashchange = function(){
                if(  window.location.hash && ($hashLink = $linksList.filter('[href="' + window.location.hash + '"]') ).length > 0  ) { // if hash exists and a corresponding tab was found
                    $linksList.filter('.is-active').removeClass('is-active');
                    $hashLink.addClass('is-active');
                    updateContent();

                }else if(window.location.hash === "") { // if hash is empty, go back to initial state
                    $linksList.filter('.is-active').removeClass('is-active');
                    $linksList.filter('.is-default-tab').addClass('is-active');
                    updateContent();
                }
            }
            
            
            
            updateContent();
            
        });

    }

}(jQuery));