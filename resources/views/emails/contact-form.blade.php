<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f4f4f4;
            padding: 20px 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #16acac;
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
        }
        .header h2 {
            margin: 0 0 10px 0;
            font-size: 24px;
            color: #ffffff;
        }
        .header p {
            margin: 0;
            font-size: 14px;
            color: #ffffff;
        }
        .content {
            background-color: #ffffff;
            padding: 40px 30px;
        }
        .field {
            margin-bottom: 25px;
        }
        .field-label {
            font-weight: bold;
            color: #16acac;
            margin-bottom: 8px;
            display: block;
            font-size: 14px;
        }
        .field-value {
            color: #666;
            padding: 12px 15px;
            background-color: #f9f9f9;
            border-left: 4px solid #16acac;
            border-radius: 4px;
            word-wrap: break-word;
        }
        .footer {
            background-color: #e0ffff;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f4;">
            <tr>
                <td align="center" style="padding: 20px 0;">
                    <table class="email-container" width="600" cellpadding="0" cellspacing="0" border="0" style="max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden;">
                        <!-- Header -->
                        <tr>
                            <td class="header" style="background-color: #16acac; color: #ffffff; padding: 30px 20px; text-align: center;">
                                <h2 style="margin: 0 0 10px 0; font-size: 24px; color: #ffffff;">New Contact Form Submission</h2>
                                <p style="margin: 0; font-size: 14px; color: #ffffff;">Faizan Rehabilitation Centre</p>
                            </td>
                        </tr>
                        <!-- Content -->
                        <tr>
                            <td class="content" style="background-color: #ffffff; padding: 40px 30px;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td style="padding-bottom: 25px;">
                                            <div style="font-weight: bold; color: #16acac; margin-bottom: 8px; font-size: 14px;">Name:</div>
                                            <div style="color: #666; padding: 12px 15px; background-color: #f9f9f9; border-left: 4px solid #16acac; border-radius: 4px; word-wrap: break-word;">{{ $name }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 25px;">
                                            <div style="font-weight: bold; color: #16acac; margin-bottom: 8px; font-size: 14px;">Email:</div>
                                            <div style="color: #666; padding: 12px 15px; background-color: #f9f9f9; border-left: 4px solid #16acac; border-radius: 4px; word-wrap: break-word;">{{ $email }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 25px;">
                                            <div style="font-weight: bold; color: #16acac; margin-bottom: 8px; font-size: 14px;">Phone Number:</div>
                                            <div style="color: #666; padding: 12px 15px; background-color: #f9f9f9; border-left: 4px solid #16acac; border-radius: 4px; word-wrap: break-word;">{{ $phone }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="font-weight: bold; color: #16acac; margin-bottom: 8px; font-size: 14px;">Message:</div>
                                            <div style="color: #666; padding: 12px 15px; background-color: #f9f9f9; border-left: 4px solid #16acac; border-radius: 4px; word-wrap: break-word;">{{ $userMessage }}</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                            <td class="footer" style="background-color: #e0ffff; padding: 20px; text-align: center; color: #666; font-size: 12px;">
                                <p style="margin: 5px 0;">This email was sent from the contact form on Faizan Rehabilitation Center website.</p>
                                <p style="margin: 5px 0;">&copy; {{ date('Y') }} Faizan Rehabilitation Center. All rights reserved.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

