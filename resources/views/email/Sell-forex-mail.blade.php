
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rahat Forex Request</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; margin: 0;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; max-width: 600px; margin: auto; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #0a5275; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <h1 style="color: #ffffff; margin: 10px 0 0;"> Sell Forex Request</h1>
            </td>
        </tr>
        <tr>
            <td style="padding: 20px; color: #333333;">
                <p style="font-size: 16px; line-height: 1.5;">You have received a new sell forex request with the following details:</p>

                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-top: 20px;">
                    <tr>
                        <td style="padding: 8px 0;"><strong>Name:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Email:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px 0;"><strong>Mobile:</strong></td>
                        <td style="padding: 8px 0;">{{ $data['mobile'] }}</td>
                    </tr>
                </table>

                <p style="margin-top: 20px; font-size: 14px; color: #666666;">Please contact the user for further information or next steps.</p>
            </td>
        </tr>
        <tr>
            <td style="padding: 15px; text-align: center; background-color: #f1f1f1; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; font-size: 12px; color: #888888;">
                &copy; {{ date('Y') }} Rahat Sell Forex. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>

