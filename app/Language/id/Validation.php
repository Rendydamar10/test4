<?php

// override core en language system validation or define your own en language validation message
// app/Language/id/Validation.php

return [
    'required' => '{field} wajib diisi.',
    'valid_email' => 'Isian {field} harus berupa alamat email yang valid.',
    'is_unique' => '{field} sudah terdaftar.',
    'alpha_numeric' => '{field} hanya boleh berisi karakter alfanumerik.',
    'min_length' => 'Panjang {field} setidaknya {param} karakter.',
];
