<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry - S R Chemicals</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .email-wrapper { max-width: 600px; margin: 30px auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .email-header { background: #1a2340; padding: 24px 30px; text-align: center; }
        .email-header img { height: 50px; }
        .email-header h2 { color: #ffffff; margin: 10px 0 0; font-size: 20px; }
        .email-body { padding: 30px; }
        .email-body p { font-size: 15px; color: #444; line-height: 1.7; margin: 0 0 12px; }
        .field-row { background: #f7fbff; border-left: 4px solid #1a73e8; padding: 12px 16px; margin-bottom: 12px; border-radius: 4px; }
        .field-row strong { color: #1a2340; display: block; font-size: 13px; margin-bottom: 4px; }
        .field-row span { color: #333; font-size: 15px; }
        .email-footer { background: #f0f4f8; padding: 16px 30px; text-align: center; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h2>New Inquiry — S R Chemicals</h2>
        </div>
        <div class="email-body">
            <p>You have received a new inquiry from the contact form on <strong>srchems.com</strong>.</p>

            <div class="field-row">
                <strong>Name</strong>
                <span>{{ $name }}</span>
            </div>

            <div class="field-row">
                <strong>Email</strong>
                <span>{{ $email }}</span>
            </div>

            <div class="field-row">
                <strong>Message</strong>
                <span>{{ $msg }}</span>
            </div>
        </div>
        <div class="email-footer">
            S R Chemicals &nbsp;|&nbsp; Plot No. 1917 & C-1/1918, G.I.D.C., Panoli, Bharuch - 394116, Gujarat, India<br>
            Phone: 9913645555 &nbsp;|&nbsp; Email: info@srchems.com
        </div>
    </div>
</body>
</html>
