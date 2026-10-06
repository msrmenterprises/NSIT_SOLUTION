<?php
header('Content-Type: application/json; charset=utf-8');

function respond($code, $message, $status = 200)
{
    http_response_code($status);
    echo json_encode(array('code' => $code, $code ? 'success' : 'err' => $message));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Please submit the enquiry form.', 405);
}

if (!empty($_POST['website'])) {
    respond(false, 'Unable to process this request.', 400);
}

$name = trim(isset($_POST['contact-name']) ? $_POST['contact-name'] : '');
$phone = trim(isset($_POST['contact-phone']) ? $_POST['contact-phone'] : '');
$email = trim(isset($_POST['contact-email']) ? $_POST['contact-email'] : '');
$message = trim(isset($_POST['contact-message']) ? $_POST['contact-message'] : '');

if ($name === '' || $phone === '' || $email === '' || $message === '') {
    respond(false, 'Please complete all required fields.', 422);
}

if (!preg_match('/^[0-9+() .-]{7,24}$/', $phone)) {
    respond(false, 'Please enter a valid phone number.', 422);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Please enter a valid email address.', 422);
}

$recipients = array('nsitlucknow@gmail.com', 'contact@nsit.org.in');
$recipient = implode(', ', $recipients);
$sender = getenv('NSIT_CONTACT_EMAIL') ?: 'contact@nsit.org.in';
if (!filter_var($sender, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Email delivery is not configured. Please contact the website administrator.', 503);
}
$subject = 'New website enquiry - NS IT Solutions';
$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$body = '<html><body>';
$body .= '<h2>New website enquiry</h2>';
$body .= '<p><strong>Name:</strong> ' . $safeName . '</p>';
$body .= '<p><strong>Phone:</strong> ' . $safePhone . '</p>';
$body .= '<p><strong>Email:</strong> ' . $safeEmail . '</p>';
$body .= '<p><strong>Message:</strong><br>' . $safeMessage . '</p>';
$body .= '</body></html>';

$headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: NS IT Solutions <' . $sender . '>',
    'Reply-To: ' . $safeEmail,
);

if (!mail($recipient, $subject, $body, implode("\r\n", $headers), '-f ' . $sender)) {
    respond(false, 'The mail service is unavailable. Please try again later.', 503);
}

respond(true, 'Your enquiry has been sent.');
