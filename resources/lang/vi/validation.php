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

    'accepted' => 'Thuộc tính :phải được chấp nhận.',
    'accepted_if' => 'Thuộc tính :phải được chấp nhận khi :other là :value.',
    'active_url' => 'Thuộc tính :không phải là URL hợp lệ.',
    'after' => 'Thuộc tính :phải là ngày sau :date.',
    'after_or_equal' => 'Thuộc tính :phải là ngày sau hoặc bằng :date.',
    'alpha' => 'Thuộc tính :chỉ được chứa các chữ cái.',
    'alpha_dash' => 'Thuộc tính :chỉ được chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới.',
    'alpha_num' => 'Thuộc tính :chỉ được chứa các chữ cái và số.',
    'array' => 'Thuộc tính :phải là một mảng.',
    'before' => 'Thuộc tính :phải là ngày trước :date.',
    'before_or_equal' => 'Thuộc tính : phải là ngày trước hoặc bằng :date.',
    'between' => [
        'numeric' => 'Thuộc tính :phải nằm trong khoảng từ :min đến :max.',
        'file' => 'Thuộc tính :phải nằm trong khoảng từ :min đến :max kilobyte.',
        'string' => 'Thuộc tính :phải nằm trong khoảng từ :min đến :max ký tự.',
        'array' => 'Thuộc tính :phải có từ :min đến :max mục.',
    ],
    'boolean' => 'Trường :thuộc tính phải là true hoặc false.',
    'confirmed' => 'Xác nhận :thuộc tính không khớp.',
    'current_password' => 'Mật khẩu không đúng.',
    'date' => 'Thuộc tính :không phải là ngày hợp lệ.',
    'date_equals' => 'Thuộc tính :phải là ngày bằng :date.',
    'date_format' => 'Thuộc tính :không khớp với định dạng :format.',

    'declined' => 'Phải từ chối :attribute.',
    'declined_if' => 'Phải từ chối :attribute khi :other là :value.',
    'different' => 'Phải khác :attribute và :other.',
    'digits' => 'Phải là :digits số.',
    'digits_between' => 'Phải nằm giữa :min và :max số.',
    'dimensions' => 'Có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Trường :attribute có giá trị trùng lặp.',
    'email' => 'Phải là địa chỉ email hợp lệ.',
    'ends_with' => 'Phải kết thúc :attribute bằng một trong các giá trị sau: :values.',
    'enum' => 'Thuộc tính đã chọn không hợp lệ.',
    'exists' => 'Thuộc tính đã chọn không hợp lệ.',
    'file' => 'Thuộc tính :attribute phải là một tệp.',
    'filled' => 'Trường :attribute phải có giá trị.',
    'gt' => [
        'numeric' => ':attribute phải lớn hơn :value.',
        'file' => ':attribute phải lớn hơn :value kilobyte.',
        'string' => ':attribute phải lớn hơn :value ký tự.',
        'array' => ':attribute phải có nhiều hơn :value mục.',
    ],
    'gte' => [
        'numeric' => ':attribute phải lớn hơn hoặc bằng :value.',
        'file' => ':attribute phải lớn hơn hoặc bằng :value kilobyte.',
        'string' => ':attribute phải lớn hơn hoặc bằng :value ký tự.',
        'array' => ':attribute phải có :value mục hoặc nhiều hơn.',
    ],
    'image' => ':attribute phải là một hình ảnh.',
    'in' => 'Thuộc tính đã chọn không hợp lệ.',
    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => 'Thuộc tính :phải là số nguyên.',
    'ip' => 'Thuộc tính :phải là địa chỉ IP hợp lệ.',
    'ipv4' => 'Thuộc tính :phải là địa chỉ IPv4 hợp lệ.',
    'ipv6' => 'Thuộc tính :phải là địa chỉ IPv6 hợp lệ.',
    'mac_address' => 'Thuộc tính :phải là địa chỉ MAC hợp lệ.',
    'json' => 'Thuộc tính :phải là chuỗi JSON hợp lệ.',
    'lt' => [
        'numeric' => 'Thuộc tính :phải nhỏ hơn :value.',
        'file' => 'Thuộc tính :phải nhỏ hơn :value kilobyte.',
        'string' => 'Thuộc tính :phải nhỏ hơn :value ký tự.',

        'array' => 'Thuộc tính :phải có ít hơn :value các mục.',
    ],
    'lte' => [
        'numeric' => 'Thuộc tính : phải nhỏ hơn hoặc bằng :value.',
        'file' => 'Thuộc tính : phải nhỏ hơn hoặc bằng :value kilobyte.',
        'string' => 'Thuộc tính : phải nhỏ hơn hoặc bằng :value ký tự.',
        'array' => 'Thuộc tính : không được có nhiều hơn :value mục.',
    ],
    'max' => [
        'numeric' => 'Thuộc tính : không được lớn hơn :max.',
        'file' => 'Thuộc tính : không được lớn hơn :max kilobyte.',
        'string' => 'Thuộc tính : không được lớn hơn :max ký tự.',
        'array' => 'Thuộc tính : không được có nhiều hơn :max mục.',
    ],
    'mimes' => 'Thuộc tính : phải là tệp có kiểu: :values.',
    'mimetypes' => 'Thuộc tính :attribute phải là một tệp có kiểu: :values.',
    'min' => [
        'numeric' => ':attribute phải có ít nhất :min.',
        'file' => ':attribute phải có ít nhất :min kilobyte.',
        'string' => ':attribute phải có ít nhất :min ký tự.',
        'array' => ':attribute phải có ít nhất :min mục.',
    ],
    'multiple_of' => ':attribute phải là bội số của :value.',
    'not_in' => ':attribute đã chọn không hợp lệ.',
    'not_regex' => ':attribute định dạng không hợp lệ.',
    'numeric' => ':attribute phải là một số.',
    'password' => 'Mật khẩu không đúng.',
    'present' => 'Trường :attribute phải có mặt.',
    'prohibited' => 'Trường :attribute là prohibited.',
    'prohibited_if' => 'Trường :attribute bị cấm khi :other là :value.',
    'prohibited_unless' => 'Trường :attribute bị cấm trừ khi :other nằm trong :values.',
    'prohibits' => 'Trường :attribute cấm :other không được có mặt.',
    'regex' => 'Định dạng :attribute không hợp lệ.',
    'required' => 'Trường :attribute là bắt buộc.',
    'required_if' => 'Trường :attribute là bắt buộc khi :other là :value.',
    'required_unless' => 'Trường :attribute là bắt buộc trừ khi :other nằm trong :values.',
    'required_with' => 'Trường :attribute là bắt buộc khi :values ​​có mặt.',
    'required_with_all' => 'Trường :attribute là bắt buộc khi :values ​​có mặt.',
    'required_without' => 'Trường :attribute là bắt buộc khi không có :values.',
    'required_without_all' => 'Trường :attribute là bắt buộc khi không có :values ​​nào.',
    'same' => 'Cấu trúc :attribute và :other phải khớp nhau.',
    'size' => [
        'numeric' => 'Cấu trúc :attribute phải là :size.',
        'file' => 'Cấu trúc :attribute phải là :size kilobyte.',
        'string' => 'Cấu trúc :attribute phải là :size ký tự.',
        'array' => 'Cấu trúc :attribute phải chứa các mục :size.',
    ],
    'starts_with' => 'Cấu trúc :attribute phải bắt đầu bằng một trong các ký tự sau: :values.',
    'string' => 'Cấu trúc :attribute phải là một chuỗi.',
    'timezone' => 'Cấu trúc :attribute phải là một múi giờ hợp lệ.',
    'unique' => 'Cấu trúc :attribute đã được sử dụng.',

    'uploaded' => 'Không tải được :attribute.',
    'url' => ' :attribute phải là một URL hợp lệ.',
    'uuid' => ' :attribute phải là một UUID hợp lệ.',
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

    'attributes' => [],

];
