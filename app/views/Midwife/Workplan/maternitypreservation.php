<?php
$this->start('body');?>


<!--end of the side bar-->

<div class='col-md-10'>
    <div class="row mt-5">
        <div class="col-md-9">
            <center>
                <h1>දින වැඩ වාර්තාව <?=$this->period; ?></h1>
            </center>
        </div>
        <div class="col-md-3">

            <form action="<?=PROOT?>Workplan/seeMonthReports/maternitypreservation" method="post">
                <label for="bdaymonth">පසු ගිය මාස වල වාර්තා බලන්න</label>
                <input type="month" class="form-control" id="" name="period" style="width:60%;float:left"
                    value="<?=$this->period?>">
                <button type="submit" class="btn btn-primary" style="width:30%;float:right">submit</button>
            </form>

        </div>

    </div>
    <form action="<?=PROOT?>Workplan/saveMode/maternitypreservation" method="post" style="display:block;width:100%">
        <div class='col-sm-12' style="overflow-x: scroll;overflow-y:hidden">
            <div class="row justify-content-center" style="width: 3000px; ">
                <div class="col-12 mt-5 page-content" style="padding: 5px 20px;">

                    <div class="row">
                        <div class="col-4 tab-text">
                            <div class="row">
                                <div class="col-12 heading">
                                    <p>කාර්යයන් සහ දිනයන්</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 heading">
                                    <p>2. මාතෘ සං‍රක්ෂනය ලියාපදිංචි කරන අවස්ථාවේදී</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 not-heading-multi" style="padding-top: 35px;">
                                    <p>අලුතින් ලියාපදිංචි කරන ලද නව විවාපත් යුවල් ගණන</p>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සති 8 ට පෙර</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සති 8-12 දක්වා</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>සති 12 ට පසු</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 65px;">
                                    <p>ලියාපදිංචියේදී ගර්භණී මව්වරුන්ගේ වයස</p>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 16 ට අඩු </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 16-17</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 18-19</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 20-35</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අවු 35 ට වැඩි</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 55px;">
                                    <p>ප්‍රථම ගර්භය සහිත මව්වරුන්</p>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ලියාපදිංචි කළ ගණන</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පෙර ගර්භ සුව පිරික්සුම් සිදුකළ ගණන</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පූර්ව ගර්භණී සැසි 2ක් සඳහා පැමිණි යුවල් ගණන</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ලේ ඥාතීන් අතර විවාහ සිදුවූ ගණන</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 15px;">
                                    <p>5 වෙනි ගර්භණීභාවය හා ඊට වැඩි</p>
                                </div>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ලියාපදිංචි කළ ගණන</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ජීවත්ව සිටින දරුවන් තිදෙනෙකු හෝ ඊට වැඩි මව්වරු ගණන</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ලියාපදිංචි ගර්භණී මව්වරුන්ගේ රුබෙල්ලා ආරක්ෂාව ලබා ඇති ආකාරය</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 not-heading">
                                    <p>ලියාපදිංචියේදී ෆෝලික් අම්ලය ලබාගනිමින් සිටි ගර්භණී මව්වරුන් ගණන(ලියාපදිංචියට පෙර
                                        මාස3දී)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 15px;">
                                    <p>ප. සෞ. සේ. නි. විසින් පූර්ව ප්‍රසව මව්වරුන් සඳහා කරන ලද ගෘහ ඇවිදීම් ගණන</p>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අලුත්</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පරණ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 15px;">
                                    <p>පූර්ව ප්‍රසව මව්වරුන්ගේ සායනික පැමිණීම</p>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>අලුත්</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>පරණ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 not-heading-multi" style="padding-top: 15px;">
                                    <p>පිටතින් පැමිණි ගර්භණී මව්වරුන් ගණන</p>
                                </div>

                                <div class="col-8">
                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 15px;">
                                            <p>ලියාපදිංචි කළ</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>ස්ථිර</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>තාවකාලික</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6 not-heading-multi" style="padding-top: 15px;">
                                            <p>ලියාපදිංචි නොකළ</p>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 not-heading">
                                                    <p>ස්ථිර</p>
                                                </div>
                                                <div class="col-12 not-heading">
                                                    <p>තාවකාලික</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 not-heading-multi" style="padding-top: 20px;">
                                    <p>ක්ෂේත්‍රය හැරගිය ගර්භණී මව්වරුන් ගණන</p>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>ස්ථිර</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading">
                                            <p>තාවකාලික</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-8">
                            <input type="hidden" name="id" value="<?=User::currentUser()->id?>">
                            <input type="hidden" name="period" value="<?=date("Y-m-j")?>">

                            <div class="row">
                                <?php $numOfDates=cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y")); $x=1;foreach($this->dates as $date){  if($x== date("j") && $this->editMode){?>

                                <div class="tab-val" style="width: calc(100% / <?=$numOfDates+1?>);">
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p><?=$x?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="1" value="<?=$date->{'1'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="2" value="<?=$date->{'2'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="3" value="<?=$date->{'3'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="4" value="<?=$date->{'4'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="5" value="<?=$date->{'5'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="6" value="<?=$date->{'6'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="7" value="<?=$date->{'7'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="8" value="<?=$date->{'8'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="9" value="<?=$date->{'9'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="10" value="<?=$date->{'10'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="11" value="<?=$date->{'11'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="12" value="<?=$date->{'12'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="13" value="<?=$date->{'13'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="14" value="<?=$date->{'14'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="15" value="<?=$date->{'15'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="16" value="<?=$date->{'16'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="17" value="<?=$date->{'17'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="18" value="<?=$date->{'18'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="19" value="<?=$date->{'19'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="20" value="<?=$date->{'20'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="21" value="<?=$date->{'21'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="22" value="<?=$date->{'22'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="23" value="<?=$date->{'23'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="24" value="<?=$date->{'24'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="25" value="<?=$date->{'25'}?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val" style="padding: 0px"><input
                                                style="width: 61px;float:left; color:red; padding-left:20px; background-color:lightblue"
                                                type="text" name="26" value="<?=$date->{'26'}?>"></div>
                                    </div>



                                </div>

                                <?php $x++; continue;} ?>
                                <div class="tab-val" style="width: calc(100% / <?=$numOfDates+1?>);">
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p><?=$x?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'1'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'2'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'3'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'4'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'5'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'6'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'7'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'8'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'9'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'10'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'11'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'12'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'13'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'14'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'15'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'16'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'17'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'18'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'19'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'20'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'21'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'22'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'23'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'24'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'25'}?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p><?=$date->{'26'}?></p>
                                        </div>
                                    </div>

                                </div> <?php $x++; } ?>

                                <div class="tab-sum" style="width: 45px; border: solid 1px">
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p>එකතුව</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 not-heading-val">
                                            <p></p>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>





                    </div>




                </div>





            </div>
        </div>
        <?php if($this->editMode) {?>
        <button type="submit" name="saveButton" class="btn btn-primary" style="position: sticky;">Save</button>
        <?php } ?>

    </form>


    <?php if(!$this->editMode & ($this->period ==date('Y-m'))){
                   
                   ?>
    <form action="<?=PROOT?>Workplan/editMode/maternitypreservation" method="post">
        <button type="submit" name="editButton" class="btn btn-primary" style="position:sticky;">Edit</button>
    </form>
    <?php }?>





</div>
</div>
</div>
<?php $this->end('body');?>