<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | S R Chemicals</title>
    <link href="{{ asset('assets/images/favicon/favicon_1.jpg') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #07101e 0%, #0c1e3d 60%, #142a52 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }
        .login-card {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.35);
            overflow: hidden;
        }
        .login-header {
            background: #ffffff;
            padding: 36px 32px 24px;
            text-align: center;
            border-bottom: 1px solid #f1f5f9;
        }
        .login-header img {
            height: 52px;
            margin-bottom: 16px;
        }
        .login-header h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 22px;
            font-weight: 800;
            color: #0c1e3d;
            margin-bottom: 4px;
        }
        .login-header p {
            color: #64748b;
            font-size: 13px;
            margin: 0;
        }
        .login-body {
            padding: 32px;
        }
        .btn-login {
            background-color: #e8792a;
            border-color: #e8792a;
            color: #ffffff;
            font-weight: 600;
            padding: 11px;
            font-size: 15px;
            transition: all 0.2s;
        }
        .btn-login:hover {
            background-color: #d3681d;
            border-color: #d3681d;
            color: #ffffff;
        }
        .form-control:focus {
            border-color: #e8792a;
            box-shadow: 0 0 0 0.25rem rgba(232, 121, 42, 0.2);
        }
        /* High-visibility Red Validation Messaging */
        .is-invalid {
            border-color: #dc3545 !important;
        }
        .is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
        }
        .invalid-msg {
            color: #dc3545 !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            margin-top: 6px !important;
            display: flex !important;
            align-items: center !important;
            gap: 5px !important;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <img src="{{ asset('assets/images/logo/logo.1.jpg') }}" alt="S R Chemicals">
            <h1>S R Chemicals</h1>
            <p>Admin Portal &amp; Blog Management</p>
        </div>

        <div class="login-body">
            @if(session('info'))
                <div class="alert alert-info py-2 px-3 small mb-3">
                    <i class="bi bi-info-circle me-1"></i> {{ session('info') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger py-2 px-3 small mb-3 border-danger">
                    <div class="fw-bold mb-1 text-danger d-flex align-items-center gap-1">
                        <i class="bi bi-exclamation-triangle-fill"></i> Login Error
                    </div>
                    <ul class="mb-0 ps-3 text-danger fw-semibold" style="font-size: 13px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" id="adminLoginForm" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label small fw-semibold text-secondary">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted border-end-0 @error('email') border-danger @enderror" id="emailGroupIcon"><i class="bi bi-envelope"></i></span>
                        <input type="text" class="form-control border-start-0 @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', 'admin@srchems.com') }}" autofocus placeholder="name@company.com">
                    </div>
                    <div id="emailErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('email')
                        <div class="invalid-msg" id="emailErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label small fw-semibold text-secondary">Password</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted border-end-0 @error('password') border-danger @enderror" id="passwordGroupIcon"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control border-start-0 @error('password') is-invalid @enderror" id="password" name="password" placeholder="••••••••">
                    </div>
                    <div id="passwordErrorClient" class="invalid-msg" style="display: none;"></div>
                    @error('password')
                        <div class="invalid-msg" id="passwordErrorServer"><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label small text-muted" for="remember">
                            Remember me
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-login w-100 rounded-3">
                    Sign In to Admin
                </button>
            </form>

            <div class="text-center mt-4 pt-3 border-top">
                <a href="{{ route('home') }}" class="text-decoration-none small text-muted">
                    <i class="bi bi-arrow-left me-1"></i> Return to Public Site
                </a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('adminLoginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const emailErr = document.getElementById('emailErrorClient');
        const passwordErr = document.getElementById('passwordErrorClient');
        const emailIcon = document.getElementById('emailGroupIcon');
        const passwordIcon = document.getElementById('passwordGroupIcon');

        function validateEmail(val) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(val).toLowerCase());
        }

        emailInput.addEventListener('input', function () {
            this.classList.remove('is-invalid');
            if (emailIcon) emailIcon.classList.remove('border-danger');
            if (emailErr) emailErr.style.display = 'none';
            const srv = document.getElementById('emailErrorServer');
            if (srv) srv.style.display = 'none';
        });

        passwordInput.addEventListener('input', function () {
            this.classList.remove('is-invalid');
            if (passwordIcon) passwordIcon.classList.remove('border-danger');
            if (passwordErr) passwordErr.style.display = 'none';
            const srv = document.getElementById('passwordErrorServer');
            if (srv) srv.style.display = 'none';
        });

        form.addEventListener('submit', function (e) {
            let isValid = true;
            const emailVal = emailInput.value.trim();
            const passVal = passwordInput.value;

            // Email check
            if (!emailVal) {
                isValid = false;
                emailInput.classList.add('is-invalid');
                if (emailIcon) emailIcon.classList.add('border-danger');
                emailErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Please enter your registered admin email address.';
                emailErr.style.display = 'flex';
            } else if (!validateEmail(emailVal)) {
                isValid = false;
                emailInput.classList.add('is-invalid');
                if (emailIcon) emailIcon.classList.add('border-danger');
                emailErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Please provide a valid email address format (e.g., admin@srchems.com).';
                emailErr.style.display = 'flex';
            }

            // Password check
            if (!passVal) {
                isValid = false;
                passwordInput.classList.add('is-invalid');
                if (passwordIcon) passwordIcon.classList.add('border-danger');
                passwordErr.innerHTML = '<i class="bi bi-exclamation-circle-fill"></i> Please enter your account password.';
                passwordErr.style.display = 'flex';
            }

            if (!isValid) {
                e.preventDefault();
                const firstInvalid = form.querySelector('.is-invalid');
                if (firstInvalid) firstInvalid.focus();
            }
        });
    });
    </script>
</body>
</html>
