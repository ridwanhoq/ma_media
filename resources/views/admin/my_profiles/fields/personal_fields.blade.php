{{-- >> personal
            >> gender
            >> blood group
            >> marital status
            >> age range
            >> height range
            >> weight range
            >> complexion --}}
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">সম্পূর্ণ নাম <span
                        class="red">*</span></label>
                <div class="col-sm-8">

                    <input type="text" class="form-control" required="" autocomplete="off" id="name"
                        name="name" value="RIDWAN">
                    <small>
                        {{__("Name is taken for verification")}}
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Email / Phone number <span class="red">*</span></label>
                <div class="col-sm-8">

                    <input type="text" class="form-control" required="" autocomplete="off" id="username"
                        name="username" placeholder="Email or Mobile Number" value="ridwan.ics@gmail.com">
                    <small>
                        {{ __("Username (usually email or password)") }}
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="login_password" class="col-sm-4 col-form-label">Password <span
                        class="red">*</span></label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" required="" id="password" name="password"
                        placeholder="Password" autocomplete="new-password">
                    <small>
                        {{ __("Password should be minimum 8 characters") }}
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-sm-4 col-form-label">Confirm Password <span
                        class="red">*</span></label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" required="" id="password-confirm"
                        name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                    <small id="confirmPawordError" class="red" style="display: none;">
                    {{ __("Confirm password") }}
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" id="register_btn" class="btn btn-secondary btn-sm pull-right">
                        {{ __("Update") }}
                    </button>
                </div>
            </div>