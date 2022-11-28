<!-- step 1 => Personal Details -->
<h6><i class="step-icon la la-user font-medium-3"></i> Personal Details</h6>
<fieldset>
    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Full Name:<span class="danger">*</span></label>
                <input type="text" class="form-control required" id="name" name="name" />
            </div>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="custom-select">
                <option value="">Select City</option>

            </select>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="city">Division:</label>
                <select id="division_id" name="division_id" class="custom-select">
                    <option value="">Select City</option>
                    <option value="manhattan">Manhattan</option>
                    <option value="seattle">Seattle</option>
                    <option value="kingsville">Kingsville</option>
                    <option value="losangeles">Los Angeles</option>
                    <option value="florida">Florida</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="district_id">District:</label>
                <select id="district_id" class="custom-select">
                    <option value="">Select State</option>
                    <option value="washingtondc">Washington DC</option>
                    <option value="newyork">New York</option>
                    <option value="texas">Texas</option>
                    <option value="california">California</option>
                    <option value="miami">Miami</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="upazila_id">Upazila:</label>
                <select id="upazila_id" class="custom-select">
                    <option value="">Select State</option>
                    <option value="washingtondc">Washington DC</option>
                    <option value="newyork">New York</option>
                    <option value="texas">Texas</option>
                    <option value="california">California</option>
                    <option value="miami">Miami</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="union_id">Union:</label>
                <select id="union_id" class="custom-select">
                    <option value="">Select State</option>
                    <option value="washingtondc">Washington DC</option>
                    <option value="newyork">New York</option>
                    <option value="texas">Texas</option>
                    <option value="california">California</option>
                    <option value="miami">Miami</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone_number">Contact Number:<span class="danger">*</span></label>
                <input type="number" class="form-control required" id="phone_number" name="phone_number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="date_of_birth">Date Of Birth:<span class="danger">*</span></label>
                <input type="date" class="form-control required" id="date_of_birth" name="date_of_birth">
            </div>
        </div>
    </div>
</fieldset>

<!-- Step 2 => Education Details-->

<h6><i class="step-icon la la-book font-medium-3"></i> Education Details</h6>
<fieldset>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="school">School Attended:</label>
                <input type="text" class="form-control" id="school">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="degree">Degree Held:<span class="danger">*</span></label>
                <input type="text" class="form-control required" id="degree" name="degree">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="license">License:<span class="danger">*</span></label>
                <input type="text" class="form-control required" id="license" name="license">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="hons">Hons & Awards:</label>
                <input type="text" class="form-control" id="hons">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="experties">Area Of Experties:<span class="danger">*</span></label>
                <input type="text" class="form-control required" id="experties" name="expert">
            </div>
        </div>
        <div class="col-md-6">
            <label for="research">Research Topic</label>
            <textarea id="research" cols="5" rows="1" class="form-control"></textarea>
        </div>
    </div>
</fieldset>

<!-- Step 3 => Experience -->

<h6><i class="step-icon font-medium-3 la la-building"></i> Previous Experience Details
</h6>
<fieldset>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="previousCompany">Previous Company:</label>
                <input type="text" class="form-control" id="previousCompany">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="previousJobTitle">Previous Title:</label>
                <input type="text" class="form-control" id="previousJobTitle">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="training">Trained By: <span class="danger">*</span></label>
                <input type="text" class="form-control" id="training" name="training" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="internship">Internship:</label>
                <input type="text" class="form-control" id="internship">
            </div>
        </div>
    </div>
</fieldset>

<!-- Step 4 => Social Media -->

<h6><i class="step-icon ft-monitor font-medium-3"></i> Social Media</h6>
<fieldset>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Email: <span class="danger">*</span></label>
                <input type="email" class="form-control required" id="email" name="email">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="fb">Facebook:</label>
                <input type="url" class="form-control" id="fb">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ig">Instagram:</label>
                <input type="url" class="form-control" id="ig">
            </div>
        </div>
    </div>
</fieldset>
