<span>
    <span data-edstid="pageLayout" class="eds-page-layout">
        <?php include 'auth.php' ?>
    
        <!-- Basic Page  -->    
        <span class="eds-page eds-page-basic">
            <div class="panel panel-default">
              <div align="center" class="panel-body">
                Welcome to EBSCO Discovery Service JSWrapper Demo site.
              </div>
            </div>
        
        </span>
        
        <!-- Advanced Page  -->
        <span class="eds-page eds-page-advanced"></span>
            
        <!-- Results Page  -->
        <span class="eds-page eds-page-result">
            <div class="row"> 
                <div style="col-xs-12">
                    <div class="panel panel-default" style="background-color: rgba(0, 0, 0, 0.2);">
                      <div class="panel-body">






                                <span class="eds-search-options eds-reset-ht">
                                    <div class="col-xs-2"  data-edstid="optionFieldCode">
                                        <div class="btn-group" style="width:100%;">
                                          <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" id="eds-option-field" aria-haspopup="true" aria-expanded="false">
                                            <small>Search By: {{ActiveFieldCode}}</small>
                                         <span class="caret"></span>
                                          </button>
                                          {{FieldCode}}
                                          <ul class="dropdown-menu" data-edstid="optionFieldCodeItems" id="eds-searchoption-field">
                                            {{FieldCodeItems}}
                                            <li data-edstid="optionFieldCodeItem"  id="edsfield_{{FieldCode}}" text="{{Label}}"><a title="{{Label}}" onclick="EDSApplyFieldCode('{{FieldCode}}');return false;" href="javascript:{};" id="edsfield_{{FieldCode}}_Anchor" class="">{{Label}}</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-xs-2"  data-edstid="optionSort">
                                        <div class="btn-group" style="width:100%;">
                                          <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="eds-option-sort">
                                            <small>Sort By: {{ActiveSort}}</small>
                                         <span class="caret"></span>
                                          </button>
                                          {{Sort}}
                                          <ul class="dropdown-menu" data-edstid="optionSortItems" id="eds-searchoption-sort">
                                            {{SortItems}}
                                            <li data-edstid="optionSortItem"  id="edssort_{{Id}}" text="{{Label}}"><a title="{{Label}}" onclick="EDSApplySearchOption('{{AddAction}}');return false;" href="javascript:;" id="edssort_{{Id}}_Anchor" class="">{{Label}}</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-xs-2"  data-edstid="optionView">
                                        <div class="btn-group" style="width:100%;">
                                          <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="eds-option-view">
                                            <small>View: {{ActiveView}}</small>
                                         <span class="caret"></span>
                                          </button>
                                          {{View}}
                                          <ul class="dropdown-menu" data-edstid="optionViewItems" id="eds-searchoption-view">
                                            {{ViewItems}}
                                            <li data-edstid="optionViewItem"  id="edsview_{{Id}}" text="{{Label}}"><a title="{{Label}}" onclick="EDSApplySearchOption('{{AddAction}}');return false;" href="javascript:;" id="edsview_{{Id}}_Anchor" class="">{{Label}}</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-xs-2 "  data-edstid="optionPerPage">
                                        <div class="btn-group" style="width:100%;">
                                          <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="eds-option-rpp">
                                            <small>Results per page: {{ActivePerPage}}</small> 
                                         <span class="caret"></span>
                                          </button>
                                          {{PerPage}}
                                          <ul class="dropdown-menu" data-edstid="optionPerPageItems" id="eds-searchoption-rpp">
                                            {{PerPageItems}}
                                            <li data-edstid="optionPerPageItem"  id="edsrpp_{{Id}}" text="{{Label}}"><a title="{{Label}}" onclick="EDSApplySearchOption('{{AddAction}}');return false;" href="javascript:;" id="edsrpp_{{Id}}_Anchor" class="">{{Label}}</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                </span>
                                
                                
                                <span class="eds-current-mode">
                                    <div class="col-xs-2"   data-edstid="optionMode">
                                        <div class="btn-group" style="width:100%;">
                                          <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="eds-option-mode">
                                            <small>{{ActiveMode}}</small>
                                         <span class="caret"></span>
                                          </button>
                                          {{Mode}}
                                          <ul class="dropdown-menu" data-edstid="optionModeItems" id="eds-searchoption-mode">
                                            {{optionModeItems}}
                                            <li data-edstid="optionModeItem" id="edsmode_{{Id}}" text="{{Label}}"><a title="{{Label}}" onclick="EDSApplySearchOption('{{AddAction}}');return false;" href="javascript:{};" id="edsmode_{{Id}}_Anchor" class="">{{Label}}</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                </span>
                                


                                <div class="col-xs-2 eds-folder-holder">
                                    <div class="btn-group" style="width:100%;">
                                      <button style="width:100%;" type="button" class="btn btn-default btn-sm dropdown-toggle  edsfolder_view" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <small><strong>(<span class="eds-folder-count"></span>)</strong> in Folder</small>
                                     <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" id="eds-folder-options">
                                      
                                        <li style="display:block;text-align:left;" id="edsfolder_view" sequence="" iconalttext="" description="" text="View List" type="option">
                                            <a title="View List" onclick="JSWrapperViewFolder();return false;" href="javascript:{};" id="edsfolder_view_anchor" class="">View All</a>
                                        </li>
                                      
                                        <li style="display:block;text-align:left;" id="edsfolder_print" sequence="" iconalttext="" description="" text="Print List" type="option">
                                            <a title="Print List" onclick="EDSPrintFolder();return false;" href="javascript:{};" id="edsfolder_print_anchor" class="">Print All</a>
                                        </li>
                                        <li style="display:block;text-align:left;" id="edsfolder_email" sequence="" iconalttext="" description="" text="Email List" type="option">
                                            <a title="Email List" onclick="EDSEmailFolder();return false;" href="javascript:{};" id="edsfolder_email_anchor" class="">Email All</a>
                                        </li>
                                        <li style="display:block;text-align:left;" id="edsfolder_empty" sequence="" iconalttext="" description="" text="Empty List" type="option">
                                            <a title="Empty List" onclick="EDSEmptyFolder();return false;" href="javascript:{};" id="edsfolder_empty_anchor" class="">Remove All</a>
                                        </li>
                                      </ul>
                                    </div>
                                </div>




                      </div>
                    </div>
                </div>
            </div>
            
            <span class="eds-paging eds-reset-ht">
                    <div class="row result-pages" data-edstid="pageNumbers">
                      <div class="col-xs-4 col-sm-3" style="text-align: left;  padding-right: 0;">
                        <ul class="pagination pagination-sm" style="margin: 0; margin-top: 5px;">
                          <li><a class="first eds-goto-first-page" aria-label="First"  href="javascript:{}"><span aria-hidden="true" class="glyphicon glyphicon-step-backward"><span class="sr-only">First</span></span></a></li>
                          <li class="hidden-xs hidden-sm"><a class="back eds-goto-back-page" data-edsback="5" aria-label="Back"  href="javascript:{}"  title="Jump back 5 pages"><span aria-hidden="true" class="glyphicon glyphicon-backward"><span class="sr-only">Back</span></span></a></li>
                          <li><a class="prev eds-goto-prev-page" aria-label="Previous"  href="javascript:{}"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left"><span class="sr-only">Previous</span></span></a></li>
                        </ul>
                      </div>
                      <div class="col-xs-4 col-sm-6" style="text-align: center; padding: 0;">
                          {{pageNumber}}
                        <ul data-edsnpages="5" data-edstid="pageNumber" class="pagination pagination-sm" style="margin: 0; margin-top: 5px;">
                            {{pageNumberItems}}
                          <li data-edstid="pageNumberActiveItems" data-edsaction="{{Value}}" class="active eds-page-no"><span class="page current" title="Current page">{{Value}}</span></li>
                          <li data-edstid="pageNumberItems" data-edsaction="{{Value}}" class="hidden-xs eds-page-no"><a class="page" href="javascript:{}" title="Jump to page 2">{{Value}}</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-4 col-sm-3" style="text-align: right;  padding-left: 0;">
                        <ul class="pagination pagination-sm" style="margin: 0; margin-top: 5px;">
                          <li><a class="next eds-goto-next-page" href="javascript:{}" aria-label="Next"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"><span class="sr-only">Next</span></span></a></li>
                          <li class="hidden-xs hidden-sm"><a class="forward eds-goto-forward-page"  data-edsforward="5" href="javascript:{}" title="Jump forward 5 pages" aria-label="Forward"><span aria-hidden="true" class="glyphicon glyphicon-forward"><span class="sr-only">Forward</span></span></a></li>
                          <li><a class="last eds-goto-last-page" href="javascript:{}" title="View last page of results" aria-label="Last"><span aria-hidden="true" class="glyphicon glyphicon-step-forward"><span class="sr-only">Last</span></span></a></li>
                        </ul>
                      </div>
                    </div>
                </span>
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="row"> 
            
            
            
                <div class="col-xs-3">
                    <div class="panel-group eds-refine eds-reset-ht" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default eds-criteria"   id="EDSCriteria"  data-edstid="criteria">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Search Criteria
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                                {{criteriaSearch}}
                                <div data-edstid="criteriaSearch" class="panel-body" style="padding:10px;">
                                        <div>
                                          <span id="EDSResultCount">
                                              Found {{ResultCount}} results
                                          </span>
                                          <span id="EDSSearchTerm">
                                            for <strong>{{Term}}</strong>
                                          </span>
                                        </div>
                                        <div class="selOper" data-edstid="criteriaLimiters" id="EDSCurrentLimiters">
                                        <p><strong>Limiters</strong></p>
                                            {{criteriaLimiterItems}}
                            
                                            <p data-edstid="criteriaLimiterItems" data-action="{{Action}}" id="EDSCurrentLimiter_{{Id}}" class="">
                                                
                                                <span class="eds-action-filter" style="float:right;">
                                                    {{criteriaStatus}}
                                                    <button data-edstid="criteriaStatus" type="button" class="btn btn-default btn-xs eds-criteria-button">
                                                        <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
                                                    </button>
                                                    <button data-edstid="criteriaActive" type="button" class="btn btn-default btn-xs eds-criteria-button">
                                                        <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                                                    </button>
                                                </span>
                                                <a  class="eds-action-filter" href="javascript:{}">{{Label}}</a>
                                            
                                            </p>
                                            
                                        </div>
                                        <div class="selOper" data-edstid="criteriaExpanders" id="EDSCurrentExpanders">
                                        <p><strong>Expanders</strong></p>
                                            {{criteriaExpanderItems}}
                            
                                            <p data-edstid="criteriaExpanderItems" data-action="{{Action}}" id="EDSCurrentLimiter_{{Id}}" class="">
                                            
                                            <span class="eds-action-filter" style="float:right;">{{criteriaStatus}}</span>
                                            <a  class="eds-action-filter" href="javascript:{}">{{Label}}</a>
                                            </p>
                                            
                                        </div>
                                        <div class="selOper" data-edstid="publishedDate" id="EDSPublishedDate">
                                        <p><strong>Published Date: </strong><small>From Year - To Year</small></p>
                                        
                                           <div class="row">
                                                <div class="col-xs-6"><input type="text" class="form-control input-sm eds-pub-date-from" placeholder="From: YYYY" id="pub-date-from" data-mindate="{{MinDate}}" name="pub-date-from" value="{{FromDate}}" /></div>
                                                <div class="col-xs-6"><input type="text" class="form-control input-sm eds-pub-date-to" placeholder="To: YYYY"  id="pub-date-to" data-maxdate="{{MaxDate}}"  name="pub-date-to" value="{{ToDate}}" /></div>
                                           </div>   
                                            <p><div id="publishedDate" class="" role="group" aria-label="Extra-small button group">
                                                <a class="btn btn-default eds-pub-date-apply" id="pub-date-apply" href="javascript:{}">Apply</a>
                                                <a class="btn btn-default eds-pub-date-clear" id="pub-date-clear" href="javascript:{}">Clear</a>
                                            </div></p>
                                            
                                        </div>            
                                        <div class="selOper" data-edstid="criteriaActiveFacets" id="EDSCurrentFacets">
                                            <p><strong>Active Facets</strong></p>
                                            {{criteriaActiveFacetItems}}
                                            <p data-edstid="criteriaActiveFacetItems" data-action="{{RemoveAction}}" id="EDSCurrentFacet_{{FilterId}}" class="">
                                                <a  class="eds-action-filter" href="javascript:{}">{{Label}}: {{Value}}</a>
                                                <button type="button" class="btn btn-default btn-xs eds-action-filter eds-criteria-button"  style="float:right;">
                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default  eds-facet-block" data-edstid="facets">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{Id}}" aria-expanded="false" aria-controls="{{Id}}">
                              {{Label}}
                            </a>
                          </h4>
                        </div>
                        <div id="{{Id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body eds-facet-items" style="height:150px;overflow:auto;">
                            {{Items}}
                            <div  data-edstid="facetItems"><label for="{{Id}}_ChkGroup_{{Valueg}}" style="font-weight:normal">
                                <input type="checkbox" class="" id="{{Id}}_ChkGroup_{{Valueg}}" value="{{AddAction}}">
                                {{Value}}
                                <span class="count">
                                <strong>({{Count}})</strong>
                                </span>
                                </label>
                            </div>
                          </div>
                            <div class="SubmitValue">
                                <div class="" role="group" aria-label="Extra-small button group">
                                    <a class="btn btn-default eds-facet-apply" href="javascript:{}">Apply</a>
                                
                                    <a class="btn btn-default eds-facet-clear" href="javascript:{}">Clear</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
        
                </div>
                
                
                <div class="col-xs-6">
                    <div class="panel panel-default">
                      <div class="panel-heading">Search Results</div>
                      
                          <div class="eds-auto-suggest eds-reset-ht">
                                <span data-edstid="autoSuggest">
                                    Did you mean: {{AutoSuggest}}?
                                    <span data-edstid="autoSuggestItem">
                                        <a class="eds-auto-suggest-term" href="javascript:{}"><highlight>{{AutoSuggestedTerm}}</highlight></a>&nbsp;
                                    </span>
                                </span>
                          </div>
                      
                      
                      <div class="panel-body eds-results">



                        <div class="input-group eds-searchbox" data-edstid="searchBox" data-edsreplacewith="#searchbox">
                          <input type="text" class="form-control input-lg eds-query" placeholder="Hello :). Type here to start searching..."  onkeypress="EDSSearchHandle(event)">
                          <span class="input-group-btn">
                            <button class="btn btn-primary btn-lg" type="button" onclick="EDSSearchHandle(event)">Search</button>
                          </span>
                        </div>
                        
                                                
                        
                        <div id="searchResults">
                                <div  data-edstid="records" class="eds-search-record eds-reset-rm" style="border-bottom: 1px solid #DDD;padding-bottom: 20px;">
                                <div class="row" id="edsrecord_{{ResultId}}">
                                    <div align="center" class="col-sm-2">
                                    
                                        <div style="margin-top: 7px;">
                                            
                                            <small>{{ResultId}}.&nbsp;</small><input type="checkbox" class="eds-folder" name="eds-folder" id="eds-folder_{{ResultId}}" value="eds-folder_dbid3D{{DbId}}26an3D{{An}}" data-edsfolder="{{Raw}}">
                                        </div>
                        
                                        <div  style="float:initial;margin-left:5px;" class="pt-icon pt-{{PubTypeId}}{{ImageInfo-thumb}}"><a target="_blank" href="{{ImageInfo-medium}}" style="display:none;" data-edsshow="{{ImageInfo-thumb}}"><img style="width:100%;height:auto;" src="{{ImageInfo-thumb}}"></a></div>
                                        <div><small>{{PubType}}</small></div>

                                    </div>
                                    <div class="col-sm-10"  data-edstid="record" ><a name="dbid%3D{{DbId}}%26an%3D{{An}}"></a>
                                        <h5><a style="font-size:1.1em" class="eds-item-title" href="javascript:{}" >{{Item.Title.Data}}</a></h5>
                                        
                                        <span> 
                                            {{recordItems}}
                                            <div data-edstid="recordItems">
                                                <small><em><strong>{{Label}}</strong></em>: {{Data}}</small>
                                            </div>
                                        </span>
                                                                                                                                                                          <div>
                                                                                                                                                                              {{CustomLinks}}
                                                                                                                                                                              <a class="btn" data-edstid="ftHTML" href="{{PLink}}{{AuthType}}"  target="_blank" title="HTML Full Text" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}">
                                                HTML Full Text
                                            </a>
                                                    
                                            <a class="btn" data-edstid="ftCustomLinks" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}" href="{{URL}}" title="{{MouseOverText}}">
                                                {{Text}}
                                            </a>
                                            
                                            <a class="btn" data-edstid="ftLinks" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}" href="{{URL}}" title="Link">
                                                {{Type}}
                                            </a>
                                            
                                            <a class="btn" data-edstid="ftLinksPDF" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}" href="{{URL}}" title="PDF Full Text">
                                                PDF Full Text
                                            </a>
                                            
                                            <a class="btn" data-edstid="ftLinksOther" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}" href="{{URL}}" title="Linked Full Text">
                                                Linked Full Text
                                            </a>
                                            
                                            <a class="btn" data-edstid="customLinks" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}_{{Type}}" href="{{URL}}" title="{{MouseOverText}}">
                                                <img data-edsshow="{{Icon}}" src="{{Icon}}">{{Text}}
                                            </a>
                                                                                                                      
                                        </div>
                                        <div class="modal fade dbid3D{{DbId}}26an3D{{An}}-holder" tabindex="-1" role="dialog"  style="display:none;">
                                          <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Record Detail</h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="eds-record-details eds-reset-rm col-xs-12" data-edsretrieve="dbid%3D{{DbId}}%26an%3D{{An}}" style="float:initial;">
                                                    <span data-edsresultid='{{ResultId}}' class="dbid3D{{DbId}}26an3D{{An}}">
                                                    {{detailLoader}}
                                                    </span>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                      
                      
                      
                      
                      
                      
                      
                        <div data-edstid="noResults" class="eds-no-results eds-reset-rm">
                            <h3>No Results</h3>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                      </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="col-xs-3">
                    <div class="panel panel-default">
                      <div class="panel-heading">Related Content</div>
                      <div class="panel-body">




                        <div class="row eds-related-content eds-reset-ht">
                            <span  data-edstid='relatedContent'>
                                {{RelatedContent}}
                                <div class="col-xs-12" data-edstid="relatedContentItems">
                                    {{exactMatchPlacard}}  
                                    <div class="row"  id="EDSEMP" data-edstid="exactMatchPlacard">
                                        <div class="contact-location col-xs-12 md main-el" style="margin-bottom:20px;">
                                            <div class="sep-heading-container shc4 clearfix">
                                                <h4>{{Label}}</h4>
                                                <div class="sep-container">
                                                    <div class="the-sep"></div>
                                                </div>
                                            </div>
                                            {{exactMatchPlacardItems}}
                                            <div class="eds-emp-item" data-edstid="exactMatchPlacardItems"><a name="dbid%3D{{DbId}}%26an%3D{{An}}"></a>
                                                <div style="float:right; margin-left: 10px; margin-bottom: 10px;">
                                                    <a target="_blank" href="{{ImageInfo-medium}}" style="display:none;" data-edsshow="{{ImageInfo-thumb}}">
                                                        <img style="width:150px;height:auto;" src="{{ImageInfo-thumb}}">
                                                    </a>
                                                </div>
                                                <!-- use {PLink} in href or {Retrieve} in onclick -->
                                                <a style="font-size:1.1em" class="eds-emp-title" href="{{PLink}}{{AuthType}}" target="_blank" >{{Item.Title.Data}}</a><br>
                                                <p style="font-size:0.9em">
                                                    <span>{{recordItems}}</span>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    {{exactMatchPlacardSearch}}
                                                    <div id="search-in-pub" class="input-group input-group-sm" data-edstid="exactMatchPlacardSearch" >
                                                        <input onkeypress="EDSHelperHandle(event, '{{ResourceType}}', '{{TitleFull}}')"  placeholder="Search within publication" title="Type something and hit enter to search this publication" type="text" value="" maxlength="2048"  class="form-control eds-search-in-pub">
                                                        <span  class="input-group-btn">
                                                            <button class="btn btn-default" onclick="EDSActionSearchWithPub('{{ResourceType}}','{{TitleFull}}');" id="search-in-pub-icon" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-xs-12">
                                                    {{exactMatchPlacardHoldings}}
                                                    <div data-edstid="exactMatchPlacardHoldings">
                                                        {{exactMatchPlacardHoldingItems}}
                                                            <div style="width:100%;" data-edstid="exactMatchPlacardHoldingItems" id="eds-ftholding"  class="btn-group">
                                                            <button style="width:100%;" class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span> Click here for Full Text 
                                                            <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                {{exactMatchPlacardHoldingItem}}
                                                                <li data-edstid="exactMatchPlacardHoldingItem" text="{{Name}}">
                                                                    <a title="{{Name}}" onclick="window.open('{{URL}}');return false;" href="javascript:;" id="edsepm_{{FullTextHolding}}_Anchor">
                                                                            <span>{{Name}}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    {{researchStarters}}
                                    <div class="row" id="EDSRS" data-edstid="researchStarters">
                                        <div class="contact-location col-xs-12 md main-el" style="margin-bottom:20px;">
                                            <div class="sep-heading-container shc4 clearfix">
                                                <h4>{{Label}}</h4>
                                                <div class="sep-container">
                                                    <div class="the-sep"></div>
                                                </div>
                                            </div>
                                            {{researchStarterRecord}}
                                            <div class="eds-rs-item" data-edstid="researchStarterRecord"><a name="dbid%3D{{DbId}}%26an%3D{{An}}"></a>
                                                <div style="float:right; margin-left: 10px; margin-bottom: 10px;">
                                                    <a target="_blank" href="{{ImageInfo-medium}}" style="display:none;" data-edsshow="{{ImageInfo-thumb}}">
                                                        <img style="width:150px;height:auto;" src="{{ImageInfo-thumb}}">
                                                    </a>
                                                </div>
                                                <!-- use {PLink} in href or {Retrieve} in onclick -->
                                                <a style="font-size:1.1em" class="eds-rs-title" href="{{PLink}}{{AuthType}}" target="_blank" >{{Item.Title.Data}}</a> <small>/ by {{Item.Authors.Data}}</small><br>
                                                <p style="font-size:0.9em">
                                                    <span style="display:none;">{{Item s}}</span>
                                                    
                                                    <div style="display:none;" data-edsshow="{{Item.Abstract.Label}}">
                                                        <sub>
                                                            <em><strong>{{Item.Abstract.Label}}</strong></em>: {{Item.Abstract.Data}}
                                                        </sub>
                                                    </div>
                                                    <p data-edsshow="{{Item.Source.Data}}"><br>
                        <small><i>From: {{Item.Source.Data}}</i></small></p>
                                                </p>
                                            
                                                <div style="display:none;" class="btn-group btn-group-xs submit" role="group" aria-label="Extra-small button group">
                                                    {{CustomLinks}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                                </div>
                                
                        
                            </span>
                        </div>

						<iframe src="http://widgets.ebscohost.com/prod/simplekey/buttonwidget/index.php?dbs=325,1413,46,1322,328&custid=alvetm&search=ep.SearchTerm" width="195" height="220" frameborder="0"></iframe>



















                      </div>
                    </div>
                </div>
            </div>
            
            <span class="eds-fetch-more"></span>
            
            <div data-edstid="loader" class="modal fade bs-example-modal-sm" id="EDSWorkingOnIt" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <span class="glyphicon glyphicon-time">
                                </span>Please Wait
                             </h4>
                        </div>
                        <div class="modal-body">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped active"
                                style="width: 0%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            
            <div data-edstid="overlay" id="EDSOverlay"></div>
            
            <div data-edstid="detailLoader" id="edsDetailNotificationArea">
                <button class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                
                    <div class="panel panel-default panel-main" style="border:0px solid #FFF;">
                        <div class="panel-body">
                        <center>                                
                            <span id="jswrapper-showing"></span>
                            <span class="eds-result-count">
                                loading
                            </span> results.
                        </center>
                        </div>
                    </div>
                
                </div>
                <div></div>
            </div>
            
            
        </span>
        
        <!-- Detail Page  -->
					<div class="eds-page eds-page-detail" style="display:none;">
                        <div class="row" data-edstid="detailedRecord" style="background-color:#EEE;">
                            <div class="col-xs-8" style="background-color:#FFF;">
                                    <div class="row">
                                        <div class="col-xs-offset-1 col-xs-11">
                                            <div class="thumbnail thumbnail-fulldisplay" style="float: right;margin-left: 30px;margin-bottom: 30px;">
                                                <div style="margin-bottom: 10px;" align="center">
                                                    <div  style="float:initial;margin-left: 10px;" class="pt-icon{{ImageInfo-medium}} pt-{{PubTypeId}}{{ImageInfo-medium}}"><a target="_blank" href="{{ImageInfo-medium}}" data-edsshow="{{ImageInfo-thumb}}"><img style="width:100%;height:auto;" src="{{ImageInfo-medium}}"></a></div>
                                                    <div align="center"><small class="label label-info">{{PubType}}</small></div>
                                                </div>
                                
                                            </div>
                                            {{recordItems}}
                                              <div class="ccm-dialog-help-item" data-edstid="detailedItems">
                                                <h4>{{Label}}</h4>
                                                {{Data}}
                                                </div>
                                        </div>
                                    </div>
                            </div>
                          <div class="col-xs-4">
                
                            <div class="ccm-dialog-help-item">
                
                                {{CustomLinks}}
                                <div data-edstid="ftHTMLDetailed"><a class="btn btn-default btn-sm btn-block eds-detail-links" href="{{PLink}}{{AuthType}}"  target="_blank" title="HTML Full Text" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}">
                                    <img src="">HTML Full Text
                                </a></div>            
                                <div data-edstid="ftCustomLinksDetailed"><a class="btn btn-default btn-block eds-detail-links" data-edstid="ftCustomLinks" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}" href="{{URL}}" title="{{MouseOverText}}">
                                    <img src="">{{Text}}
                                </a></div>
                                <div data-edstid="ftLinksDetailed"><a class="btn btn-default btn-sm btn-block eds-detail-links" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}" href="{{URL}}" title="Link">
                                    <img src="">{{Type}}
                                </a></div>
                                <div data-edstid="ftLinksPDFDetailed"><a class="btn btn-default btn-sm btn-block eds-detail-links" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}" href="{{URL}}" title="PDF Full Text">
                                    <img src="">PDF Full Text
                                </a></div>
                                <div data-edstid="ftLinksOtherDetailed"><a class="btn btn-default btn-sm btn-block eds-detail-links" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}" href="{{URL}}" title="Linked Full Text">
                                    <img src="">Linked Full Text
                                </a></div>
                                <div data-edstid="customLinksDetailed"><a class="btn btn-default btn-sm btn-block eds-detail-links" target="_blank" id="dbid3D{{DbId}}26an3D{{An}}{{Type}}" href="{{URL}}" title="{{MouseOverText}}">
                                    <img src="{{Icon}}"/>{{Text}}
                                </a></div>
                                <div><a class="btn btn-default btn-sm btn-block eds-detail-links" target="_blank" href="{{PLink}}{{AuthType}}" title="View record in EDS" id="dbid3D{{DbId}}26an3D{{An}}EDS">
                                    View record in EDS
                                </a></div>
                
                            </div>
                          </div>
                        </div>
                    </div>
            
        
        <!-- Folder Page  -->
        <span class="eds-page eds-page-folder">
<div class="modal fade" id="EDSViewFolder" tabindex="-1" role="dialog" aria-labelledby="myFolderLabel" data-edstid="folderView">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myFolderLabel">Folder</h4>
      </div>
      <div class="modal-body">
                  <center>
                  
                    <a class="btn btn-primary btn-sm edsfolderprint" href="javascript:{}" title="Items in Folder" >Print Selected</a>
                    <a class="btn btn-primary btn-sm edsfolderemail" href="javascript:{}" title="Items in Folder" >Email Selected</a>
                    <a class="btn btn-primary btn-sm edsfolderremove" href="javascript:{}" title="Items in Folder" >Remove Selected</a>
                    <a class="btn btn-primary btn-sm edsfolderprintall" href="javascript:{}" title="Items in Folder" >Print All</a>
                    <a class="btn btn-primary btn-sm edsfolderemailall" href="javascript:{}" title="Items in Folder" >Email All</a>
                    <a class="btn btn-primary btn-sm edsfolderremoveall" href="javascript:{}" title="Items in Folder" >Remove All</a>
                  
                  </center>
                  <div class="row">
                    <div class="col-xs-12">
                            Your folder contains <span class="eds-folder-count"></span> records
                      </div>
                      
                  </div>              
                  <hr /> 
                    <div>
                      <ul class="eds-folder-results">
                        <li data-edstid="folderViewRecords" class="eds-folder-record">
                          <div>
                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
                              <tbody>
                                <tr valign="top" id="edsfolderrecord_{{viewItemCount}}">
                                  <td align="right" style="width:5%;">{{viewItemCount}}.&nbsp; </td>
                                  <td style="width:20px;">
                                  <input type="checkbox" id="eds-folder-record_{{viewItemCount}}" value="eds-folder_dbid3D{{DbId}}26an3D{{An}}" class="eds-folder-item">
                                        <label for="eds-folder-record_{{viewItemCount}}" class="sr-only">Select</label>
                                    </td>
                                    <td data-edstid="folderViewRecord"><a name="dbid%3D{{DbId}}%26an%3D{{An}}"></a>
                                        <div style="float:right; margin-left: 10px; margin-bottom: 10px;">
                                            <div  style="float:right;margin-left: 10px;" class="pt-icon pt-{{PubTypeId}}{{ImageInfo-thumb}}"><a target="_blank" href="{{ImageInfo-medium}}" style="display:none;" data-edsshow="{{ImageInfo-thumb}}"><img style="width:100%;height:auto;" src="{{ImageInfo-thumb}}"></a></div>
                                            <div align="center"><small class="label label-info">{{PubType}}</small></div>
                                        </div>
                                        <!-- use {PLink} in href or {Retrieve} in onclick -->
                                        <a style="font-size:1.1em" class="eds-folderitem-title" href="javascript:{}" >{{Item.Title.Data}}</a><br>
                                    <p style="font-size:0.9em">
                                        {{recordItems}}
                                    </p>
                                    
                                    <p><div class="btn-group btn-group-xs submit" role="group" aria-label="Extra-small button group">
                                        {{CustomLinks}}
                                        
                                    </div></p>
                                    <span class="dbid3D{{DbId}}26an3D{{An}}-folder" style="display:none;">
                                        <div class="eds-record-details eds-reset-rm col-xs-12 col-sm-9" data-edsretrieve="dbid%3D{{DbId}}%26an%3D{{An}}">
                                            <span data-edsresultid='{{viewItemCount}}' class="dbid3D{{DbId}}26an3D{{An}}">
                                            {{detailLoader}}
                                            </span>
                                        </div>
                                    </span>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </li>                
                      </ul>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




        
        
        
            <div id="EDSFolderPrint" data-edstid="folderPrint"> 
                <h2>({{printItemCount}}) Records from List</h2>
                {{folderPrintRecords}}
                <div class="eds-folderprint-item" data-edstid="folderPrintRecords">
                    {{Item.Title.Data}}<br>
                    <p style="font-size:0.9em">
                        <span>{{recordItems}}</span>
                    </p>
                    <p>http:{{PLink}}</p>	
                    <hr />											
                </div>
            </div>
            
            
            
            <div id="EDSFolderEmail" data-edstid="folderEmail" data-folderemailsubject="({{Count}}) Records from List"> 
({{emailItemCount}}) Records from List
----------------------------
{{folderEmailRecords}}
<div class="eds-folderprint-item" data-edstid="folderEmailRecords">
{{Item.Title.Data}}
http:{{PLink}}

----------------------------
</div>
            </div>
        </span>
        
    </span>
</span>