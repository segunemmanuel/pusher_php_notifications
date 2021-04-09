<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'us2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    'a0f8bf64d11a4646118b',
    '0b9384bcb11ee5747ccd',
    '1185977',
    $options
  );

  $data['message'] = 'People';
  $pusher->trigger('Event-1', 'my-event', $data);
?>