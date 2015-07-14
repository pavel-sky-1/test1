/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function($)
{
    $(document).ready(function()
    {     
        $.ajaxSetup(
        {
            cache: false
        }
        );

        var $container = $("#photo-content_cont");
        $container.load("ajax/ajax-photo.php");
        var refreshId = setInterval(function()
        {
            $container.load('ajax/ajax-photo.php');
        }, 60000);
    });
})(jQuery);