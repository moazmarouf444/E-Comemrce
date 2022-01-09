<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'string' => 'The :attribute must not be greater than :max characters.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'حقل الاسم',
        'username' => 'حقل اسم المُستخدم',
        'user_id' => 'حقل اسم المُستخدم',
        'email' => 'حقل البريد الالكتروني',
        'first_name' => 'حقل الاسم الأول',
        'last_name' => 'حقل اسم الاخير',
        'password' => 'حقل كلمة السر',
        'password_confirmation' => 'حقل تأكيد كلمة السر',
        'city' => 'حقل المدينة',
        'country' => 'حقل الدولة',
        'address' => 'حقل العنوان ',
        'phone' => 'حقل الهاتف',
        'mobile' => 'حقل الهاتف',
        'age' => 'حقل العمر',
        'sex' => 'حقل الجنس',
        'gender' => 'حقل النوع',
        'day' => 'حقل اليوم',
        'month' => 'حقل الشهر',
        'year' => 'حقل السنة',
        'hour' => 'حقل ساعة',
        'minute' => 'حقل دقيقة',
        'second' => 'حقل ثانية',
        'title' => 'حقل العنوان',
        'content' => 'حقل المُحتوى',
        'description' => 'الوصف',
        'excerpt' => 'المُلخص',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'available' => 'مُتاح',
        'size' => 'الحجم',
        'image' => 'حقل صوره',
        'logo' => 'حقل اللوجو',
        'avatar' => 'حقل الصورة',
        'total_pay' => 'اجمالي التكلفة',
        'steps' => 'المراحل',
        'permissions' => 'حقل الصلاحيات',
        'start_date' => 'حقل تاريخ البدايه',
        'end_date' => 'حقل تاريخ الانتهاء',
        'start_time' => 'حقل وقت البدايه',
        'end_time' => 'حقل وقت الانتهاء',
        'number_of_days' => 'حقل عدد الايام',
        'old_password' => 'حقل كلمة المرور القديمة',
        'discount_percentage' => 'حقل نسبة الخصم',
        'ar' => [
            'name' => 'حقل الاسم باللغه العربيه',
            'title' => 'حقل العنوان باللغه العربيه',
            'description' => 'حقل الوصف باللغه العربيه',
        ],

        'en' => [
            'name' => 'حقل الاسم باللغه الانجليزيه',
            'title' => 'حقل العنوان باللغه الانجليزيه',
            'description' => 'حقل الوصف باللغه الانجليزيه',
        ],
        'name.ar' => 'حقل الاسم باللغه العربيه',
        'name.en' => 'حقل الاسم باللغه الانجليزيه',
        'currency.ar' => 'حقل العملة باللغه العربيه',
        'currency.en' => 'حقل العملة باللغه الانجليزيه',
        'currency_code.ar' => 'حقل رمز العملة باللغه العربيه',
        'currency_code.en' => 'حقل رمز العملة باللغه الانجليزيه',
        'phone_code' => 'حقل كود الموبايل',
        'question.ar' => 'حقل السؤال باللغه العربيه',
        'question.en' => 'حقل السؤال باللغه الانجليزيه',
        'answer.ar' => 'حقل الاجابة باللغه العربيه',
        'answer.en' => 'حقل الاجابة باللغه الانجليزيه',

        'flag' => 'حقل العلم',
        'active' => 'حقل التفعيل',
        'calling_code' => 'حقل كود الموبايل',
        'population' => 'حقل التعداد السكاني',

        'category_id' => 'حقل القسم',
        'role_id' => 'حقل الوظيفة',
        'city_id' => 'حقل المدينة',
        'country_id' => 'حقل الدولة',
        'purchase_price' => 'حقل سعر الشرلء',
        'sale_price' => 'سعر البيع',
        'stock' => 'مخزن',
        'code' => 'حقل الكود',
        'subject' => 'حقل العنوان',
        'sms_message_content' => 'حقل نص رسالة ال SMS ',
        'email_message_content' => 'حقل نص رسالة الايميل ',
        'notification_message_content' => 'حقل نص رسالة الاشعار ',
        'notification_message_title' => 'حقل عنوان رسالة الاشعار ',
        'device_id' => 'حقل ID الجهاز ',
        'device_type' => 'حقل نوع الجهاز ',
        'expiry_date' => 'حقل تاريخ انتهاء الاعلان',
        // ** new
    ],
];
