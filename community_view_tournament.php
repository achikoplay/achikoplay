<div class="community__overview--tournament">
<div class="row">
    <?php
    for ($i=1; $i < 7 ; $i++) :
        if($i == 1){
        $datatext = 'ongoing';
        $textstatus = 'text-success';
        }else if($i == 2 || $i == 3){
        $datatext = 'upcoming';
        $textstatus = 'text-warning';
        }else if($i == 4){
        $datatext = 'ongoing';
        $textstatus = 'text-success';
        }else{
        $datatext = 'finished';
        $textstatus = 'text-danger';
        }
    ?>
    <div class="communitytournament__list--item mb-25px col-lg-12 col-md-6 <?php echo $datatext;?>">
    <div class="row">
        <div class="col-lg-3 col-md-12 pdr-md-0">
        <div class="w-100 h-100 backgroundCoverTop" style="background-image: url('<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>')">
            <img src="<?php echo url('asset/static/tournament/tournamentlist-'.$i.'.jpg')?>" class="img-fluid invisible" alt="img"/>
        </div>
        </div>
        <div class="col-lg-9 col-md-12 bg-dark-list">
        <div class="communitytournament__list--item--header clearfix">
            <div class="communitytournament__list--item--header__icon d-inline-block float-left">
            <img src="<?php echo url('asset/static/gametips/1.png')?>" class="img-fluid" alt="icon"/>
            </div>
            <h5 class="float-left text-uppercase ptb-0 mtb-0">ESL PRO LEAGUE</h5>
            <a href="#" class="float-right text-status <?php echo $textstatus;?> text-uppercase"><?php echo $datatext; ?></a>
        </div>
        <div class="communitytournament__list--item__body">
            <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="clearfix">
                <div class="communitytournament__list--item--info__item">
                    <small>Free</small>
                    <h5>Free</h5>
                </div>
                <div class="communitytournament__list--item--info__item">
                    <small>Slot</small>
                    <h5>36/36</h5>
                </div>
                <div class="communitytournament__list--item--info__item">
                    <small>Date</small>
                    <h5>1 Jan 2020</h5>
                </div>
                <div class="communitytournament__list--item--info__item last">
                    <small>Time</small>
                    <h5>03:00 PM</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="communitytournament__list--item--info__price last">
                <small>CashPrizepool</small>
                <h4 class="text-warning">Rp. 2.000.000</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <?php endfor;?>
    
</div>
</div>