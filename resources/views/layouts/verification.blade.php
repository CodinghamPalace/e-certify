<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Certificate Verification' }} — e-Certify | DICT Quezon 4A</title>
    
    <!-- Bootstrap 5.3 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    
    <style>
        :root {
            --dict-blue: #003087;
            --dict-blue-dk: #00205b;
            --dict-gold: #f5a623;
        }

        body {
            background: #f0f4f9;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 1.25rem 0;
            margin-bottom: 3rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: var(--dict-blue-dk);
        }

        .header-brand:hover {
            color: var(--dict-blue);
        }

        .header-brand img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .brand-text .brand-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: -2px;
        }

        .brand-text .brand-sub {
            font-size: 0.8rem;
            color: #64748b;
        }

        .verification-container {
            flex: 1;
            padding-bottom: 4rem;
        }

        .footer {
            background: #fff;
            border-top: 1px solid #e2e8f0;
            padding: 2rem 0;
            margin-top: auto;
            color: #64748b;
            font-size: 0.875rem;
        }

        .footer .authority-title {
            color: var(--dict-blue-dk);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        /* Common Verification Cards Styling */
        .verification-card {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e9eef5;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            padding: 2.5rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/" class="header-brand">
                <img src="{{ asset('dict-logo-small.png') }}" alt="DICT Logo">
                <div class="brand-text">
                    <div class="brand-title">e-Certify</div>
                    <div class="brand-sub">Verification Portal</div>
                </div>
            </a>
        </div>
    </header>

    <main class="verification-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container text-center">
            <div class="authority-title text-uppercase">Department of Information and Communications Technology</div>
            <div class="mb-2">Quezon Provincial Office - Region 4A</div>
            <div class="small">
                e-Certify &copy; {{ date('Y') }} | Automated Certificate Generation and Verification System
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
