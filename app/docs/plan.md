phase 1 :
>> theme integration

>> create default pages
    >> components
        >> header
        >> menu
        >> footer
    >> common pages
        >> index
        >> create
        >> edit
        >> show
        >> filter (list)
        >> pagination (list)
    >> lang
        >> en.json
        >> bn.json
    >> setting
        >> 

>> register

>> login

>> role-permission

>> tables
    >> users
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
        
