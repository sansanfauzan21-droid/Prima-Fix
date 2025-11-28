<?php

/**
 * PHP Email Form - v3.6
 * URL: https://bootstrapmade.com/php-email-form/
 * Author: BootstrapMade.com
 */

class PHP_Email_Form {

  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $message = '';
  public $headers = '';
  public $ajax = false;
  public $content_type = 'text/html';
  public $smtp = false;

  public $messages = array();
  public $attachments = array();

  public function add_message($content, $label = '') {
    $this->messages[] = array('content' => $content, 'label' => $label);
  }

  public function add_attachment($file_path, $file_name = '') {
    if (empty($file_name)) {
      $file_name = basename($file_path);
    }
    $this->attachments[] = array('path' => $file_path, 'name' => $file_name);
  }

  public function send() {

    $this->prepare_headers();

    if ($this->smtp) {
      return $this->send_smtp();
    } else {
      return $this->send_mail();
    }

  }

  private function prepare_headers() {

    $this->headers = 'From: ' . $this->from_name . ' <' . $this->from_email . '>' . "\r\n";
    $this->headers .= 'Reply-To: ' . $this->from_email . "\r\n";
    $this->headers .= 'X-Mailer: PHP/' . phpversion();

    if ($this->content_type == 'text/html') {
      $this->headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    } else {
      $this->headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
    }

    if (!empty($this->attachments)) {
      $this->headers .= 'Content-Type: multipart/mixed; boundary="boundary"' . "\r\n";
    }

  }

  private function prepare_message() {

    $this->message = '';

    if ($this->content_type == 'text/html') {
      $this->message .= '<html><body>';
    }

    foreach ($this->messages as $message) {
      if (!empty($message['label'])) {
        $this->message .= '<strong>' . $message['label'] . ':</strong> ';
      }
      $this->message .= $message['content'] . '<br>';
    }

    if ($this->content_type == 'text/html') {
      $this->message .= '</body></html>';
    }

  }

  private function send_mail() {

    $this->prepare_message();

    $to = $this->to;
    $subject = $this->subject;
    $message = $this->message;
    $headers = $this->headers;

    if (!empty($this->attachments)) {
      $boundary = 'boundary';
      $headers .= 'Content-Type: multipart/mixed; boundary="' . $boundary . '"' . "\r\n";
      $message = '--' . $boundary . "\r\n";
      $message .= 'Content-Type: text/html; charset=UTF-8' . "\r\n\r\n";
      $message .= $this->message . "\r\n\r\n";
      foreach ($this->attachments as $attachment) {
        $message .= '--' . $boundary . "\r\n";
        $message .= 'Content-Type: application/octet-stream; name="' . $attachment['name'] . '"' . "\r\n";
        $message .= 'Content-Transfer-Encoding: base64' . "\r\n";
        $message .= 'Content-Disposition: attachment; filename="' . $attachment['name'] . '"' . "\r\n\r\n";
        $message .= chunk_split(base64_encode(file_get_contents($attachment['path']))) . "\r\n";
      }
      $message .= '--' . $boundary . '--';
    }

    if (mail($to, $subject, $message, $headers)) {
      if ($this->ajax) {
        return 'OK';
      } else {
        return true;
      }
    } else {
      if ($this->ajax) {
        return 'Error: Unable to send email';
      } else {
        return false;
      }
    }

  }

  private function send_smtp() {

    // SMTP implementation would go here
    // For now, fall back to mail()

    return $this->send_mail();

  }

}

?>
