<?php
return [
    'base_route'      => 'admin/filemanager',
    'middleware'      => ['web', 'auth'],
    'allow_format'    => 'jpeg,jpg,JPG,png,gif,webp,pdf',
    'max_size'        => 20000,
    'max_image_width' => 1264,
    'image_quality'   => 50,
];