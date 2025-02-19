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
    'accepted'             => 'Ang :attribute ay dapat tanggapin.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'Ang :attribute ay hindi balidong URL.',
    'after'                => 'Ang :attribute ay dapat petsa pagkatapos ng :date.',
    'after_or_equal'       => 'Ang :attribute ay dapat na isang petsa pagkatapos o katumbas ng :date.',
    'alpha'                => 'Ang :attribute ay maaaring magtaglay ng mga letra lang.',
    'alpha_dash'           => 'Ang :attribute ay maaaring magtaglay ng mga letra, numero at gitling lang.',
    'alpha_num'            => 'Ang :attribute ay maaaring magtaglay ng mga letra at numero lang.',
    'array'                => 'Ang :attribute ay dapat magkakasunod.',
    'before'               => 'Ang :attribute ay dapat petsa bago ang :date.',
    'before_or_equal'      => 'Ang :attribute ay dapat na isang petsa bago o katumbas ng :date.',
    'between'              => [
        'array'   => 'Ang :attribute ay dapat nasa pagitan ng :min at :max items.',
        'file'    => 'Ang :attribute ay dapat nasa pagitan ng :min at :max kilobytes.',
        'numeric' => 'Ang :attribute ay dapat nasa pagitan ng :min at :max.',
        'string'  => 'Ang :attribute ay dapat nasa pagitan ng :min at :max characters.',
    ],
    'boolean'              => 'Ang :attribute ng attribute ay dapat tama o mali.',
    'confirmed'            => 'Ang :attribute ng attribute ay hindi magkatugma.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Ang :attribute ay hindi balidong petsa.',
    'date_equals'          => ':attribute ay dapat na isang petsa na katumbas ng :date.',
    'date_format'          => 'Ang :attribute ay hindi katugma ng format :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'Ang :attribute at :other pa ay dapat magkaiba.',
    'digits'               => 'Ang :attribute ay dapat :digits digits.',
    'digits_between'       => 'Ang :attribute ay dapat nasa pagitan ng :min at :max digits.',
    'dimensions'           => 'Ang :attribute ay may di-wastong sukat ng imahe.',
    'distinct'             => 'Ang :attribute ng attribute ay may katulad na balyu.',
    'email'                => 'Ang :attribute ay dapat balidong email address.',
    'ends_with'            => ':attribute ang dapat magtapos sa isa sa mga sumusunod: :values.',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'Ang piniling :attribute ay imbalido.',
    'file'                 => 'Ang :attribute ay dapat na isang talaksan.',
    'filled'               => 'Ang :attribute ng attribute ay kailangan.',
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
    'image'                => 'Ang :attribute ay dapat isang imahe.',
    'in'                   => 'Ang piniling :attribute ay imbalido.',
    'in_array'             => 'Ang :attribute ng attribute ay wala sa :other.',
    'integer'              => 'Ang :attribute ay dapat isang integer.',
    'ip'                   => 'Ang :attribute ay dapat isang balidong IP address.',
    'ipv4'                 => 'Ang :attribute ay dapat na isang wastong Ipbagong address.',
    'ipv6'                 => 'Ang :attribute ay dapat na isang balidong Ipbagong address.',
    'json'                 => 'Ang :attribute ay dapat isang balidong JSON string.',
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
        'array'   => 'Ang :attribute ay hindi maaaring higit sa :max items.',
        'file'    => 'Ang :attribute ay hindi maaaring higit sa  :max kilobytes.',
        'numeric' => 'Ang :attribute ay hindi maaaring higit sa  :max.',
        'string'  => 'Ang :attribute ay hindi maaaring higit sa :max characters.',
    ],
    'mimes'                => 'Ang :attribute ay dapat file ng uri na: :values.',
    'mimetypes'            => 'Ang :attribute ay dapat na isang talaksan ng uri: :values.',
    'min'                  => [
        'array'   => 'Ang :attribute ay dapat di-kukulangin sa :min items.',
        'file'    => 'Ang :attribute ay dapat di-kukulangin sa :min kilobytes.',
        'numeric' => 'Ang :attribute ay dapat di-kukulangin sa :min.',
        'string'  => 'Ang :attribute ay dapat di-kukulangin sa :min characters.',
    ],
    'multiple_of'          => 'Ang :attribute ay dapat na maramihang ng :value',
    'not_in'               => 'Ang piniling :attribute ay imbalido.',
    'not_regex'            => 'Hindi tanggap ang :attribute na anyo.',
    'numeric'              => 'Ang :attribute ay dapat isang numero.',
    'password'             => 'Ang password ay hindi tama.',
    'present'              => 'Ang :attribute ng attribute ay dapat naroon.',
    'prohibited'           => 'Ang patlang na :attribute ay ipinagbabawal.',
    'prohibited_if'        => 'Ang :attribute patlang ay ipinagbabawal kapag :other ay :value.',
    'prohibited_unless'    => 'Ang :attribute patlang ay ipinagbabawal maliban kung :other ay nasa :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'Ang :attribute ng attribute ay imbalido.',
    'required'             => 'Ang :attribute ng attribute ay kailangan.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values',
    'required_if'          => 'Ang :attribute ng attribute ay kailangan kapag :other iba ay :value.',
    'required_unless'      => 'Ang :attribute ng attribute ay kailangan maliban kung :other iba ay nasa :values.',
    'required_with'        => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_with_all'    => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without'     => 'Ang :attribute ng attribute ay kailangan kapag :values balyu ang naroon.',
    'required_without_all' => 'Ang :attribute ng attribute ay kailangan kapag wala sa :values balyu ang naroon.',
    'same'                 => 'Ang :attribute at :other pa ay dapat magtugma.',
    'size'                 => [
        'array'   => 'Ang :attribute ay dapat magtaglay ng :size sa items.',
        'file'    => 'Ang :attribute ay dapat :size sukat sa kilobytes.',
        'numeric' => 'Ang :attribute ay dapat :size sukat.',
        'string'  => 'Ang :attribute ay dapat :size sukat sa characters.',
    ],
    'starts_with'          => 'Ang :attribute ay dapat magsimula sa isa sa mga sumusunod: :values.',
    'string'               => 'Ang  :attribute ay dapat isang string.',
    'timezone'             => 'Ang :attribute ay dapat isang balidong sona.',
    'unique'               => 'Ang :attribute ay nakuha na.',
    'uploaded'             => 'Nabigo ang :attribute upang i-upload.',
    'url'                  => 'Ang :attribute ng attribute ay imbalido.',
    'uuid'                 => ':attribute ay dapat na isang wastong UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'pasadyang-mensahe',
        ],
    ],
];
