<?php
require_once __DIR__ . '/../../includes/auth.php';
logout_admin();
header('Location: ' . base_path('/app1/public/admin/login.php'));
exit;