    <div class="form-group row">
        <label for="edu_faculty" class="col-sm-4 col-form-label"> {{ __('Your education medium is of which type') }} <span
                class="red">*</span></label>
        <div class="col-sm-8">
            <select class="form-control select2-hidden-accessible" id="edu_faculty" name="edu_faculty"
                data-select2-id="select2-data-edu_faculty" tabindex="-1" aria-hidden="true">
                <option data-val="0" selected="" value="" data-select2-id="select2-data-24-yhi8">
                    ----</option>
            </select>
            <small>
                {{ __('Alia/Secondary/Technical/English/General') }}
            </small>
        </div>
    </div>


    <div id="if_madrasha" style="display: none;">
        <div class="form-group row">
            <label for="your_hafiz" class="col-sm-4 col-form-label">{{ __('Are you hafez?') }}</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="your_hafiz" name="your_hafiz"
                    data-select2-id="select2-data-your_hafiz" tabindex="-1" aria-hidden="true">
                    
                </select>
                <small>
                    {{ __('Write here your hifzul quran status') }}
                </small>
            </div>
        </div>
        <div class="form-group row">
            <label for="dawra_pash" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="dawra_pash" name="dawra_pash"
                    data-select2-id="select2-data-dawra_pash" tabindex="-1" aria-hidden="true">
                    <option data-val="0" selected="" value="" data-select2-id="select2-data-28-xk5w">----
                    </option>
                    
                </select>
                <small>
                    {{ __('Dawrah passed') }}
                </small>
            </div>
        </div>

        <div id="if_study_on_going_mad" style="display: none;">
            <div class="form-group row">
                <label for="dawra_study_year" class="col-sm-4 col-form-label">{{ __('In which year dawra e hadith') }}</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="dawra_study_year" name="dawra_study_year"
                        value="">
                </div>
            </div>
        </div>



        <div id="if_dawra_yes" style="display: none;">
            <div class="form-group row">
                <label for="dawra_pass_year" class="col-sm-4 col-form-label">{{ __('Year of dawra') }}</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="dawra_pass_year" name="dawra_pass_year"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="dawra_pass_natija" class="col-sm-4 col-form-label">{{ __('Dawrah natizah') }}</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="dawra_pass_natija"
                        name="dawra_pass_natija" data-select2-id="select2-data-dawra_pass_natija" tabindex="-1"
                        aria-hidden="true">
                    </select>
                    <small>{{ __('Dawrah natizah') }}</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="read_takhassos" class="col-sm-4 col-form-label">{{ __('Takhassus passed?') }}</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="read_takhassos" name="read_takhassos"
                        data-select2-id="select2-data-read_takhassos" tabindex="-1" aria-hidden="true">
                    </select>
                    <small>{{ __('Takhassus passed?') }}</small>
                </div>
            </div>
            <div id="if_read_takhassos" style="display: none;">
                <div class="form-group row">
                    <label for="takhassos_subject" class="col-sm-4 col-form-label">{{ __('Takhassus in which subject') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="takhassos_subject" name="takhassos_subject"
                            value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="takhassos_pass_year" class="col-sm-4 col-form-label">{{ __('Takhassus in which year') }}</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="takhassos_pass_year"
                            name="takhassos_pass_year" value="">
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="higher_education" class="col-sm-4 col-form-label">{{ __('Last educational qualification') }}</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="higher_education" name="higher_education"></textarea>
                <small>{{ __('Write here education subject, institution, passing year in details') }}</small>
            </div>
        </div>
    </div>



    <div id="if_general" style="display: none;">
        <div class="form-group row">
            <label for="board_of_education" class="col-sm-4 col-form-label">{{ __('Education board') }}</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="board_of_education"
                    name="board_of_education" data-select2-id="select2-data-board_of_education" tabindex="-1"
                    aria-hidden="true">
                    <option data-val="0" selected="" value="" data-select2-id="select2-data-34-t4nt">----
                    </option>
                </select>
                <small>{{ __('Write education board here') }}</small>
            </div>
        </div>
        <div class="form-group row">
            <label for="ssc_pass" class="col-sm-4 col-form-label">{{ __('Have you passed SSC ?') }}</label>
            <div class="col-sm-8">
                <select class="form-control select2-hidden-accessible" id="ssc_pass" name="ssc_pass"
                    data-select2-id="select2-data-ssc_pass" tabindex="-1" aria-hidden="true">
                    
                </select>
                <small>{{ __('Have you passed SSC ?') }}</small>
            </div>
        </div>
        <div id="if_ssc_pass_no" style="display: none;">
            <div class="form-group row">
                <label for="which_class_you_study" class="col-sm-4 col-form-label">{{ __('Upto which class you studied ?') }}</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="which_class_you_study"
                        name="which_class_you_study" data-select2-id="select2-data-which_class_you_study"
                        tabindex="-1" aria-hidden="true">
                        
                    </select>
                    <small>{{ __('Upto which class you studied ?') }}</small>
                </div>
            </div>
        </div>
        <div id="if_ssc_pass_yes" style="display: none;">
            <div class="form-group row">
                <label for="board_of_ssc_pass" class="col-sm-4 col-form-label">{{ __('GPA achieved in SSC') }}</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="board_of_ssc_pass"
                        name="board_of_ssc_pass" data-select2-id="select2-data-board_of_ssc_pass" tabindex="-1"
                        aria-hidden="true">
                        
                    </select>
                    <small>{{ __('GPA achieved in SSC') }}</small>
                </div>
            </div>
            <div class="form-group row">
                <label for="ssc_pass_year" class="col-sm-4 col-form-label">{{ __('Passing year of SSC') }}</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="ssc_pass_year" name="ssc_pass_year"
                        value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="hsc_pass" class="col-sm-4 col-form-label">{{ __('Have you passed HSC ?') }}</label>
                <div class="col-sm-8">
                    <select class="form-control select2-hidden-accessible" id="hsc_pass" name="hsc_pass"
                        data-select2-id="select2-data-hsc_pass" tabindex="-1" aria-hidden="true">
                        
                    </select>
                    <small>{{ __('Have you passed HSC ?') }}</small>
                </div>
            </div>
            <div id="if_hsc_pass_is_no" style="display: none;">
                <div class="form-group row">
                    <label for="hsc_pass_no_data" class="col-sm-4 col-form-label">{{ __('In which year of HSC you study in ?') }}</label>
                    <div class="col-sm-8">
                        <select class="form-control select2-hidden-accessible" id="hsc_pass_no_data"
                            name="hsc_pass_no_data" data-select2-id="select2-data-hsc_pass_no_data" tabindex="-1"
                            aria-hidden="true">
                        </select>
                        <small>{{ __('In which year of HSC you study in ?') }}</small>
                    </div>
                </div>
            </div>
            <div id="if_hsc_pass_is_yes" style="display: none;">
                <div class="form-group row">
                    <label for="board_of_hsc_pass" class="col-sm-4 col-form-label">{{ __('In which group you studied in HSC ?') }}</label>
                    <div class="col-sm-8">
                        <select class="form-control select2-hidden-accessible" id="board_of_hsc_pass"
                            name="board_of_hsc_pass" data-select2-id="select2-data-board_of_hsc_pass" tabindex="-1"
                            aria-hidden="true">
                        </select>
                        <small>{{ __('In which group you studied in HSC ?') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hsc_pass_year" class="col-sm-4 col-form-label">{{ __('Passing year of HSC') }}</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="hsc_pass_year" name="hsc_pass_year"
                            value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_edu_quly" class="col-sm-4 col-form-label">{{ __('Bachelor / honours / equivalent education') }}</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="hons_edu_quly" name="hons_edu_quly"></textarea>
                        <small>{{ __('Bachelor / honours / equivalent education') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_pass_institution" class="col-sm-4 col-form-label">{{ __('Institution name') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="hons_pass_institution"
                            name="hons_pass_institution" value="">
                        <small>{{ __('From which institution you passed honours') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hons_pass_year" class="col-sm-4 col-form-label">{{ __('Passing year of honours') }}</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="hons_pass_year" name="hons_pass_year"
                            value="">

                    </div>
                </div>
            </div>

            <div id="if_is_diploma" style="display: none;">
                <div class="form-group row">
                    <label for="diploma_subject" class="col-sm-4 col-form-label">{{ __('In which subject you study in diploma?') }}</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="diploma_subject" name="diploma_subject"
                            value="">
                        <small>{{ __('In which subject you study in diploma?') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diploma_institution" class="col-sm-4 col-form-label">{{ __('Institution name') }}</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="diploma_institution" name="diploma_institution"></textarea>
                        <small>{{ __('In which institution you study in diploma?') }}</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="diploma_pass_year" class="col-sm-4 col-form-label">{{ __('Passing year of diploma') }}</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="diploma_pass_year" name="diploma_pass_year"
                            value="">
                        <small>{{ __('In which year of diploma you study in') }}</small>
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
