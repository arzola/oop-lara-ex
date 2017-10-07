<?php

// TODO Refactorizar código para lograr divide y venceras y comprobar con phpunit el refactoring, para estar seguros del resultado adecuado.

function sendMail($to, $processor = null)
{
    $mail = ($processor) ? $processor : new PHPMailer;
    $send = $mail->from('os@icode.mx')
        ->to($to)
        ->message('Hello')
        ->send();

    return $send;
}

function sendMailWithAttachment($to, $attachments, $processor = null)
{
    $mail = ($processor) ? $processor : new PHPMailer;
    $send = $mail->from('os@icode.mx')
        ->to($to)
        ->message('Hello')
        ->attachments($attachments)
        ->send();

    return $send;
}

