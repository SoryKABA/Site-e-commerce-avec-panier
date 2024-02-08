
<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Effectuer un paiement - CINETPAY</title>

    <meta name="theme-color" content="#000000">
    <meta name="csrf-token" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://checkout.cinetpay.com/assets/favicon/favicon-32x32.png">

    <link rel="apple-touch-icon" sizes="57x57"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"
      href="https://checkout.cinetpay.com/assets/favicon/cinetpay/favicon-16x16.png">
<link rel="manifest" href="https://checkout.cinetpay.com/assets/favicon/cinetpay/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://checkout.cinetpay.com/assets/favicon/cinetpay/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://checkout.cinetpay.com/assets/css/app.css">
        <script src="//d2wy8f7a9ursnm.cloudfront.net/v7/bugsnag.min.js"></script>
<script>
    try {
        Bugsnag.start({
            apiKey: 'b0cfd5eec69dcbaff814fc733a728562',
            logger: null,
            appVersion: '1.0.2',
            onError: function (event) {
                event.addMetadata('transaction', {
                    token: "de63c78bc775e998f7f6680abeee05b2ef1bb3d9b17076c59b599ed98a27a8eb2411d48a9936fb5e7e29c5682234a9a6565fd723ad17d9",
                    cpm_site_id: "5867180",
                    cpm_trans_id: "20240122223243",
                })
            }
        })
    } catch (e) {
    }
</script>
<script>
    try {
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 2479908, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    } catch (e) {
    }
</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E37QYXE316"></script>
    <script>
        try {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'G-E37QYXE316');
        } catch (e) {
        }
    </script>
                <style>
            .option-content1::after {
                left: 60%;
            }

            .option-content2::after {
                left: 60%;
            }

            .option-content3::after {
                left: 25%;
            }

            .option-content4::after {
                left: 15%;
            }
        </style>
        <style type="text/css">
        #page {
            display: none;
        }

        #loading {
            display: block;
            position: absolute;
            z-index: 100;
            background-position: center;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        @keyframes  ldio-5owbnf6l9j7 {
            0% {
                transform: translate(12px, 80px) scale(0);
            }
            25% {
                transform: translate(12px, 80px) scale(0);
            }
            50% {
                transform: translate(12px, 80px) scale(1);
            }
            75% {
                transform: translate(80px, 80px) scale(1);
            }
            100% {
                transform: translate(148px, 80px) scale(1);
            }
        }

        @keyframes  ldio-5owbnf6l9j7-r {
            0% {
                transform: translate(148px, 80px) scale(1);
            }
            100% {
                transform: translate(148px, 80px) scale(0);
            }
        }

        @keyframes  ldio-5owbnf6l9j7-c {
            0% {
                background: var(--loader-color1)
            }
            25% {
                background: var(--loader-color2)
            }
            50% {
                background: var(--loader-color1)
            }
            75% {
                background: var(--loader-color2)
            }
            100% {
                background: var(--loader-color1)
            }
        }

        .ldio-5owbnf6l9j7 div {
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            transform: translate(80px, 80px) scale(1);
            background: var(--loader-color1);
            animation: ldio-5owbnf6l9j7 1.2048192771084336s infinite cubic-bezier(0, 0.5, 0.5, 1);
        }

        .ldio-5owbnf6l9j7 div:nth-child(1) {
            background: var(--loader-color2);
            transform: translate(148px, 80px) scale(1);
            animation: ldio-5owbnf6l9j7-r 0.3012048192771084s infinite cubic-bezier(0, 0.5, 0.5, 1), ldio-5owbnf6l9j7-c 1.2048192771084336s infinite step-start;
        }

        .ldio-5owbnf6l9j7 div:nth-child(2) {
            animation-delay: -0.3012048192771084s;
            background: var(--loader-color1);
        }

        .ldio-5owbnf6l9j7 div:nth-child(3) {
            animation-delay: -0.6024096385542168s;
            background: var(--loader-color2);
        }

        .ldio-5owbnf6l9j7 div:nth-child(4) {
            animation-delay: -0.9036144578313252s;
            background: var(--loader-color1);
        }

        .ldio-5owbnf6l9j7 div:nth-child(5) {
            animation-delay: -1.2048192771084336s;
            background: var(--loader-color2);
        }

        .loadingio-spinner-ellipsis-99po1h19hjs {
            width: 200px;
            height: 200px;
            display: inline-block;
            overflow: hidden;
            background: none;
        }

        .ldio-5owbnf6l9j7 {
            width: 100%;
            height: 100%;
            position: relative;
            transform: translateZ(0) scale(1);
            backface-visibility: hidden;
            transform-origin: 0 0; /* see note above */
        }

        .ldio-5owbnf6l9j7 div {
            box-sizing: content-box;
        }


        .toggle-content {
            display: none;
            height: 0;
            opacity: 0;
            overflow: hidden;
            transition: height 350ms ease-in-out, opacity 750ms ease-in-out;
        }

        .toggle-content.is-visible {
            display: block;
            height: auto;
            opacity: 1;
        }
    </style>
</head>
<body id="body">
<div id="loading">
    <div class="loadingio-spinner-ellipsis-99po1h19hjs">
        <div class="ldio-5owbnf6l9j7">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div id="page" class="container">
    <div class="row h-100 justify-content-center">
        <div class="col-md-8 col-lg-6 my-auto">
            <div class="desk bg-white shadow-sm">
                <div class="desk-head">
                    <div class="row">
                        <div class="col-9">
                            <div class="">
                                <div class="media align-items-center">
                                    <div class="media-head">
                                        
                                    </div>
                                    <div class="media-body">
                                        <p class="marchand-name p-0 m-0">Vente d&#039;habits</p>
                                        <h4 class="due-amount p-0 m-0">10 000 GNF</h4>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="marchand-info">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-clear btn-sm dropdown-toggle m-0 p-0"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <strong>FR</strong>
                                    </button>
                                    <div class="dropdown-menu desk-d-sm">
                                        <a href="?lang=en"
                                           class="text-decoration-none ml-2 desk-language-title">
                                            <strong>EN</strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="ml-2 mr-2">
                <div class="desk-body">
                        <form id="payment_form" name="begin_form" method="POST" action="https://checkout.cinetpay.com/payment/verify">
        <div class="desk-content">
            <p class="text-center">Payer avec</p>
            <input type="hidden" name="_token" value="">            
            <div class="choose-payment-type">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
        <a class="nav-link active"
           id="mobile-money-tab" data-toggle="tab" href="#mobile-money" role="tab" aria-controls="mobile-money"
           aria-selected="true" onclick="setAction('https://checkout.cinetpay.com/payment/verify', 'MOBILE_MONEY')">
            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px"
                 viewBox="0 0 100 100">
                <g transform="translate(-2978 2535)">
                    <rect width="100" height="100" transform="translate(2978 -2535)" fill="var()" opacity="0.003"/>
                    <g transform="translate(2403.753 -3004.222)">
                        <path
                            d="M65.889,1.928H12.373A5.964,5.964,0,0,0,6.427,7.874V91.122a5.964,5.964,0,0,0,5.946,5.946H65.889a5.964,5.964,0,0,0,5.946-5.946V7.874A5.964,5.964,0,0,0,65.889,1.928ZM39.131,92.774a4.625,4.625,0,1,1,4.625-4.625A4.625,4.625,0,0,1,39.131,92.774ZM65.889,79.23H12.373V13.821H65.889Z"
                            transform="translate(584.82 469.294)" fill="var(--cinetpay1)"/>
                        <path
                            d="M21.585,0V3.6H0V7.2H21.585v3.6l7.2-5.4ZM7.2,14.39,0,19.787l7.2,5.4v-3.6H28.78v-3.6H7.2Z"
                            transform="translate(609.43 500.731)" fill=" var(--cinetpay1)"/>
                    </g>
                </g>
            </svg>
            <p class="descrip">Mobile money</p>
        </a>
    </li>
                    
                    
                                            <li class="nav-item">
        <a class="nav-link "
           id="wallet-tab" data-toggle="tab" href="#wallet" role="tab" aria-controls="wallet" aria-selected="true"
           onclick="setAction('https://checkout.cinetpay.com/payment/process/wallet', 'WALLET')">
            <svg xmlns="http://www.w3.org/2000/svg" width="60px" height="60px" viewBox="0 0 100 100">
                <g transform="translate(-3098 2535)">
                    <rect width="100" height="100" transform="translate(3098 -2535)" fill="#fff" opacity="0"/>
                    <path
                        d="M79.008,18.7H13.7a2.741,2.741,0,1,1,0-5.482H79.488a2.74,2.74,0,0,0,2.741-2.741A8.223,8.223,0,0,0,74.006,2.25H10.964A10.963,10.963,0,0,0,0,13.214V68.033A10.963,10.963,0,0,0,10.964,79H79.008a8.481,8.481,0,0,0,8.7-8.223V26.919A8.481,8.481,0,0,0,79.008,18.7ZM71.265,54.328a5.482,5.482,0,1,1,5.482-5.482A5.483,5.483,0,0,1,71.265,54.328Z"
                        transform="translate(3104.265 -2525.706)" fill="none" stroke=" var(--cinetpay1)"
                        stroke-width="6"/>
                </g>
            </svg>
            <p class="descrip">Wallet</p>
        </a>
    </li>
                                    </ul>

                <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show"
         id="mobile-money" role="tabpanel" aria-labelledby="mobile-money-tab">
        <div class="option-content1">
            <div class="p-1">
                <div class="desk-form">
                    <div class="phone-input form-group">
                        <label class="input-title input-phone" for="phone_number">
                            Numéro de téléphone
                        </label>
                        <input type="tel" id="phone_number"
                               class="form-control input-tel"
                               value="" autofocus required>
                        <img id="payment-method-icon" width="2rem" alt="payment method logo"
                             src="https://checkout.cinetpay.com/assets/images/payment_methods/default.png"/>
                        <div>
                                                    </div>
                    </div>
                    <div>
                        <div class="col-12 px-0"><div><p id="methodsgn" class="d-none payment-method-box operator-box"><img src="https://checkout.cinetpay.com/assets/images/payment_methods/orange.png" class="rounded mx-1 payment-method-logo" alt="ORANGE"><img src="https://checkout.cinetpay.com/assets/images/payment_methods/mtn.png" class="rounded mx-1 payment-method-logo" alt="MTN"></p></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
                    
                                            <div class="tab-pane fade "
         id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
        <div class="option-content3">
            <div class="p-3" style="margin-bottom: 2.7rem;">
                <div class="desk-form">
                    <div class="phone-input form-group">
                        <select id="methodsWallet" name="wallet" class="form-control selectpicker" style="text-align-last:center;" title="Choisissez votre wallet"><option selected disabled value="">Choisissez votre wallet</option><option value="PAYCARD">PayCard</option></select>
                                            </div>
                    <div class="col-12 px-0">
                        <span id="methodsWalletLogos" class="payment-method-box"><img src="https://checkout.cinetpay.com/assets/images/payment_methods/paycard.png" class="mx-1 payment-method-logo" alt="PAYCARD-logo"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                    </div>
            </div>
        </div>
        <input type="hidden" name="action">
        <div class="desk-action p-3" id="desk-action">
    <button type="submit" class="btn btn-next btn-block" id="del">
        Payer 10 000 GNF
    </button>
</div>

            </form>
                    </div>
            </div>
            <p class="text-center pt-2">
                <a href="#!" class="text-decoration-none copyright">
                    <svg viewBox="0 0 24 24" width="15" height="15" stroke="var(--lockStroke)" stroke-width="2"
                         fill="none"
                         stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>

                                            <span style="color: var(--secured-by-text)">Sécurisé par </span>
                                                    <strong class="text-cinetpay">
                                <span style="color: #0f663a">Cinet</span><span style="color: #3cb65b">Pay</span>
                            </strong>
                                                            </a>
            </p>
        </div>
    </div>
</div>
<script>
    document.addEventListener('readystatechange', function (event) {
        if (event.target.readyState === 'complete') {
            ready();
        }
    });

    function ready() {
        setTimeout(function () {
            fadeIn(document.getElementById('page'))
        }, 217)
        fadeOut(document.getElementById('loading'));
    }

    // ** FADE OUT FUNCTION **
    function fadeOut(el) {
        el.style.opacity = 1;
        (function fade() {
            if ((el.style.opacity -= .1) < 0) {
                el.style.display = "none";
            } else {
                requestAnimationFrame(fade);
            }
        })();
    }

    // ** FADE IN FUNCTION **
    function fadeIn(el, display) {
        el.style.opacity = 0;
        el.style.display = display || "block";
        (function fade() {
            var val = parseFloat(el.style.opacity);
            if (!((val += .1) > 1)) {
                el.style.opacity = val;
                requestAnimationFrame(fade);
            }
        })();
    }

    function empty(item) {
        return (item === undefined || item === null || item === false || item === '');
    }
</script>
<script src="https://checkout.cinetpay.com/assets/js/app.js"></script>
    <script>
        document.addEventListener('readystatechange', function (event) {
            if (event.target.readyState === 'complete') {
                disableButtonOnSubmit();
            }
        });
        function disableButtonOnSubmit() {
            var form = document.getElementById('payment_form');
            var submitButton = document.getElementById('del');
            form.addEventListener('submit', function () {
                submitButton.disabled = true;
                setTimeout(function () {
                    submitButton.disabled = false;
                }, 15000)
            })
        }
    </script>
    <script>

        function setAction(action, typeV) {
            if (empty(typeV)) {
                typeV = 'default';
            }
            document.begin_form.action = action;
                        if (!empty(document.getElementById("phone_number"))) {
                document.getElementById("phone_number").required = (typeV.toUpperCase() === 'MOBILE_MONEY');
            }
            
                            if (!empty(document.getElementById("methodsWallet"))) {
                document.getElementById("methodsWallet").required = (typeV.toUpperCase() === 'WALLET');
            }
            
                        }

                function initializeIntelInput() {
            try {
                if (empty(window.intlTelInput) && intlTelInput) {
                    window.intlTelInput = intlTelInput;
                }

                var phoneNumberInput = document.querySelector("#phone_number");

                var iti = window.intlTelInput(phoneNumberInput, {
                    hiddenInput: "phone_number",
                    onlyCountries: ["gn"],
                    placeholderNumberType: "MOBILE",
                    initialCountry: 'gn',
                    localizedCountries: {"cd": "Congo RDC"},
                    separateDialCode: true,
                    utilsScript: "/assets/plugins/intl-tel-input/js/utils.js",
                    customPlaceholder: function (selectedCountryPlaceholder, selectedCountryData) {
                        if (selectedCountryData.iso2 === 'ci') {
                            return '01 23 45 67 89';
                        } else {
                            return selectedCountryPlaceholder;
                        }
                    },
                });

                var countryJsData = iti.getSelectedCountryData();
                var countryJs = 'gn';
                if (!empty(countryJsData) && !empty(countryJsData.iso2)) {
                    countryJs = countryJsData.iso2;
                    getMobileMoneyPaymentMethodLogo(iti);
                }

                var methodCountry = document.getElementById("methods" + countryJs);
                showCurrentLogos(methodCountry);

                                                setAction('https://checkout.cinetpay.com/payment/verify', 'MOBILE_MONEY');
                                                                                                
                phoneNumberInput.addEventListener('countrychange', function (e) {
                    const methodCountry = document.getElementById("methods" + iti.getSelectedCountryData().iso2)
                    showCurrentLogos(methodCountry);
                    getMobileMoneyPaymentMethodLogo(iti);
                });


                phoneNumberInput.addEventListener('paste', function (e) {
                    getMobileMoneyPaymentMethodLogo(iti);
                });
                phoneNumberInput.addEventListener('keyup', function (e) {
                    getMobileMoneyPaymentMethodLogo(iti);
                });

                if (!empty(phoneNumberInput)) {
                    setInputFilter(phoneNumberInput, function (value) {
                        return /^\d*\.?\d*$/.test(value.replace(/\s/g, ''));
                    });
                }


                var countryData = iti.getSelectedCountryData()
                var countryIso = countryData.iso2;
                var phoneNumber = phoneNumberInput.value.replace("+" + iti.dialCode, "").trim();
                displayPaymentMethodLogo(countryIso, phoneNumber);
                return true;
            } catch (e) {
            }
        }

        function getMobileMoneyPaymentMethodLogo(itiEvent) {
            var countryData = itiEvent.getSelectedCountryData()
            var countryIso = countryData.iso2;
            var phoneNumber = itiEvent.getNumber().replace("+" + countryData.dialCode, "").trim();
            return displayPaymentMethodLogo(countryIso, phoneNumber);
        }

        if (document.readyState !== 'loading') {
            initializeIntelInput();
        } else {
            document.addEventListener("DOMContentLoaded", initializeIntelInput);
        }
        
                setAction('https://checkout.cinetpay.com/payment/process/wallet', 'WALLET')
                    </script>
    
    <script>
        if (!String.prototype.startsWith) {
            Object.defineProperty(String.prototype, 'startsWith', {
                value: function (search, rawPos) {
                    var pos = rawPos > 0 ? rawPos | 0 : 0;
                    return this.substring(pos, pos + search.length) === search;
                }
            });
        }

        var paymentMethods = {"bf":{"regex":[],"prefixes":[{"values":["55","64","65","66","67","74","75","76","77"],"name":"orange"},{"values":["51","53","60","61","62","63","70","71","72","73","58"],"name":"moov"}],"max_digits":8,"currencies":["XOF"]},"bj":{"regex":[],"prefixes":[{"values":["51","52","53","54","61","62","66","67","69","90","91","96","97"],"name":"mtn"},{"values":["60","63","64","65","94","95","98","99","68","94","95","98","99","55","58"],"name":"moov"}],"max_digits":8,"currencies":["XOF"]},"cd":{"regex":[],"prefixes":[{"values":["80","84","85","89"],"currencies":["CDF","USD"],"name":"orange"},{"currencies":["CDF","USD"],"values":["97","99"],"name":"airtel"},{"values":["81","82","83","081","082","080","083"],"currencies":["CDF","USD"],"name":"mpesa"}],"max_digits":10,"currencies":["CDF","USD"]},"ci":{"regex":[{"values":"^[0,4,5,6,7,8,9]{1}[7,8,9]\\d{0,8}","name":"orange"},{"values":"^[0,4,5,6,7,8,9]{1}[4,5,6]\\d{0,8}","name":"mtn"},{"values":"^[0,4,5,6,7,8,9]{1}[0,1,2,3]{1}\\d{0,8}","name":"moov"}],"prefixes":[],"max_digits":10,"currencies":["XOF"]},"cm":{"regex":[],"prefixes":[{"values":["690","691","692","693","694","695","696","697","698","699","655","656","657","658","659"],"name":"orange"},{"values":["680","681","682","683","684","685","686","687","688","689","650","651","652","653","654","678"],"name":"mtn"}],"max_digits":10,"currencies":["XAF"]},"ml":{"regex":[],"prefixes":[{"values":["65","66","67","68","69","95","96","97","98","99"],"name":"moov"}],"max_digits":10,"currencies":["XOF"]},"ne":{"regex":[],"prefixes":[{"values":["86","87","88","89","96","97","98","99"],"name":"airtel"}],"max_digits":8,"currencies":["XOF"]},"sn":{"regex":[],"prefixes":[{"values":["77","78"],"name":"orange"},{"values":["65","66","76"],"name":"freemoney"},{"values":["70"],"name":"expresso"}],"max_digits":10,"currencies":["XOF"]},"tg":{"regex":[],"prefixes":[{"values":["79","96","97","98","99"],"name":"moov"},{"values":["70","90","91","92","93"],"name":"tmoney"}],"max_digits":10,"currencies":["XOF"]},"gn":{"regex":[],"prefixes":[{"values":["610","611","62"],"name":"orange"},{"values":["66"],"name":"mtn"}],"max_digits":8,"currencies":["GNF"]}};

        function displayPaymentMethodLogo(country, phoneNumber) {
            var countriesPaymentMethods = paymentMethods[country.toLowerCase()];
            var logosPath = '/assets/images/payment_methods/';
            var logo = 'default';
            if (countriesPaymentMethods !== undefined) {
                var countriesPaymentMethodsRegexEntries = countriesPaymentMethods['regex'];
                var countriesPaymentMethodsValuesEntries = countriesPaymentMethods['prefixes'];
                if (typeof countriesPaymentMethodsRegexEntries !== undefined && countriesPaymentMethodsRegexEntries.length > 0) {
                    for (var regexItem of countriesPaymentMethodsRegexEntries) {
                        if (new RegExp(regexItem.values).test(phoneNumber) && phoneNumber.length <= countriesPaymentMethods['max_digits']) {
                            logo = regexItem.name;
                            document.getElementById("payment-method-icon").src = logosPath + logo + '.png';
                            return;
                        }
                    }
                }
                if (typeof countriesPaymentMethodsValuesEntries !== undefined && countriesPaymentMethodsValuesEntries.length > 0) {
                    for (var prefixItem of countriesPaymentMethodsValuesEntries) {
                        var prefixes = prefixItem['values'];
                        for (var prefix of prefixes) {
                            if (phoneNumber.startsWith(prefix) && phoneNumber.length <= countriesPaymentMethods['max_digits']) {
                                logo = prefixItem['name'];
                                document.getElementById("payment-method-icon").src = logosPath + logo + '.png';
                                return;
                            }
                        }
                    }
                }
            }
            document.getElementById("payment-method-icon").src = logosPath + 'default.png';
        }
    </script>
</body>
</html>
