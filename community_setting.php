<?php include_once 'metahead.php'; ?>
<?php include_once 'header.php';?>
<style>
.select2-dropdown{
  border-color: #2A2929
}
</style>
    <main>
      <!-- Main Article-->
      <article>
        <div class="maincontent">
          <div class="profile__settings">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="profile__settings--wrap">
                    <div class="profile__settings--title">
                      <h2 class="text-center nunitoLight">COMMUNITY SETTING</h2>
                      <br/>
                    </div>
                    <div class="profile__settings--banner backgroundCoverCenter relative" style="background-image: url('<?php echo url('asset/static/community/cohive_banner.png')?>')">
                      <img src="<?php echo url('asset/static/community/cohive_banner.png')?>" alt="banner" class="img-fluid invisible"/>
                      <a href="javascript:void(0);" data-toggle="modal" data-target="#modalcanvas" class="btn-edit-circle profile__settings--canvas--edit"><i class="fas fa-pen"></i></a>
                    </div>
                    <div class="profile__settings--foto">
                      <div class="d-inline-block relative">
                        <img src="<?php echo url('asset/static/community/cohive_icon.png')?>" alt="" class="rounded-circle" width="100" height="100"/>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#modal" class="btn-edit-circle community__settings--foto--edit"><i class="fas fa-pen"></i></a>
                      </div>
                    </div>

                    <div class="profile__settings--content">
                      <div class="row">
                        <div class="col-md-3 border-md-right-grey">
                          <div class="nav flex-column text-right text-uppercase" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link relative active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="true">Account <i class="fas fa-caret-right arrow"></i></a>

                            <a class="nav-link relative " id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="false">Members <i class="fas fa-caret-right arrow"></i></a>
                            
                            <a class="nav-link relative " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Join Request <i class="fas fa-caret-right arrow"></i></a>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                              <form action="">
                              <div class="relative d-inline-block w-100 mb-4">
                                <label class="switch">
                                  <input type="checkbox" class="input-switch" checked>
                                  <span class="slider"></span>
                                  <div class="switch-input d-flex">
                                    <div class="public">
                                    <i class="far fa-unlock-alt"></i> &nbsp;Public
                                    </div>
                                    <div class="private">
                                    <i class="far fa-lock-alt"></i> &nbsp;Private
                                    </div>
                                  </div>
                                </label>
                              </div>
                                <div class="relative d-inline-block w-100">
                                  <input type="text" name="url" class="form-control input-form-grey input-radius " placeholder="cohive"/>
                                  <label class="label-input">Friendly URL</label>
                                </div>
                                <div class="color-70 mb-2"><small>http://achikoplay.com/community/cohive</small></div>
                                <br/>
                                <div class="relative d-inline-block w-100 mb-4">
                                  <textarea id="description" type="text" name="description" class="form-control input-form-grey input-radius" placeholder="Type your description date"></textarea>
                                  <label class="label-input">Description</label>
                                </div>
                                <div class="d-block w-100 text-center">
                                  <div class="d-inline profile__settings--submit--cancel">
                                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary">Discard</button>
                                  </div>
                                </div>
                              </form>
                            </div>

                            <!-- Member Tab -->
                            <div class="tab-pane fade" id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
                              <div class="row">
                                <div class="col-md-6">
                                <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-1">
                                            Alexa Wallace
                                            <div><small><i class="fas fa-crown"></i> Admin</small></div>
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox active" data-toggle="modal" data-target="#demoteadmin" tabindex="-1" role="dialog" aria-labelledby="demoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_2.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-1">
                                        Keenan Edge
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox" data-toggle="modal" data-target="#promoteadmin" tabindex="-1" role="dialog" aria-labelledby="demoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_3.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-4">
                                        Kain Sheridan
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox" data-toggle="modal" data-target="#promoteadmin" tabindex="-1" role="dialog" aria-labelledby="promoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_5.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-1">
                                        Essa Mays
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox" data-toggle="modal" data-target="#promoteadmin" tabindex="-1" role="dialog" aria-labelledby="promoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_6.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-1">
                                        Lucinda Fischer
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox" data-toggle="modal" data-target="#promoteadmin" tabindex="-1" role="dialog" aria-labelledby="promoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="addpartymember__item">
                                    <div class="d-flex">
                                        <div class="align-self-center mr-2">
                                            <img src="asset/static/avatar/avatar_7.png" class="rounded-circle" width="50" height="50" />
                                        </div>
                                        <div class="align-self-center flex-grow-1">
                                        Reilly Stanley
                                        </div>
                                        <a class="add-member-link"><i class="fal fa-ellipsis-v"></i></a>
                                    </div>
                                    <div class="addpartymember__meta d-none">
                                      <div class="row">
                                        <div class="col-5">
                                          <a class="circle-checkbox" data-toggle="modal" data-target="#promoteadmin" tabindex="-1" role="dialog" aria-labelledby="promoteadminLabel" aria-hidden="true">Admin
                                            <span class="checkmark"></span>
                                          </a>
                                        </div>
                                        <div class="col-7">
                                            <a href="#" class="kick--user--link" data-toggle="modal" data-target="#kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true"><i class="fal fa-ban"></i> Kick this user</a>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            
                            <!-- Join Request Tab -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                              <div class="row">
                                  <div class="col-12">
                                      <div class="addpartymember__item d-flex">
                                          <div class="align-self-center">
                                              <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                                          </div>
                                          <div class="align-self-center flex-grow-1">
                                              Kapak Merah
                                          </div>
                                          <div class="align-self-center">
                                          <div class="d-inline profile__settings--submit--cancel">
                                              <button class="btn btn-warning btn-submit btn-sm" data-toggle="modal" data-target="#acceptmodal" tabindex="-1" role="dialog" aria-labelledby="acceptmodalLabel" aria-hidden="true">Accept</button> &nbsp;&nbsp; <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#declinemodal" tabindex="-1" role="dialog" aria-labelledby="declinemodalLabel" aria-hidden="true">Decline</button>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="addpartymember__item d-flex">
                                          <div class="align-self-center">
                                              <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                                          </div>
                                          <div class="align-self-center flex-grow-1">
                                              Kapak Merah
                                          </div>
                                          <div class="align-self-center">
                                          <div class="d-inline profile__settings--submit--cancel">
                                              <button class="btn btn-warning btn-submit btn-sm" data-toggle="modal" data-target="#acceptmodal" tabindex="-1" role="dialog" aria-labelledby="acceptmodalLabel" aria-hidden="true">Accept</button> &nbsp;&nbsp; <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#declinemodal" tabindex="-1" role="dialog" aria-labelledby="declinemodalLabel" aria-hidden="true">Decline</button>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="addpartymember__item d-flex">
                                          <div class="align-self-center">
                                              <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                                          </div>
                                          <div class="align-self-center flex-grow-1">
                                              Kapak Merah
                                          </div>
                                          <div class="align-self-center">
                                          <div class="d-inline profile__settings--submit--cancel">
                                              <button class="btn btn-warning btn-submit btn-sm" data-toggle="modal" data-target="#acceptmodal" tabindex="-1" role="dialog" aria-labelledby="acceptmodalLabel" aria-hidden="true">Accept</button> &nbsp;&nbsp; <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#declinemodal" tabindex="-1" role="dialog" aria-labelledby="declinemodalLabel" aria-hidden="true">Decline</button>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-12">
                                      <div class="addpartymember__item d-flex">
                                          <div class="align-self-center">
                                              <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                                          </div>
                                          <div class="align-self-center flex-grow-1">
                                              Kapak Merah
                                          </div>
                                          <div class="align-self-center">
                                          <div class="d-block w-100 text-center">
                                            <div class="d-inline profile__settings--submit--cancel">
                                              <button class="btn btn-warning btn-submit btn-sm" data-toggle="modal" data-target="#acceptmodal" tabindex="-1" role="dialog" aria-labelledby="acceptmodalLabel" aria-hidden="true">Accept</button> &nbsp;&nbsp; <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#declinemodal" tabindex="-1" role="dialog" aria-labelledby="declinemodalLabel" aria-hidden="true">Decline</button>
                                            </div>
                                          </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <!-- End article-->
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body bg-light text-dark pb-3 pt-3">
            <div class="profile__settings--change--image__wrap">
              <h5 class="text-center">Change Community Picture</h5>
              <div id="droparea" class="profile__settings--change--image__uploadbg">
                <input type="file" class="dropinput dropzonefoto" name="foto"/>
                <div class="profile__settings--change--image__upload--preview">
                  <div class="relative previewimg text-center">
                  </div>
                </div>
                  <div class="profile__settings--change--image__upload relative" style="background-image: url('<?php echo url('asset/static/icon/uploadbg.png')?>')">
                    <div class="profile__settings--change--image--loop"></div>
                  </div>
              </div>
              </div>
              <div class="profile__settings--change--upload__button">
                <div class="text-center">Drag and drop your images here</div>
                <div class="text-center">or</div>
                <br/>
                <div class="text-center mb-3">
                  <a href="javascript:void(0);" class="btn btn-light-light text-muted uploadapicture">Upload a picture</a>
                </div>
              </div>
              <div class="d-block w-100 text-center">
                <div class="d-inline profile__settings--submit--cancel">
                  <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Discord</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modalcanvas" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body bg-light text-dark pb-3 pt-3">
              <div class="profile__settings--change--image__wrap">
                <h5 class="text-center">Change Community Picture</h5>
                <div id="dropareas" class="profile__settings--change--image__uploadbg canvas">
                  <input type="file" class="dropinput dropzonecanvas" name="foto"/>
                  <div class="profile__settings--change--image__upload--preview">
                    <div class="relative previewimg text-center">
                    </div>
                  </div>
                    <div class="profile__settings--change--image__upload relative" style="background-image: url('<?php echo url('asset/static/icon/uploadbg.png')?>')">
                      <div class="profile__settings--change--image--loop"></div>
                    </div>
                </div>
                </div>
                <div class="profile__settings--change--upload__button">
                  <div class="text-center">Drag and drop your images here</div>
                  <div class="text-center">or</div>
                  <br/>
                  <div class="text-center mb-3">
                    <a href="javascript:void(0);" class="btn btn-light-light text-muted uploadacanvas">Upload a picture</a>
                  </div>
                </div>
                <div class="d-block w-100 text-center">
                  <div class="d-inline profile__settings--submit--cancel">
                    <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Discord</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="promoteadmin" tabindex="-1" role="dialog" aria-labelledby="promoteadminLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body pd-50">
            <div class="clearfix">
            <button type="button" class="close absright color-70" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="maincontent__widget--addpartymember relative">

            <div class="addpartymember__list">
                <div class="row">

                    <div class="col-6 offset-3">
                        <div class="addpartymember__item d-flex">
                            <div class="align-self-center">
                                <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="30" height="30" />
                            </div>
                            <div class="align-self-center flex-grow-1">
                                Alexander Frost
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <h6 class="text-center">Are you sure want to <strong>PROMOTE</strong> this person <br/>for your <strong class="text-danger">COMMUNITY ADMIN</strong> ?</h6>

            <div class="d-block w-100 text-center mt-4">
              <div class="d-inline profile__settings--submit--cancel">
                <button class="btn btn-warning btn-submit">Yes</button> &nbsp;&nbsp; 
                <button class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div><!-- / End Modal -->

        <!-- Modal -->
        <div class="modal fade" id="demoteadmin" tabindex="-1" role="dialog" aria-labelledby="demoteadminLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body pd-50">
            <div class="clearfix">
            <button type="button" class="close absright color-70" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="maincontent__widget--addpartymember relative">

            <div class="addpartymember__list">
                <div class="row">

                    <div class="col-6 offset-3">
                        <div class="addpartymember__item d-flex">
                            <div class="align-self-center">
                                <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="30" height="30" />
                            </div>
                            <div class="align-self-center flex-grow-1">
                                Alexander Frost
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <h6 class="text-center">Are you sure want to <strong>REMOVE</strong> this person <br/>for your <strong class="text-danger">COMMUNITY ADMIN</strong> ?</h6>

            <div class="d-block w-100 text-center mt-4">
              <div class="d-inline profile__settings--submit--cancel">
                <button class="btn btn-warning btn-submit">Yes</button> &nbsp;&nbsp; 
                <button class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div><!-- / End Modal -->


        <!-- Modal -->
        <div class="modal fade" id="kickusermodal" tabindex="-1" role="dialog" aria-labelledby="kickusermodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body pd-50">
            <div class="clearfix">
            <button type="button" class="close absright color-70" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="maincontent__widget--addpartymember relative">

            <div class="addpartymember__list">
                <div class="row">

                    <div class="col-6 offset-3">
                        <div class="addpartymember__item d-flex">
                            <div class="align-self-center">
                                <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="30" height="30" />
                            </div>
                            <div class="align-self-center flex-grow-1">
                                Alexander Frost
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <h6 class="text-center">Are you sure want to <strong class="text-danger">KICK</strong> this person <br/>from your community ?</h6>

            <div class="d-block w-100 text-center mt-4">
              <div class="d-inline profile__settings--submit--cancel">
                <button class="btn btn-warning btn-submit">Yes</button> &nbsp;&nbsp; 
                <button class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div><!-- / End Modal -->

        <!-- Modal -->
        <div class="modal fade" id="acceptmodal" tabindex="-1" role="dialog" aria-labelledby="acceptmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body pd-50">
            <div class="clearfix">
            <button type="button" class="close absright color-70" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="maincontent__widget--addpartymember relative">
            <h6 class="text-secondary text-center">You want to approve</h6>
            <div class="addpartymember__list mt-3">
                <div class="row">

                    <div class="col-6 offset-3">
                        <div class="addpartymember__item d-flex">
                            <div class="align-self-center">
                                <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="30" height="30" />
                            </div>
                            <div class="align-self-center flex-grow-1">
                                Alexander Frost
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <h6 class="text-center">For your <strong class="text-danger">COMMUNITY MEMBER</strong> ?</h6>

            <div class="d-block w-100 text-center mt-4">
              <div class="d-inline profile__settings--submit--cancel">
                <button class="btn btn-warning btn-submit">Yes</button> &nbsp;&nbsp; 
                <button class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div><!-- / End Modal -->

        <!-- Modal -->
        <div class="modal fade" id="declinemodal" tabindex="-1" role="dialog" aria-labelledby="declinemodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-body pd-50">
            <div class="clearfix">
            <button type="button" class="close absright color-70" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="maincontent__widget--addpartymember relative">
            <h6 class="text-secondary text-center">You want to reject</h6>
            <div class="addpartymember__list mt-3">
                <div class="row">

                    <div class="col-6 offset-3">
                        <div class="addpartymember__item d-flex">
                            <div class="align-self-center">
                                <img src="asset/static/avatar/avatar_1.png" class="rounded-circle" width="30" height="30" />
                            </div>
                            <div class="align-self-center flex-grow-1">
                                Alexander Frost
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <h6 class="text-center">For your <strong class="text-danger">COMMUNITY MEMBER</strong> ?</h6>

            <div class="d-block w-100 text-center mt-4">
              <div class="d-inline profile__settings--submit--cancel">
                <button class="btn btn-warning btn-submit">Yes</button> &nbsp;&nbsp; 
                <button class="btn btn-secondary" data-dismiss="modal">No</button>
              </div>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div><!-- / End Modal -->
    </div>
    <?php include_once 'footer.php';?>
    <?php include_once 'loadscript.php';?>
    <script src="<?php echo url('asset/js/jquery-3.4.1.min.js');?>"></script>
    <script src="<?php echo url('asset/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo url('asset/js/select2.full.min.js');?>"></script>
    <script src="<?php echo url('asset/gijgo/js/gijgo.min.js');?>"></script>
    <script src="<?php echo url('asset/croppie/croppie.min.js');?>"></script>
    <script>
      function readURL(input, element, callback) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            var htmlPreview = '<img alt="img" src="' + e.target.result + '" class="img-fluid imgcroppie"/>';
            $(element).append(htmlPreview);
            if(callback){
              callback();
            }
            //$(element).attr('style', 'background-image: url('+e.target.result+')');
          }

          reader.readAsDataURL(input.files[0]);
        }
      }


      $(document).ready(function(){
        $('.add-member-link').on('click', function(){
          var par = $(this).closest('.addpartymember__item');
          par.find('.addpartymember__meta').toggleClass('d-none');
        });
        $('.selectsort').select2({
          placeholder: 'Please Select',
          minimumResultsForSearch: 10
        });

        $('#droparea').on('dragover', function(e) {
           e.preventDefault();
           e.stopPropagation();
           $(this).addClass('dragover');
        });

        $('.uploadapicture').on('click', function(){
          $('.dropzonefoto').click();
        });
        $('.uploadacanvas').on('click', function(){
          $('.dropzonecanvas').click();
        });
        $(document).on('change', '.dropzonefoto', function(){
          $('.profile__settings--change--image__upload--preview').addClass('preview');
          readURL(this, $(this).parent().find('.profile__settings--change--image__upload--preview .previewimg'), function(){
            $('.profile__settings--change--image__upload').addClass('invisible');
            $('.profile__settings--change--upload__button').addClass('d-none');
            $('.profile__settings--change--image__wrap').addClass('haspicture');
            $('.imgcroppie').croppie({
              viewport: {
        				width: 150,
        				height: 150,
        				type: 'circle'
        			},
            });
          });
        });
        $(document).on('change', '.dropzonecanvas', function(){
          $('.profile__settings--change--image__upload--preview').addClass('preview');
          readURL(this, $(this).parent().find('.profile__settings--change--image__upload--preview .previewimg'), function(){
            $('.profile__settings--change--image__upload').addClass('invisible');
            $('.profile__settings--change--upload__button').addClass('d-none');
            $('.profile__settings--change--image__wrap').addClass('haspicture');
            $('.imgcroppie').croppie({
              viewport: {
                width: 500,
        				height: 160,
        				type: 'square'
        			},
            });
          });
        });
        $('#modal').on('hidden.bs.modal', function () {
          $('.dropzonefoto').val('');
          $('.profile__settings--change--image__upload--preview').removeClass('preview');
          $('.profile__settings--change--image__upload--preview .previewimg').html('');
          $('.profile__settings--change--image__upload').removeClass('invisible');
          $('.profile__settings--change--image__uploadbg').removeClass('dragover');
          $('.profile__settings--change--upload__button').removeClass('d-none');
          $('.profile__settings--change--image__wrap').removeClass('haspicture');
        });
        $('#modalcanvas').on('hidden.bs.modal', function () {
          $('.dropzonefoto').val('');
          $('.profile__settings--change--image__upload--preview').removeClass('preview');
          $('.profile__settings--change--image__upload--preview .previewimg').html('');
          $('.profile__settings--change--image__upload').removeClass('invisible');
          $('.profile__settings--change--image__uploadbg').removeClass('dragover');
          $('.profile__settings--change--upload__button').removeClass('d-none');
          $('.profile__settings--change--image__wrap').removeClass('haspicture');
        });
      });
    </script>
<?php include_once 'footerhtml.php';?>
