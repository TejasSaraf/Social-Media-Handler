<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Membership</title>
</head>
<body>
    <h2>Get Membership</h2>

    <form>
        <label for="UserId">
            E-Mail ID     
        </label>
        <input type="text" size="25">
        <br>

        <label for="MembershipDuration">
            Membership Duration:
        </label>
        <select name="membership" id="membership">
            <option value="1 Month">1 Month Rs.500</option>
            <option value="3 Month">3 Month Rs.1200</option>
            <option value="6 Month">6 Month Rs.2500</option>
        </select>
        <br>
        <button type="button">Go for Payment</button>
        <button type="button">Cancel</button>
</form>
</body>
</html>