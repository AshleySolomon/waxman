/**
 * hamburger.js
 *
 * Mobile Menu Hamburger
 * =====================
 * A hamburger menu for mobile websites
 *
 * Created by Thomas Zinnbauer YMC AG  |  http://www.ymc.ch
 * Date: 21.05.13
 */

jQuery(document).ready(function() {

    //Open the menu
    jQuery("#hamburger").click(function() {

        //set the width of primary content container -> content should not scale while animating
        var contentWidth = jQuery('#content').width();

        //set the content with the width that it has originally
        jQuery('#content').css('width', contentWidth);

        //display a layer to disable clicking and scrolling on the content while menu is shown
        jQuery('#contentLayer').css('display', 'block');

        //disable all scrolling on mobile devices while menu is shown
        jQuery('#contentLayer').bind('touchmove', function(e){e.preventDefault()});

        jQuery('#contentLayer').css('overflow', "hidden");
        jQuery('body').css('overflow', "hidden");
        
        //hide Filters menu when Main menu is clicked
        jQuery('#main-menu').css('display', 'block');
        jQuery('#filters-menu').css('display', 'none');

        //set margin for the whole container with a jquery UI animation
        jQuery("#container").animate({"left": ["70%", 'easeOutExpo']}, {
            duration: 700
        });

    });

    //close the menu
    jQuery("#contentLayer").click(function() {

        //enable all scrolling on mobile devices when menu is closed
        jQuery('#container').unbind('touchmove');
        jQuery('body').css('overflow-y', "scroll");

        //set margin for the whole container back to original state with a jquery UI animation
        jQuery("#container").animate({"left": ["0", 'easeOutExpo']}, {
            duration: 700,
            complete: function() {
                  jQuery('#content').css('width', 'auto');
                jQuery('#contentLayer').css('display', 'none');

            }
        });
    });

});

jQuery(document).ready(function() {

    //Open the menu
    jQuery("#filter-button").click(function() {

        //set the width of primary content container -> content should not scale while animating
        var contentWidth = jQuery('#content').width();

        //set the content with the width that it has originally
        jQuery('#content').css('width', contentWidth);

        //display a layer to disable clicking and scrolling on the content while menu is shown
        jQuery('#contentLayer').css('display', 'block');

        //disable all scrolling on mobile devices while menu is shown
        jQuery('#contentLayer').bind('touchmove', function(e){e.preventDefault()});

        jQuery('#contentLayer').css('overflow', "hidden");

        jQuery('body').css('overflow', "hidden");

        //hide Main menu when Filters menu is clicked
        jQuery('#filters-menu').css('display', 'block');
        jQuery('#main-menu').css('display', 'none');

        //set margin for the whole container with a jquery UI animation
        jQuery("#container").animate({"left": ["70%", 'easeOutExpo']}, {
            duration: 700
        });

    });

    //close the menu
    jQuery("#contentLayer").click(function() {

        //enable all scrolling on mobile devices when menu is closed
        jQuery('#container').unbind('touchmove');

        //set margin for the whole container back to original state with a jquery UI animation
        jQuery("#container").animate({"left": ["0", 'easeOutExpo']}, {
            duration: 700,
            complete: function() {
                  jQuery('#content').css('width', 'auto');
                jQuery('#contentLayer').css('display', 'none');

            }
        });
    });

});