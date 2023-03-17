@extends('layouts.app')

@section('content')
<!-- page name display -->
<section class="bg-gray-500" id="course-category">
    <div class="container flex mx-auto py-2 px-5 text-gray-800 text-sm space-x-1">
        <a class="bg-white rounded-md hover:bg-sky-300 p-1 hover:rounded-md" href="index.html">
            <!-- https://www.svgrepo.com/svg/22031/home-icon-silhouette?edit=true //svg generator link -->
            <svg fill="#6b7280" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 495.40 495.40" xml:space="preserve" stroke="#ef4444"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
        </a>
        <span class="p-1">|</span>
        <a class="p-1 hover:text-gray-800 hover:underline" href="#">Enrol</a>   
    </div>
</section>
<!-- page name display end-->


<section id="login" class="flex items-center justify-center py-10">
    <div class="flex flex-col items-center p-6 space-y-2 bg-slate-200 rounded-2xl shadow-2xl">
        <h6 class="text-gray-600 uppercase text-sm font-medium my-3">Become part of us!</h6>

        <div class="px-5 w-full">
            <form class="flex flex-col space-y-2" method="POST" action="{{ route('register') }}">

                @csrf

                <div class="flex space-x-1 w-full justify-between">
                    <div class="flex flex-col space-y-2">
                        <label for="firstname" class="text-slate-800 uppercase text-sm font-medium">Firstname</label>
                        <input id="firstname" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('firstname') is-invalid @enderror" type="text" placeholder="Firstname" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="lastname" class="text-slate-800 uppercase text-sm font-medium">lastname</label>
                        <input id="lastname" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('lastname') is-invalid @enderror" name="lastname" type="text" placeholder="Lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-slate-800 uppercase text-sm font-medium">Email</label>
                    <input id="email" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="flex space-x-1 w-full justify-between">
                    <div class="flex flex-col space-y-2">
                        <label for="password" class="text-slate-800 uppercase text-sm font-medium">Password</label>
                        <input id="password" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('password') is-invalid @enderror" type="password" placeholder="Password" value="{{ old('password') }}" name="password" required autocomplete="new-password" autofocus>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label for="confirm-password" class="text-slate-800 uppercase text-sm font-medium">Confirm Password</label>
                        <input id="password-confirm" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" autofocus>
                    </div>
                </div>
                <div class="flex justify-between space-x-2">
                    <div class="flex flex-col space-y-2">
                        <label class="text-slate-800 uppercase text-sm font-medium" for="country">Country</label>
                        <div class="flex relative">
                            <select class="py-3 px-3 w-48 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500" name="country" id="country">
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
                    </div>
                    <div class="flex flex-col space-y-2">
                        <label class="text-slate-800 uppercase text-sm font-medium" for="mobile">Mobile No.</label>
                        <input id="mobile" class="py-3 px-3 text-sm rounded-md text-slate-500 shadow-sm appearance-none focus:outline-none focus:ring-1 focus:ring-red-500 @error('mobile') is-invalid @enderror" min="0" type="number" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col space-y-2">
                    <label class="text-slate-800 uppercase text-sm font-medium" for="enrolment_type">Enrolment Type</label>
                    <div class="flex relative">
                        <select name="enrolment_type" id="enrolment_type" class="py-3 px-3 w-full text-sm rounded-md text-slate-500 shadow-sm appearance-none text-center focus:outline-none focus:ring-1 focus:ring-red-500">
                            <option value="0">-- Select --</option>
                            <option value="training">Training</option>
                            <option value="Internship">Internship (SIWES)</option>
                            <option value="Home Lesson">Home Lesson</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <button class="py-3 mt-3 text-white font-medium text-sm shadow-sm hover:scale-95 hover:bg-red-400 hover:duration-200 uppercase px-3 bg-red-500 w-full">
                        Enrol
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full flex flex-col items-center text-sm space-y-3">
            <div class="text-xs text-slate-600 my-1">
                By enrolling, you agree to our 
                <a class="text-sky-500 hover:underline" href="#">Term Of Use</a> and 
                <a class="text-sky-500 hover:underline" href="#">Privacy Policy</a>
            </div>
            <div class="border-1 border-b w-full border-slate-300"></div>
            <div>
                Already have an account? <a class="text-sky-500 hover:underline" href="{{ url('login') }}">Login</a>
            </div>
        </div>
    </div>  
</section>
@endsection
