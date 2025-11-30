<?php
function h($s) { return htmlspecialchars($s ?? '', ENT_QUOTES); }

$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$gender = $_POST['gender'] ?? '';
$course = $_POST['course'] ?? '';
$address = $_POST['address'] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration Success</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body { font-family: Arial, sans-serif; background:#f4f7fb; margin:0; padding:32px; }
    .card { max-width:760px; margin:20px auto; background:#fff; padding:20px; border-radius:10px; box-shadow:0 6px 20px rgba(0,0,0,0.06); }
    h2 { margin-top:0; color:#2a9df4; }
    .row { display:flex; gap:18px; margin-bottom:10px; flex-wrap:wrap; }
    .label { width:180px; color:#666; font-weight:600; }
    .value { flex:1; background:#fbfdff; padding:8px 10px; border-radius:6px; border:1px solid #eef4fb; }
    .back { display:inline-block; margin-top:16px; text-decoration:none; padding:8px 12px; border-radius:8px; background:#eee; color:#333;}
  </style>
</head>
<body>
  <div class="card">
    <h2>Registration Successful</h2>
    <p>Your application has been received — below are the details you submitted:</p>

    <div class="row"><div class="label">Full Name</div><div class="value"><?= h($fullname) ?></div></div>
    <div class="row"><div class="label">Email</div><div class="value"><?= h($email) ?></div></div>
    <div class="row"><div class="label">Phone</div><div class="value"><?= h($phone) ?></div></div>
    <div class="row"><div class="label">Gender</div><div class="value"><?= h($gender) ?></div></div>
    <div class="row"><div class="label">Course Interested</div><div class="value"><?= h($course) ?></div></div>
    <div class="row"><div class="label">Address</div><div class="value"><?= nl2br(h($address)) ?></div></div>

    <a class="back" href="index.html">← Back to form</a>
  </div>
</body>
</html>