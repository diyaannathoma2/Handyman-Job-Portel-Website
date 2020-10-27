<div class="mb-0 rounded-0 pw-banner align-items-center" style="display:none;"></div>


<div class="main">  <section class="section pt-8">
<div class="container-fluid container-fluid--max">
<div class="login-box">
<form id="signup-form" class="signup-form" action="/signup.php" method="POST">
<input type="hidden" name="Fp" id="fp">
<input type="hidden" name="Tz" id="tz">
<input type="hidden" name="Rc" id="rc">

<div class="login-form__content">
<h2 class="h1 modal-title mb-2" id="signUpModalCenterTitle">Sign Up</h2>
<p class="mb-3">Have an account? <a href="/login.php">Login now.</a></p>
<div class="form-label-over">
  <input type="text" name="Fullname" id="fullname" class="form-control" value="" required>
  <label for="fullname">Real name (for internal verification only)</label>
  <div id="fullname-error" class="invalid-message mb-1">&nbsp;</div>
</div>
<div class="signup-form d-md-flex">
  <div class="signup-form-column">
    <div class="form-label-over">
      <input type="email" name="Email" id="email" class="form-control" value="" required>
      <label for="email">Email</label>
      <div id="email-error" class="invalid-message mb-1">&nbsp;</div>
    </div>
    <div class="form-label-over">
      <input type="text" name="Nickname" id="nickname" class="form-control" value="" required>
      <label for="nickname">Nickname</label>
      <div id="nickname-error" class="invalid-message mb-1">&nbsp;</div>
    </div>
  </div>
  <div class="signup-form-gutter"></div>
  <div class="signup-form-column">
    <div class="form-label-over">
      <input type="password" name="Password" id="password" class="form-control" required>
      <label for="password">Password</label>
      <div id="password-error" class="invalid-message mb-1">&nbsp;</div>
    </div>
    <div class="form-label-over">
      <span class="fancy-select">
        <label for="countrycode" class="sr-only">Select Country</label>
        <select name="Countrycode" id="countrycode" class="form-control">
          <option value="">Select Country</option>
                                  <option value="af" >Afghanistan</option>
                                  <option value="ax" >Aland Islands</option>
                                  <option value="al" >Albania</option>
                                  <option value="dz" >Algeria</option>
                                  <option value="as" >American Samoa</option>
                                  <option value="ad" >Andorra</option>
                                  <option value="ao" >Angola</option>
                                  <option value="ai" >Anguilla</option>
                                  <option value="aq" >Antarctica</option>
                                  <option value="ag" >Antigua and Barbuda</option>
                                  <option value="ar" >Argentina</option>
                                  <option value="am" >Armenia</option>
                                  <option value="aw" >Aruba</option>
                                  <option value="ap" >Asia/Pacific Region</option>
                                  <option value="au" >Australia</option>
                                  <option value="at" >Austria</option>
                                  <option value="az" >Azerbaijan</option>
                                  <option value="bs" >Bahamas</option>
                                  <option value="bh" >Bahrain</option>
                                  <option value="bd" >Bangladesh</option>
                                  <option value="bb" >Barbados</option>
                                  <option value="by" >Belarus</option>
                                  <option value="be" >Belgium</option>
                                  <option value="bz" >Belize</option>
                                  <option value="bj" >Benin</option>
                                  <option value="bm" >Bermuda</option>
                                  <option value="bt" >Bhutan</option>
                                  <option value="bo" >Bolivia</option>
                                  <option value="bq" >Bonaire, Saint Eustatius and Saba</option>
                                  <option value="ba" >Bosnia and Herzegovina</option>
                                  <option value="bw" >Botswana</option>
                                  <option value="br" >Brazil</option>
                                  <option value="io" >British Indian Ocean Territory</option>
                                  <option value="bn" >Brunei Darussalam</option>
                                  <option value="bg" >Bulgaria</option>
                                  <option value="bf" >Burkina Faso</option>
                                  <option value="bi" >Burundi</option>
                                  <option value="kh" >Cambodia</option>
                                  <option value="cm" >Cameroon</option>
                                  <option value="ca" >Canada</option>
                                  <option value="cv" >Cape Verde</option>
                                  <option value="ky" >Cayman Islands</option>
                                  <option value="cf" >Central African Republic</option>
                                  <option value="td" >Chad</option>
                                  <option value="cl" >Chile</option>
                                  <option value="cn" >China</option>
                                  <option value="cx" >Christmas Island</option>
                                  <option value="cc" >Cocos (Keeling) Islands</option>
                                  <option value="co" >Colombia</option>
                                  <option value="km" >Comoros</option>
                                  <option value="cg" >Congo</option>
                                  <option value="cd" >Congo, The Democratic Republic of the</option>
                                  <option value="ck" >Cook Islands</option>
                                  <option value="cr" >Costa Rica</option>
                                  <option value="ci" >Cote D&#039;Ivoire</option>
                                  <option value="hr" >Croatia</option>
                                  <option value="cu" >Cuba</option>
                                  <option value="cw" >Curacao</option>
                                  <option value="cy" >Cyprus</option>
                                  <option value="cz" >Czech Republic</option>
                                  <option value="dk" >Denmark</option>
                                  <option value="dj" >Djibouti</option>
                                  <option value="dm" >Dominica</option>
                                  <option value="do" >Dominican Republic</option>
                                  <option value="ec" >Ecuador</option>
                                  <option value="eg" >Egypt</option>
                                  <option value="sv" >El Salvador</option>
                                  <option value="gq" >Equatorial Guinea</option>
                                  <option value="er" >Eritrea</option>
                                  <option value="ee" >Estonia</option>
                                  <option value="et" >Ethiopia</option>
                                  <option value="eu" >Europe</option>
                                  <option value="fk" >Falkland Islands (Malvinas)</option>
                                  <option value="fo" >Faroe Islands</option>
                                  <option value="fj" >Fiji</option>
                                  <option value="fi" >Finland</option>
                                  <option value="fr" >France</option>
                                  <option value="gf" >French Guiana</option>
                                  <option value="pf" >French Polynesia</option>
                                  <option value="tf" >French Southern Territories</option>
                                  <option value="ga" >Gabon</option>
                                  <option value="gm" >Gambia</option>
                                  <option value="ge" >Georgia</option>
                                  <option value="de" >Germany</option>
                                  <option value="gh" >Ghana</option>
                                  <option value="gi" >Gibraltar</option>
                                  <option value="gr" >Greece</option>
                                  <option value="gl" >Greenland</option>
                                  <option value="gd" >Grenada</option>
                                  <option value="gp" >Guadeloupe</option>
                                  <option value="gu" >Guam</option>
                                  <option value="gt" >Guatemala</option>
                                  <option value="gg" >Guernsey</option>
                                  <option value="gn" >Guinea</option>
                                  <option value="gw" >Guinea-Bissau</option>
                                  <option value="gy" >Guyana</option>
                                  <option value="ht" >Haiti</option>
                                  <option value="va" >Holy See (Vatican City State)</option>
                                  <option value="hn" >Honduras</option>
                                  <option value="hk" >Hong Kong</option>
                                  <option value="hu" >Hungary</option>
                                  <option value="is" >Iceland</option>
                                  <option value="in" >India</option>
                                  <option value="id" >Indonesia</option>
                                  <option value="ir" >Iran, Islamic Republic of</option>
                                  <option value="iq" >Iraq</option>
                                  <option value="ie" >Ireland</option>
                                  <option value="im" >Isle of Man</option>
                                  <option value="il" >Israel</option>
                                  <option value="it" >Italy</option>
                                  <option value="jm" >Jamaica</option>
                                  <option value="jp" >Japan</option>
                                  <option value="je" >Jersey</option>
                                  <option value="jo" >Jordan</option>
                                  <option value="kz" >Kazakhstan</option>
                                  <option value="ke" >Kenya</option>
                                  <option value="ki" >Kiribati</option>
                                  <option value="kp" >Korea, Democratic People&#039;s Republic of</option>
                                  <option value="kr" >Korea, Republic of</option>
                                  <option value="kw" >Kuwait</option>
                                  <option value="kg" >Kyrgyzstan</option>
                                  <option value="la" >Lao People&#039;s Democratic Republic</option>
                                  <option value="lv" >Latvia</option>
                                  <option value="lb" >Lebanon</option>
                                  <option value="ls" >Lesotho</option>
                                  <option value="lr" >Liberia</option>
                                  <option value="ly" >Libya</option>
                                  <option value="li" >Liechtenstein</option>
                                  <option value="lt" >Lithuania</option>
                                  <option value="lu" >Luxembourg</option>
                                  <option value="mo" >Macau</option>
                                  <option value="mk" >Macedonia</option>
                                  <option value="mg" >Madagascar</option>
                                  <option value="mw" >Malawi</option>
                                  <option value="my" >Malaysia</option>
                                  <option value="mv" >Maldives</option>
                                  <option value="ml" >Mali</option>
                                  <option value="mt" >Malta</option>
                                  <option value="mh" >Marshall Islands</option>
                                  <option value="mq" >Martinique</option>
                                  <option value="mr" >Mauritania</option>
                                  <option value="mu" >Mauritius</option>
                                  <option value="yt" >Mayotte</option>
                                  <option value="mx" >Mexico</option>
                                  <option value="fm" >Micronesia, Federated States of</option>
                                  <option value="md" >Moldova, Republic of</option>
                                  <option value="mc" >Monaco</option>
                                  <option value="mn" >Mongolia</option>
                                  <option value="me" >Montenegro</option>
                                  <option value="ms" >Montserrat</option>
                                  <option value="ma" >Morocco</option>
                                  <option value="mz" >Mozambique</option>
                                  <option value="mm" >Myanmar</option>
                                  <option value="na" >Namibia</option>
                                  <option value="nr" >Nauru</option>
                                  <option value="np" >Nepal</option>
                                  <option value="nl" >Netherlands</option>
                                  <option value="nc" >New Caledonia</option>
                                  <option value="nz" >New Zealand</option>
                                  <option value="ni" >Nicaragua</option>
                                  <option value="ne" >Niger</option>
                                  <option value="ng" >Nigeria</option>
                                  <option value="nu" >Niue</option>
                                  <option value="nf" >Norfolk Island</option>
                                  <option value="mp" >Northern Mariana Islands</option>
                                  <option value="no" >Norway</option>
                                  <option value="om" >Oman</option>
                                  <option value="pk" >Pakistan</option>
                                  <option value="pw" >Palau</option>
                                  <option value="ps" >Palestinian Territory</option>
                                  <option value="pa" >Panama</option>
                                  <option value="pg" >Papua New Guinea</option>
                                  <option value="py" >Paraguay</option>
                                  <option value="pe" >Peru</option>
                                  <option value="ph" >Philippines</option>
                                  <option value="pn" >Pitcairn Islands</option>
                                  <option value="pl" >Poland</option>
                                  <option value="pt" >Portugal</option>
                                  <option value="pr" >Puerto Rico</option>
                                  <option value="qa" >Qatar</option>
                                  <option value="re" >Reunion</option>
                                  <option value="ro" >Romania</option>
                                  <option value="ru" >Russian Federation</option>
                                  <option value="rw" >Rwanda</option>
                                  <option value="bl" >Saint Barthelemy</option>
                                  <option value="sh" >Saint Helena</option>
                                  <option value="kn" >Saint Kitts and Nevis</option>
                                  <option value="lc" >Saint Lucia</option>
                                  <option value="mf" >Saint Martin</option>
                                  <option value="pm" >Saint Pierre and Miquelon</option>
                                  <option value="vc" >Saint Vincent and the Grenadines</option>
                                  <option value="ws" >Samoa</option>
                                  <option value="sm" >San Marino</option>
                                  <option value="st" >Sao Tome and Principe</option>
                                  <option value="sa" >Saudi Arabia</option>
                                  <option value="sn" >Senegal</option>
                                  <option value="rs" >Serbia</option>
                                  <option value="sc" >Seychelles</option>
                                  <option value="sl" >Sierra Leone</option>
                                  <option value="sg" >Singapore</option>
                                  <option value="sx" >Sint Maarten (Dutch part)</option>
                                  <option value="sk" >Slovakia</option>
                                  <option value="si" >Slovenia</option>
                                  <option value="sb" >Solomon Islands</option>
                                  <option value="so" >Somalia</option>
                                  <option value="za" >South Africa</option>
                                  <option value="gs" >South Georgia and the South Sandwich Islands</option>
                                  <option value="ss" >South Sudan</option>
                                  <option value="es" >Spain</option>
                                  <option value="lk" >Sri Lanka</option>
                                  <option value="sd" >Sudan</option>
                                  <option value="sr" >Suriname</option>
                                  <option value="sj" >Svalbard and Jan Mayen</option>
                                  <option value="sz" >Swaziland</option>
                                  <option value="se" >Sweden</option>
                                  <option value="ch" >Switzerland</option>
                                  <option value="sy" >Syrian Arab Republic</option>
                                  <option value="tw" >Taiwan</option>
                                  <option value="tj" >Tajikistan</option>
                                  <option value="tz" >Tanzania, United Republic of</option>
                                  <option value="th" >Thailand</option>
                                  <option value="tl" >Timor-Leste</option>
                                  <option value="tg" >Togo</option>
                                  <option value="tk" >Tokelau</option>
                                  <option value="to" >Tonga</option>
                                  <option value="tt" >Trinidad and Tobago</option>
                                  <option value="tn" >Tunisia</option>
                                  <option value="tr" >Turkey</option>
                                  <option value="tm" >Turkmenistan</option>
                                  <option value="tc" >Turks and Caicos Islands</option>
                                  <option value="tv" >Tuvalu</option>
                                  <option value="ug" >Uganda</option>
                                  <option value="ua" >Ukraine</option>
                                  <option value="ae" >United Arab Emirates</option>
                                  <option value="uk" >United Kingdom</option>
                                  <option value="us" >United States</option>
                                  <option value="um" >United States Minor Outlying Islands</option>
                                  <option value="uy" >Uruguay</option>
                                  <option value="uz" >Uzbekistan</option>
                                  <option value="vu" >Vanuatu</option>
                                  <option value="ve" >Venezuela</option>
                                  <option value="vn" >Vietnam</option>
                                  <option value="vg" >Virgin Islands, British</option>
                                  <option value="vi" >Virgin Islands, U.S.</option>
                                  <option value="wf" >Wallis and Futuna</option>
                                  <option value="ye" >Yemen</option>
                                  <option value="zm" >Zambia</option>
                                  <option value="zw" >Zimbabwe</option>
                              </select>
      </span>
      <div id="countrycode-error" class="invalid-message mb-1">&nbsp;</div>
    </div>
  </div>
</div>
<div class="custom-control custom-checkbox mt-5">
  <input type="checkbox" name="Tos" id="tos" class="custom-control-input" >
  <label for="tos" class="custom-control-label">By signing up, I agree to Pickoworker’s Terms of Service and Privacy Policy.</label>
  <div id="tos-error" class="invalid-message mb-1">&nbsp;</div>
</div>
</div>
<div class="login-form__footer">
<button type="submit" class="btn btn-lg btn-primary btn-block">SIGN UP</button>
</div>
<div id="recaptcha-error" class="invalid-message mt-2 text-center" style="display:none;">&nbsp;</div>
</form>
</div>
</div>
</section>
<!-- /.home-hero -->
</div>
