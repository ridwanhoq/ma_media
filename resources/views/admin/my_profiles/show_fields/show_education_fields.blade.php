    <div class="form-group row">
        <label for="edu_faculty" class="col-sm-4 col-form-label"> {{ __("Your education medium is of which type") }} <span
                class="red">*</span></label>
        <div class="col-sm-8">
            <select class="form-control select2-hidden-accessible" id="edu_faculty" name="edu_faculty"
                data-select2-id="select2-data-edu_faculty" tabindex="-1" aria-hidden="true">
                <option data-val="0" selected="" value="" data-select2-id="select2-data-24-yhi8">
                    ----</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                data-select2-id="select2-data-23-rgsn" style="width: 100%;"><span class="selection"><span
                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                        aria-expanded="false" tabindex="0" aria-disabled="false"
                        aria-labelledby="select2-edu_faculty-container"
                        aria-controls="select2-edu_faculty-container"><span class="select2-selection__rendered"
                            id="select2-edu_faculty-container" role="textbox" aria-readonly="true"
                            title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                                role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                    aria-hidden="true"></span></span>
            <small>
                {{ __("Alia/Secondary/Technical/English/General") }}
            </small>
        </div>
    </div>


    <div id="if_madrasha" style="display: none;">
        <div class="form-group row">
            <label for="your_hafiz" class="col-sm-4 col-form-label">আপনি কি হাফেজ?</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="your_hafiz" name="your_hafiz"
                    data-select2-id="select2-data-your_hafiz" tabindex="-1" aria-hidden="true">
                    <option selected="" value="" data-select2-id="select2-data-26-fn6p">----
                    </option>
                    <option value="হ্যাঁ">হ্যাঁ</option>
                    <option value="না">না</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                    data-select2-id="select2-data-25-8nmg" style="width: 100%;"><span class="selection"><span
                            class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                            aria-expanded="false" tabindex="0" aria-disabled="false"
                            aria-labelledby="select2-your_hafiz-container"
                            aria-controls="select2-your_hafiz-container"><span class="select2-selection__rendered"
                                id="select2-your_hafiz-container" role="textbox" aria-readonly="true"
                                title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="dawra_pash" class="col-sm-4 col-form-label">দাওরায়ে হাদীস পাশ করেছেন?</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="dawra_pash" name="dawra_pash"
                    data-select2-id="select2-data-dawra_pash" tabindex="-1" aria-hidden="true">
                    <option data-val="0" selected="" value="" data-select2-id="select2-data-28-xk5w">----
                    </option>
                    <option data-val="1" value="না">না</option>
                    <option data-val="2" value="হ্যাঁ">হ্যাঁ</option>
                    <option data-val="3" value="না, এখনো পড়ছি">না, এখনো পড়ছি</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                    data-select2-id="select2-data-27-u7ps" style="width: 100%;"><span class="selection"><span
                            class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                            aria-expanded="false" tabindex="0" aria-disabled="false"
                            aria-labelledby="select2-dawra_pash-container"
                            aria-controls="select2-dawra_pash-container"><span class="select2-selection__rendered"
                                id="select2-dawra_pash-container" role="textbox" aria-readonly="true"
                                title="----">----</span><span class="select2-selection__arrow"
                                role="presentation"><b role="presentation"></b></span></span></span><span
                        class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>

        <div id="if_study_on_going_mad" style="display: none;">
            <div class="form-group row">
                <label for="dawra_study_year" class="col-sm-4 col-form-label">দাওরায়ে হাদীস কোন বর্ষে
                    পড়ছেন?</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="dawra_study_year" name="dawra_study_year"
                        value="">
                </div>
            </div>
        </div>



        <div id="if_dawra_yes" style="display: none;">
            <div class="form-group row">
                <label for="dawra_pass_year" class="col-sm-4 col-form-label">দাওরায়ে হাদীস পাসের সন</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="dawra_pass_year" name="dawra_pass_year"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="dawra_pass_natija" class="col-sm-4 col-form-label">দাওরায়ে হাদীসের নতিজা
                    কি?</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="dawra_pass_natija"
                        name="dawra_pass_natija" data-select2-id="select2-data-dawra_pass_natija" tabindex="-1"
                        aria-hidden="true">
                        <option selected="" value="" data-select2-id="select2-data-30-wpim">----
                        </option>

                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="select2-data-29-26bb" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-dawra_pass_natija-container"
                                aria-controls="select2-dawra_pass_natija-container"><span
                                    class="select2-selection__rendered" id="select2-dawra_pass_natija-container"
                                    role="textbox" aria-readonly="true" title="----">----</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="read_takhassos" class="col-sm-4 col-form-label">আপনি কি তাখাস্সুস
                    পড়েছেন?</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="read_takhassos" name="read_takhassos"
                        data-select2-id="select2-data-read_takhassos" tabindex="-1" aria-hidden="true">
                        <option data-val="0" selected="" value="" data-select2-id="select2-data-32-llaw">
                            ----</option>
                        <option data-val="1" value="হ্যাঁ">হ্যাঁ</option>
                        <option data-val="2" value="না">না</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="select2-data-31-5ezi" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-read_takhassos-container"
                                aria-controls="select2-read_takhassos-container"><span
                                    class="select2-selection__rendered" id="select2-read_takhassos-container"
                                    role="textbox" aria-readonly="true" title="----">----</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
            <div id="if_read_takhassos" style="display: none;">
                <div class="form-group row">
                    <label for="takhassos_subject" class="col-sm-4 col-form-label">কোন বিষয়ে তাখাস্সুস
                        পড়েছেন?</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="takhassos_subject" name="takhassos_subject"
                            value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="takhassos_pass_year" class="col-sm-4 col-form-label">তাখাস্সুস পাসের
                        সন</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="takhassos_pass_year"
                            name="takhassos_pass_year" value="">
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="higher_education" class="col-sm-4 col-form-label">সর্বোচ্চ শিক্ষাগত যোগ্যতা</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="higher_education" name="higher_education"></textarea>
                <small>শিক্ষার বিষয়, প্রতিষ্ঠানের নাম, পাসের সন ইত্যাদি বিস্তারিত লিখবেন।</small>
            </div>
        </div>
    </div>



    <div id="if_general" style="display: none;">
        <div class="form-group row">
            <label for="board_of_education" class="col-sm-4 col-form-label">শিক্ষা বোর্ড?</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="board_of_education"
                    name="board_of_education" data-select2-id="select2-data-board_of_education" tabindex="-1"
                    aria-hidden="true">
                    <option data-val="0" selected="" value="" data-select2-id="select2-data-34-t4nt">----
                    </option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                    data-select2-id="select2-data-33-nofx" style="width: 100%;"><span class="selection"><span
                            class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                            aria-expanded="false" tabindex="0" aria-disabled="false"
                            aria-labelledby="select2-board_of_education-container"
                            aria-controls="select2-board_of_education-container"><span
                                class="select2-selection__rendered" id="select2-board_of_education-container"
                                role="textbox" aria-readonly="true" title="----">----</span><span
                                class="select2-selection__arrow" role="presentation"><b
                                    role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                        aria-hidden="true"></span></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="ssc_pass" class="col-sm-4 col-form-label">মাধ্যমিক (SSC) / সমমান পাশ করেছেন?</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="ssc_pass" name="ssc_pass"
                    data-select2-id="select2-data-ssc_pass" tabindex="-1" aria-hidden="true">
                    <option data-val="0" selected="" value="" data-select2-id="select2-data-36-ql9h">----
                    </option>
                    <option data-val="1" value="হ্যাঁ">হ্যাঁ</option>
                    <option data-val="2" value="না">না</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                    data-select2-id="select2-data-35-ai21" style="width: 100%;"><span class="selection"><span
                            class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                            aria-expanded="false" tabindex="0" aria-disabled="false"
                            aria-labelledby="select2-ssc_pass-container"
                            aria-controls="select2-ssc_pass-container"><span class="select2-selection__rendered"
                                id="select2-ssc_pass-container" role="textbox" aria-readonly="true"
                                title="----">----</span><span class="select2-selection__arrow"
                                role="presentation"><b role="presentation"></b></span></span></span><span
                        class="dropdown-wrapper" aria-hidden="true"></span></span>
            </div>
        </div>
        <div id="if_ssc_pass_no" style="display: none;">
            <div class="form-group row">
                <label for="which_class_you_study" class="col-sm-4 col-form-label">কোন ক্লাস পর্যন্ত
                    পড়েছেন?</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="which_class_you_study"
                        name="which_class_you_study" data-select2-id="select2-data-which_class_you_study"
                        tabindex="-1" aria-hidden="true">
                        <option selected="" value="" data-select2-id="select2-data-38-wgzb">----
                        </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="select2-data-37-d56v" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-which_class_you_study-container"
                                aria-controls="select2-which_class_you_study-container"><span
                                    class="select2-selection__rendered" id="select2-which_class_you_study-container"
                                    role="textbox" aria-readonly="true" title="----">----</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
        </div>
        <div id="if_ssc_pass_yes" style="display: none;">
            <div class="form-group row">
                <label for="board_of_ssc_pass" class="col-sm-4 col-form-label">মাধ্যমিক (SSC) / সমমান
                    বিভাগ</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="board_of_ssc_pass"
                        name="board_of_ssc_pass" data-select2-id="select2-data-board_of_ssc_pass" tabindex="-1"
                        aria-hidden="true">
                        <option selected="" value="" data-select2-id="select2-data-40-5gmg">----
                        </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="select2-data-39-4oyv" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-board_of_ssc_pass-container"
                                aria-controls="select2-board_of_ssc_pass-container"><span
                                    class="select2-selection__rendered" id="select2-board_of_ssc_pass-container"
                                    role="textbox" aria-readonly="true" title="----">----</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>
            <div class="form-group row">
                <label for="ssc_pass_year" class="col-sm-4 col-form-label">মাধ্যমিক (SSC) / সমমান পাসের
                    সন</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="ssc_pass_year" name="ssc_pass_year"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="hsc_pass" class="col-sm-4 col-form-label">উচ্চ মাধ্যমিক (HSC) / সমমান পাশ
                    করেছেন?</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="hsc_pass" name="hsc_pass"
                        data-select2-id="select2-data-hsc_pass" tabindex="-1" aria-hidden="true">
                        <option data-val="0" selected="" value="" data-select2-id="select2-data-42-xfbp">
                            ----</option>
                        <option data-val="1" value="হ্যাঁ">হ্যাঁ</option>
                        <option data-val="2" value="না">না</option>
                        <option data-val="3" value="ডিপ্লোমা পড়েছি">ডিপ্লোমা পড়েছি</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="select2-data-41-5si4" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-hsc_pass-container"
                                aria-controls="select2-hsc_pass-container"><span class="select2-selection__rendered"
                                    id="select2-hsc_pass-container" role="textbox" aria-readonly="true"
                                    title="----">----</span><span class="select2-selection__arrow"
                                    role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
            <div id="if_hsc_pass_is_no" style="display: none;">
                <div class="form-group row">
                    <label for="hsc_pass_no_data" class="col-sm-4 col-form-label">উচ্চ মাধ্যমিক (HSC) /
                        সমমান কোন বর্ষে পড়ছেন?</label>
                    <div class="col-sm-8">
                        <select class="form-control select2-hidden-accessible" id="hsc_pass_no_data"
                            name="hsc_pass_no_data" data-select2-id="select2-data-hsc_pass_no_data" tabindex="-1"
                            aria-hidden="true">
                            <option selected="" value="" data-select2-id="select2-data-44-afly">
                                ----</option>

                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="select2-data-43-s85b" style="width: 100%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-hsc_pass_no_data-container"
                                    aria-controls="select2-hsc_pass_no_data-container"><span
                                        class="select2-selection__rendered" id="select2-hsc_pass_no_data-container"
                                        role="textbox" aria-readonly="true" title="----">----</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
            </div>
            <div id="if_hsc_pass_is_yes" style="display: none;">
                <div class="form-group row">
                    <label for="board_of_hsc_pass" class="col-sm-4 col-form-label">উচ্চ মাধ্যমিক (HSC) /
                        সমমানের বিভাগ</label>
                    <div class="col-sm-8">
                        <select class="form-control select2-hidden-accessible" id="board_of_hsc_pass"
                            name="board_of_hsc_pass" data-select2-id="select2-data-board_of_hsc_pass" tabindex="-1"
                            aria-hidden="true">
                            <option selected="" value="" data-select2-id="select2-data-46-b81x">
                                ----</option>

                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="select2-data-45-pcw1" style="width: 100%;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                    aria-labelledby="select2-board_of_hsc_pass-container"
                                    aria-controls="select2-board_of_hsc_pass-container"><span
                                        class="select2-selection__rendered" id="select2-board_of_hsc_pass-container"
                                        role="textbox" aria-readonly="true" title="----">----</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span
                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hsc_pass_year" class="col-sm-4 col-form-label">উচ্চ মাধ্যমিক (HSC) / সমমান
                        পাসের সন</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="hsc_pass_year" name="hsc_pass_year"
                            value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_edu_quly" class="col-sm-4 col-form-label">স্নাতক / স্নাতক (সম্মান) /
                        সমমান শিক্ষাগত যোগ্যতা</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="hons_edu_quly" name="hons_edu_quly"></textarea>
                        <small>উত্তরটা এভাবে দিতে পারেনঃ Bachelor of Science (B.Sc) in Electrical And
                            Electronics Engineering (EEE)</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_pass_institution" class="col-sm-4 col-form-label">শিক্ষাপ্রতিষ্ঠানের
                        নাম</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="hons_pass_institution"
                            name="hons_pass_institution" value="">
                        <small>যে প্রতিষ্ঠান থেকে স্নাতক করেছেন।</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_pass_year" class="col-sm-4 col-form-label">স্নাতক / স্নাতক (সম্মান) /
                        সমমান পাসের সন</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="hons_pass_year" name="hons_pass_year"
                            value="">

                    </div>
                </div>
            </div>

            <div id="if_is_diploma" style="display: none;">
                <div class="form-group row">
                    <label for="diploma_subject" class="col-sm-4 col-form-label">ডিপ্লোমা কোন বিষয়ে
                        পড়েছেন?</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="diploma_subject" name="diploma_subject"
                            value="">
                        <small>এভাবে উত্তর দিতে পারেনঃ Diploma in Textile Engineering</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diploma_institution" class="col-sm-4 col-form-label">শিক্ষাপ্রতিষ্ঠানের
                        নাম</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="diploma_institution" name="diploma_institution"></textarea>
                        <small>যে প্রতিষ্ঠান থেকে ডিপ্লোমা পড়েছেন</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diploma_pass_year" class="col-sm-4 col-form-label">ডিপ্লোমা পাশের সন</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="diploma_pass_year" name="diploma_pass_year"
                            value="">
                        <small>ছাত্র হলে বর্ষ লিখবেন। যেমনঃ ৩য় বর্ষ</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label for="other_education" class="col-sm-4 col-form-label">অন্যান্য শিক্ষাগত যোগ্যতা</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="other_education" name="other_education"></textarea>
            <small>শিক্ষার বিষয়, প্রতিষ্ঠানের নাম, পাসের সন ইত্যাদি বিস্তারিত লিখবেন। কিছু না থাকলে ঘরটি ফাঁকা
                রাখবেন।</small>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="button" id="edu_qualification_btn" class="btn btn-secondary btn-sm pull-right">সংরক্ষণ এবং
                পরবর্তী ধাপ</button>
        </div>
    </div>