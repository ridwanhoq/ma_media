<input type="hidden" name="_token" value="kdlDe2CV0aL09zEaQiWfUGSUl0GXM24ayGhAMdss"> <input type="hidden"
    class="form-control" id="_user_id" name="user_id" value="8113">
<div class="form-group row">
    <label for="cv_no" class="col-sm-4 col-form-label">বায়োডাটার নম্বর</label>
    <div class="col-sm-8">
        <input type="text" readonly="" disabled="" class="form-control" value="8106">
    </div>
</div>
<div class="form-group row">
    <label for="contact_mobile_no" class="col-sm-4 col-form-label"> {{ __('Mobile number') }} <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="contact_mobile_no" name="contact_mobile_no" value="">
        <small>
            {{ __('SMS will be sent to this mobile number') }}
        </small>
    </div>
</div>
<div class="form-group row">
    <label for="type_of_cv" class="col-sm-4 col-form-label"> {{ __('Type of Bio-data') }} <span
            class="red">*</span></label>
    <div class="col-sm-8" data-select2-id="select2-data-78-ojrl">
        <select class="form-control select2-hidden-accessible" id="type_of_cv" name="type_of_cv"
            data-select2-id="select2-data-type_of_cv" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-2-myc1">----</option>

        </select>
    </div>
</div>
<div class="form-group row">
    <label for="marital_status" class="col-sm-4 col-form-label"> {{ __('Marital status') }} <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="marital_status" name="marital_status"
            data-select2-id="select2-data-marital_status" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-4-w0xe">----</option>

        </select>
    </div>
</div>

<div class="form-group row">
    {{ __("Permanent address") }}
    <label for="permanent_district" class="col-sm-4 col-form-label">{{ __("District") }}<span
            class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="permanent_district" name="permanent_district"
            data-select2-id="select2-data-permanent_district" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-6-72uy">----</option>
        </select>
        <small>
            {{ __("Permanent address in which district") }}
        </small>
    </div>
</div>
<div class="form-group row">
    <label for="permanent_upizila" class="col-sm-4 col-form-label">{{ __("Upazila") }} <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="permanent_upizila" name="permanent_upizila"
            data-select2-id="select2-data-permanent_upizila" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-8-y7ld">----</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-7-u8tc" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-permanent_upizila-container"
                    aria-controls="select2-permanent_upizila-container"><span class="select2-selection__rendered"
                        id="select2-permanent_upizila-container" role="textbox" aria-readonly="true"
                        title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
        <small>স্থায়ী ঠিকানা যে উপজেলার আওতাধীন</small>
    </div>
</div>
<div class="form-group row">
    <label for="permanent_address" class="col-sm-4 col-form-label">স্থায়ী ঠিকানা <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="">
        <small>আপনার স্থায়ী ঠিকানা পাবলিকলি প্রকাশ করা হবে না।</small>
    </div>
</div>
<div class="form-group row">
    <label for="present_district" class="col-sm-4 col-form-label">বর্তমান ঠিকানা (জেলা) <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="present_district" name="present_district"
            data-select2-id="select2-data-present_district" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-10-tfm7">----
            </option>

        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-9-rmm1" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-present_district-container"
                    aria-controls="select2-present_district-container"><span class="select2-selection__rendered"
                        id="select2-present_district-container" role="textbox" aria-readonly="true"
                        title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
        <small>বর্তমান ঠিকানা যে জেলার আওতাধীন</small>
    </div>
</div>
<div class="form-group row">
    <label for="present_upizila" class="col-sm-4 col-form-label">বর্তমান ঠিকানা (উপজেলা) <span
            class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="present_upizila" name="present_upizila"
            data-select2-id="select2-data-present_upizila" tabindex="-1" aria-hidden="true">
            <option selected="" value="" data-select2-id="select2-data-12-it14">----
            </option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-11-qxso" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-present_upizila-container"
                    aria-controls="select2-present_upizila-container"><span class="select2-selection__rendered"
                        id="select2-present_upizila-container" role="textbox" aria-readonly="true"
                        title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
        <small>বর্তমান ঠিকানা যে উপজেলার আওতাধীন</small>
    </div>
</div>
<div class="form-group row">
    <label for="present_address" class="col-sm-4 col-form-label">বর্তমান ঠিকানা <span class="red">*</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="present_address" name="present_address" value="">
        <small>আপনার বর্তমান ঠিকানা পাবলিকলি প্রকাশ করা হবে না।</small>
    </div>
</div>
<div class="form-group row">
    <label for="nationality" class="col-sm-4 col-form-label">জাতীয়তা</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="nationality" name="nationality" value="">
    </div>
</div>
<div class="form-group row">
    <label for="birth_date" class="col-sm-4 col-form-label">জন্ম তারিখ <span class="red">*</span></label>
    <div class="col-sm-8">
        <input type="date" class="form-control" id="birth_date" name="birth_date" value="">
    </div>
</div>
<div class="form-group row">
    <label for="your_body_color" class="col-sm-4 col-form-label">গাত্রবর্ণ <span class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="your_body_color" name="your_body_color"
            data-select2-id="select2-data-your_body_color" tabindex="-1" aria-hidden="true">
            <option value="">----</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-13-6mr4" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-your_body_color-container"
                    aria-controls="select2-your_body_color-container"><span class="select2-selection__rendered"
                        id="select2-your_body_color-container" role="textbox" aria-readonly="true"
                        title="কালো">কালো</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
    </div>
</div>
<div class="form-group row">
    <label for="body_height" class="col-sm-4 col-form-label">উচ্চতা <span class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="body_height" name="body_height"
            data-select2-id="select2-data-body_height" tabindex="-1" aria-hidden="true">
            <option selected="" value="">----</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-15-4361" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-body_height-container"
                    aria-controls="select2-body_height-container"><span class="select2-selection__rendered"
                        id="select2-body_height-container" role="textbox" aria-readonly="true"
                        title="৫'১''">৫'১''</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
    </div>
</div>
<div class="form-group row">
    <label for="body_weight" class="col-sm-4 col-form-label">ওজন <span class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="body_weight" name="body_weight"
            data-select2-id="select2-data-body_weight" tabindex="-1" aria-hidden="true">
            <option selected="" value="">----</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-17-qd8u" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-body_weight-container"
                    aria-controls="select2-body_weight-container"><span class="select2-selection__rendered"
                        id="select2-body_weight-container" role="textbox" aria-readonly="true" title="৬০ কেজি">৬০
                        কেজি</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
    </div>
</div>
<div class="form-group row">
    <label for="blood_group" class="col-sm-4 col-form-label">রক্তের গ্রুপ <span class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="blood_group" name="blood_group"
            data-select2-id="select2-data-blood_group" tabindex="-1" aria-hidden="true">
            <option selected="" value="">----</option>
            </option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-19-qo24" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-blood_group-container"
                    aria-controls="select2-blood_group-container"><span class="select2-selection__rendered"
                        id="select2-blood_group-container" role="textbox" aria-readonly="true" title="জানা নেই">জানা
                        নেই</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
    </div>
</div>
<div class="form-group row">
    <label for="profession_type" class="col-sm-4 col-form-label">পেশার ধরন <span class="red">*</span></label>
    <div class="col-sm-8">
        <select class="form-control select2-hidden-accessible" id="profession_type" name="profession_type"
            data-select2-id="select2-data-profession_type" tabindex="-1" aria-hidden="true">
            <option value="" data-select2-id="select2-data-22-tw7f">----</option>

        </select><span class="select2 select2-container select2-container--default" dir="ltr"
            data-select2-id="select2-data-21-dmfw" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                    aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-profession_type-container"
                    aria-controls="select2-profession_type-container"><span class="select2-selection__rendered"
                        id="select2-profession_type-container" role="textbox" aria-readonly="true"
                        title="----">----</span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                aria-hidden="true"></span></span>
    </div>
</div>
<div class="form-group row">
    <label for="profession" class="col-sm-4 col-form-label">পেশা <span class="red">*</span></label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="profession" name="profession" value="">
        <small>পেশার নাম সংক্ষেপে লিখুন</small>
    </div>
</div>
<div class="form-group row">
    <label for="monthly_income" class="col-sm-4 col-form-label">মাসিক আয়</label>
    <div class="col-sm-8">
        <input type="text" class="form-control" id="monthly_income" name="monthly_income" value="">
    </div>
</div>
<div class="form-group row">
    <label for="your_image" class="col-sm-4 col-form-label">আপনার ছবি আপলোড করুন</label>
    <div class="col-sm-8">
        <input type="file" accept="image/*" class="form-control" id="your_image" name="your_image">
        <small>আপনার ছবি আপনার অনুমতি ছাড়া কেউ দেখতে পারবেনা। ২MB সাইজের বেশি ছবি আপলোড করা যাবেনা। ছবি
            আপলোড না করলেও চলবে।</small>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
        <button type="submit" id="general_info_btn" class="btn btn-secondary btn-sm pull-right">সংরক্ষণ এবং পরবর্তী
            ধাপ</button>
    </div>
</div>
</form>
</div>
