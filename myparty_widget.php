<div class="container maincontent__widget--myparty relative mt-5">
              <div class="row mt-5">
              <div class="col-md-12">
                  <div class="clearfix mb-2px">
                  <h5 class="float-left">My Party</h5>
                  <div class="float-right">
                      <div class="btn-group">
                      <button type="button" class="btn btn-warning btn-sm dropdown-toggle-split mr-2px" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fal fa-plus-circle"></i>
                      </button>
                      <button type="button" data-toggle="modal" data-target="#createpartymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="btn btn-warning btn-sm community__btnjoin">Create Party</button>
                      </div>
                  </div>
                  </div>
              </div>
              </div>

              <div class="myparty__wrapper">
                <h5 class="font-weight-light">SaoSambel_team</h5>
                <a href="#" class="close__link"><i class="far fa-times-circle"></i></a>
                  <div class="d-flex myteam__user--list justify-content-between">

                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/user_icon2.png" height="70" />
                        <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span>
                        </div>
                        <div class="myteam__user--name">
                        Mr. Brownstone
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/user_icon5.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. RedWine
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/user_icon2.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. RedWine
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/user_icon3.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. RedWine
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/user_icon4.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. RedWine
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/usericon.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. Chocolate
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/usericon.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. Yellow
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__user--item">
                        <div class="myteam__user--image">
                        <img src="asset/static/usericon.png" height="70" />
                        <!-- <span class="rounded-circle bg-white text-danger"><i class="fas fa-crown"></i></span> -->
                        </div>
                        <div class="myteam__user--name">
                        Mr. Purple
                        Carry
                        </div>
                        <a href="#" class="myteam--delete"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="myteam__party--addmember align-self-center">
                    <a href="javascript:;" data-toggle="modal" data-target="#addpartymodal" tabindex="-1" role="dialog" aria-labelledby="addpartyModalLabel" aria-hidden="true">
                        <span><i class="fal fa-plus-circle"></i></span>
                        Add Member
                    </a>
                    </div>

                  </div>
              </div>

            </div>

<!-- Modal -->
<div class="modal fade" id="createpartymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">
    
    <div class="maincontent__widget--addpartymember relative">
    <h5 class="font-weight-light text-center">CREATE PARTY</h5>
    <form class="mt-5" action="">
        <div class="relative d-inline-block w-100 mb-4">
            <input type="text" name="partyname" class="form-control input-form-grey input-radius text-center" placeholder="SaoSambel_party"/>
            <label class="label-input">Party name</label>
        </div>
        <div class="d-block w-100 text-center mt-4">
            <div class="d-inline profile__settings--submit--cancel">
            <button class="btn btn-warning btn-submit">Save</button> &nbsp;&nbsp; 
            <button class="btn btn-secondary">Discard</button>
            </div>
        </div>
    </form>
    
    </div>
</div>
</div>
</div>
</div><!-- / End Modal -->

<!-- Modal -->
<div class="modal fade" id="addpartymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">
    <div class="clearfix">
    <button type="button" class="close float-right color-70" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="maincontent__widget--addpartymember relative">
    <h5 class="font-weight-light text-center">ADD PARTY</h5>
    <form class="mt-4" action="">
        <div class="wrapinputsearch">
        <input id="input-search" type="text" name="search" class="maincontent__widget--communitytournament--search form-control input-search noradius" placeholder="Search People"/>
        <i class="fal fa-search"></i>
        </div>
    </form>
    <div class="addpartymember__list">
        <div class="row">
            <div class="col-6">
                <div class="addpartymember__item d-flex">
                    <div class="align-self-center">
                        <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                    </div>
                    <div class="align-self-center flex-grow-1">
                        Kapak Merah
                    </div>
                    <div class="align-self-center">
                        <a class="add-member-link"><i class="fal fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="addpartymember__item d-flex">
                    <div class="align-self-center">
                        <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                    </div>
                    <div class="align-self-center flex-grow-1">
                        Kapak Merah
                    </div>
                    <div class="align-self-center">
                        <a class="add-member-link"><i class="fal fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="addpartymember__item d-flex">
                    <div class="align-self-center">
                        <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                    </div>
                    <div class="align-self-center flex-grow-1">
                        Kapak Merah
                    </div>
                    <div class="align-self-center">
                        <a class="add-member-link"><i class="fal fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="addpartymember__item d-flex">
                    <div class="align-self-center">
                        <img src="https://i.pravatar.cc/272?img=1" class="rounded-circle" width="30" height="30" />
                    </div>
                    <div class="align-self-center flex-grow-1">
                        Kapak Merah
                    </div>
                    <div class="align-self-center">
                        <a class="add-member-link"><i class="fal fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
</div>
</div>
</div><!-- / End Modal -->