jQuery('#edsTrackWOI:not(.eds-bound)').addClass('eds-bound)').change(function () {
    var currentValue = jQuery(this).val();
    if (currentValue != '') {
        jQuery('body').append(EDSTemplate.loader);
        setTimeout(function () {
            jQuery('body').animate({ scrollTop: 0 }, 800);
            jQuery('#EDSWorkingOnIt').modal('show');
            jQuery(".progress-bar").animate({ width: "100%" }, 4000);
        }, 100);
    } else {
        setTimeout(function () {
            jQuery('#EDSWorkingOnIt').modal('hide');
            setTimeout(function () { jQuery('#EDSWorkingOnIt').remove(); }, 1000);
        }, 1000);
    }
});



jQuery(document)
    .ajaxSend(function (event, jqxhr, settings) { // execute after results are loaded
        //console.log(settings);
        if (settings.url.indexOf('eds.php') > -1) {
            jQuery('#EDSBasic').remove();
        }
    })
    .ajaxComplete(function (event, jqxhr, settings) { // execute after results are loaded
        if (settings.url.indexOf('eds.php') > -1) {
            jQuery('#EDSBasic').remove();
            //console.log(settings);


            jQuery('#edsFetchMore:not(eds-bound)').addClass('eds-bound').change(function () {
                var currentFetch = this;
                var currentFetchVal = jQuery(currentFetch).val();
                if (currentFetchVal == "") {
                    jQuery('.eds-fetch-more').html('');
                } else {
                    jQuery('.eds-fetch-more').html(EDSTemplate.detailLoader);
                }
            });

            var montageShowingResults = parseInt(edsPageNumber * edsResultsPerPage);
            montageShowingResults = (montageShowingResults > edsResultCount) ? edsResultCount : montageShowingResults;
            jQuery('#jswrapper-showing').text(montageShowingResults + ' of ');


            



            // Get Detailed Record.

            jQuery('.eds-item-title:not(.eds-bound)').addClass('eds-bound').on('click', function () {
                var selectedTitle = this;
                //console.log(selectedTitle);
                var detailedRecordHolder = jQuery(selectedTitle).closest('[data-edstid="record"]').find('.eds-record-details');
                EDSMoreDetails(jQuery(detailedRecordHolder).data('edsretrieve'));
                var modalID = jQuery(detailedRecordHolder).data('edsretrieve').replace(/\%/g, '') + '-holder';
                console.log(modalID);
                jQuery('.'+modalID).modal('show');

                jQuery(detailedRecordHolder).find('.edsDetailNotificationArea').css('display', 'block');
                
            });



            // Folder Count
            if (jQuery("#edsFolder").val() < 1) {
                jQuery('.eds-folder-holder').css('display', 'block');
            }
            jQuery("#edsFolder").change(function () {
                jQuery('.eds-folder-count').text(jQuery(this).val());
                if (jQuery("#edsFolder").val() < 1) {
                    jQuery('.eds-folder-holder').css('display', 'block');
                }
                else { jQuery('.eds-folder-holder').css('display', 'block'); }
            });



            // manage br in result list.
            jQuery('.eds-results searchlink').parent().find('br').replaceWith(', ');

            // For Guest Access.
            jQuery('h2:contains("{{Item.Title.Data}}")').text('Login to view this result');

            jQuery('.refine_by_widget:not(.eds-bound)').addClass('eds-bound').trigger('click');

        }
    });



function EDSGuestAccess() {
    alert('Please login to view this result.');
}


function JSWrapperViewFolder() {
        EDSViewFolder('.eds-page-folder');
        jQuery('.eds-folder-count').text(jQuery('#edsFolder').val());
        jQuery('#EDSViewFolder').modal('show');
        jQuery('.eds-page-folder').css('display','block');


        //Get Detailed Record
        jQuery('.eds-folderitem-title:not(.eds-bound)').addClass('eds-bound').on('click', function () {
            var selectedTitle = this;
            //console.log(selectedTitle);
            var detailedRecordHolder = jQuery(selectedTitle).closest('[data-edstid="folderViewRecords"]').find('.eds-record-details');
            if (jQuery(detailedRecordHolder).parent().css('display') == 'none') {
                jQuery(detailedRecordHolder).parent().css('display', 'block');
                EDSMoreDetails(jQuery(detailedRecordHolder).data('edsretrieve'));
            } else {
                jQuery(detailedRecordHolder).parent().css('display', 'none');
            }
        });


    //Folder Action: Print
        jQuery('.edsfolderprint:not(.eds-bound)').addClass('eds-bound').click(function () {
            var selectedItems = '';
            jQuery('.eds-folder-item:checked').each(function () {
                var currentSelected = this;
                selectedItems += jQuery(currentSelected).val() + ',';
            });
            if (selectedItems != '') {
                console.log(selectedItems);
                EDSPrintFolder(selectedItems);
            }
        });

    //Folder Action: Email
        jQuery('.edsfolderemail:not(.eds-bound)').addClass('eds-bound').click(function () {
            var selectedItems = '';
            jQuery('.eds-folder-item:checked').each(function () {
                var currentSelected = this;
                selectedItems += jQuery(currentSelected).val() + ',';
            });
            if (selectedItems != '') {
                //console.log(selectedItems);
                EDSEmailFolder(selectedItems);
            }
        });

    //Folder Action: Remove
        jQuery('.edsfolderremove:not(.eds-bound)').addClass('eds-bound').click(function () {
            var selectedItems = '';
            jQuery('.eds-folder-item:checked').each(function () {
                var currentSelected = this;
                selectedItems += jQuery(currentSelected).val() + ',';
            });
            if (selectedItems != '') {
                //console.log(selectedItems);
                EDSEmptyFolder(selectedItems);
            }

            if (jQuery('#edsFolder').val() == 0) {
                jQuery('#EDSViewFolder').modal('hide');
            } else {
                JSWrapperViewFolder();
            }

        });


        //Folder Action: Print All
        jQuery('.edsfolderprintall:not(.eds-bound)').addClass('eds-bound').click(function () {
            EDSPrintFolder('');
        });

        //Folder Action: Email All
        jQuery('.edsfolderemailall:not(.eds-bound)').addClass('eds-bound').click(function () {
            EDSEmailFolder('');
        });

        //Folder Action: Remove All
        jQuery('.edsfolderremoveall:not(.eds-bound)').addClass('eds-bound').click(function () {
            EDSEmptyFolder('');
            jQuery('#EDSViewFolder').modal('hide');
        });




    }