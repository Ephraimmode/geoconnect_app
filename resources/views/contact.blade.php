@extends('layouts.app')

@section('content')

<!-- page name display -->
<section class="bg-gray-500" id="course-category">
    <div class="container flex mx-auto py-2 px-5 text-gray-800 text-sm space-x-1">
        <a class="bg-white rounded-md hover:bg-sky-300 p-1 hover:rounded-md" href="{{ url('/') }}">
            <!-- https://www.svgrepo.com/svg/22031/home-icon-silhouette?edit=true //svg generator link -->
            <svg fill="#6b7280" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.40 495.40" xml:space="preserve" stroke="#ef4444"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
        </a>
        <span class="p-1">|</span>
        <a class="p-1 hover:text-gray-800 hover:underline" href="{{ url('contact') }}">Contact</a>   
    </div>
</section>
<!-- page name display end-->

<!-- page bar -->
<section id="page-bar">
    <div class="container flex justify-between items-center bg-sky-600 mx-auto py-2 px-5 mt-4">
        <h3 class="text-white font-bold">Contact Us</h3>
        <div class="flex space-x-1 text-sm items-center font-thin text-white">
            <!-- svg whatsapp icon from: https://www.svgrepo.com/svg/28155/whatsapp?edit=true -->
            <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58.00 58.00" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00058"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#2CB742;" d="M0,58l4.988-14.963C2.457,38.78,1,33.812,1,28.5C1,12.76,13.76,0,29.5,0S58,12.76,58,28.5 S45.24,57,29.5,57c-4.789,0-9.299-1.187-13.26-3.273L0,58z"></path> <path style="fill:#FFFFFF;" d="M47.683,37.985c-1.316-2.487-6.169-5.331-6.169-5.331c-1.098-0.626-2.423-0.696-3.049,0.42 c0,0-1.577,1.891-1.978,2.163c-1.832,1.241-3.529,1.193-5.242-0.52l-3.981-3.981l-3.981-3.981c-1.713-1.713-1.761-3.41-0.52-5.242 c0.272-0.401,2.163-1.978,2.163-1.978c1.116-0.627,1.046-1.951,0.42-3.049c0,0-2.844-4.853-5.331-6.169 c-1.058-0.56-2.357-0.364-3.203,0.482l-1.758,1.758c-5.577,5.577-2.831,11.873,2.746,17.45l5.097,5.097l5.097,5.097 c5.577,5.577,11.873,8.323,17.45,2.746l1.758-1.758C48.048,40.341,48.243,39.042,47.683,37.985z"></path> </g> </g></svg>
            <a href="#" class="hover:underline" target="_blank">+44 (757) 697 8698</a>
            <span>(WhatsApp Only)</span>
        </div>
    </div>
</section>
<!-- page bar end -->

<!-- contact -->
<section id="contact">
    <div class="container text-sm md:text-md flex justify-between mx-auto my-8 md:flex-row flex-col-reverse">
        <!-- item 1 -->
        <div class="flex px-5 md:px-0">
            <div class="w-full bg-slate-500 py-8 px-7">
                <form class="flex flex-col space-y-4" action="#">
                    <div class="rounded-md">
                        <input class="w-full ring-1 ring-gray-300 border-gray-400 px-3 py-1 appearance-none text-slate-500 focus:ring-red-500 focus:outline-none focus:ring-1 rounded-md" type="text" placeholder="Name">
                    </div>
                    <div class="rounded-md">
                        <input class="w-full ring-1 ring-gray-300 border-gray-400 px-3 py-1 appearance-none text-slate-500 focus:ring-red-500 focus:outline-none focus:ring-1 rounded-md" type="email" placeholder="Email">
                    </div>
                    <div class="rounded-md flex relative space-x-1">
                        <input min="0" class="w-full ring-1 ring-gray-300 border-gray-400 px-3 py-1 appearance-none text-slate-500 focus:ring-red-500 focus:outline-none focus:ring-1 rounded-md" type="number" placeholder="Mobile">
                        <!-- countries select codes from:
                        https://stackoverflow.com/questions/53388003/select-country-dropdown-in-html-page -->
                        <select class="text-slate-400 w-24 rounded-md focus:outline-none focus:ring-1 focus:ring-red-500 ring-1 ring-gray-300 appearance-none pl-3 pr-6 py-1" name="country" id="country">
                            <option value="0" label="Country" selected="selected">Country</option>
                            <optgroup id="country-optgroup-Africa" label="Africa">
                                <option value="DZ" label="Algeria">Algeria</option>
                                <option value="AO" label="Angola">Angola</option>
                                <option value="BJ" label="Benin">Benin</option>
                                <option value="BW" label="Botswana">Botswana</option>
                                <option value="BF" label="Burkina Faso">Burkina Faso</option>
                                <option value="BI" label="Burundi">Burundi</option>
                                <option value="CM" label="Cameroon">Cameroon</option>
                                <option value="CV" label="Cape Verde">Cape Verde</option>
                                <option value="CF" label="Central African Republic">Central African Republic</option>
                                <option value="TD" label="Chad">Chad</option>
                                <option value="KM" label="Comoros">Comoros</option>
                                <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                                <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                                <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                                <option value="DJ" label="Djibouti">Djibouti</option>
                                <option value="EG" label="Egypt">Egypt</option>
                                <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="ER" label="Eritrea">Eritrea</option>
                                <option value="ET" label="Ethiopia">Ethiopia</option>
                                <option value="GA" label="Gabon">Gabon</option>
                                <option value="GM" label="Gambia">Gambia</option>
                                <option value="GH" label="Ghana">Ghana</option>
                                <option value="GN" label="Guinea">Guinea</option>
                                <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="KE" label="Kenya">Kenya</option>
                                <option value="LS" label="Lesotho">Lesotho</option>
                                <option value="LR" label="Liberia">Liberia</option>
                                <option value="LY" label="Libya">Libya</option>
                                <option value="MG" label="Madagascar">Madagascar</option>
                                <option value="MW" label="Malawi">Malawi</option>
                                <option value="ML" label="Mali">Mali</option>
                                <option value="MR" label="Mauritania">Mauritania</option>
                                <option value="MU" label="Mauritius">Mauritius</option>
                                <option value="YT" label="Mayotte">Mayotte</option>
                                <option value="MA" label="Morocco">Morocco</option>
                                <option value="MZ" label="Mozambique">Mozambique</option>
                                <option value="NA" label="Namibia">Namibia</option>
                                <option value="NE" label="Niger">Niger</option>
                                <option value="NG" label="Nigeria">Nigeria</option>
                                <option value="RW" label="Rwanda">Rwanda</option>
                                <option value="RE" label="Réunion">Réunion</option>
                                <option value="SH" label="Saint Helena">Saint Helena</option>
                                <option value="SN" label="Senegal">Senegal</option>
                                <option value="SC" label="Seychelles">Seychelles</option>
                                <option value="SL" label="Sierra Leone">Sierra Leone</option>
                                <option value="SO" label="Somalia">Somalia</option>
                                <option value="ZA" label="South Africa">South Africa</option>
                                <option value="SD" label="Sudan">Sudan</option>
                                <option value="SZ" label="Swaziland">Swaziland</option>
                                <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                <option value="TZ" label="Tanzania">Tanzania</option>
                                <option value="TG" label="Togo">Togo</option>
                                <option value="TN" label="Tunisia">Tunisia</option>
                                <option value="UG" label="Uganda">Uganda</option>
                                <option value="EH" label="Western Sahara">Western Sahara</option>
                                <option value="ZM" label="Zambia">Zambia</option>
                                <option value="ZW" label="Zimbabwe">Zimbabwe</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Americas" label="Americas">
                                <option value="AI" label="Anguilla">Anguilla</option>
                                <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="AR" label="Argentina">Argentina</option>
                                <option value="AW" label="Aruba">Aruba</option>
                                <option value="BS" label="Bahamas">Bahamas</option>
                                <option value="BB" label="Barbados">Barbados</option>
                                <option value="BZ" label="Belize">Belize</option>
                                <option value="BM" label="Bermuda">Bermuda</option>
                                <option value="BO" label="Bolivia">Bolivia</option>
                                <option value="BR" label="Brazil">Brazil</option>
                                <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
                                <option value="CA" label="Canada">Canada</option>
                                <option value="KY" label="Cayman Islands">Cayman Islands</option>
                                <option value="CL" label="Chile">Chile</option>
                                <option value="CO" label="Colombia">Colombia</option>
                                <option value="CR" label="Costa Rica">Costa Rica</option>
                                <option value="CU" label="Cuba">Cuba</option>
                                <option value="DM" label="Dominica">Dominica</option>
                                <option value="DO" label="Dominican Republic">Dominican Republic</option>
                                <option value="EC" label="Ecuador">Ecuador</option>
                                <option value="SV" label="El Salvador">El Salvador</option>
                                <option value="FK" label="Falkland Islands">Falkland Islands</option>
                                <option value="GF" label="French Guiana">French Guiana</option>
                                <option value="GL" label="Greenland">Greenland</option>
                                <option value="GD" label="Grenada">Grenada</option>
                                <option value="GP" label="Guadeloupe">Guadeloupe</option>
                                <option value="GT" label="Guatemala">Guatemala</option>
                                <option value="GY" label="Guyana">Guyana</option>
                                <option value="HT" label="Haiti">Haiti</option>
                                <option value="HN" label="Honduras">Honduras</option>
                                <option value="JM" label="Jamaica">Jamaica</option>
                                <option value="MQ" label="Martinique">Martinique</option>
                                <option value="MX" label="Mexico">Mexico</option>
                                <option value="MS" label="Montserrat">Montserrat</option>
                                <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="NI" label="Nicaragua">Nicaragua</option>
                                <option value="PA" label="Panama">Panama</option>
                                <option value="PY" label="Paraguay">Paraguay</option>
                                <option value="PE" label="Peru">Peru</option>
                                <option value="PR" label="Puerto Rico">Puerto Rico</option>
                                <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="LC" label="Saint Lucia">Saint Lucia</option>
                                <option value="MF" label="Saint Martin">Saint Martin</option>
                                <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="SR" label="Suriname">Suriname</option>
                                <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                <option value="US" label="United States">United States</option>
                                <option value="UY" label="Uruguay">Uruguay</option>
                                <option value="VE" label="Venezuela">Venezuela</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Asia" label="Asia">
                                <option value="AF" label="Afghanistan">Afghanistan</option>
                                <option value="AM" label="Armenia">Armenia</option>
                                <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                                <option value="BH" label="Bahrain">Bahrain</option>
                                <option value="BD" label="Bangladesh">Bangladesh</option>
                                <option value="BT" label="Bhutan">Bhutan</option>
                                <option value="BN" label="Brunei">Brunei</option>
                                <option value="KH" label="Cambodia">Cambodia</option>
                                <option value="CN" label="China">China</option>
                                <option value="GE" label="Georgia">Georgia</option>
                                <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                                <option value="IN" label="India">India</option>
                                <option value="ID" label="Indonesia">Indonesia</option>
                                <option value="IR" label="Iran">Iran</option>
                                <option value="IQ" label="Iraq">Iraq</option>
                                <option value="IL" label="Israel">Israel</option>
                                <option value="JP" label="Japan">Japan</option>
                                <option value="JO" label="Jordan">Jordan</option>
                                <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                                <option value="KW" label="Kuwait">Kuwait</option>
                                <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="LA" label="Laos">Laos</option>
                                <option value="LB" label="Lebanon">Lebanon</option>
                                <option value="MO" label="Macau SAR China">Macau SAR China</option>
                                <option value="MY" label="Malaysia">Malaysia</option>
                                <option value="MV" label="Maldives">Maldives</option>
                                <option value="MN" label="Mongolia">Mongolia</option>
                                <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                                <option value="NP" label="Nepal">Nepal</option>
                                <option value="NT" label="Neutral Zone">Neutral Zone</option>
                                <option value="KP" label="North Korea">North Korea</option>
                                <option value="OM" label="Oman">Oman</option>
                                <option value="PK" label="Pakistan">Pakistan</option>
                                <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                                <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                                <option value="PH" label="Philippines">Philippines</option>
                                <option value="QA" label="Qatar">Qatar</option>
                                <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                                <option value="SG" label="Singapore">Singapore</option>
                                <option value="KR" label="South Korea">South Korea</option>
                                <option value="LK" label="Sri Lanka">Sri Lanka</option>
                                <option value="SY" label="Syria">Syria</option>
                                <option value="TW" label="Taiwan">Taiwan</option>
                                <option value="TJ" label="Tajikistan">Tajikistan</option>
                                <option value="TH" label="Thailand">Thailand</option>
                                <option value="TL" label="Timor-Leste">Timor-Leste</option>
                                <option value="TR" label="Turkey">Turkey</option>
                                <option value="TM" label="Turkmenistan">Turkmenistan</option>
                                <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                                <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                                <option value="VN" label="Vietnam">Vietnam</option>
                                <option value="YE" label="Yemen">Yemen</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Europe" label="Europe">
                                <option value="AL" label="Albania">Albania</option>
                                <option value="AD" label="Andorra">Andorra</option>
                                <option value="AT" label="Austria">Austria</option>
                                <option value="BY" label="Belarus">Belarus</option>
                                <option value="BE" label="Belgium">Belgium</option>
                                <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="BG" label="Bulgaria">Bulgaria</option>
                                <option value="HR" label="Croatia">Croatia</option>
                                <option value="CY" label="Cyprus">Cyprus</option>
                                <option value="CZ" label="Czech Republic">Czech Republic</option>
                                <option value="DK" label="Denmark">Denmark</option>
                                <option value="DD" label="East Germany">East Germany</option>
                                <option value="EE" label="Estonia">Estonia</option>
                                <option value="FO" label="Faroe Islands">Faroe Islands</option>
                                <option value="FI" label="Finland">Finland</option>
                                <option value="FR" label="France">France</option>
                                <option value="DE" label="Germany">Germany</option>
                                <option value="GI" label="Gibraltar">Gibraltar</option>
                                <option value="GR" label="Greece">Greece</option>
                                <option value="GG" label="Guernsey">Guernsey</option>
                                <option value="HU" label="Hungary">Hungary</option>
                                <option value="IS" label="Iceland">Iceland</option>
                                <option value="IE" label="Ireland">Ireland</option>
                                <option value="IM" label="Isle of Man">Isle of Man</option>
                                <option value="IT" label="Italy">Italy</option>
                                <option value="JE" label="Jersey">Jersey</option>
                                <option value="LV" label="Latvia">Latvia</option>
                                <option value="LI" label="Liechtenstein">Liechtenstein</option>
                                <option value="LT" label="Lithuania">Lithuania</option>
                                <option value="LU" label="Luxembourg">Luxembourg</option>
                                <option value="MK" label="Macedonia">Macedonia</option>
                                <option value="MT" label="Malta">Malta</option>
                                <option value="FX" label="Metropolitan France">Metropolitan France</option>
                                <option value="MD" label="Moldova">Moldova</option>
                                <option value="MC" label="Monaco">Monaco</option>
                                <option value="ME" label="Montenegro">Montenegro</option>
                                <option value="NL" label="Netherlands">Netherlands</option>
                                <option value="NO" label="Norway">Norway</option>
                                <option value="PL" label="Poland">Poland</option>
                                <option value="PT" label="Portugal">Portugal</option>
                                <option value="RO" label="Romania">Romania</option>
                                <option value="RU" label="Russia">Russia</option>
                                <option value="SM" label="San Marino">San Marino</option>
                                <option value="RS" label="Serbia">Serbia</option>
                                <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                                <option value="SK" label="Slovakia">Slovakia</option>
                                <option value="SI" label="Slovenia">Slovenia</option>
                                <option value="ES" label="Spain">Spain</option>
                                <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="SE" label="Sweden">Sweden</option>
                                <option value="CH" label="Switzerland">Switzerland</option>
                                <option value="UA" label="Ukraine">Ukraine</option>
                                <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                                <option value="GB" label="United Kingdom">United Kingdom</option>
                                <option value="VA" label="Vatican City">Vatican City</option>
                                <option value="AX" label="Åland Islands">Åland Islands</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Oceania" label="Oceania">
                                <option value="AS" label="American Samoa">American Samoa</option>
                                <option value="AQ" label="Antarctica">Antarctica</option>
                                <option value="AU" label="Australia">Australia</option>
                                <option value="BV" label="Bouvet Island">Bouvet Island</option>
                                <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="CX" label="Christmas Island">Christmas Island</option>
                                <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                                <option value="CK" label="Cook Islands">Cook Islands</option>
                                <option value="FJ" label="Fiji">Fiji</option>
                                <option value="PF" label="French Polynesia">French Polynesia</option>
                                <option value="TF" label="French Southern Territories">French Southern Territories</option>
                                <option value="GU" label="Guam">Guam</option>
                                <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                <option value="KI" label="Kiribati">Kiribati</option>
                                <option value="MH" label="Marshall Islands">Marshall Islands</option>
                                <option value="FM" label="Micronesia">Micronesia</option>
                                <option value="NR" label="Nauru">Nauru</option>
                                <option value="NC" label="New Caledonia">New Caledonia</option>
                                <option value="NZ" label="New Zealand">New Zealand</option>
                                <option value="NU" label="Niue">Niue</option>
                                <option value="NF" label="Norfolk Island">Norfolk Island</option>
                                <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="PW" label="Palau">Palau</option>
                                <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                                <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                                <option value="WS" label="Samoa">Samoa</option>
                                <option value="SB" label="Solomon Islands">Solomon Islands</option>
                                <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="TK" label="Tokelau">Tokelau</option>
                                <option value="TO" label="Tonga">Tonga</option>
                                <option value="TV" label="Tuvalu">Tuvalu</option>
                                <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                                <option value="VU" label="Vanuatu">Vanuatu</option>
                                <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                            </optgroup>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <div class="rounded-md">
                        <input class="w-full ring-1 ring-gray-300 border-gray-400 px-3 py-1 appearance-none text-slate-500 focus:ring-red-500 focus:outline-none focus:ring-1 rounded-md" type="text" placeholder="Subject">
                    </div>
                    <div class="rounded-md">
                        <textarea name="message" placeholder="Message" id="message" class="w-full appearance-none text-slate-500 focus:ring-red-500 focus:outline-none focus:ring-1 rounded-md px-3 py-1"></textarea>
                    </div>
                    <div class="text-slate-300">
                        <label for="call-request">Request a callback ? </label>
                        <input value="yes" type="checkbox">
                    </div>
                    <!-- to be resolved -->
                    <div>
                        <div class="g-recaptcha" data-sitekey="__Site_key__"></div>
                    </div>
                    <!-- to be resolved -->
                    <h4 id="response"></h4>
                    <div class="flex justify-end md:justify-start">
                        <button class="text-gray-500 hover:bg-red-500 bg-gray-50 hover:text-white hover:opacity-85  border px-10 rounded-full py-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- item 2 -->
        <div class="flex w-full h-full flex-col justify-start flex-wrap items-start space-x-1 px-6 md:pl-4 md:pr-0">
            <h2 class="text-sky-500">Get in touch</h2>
            <span class="text-slate-600 py-2">
            You can reach us with any of the contact medium that best suits your query.
            </span>
        
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-1 justify-between my-3 w-full">
                <div class="flex flex-row lg:flex-col py-6 lg:py-10 px-10  items-center bg-gray-100 space-x-3 rounded-2xl">
                    <!-- icon from:
                    https://www.reshot.com/free-svg-icons/item/contact-us-BC3MRTPD5Y/
                 -->
                    <svg width="50" height="50" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256" xml:space="preserve"><style>.st0{fill:#3a312a}.st10{fill:#d7e057}.st12{fill:#f16c7a}.st21{fill:#ce4e61}</style><path class="st10" d="M62.905 44.883c-.974 11.563-13.024 13.389-13.024 13.389 10.346.487 12.925 14.059 12.925 14.059.221-9.677 13.321-14.202 13.321-14.202-9.813-.587-13.222-13.246-13.222-13.246z"/><path class="st0" d="M76.217 56.633c-8.604-.515-11.832-12.025-11.863-12.142-.19-.702-.849-1.154-1.584-1.102a1.5 1.5 0 0 0-1.359 1.367c-.859 10.216-11.313 11.964-11.754 12.032a1.5 1.5 0 0 0 .155 2.982c9.027.426 11.498 12.719 11.521 12.843a1.502 1.502 0 0 0 1.599 1.213 1.5 1.5 0 0 0 1.375-1.46c.194-8.509 12.191-12.777 12.313-12.819a1.5 1.5 0 0 0-.403-2.914zM62.65 66.979c-1.357-3.131-3.708-6.908-7.586-8.877 2.931-1.404 6.408-3.913 8.201-8.272 1.551 3.07 4.2 6.88 8.334 8.723-3.006 1.638-6.922 4.404-8.949 8.426z"/><path class="st10" d="M41.206 61.864c-.688 8.179-9.212 9.471-9.212 9.471 7.318.344 9.142 9.944 9.142 9.944.156-6.845 9.422-10.045 9.422-10.045-6.941-.416-9.352-9.37-9.352-9.37z"/><path class="st0" d="M50.648 69.736c-5.767-.346-7.973-8.187-7.995-8.266a1.515 1.515 0 0 0-1.581-1.102 1.5 1.5 0 0 0-1.361 1.368c-.578 6.871-7.646 8.066-7.941 8.113a1.5 1.5 0 0 0 .155 2.982c6.035.284 7.724 8.645 7.739 8.727a1.5 1.5 0 0 0 2.974-.246c.13-5.709 8.331-8.633 8.411-8.661a1.5 1.5 0 0 0-.401-2.915zm-9.585 6.794c-.924-1.885-2.34-3.947-4.447-5.279 1.856-1.041 3.697-2.63 4.87-4.917 1.058 1.874 2.654 3.955 4.942 5.225-1.849 1.1-3.989 2.739-5.365 4.971z"/><path class="st10" d="M41.206 35.206c-.688 8.179-9.212 9.47-9.212 9.47 7.318.344 9.142 9.944 9.142 9.944.156-6.845 9.422-10.045 9.422-10.045-6.941-.415-9.352-9.369-9.352-9.369z"/><path class="st0" d="M50.648 43.078c-5.767-.345-7.973-8.186-7.995-8.265a1.516 1.516 0 0 0-1.581-1.102 1.5 1.5 0 0 0-1.361 1.368c-.578 6.871-7.646 8.066-7.941 8.113a1.5 1.5 0 0 0 .155 2.982c6.035.284 7.724 8.645 7.739 8.727a1.5 1.5 0 0 0 2.974-.246c.13-5.709 8.331-8.634 8.412-8.662a1.501 1.501 0 0 0-.402-2.915zm-9.585 6.795c-.924-1.885-2.34-3.947-4.447-5.279 1.856-1.041 3.697-2.63 4.87-4.917 1.058 1.874 2.655 3.955 4.942 5.224-1.85 1.1-3.989 2.74-5.365 4.972zM33.522 152.066a1.5 1.5 0 0 0-2.121 0l-14.225 14.225a1.5 1.5 0 1 0 2.122 2.121l14.225-14.225a1.5 1.5 0 0 0-.001-2.121zM50.373 170.421a1.5 1.5 0 0 0-2.121 0l-28.505 28.505a1.5 1.5 0 1 0 2.121 2.121l28.505-28.505a1.5 1.5 0 0 0 0-2.121zM67.977 188.023a1.5 1.5 0 0 0-2.121 0l-41.163 41.163a1.5 1.5 0 1 0 2.121 2.121l41.163-41.163a1.5 1.5 0 0 0 0-2.121zM85.579 205.627a1.5 1.5 0 0 0-2.121 0l-28.505 28.504a1.5 1.5 0 1 0 2.121 2.121l28.505-28.504a1.5 1.5 0 0 0 0-2.121zM103.934 222.478a1.5 1.5 0 0 0-2.121 0l-14.225 14.225a1.5 1.5 0 1 0 2.121 2.121l14.225-14.225a1.501 1.501 0 0 0 0-2.121z"/><path class="st12" d="M31.314 146.932c-.135 3.9 1.29 7.84 4.256 10.807l16.908 16.908 10.75 10.75 35.032 35.032a14.532 14.532 0 0 0 10.807 4.256l7.872-85.625-85.625 7.872z"/><path class="st0" d="M118 138a1.532 1.532 0 0 0-1.198-.434l-85.625 7.872a1.5 1.5 0 0 0-1.361 1.442 16.128 16.128 0 0 0 4.694 11.919l16.908 16.908a1.5 1.5 0 1 0 2.121-2.121l-16.908-16.908a13.12 13.12 0 0 1-3.796-8.38l82.445-7.579-7.579 82.445a13.118 13.118 0 0 1-8.38-3.797l-35.032-35.031a1.5 1.5 0 1 0-2.121 2.121L97.2 221.489a16.126 16.126 0 0 0 11.919 4.695 1.5 1.5 0 0 0 1.442-1.361l7.872-85.625A1.5 1.5 0 0 0 118 138z"/><path class="st12" d="m233.498 85.192-62.69-62.69a14.532 14.532 0 0 0-10.807-4.256l-7.872 85.625 85.625-7.872c.135-3.9-1.289-7.84-4.256-10.807z"/><path class="st0" d="m234.559 84.132-62.69-62.69a16.139 16.139 0 0 0-11.919-4.695 1.499 1.499 0 0 0-1.442 1.361l-7.872 85.626a1.5 1.5 0 0 0 1.633 1.631l85.626-7.872a1.5 1.5 0 0 0 1.361-1.442 16.136 16.136 0 0 0-4.697-11.919zm-80.771 18.08 7.579-82.446a13.123 13.123 0 0 1 8.38 3.797l62.69 62.69a13.116 13.116 0 0 1 3.797 8.38l-82.446 7.579z"/><path class="st12" d="m152.126 103.874-18.715 1.723c-7.451.685-14.061 7.295-14.746 14.746l-1.723 18.715-7.874 85.629a14.504 14.504 0 0 0 9.845-4.266l17.849-17.849 11.632-11.633 85.095-85.095a14.504 14.504 0 0 0 4.266-9.845l-85.629 7.875z"/><path class="st0" d="M238.782 94.907a1.524 1.524 0 0 0-1.165-.401l-104.344 9.597c-8.131.749-15.354 7.973-16.102 16.103l-9.598 104.343a1.502 1.502 0 0 0 1.494 1.638l.044-.001a15.975 15.975 0 0 0 10.861-4.704L234.55 106.904a15.985 15.985 0 0 0 4.704-10.859 1.499 1.499 0 0 0-.472-1.138zm-6.353 9.876L117.852 219.359a13.007 13.007 0 0 1-7.125 3.664l9.433-102.543c.621-6.762 6.627-12.768 13.389-13.39l102.544-9.432a13.017 13.017 0 0 1-3.664 7.125z"/><path class="st12" d="m150.156 22.511-41.598 41.598-10.6 10.599-62.378 62.379a14.504 14.504 0 0 0-4.266 9.845l85.629-7.874 18.715-1.723c7.451-.685 14.061-7.295 14.746-14.746l1.723-18.715L160 18.245a14.504 14.504 0 0 0-9.844 4.266z"/><path class="st0" d="M161.093 17.218c-.295-.313-.7-.517-1.138-.472a15.977 15.977 0 0 0-10.859 4.704l-41.599 41.599a1.5 1.5 0 1 0 2.121 2.121l41.599-41.599a13.01 13.01 0 0 1 7.124-3.664l-9.432 102.544c-.622 6.762-6.628 12.768-13.39 13.389l-102.543 9.433a13.012 13.012 0 0 1 3.663-7.125l62.379-62.379a1.5 1.5 0 1 0-2.121-2.121l-62.379 62.379a15.984 15.984 0 0 0-4.703 10.861 1.498 1.498 0 0 0 1.637 1.538l104.343-9.598c8.13-.747 15.354-7.971 16.103-16.102l9.597-104.344a1.505 1.505 0 0 0-.402-1.164z"/><path class="st21" d="m99.138 219.192.18.18c2.24 2.24 5.24 3.58 8.38 3.79l1.27-13.79-9.83 9.82zM236.238 94.632c-.21-3.14-1.56-6.14-3.8-8.38l-62.69-62.69a13.126 13.126 0 0 0-8.38-3.8l-1.2 13.1 52.33 52.33c2.97 2.97 4.39 6.91 4.26 10.81 0 .14-.01.28-.02.42l19.5-1.79zM216.218 99.492c-.65 2.32-1.9 4.52-3.73 6.35l-85.09 85.1-11.64 11.63-3.47 3.47-1.56 16.98c2.68-.43 5.16-1.7 7.12-3.66l29.49-29.48 85.09-85.1c1.96-1.96 3.23-4.44 3.66-7.12l-19.87 1.83zM151.218 23.572l-.17.17 6.35 6.35.94-10.18c-2.68.43-5.16 1.7-7.12 3.66z"/></svg>
                    <div class="flex flex-col lg:items-center space-y-2">
                        <h3 class="text-red-500">Reach Us</h3>
                        <span class="font-light hover:text-blue-400"><a href="mailto:contact@geoconnectonline.com">contact@geoconnectonline.com</a></span>
                        <span class="font-thin">+44 (757) 697 8698</span>
                    </div>
                </div>
                <div class="flex flex-row lg:flex-col py-6 lg:py-10 px-10  items-center bg-gray-100 space-x-3 rounded-2xl">
                    <!-- svg icon from:
                    https://www.reshot.com/free-svg-icons/item/partnership-PJAFKGN3E8/
                    -->
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M358 338.9a125.19 125.19 0 0 0 12.84-31.21L379 276.6l11-11-80.53-80.4-10 10-29.29 6.33c-10.82 2.34-22.31 4.53-32.84 8.24l-19.66-9.49L207.45 190l-70.93 70.93 10.61 10.62 7.51 30.45A119.35 119.35 0 0 0 170 337.81l-10.19 10.64c-6.79 6.8-7 17.6-.48 24.13 8 9.92 22.31 4.76 22.31 4.76-10.17 7.33-11.14 21.26-4.61 27.79 12.94 11.2 30.46-3.91 30.46-3.91-6.8 6.8-7 17.6-.48 24.13s17.33 6.31 24.13-.48l5.59-4.8c-6.8 6.8-7 17.61-.49 24.13s17.33 6.32 24.13-.48l6.08-6.36a16.7 16.7 0 0 0 20.25-26.26l16.2 16.2a16.72 16.72 0 1 0 23.65-23.64l11.64 11.65a16.72 16.72 0 1 0 23.64-23.64L347.2 377a16.46 16.46 0 0 0 23.27-.37 16.45 16.45 0 0 0 .37-23.27z" style="fill:#fff"/><path d="M199.5 283.82s.87 5.86 10.55 9.33a19.83 19.83 0 0 0 19-3.37l10.84-9.13s41.21 9.58 65.21-.52l-22.49-18.94s-31.11 5.19-53.13-5.19zM359.9 272.83s0 26.17-14.1 50.49l13.52 13.22s12.51-12.37 19.23-61.41l11.36-11.39-11.23-10.64z" style="fill:#c6d0dc"/><path style="fill:#59aee4" d="m420.95 75.64 80.44 80.45-77.27 77.27-32.3 32.29-80.44-80.44L420.95 75.64zM22.71 156.97l80.44-80.44 77.28 77.27 32.29 32.29-80.45 80.45L22.71 156.97z"/><path style="fill:#548fbf" d="m22.71 156.09 13.27-13.28 77.27 77.27 32.3 32.3-13.28 13.27L22.71 156.09zM391.82 265.01l-13.27-13.28 77.27-77.27 32.3-32.29 13.27 13.27-109.57 109.57z"/><path d="M509.88 155.44 421 66.51 303 184.56l-4.57 4.44-27.57 6-4.64 1c-9.15 1.94-18.87 4-28.12 7.19l-16.34-7.89-5.31-5.3 4.75-4.75-118-118-88.98 88.84 118.05 118 4.76-4.76 5.19 5.19 7.11 28.85a125.31 125.31 0 0 0 13.6 33.45l-7.33 7.34a23.66 23.66 0 0 0-7 16.29 22.18 22.18 0 0 0 20.78 22.75 23.16 23.16 0 0 0-1.54 7.84 22.22 22.22 0 0 0 22.36 22.84 23.27 23.27 0 0 0 6.08-.83 22.21 22.21 0 0 0 22.37 22.31 23.58 23.58 0 0 0 6.95-1.06 22.17 22.17 0 0 0 22.29 20.7 23.68 23.68 0 0 0 16.75-7l3.51-3.51a23 23 0 0 0 7.42 1.26 22.57 22.57 0 0 0 21.68-16.12l1.95 2a22.88 22.88 0 0 0 16.21 6.71 22.57 22.57 0 0 0 21.78-16.43 22.71 22.71 0 0 0 29.47-2.23 22.77 22.77 0 0 0 0-32.18l-.83-.82A23.18 23.18 0 0 0 382 365a21.87 21.87 0 0 0-6.4-15.91l-9.6-9.5a131.65 131.65 0 0 0 12.52-31l7.71-29.51 5.56-5.57zm-165 4.16 17.81 17.82 8.49-8.49-17.82-17.81L421 83.49l71.95 72-67.63 67.64-40.93-40.93-8.48 8.48 40.88 40.88-25 25-72-72zm-237.57 72.6 17.82-17.81-8.49-8.49-17.81 17.82-67.64-67.63 72-72 67.64 67.63-40.88 40.88 8.48 8.49 40.88-40.88 25 25-72 72zm53.29 128.54a11.7 11.7 0 0 1 3.49-8.05l5.56-5.56a123 123 0 0 0 12.52 14.67l1.56 1.56-4.49 4.49c-4.44 4.45-11.46 4.67-15.64.49a10.33 10.33 0 0 1-3-7.6zm22.23 38.2a10.33 10.33 0 0 1-3-7.6 11.7 11.7 0 0 1 3.49-8l10.17-10.17 15.62 15.63-10.43 9.51-.2.19c-4.48 4.4-11.48 4.62-15.65.44zm28.45 21.48a10.33 10.33 0 0 1-3-7.6 11.68 11.68 0 0 1 3.49-8l6.69-6.69 15.15 15.16-6.69 6.69c-4.45 4.41-11.46 4.62-15.64.44zM240.51 440c-4.17-4.18-4-11.2.49-15.64l1.84-1.84L258 437.63l-1.84 1.84c-4.45 4.45-11.47 4.67-15.65.53zM370 364.82a11.09 11.09 0 0 1-10.82 10.81 9.81 9.81 0 0 1-7.22-2.87l-62.56-62.57-8.49 8.49 6.15 6.14L312.18 350l31.29 31.28 14.66 14.66a10.71 10.71 0 0 1 3.17 7.62 10.59 10.59 0 0 1-3.12 7.58 10.77 10.77 0 0 1-15.21 0l-11.64-11.65-58-58-4.75-4.75-8.49 8.48 62.8 62.8a10.87 10.87 0 0 1 3.2 7.67 10.52 10.52 0 0 1-3.11 7.58 10.8 10.8 0 0 1-15.26-.1l-16.19-16.2-43.79-43.8-4.75-4.74-8.49 8.48 14.68 14.68L283 415.35a10.72 10.72 0 1 1-15.16 15.15l-77.19-77.18A112.76 112.76 0 0 1 161 300.55l-7.91-32.1-7.55-7.56L208 198.45l6.75 6.75 8.92 4.31a58.56 58.56 0 0 0-13 9.69l-33.1 33.1a21.26 21.26 0 0 0-6.21 15.78 23.38 23.38 0 0 0 23.17 22.55 21.3 21.3 0 0 0 15.16-6.2l20.64-20.64a104.67 104.67 0 0 0 49.13 6.45l87.72 87.36a9.89 9.89 0 0 1 2.82 7.22zm5.48-91.95-8.53 32.67a119.42 119.42 0 0 1-9.77 25.22l-63.45-63.19a101.12 101.12 0 0 0 14.89-5.16l-4.8-11c-37.93 16.54-71.88.05-72.2-.11l-3.88-2-26.59 26.59c-3.83 3.83-10.34 3.54-14.52-.63a11.15 11.15 0 0 1-3.33-7.56 9.33 9.33 0 0 1 2.69-7l33.1-33.11c12-12 31.12-16 49.63-20l4.69-1 31-6.7 7-7 72 72z"/><path d="m189.39 131-4.9-11a188.16 188.16 0 0 1 22.24-8.31l3.48 11.48a176.7 176.7 0 0 0-20.82 7.83zm142.91-1a176.24 176.24 0 0 0-20.94-7.49l3.32-11.53a188.2 188.2 0 0 1 22.36 8zM229 118.57l-2.21-11.79a191.49 191.49 0 0 1 23.55-2.91l.73 12a179 179 0 0 0-22.07 2.7zm63.53-.44a177.73 177.73 0 0 0-22.11-2.41l.56-12a191.82 191.82 0 0 1 23.59 2.57zM262.5 483.89c-5.27-.14-10.61-.5-15.88-1.07-2.58-.28-5.18-.62-7.75-1l1.78-11.82c2.41.36 4.85.68 7.27.94 4.94.54 10 .88 14.89 1zm20.63-.59-1-12a177.4 177.4 0 0 0 22-3.23l2.48 11.74a187.41 187.41 0 0 1-23.48 3.49zm-64.46-5.64a190.49 190.49 0 0 1-22.53-7.46l4.48-11.13a176.13 176.13 0 0 0 21.1 7zm107.87-3.18-3.75-11.4a178.89 178.89 0 0 0 20.63-8.26l5.14 10.84a190 190 0 0 1-22.02 8.82zm-149.11-13a188.16 188.16 0 0 1-20.18-12.51l6.95-9.78a176.9 176.9 0 0 0 18.9 11.72zm189.26-5.64-6.29-10.22a180.73 180.73 0 0 0 18.18-12.8l7.5 9.36a190.62 190.62 0 0 1-19.39 13.63zM141.1 436.09a189.81 189.81 0 0 1-16.73-16.83l9-7.91a179.4 179.4 0 0 0 15.67 15.77zm260.36-7.7-8.47-8.5a177.7 177.7 0 0 0 14.74-16.65l9.46 7.38a189.36 189.36 0 0 1-15.73 17.77zM111.62 403a192 192 0 0 1-12.4-20.22l10.6-5.63a178.36 178.36 0 0 0 11.62 18.95zM429 393.67l-10.21-6.3a177.52 177.52 0 0 0 10.48-19.62l10.92 5A189.56 189.56 0 0 1 429 393.67zM90.55 364.09a190 190 0 0 1-7.37-22.53l11.61-3a177.67 177.67 0 0 0 6.91 21.11zm357.14-10.6-11.4-3.75a180.27 180.27 0 0 0 5.61-21.51l11.78 2.3a192.14 192.14 0 0 1-5.99 22.96zM79.1 321.32a190.59 190.59 0 0 1-1.93-23.64l12-.23A178.13 178.13 0 0 0 91 319.6zm377.44-11.22-12-1c.44-5.11.66-10.29.66-15.4 0-2.29-.05-4.58-.13-6.83l12-.46c.09 2.4.14 4.85.14 7.28.04 5.43-.21 10.96-.67 16.41zm-366.69-32-11.95-1.05c.11-1.24.23-2.48.37-3.73a191.9 191.9 0 0 1 3.19-19.72l11.73 2.53a178.89 178.89 0 0 0-3 18.49c-.12 1.17-.19 2.38-.34 3.5zm353.47-10.53a175 175 0 0 0-4.65-21.73l11.56-3.25a189.54 189.54 0 0 1 5 23.22z" style="fill:#f7c648"/></svg>
                    <div class="flex flex-col lg:items-center  space-y-2">
                        <h3 class="text-red-500">Partnering</h3>
                        <span class="font-light hover:text-blue-400"><a href="mailto:contact@geoconnectonline.com">partner@geoconnectonline.com</a></span>
                        <span class="font-thin">+44 (757) 697 8698</span>
                    </div>
                </div>
                <div class="flex flex-row lg:flex-col py-6 lg:py-10 px-10  items-center bg-gray-100 space-x-3 rounded-2xl">
                    <!-- svg icon from:
                    https://www.reshot.com/free-svg-icons/item/partnership-PJAFKGN3E8/
                    -->
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path style="fill:#f2f2f2" d="M192.087 503.248h237.605c7.509 0 13.596-6.087 13.596-13.596V22.348c0-7.509-6.087-13.596-13.596-13.596H82.309c-7.509 0-13.596 6.087-13.596 13.596v357.525l123.374 123.375z"/><path style="fill:#e6e6e6" d="M429.691 8.752H399.35c7.508 0 13.596 6.087 13.596 13.596v467.303c0 7.508-6.087 13.596-13.596 13.596h30.341c7.508 0 13.596-6.087 13.596-13.596V22.348c0-7.508-6.087-13.596-13.596-13.596zM192.087 391.823v111.426L68.713 379.875h111.426c6.599 0 11.948 5.349 11.948 11.948z"/><path style="fill:#ccc" d="M161.746 379.875v93.033l30.341 30.341V392.213c0-6.814-5.523-12.337-12.337-12.337h-18.004v-.001z"/><path style="fill:#fee570" d="M429.691 8.752H82.309c-7.509 0-13.596 6.087-13.596 13.596V41.6h374.574V22.348c0-7.508-6.087-13.596-13.596-13.596z"/><path style="fill:#fed301" d="M412.946 22.348V41.6h30.341V22.348a13.542 13.542 0 0 0-3.982-9.613 13.553 13.553 0 0 0-9.613-3.982h-30.341c7.508-.001 13.595 6.087 13.595 13.595z"/><path style="fill:#232323" d="M128.656 98.11c2.381-2.381 5.325-4.282 8.756-5.65 3.544-1.417 7.631-2.134 12.147-2.134 4.24 0 7.827.614 10.662 1.825a26.021 26.021 0 0 1 4.81 2.662 8.75 8.75 0 0 0 12.199-2.091c2.791-3.947 1.855-9.409-2.091-12.199a43.675 43.675 0 0 0-8.042-4.468c-5.024-2.145-10.924-3.234-17.539-3.234-6.751 0-13.022 1.139-18.64 3.382-5.643 2.253-10.569 5.458-14.642 9.528-4.069 4.072-7.265 8.977-9.5 14.582-2.223 5.582-3.35 11.793-3.35 18.464 0 6.561 1.007 12.71 2.993 18.278 2.007 5.631 4.946 10.554 8.734 14.634 3.797 4.089 8.432 7.321 13.775 9.606 5.331 2.283 11.39 3.439 18.008 3.439 7.373 0 13.821-1.224 19.166-3.635 3.384-1.528 6.471-3.497 9.173-5.858a8.753 8.753 0 0 0 .837-12.349c-3.178-3.64-8.707-4.013-12.349-.837-1.427 1.245-3.017 2.256-4.862 3.088-3.067 1.385-7.093 2.087-11.966 2.087-4.237 0-7.978-.682-11.122-2.027-3.077-1.316-5.713-3.141-7.833-5.425-2.162-2.328-3.868-5.222-5.075-8.603-1.31-3.676-1.976-7.848-1.976-12.398 0-4.443.708-8.476 2.108-11.985 1.35-3.382 3.241-6.304 5.619-8.682zM223.556 163.803h6.281a8.75 8.75 0 0 0 8.115-5.474l29.299-72.544a8.752 8.752 0 0 0-4.838-11.393c-4.482-1.813-9.582.356-11.393 4.838l-24.324 60.225-24.326-60.227a8.75 8.75 0 0 0-11.393-4.838 8.752 8.752 0 0 0-4.838 11.393l29.299 72.546a8.759 8.759 0 0 0 8.118 5.474zM389.617 207.903H106.63a8.75 8.75 0 0 0-8.752 8.752 8.75 8.75 0 0 0 8.752 8.752h282.987a8.75 8.75 0 0 0 8.752-8.752 8.75 8.75 0 0 0-8.752-8.752zM389.617 145.91H271.17a8.75 8.75 0 0 0-8.752 8.752 8.75 8.75 0 0 0 8.752 8.752h118.446a8.75 8.75 0 0 0 8.752-8.752 8.75 8.75 0 0 0-8.751-8.752zM389.617 269.894H106.63c-4.835 0-8.752 3.917-8.752 8.752s3.917 8.752 8.752 8.752h282.987c4.835 0 8.752-3.917 8.752-8.752s-3.918-8.752-8.752-8.752zM389.617 331.885h-33.161a8.75 8.75 0 0 0-8.752 8.752 8.75 8.75 0 0 0 8.752 8.752h33.161a8.75 8.75 0 0 0 8.752-8.752 8.75 8.75 0 0 0-8.752-8.752zM328.391 340.637a8.75 8.75 0 0 0-8.752-8.752H106.63a8.75 8.75 0 0 0-8.752 8.752 8.75 8.75 0 0 0 8.752 8.752h213.009a8.75 8.75 0 0 0 8.752-8.752zM299.207 443.553l33.243-16.137 3.098 14.385a8.754 8.754 0 0 0 12.205 6.113l45.511-20.872a8.751 8.751 0 0 0 4.306-11.603 8.749 8.749 0 0 0-11.604-4.307l-35.602 16.327-3.151-14.627a8.752 8.752 0 0 0-12.379-6.031l-43.274 21.005a8.753 8.753 0 1 0 7.647 15.747z"/><path style="fill:#232323" d="M443.287 110.693a8.75 8.75 0 0 0 8.752-8.752V22.348C452.039 10.025 442.014 0 429.691 0L82.309.001c-12.324 0-22.348 10.025-22.348 22.347v357.525c0 .099.012.197.014.295a9.08 9.08 0 0 0 .152 1.4l.002.015a8.842 8.842 0 0 0 .398 1.361c.126.336.266.665.433.984.011.02.018.04.028.06a8.67 8.67 0 0 0 .778 1.195c.235.307.482.606.759.881l123.374 123.374c.207.207.422.401.646.585.114.093.236.175.354.261.113.084.224.173.341.251.135.09.278.167.417.25.107.063.211.132.321.19.139.074.282.134.425.201.117.055.231.114.35.163.137.056.278.1.415.149.13.047.258.098.39.138.133.04.27.068.404.102.141.035.281.077.425.105.139.028.28.042.421.063.141.021.282.048.425.062.237.023.476.031.714.035.047.001.093.007.14.007H429.69c12.324 0 22.348-10.025 22.348-22.347V138.797c0-4.835-3.917-8.752-8.752-8.752s-8.752 3.917-8.752 8.752v350.855a4.85 4.85 0 0 1-4.844 4.843H200.838v-50.54a8.75 8.75 0 0 0-8.752-8.752 8.75 8.75 0 0 0-8.752 8.752v38.162l-93.492-93.492h90.297a3.2 3.2 0 0 1 3.195 3.196v14.499a8.75 8.75 0 0 0 8.752 8.752 8.75 8.75 0 0 0 8.752-8.752v-14.499c0-11.414-9.285-20.701-20.699-20.701H77.465V22.348a4.85 4.85 0 0 1 4.844-4.843l347.382-.001a4.85 4.85 0 0 1 4.844 4.844v79.592a8.752 8.752 0 0 0 8.752 8.753z"/></svg>
                    <div class="flex flex-col lg:items-center space-y-2">
                        <h3 class="text-red-500">Human Resources</h3>
                        <span class="font-light hover:text-blue-400"><a href="mailto:contact@geoconnectonline.com">hr@geoconnectonline.com</a></span>
                        <span class="font-thin">+44 (757) 697 8698</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:hidden lg:block">
                <h2 class="text-sky-500 py-1 lg:py-2">Head Office</h2>
                <address class="text-sm text-slate-600 py-1">
                    653E Charlotte Street, AB10 1LD Scotland
                </address>
                <div class="w-full">
                    <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2072997660875!2d6.129770614771858!3d6.744551495124405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1046952cb3cf82fd%3A0x8f611f61359add71!2sGEOCONNECT%20ICT%20LIMITED!5e0!3m2!1sen!2suk!4v1677167813125!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="w-full md:hidden">
                <div class="flex flex-row my-5 px-5 hover:bg-slate-50 text-sky-500 hover:text-sky-500 py-1 justify-between items-center border">
                    <h3>Local Offices</h3>
                    <span>
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    
                        <!-- chevron up -->
                        <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                        <!-- chevron up end -->
                    </span>
                </div>
            </div>
        </div>    
    </div>
</section>
<!-- contact -->

<!-- local offices -->
<section>
    <div class="container md:mx-auto  hidden md:block">
        <!-- head office medium map -->
        <div class="w-full lg:hidden">
            <h2 class="text-sky-500 py-1 lg:py-2">Head Office</h2>
            <address class="text-sm text-slate-600 py-1">
                653E Charlotte Street, AB10 1LD Scotland
            </address>
            <div class="w-full">
                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2072997660875!2d6.129770614771858!3d6.744551495124405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1046952cb3cf82fd%3A0x8f611f61359add71!2sGEOCONNECT%20ICT%20LIMITED!5e0!3m2!1sen!2suk!4v1677167813125!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="flex flex-row my-5 px-5 hover:bg-slate-50 text-sky-500 hover:text-sky-500 py-1 justify-between items-center border">
            <h3>Local Offices</h3>
            <span>
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#b0b0b0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#b0b0b0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                <!-- chevron up -->
                <!-- <svg width="25px" height="25px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#b0b0b0" stroke-width="1" stroke-linecap="round" stroke-linejoin="miter"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><polyline points="17 14 12 9 7 14"></polyline></g></svg> -->
                <!-- chevron up end -->
            </span>
        </div>
    </div>
</section>
<!-- local offices end -->




@endsection