<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeris Crest | Update Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #52afee;
            --primary-dark: #2a6b9c;
            --secondary: #f58634;
            --text: #e8eaed;
            --muted: #7a8499;
            --panel: #181b20;
            --panel-2: #111316;
            --border: rgba(255,255,255,0.07);
            --input-bg: #1b1e24;
            --input-border: rgba(255,255,255,0.12);
        }
        *, *::before, *::after { box-sizing: border-box; }
        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            background: #f4f6f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content:center;
            color: #111111;
            position: relative;
            padding:24px 16px;
            overflow-x:hidden;
        }
        body::before {
            content: ''; position: fixed; top: -120px; right: -120px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(82,175,238,0.08) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none; z-index: 0;
        }
        body::after {
            content: ''; position: fixed; bottom: -100px; left: -100px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(245,134,52,0.08) 0%, transparent 70%);
            border-radius: 50%; pointer-events: none; z-index: 0;
        }
        .container { position: relative; z-index: 1; }
        
        .details-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(15,23,42,0.12), 0 4px 20px rgba(15,23,42,0.08);
            overflow: hidden;
            border: 1px solid rgba(15,23,42,0.08);
            animation: authSlide 0.55s cubic-bezier(.22,.68,0,1.2) both;
        }
        @keyframes authSlide {
            from { opacity: 0; transform: translateY(24px) scale(0.97); }
            to   { opacity: 1; transform: translateY(0) scale(1); }
        }
        .details-card::before {
            content: ''; display: block; height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }
        
        .card-header {
            background: var(--panel-2);
            border-bottom: 1px solid var(--border);
            padding: 2rem;
        }
        .card-header h4 { color: var(--text); font-weight: 800; }
        .card-header p.text-muted { color: var(--muted) !important; }
        
        .form-control, .form-select {
            background: var(--input-bg);
            border: 1.5px solid var(--input-border);
            color: var(--text);
            padding: 12px 15px;
            border-radius: 10px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        
        .form-control:focus, .form-select:focus {
            background: #20242b;
            border-color: var(--primary);
            color: var(--text);
            box-shadow: 0 0 0 3px rgba(82,175,238,0.18);
        }
        
        .btn-update {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border: none;
            padding: 13px;
            font-weight: 700;
            border-radius: 10px;
            transition: all 0.3s;
            color: #fff;
            width: 100%;
            box-shadow: 0 5px 18px rgba(82,175,238,0.3);
        }
        
        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(82,175,238,0.45);
        }
        
        .text-primary {
            color: var(--primary) !important;
        }
        
        .auth-logo { height: 44px; width: auto; margin: 0 auto 1rem; display: block; }
        
        .form-floating > .form-select {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        
        .form-floating > label {
            color: var(--muted);
        }
        
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #f87171;
        }
        .was-validated .form-control:invalid ~ .invalid-feedback,
        .was-validated .form-select:invalid ~ .invalid-feedback {
            display: block;
        }
        
        .response {
            min-height: 20px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="details-card">
                    <div class="card-header text-center">
                        <img src="{{ asset('logo.png') }}" alt="Valeris Crest" class="auth-logo">
                        <h4 class="mb-1">Update Your Details</h4>
                        <p class="text-muted mb-0">Complete your profile information</p>
                    </div>
                    @if (session('success'))
                    <div style="background-color: rgba(34,197,94,0.1); color: #4ade80; border: 1px solid rgba(34,197,94,0.35); padding: 12px; border-radius: 6px; margin: 15px 20px 0;">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div style="background-color: rgba(239,68,68,0.1); color: #f87171; border: 1px solid rgba(239,68,68,0.35); padding: 12px; border-radius: 6px; margin: 15px 20px 0;">
                        {{ session('error') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div style="background-color: rgba(82,175,238,0.1); color: #8ec9f0; border: 1px solid rgba(82,175,238,0.35); padding: 12px; border-radius: 6px; margin: 15px 20px 0;">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card-body p-4">
                        <form method="POST" action="{{route('user.step2')}}" id="updateDetails" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="country" name="country" aria-label="Country selection" required>
                                   <option value="">select</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Sint Maarten">Sint Maarten</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                        <!-- Additional countries can be added as needed -->
                                    </select>
                                    <label for="country">Country</label>
                                    <div class="invalid-feedback">Please select your country.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">State / Province</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state or province" required>
                                <div class="invalid-feedback">Please enter your state or province.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="pcode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="pcode" name="pcode" placeholder="Enter your postal code" required>
                                <div class="invalid-feedback">Please enter your postal code.</div>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your full address" required>
                                <div class="invalid-feedback">Please enter your address.</div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your mobile number" required>
                                <div class="invalid-feedback">Please enter a valid mobile number.</div>
                            </div>

                            <div class="mt-4 d-grid">
                                <button class="btn btn-update" type="submit" id="submitBtn">
                                    <span id="btnText">Update Details</span>
                                    <div id="btnLoading" class="spinner-border spinner-border-sm text-light ms-2 d-none" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>
                            
                            <div class="response text-center mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
    'use strict';
    var form = document.getElementById('updateDetails');
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
})();
</script>
</body>
</html>