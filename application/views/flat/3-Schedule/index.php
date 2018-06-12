<script type="text/javascript">
    $(document).ready(function() {

        var mTop = $('.navbar').height() - 10;
        $('#grid').css('margin-top', mTop + 'px');
        $('.schedule-text').hide();

        var hloc = window.location.href;

        var tab = 'day1';
        if(hloc.match('#')){ tab = hloc.split("#")[1]; }

        $('#' + tab).show(function(){

            $('a[href="#' + tab + '"').parent().addClass('active');
            $("html, body").animate({scrollTop: 0}, 1);
        });

        $('.schedule .nav li a').on('click', function(event){

            event.preventDefault();
            tab = $(this).attr('href');
            $('.schedule-text').hide();
            $(tab).show(function(){

                window.location.hash = tab;
                $("html, body").animate({scrollTop: 0}, 1);
            });
            $('.schedule .nav li').removeClass('active');
            $(this).parent().addClass('active');
        });
    });
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>29 June 2018 (Friday)</h3>
                    <div class="session">
                        <span class="type">Session 1A – Special Lecture</span><br /><br />
                        Chairperson: H Sharat Chandra, Centre for Human Genetics, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 1010<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528533237319">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">G Nageswara Rao</span><br />
                                LVPEI, Hyderabad<br />
                                <span class="talk">Research, relevance and public good</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B : Inaugural Lectures of Fellows/Associates</span><br /><br />
                        Chairperson: Aswini Ghosh, IACS, Kolkata<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1010 - 1030<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528541501386">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ritabrata Munshi</span><br />
                                ISI, Kolkata<br />
                                <span class="talk">The subconvexity problem</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1035 - 1055<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528541501386">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">P. Anbarasan</span><br />
                                IIT, Chennai<br />
                                <span class="talk">Transition metal catalyzed selective functionalization of metallocarbenes to N-Heterocycles</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1120
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: E Arunan, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1120 - 1140<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545446261">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Anuradha Dube</span><br />
                                CDRI, Lucknow<br />
                                <span class="talk">Kala-Azar - a neglected disease of poverty: Search for affordable lasting cure</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1145 - 1205<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545530857">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">C Narayana</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Application of Raman spectroscopy from condense matter to biology</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1210 - 1230<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545619677">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Ramesh Hariharan</span><br />
                                Strand Life Sciences, Bengaluru<br />
                                <span class="talk">Industrializing genomic diagnoses in India</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1235 - 1255<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528545718404">
                                    <i class="fa fa-info-circle"></i></a>&nbsp;
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">V K Gahalaut</span><br />
                                MoES, New Delhi<br />
                                <span class="talk">India plate motion and its interaction with Eurasian plate along the Himalayan and Indo-Burmese arc</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1430
                            </dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1D – Symposium on “Remembering Francis Crick: A multifaceted visionary scientist”</span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1430 - 1500<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528546354066">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Yamuna Krishnan</span><br />
                                University of Chicago, USA<br />
                                <span class="talk">Quantitative chemical imaging in vivo</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1500 - 1530<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528546786186"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Rajan Sankaranarayanan</span><br />
                                CCMB, Hyderabad<br />
                                <span class="talk">Transfer RNAs: Not merely adaptor molecules in protein synthesis</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1530 - 1600<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528547130878"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Souvik Maiti</span><br />
                                IGIB, New Delhi<br />
                                <span class="talk">RNA G-Quadruplex: Re-Search</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1600 - 1630<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528547603085"><i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Manju Bansal</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Francis Crick: A Renaissance scientist</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1630 - 1700
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1E – Public Lecture</span><br />
                        Chairperson: R Ramaswamy, JNU, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1800 - 1900
                            </dt>
                            <dd>
                                <span class="speaker">Upinder Singh</span><br />
                                University of Delhi, Delhi<br />
                                <span class="talk">Politics and violence: Ancient debates on a perennial problem</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1900
                            </dt>
                            <dd>
                                <span class="aux">Cultural event</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                2000
                            </dt>
                            <dd>
                                <span class="aux">Dinner</span>
                            </dd>
                        </dl>
                    </div>                    
                </div>                        
                <div class="schedule-text" id="day2">
                    <h3>30 June 2018 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: Anil K Gupta, IIT, Kharagpur<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                0930 - 0950<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780285315">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Manoj Kumar</span><br />
                                GNDU, Amritsar<br />
                                <span class="talk">Development of fluorescent probes for molecular recognition, bio-imaging and catalytic applications</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                0955 - 1015<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780338082">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Prabal K Maiti</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Structure, dynamics and thermodynamics of confined water</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1020 - 1040<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780460560">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Nagasuma Chandra</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Identification of a host biomarker signature for detecting tuberculosis through a blood test</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1040 - 1100
                            </dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2B – Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: Chairperson: H Shekar Shetty, University of Mysore, Mysore<br /><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1100 - 1120<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780532447">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Swagata Dasgupta</span><br />
                                IIT, Kharagpur<br />
                                <span class="talk">The evolving story of protein polyphenol interactions</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1125 - 1145<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780601967">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Varun Bhalerao</span><br />
                                IIT, Mumbai<br />
                                <span class="talk">Cosmic fireworks: Shining light on gravitational wave sources!</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1150 - 1210<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780746120">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Maitrayee DasGupta</span><br />
                                University of Calcutta, Kolkata<br />
                                <span class="talk">Challenges in extending Symbiotic Nitrogen Fixation beyond current host range</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1215 - 1235<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780820756">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Souvik Mahapatra</span><br />
                                IIT, Mumbai<br />
                                <span class="talk">Reliability of CMOS IC chips - from atoms to processors</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1240 - 1300<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528780884615">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">C T Dhanya</span><br />
                                IIT, New Delhi<br />
                                <span class="talk">Hydrological Extremes and Hazard Modeling - Exploring the intricacies and predictability of the regional hydrologic system</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1300 - 1430
                            </dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2C – Symposium on “Blockchains and Cryptocurrency”</span><br />
                        <dl class="dl-horizontal">
                            <dt>
                                1430 - 1500
                            </dt>
                            <dd>
                                <span class="speaker">Madhavan Mukund</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Introduction to blockchains</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1500 - 1530<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781102284">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">Bimal Roy</span><br />
                                ISI, Kolkata<br />
                                <span class="talk">Cryptographic Primitives for Block Chains</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1530-1600<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781151167">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">S P Suresh</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Bitcoin -- economic aspects</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>
                                1600-1630<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1528781202981">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">R L Karandikar</span><br />
                                CMI, Chennai<br />
                                <span class="talk">Blockchains: Beyond Crypto currency</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>
                                1630 - 1700
                            </dt>
                            <dd>High Tea</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D – Special Lecture</span><br />
                        Chairperson:  N Mukunda, Bengaluru<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>
                                1700 - 1740<br />
                                <div class="more-info"><a target="_blank" title="More Information" href="<?=BASE_URL?>describe/profile/1508578970512">
                                    <i class="fa fa-info-circle"></i></a>
                                </div>
                            </dt>
                            <dd>
                                <span class="speaker">R Sukumar</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Thinking long-term in ecology: Insights from 3-decades of monitoring a tropical forest in Mudumalai</span>
                            </dd>
                        </dl>
                    </div>        
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <?php require_once('application/views/generalSidebar.php');?>
        </div>
    </div>
</div>
