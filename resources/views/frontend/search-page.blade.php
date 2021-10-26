<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>ForSaleByWeb.com</title>
    <style type="text/css">
        body, html
        {
            margin: 0; padding: 0; height: 100%; overflow: hidden;
        }

        #content
        {
            position:absolute; left: 0; right: 0; bottom: 0; top: 0px;
        }

        .load{
            background-image: url("/images/loader_fsw.gif");
            background-repeat: no-repeat;
            background-position: 50% 50%;
            position: absolute;
            width:100%;
            height:100%;
            z-index: 10;
        }

        iframe{
            position:relative;
            display: none;
            z-index: 8;
        }
    </style>
</head>
<body>

<div id="content">
    <div class="load"></div>
    <iframe id="i_frame" src="/search-content/{{$params}}" width="100%" height="100%" frameborder="0"></iframe>
</div>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<script>
    //var $iframeBody = $("iframe").contents().find("body");
    //$iframeBody.css("background", "blue");

    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Chrome 1 - 79
    var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

    $( document ).ready(function() {

        function checkIframeLoaded() {
            // Get a handle to the iframe element
            var iframe = document.getElementById('i_frame');
            var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

            // Check if loading is complete
            if (  iframeDoc.readyState  == 'complete' ) {
                //iframe.contentWindow.alert("Hello");
                if(isFirefox) {
                    setTimeout(function(){
                        iframe.style.display = "block";
                        ramKrishna();
                        $(".load").hide();
                    }, 3000);
                }
                else {
                    iframe.contentWindow.onload = function(){
                        //alert("loaded");
                        //this will wait for all the images and text assets to finish loading before executing
                        window.onload = function(){
                            iframe.style.display = "block";
                            ramKrishna();
                            $(".load").hide();
                        }
                    };
                }

                // The loading is complete, call the function we want executed once the iframe is loaded

                return;
            }

            // If we are here, it is not loaded. Set things up so we check   the status again in 100 milliseconds
            window.setTimeout(checkIframeLoaded, 100);
        }

        function ramKrishna()
        {
            //do something special
            $("iframe").contents().find('[id^=IDX-SP-a020-]').each(function () {
                listing_no  = $(this).attr('data-listingid');
                $(this).on("click", function() {myFunction(listing_no, $("iframe").contents().find('[data-listingid=' + listing_no +']').find('[class=IDX-resultsAddress]').text())});
                $(this).css("color", "green");
            });

            //override links
            $("iframe").contents().find("a").each(function () {
                //link = $(this).attr("href");
                //link = link.replace(/\//g, "%3098");
                //if(($(this).attr("href")).indexOf('$3098') == -1) {
                    link = encodeURIComponent($(this).attr("href")).replace(/%2F/g, "$3098");
                    link = link.replace(/%3A/g, "$3099");
                    $(this).attr("href", "/search?data=" + link);
                //}
            });

            //individual page
            var saveButton = $("iframe").contents().find('[id=IDX-saveProperty]');
            saveButton.removeAttr("href");
            saveButton.on("click", function() {myFunction(saveButton.attr('data-listingid'), $("iframe").contents().find('[id=IDX-detailsAddress]').text())});
            saveButton.css("color", "green");
            //hide buttons
            $("iframe").contents().find('[id=IDX-saveSearch]').hide();

            //remove signup modal
            $("iframe").contents().find('[aria-labelledby=ui-dialog-title-IDX-registration]').remove();

            //invalid listing no
            var invalidListingNo = $("iframe").contents().find('[id=closeWindow]');
            invalidListingNo.removeAttr("href");

            //var $saveButton = $("iframe").contents().find("#IDX-SP-a020-5269503");

            //$saveButton.css("color", "green");

            //$saveButton.click(myFunction);
            //alert('ram');

        }

        checkIframeLoaded();

        setTimeout(function() { $(".load").hide();}, 10000);
    });

    function myFunction(listing_no, address = "") {
        //alert('krishna');
        //alert('/save-listing/' + listing_no);
        window.top.location.href = '/add-listing/' + listing_no + '/' + address.replace(/ +/g, ' ');
    }
</script>
</body>
</html>
