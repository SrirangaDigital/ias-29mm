<script type="text/javascript">
    $(document).ready(function() {

        var htmlWidth = $('html').outerWidth();

        if(htmlWidth >= 768)
            $('#social .info-icon i').css("line-height", $('#twitterContainer').height() + "px");

        var containerWidth = $('.container').outerWidth();

        var gutter = $('.fancy .text').css('margin-left').replace("px", "");

        $('.fancy .text').each(function(){

            $(this).before('<span class="before">&nbsp;</span>');
            $(this).after('<span class="after">&nbsp;</span>');

            var fancyWidth = Math.round((containerWidth - $(this).outerWidth() - (4 * gutter)) / 2);

            $(this).prev('.before').css("width", fancyWidth);
            $(this).next('.after').css("width", fancyWidth);
        });    
    });
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="container clear-paddings" id="home">
    <div class="row first-row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDivHome">
                <!-- <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/banner.jpg" alt="Credits: Nohkalikai Falls, 50 kilometres outside Shillong, is among several stunning waterfalls in Meghalaya. Daniel J. Rao / Alamy / phocalmedia.com"> -->
<!--                 <div class="OverlayTextMain">
                    <div class="mainpage">
                        <h2>83<sup>rd</sup> Annual Meeting</h2>
                        <p>3&ndash;5 November 2017 <br />North-Eastern Hill University, Shillong</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<div class="container clear-paddings">
    <div class="row">
        <div class="col-md-2 col-xs-12">
            <div class="intro logos">
                <p>
                    <img src="<?=PUBLIC_URL?>images/logo.png" alt="IAS Logo" />
                </p>
            </div>
        </div>
        <div class="col-md-10">
            <div class="intro">
                <p>The Indian Academy of Sciences, Bengaluru, through the many scientific meetings, symposia, and public lectures it organizes, aims to facilitate  exchange of scientific insights among researchers and to highlight novel findings both within the scientific community and the public. The Mid-Year Meetings, held during June/July at Bengaluru, and the Annual Meetings, held during November at different scientific institutions in the country, are the two major annual events of the Academy, in this context. The events every year see enthusiastic participation of the Fellowship of the Academy along with researchers, teachers, students and  other invitees from across the nation.</p>
                <p>The <strong>29th Mid Year Meeting of the Academy</strong> is being organized during <strong>29&ndash;30 June 2018 at Infosys, Mysuru</strong></p>
            </div>
        </div>
    </div>        
</div>


<!-- Registration -->
<div class="container clear-paddings" id="registration">
    <div class="row">
        <div class="col-md-12">
           <p class="subtitle fancy"><span class="text">Registration</span></p>
       </div>
   </div>
   <div class="row">
    <div class="col-md-12">
        <p class="reg">Fellows of the Academy and invited teachers who have not yet registered,<br /> please register <a href="http://web-japps.ias.ac.in:8080/Midmeeting2018/midyear/Userlogin.jsp" target="_blank">here</a></p>
    </div>
</div>
</div>

<!--Speakers -->
<div class="container clear-paddings" id="speakers">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Speakers</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Presidential Address</p>
            <a href="javascript:void(0);">
                <img src="<?=CMS_URL?>public/data/meetings/AM2017/1508569913576/profile.jpg" class="speaker-thumbnail" alt="Ramakrishna Ramaswamy" title="Ramakrishna Ramaswamy"/>
                <figcaption class="figure-caption text-xs-right">Ramakrishna Ramaswamy</figcaption>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="speaker-type">Inaugural Lectures of Fellows &amp; Associates / Special Lectures / Public Lectures / Symposia Lectures</p>
            <a href="<?=BASE_URL?>describe/profile/1528533237319">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528533237319/profile.jpg" class="speaker-thumbnail" alt="G Nageswara Rao" title="G Nageswara Rao"/>
                <figcaption class="figure-caption text-xs-right">G Nageswara Rao</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528541501386">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528541501386/profile.jpg" class="speaker-thumbnail" alt="Ritabrata Munshi" title="Ritabrata Munshi"/>
                <figcaption class="figure-caption text-xs-right">Ritabrata Munshi</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528545307571">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528545307571/profile.jpg" class="speaker-thumbnail" alt="Pazhamalai Anbarasan" title="Pazhamalai Anbarasan"/>
                <figcaption class="figure-caption text-xs-right">Pazhamalai Anbarasan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528545446261">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528545446261/profile.jpg" class="speaker-thumbnail" alt="Anuradha Dube" title="Anuradha Dube"/>
                <figcaption class="figure-caption text-xs-right">Anuradha Dube</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528545530857">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528545530857/profile.jpg" class="speaker-thumbnail" alt="C Narayana" title="C Narayana"/>
                <figcaption class="figure-caption text-xs-right">C Narayana</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528545619677">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528545619677/profile.jpg" class="speaker-thumbnail" alt="Ramesh Hariharan" title="Ramesh Hariharan"/>
                <figcaption class="figure-caption text-xs-right">Ramesh Hariharan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528545718404">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528545718404/profile.jpg" class="speaker-thumbnail" alt="V K Gahalaut" title="V K Gahalaut"/>
                <figcaption class="figure-caption text-xs-right">V K Gahalaut</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528546354066">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528546354066/profile.jpg" class="speaker-thumbnail" alt="Yamuna Krishnan" title="Yamuna Krishnan"/>
                <figcaption class="figure-caption text-xs-right">Yamuna Krishnan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528546786186">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528546786186/profile.jpg" class="speaker-thumbnail" alt="Rajan Sankaranarayanan" title="Rajan Sankaranarayanan"/>
                <figcaption class="figure-caption text-xs-right">Rajan Sankaranarayanan</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528547130878">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528547130878/profile.jpg" class="speaker-thumbnail" alt="Souvik Maiti" title="Souvik Maiti"/>
                <figcaption class="figure-caption text-xs-right">Souvik Maiti</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528547603085">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528547603085/profile.jpg" class="speaker-thumbnail" alt="Manju Bansal" title="Manju Bansal"/>
                <figcaption class="figure-caption text-xs-right">Manju Bansal</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780213265">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780213265/profile.jpg" class="speaker-thumbnail" alt="Upinder Singh" title="Upinder Singh"/>
                <figcaption class="figure-caption text-xs-right">Upinder Singh</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780285315">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780285315/profile.jpg" class="speaker-thumbnail" alt="Manoj Kumar" title="Manoj Kumar"/>
                <figcaption class="figure-caption text-xs-right">Manoj Kumar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780338082">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780338082/profile.jpg" class="speaker-thumbnail" alt="Prabal K Maiti" title="Prabal K Maiti"/>
                <figcaption class="figure-caption text-xs-right">Prabal K Maiti</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780460560">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780460560/profile.jpg" class="speaker-thumbnail" alt="Nagasuma Chandra" title="Nagasuma Chandra"/>
                <figcaption class="figure-caption text-xs-right">Nagasuma Chandra</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780532447">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780532447/profile.jpg" class="speaker-thumbnail" alt="Swagata Dasgupta" title="Swagata Dasgupta"/>
                <figcaption class="figure-caption text-xs-right">Swagata Dasgupta</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780601967">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780601967/profile.jpg" class="speaker-thumbnail" alt="Varun Bhalerao" title="Varun Bhalerao"/>
                <figcaption class="figure-caption text-xs-right">Varun Bhalerao</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780746120">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780746120/profile.jpg" class="speaker-thumbnail" alt="Maitrayee DasGupta" title="Maitrayee DasGupta"/>
                <figcaption class="figure-caption text-xs-right">Maitrayee DasGupta</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780820756">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780820756/profile.jpg" class="speaker-thumbnail" alt="Souvik Mahapatra" title="Souvik Mahapatra"/>
                <figcaption class="figure-caption text-xs-right">Souvik Mahapatra</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780884615">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780884615/profile.jpg" class="speaker-thumbnail" alt="C T Dhanya" title="C T Dhanya"/>
                <figcaption class="figure-caption text-xs-right">C T Dhanya</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528780997404">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528780997404/profile.jpg" class="speaker-thumbnail" alt="Madhavan Mukund" title="Madhavan Mukund"/>
                <figcaption class="figure-caption text-xs-right">Madhavan Mukund</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528781102284">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528781102284/profile.jpg" class="speaker-thumbnail" alt="Bimal Roy" title="Bimal Roy"/>
                <figcaption class="figure-caption text-xs-right">Bimal Roy</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528781151167">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528781151167/profile.jpg" class="speaker-thumbnail" alt="S P Suresh" title="S P Suresh"/>
                <figcaption class="figure-caption text-xs-right">S P Suresh</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528781202981">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528781202981/profile.jpg" class="speaker-thumbnail" alt="Rajeeva L Karandikar" title="Rajeeva L Karandikar"/>
                <figcaption class="figure-caption text-xs-right">Rajeeva L Karandikar</figcaption>
            </a>
            <a href="<?=BASE_URL?>describe/profile/1528781274154">
                <img src="<?=CMS_URL?>public/data/meetings/MM2018/1528781274154/profile.jpg" class="speaker-thumbnail" alt="Raman Sukumar" title="Raman Sukumar"/>
                <figcaption class="figure-caption text-xs-right">Raman Sukumar</figcaption>
            </a>
        </div>
    </div>
</div>

<!-- Schedule -->
<div class="container-fluid clear-paddings text-center" id="schedule">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Schedule</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?=BASE_URL?>Schedule#day1">
                <div id="block1" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 1</p>
                    <p class="date">29 June 2018</p>
                    <p class="day">Friday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#day2">
                <div id="block2" class="col-md-3 schedule-block">
                    <p class="dayNum">Day 2</p>
                    <p class="date">30 June 2018</p>
                    <p class="day">Saturday</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#allied">
                <div id="block3" class="col-md-3 schedule-block">
                    <p class="dayNum">Allied Events</p>
                    <p class="date">28, 29, 30 June &amp; 1 July</p>
                    <p class="day">2018</p>
                </div>
            </a>
            <a href="<?=BASE_URL?>Schedule#spouses">
                <div id="block4" class="col-md-3 schedule-block">
                    <p class="dayNum">Spouses Programme</p>
                    <p class="date">29, 30 June</p>
                    <p class="day">2018</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="information">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">For Participants</span></p>
        </div>
    </div>
    <div class="row" style="line-height: 150px">
        <div class="col-md-12">
        <a href="javascript:void(0);" class="info-icon"><i class="fa fa-list-ul"></i><br />List of Participants</a><!-- <?=BASE_URL?>Information/List_of_Participants -->
            <a href="<?=BASE_URL?>Information/Venue" class="info-icon"><i class="fa fa-map-marker"></i><br />Venue</a>
            <a href="javascript:void(0);" class="info-icon"><i class="fa fa-bed"></i><br />Hospitality</a><!-- <?=BASE_URL?>Information/Accommodation -->
            <a href="javascript:void(0);" class="info-icon"><i class="fa fa-bus"></i><br />Logistics</a><br /><!-- Information/Transport -->
            <a href="<?=BASE_URL?>Information/Contact" class="info-icon"><i class="fa fa-phone"></i><br />Contact</a>
            <a href="javascript:void(0);" class="info-icon"><i class="fa fa-download"></i><br />Downloads</a><!-- Information/Downloads -->
            <a href="<?=BASE_URL?>Information/Other" class="info-icon"><i class="fa fa-ellipsis-h"></i><br />Other information</a><!-- Information/Other -->
        </div>
    </div>
</div>

<!-- Information for participants -->
<div class="container clear-paddings" id="social">
    <div class="row">
        <div class="col-md-12">
            <p class="subtitle fancy"><span class="text">Follow</span></p>
        </div>
    </div>
    <div class="row" id="twitterContainer">
        <div class="col-md-6 col-sm-12">
            <a class="twitter-timeline"  href="https://twitter.com/search?q=%23IASc83AM%20from%3A%40IAScBng" data-widget-id="923905220559519744">Tweets about #IASc83AM from:@IAScBng</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        <div class="col-md-6 text-center col-sm-12">
            <a target="_blank" title="YouTube" href="https://www.youtube.com/channel/UC5Aq2JESu0QLmP9WveZSvbQ" class="info-icon"><i class="fa fa-youtube"></i></a>
            <a target="_blank" title="Twitter" href="https://twitter.com/IAScBng" class="info-icon"><i class="fa fa-twitter"></i></a>
            <a target="_blank" title="Facebook" href="https://www.facebook.com/IAScBng" class="info-icon"><i class="fa fa-facebook"></i></a>
        </div>
    </div>
</div>
