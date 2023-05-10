<?php
session_start();
require '../config/connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Epic Escapes</title>
    <script src="/web-tour/src/Lib/tailwind.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .field__input {
            writing-mode: horizontal-tb !important;
            width: 100%;
            height: 44px;
            display: block;
            box-sizing: border-box;
            padding-left: 12px;
            border: 1px #d9d9d9 solid;
            border-radius: 4px;
            background-color: #fff;
            color: #333;
            font: inherit;
            font-size: 14px
        }

        .label-item {
            position: absolute;

            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            box-sizing: border-box;
            color: #999;
            z-index: 1;
            user-select: none;
            pointer-events: none;
            font-size: 1em;
            transform: translateY(6px);
            transform: none;
            font-size: .84em;
            padding-left: 0.9em;
        }

        .select-item {
            height: 46px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .main .field {
            padding: 0.4em;
        }

        .field {
            padding: 5.6px;
            float: left;
            width: 100%;
            box-sizing: border-box;
        }

        .main {
            display: flex;
            flex-direction: column;
            padding: 0 2em 0 2em;
        }

        .main__context {
            padding-bottom: 1.5em;
        }

        .article {
            display: blocks;
        }

        .row {
            margin-left: -10px;
            margin-right: -10px;
        }

        .row::after {
            content: "";
            display: table;
            clear: both;
        }



        .wrap {
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 0 1em;
            font-size: 14px;
            max-width: 40em;
            margin: 0 auto;
        }

        .section__content::after {
            clear: both;
        }

        .section__content::before {
            content: "";
            display: table;
        }

        .fieldset {
            margin: -0.4em;
        }

        .fieldset::after {
            clear: both;
        }

        .fieldset::after {
            content: "";
            display: table;
        }

        .field__input::-moz-focus-inner {
            outline: none;
            border-color: #66afe9;
            box-shadow: 0 0 0 1px #66afe9;
        }

        .sidebar__header {
            width: 540px;
        }

        .sidebar__body {
            font-size: 14px;
        }

        .content__item {
            width: 240px;
        }

        .sidebar__header {
            border-bottom: 1px solid #ccc;
        }

        .content {
            border-bottom: 1px solid #ccc;
        }

        .function {
            border-bottom: 1px solid #ccc;
        }

        .ingredient {
            border-bottom: 1px solid #ccc;
        }



        .button input:hover {
            background-color: #00aeef;
        }
    </style>


</head>

<body>
<?php include "../Components/Header/Header.php" ?>
<h1 class="my-5 text-sky-500 text-center text-3xl font-semibold">Thông tin đơn hàng</h1>
    <div class="mx-40 flex justify-content-around my-10">
        <main class="main">
            <div class="main__context flex justify-around items-center">
                <article class="animate-floating-labels row">
                    <form action="code.php" method="post">
                        <section class="section">
                            <div class="section__header flex" style="justify-content: space-between ; color:#333;font-size:18px;">
                            <div class="section__content ">
                                <div class="fieldset ">
                                    <div class=" field ">
                                        
                                        <input class="field__input" type="email" name="gmail" value="" id="" placeholder="Email" require>

                                    </div>
                                    <div class="field">
                                        <input class="field__input" name="name" value="" type="name" placeholder="Họ và tên" require>
                                    </div>
                                    <div class="field flex w-full " style="justify-content: space-between;">
                                       
                                        <input class="field__input" type="text" name="number" id="" placeholder="Số điện thoại" require>
                                        <div class="" >
                                            <select class="select-item" style="width: 200px;margin-left : 10px" name="billingPhoneRegion" data-init-value="VN" data-select2-id="select2-data-5-wpe7" tabindex="-1" aria-hidden="true">
                                                <option value="AF" data-select2-id="select2-data-7-0gp7">Afghanistan (+93)</option>
                                                <option value="AL" data-select2-id="select2-data-8-rvar">Albania (+355)</option>
                                                <option value="DZ" data-select2-id="select2-data-9-lh1f">Algeria (+213)</option>
                                                <option value="AD" data-select2-id="select2-data-10-5a44">Andorra (+376)</option>
                                                <option value="AO" data-select2-id="select2-data-11-2q9y">Angola (+244)</option>
                                                <option value="AG" data-select2-id="select2-data-12-yxog">Antigua and Barbuda (+1)</option>
                                                <option value="AR" data-select2-id="select2-data-13-864o">Argentina (+54)</option>
                                                <option value="AM" data-select2-id="select2-data-14-xx65">Armenia (+374)</option>
                                                <option value="AU" data-select2-id="select2-data-15-y7jx">Australia (+61)</option>
                                                <option value="AT" data-select2-id="select2-data-16-v36b">Austria (+43)</option>
                                                <option value="AZ" data-select2-id="select2-data-17-b7ez">Azerbaijan (+994)</option>
                                                <option value="BS" data-select2-id="select2-data-18-y1tq">Bahamas (+1)</option>
                                                <option value="BH" data-select2-id="select2-data-19-xr4r">Bahrain (+973)</option>
                                                <option value="BD" data-select2-id="select2-data-20-8gth">Bangladesh (+880)</option>
                                                <option value="BB" data-select2-id="select2-data-21-rf5t">Barbados (+1)</option>
                                                <option value="BY" data-select2-id="select2-data-22-ll4e">Belarus (+375)</option>
                                                <option value="BE" data-select2-id="select2-data-23-b5pk">Belgium (+32)</option>
                                                <option value="BZ" data-select2-id="select2-data-24-5fgu">Belize (+501)</option>
                                                <option value="BJ" data-select2-id="select2-data-25-de0c">Benin (+229)</option>
                                                <option value="BT" data-select2-id="select2-data-26-4y1o">Bhutan (+975)</option>
                                                <option value="BO" data-select2-id="select2-data-27-jctl">Bolivia (+591)</option>
                                                <option value="BA" data-select2-id="select2-data-28-gnrt">Bosnia and Herzegovina (+387)</option>
                                                <option value="BW" data-select2-id="select2-data-29-vmba">Botswana (+267)</option>
                                                <option value="BR" data-select2-id="select2-data-30-jgl3">Brazil (+55)</option>
                                                <option value="BN" data-select2-id="select2-data-31-iuhj">Brunei (+673)</option>
                                                <option value="BG" data-select2-id="select2-data-32-31ok">Bulgaria (+359)</option>
                                                <option value="BF" data-select2-id="select2-data-33-t544">Burkina Faso (+226)</option>
                                                <option value="BI" data-select2-id="select2-data-34-6t14">Burundi (+257)</option>
                                                <option value="KH" data-select2-id="select2-data-35-wyek">Cambodia (+855)</option>
                                                <option value="CM" data-select2-id="select2-data-36-lcb2">Cameroon (+237)</option>
                                                <option value="CA" data-select2-id="select2-data-37-uz4v">Canada (+1)</option>
                                                <option value="CV" data-select2-id="select2-data-38-6xdu">Cape Verde (+238)</option>
                                                <option value="CF" data-select2-id="select2-data-39-iiya">Central African Republic (+236)</option>
                                                <option value="TD" data-select2-id="select2-data-40-qhal">Chad (+235)</option>
                                                <option value="CL" data-select2-id="select2-data-41-8axo">Chile (+56)</option>
                                                <option value="CO" data-select2-id="select2-data-42-q8u9">Colombia (+57)</option>
                                                <option value="KM" data-select2-id="select2-data-43-e7st">Comoros (+269)</option>
                                                <option value="CG" data-select2-id="select2-data-44-ha4j">Congo-Brazzaville (+242)</option>
                                                <option value="CK" data-select2-id="select2-data-45-24dm">Congo-Kinshasa (+682)</option>
                                                <option value="CR" data-select2-id="select2-data-46-kgcu">Costa Rica (+506)</option>
                                                <option value="CD" data-select2-id="select2-data-47-81g3">Côte d'Ivoire (+243)</option>
                                                <option value="HR" data-select2-id="select2-data-48-0096">Croatia (+385)</option>
                                                <option value="CU" data-select2-id="select2-data-49-nilr">Cuba (+53)</option>
                                                <option value="CY" data-select2-id="select2-data-50-sbbk">Cyprus (+357)</option>
                                                <option value="CZ" data-select2-id="select2-data-51-hytu">Czech Republic (+420)</option>
                                                <option value="DK" data-select2-id="select2-data-52-aoq9">Denmark (+45)</option>
                                                <option value="DJ" data-select2-id="select2-data-53-c3mz">Djibouti (+253)</option>
                                                <option value="DM" data-select2-id="select2-data-54-aj9s">Dominica (+1)</option>
                                                <option value="DO" data-select2-id="select2-data-55-hzkr">Dominican Republic (+1)</option>
                                                <option value="TL" data-select2-id="select2-data-56-dtws">East Timor (+670)</option>
                                                <option value="EC" data-select2-id="select2-data-57-wnuq">Ecuador (+593)</option>
                                                <option value="EG" data-select2-id="select2-data-58-jtyo">Egypt (+20)</option>
                                                <option value="SV" data-select2-id="select2-data-59-bziz">El Salvador (+503)</option>
                                                <option value="GQ" data-select2-id="select2-data-60-j1fn">Equatorial Guinea (+240)</option>
                                                <option value="ER" data-select2-id="select2-data-61-t3na">Eritrea (+291)</option>
                                                <option value="EE" data-select2-id="select2-data-62-let4">Estonia (+372)</option>
                                                <option value="ET" data-select2-id="select2-data-63-l8z0">Ethiopia (+251)</option>
                                                <option value="FJ" data-select2-id="select2-data-64-wkpm">Fiji (+679)</option>
                                                <option value="FI" data-select2-id="select2-data-65-evze">Finland (+358)</option>
                                                <option value="FR" data-select2-id="select2-data-66-2duj">France (+33)</option>
                                                <option value="GA" data-select2-id="select2-data-67-ngf5">Gabon (+241)</option>
                                                <option value="GM" data-select2-id="select2-data-68-oli1">Gambia (+220)</option>
                                                <option value="GE" data-select2-id="select2-data-69-4393">Georgia (+995)</option>
                                                <option value="DE" data-select2-id="select2-data-70-pro1">Germany (+49)</option>
                                                <option value="GH" data-select2-id="select2-data-71-2so0">Ghana (+233)</option>
                                                <option value="GR" data-select2-id="select2-data-72-mppc">Greece (+30)</option>
                                                <option value="GD" data-select2-id="select2-data-73-13mz">Grenada (+1)</option>
                                                <option value="GT" data-select2-id="select2-data-74-k5y7">Guatemala (+502)</option>
                                                <option value="GN" data-select2-id="select2-data-75-n11l">Guinea (+224)</option>
                                                <option value="GW" data-select2-id="select2-data-76-podz">Guinea-Bissau (+245)</option>
                                                <option value="GY" data-select2-id="select2-data-77-uggw">Guyana (+592)</option>
                                                <option value="HT" data-select2-id="select2-data-78-0s6v">Haiti (+509)</option>
                                                <option value="HN" data-select2-id="select2-data-79-cyps">Honduras (+504)</option>
                                                <option value="HK" data-select2-id="select2-data-80-wcuy">Hong Kong (+852)</option>
                                                <option value="HU" data-select2-id="select2-data-81-fwhl">Hungary (+36)</option>
                                                <option value="IS" data-select2-id="select2-data-82-sddf">Iceland (+354)</option>
                                                <option value="IN" data-select2-id="select2-data-83-lsq5">India (+91)</option>
                                                <option value="ID" data-select2-id="select2-data-84-wt45">Indonesia (+62)</option>
                                                <option value="IR" data-select2-id="select2-data-85-q8w7">Iran (+98)</option>
                                                <option value="IQ" data-select2-id="select2-data-86-thov">Iraq (+964)</option>
                                                <option value="IE" data-select2-id="select2-data-87-e1uk">Ireland (+353)</option>
                                                <option value="IL" data-select2-id="select2-data-88-3z97">Israel (+972)</option>
                                                <option value="IT" data-select2-id="select2-data-89-3wcx">Italy (+39)</option>
                                                <option value="JM" data-select2-id="select2-data-90-z31v">Jamaica (+1)</option>
                                                <option value="JP" data-select2-id="select2-data-91-uu7k">Japan (Nippon) (+81)</option>
                                                <option value="JO" data-select2-id="select2-data-92-zp8z">Jordan (+962)</option>
                                                <option value="KZ" data-select2-id="select2-data-93-3u8q">Kazakhstan (+7)</option>
                                                <option value="KE" data-select2-id="select2-data-94-1teh">Kenya (+254)</option>
                                                <option value="KI" data-select2-id="select2-data-95-hk3l">Kiribati (+686)</option>
                                                <option value="KP" data-select2-id="select2-data-96-oj0z">North Korea (+850)</option>
                                                <option value="XK" data-select2-id="select2-data-97-tk85">Kosovo (+383)</option>
                                                <option value="KW" data-select2-id="select2-data-98-ml4t">Kuwait (+965)</option>
                                                <option value="KG" data-select2-id="select2-data-99-sqkb">Kyrgyzstan (+996)</option>
                                                <option value="LA" data-select2-id="select2-data-100-om7q">Laos (+856)</option>
                                                <option value="LV" data-select2-id="select2-data-101-imlc">Latvia (+371)</option>
                                                <option value="LB" data-select2-id="select2-data-102-t4lf">Lebanon (+961)</option>
                                                <option value="LS" data-select2-id="select2-data-103-uuff">Lesotho (+266)</option>
                                                <option value="LR" data-select2-id="select2-data-104-d8ix">Liberia (+231)</option>
                                                <option value="LY" data-select2-id="select2-data-105-hcdz">Libya (+218)</option>
                                                <option value="LI" data-select2-id="select2-data-106-uvyp">Liechtenstein (+423)</option>
                                                <option value="LT" data-select2-id="select2-data-107-827a">Lithuania (+370)</option>
                                                <option value="LU" data-select2-id="select2-data-108-3g2x">Luxembourg (+352)</option>
                                                <option value="MK" data-select2-id="select2-data-109-uhan">Macedonia (FYROM) (+389)</option>
                                                <option value="MG" data-select2-id="select2-data-110-c94i">Madagascar (+261)</option>
                                                <option value="MW" data-select2-id="select2-data-111-lpmh">Malawi (+265)</option>
                                                <option value="MY" data-select2-id="select2-data-112-7slp">Malaysia (+60)</option>
                                                <option value="MV" data-select2-id="select2-data-113-ksfx">Maldives (+960)</option>
                                                <option value="ML" data-select2-id="select2-data-114-fzdz">Mali (+223)</option>
                                                <option value="MT" data-select2-id="select2-data-115-ci4u">Malta (+356)</option>
                                                <option value="MH" data-select2-id="select2-data-116-u1zz">Marshall Islands (+692)</option>
                                                <option value="MR" data-select2-id="select2-data-117-77ea">Mauritania (+222)</option>
                                                <option value="MU" data-select2-id="select2-data-118-ydjl">Mauritius (+230)</option>
                                                <option value="MX" data-select2-id="select2-data-119-rf8s">Mexico (+52)</option>
                                                <option value="FM" data-select2-id="select2-data-120-2kh9">Micronesia (+691)</option>
                                                <option value="MD" data-select2-id="select2-data-121-dkir">Moldova (+373)</option>
                                                <option value="MC" data-select2-id="select2-data-122-6h4p">Monaco (+377)</option>
                                                <option value="MN" data-select2-id="select2-data-123-nei7">Mongolia (+976)</option>
                                                <option value="ME" data-select2-id="select2-data-124-t8pw">Montenegro (+382)</option>
                                                <option value="MA" data-select2-id="select2-data-125-e8np">Morocco (+212)</o ption>
                                                <option value="MZ" data-select2-i d="select2-data-126-5rk5">Mozambique (+258)</option>
                                                <option value="MM" data-select2-id="select2-data-127-nu2q">Myanmar (+95)</option>
                                                <option value="NA" data-select2-id="select2-data-128-pfoj">Namibia (+264)</option>
                                                <option value="NR" data-select2-id="select2-data-129-dkao">Nauru (+674)</option>
                                                <option value="NP" data-select2-id="select2-data-130-f21y">Nepal (+977)</option>
                                                <option value="NL" data-select2-id="select2-data-131-gkxw">Netherlands (+31)</option>
                                                <option value="NZ" data-select2-id="select2-data-132-1n8m">New Zealand (+64)</option>
                                                <option value="NI" data-select2-id="select2-data-133-h6nm">Nicaragua (+505)</option>
                                                <option value="NE" data-select2-id="select2-data-134-o8xi">Niger (+227)</option>
                                                <option value="NG" data-select2-id="select2-data-135-kb4b">Nigeria (+234)</option>
                                                <option value="KR" data-select2-id="select2-data-136-myiv">South Korea (+82)</option>
                                                <option value="NC" data-select2-id="select2-data-137-zpsk">New Caledonia (+687)</option>
                                                <option value="NO" data-select2-id="select2-data-138-fekv">Norway (+47)</option>
                                                <option value="OM" data-select2-id="select2-data-139-55yb">Oman (+968)</option>
                                                <option value="PK" data-select2-id="select2-data-140-5gs4">Pakistan (+92)</option>
                                                <option value="PW" data-select2-id="select2-data-141-0prc">Palau (+680)</option>
                                                <option value="PS" data-select2-id="select2-data-142-rbn9">Palestine (+970)</option>
                                                <option value="PA" data-select2-id="select2-data-143-ehk1">Panama (+507)</option>
                                                <option value="PG" data-select2-id="select2-data-144-9qt7">Papua New Guinea (+675)</option>
                                                <option value="PY" data-select2-id="select2-data-145-zowe">Paraguay (+595)</option>
                                                <option value="PE" data-select2-id="select2-data-146-dgbf">Peru (+51)</option>
                                                <option value="PH" data-select2-id="select2-data-147-nxch">Philippines (+63)</option>
                                                <option value="PL" data-select2-id="select2-data-148-tb9w">Poland (+48)</option>
                                                <option value="PT" data-select2-id="select2-data-149-pkla">Portugal (+351)</option>
                                                <option value="QA" data-select2-id="select2-data-150-wovx">Qatar (+974)</option>
                                                <option value="RO" data-select2-id="select2-data-151-dpdj">Romania (+40)</option>
                                                <option value="RU" data-select2-id="select2-data-152-06tf">Russia (+7)</option>
                                                <option value="RW" data-select2-id="select2-data-153-nr6q">Rwanda (+250)</option>
                                                <option value="KN" data-select2-id="select2-data-154-v0ik">Saint Kitts and Nevis (+1)</option>
                                                <option value="LC" data-select2-id="select2-data-155-h9u2">Saint Lucia (+1)</option>
                                                <option value="VC" data-select2-id="select2-data-156-fgul">Saint Vincent and the Grenadines (+1)</option>
                                                <option value="WS" data-select2-id="select2-data-157-yc06">Samoa (+685)</option>
                                                <option value="SM" data-select2-id="select2-data-158-734v">San Marino (+378)</option>
                                                <option value="ST" data-select2-id="select2-data-159-ni5f">Sao Tome and Principe (+239)</option>
                                                <option value="SA" data-select2-id="select2-data-160-pyee">Saudi Arabia (+966)</option>
                                                <option value="SS" data-select2-id="select2-data-161-3ouf">South Sudan (+211)</option>
                                                <option value="SN" data-select2-id="select2-data-162-hjuy">Senegal (+221)</option>
                                                <option value="RS" data-select2-id="select2-data-163-tjcl">Serbia (+381)</option>
                                                <option value="SC" data-select2-id="select2-data-164-p6pe">Seychelles (+248)</option>
                                                <option value="SL" data-select2-id="select2-data-165-h8mg">Sierra Leone (+232)</option>
                                                <option value="SG" data-select2-id="select2-data-166-cgt6">Singapore (+65)</option>
                                                <option value="SH" data-select2-id="select2-data-167-96ep">Saint Helena (+290)</option>
                                                <option value="SK" data-select2-id="select2-data-168-26jb">Slovakia (+421)</option>
                                                <option value="SI" data-select2-id="select2-data-169-f0x3">Slovenia (+386)</option>
                                                <option value="SB" data-select2-id="select2-data-170-3ros">Solomon Islands (+677)</option>
                                                <option value="SO" data-select2-id="select2-data-171-u9gr">Somalia (+252)</option>
                                                <option value="SJ" data-select2-id="select2-data-172-mssq">Svalbard and Jan Mayen (+47)</option>
                                                <option value="ZA" data-select2-id="select2-data-173-fh5o">South Africa (+27)</option>
                                                <option value="ES" data-select2-id="select2-data-174-plqg">Spain (+34)</option>
                                                <option value="LK" data-select2-id="select2-data-175-h6ud">Sri Lanka (+94)</option>
                                                <option value="SD" data-select2-id="select2-data-176-kvo6">Sudan (+249)</option>
                                                <option value="SR" data-select2-id="select2-data-177-rzyv">Suriname (+597)</option>
                                                <option value="SZ" data-select2-id="select2-data-178-h812">Swaziland (+268)</option>
                                                <option value="SE" data-select2-id="select2-data-179-wut7">Sweden (+46)</option>
                                                <option value="CH" data-select2-id="select2-data-180-761p">Switzerland (+41)</option>
                                                <option value="SY" data-select2-id="select2-data-181-wck2">Syria (+963)</option>
                                                <option value="TJ" data-select2-id="select2-data-182-s1r2">Tajikistan (+992)</option>
                                                <option value="TZ" data-select2-id="select2-data-183-jeec">Tanzania (+255)</option>
                                                <option value="TH" data-select2-id="select2-data-184-qkim">Thailand (+66)</option>
                                                <option value="TG" data-select2-id="select2-data-185-b8oy">Togo (+228)</option>
                                                <option value="TO" data-select2-id="select2-data-186-1c60">Tonga (+676)</option>
                                                <option value="TK" data-select2-id="select2-data-187-u5xj">Tokelau (+690)</option>
                                                <option value="TT" data-select2-id="select2-data-188-iyyx">Trinidad and Tobago (+1)</option>
                                                <option value="TN" data-select2-id="select2-data-189-w82y">Tunisia (+216)</option>
                                                <option value="TR" data-select2-id="select2-data-190-umbb">Turkey (+90)</option>
                                                <option value="CN" data-select2-id="select2-data-191-2xlh">China (+86)</option>
                                                <option value="TM" data-select2-id="select2-data-192-cjnd">Turkmenistan (+993)</option>
                                                <option value="TV" data-select2-id="select2-data-193-3lcs">Tuvalu (+688)</option>
                                                <option value="UG" data-select2-id="select2-data-194-ozql">Uganda (+256)</option>
                                                <option value="UA" data-select2-id="select2-data-195-nbv4">Ukraine (+380)</option>
                                                <option value="AE" data-select2-id="select2-data-196-y80d">United Arab Emirates (+971)</option>
                                                <option value="GB" data-select2-id="select2-data-197-whpl">United Kingdom (+44)</option>
                                                <option value="US" data-select2-id="select2-data-198-mbz1">United States (+1)</option>
                                                <option value="UY" data-select2-id="select2-data-199-657w">Uruguay (+598)</option>
                                                <option value="UZ" data-select2-id="select2-data-200-qi3v">Uzbekistan (+998)</option>
                                                <option value="VU" data-select2-id="select2-data-201-e5id">Vanuatu (+678)</option>
                                                <option value="VA" data-select2-id="select2-data-202-h3ev">Vatican (+39)</option>
                                                <option value="VE" data-select2-id="select2-data-203-fb3m">Venezuela (+58)</option>
                                                <option value="VN" data-select2-id="select2-data-204-uzt7">Vietnam (+84)</option>
                                                <option value="EH" data-select2-id="select2-data-205-zbnv">Western Sahara (+212)</option>
                                                <option value="YE" data-select2-id="select2-data-206-lx4u">Yemen (+967)</option>
                                                <option value="ZM" data-select2-id="select2-data-207-le7o">Zambia (+260)</option>
                                                <option value="ZW" data-select2-id="select2-data-208-gd3i">Zimbabwe (+263)</option>
                                                <option value="TW" data-select2-id="select2-data-209-6a8d">Taiwan (+886)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field ">
                                        <input class="field__input" type="text" name="diachi" id="" placeholder="Địa chỉ" require>
                                    </div>
                                    <div class=" field  pt-px ">
                                        <div class="">
                                            <select class="select-item form-select form-select-sm" id="city" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn tỉnh thành</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class=" ">
                                            
                                            <select class="select-item form-select form-select-sm" id="district" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn quận huyện</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="field">
                                        <div class=" ">
                                            
                                            <select class="select-item form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn phường xã</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="fieldset ">
                                    <h3 class="visually-hidden"></h3>
                                    <div class="field w-full " data-bind-class="{'field--show-floating-label': note}">
                                        <div class="field__input-wrapper w-full">
                                            <textarea class="w-full" style=" resize:none;  min-height:100px;border: 1px solid #ccc; padding-left: 12px;border-radius:4px; font-size:14px " name="note" id="note" class="field__input" data-bind="note" placeholder="Ghi chú" require></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </section>

                </article>
            </div>

        </main>

        <aside class="aside" style="width: 50%;
            padding: 0 2em 2rem 2em; background-color: #FAFAFA; height: 100%  ;">
            <div class="sidebar__header">
                <h1 class="sidebar__title" style="font-size: 1.15rem;">
                    Đơn hàng
                </h1>
            </div>
            <div class="sidebar__body mt-2">
                <?php
                $total = 0;
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT * FROM cart WHERE  user_id = '$user_id' ";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        while ($value = mysqli_fetch_assoc($query_run)) {
                            $id = $value['tour_id'];
                            $qrimg = "select tour_image from tour_images where tour_id=$id";
                            $tour_title = "select tour_title from tours where tour_id=$id";
                            $quantity = $value['cart_quantity'];

                            $price = "select tour_price from tours where tour_id=$id";
                            $result_img = mysqli_query($conn, $qrimg);
                            $result_title = mysqli_query($conn, $tour_title);
                            // $result_quantity=mysqli_query($conn,$quantity);
                            $result_price = mysqli_query($conn, $price);
                ?>
                            <div class="content flex items-center">
                                <div class="content__img mr-4 w-40">
                                    <th class="item--content ">
                                        <?php
                                        $row_img = mysqli_fetch_assoc($result_img);
                                        $path = $row_img['tour_image'];
                                        echo "<img id='father' class='w-full h-16' src='$path' alt='ảnh'>";
                                        ?>
                                    </th>

                                </div>
                                <div class="content__item--money my-2">
                                    <div class="content__item--title">
                                        <p class="font-semibold">Tên tour: <span class="font-medium"><?php
                                        $row_title = mysqli_fetch_assoc($result_title);
                                        $path_title = $row_title['tour_title'];
                                        echo "$path_title ";
                                        ?></span> </p>    
                                    </div>

                                    <div class="money flex justify-between my-2">
                                        <p class="font-semibold">Số lượng người: <span class="font-medium"><?php
                                                $people = $value['cart_quantity'];
                                                echo "$people";
                                            ?></span> người </p>
                                    </div>
                                    <div class="time my-2">
                                        <p class="font-semibold">Ngày đi: <span><?php
                                        $date = $value['date_start'];
                                            echo "$date ";
                                        ?></span> </p>
                                    </div>
                                </div>
                            </div>
                <?php
                            $row_price = mysqli_fetch_assoc($result_price);
                            $path_price = $row_price['tour_price'];
                            $total = $total + $path_price * $quantity;
                        }
                    }
                }
                ?>

                <div class="ingredient mt-5 mb-5">
                    <div class="flex justify-between">
                        <div>
                            <p>Tạm tính</p>
                        </div>
                        <div>
                            <p class="font-semibold"><?= number_format($total, 0, " ", ".") ?> VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="function__order mt-5 ">
                    <div class="flex justify-between my-2">
                        <div>
                            <p>Tổng cộng</p>
                        </div>
                        <div>
                            <h2 class="font-semibold"><?= number_format($total, 0, " ", ".") ?> VNĐ</h2>
                        </div>
                    </div>

                    <div class="flex justify-end">
                     <button style="width:100px;height:45px;border:1px solid; border-radius:0.25rem;margin-left: 10px;background-color:#2f71a9;color:#fff;">Đặt hàng</button>
                    </div>
                    </form>
                </div>
            </div>
        </aside>
    </div>
    <?php include "../Components/Footer/Footer.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>

</body>

</html>