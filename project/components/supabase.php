<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Supabase\Client;

$supabaseUrl = $_ENV['NEXT_PUBLIC_SUPABASE_URL'] ?? 'https://yzjhfcdvhmljctbfjymo.supabase.co';
$supabaseKey = $_ENV['NEXT_PUBLIC_SUPABASE_PUBLISHABLE_KEY'] ?? 'sb_publishable_4kUq6JNLMS4IHFLwOXv9QA_S2hgDY-L';

$supabase = new Client($supabaseUrl, $supabaseKey);

return $supabase;