phase 1 :
>> theme integration

>> create default pages
    >> components
        >> header -- d
        >> menu -- d
        >> footer -- d
    >> common pages
        >> sample_table -- d
        >> sample_form -- d
        >> filter (list) -- w
        >> pagination (list) -- w
    >> lang
        >> en.json
        >> bn.json
    >> setting
        >> setting component -- w

>> register -- d

>> login -- d

>> role-permission -- w

>> tables
    >> users
    >> user_basics
    >> user_religions
    >> user_education
    >> user_profession
    >> price_plans
    >> setting_profile -- 
    >> divisions
    >> districts
    >> upazilas
    >> unions
    >> 

>> 
---------------------
>> column of table inserted or edited from which forms
    >> ex: 
        >> page_name, menu_sequence, table, columns, action
        >> homepage, register, users,             
            >> string('name')
            >> string('email')->unique()
            >> timestamp('email_verified_at')->nullable()
            >> string('password')
            >> rememberToken(),
            insert
        
--------------------------------------------------------------------------------------------------------------------------------------------------------------

>> Sequences
    >> User
    >> Country
    >> Division
    >> District
    >> Upazila
    >> Union
    >> UserBasic
    >> 

-------------------------------------------------------------------------------------
>> edit profile 
    >> basic
    >> education
    >> profession
    >> religion
    >> partner_preferences
>> search
    >> basic
        >> personal
            >> gender
            >> blood group
            >> marital status
            >> age range
            >> height range
            >> weight range
            >> complexion
        >> education
            >> education type
            >> degree range
            >> 
        >> profession
        >> religion
            >> religion
            >> mazhab
        >> site related
            >> with photo
            >> profile complete more than
            >> mobile verified
            >> email verified
    >> advanced
    >> custom search
>> favourite
>> compare
>> my matches
>> price plans