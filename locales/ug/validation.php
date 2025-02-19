<?php

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

return [
    'accepted'             => ':attribute چوقۇم قوشۇلىشىڭىز كېرەك.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => ':attribute ئىناۋەتلىك توربەت ئادىرىسى ئەمەس.',
    'after'                => ':attribute چوقۇم :date دىن كىيىن بۇلىشى كېرەك.',
    'after_or_equal'       => ':attribute چوقۇم :date غا تەڭ ياكى كىيىن بۇلىشى كېرەك.',
    'alpha'                => ':attribute پەقەت ھەرىپلەردىن تۈزىلىشى كېرەك.',
    'alpha_dash'           => ':attribute پەقەت ھەرىپ، سان-سىفىر ۋە يانتۇ سىزىقتىن تۈزەلگەن بۇلىشى كېرەك.',
    'alpha_num'            => ':attribute پەقەت ھەرىپ ۋە سان-سىفىرلاردىن تۈزىلىشى كېرەك.',
    'array'                => ':attribute چوقۇم بۇرۇن بۇلىشى كېرەك.',
    'before'               => ':attribute چوقۇم :date دىن بۇرۇن بۇلىشى كېرەك.',
    'before_or_equal'      => ':attribute چوقۇم :date غا تەڭ ياكى بۇرۇن بۇلىشى كېرەك.',
    'between'              => [
        'array'   => ':attribute چوقۇم  :min - :max بۆلەك ئارلىقىدا بۇلىشى كېرەك.',
        'file'    => ':attribute چوقۇم :min - :max kb ئارلىقىدا بۇلىشى كېرەك.',
        'numeric' => ':attribute چوقۇم :min - :max ئارلىقىدا بۇلىشى كېرەك.',
        'string'  => ':attribute چوقۇم  :min - :max خەت ئارلىقىدا بۇلىشى كېرەك.',
    ],
    'boolean'              => ':attribute چوقۇم بۇل قىممىتى بۇلىشى كېرەك.',
    'confirmed'            => ':attribute ئىككى قېتىم كىرگۈزگەن قىممەت ئوخشاش بولمىدى.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => ':attribute بىر ئىناۋەتلىك ۋاقىت ئەمەس.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => ':attribute تىپى چوقۇم :format بۇلىشى كېرەك.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => ':attribute بىلەن :other چوقۇم ئوخشاش بۇلىشى كېرەك.',
    'digits'               => ':attribute چوقۇم :digits خانىلىق سان بۇلىشى كېرەك.',
    'digits_between'       => ':attribute چوقۇم  :min بىلەن :max ئارلىقىدىكى سان بۇلىشى كېرەك.',
    'dimensions'           => ':attribute رەسىم ئۆلچىمى ئىناۋەتسىز.',
    'distinct'             => ':attribute ئاللابۇرۇن مەۋجۈت.',
    'email'                => ':attribute ئىناۋەتلىك تورخەت ئادىرىسى ئەمەس.',
    'ends_with'            => 'The :attribute must end with one of the following: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => ':attribute مەۋجۇت ئەمەس.',
    'file'                 => ':attribute چوقۇم ھۆججەت بۇلىشى كېرەك.',
    'filled'               => ':attribute قۇرۇق بولسا بولمايدۇ.',
    'gt'                   => [
        'array'   => 'The :attribute must have more than :value items.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string'  => 'The :attribute must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The :attribute must have :value items or more.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
    ],
    'image'                => ':attribute چوقۇم رەسىم ھۆججىتى بۇلىشى كېرەك.',
    'in'                   => 'تاللانغان قىممەت :attribute ئىناۋەتسىز',
    'in_array'             => ':attribute :other نىڭ ئىچىدە ئەمەس.',
    'integer'              => ':attribute چوقۇم پۈتۈن سان بۇلىشى كېرەك',
    'ip'                   => ':attribute چوقۇم ئىناۋەتلىك IP ئادىرىسى بۇلىشى كېرەك.',
    'ipv4'                 => ':attribute چوقۇم ئىناۋەتلىك IPv4 ئادىرىسى بۇلىشى كېرەك.',
    'ipv6'                 => ':attribute چوقۇم ئىناۋەتلىك IPv6 ئادىرىسى بۇلىشى كېرەك.',
    'json'                 => ':attribute چوقۇم ئىناۋەتلىك JSON تىپى بۇلىشى كېرەك.',
    'lt'                   => [
        'array'   => 'The :attribute must have less than :value items.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string'  => 'The :attribute must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The :attribute must not have more than :value items.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => ':attribute ئەڭ كۆپ بولغاندا :max بۆلەك',
        'file'    => ':attribute :max kb دىن چوڭ بولماسلىكى كېرەك.',
        'numeric' => ':attribute :max دىن چوڭ بولماسلىكى كېرەك.',
        'string'  => ':attribute چوڭ-كىچىكلىكى :max خەتتىن ئېشىپ كەتمەسلىكى كېرەك.',
    ],
    'mimes'                => ':attribute چوقۇم بىر :values تىپىدىكى ھۆججەت بۇلىشى كېرەك.',
    'mimetypes'            => ':attribute چوقۇم بىر :values تىپىدىكى ھۆججەت بۇلىشى كېرەك.',
    'min'                  => [
        'array'   => ':attribute ئەڭ ئاز بولغاندا :min بۆلەك بۇلىشى كېرەك.',
        'file'    => ':attribute چوڭ-كىچىكلىكى چوقۇم :min kb دىن كىچىك بولماسلىقى كېرەك.',
        'numeric' => ':attribute چوقۇم :min تەڭ ياكى چوڭ بۇلىشى كېرەك.',
        'string'  => ':attribute ئەڭ ئاز بولغاندا :min خەت بۇلىشى كېرەك.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value.',
    'not_in'               => 'تاللانغان قىممەت :attribute ئىناۋەتسىز.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute چوقۇم سان-سىفىر بۇلىشى كېرەك.',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute چوقۇم مەۋجۇت بۇلىشى كېرەك.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute ھۆججەت تىپى ئىناۋەتسىز.',
    'required'             => ':attribute قۇرۇق بولسا بولمايدۇ.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values',
    'required_if'          => ':other :value بولغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'required_unless'      => ':other :values بولمىغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'required_with'        => ':values مەۋجۈت بولغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'required_with_all'    => ':values مەۋجۈت بولغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'required_without'     => ':values مەۋجۈت بولمىغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'required_without_all' => ':values ھەممىسى مەۋجۈت بولمىغاندا :attribute قۇرۇق بولسا بولمايدۇ.',
    'same'                 => ':attribute بىلەن :other چوقۇم ئوخشاش بۇلىشى كېرەك.',
    'size'                 => [
        'array'   => ':attribute چوقۇم :size بۆلەك.',
        'file'    => ':attribute چوڭ-كىچىكلىكى چوقۇم :size kb بۇلىشى كېرەك.',
        'numeric' => ':attribute چوڭ-كىچىكلىكى چوقۇم :size بۇلىشى كېرەك.',
        'string'  => ':attribute چوقۇم :size خەت.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values.',
    'string'               => ':attribute چوقۇم بىر ھەرىپ بەلگە تىزىقى بۇلىشى كېرەك.',
    'timezone'             => ':attribute چوقۇم ئىناۋەتلىك ۋاقىت رايونى بۇلىشى كېرەك.',
    'unique'               => ':attribute ئاللابۇرۇن مەۋجۈت.',
    'uploaded'             => ':attribute يوللاش مەغلۇپ بولدى.',
    'url'                  => ':attribute ھۆججەت تىپى ئىناۋەتسىز.',
    'uuid'                 => 'The :attribute must be a valid UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
