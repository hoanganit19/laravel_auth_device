<?php
function generateOtp($email)
{
    $otp = new Otp();
    $otp = $otp->generate($email, 6, 10);
    return $otp->token;
}

function validateOtp($email, $token)
{
    $otp = new Otp();
    $otp = $otp->validate($email, $token);
    return $otp->status;
}
