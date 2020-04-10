<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/admin/css/admin.css">
    <script type="text/javascript">
        window.Laravel = {!! json_encode([
                'baseUrl' => url('/'),
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body>
    <div id="app"></div>

    <script src="/admin/js/admin.js" defer></script>
    <script src="/js/admin/app.js"></script>
</body>
</html>
