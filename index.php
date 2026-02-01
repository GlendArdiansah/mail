<?php
/*
 *
 * Deobfuscated by @Devthepros
 * Message me for problems/deobfuscations!
 * Channel : https://t.me/+3U7aSFWxWNllZTIx
 * 
 */
error_reporting(0);
set_time_limit(0);
$message_base = "Message Here";
$action = "";
$message = "ilpasha";
$emaillist = "";
$from = "";
$reconnect = "0";
$epriority = "";
$my_smtp = "";
$ssl_port = "587";
$encodety = "";
$replyto = "";
$subject = "Yes";
$realname = "Yes Man";
$subject_base = "Subject Here";
$realname_base = "Support";
$contenttype = "";
$isbcc = "";
$nbcc = "50";
$default_system = "";
$from_base = "";
$debg = 0;
$pause = 0;
$pemails = 0;
$nm = 0;
$nopose = true;
$nrotat = 0;
$curentsmtp = 0;
$canrotat = false;
$allsmtps = "";
$lase = true;
$reading = false;
$repaslog = true;
$uploadfile = "";
if (!empty($_POST)) {
    if (!empty($_POST['from'])) {
        $from = lrtrim($_POST['from']);
        $from_base = $from;
    }
    $action = lrtrim($_POST['action']);
    $message = lrtrim($_POST['message']);
    $message_base = lrtrim($_POST['message']);
    $emaillist = lrtrim($_POST['emaillist']);
    $reconnect = lrtrim($_POST['reconnect']);
    $epriority = lrtrim($_POST['epriority']);
    $my_smtp = lrtrim($_POST['my_smtp']);
    $subject = lrtrim($_POST['subject']);
    $realname = lrtrim($_POST['realname']);
    $subject_base = lrtrim($_POST['subject']);
    $realname_base = lrtrim($_POST['realname']);
    $contenttype = lrtrim($_POST['contenttype']);
    $encodety = $_POST['encodety'];
    if (!empty($_POST['pause'])) {
        $pause = $_POST['pause'];
    }
    if (!empty($_POST['replyto'])) {
        $replyto = lrtrim($_POST['replyto']);
    }
    if (!empty($_POST['nrotat'])) {
        $nrotat = $_POST['nrotat'];
    }
    if (!empty($_POST['pemails'])) {
        $pemails = $_POST['pemails'];
    }
    if (!empty($_POST['lase'])) {
        $lase = true;
    }
    if (!empty($_POST['nbcc'])) {
        $nbcc = lrtrim($_POST['nbcc']);
    }
    $allsmtps = preg_split("/\\r\\n|\\r|\\n/", $my_smtp);
    if (!empty($_POST['readingconf'])) {
        $reading = true;
    }
    if (!empty($_POST['repaslog'])) {
        $repaslog = true;
    }
    if (!empty($_POST['debg'])) {
        $debg = 2;
    }
}
if (empty($_GET["sending"])) {
    ?>

<html>

<head>

    <title>LuFix.to Sender v1.0</title>

	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <link href='css/sender.min.css' rel='stylesheet' type='text/css'>

</head>

<body style="transform: scale(0.7);margin-top: -235;height:1300;">

    <div class="m-5">

		<h1 align="center">

			<a target="_blank" href="https://lufix.to"><b>LuFix.to</b></a> Sender

		</h1>

        <div class="row">

            <div class="col-md-12">

			<form id="form" name="form" method="post" action="" enctype="multipart/form-data">

				<div id="accordion">

				  <div class="card">

					<div class="card-header">

					  <h4 class="card-title w-100">

						<a class="d-block w-100" data-toggle="collapse" href="#collapseThree">

						  Instruction

						</a>

					  </h4>

					</div>

					<div id="collapseThree" class="collapse" data-parent="#accordion">

					  <div class="card-body">

						<ul>

							<li><b>How to use:</b> <a target="_blank" href="https://lufix.to/lufix-sender">Tutorial</a></li><br>

							<li>[-email-] : <b>Reciver Email</b> (emailuser@emaildomain.com)</li>

							<ul>

								<li>[-emailuser-] : <b>Email User</b> (emailuser) </li>

								<li>[-emaildomain-] : <b>Email User</b> (emaildomain.com) </li>

							</ul>

							<li>[-time-] : <b>Date and Time</b> (03/04/2021 02:41:23 pm)</li>

							

							<li>[-randomstring-] : <b>Random string (0-9,a-z)</b></li>

							<li>[-randomnumber-] : <b>Random number (0-9) </b></li>

							<li>[-randomletters-] : <b>Random Letters(a-z) </b></li>

							<li>[-randommd5-] : <b>Random MD5 </b></li>

						</ul>

						<h4>example</h4>

						Receiver Email = <b>user@domain.com</b><br>

						<ul>

							<li>hello <b>[-emailuser-]</b> = hello <b>user</b></li>

							<li>your domain is <b>[-emaildomain-]</b> = Your Domain is <b>domain.com</b></li>

							<li>your code is  <b>[-randommd5-]</b> = your code is <b>e10adc3949ba59abbe56e057f20f883e</b></li>

						</ul>

						<div>

							Generateur:

						</div>

						<div>

						  (a-z) <input type="checkbox" name="az" id="az">

						  (A-Z) <input type="checkbox" name="AZ" id="AZ">

						  (0-9) <input type="checkbox" name="09" id="09">

						  (Length) <input type="text" maxlength=2 size=1 name="len" id="len">

						  (#Pattern) <input type="text" name="patval" id="patval">

						  <input type="button" value="Get Pattern" id="patb" name="patb">

						</div>

						<div>

						You can use the the generated pattern in your message.

						</div>

					  </div>

					</div>

				  </div>

				</div>

				<div class="card mt-2">

					<div class="card-header">Server Setup</div>

						<div class="card-body">

						<div class="row">

							<div class="col-md-6">

								<div class="controls">

									<div class="form-group row">

										<label for="ip" class="col-sm-2 col-form-label">SMTP Host</label>

										<div class="col-sm-8">

										  <input type="text" class="form-control" id="ip" name="ip" placeholder="SMTP Host">

										</div>

									</div>

									<div class="form-group row">

										<label for="user" class="col-sm-2 col-form-label">Username</label>

										<div class="col-sm-8">

										  <input type="text" class="form-control" name="user" id="user" placeholder="SMTP Username">

										</div>

									</div>

									<div class="form-group row">

										<label for="pass" class="col-sm-2 col-form-label">Password</label>

										<div class="col-sm-8">

										  <input type="password" class="form-control" id="pass" name="pass" placeholder="SMTP Password">

										</div>

									</div>

									<div class="form-group row">

										<label for="ssl_port" class="col-sm-2 col-form-label">Port</label>

										<div class="col-sm-3">

										  <input type="text" class="form-control" id="ssl_port" name="ssl_port" placeholder="SMTP Port" value="<?php 
    echo $ssl_port;
    ?>">

										</div>

									</div>

									<div class="form-group row">

										<label for="smtp_security" class="col-sm-2 col-form-label">Security</label>

										<div class="col-sm-8" id="smtp_security">

											<div class="form-check d-inline">

												<input class="form-check-input" type="radio" name="SSLTLS" value="SSL">

												<label class="form-check-label">TLS</label>

											</div>

											<div class="form-check d-inline ml-3">

												<input class="form-check-input" type="radio" name="SSLTLS" value="TLS">

												<label class="form-check-label">SSL</label>

											</div>

											<div class="form-check d-inline ml-3">

												<input class="form-check-input" type="radio" name="SSLTLS" value="NON">

												<label class="form-check-label">None</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label for="smtp_bcc" class="col-sm-2 col-form-label">Is bcc</label>

										<div class="col-sm-8" id="smtp_bcc">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="isbcc" <?php 
    if ($isbcc == "true") {
        echo "checked";
    }
    ?>>

											  <label class="form-check-label">Yes</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label class="col-sm-2 col-form-label"></label>

										<div class="col-md-8">

											<input type="submit" class="btn btn-primary" name="add" id="add" value="Add SMTP">

										</div>

									</div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="form-group row">

									<div class="col-md-10">

										<div class="form-group">

											<label for="my_smtp">SMTP list</label>

											<textarea id="my_smtp" name="my_smtp" class="form-control" placeholder="SMTP Host | Port | Username | Password | Security | IsBcc" rows="4" required><?php 
    echo $my_smtp;
    ?></textarea><span id="smtplistnums" class="badge badge-secondary">0</span>

											<input type="button" class="mt-1 btn btn-sm btn-info" name="reset" id="reset" value="Reset">

										</div>

									</div>

								</div>

								<div class="form-group row">

									<label for="nrotat" class="col-sm-3 col-form-label">Change SMTP every</label>

									<div class="col-sm-2" id="nrotat">

										<input class="form-control" type="text" name="nrotat" value="<?php 
    echo $nrotat;
    ?>">

									</div>

									<label class="col-sm-2 col-form-label">Email</label>

								</div>

								<div class="form-group row">

									<label for="pause" class="col-sm-3 col-form-label">Pause</label>

									<div class="col-sm-2" id="pause">

										<input class="form-control" type="text" name="pause" value="<?php 
    echo $pause;
    ?>">

									</div>

									<label for="emails" class="col-sm-2 col-form-label">Seconds every</label>

									<div class="col-sm-2 ml-1 d-inline" id="emails">

										<input class="form-control" type="text" name="pemails" value="<?php 
    echo $pemails;
    ?>">

									</div>

									<label class="col-sm-3 col-form-label">Email <span class="text-muted">(1 bcc = 1 email)</span></label>

								</div>

								<div class="form-group row">

									<label for="reconnect" class="col-sm-3 col-form-label">Reconnect after</label>

									<div class="col-sm-2" id="reconnect">

										<input class="form-control" type="text" name="reconnect" value="<?php 
    echo $reconnect;
    ?>">

									</div>

									<label class="col-sm-2 col-form-label">Emails</label>

								</div>

								<div class="form-group row">

									<label for="nbcc" class="col-sm-3 col-form-label">Num of emails in bcc</label>

									<div class="col-sm-2" id="nbcc">

										<input class="form-control" type="text" name="nbcc" value="<?php 
    echo $nbcc;
    ?>">

									</div>

									<label class="col-sm-2 col-form-label">Emails</label>

								</div>

							</div>

						</div>

					</div>

				</div>

            </div>

            <div class="col-md-12 mt-2">

				<div class="card">

					<div class="card-header">Message Setup</div>

						<div class="card-body">

						<div class="row">

							<div class="col-md-6">

								<div class="controls">

									<div class="form-group row">

										<label for="from" class="col-sm-2 col-form-label">Sender email</label>

										<div class="col-sm-6">

										  <input type="text" class="form-control" id="from" name="from" placeholder="Sender email" value="<?php 
    if (!$lase) {
        echo $from_base;
    }
    ?>" size="30" <?php 
    if ($lase) {
        echo "disabled";
    }
    ?> required>

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="lase" value="true" <?php 
    if ($lase) {
        echo "checked";
    }
    ?>>

											  <label class="form-check-label">Sender email as login</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label for="replyto" class="col-sm-2 col-form-label">Reply-To</label>

										<div class="col-sm-6">

										  <input type="text" class="form-control" id="replyto" name="replyto" placeholder="Reply-To Email" value="<?php 
    if (!$repaslog) {
        echo $replyto;
    }
    ?>" <?php 
    if ($repaslog) {
        echo "disabled";
    }
    ?>>

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="repaslog" value="true" <?php 
    if ($repaslog) {
        echo "checked";
    }
    ?>>

											  <label class="form-check-label">Reply-To as login</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label for="subject" class="col-sm-2 col-form-label">Subject</label>

										<div class="col-sm-6">

										  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php 
    echo $subject_base;
    ?>">

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="debg" value="true" <?php 
    if ($debg == 1) {
        echo "checked";
    }
    ?>>

											  <label class="form-check-label">Debug Mode</label>

											</div>

										</div>

									</div>

									<div class="form-group">

										<div class="col-md-10">

											<div class="form-group row">

												<label for="form_message" class="row col-sm-2">Message</label>

												<textarea id="form_message" name="message" class="form-control" placeholder="Message Here" rows="8" required><?php 
    echo $message_base;
    ?></textarea>

											</div>

										</div>

										<div class="form-group">

											<div class="col-sm-12" id="smtp_security">

												<div class="form-check d-inline">

													<input class="form-check-input" type="radio" name="contenttype">

													<label class="form-check-label">Text</label>

												</div>

												<div class="form-check d-inline ml-3">

													<input class="form-check-input" type="radio" name="contenttype" checked>

													<label class="form-check-label">Html</label>

												</div>

											</div>

										</div>

										<div class="col-md-12">

											<input type="hidden" name="action" value="send">

											<input type="submit" id="start" class="btn btn-success" value="Send message">

											<input id="stop" class="btn btn-danger" value="Stop sending" disabled>

										</div>

									</div>

								</div>

							</div>

							<div class="col-md-6">

								<div class="controls">

									<div class="form-group row">

										<label for="realname" class="col-sm-2 col-form-label">Sender name</label>

										<div class="col-sm-8">

										  <input type="text" class="form-control" id="realname" name="realname" placeholder="Sender name" value="<?php 
    echo $realname_base;
    ?>">

										</div>

									</div>

									<div class="form-group row">

										<label for="epriority" class="col-sm-2 col-form-label">Priority</label>

										<div class="col-sm-8">

											<select id="epriority" name="epriority" class="form-control">

												<option value="" <?php 
    if (strlen($epriority) < 1) {
        print "selected";
    }
    ?> >

												NO PRIORITY</option>

												<option value="1" <?php 
    if ($epriority == "1") {
        print "selected";
    }
    ?> >HIGH</option>

												<option value="3" <?php 
    if ($epriority == "3") {
        print "selected";
    }
    ?> >NORMAL</option>

												<option value="5" <?php 
    if ($epriority == "5") {
        print "selected";
    }
    ?> >LOW</option>

											</select>

										</div>

									</div>

									<div class="form-group row">

										<label for="encodety" class="col-sm-2 col-form-label">Encoding / Charset</label>

										<div class="col-sm-4">

											<select id="encodety" name="encodety" class="form-control">

												<option value="no" <?php 
    if ($encodety == "no") {
        print "selected";
    }
    ?>>NO</option>

												<option value="8bit" <?php 
    if ($encodety == "8bit") {
        print "selected";
    }
    ?>>8bit</option>

												<option value="7bit" <?php 
    if ($encodety == "7bit") {
        print "selected";
    }
    ?>>7bit</option>

												<option value="binary" <?php 
    if ($encodety == "binary") {
        print "selected";
    }
    ?>>binary</option>

												<option value="base64" <?php 
    if ($encodety == "base64") {
        print "selected";
    }
    ?>>base64</option>

												<option value="quoted-printable" <?php 
    if ($encodety == "quoted-printable") {
        print "selected";
    }
    ?>>quoted-printable</option>

											</select>

										</div>

										<div class="col-sm-4">

											<select name="epriority" id="listMethod" class="form-control">

												<option value="" selected="">NO CHARSET</option>

												<option value="us-ascii">Unicode -> us-ascii</option>

												<option value="utf-7">Unicode -> utf-7</option>

												<option value="utf-8">Unicode -> utf-8</option>

												<option value="iso-10646-ucs-2">Unicode -> iso-10646-ucs-2</option>

												<option value="iso-8859-6">Arabic -> iso-8859-6</option>

												<option value="x-mac-arabic">Arabic -> x-mac-arabic</option>

												<option value="windows-1256">Arabic -> windows-1256</option>

												<option value="iso-8859-4">Baltic -> iso-8859-4</option>

												<option value="windows-1257">Baltic -> windows-1257</option>

												<option value="iso-8859-2">Central European -> iso-8859-2</option>

												<option value="x-mac-ce">Central European -> x-mac-ce</option>

												<option value="windows-1250">Central European -> windows-1250</option>

												<option value="euc-cn">Chinese -> euc-cn</option>

												<option value="gb2312">Chinese -> gb2312</option>

												<option value="hz-gb-2312">Chinese -> hz-gb-2312	</option>

												<option value="x-mac-chinesesimp">Chinese -> x-mac-chinesesimp</option>

												<option value="cp-936">Chinese -> cp-936</option>

												<option value="big5">Chinese -> big5</option>

												<option value="x-mac-chinesetrad">Chinese -> x-mac-chinesetrad</option>

												<option value="cp-950">Chinese -> cp-950</option>

												<option value="cp-932">Chinese -> cp-932</option>

												<option value="euc-tw">Chinese -> euc-tw</option>

											</select>

										</div>

									</div>

									<div class="form-group row">

										<label for="reply_to" class="col-sm-2 col-form-label">Attachment</label>

										<div class="col-sm-8">

										  <input name="userfile" type="file">

										</div>

									</div>

									<div class="form-group">

										<div class="col-md-10">

											<div class="form-group row">

												<label for="emaillist" class="row col-sm-2">Emails</label>

												<textarea id="emaillist" name="emaillist" class="form-control" placeholder="Emails Here" rows="6" required><?php 
    echo $emaillist;
    ?></textarea><span id="emaillistnums" class="badge badge-info mt-1">0</span>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

            </div>

			<div class="col-md-12 mt-2">

				<div class="card">

					<div class="card-header">Result</div>

						<div class="card-body">

						<div class="row ml-1 mt-1 mb-1 mr-1">

							<span id="result"></span>

						</div>

					</div>

				</div>

            </div>

        </div>

    </div>

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/sender.min.js"></script>

</body>

</html>



<?php 
}
function randString($consonants)
{
    $length = rand(12, 25);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $consonants[rand() % strlen($consonants)];
    }
    return $password;
}
function lufClear($text, $email)
{
    $e = explode('@', $email);
    $emailuser = $e[0];
    $emaildomain = $e[1];
    $text = str_replace("[-time-]", date("m/d/Y h:i:s a", time()), $text);
    $text = str_replace("[-email-]", $email, $text);
    $text = str_replace("[-emailuser-]", $emailuser, $text);
    $text = str_replace("[-emaildomain-]", $emaildomain, $text);
    $text = str_replace("[-randomletters-]", randString('abcdefghijklmnopqrstuvwxyz'), $text);
    $text = str_replace("[-randomstring-]", randString('abcdefghijklmnopqrstuvwxyz0123456789'), $text);
    $text = str_replace("[-randomnumber-]", randString('0123456789'), $text);
    $text = str_replace("[-randommd5-]", md5(randString('abcdefghijklmnopqrstuvwxyz0123456789')), $text);
    return $text;
}
class SMTP
{
    const VERSION = '5.2.17';
    const CRLF = "\r\n";
    const DEFAULT_SMTP_PORT = 25;
    const MAX_LINE_LENGTH = 998;
    const DEBUG_OFF = 0;
    const DEBUG_CLIENT = 1;
    const DEBUG_SERVER = 2;
    const DEBUG_CONNECTION = 3;
    const DEBUG_LOWLEVEL = 4;
    public $Version = '5.2.17';
    public $SMTP_PORT = 25;
    public $CRLF = "\r\n";
    public $do_debug = self::DEBUG_OFF;
    public $Debugoutput = 'echo';
    public $do_verp = false;
    public $Timeout = 300;
    public $Timelimit = 300;
    protected $smtp_transaction_id_patterns = array('exim' => '/[0-9]{3} OK id=(.*)/', 'sendmail' => '/[0-9]{3} 2.0.0 (.*) Message/', 'postfix' => '/[0-9]{3} 2.0.0 Ok: queued as (.*)/');
    protected $smtp_conn;
    protected $error = array('error' => '', 'detail' => '', 'smtp_code' => '', 'smtp_code_ex' => '');
    protected $helo_rply = null;
    protected $server_caps = null;
    protected $last_reply = '';
    protected function edebug($str, $level = 0)
    {
        if ($level > $this->do_debug) {
            return;
        }
        if (!in_array($this->Debugoutput, array('error_log', 'html', 'echo')) and is_callable($this->Debugoutput)) {
            call_user_func($this->Debugoutput, $str, $level);
            return;
        }
        switch ($this->Debugoutput) {
            case 'error_log':
                error_log($str);
                break;
            case 'html':
                echo htmlentities(preg_replace('/[\\r\\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n";
                break;
            case 'echo':
            default:
                $str = preg_replace('/(\\r\\n|\\r|\\n)/ms', "\n", $str);
                echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n";
        }
    }
    public function connect($host, $port = null, $timeout = 30, $options = array())
    {
        if (count($options) == 0) {
            $options["ssl"] = array("verify_peer" => false, "verify_peer_name" => false, "allow_self_signed" => true);
        }
        static $streamok;
        if (is_null($streamok)) {
            $streamok = function_exists('stream_socket_client');
        }
        $this->setError('');
        if ($this->connected()) {
            $this->setError('Already connected to a server');
            return false;
        }
        if (empty($port)) {
            $port = self::DEFAULT_SMTP_PORT;
        }
        $this->edebug("Connection: opening to {$host}:{$port}, timeout={$timeout}, options=" . var_export($options, true), self::DEBUG_CONNECTION);
        $errno = 0;
        $errstr = '';
        if ($streamok) {
            $socket_context = stream_context_create($options);
            set_error_handler(array($this, 'errorHandler'));
            $this->smtp_conn = stream_socket_client($host . ":" . $port, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $socket_context);
            restore_error_handler();
        } else {
            $this->edebug("Connection: stream_socket_client not available, falling back to fsockopen", self::DEBUG_CONNECTION);
            set_error_handler(array($this, 'errorHandler'));
            $this->smtp_conn = fsockopen($host, $port, $errno, $errstr, $timeout);
            restore_error_handler();
        }
        if (!is_resource($this->smtp_conn)) {
            $this->setError('Failed to connect to server', $errno, $errstr);
            $this->edebug('SMTP ERROR: ' . $this->error['error'] . ": {$errstr} ({$errno})", self::DEBUG_CLIENT);
            return false;
        }
        $this->edebug('Connection: opened', self::DEBUG_CONNECTION);
        if (true) {
            $max = ini_get('max_execution_time');
            if ($max != 0 && $timeout > $max) {
                @set_time_limit($timeout);
            }
            stream_set_timeout($this->smtp_conn, $timeout, 0);
        }
        $announce = $this->get_lines();
        $this->edebug('SERVER -> CLIENT: ' . $announce, self::DEBUG_SERVER);
        return true;
    }
    public function startTLS()
    {
        if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) {
            return false;
        }
        $crypto_method = STREAM_CRYPTO_METHOD_TLS_CLIENT;
        if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) {
            $crypto_method = "STREAM_CRYPTO_METHOD_TLS\x7fs_{_O\\IENT";
            $crypto_method = "STREAM_CRYPTO_METHOD_TLS\x7fs_{_O\\IENT";
        }
        if (!stream_socket_enable_crypto($this->smtp_conn, true, $crypto_method)) {
            return false;
        }
        return true;
    }
    public function authenticate($username, $password, $authtype = null, $realm = '', $workstation = '', $OAuth = null)
    {
        if (!$this->server_caps) {
            $this->setError('Authentication is not allowed before HELO/EHLO');
            return false;
        }
        if (array_key_exists('EHLO', $this->server_caps)) {
            if (!array_key_exists('AUTH', $this->server_caps)) {
                $this->setError('Authentication is not allowed at this stage');
                return false;
            }
            self::edebug('Auth method requested: ' . ($authtype ? $authtype : 'UNKNOWN'), self::DEBUG_LOWLEVEL);
            self::edebug('Auth methods available on the server: ' . implode(',', $this->server_caps['AUTH']), self::DEBUG_LOWLEVEL);
            if (empty($authtype)) {
                foreach (array('CRAM-MD5', 'LOGIN', 'PLAIN', 'NTLM', 'XOAUTH2') as $method) {
                    if (in_array($method, $this->server_caps['AUTH'])) {
                        $authtype = $method;
                        break;
                    }
                }
                if (empty($authtype)) {
                    $this->setError('No supported authentication methods found');
                    return false;
                }
                self::edebug('Auth method selected: ' . $authtype, self::DEBUG_LOWLEVEL);
            }
            if (!in_array($authtype, $this->server_caps['AUTH'])) {
                $this->setError("The requested authentication method \"{$authtype}\" is not supported by the server");
                return false;
            }
        } elseif (empty($authtype)) {
            $authtype = 'LOGIN';
        }
        switch ($authtype) {
            case 'PLAIN':
                if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) {
                    return false;
                }
                if (!$this->sendCommand('User & Password', base64_encode("\x00" . $username . "\x00" . $password), 235)) {
                    return false;
                }
                break;
            case 'LOGIN':
                if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) {
                    return false;
                }
                if (!$this->sendCommand("Username", base64_encode($username), 334)) {
                    return false;
                }
                if (!$this->sendCommand("Password", base64_encode($password), 235)) {
                    return false;
                }
                break;
            case 'XOAUTH2':
                if (is_null($OAuth)) {
                    return false;
                }
                $oauth = $OAuth->getOauth64();
                if (!$this->sendCommand('AUTH', 'AUTH XOAUTH2 ' . $oauth, 235)) {
                    return false;
                }
                break;
            case 'NTLM':
                require_once 'extras/ntlm_sasl_client.php';
                $temp = new stdClass();
                $ntlm_client = new ntlm_sasl_client_class();
                if (!$ntlm_client->initialize($temp)) {
                    $this->setError($temp->error);
                    $this->edebug('You need to enable some modules in your php.ini file: ' . $this->error['error'], self::DEBUG_CLIENT);
                    return false;
                }
                $msg1 = $ntlm_client->typeMsg1($realm, $workstation);
                if (!$this->sendCommand('AUTH NTLM', 'AUTH NTLM ' . base64_encode($msg1), 334)) {
                    return false;
                }
                $challenge = substr($this->last_reply, 3);
                $challenge = base64_decode($challenge);
                $ntlm_res = $ntlm_client->NTLMResponse(substr($challenge, 24, 8), $password);
                $msg3 = $ntlm_client->typeMsg3($ntlm_res, $username, $realm, $workstation);
                return $this->sendCommand('Username', base64_encode($msg3), 235);
            case 'CRAM-MD5':
                if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) {
                    return false;
                }
                $challenge = base64_decode(substr($this->last_reply, 4));
                $response = $username . ' ' . $this->hmac($challenge, $password);
                return $this->sendCommand('Username', base64_encode($response), 235);
            default:
                $this->setError("Authentication method \"{$authtype}\" is not supported");
                return false;
        }
        return true;
    }
    protected function hmac($data, $key)
    {
        if (function_exists('hash_hmac')) {
            return hash_hmac('md5', $data, $key);
        }
        $bytelen = 64;
        if (strlen($key) > $bytelen) {
            $key = pack('H*', md5($key));
        }
        $key = str_pad($key, $bytelen, "\x00");
        $ipad = str_pad('', $bytelen, "6");
        $opad = str_pad('', $bytelen, "\\");
        $k_ipad = $key ^ $ipad;
        $k_opad = $key ^ $opad;
        return md5($k_opad . pack('H*', md5($k_ipad . $data)));
    }
    public function connected()
    {
        if (is_resource($this->smtp_conn)) {
            $sock_status = stream_get_meta_data($this->smtp_conn);
            if ($sock_status['eof']) {
                $this->edebug('SMTP NOTICE: EOF caught while checking if connected', self::DEBUG_CLIENT);
                $this->close();
                return false;
            }
            return true;
        }
        return false;
    }
    public function close()
    {
        $this->setError('');
        $this->server_caps = null;
        $this->helo_rply = null;
        if (is_resource($this->smtp_conn)) {
            fclose($this->smtp_conn);
            $this->smtp_conn = null;
            $this->edebug('Connection: closed', self::DEBUG_CONNECTION);
        }
    }
    public function data($msg_data)
    {
        if (!$this->sendCommand('DATA', 'DATA', 354)) {
            return false;
        }
        $lines = explode("\n", str_replace(array("\r\n", "\r"), "\n", $msg_data));
        $field = substr($lines[0], 0, strpos($lines[0], ':'));
        $in_headers = false;
        if (!empty($field) && strpos($field, ' ') === false) {
            $in_headers = true;
        }
        foreach ($lines as $line) {
            $lines_out = array();
            if ($in_headers and $line == '') {
                $in_headers = false;
            }
            while (isset($line[self::MAX_LINE_LENGTH])) {
                $pos = strrpos(substr($line, 0, self::MAX_LINE_LENGTH), ' ');
                if (!$pos) {
                    $pos = self::MAX_LINE_LENGTH - 1;
                    $lines_out[] = substr($line, 0, $pos);
                    $line = substr($line, $pos);
                } else {
                    $lines_out[] = substr($line, 0, $pos);
                    $line = substr($line, $pos + 1);
                }
                if ($in_headers) {
                    $line = "\t" . $line;
                }
            }
            $lines_out[] = $line;
            foreach ($lines_out as $line_out) {
                if (!empty($line_out) and $line_out[0] == '.') {
                    $line_out = '.' . $line_out;
                }
                $this->client_send($line_out . self::CRLF);
            }
        }
        $savetimelimit = $this->Timelimit;
        $this->Timelimit *= 2;
        $result = $this->sendCommand('DATA END', '.', 250);
        $this->Timelimit = $savetimelimit;
        return $result;
    }
    public function hello($host = '')
    {
        return (bool) ($this->sendHello('EHLO', $host) or $this->sendHello('HELO', $host));
    }
    protected function sendHello($hello, $host)
    {
        $noerror = $this->sendCommand($hello, $hello . ' ' . $host, 250);
        $this->helo_rply = $this->last_reply;
        if ($noerror) {
            $this->parseHelloFields($hello);
        } else {
            $this->server_caps = null;
        }
        return $noerror;
    }
    protected function parseHelloFields($type)
    {
        $this->server_caps = array();
        $lines = explode("\n", $this->helo_rply);
        foreach ($lines as $n => $s) {
            $s = trim(substr($s, 4));
            if (empty($s)) {
                continue;
            }
            $fields = explode(' ', $s);
            if (!empty($fields)) {
                if (!$n) {
                    $name = $type;
                    $fields = $fields[0];
                } else {
                    $name = array_shift($fields);
                    switch ($name) {
                        case 'SIZE':
                            $fields = $fields ? $fields[0] : 0;
                            break;
                        case 'AUTH':
                            if (!is_array($fields)) {
                                $fields = array();
                            }
                            break;
                        default:
                            $fields = true;
                    }
                }
                $this->server_caps[$name] = $fields;
            }
        }
    }
    public function mail($from)
    {
        $useVerp = $this->do_verp ? ' XVERP' : '';
        return $this->sendCommand('MAIL FROM', 'MAIL FROM:<' . $from . '>' . $useVerp, 250);
    }
    public function quit($close_on_error = true)
    {
        $noerror = $this->sendCommand('QUIT', 'QUIT', 221);
        $err = $this->error;
        if ($noerror or $close_on_error) {
            $this->close();
            $this->error = $err;
        }
        return $noerror;
    }
    public function recipient($address)
    {
        return $this->sendCommand('RCPT TO', 'RCPT TO:<' . $address . '>', array(250, 251));
    }
    public function reset()
    {
        return $this->sendCommand('RSET', 'RSET', 250);
    }
    protected function sendCommand($command, $commandstring, $expect)
    {
        if (!$this->connected()) {
            $this->setError("Called {$command} without being connected");
            return false;
        }
        if (strpos($commandstring, "\n") !== false or strpos($commandstring, "\r") !== false) {
            $this->setError("Command '{$command}' contained line breaks");
            return false;
        }
        $this->client_send($commandstring . self::CRLF);
        $this->last_reply = $this->get_lines();
        $matches = array();
        if (preg_match("/^([0-9]{3})[ -](?:([0-9]\\.[0-9]\\.[0-9]) )?/", $this->last_reply, $matches)) {
            $code = $matches[1];
            $code_ex = count($matches) > 2 ? $matches[2] : null;
            $detail = preg_replace("/{$code}[ -]" . ($code_ex ? str_replace('.', '\\.', $code_ex) . ' ' : '') . "/m", '', $this->last_reply);
        } else {
            $code = substr($this->last_reply, 0, 3);
            $code_ex = null;
            $detail = substr($this->last_reply, 4);
        }
        $this->edebug('SERVER -> CLIENT: ' . $this->last_reply, self::DEBUG_SERVER);
        if (!in_array($code, (array) $expect)) {
            $this->setError("{$command} command failed", $detail, $code, $code_ex);
            $this->edebug('SMTP ERROR: ' . $this->error['error'] . ': ' . $this->last_reply, self::DEBUG_CLIENT);
            return false;
        }
        $this->setError('');
        return true;
    }
    public function sendAndMail($from)
    {
        return $this->sendCommand('SAML', "SAML FROM:{$from}", 250);
    }
    public function verify($name)
    {
        return $this->sendCommand('VRFY', "VRFY {$name}", array(250, 251));
    }
    public function noop()
    {
        return $this->sendCommand('NOOP', 'NOOP', 250);
    }
    public function turn()
    {
        $this->setError('The SMTP TURN command is not implemented');
        $this->edebug('SMTP NOTICE: ' . $this->error['error'], self::DEBUG_CLIENT);
        return false;
    }
    public function client_send($data)
    {
        $this->edebug("CLIENT -> SERVER: {$data}", self::DEBUG_CLIENT);
        set_error_handler(array($this, 'errorHandler'));
        $result = fwrite($this->smtp_conn, $data);
        restore_error_handler();
        return $result;
    }
    public function getError()
    {
        return $this->error;
    }
    public function getServerExtList()
    {
        return $this->server_caps;
    }
    public function getServerExt($name)
    {
        if (!$this->server_caps) {
            $this->setError('No HELO/EHLO was sent');
            return null;
        }
        if (!array_key_exists($name, $this->server_caps)) {
            if ($name == 'HELO') {
                return $this->server_caps['EHLO'];
            }
            if ($name == 'EHLO' || array_key_exists('EHLO', $this->server_caps)) {
                return false;
            }
            $this->setError('HELO handshake was used. Client knows nothing about server extensions');
            return null;
        }
        return $this->server_caps[$name];
    }
    public function getLastReply()
    {
        return $this->last_reply;
    }
    protected function get_lines()
    {
        if (!is_resource($this->smtp_conn)) {
            return "";
        }
        $data = '';
        $endtime = 0;
        stream_set_timeout($this->smtp_conn, $this->Timeout);
        if ($this->Timelimit > 0) {
            $endtime = time() + $this->Timelimit;
        }
        while (is_resource($this->smtp_conn) && !feof($this->smtp_conn)) {
            $str = @fgets($this->smtp_conn, 515);
            $this->edebug("SMTP -> get_lines(): \$data is \"{$data}\"", self::DEBUG_LOWLEVEL);
            $this->edebug("SMTP -> get_lines(): \$str is  \"{$str}\"", self::DEBUG_LOWLEVEL);
            $data .= $str;
            if (!isset($str[3]) or isset($str[3]) and $str[3] == ' ') {
                break;
            }
            $info = stream_get_meta_data($this->smtp_conn);
            if ($info['timed_out']) {
                $this->edebug('SMTP -> get_lines(): timed-out (' . $this->Timeout . ' sec)', self::DEBUG_LOWLEVEL);
                break;
            }
            if ($endtime and time() > $endtime) {
                $this->edebug('SMTP -> get_lines(): timelimit reached (' . $this->Timelimit . ' sec)', self::DEBUG_LOWLEVEL);
                break;
            }
        }
        return $data;
    }
    public function setVerp($enabled = false)
    {
        $this->do_verp = $enabled;
    }
    public function getVerp()
    {
        return $this->do_verp;
    }
    protected function setError($message, $detail = '', $smtp_code = '', $smtp_code_ex = '')
    {
        $this->error = array('error' => $message, 'detail' => $detail, 'smtp_code' => $smtp_code, 'smtp_code_ex' => $smtp_code_ex);
    }
    public function setDebugOutput($method = 'echo')
    {
        $this->Debugoutput = $method;
    }
    public function getDebugOutput()
    {
        return $this->Debugoutput;
    }
    public function setDebugLevel($level = 0)
    {
        $this->do_debug = $level;
    }
    public function getDebugLevel()
    {
        return $this->do_debug;
    }
    public function setTimeout($timeout = 0)
    {
        $this->Timeout = $timeout;
    }
    public function getTimeout()
    {
        return $this->Timeout;
    }
    protected function errorHandler($errno, $errmsg)
    {
        $notice = 'Connection: Failed to connect to server.';
        $this->setError($notice, $errno, $errmsg);
        $this->edebug("Connection: Failed to connect to server. Error number " . $errno . '. "Error notice: ' . $errmsg, self::DEBUG_CONNECTION);
    }
    public function getLastTransactionID()
    {
        $reply = $this->getLastReply();
        if (empty($reply)) {
            return null;
        }
        foreach ($this->smtp_transaction_id_patterns as $smtp_transaction_id_pattern) {
            if (preg_match($smtp_transaction_id_pattern, $reply, $matches)) {
                return $matches[1];
            }
        }
        return false;
    }
}
class PHPMailer
{
    public $Version = '5.2.17';
    public $Priority = null;
    public $CharSet = 'iso-8859-1';
    public $ContentType = 'text/plain';
    public $Encoding = '8bit';
    public $ErrorInfo = '';
    public $From = 'root@localhost';
    public $FromName = 'Root User';
    public $Sender = '';
    public $ReturnPath = '';
    public $Subject = '';
    public $Body = '';
    public $AltBody = '';
    public $Ical = '';
    protected $MIMEBody = '';
    protected $MIMEHeader = '';
    protected $mailHeader = '';
    public $WordWrap = 0;
    public $Mailer = 'mail';
    public $Sendmail = '/usr/sbin/sendmail';
    public $UseSendmailOptions = true;
    public $PluginDir = '';
    public $ConfirmReadingTo = '';
    public $Hostname = '';
    public $MessageID = '';
    public $MessageDate = '';
    public $Host = 'localhost';
    public $Port = 25;
    public $Helo = '';
    public $SMTPSecure = '';
    public $SMTPAutoTLS = true;
    public $SMTPAuth = false;
    public $SMTPOptions = array();
    public $Username = '';
    public $Password = '';
    public $AuthType = '';
    public $Realm = '';
    public $Workstation = '';
    public $Timeout = 300;
    public $SMTPDebug = 0;
    public $Debugoutput = 'echo';
    public $SMTPKeepAlive = false;
    public $SingleTo = false;
    public $SingleToArray = array();
    public $do_verp = false;
    public $AllowEmpty = false;
    public $LE = "\n";
    public $DKIM_selector = '';
    public $DKIM_identity = '';
    public $DKIM_passphrase = '';
    public $DKIM_domain = '';
    public $DKIM_private = '';
    public $DKIM_private_string = '';
    public $action_function = '';
    public $XMailer = '';
    public static $validator = 'auto';
    protected $smtp = null;
    protected $to = array();
    protected $cc = array();
    protected $bcc = array();
    protected $ReplyTo = array();
    protected $all_recipients = array();
    protected $RecipientsQueue = array();
    protected $ReplyToQueue = array();
    protected $attachment = array();
    protected $CustomHeader = array();
    protected $lastMessageID = '';
    protected $message_type = '';
    protected $boundary = array();
    protected $language = array();
    protected $error_count = 0;
    protected $sign_cert_file = '';
    protected $sign_key_file = '';
    protected $sign_extracerts_file = '';
    protected $sign_key_pass = '';
    protected $exceptions = false;
    protected $uniqueid = '';
    const STOP_MESSAGE = 0;
    const STOP_CONTINUE = 1;
    const STOP_CRITICAL = 2;
    const CRLF = "\r\n";
    const MAX_LINE_LENGTH = 998;
    public function __construct($exceptions = null)
    {
        if ($exceptions !== null) {
            $this->exceptions = (bool) $exceptions;
        }
    }
    public function __destruct()
    {
        $this->smtpClose();
    }
    private function mailPassthru($to, $subject, $body, $header, $params)
    {
        if (ini_get('mbstring.func_overload') & 1) {
            $subject = $this->secureHeader($subject);
        } else {
            $subject = $this->encodeHeader($this->secureHeader($subject));
        }
        if (ini_get('safe_mode') or !$this->UseSendmailOptions or is_null($params)) {
            $result = @mail($to, $subject, $body, $header);
        } else {
            $result = @mail($to, $subject, $body, $header, $params);
        }
        return $result;
    }
    protected function edebug($str)
    {
        if ($this->SMTPDebug <= 0) {
            return;
        }
        if (!in_array($this->Debugoutput, array('error_log', 'html', 'echo')) and is_callable($this->Debugoutput)) {
            call_user_func($this->Debugoutput, $str, $this->SMTPDebug);
            return;
        }
        switch ($this->Debugoutput) {
            case 'error_log':
                error_log($str);
                break;
            case 'html':
                echo htmlentities(preg_replace('/[\\r\\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n";
                break;
            case 'echo':
            default:
                $str = preg_replace('/\\r\\n?/ms', "\n", $str);
                echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n";
        }
    }
    public function isHTML($isHtml = true)
    {
        if ($isHtml) {
            $this->ContentType = 'text/html';
        } else {
            $this->ContentType = 'text/plain';
        }
    }
    public function isSMTP()
    {
        $this->Mailer = 'smtp';
    }
    public function isMail()
    {
        $this->Mailer = 'mail';
    }
    public function isSendmail()
    {
        $ini_sendmail_path = ini_get('sendmail_path');
        if (!stristr($ini_sendmail_path, 'sendmail')) {
            $this->Sendmail = '/usr/sbin/sendmail';
        } else {
            $this->Sendmail = $ini_sendmail_path;
        }
        $this->Mailer = 'sendmail';
    }
    public function isQmail()
    {
        $ini_sendmail_path = ini_get('sendmail_path');
        if (!stristr($ini_sendmail_path, 'qmail')) {
            $this->Sendmail = '/var/qmail/bin/qmail-inject';
        } else {
            $this->Sendmail = $ini_sendmail_path;
        }
        $this->Mailer = 'qmail';
    }
    public function addAddress($address, $name = '')
    {
        return $this->addOrEnqueueAnAddress('to', $address, $name);
    }
    public function addCC($address, $name = '')
    {
        return $this->addOrEnqueueAnAddress('cc', $address, $name);
    }
    public function addBCC($address, $name = '')
    {
        return $this->addOrEnqueueAnAddress('bcc', $address, $name);
    }
    public function addReplyTo($address, $name = '')
    {
        return $this->addOrEnqueueAnAddress('Reply-To', $address, $name);
    }
    protected function addOrEnqueueAnAddress($kind, $address, $name)
    {
        $address = trim($address);
        $name = trim(preg_replace('/[\\r\\n]+/', '', $name));
        if (($pos = strrpos($address, '@')) === false) {
            $error_message = $this->lang('invalid_address') . " (addAnAddress {$kind}): {$address}";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        $params = array($kind, $address, $name);
        if ($this->has8bitChars(substr($address, ++$pos)) and $this->idnSupported()) {
            if ($kind != 'Reply-To') {
                if (!array_key_exists($address, $this->RecipientsQueue)) {
                    $this->RecipientsQueue[$address] = $params;
                    return true;
                }
            } else {
                if (!array_key_exists($address, $this->ReplyToQueue)) {
                    $this->ReplyToQueue[$address] = $params;
                    return true;
                }
            }
            return false;
        }
        return call_user_func_array(array($this, 'addAnAddress'), $params);
    }
    protected function addAnAddress($kind, $address, $name = '')
    {
        if (!in_array($kind, array('to', 'cc', 'bcc', 'Reply-To'))) {
            $error_message = $this->lang('Invalid recipient kind: ') . $kind;
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        if (!$this->validateAddress($address)) {
            $error_message = $this->lang('invalid_address') . " (addAnAddress {$kind}): {$address}";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        if ($kind != 'Reply-To') {
            if (!array_key_exists(strtolower($address), $this->all_recipients)) {
                array_push($this->{$kind}, array($address, $name));
                $this->all_recipients[strtolower($address)] = true;
                return true;
            }
        } else {
            if (!array_key_exists(strtolower($address), $this->ReplyTo)) {
                $this->ReplyTo[strtolower($address)] = array($address, $name);
                return true;
            }
        }
        return false;
    }
    public function parseAddresses($addrstr, $useimap = true)
    {
        $addresses = array();
        if ($useimap and function_exists('imap_rfc822_parse_adrlist')) {
            $list = imap_rfc822_parse_adrlist($addrstr, '');
            foreach ($list as $address) {
                if ($address->host != '.SYNTAX-ERROR.') {
                    if ($this->validateAddress($address->mailbox . '@' . $address->host)) {
                        $addresses[] = array('name' => property_exists($address, 'personal') ? $address->personal : '', 'address' => $address->mailbox . '@' . $address->host);
                    }
                }
            }
        } else {
            $list = explode(',', $addrstr);
            foreach ($list as $address) {
                $address = trim($address);
                if (strpos($address, '<') === false) {
                    if ($this->validateAddress($address)) {
                        $addresses[] = array('name' => '', 'address' => $address);
                    }
                } else {
                    list($name, $email) = explode('<', $address);
                    $email = trim(str_replace('>', '', $email));
                    if ($this->validateAddress($email)) {
                        $addresses[] = array('name' => trim(str_replace(array('"', "'"), '', $name)), 'address' => $email);
                    }
                }
            }
        }
        return $addresses;
    }
    public function setFrom($address, $name = '', $auto = true)
    {
        $address = trim($address);
        $name = trim(preg_replace('/[\\r\\n]+/', '', $name));
        if (($pos = strrpos($address, '@')) === false or (!$this->has8bitChars(substr($address, ++$pos)) or !$this->idnSupported()) and !$this->validateAddress($address)) {
            $error_message = $this->lang('invalid_address') . " (setFrom) {$address}";
            $this->setError($error_message);
            $this->edebug($error_message);
            if ($this->exceptions) {
                throw new phpmailerException($error_message);
            }
            return false;
        }
        $this->From = $address;
        $this->FromName = $name;
        if ($auto) {
            if (empty($this->Sender)) {
                $this->Sender = $address;
            }
        }
        return true;
    }
    public function getLastMessageID()
    {
        return $this->lastMessageID;
    }
    public static function validateAddress($address, $patternselect = null)
    {
        if (is_null($patternselect)) {
            $patternselect = self::$validator;
        }
        if (is_callable($patternselect)) {
            return call_user_func($patternselect, $address);
        }
        if (strpos($address, "\n") !== false or strpos($address, "\r") !== false) {
            return false;
        }
        if (!$patternselect or $patternselect == 'auto') {
            if (defined('PCRE_VERSION')) {
                if (version_compare(PCRE_VERSION, '8.0.3') >= 0) {
                    $patternselect = 'pcre8';
                } else {
                    $patternselect = 'pcre';
                }
            } elseif (function_exists('extension_loaded') and extension_loaded('pcre')) {
                $patternselect = 'pcre';
            } else {
                if (version_compare(PHP_VERSION, '5.2.0') >= 0) {
                    $patternselect = 'php';
                } else {
                    $patternselect = 'noregex';
                }
            }
        }
        switch ($patternselect) {
            case 'pcre8':
                return (bool) preg_match('/^(?!(?>(?1)"?(?>\\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\\[ -~]|[^"])"?(?1)){65,}@)((?>(?>(?>((?>(?>(?>\\x0D\\x0A)?[\\t ])+|(?>[\\t ]*\\x0D\\x0A)?[\\t ]+)?)(\\((?>(?2)(?>[\\x01-\\x08\\x0B\\x0C\\x0E-\'*-\\[\\]-\\x7F]|\\\\[\\x00-\\x7F]|(?3)))*(?2)\\)))+(?2))|(?2))?)([!#-\'*+\\/-9=?^-~-]+|"(?>(?2)(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\x7F]))*(?2)")(?>(?1)\\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)(?>(?1)\\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}|(?!(?:.*[a-f0-9][:\\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])(?>\\.(?9)){3}))\\])(?1)$/isD', $address);
            case 'pcre':
                return (bool) preg_match('/^(?!(?>"?(?>\\\\[ -~]|[^"])"?){255,})(?!(?>"?(?>\\\\[ -~]|[^"])"?){65,}@)(?>[!#-\'*+\\/-9=?^-~-]+|"(?>(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\xFF]))*")(?>\\.(?>[!#-\'*+\\/-9=?^-~-]+|"(?>(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\xFF]))*"))*@(?>(?![a-z0-9-]{64,})(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)(?>\\.(?![a-z0-9-]{64,})(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)){0,126}|\\[(?:(?>IPv6:(?>(?>[a-f0-9]{1,4})(?>:[a-f0-9]{1,4}){7}|(?!(?:.*[a-f0-9][:\\]]){8,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?::(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?))|(?>(?>IPv6:(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){5}:|(?!(?:.*[a-f0-9]:){6,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4})?::(?>(?:[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4}):)?))?(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])(?>\\.(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}))\\])$/isD', $address);
            case 'html5':
                return (bool) preg_match('/^[a-zA-Z0-9.!#$%&\'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/sD', $address);
            case 'noregex':
                return strlen($address) >= 3 and strpos($address, '@') >= 1 and strpos($address, '@') != strlen($address) - 1;
            case 'php':
            default:
                return (bool) filter_var($address, FILTER_VALIDATE_EMAIL);
        }
    }
    public function idnSupported()
    {
        return function_exists('idn_to_ascii') and function_exists('mb_convert_encoding');
    }
    public function punyencodeAddress($address)
    {
        if ($this->idnSupported() and !empty($this->CharSet) and ($pos = strrpos($address, '@')) !== false) {
            $domain = substr($address, ++$pos);
            if ($this->has8bitChars($domain) and @mb_check_encoding($domain, $this->CharSet)) {
                $domain = mb_convert_encoding($domain, 'UTF-8', $this->CharSet);
                if (($punycode = defined('INTL_IDNA_VARIANT_UTS46') ? idn_to_ascii($domain, 0, INTL_IDNA_VARIANT_UTS46) : idn_to_ascii($domain)) !== false) {
                    return substr($address, 0, $pos) . $punycode;
                }
            }
        }
        return $address;
    }
    public function send()
    {
        try {
            if (!$this->preSend()) {
                return false;
            }
            return $this->postSend();
        } catch (phpmailerException $exc) {
            $this->mailHeader = '';
            $this->setError($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
    }
    public function preSend()
    {
        try {
            $this->error_count = 0;
            $this->mailHeader = '';
            foreach (array_merge($this->RecipientsQueue, $this->ReplyToQueue) as $params) {
                $params[1] = $this->punyencodeAddress($params[1]);
                call_user_func_array(array($this, 'addAnAddress'), $params);
            }
            if (count($this->to) + count($this->cc) + count($this->bcc) < 1) {
                throw new phpmailerException($this->lang('provide_address'), self::STOP_CRITICAL);
            }
            foreach (array('From', 'Sender', 'ConfirmReadingTo') as $address_kind) {
                $this->{$address_kind} = trim($this->{$address_kind});
                if (empty($this->{$address_kind})) {
                    continue;
                }
                $this->{$address_kind} = $this->punyencodeAddress($this->{$address_kind});
                if (!$this->validateAddress($this->{$address_kind})) {
                    $error_message = $this->lang('invalid_address') . ' (punyEncode) ' . $this->{$address_kind};
                    $this->setError($error_message);
                    $this->edebug($error_message);
                    if ($this->exceptions) {
                        throw new phpmailerException($error_message);
                    }
                    return false;
                }
            }
            if ($this->alternativeExists()) {
                $this->ContentType = 'multipart/alternative';
            }
            $this->setMessageType();
            if (!$this->AllowEmpty and empty($this->Body)) {
                throw new phpmailerException($this->lang('empty_message'), self::STOP_CRITICAL);
            }
            $this->MIMEHeader = '';
            $this->MIMEBody = $this->createBody();
            $tempheaders = $this->MIMEHeader;
            $this->MIMEHeader = $this->createHeader();
            $this->MIMEHeader .= $tempheaders;
            if ($this->Mailer == 'mail') {
                if (count($this->to) > 0) {
                    $this->mailHeader .= $this->addrAppend('To', $this->to);
                } else {
                    $this->mailHeader .= $this->headerLine('To', 'undisclosed-recipients:;');
                }
                $this->mailHeader .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader(trim($this->Subject))));
            }
            if (!empty($this->DKIM_domain) && !empty($this->DKIM_selector) && (!empty($this->DKIM_private_string) || !empty($this->DKIM_private) && file_exists($this->DKIM_private))) {
                $header_dkim = $this->DKIM_Add($this->MIMEHeader . $this->mailHeader, $this->encodeHeader($this->secureHeader($this->Subject)), $this->MIMEBody);
                $this->MIMEHeader = rtrim($this->MIMEHeader, "\r\n ") . self::CRLF . str_replace("\r\n", "\n", $header_dkim) . self::CRLF;
            }
            return true;
        } catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
    }
    public function postSend()
    {
        try {
            switch ($this->Mailer) {
                case 'sendmail':
                case 'qmail':
                    return $this->sendmailSend($this->MIMEHeader, $this->MIMEBody);
                case 'smtp':
                    return $this->smtpSend($this->MIMEHeader, $this->MIMEBody);
                case 'mail':
                    return $this->mailSend($this->MIMEHeader, $this->MIMEBody);
                default:
                    $sendMethod = $this->Mailer . 'Send';
                    if (method_exists($this, $sendMethod)) {
                        return $this->{$sendMethod}($this->MIMEHeader, $this->MIMEBody);
                    }
                    return $this->mailSend($this->MIMEHeader, $this->MIMEBody);
            }
        } catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            $this->edebug($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
        }
        return false;
    }
    protected function sendmailSend($header, $body)
    {
        if ($this->Sender != '') {
            if ($this->Mailer == 'qmail') {
                $sendmail = sprintf('%s -f%s', escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender));
            } else {
                $sendmail = sprintf('%s -oi -f%s -t', escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender));
            }
        } else {
            if ($this->Mailer == 'qmail') {
                $sendmail = sprintf('%s', escapeshellcmd($this->Sendmail));
            } else {
                $sendmail = sprintf('%s -oi -t', escapeshellcmd($this->Sendmail));
            }
        }
        if ($this->SingleTo) {
            foreach ($this->SingleToArray as $toAddr) {
                if (!@($mail = popen($sendmail, 'w'))) {
                    throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
                }
                fputs($mail, 'To: ' . $toAddr . "\n");
                fputs($mail, $header);
                fputs($mail, $body);
                $result = pclose($mail);
                $this->doCallback($result == 0, array($toAddr), $this->cc, $this->bcc, $this->Subject, $body, $this->From);
                if ($result != 0) {
                    throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
                }
            }
        } else {
            if (!@($mail = popen($sendmail, 'w'))) {
                throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
            }
            fputs($mail, $header);
            fputs($mail, $body);
            $result = pclose($mail);
            $this->doCallback($result == 0, $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From);
            if ($result != 0) {
                throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL);
            }
        }
        return true;
    }
    protected function mailSend($header, $body)
    {
        $toArr = array();
        foreach ($this->to as $toaddr) {
            $toArr[] = $this->addrFormat($toaddr);
        }
        $to = implode(', ', $toArr);
        $params = null;
        if (!empty($this->Sender)) {
            $params = sprintf('-f%s', $this->Sender);
        }
        if ($this->Sender != '' and !ini_get('safe_mode')) {
            $old_from = ini_get('sendmail_from');
            ini_set('sendmail_from', $this->Sender);
        }
        $result = false;
        if ($this->SingleTo and count($toArr) > 1) {
            foreach ($toArr as $toAddr) {
                $result = $this->mailPassthru($toAddr, $this->Subject, $body, $header, $params);
                $this->doCallback($result, array($toAddr), $this->cc, $this->bcc, $this->Subject, $body, $this->From);
            }
        } else {
            $result = $this->mailPassthru($to, $this->Subject, $body, $header, $params);
            $this->doCallback($result, $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From);
        }
        if (isset($old_from)) {
            ini_set('sendmail_from', $old_from);
        }
        if (!$result) {
            throw new phpmailerException($this->lang('instantiate'), self::STOP_CRITICAL);
        }
        return true;
    }
    public function getSMTPInstance()
    {
        if (!is_object($this->smtp)) {
            $this->smtp = new SMTP();
        }
        return $this->smtp;
    }
    protected function smtpSend($header, $body)
    {
        $bad_rcpt = array();
        if (!$this->smtpConnect($this->SMTPOptions)) {
            throw new phpmailerException($this->lang('smtp_connect_failed'), self::STOP_CRITICAL);
        }
        if ('' == $this->Sender) {
            $smtp_from = $this->From;
        } else {
            $smtp_from = $this->Sender;
        }
        if (!$this->smtp->mail($smtp_from)) {
            $this->setError($this->lang('from_failed') . $smtp_from . ' : ' . implode(',', $this->smtp->getError()));
            throw new phpmailerException($this->ErrorInfo, self::STOP_CRITICAL);
        }
        foreach (array($this->to, $this->cc, $this->bcc) as $togroup) {
            foreach ($togroup as $to) {
                if (!$this->smtp->recipient($to[0])) {
                    $error = $this->smtp->getError();
                    $bad_rcpt[] = array('to' => $to[0], 'error' => $error['detail']);
                    $isSent = false;
                } else {
                    $isSent = true;
                }
                $this->doCallback($isSent, array($to[0]), array(), array(), $this->Subject, $body, $this->From);
            }
        }
        if (count($this->all_recipients) > count($bad_rcpt) and !$this->smtp->data($header . $body)) {
            throw new phpmailerException($this->lang('data_not_accepted'), self::STOP_CRITICAL);
        }
        if ($this->SMTPKeepAlive) {
            $this->smtp->reset();
        } else {
            $this->smtp->quit();
            $this->smtp->close();
        }
        if (count($bad_rcpt) > 0) {
            $errstr = '';
            foreach ($bad_rcpt as $bad) {
                $errstr .= $bad['to'] . ': ' . $bad['error'];
            }
            throw new phpmailerException($this->lang('recipients_failed') . $errstr, self::STOP_CONTINUE);
        }
        return true;
    }
    public function smtpConnect($options = null)
    {
        if (is_null($this->smtp)) {
            $this->smtp = $this->getSMTPInstance();
        }
        if (is_null($options)) {
            $options = $this->SMTPOptions;
        }
        if ($this->smtp->connected()) {
            return true;
        }
        $this->smtp->setTimeout($this->Timeout);
        $this->smtp->setDebugLevel($this->SMTPDebug);
        $this->smtp->setDebugOutput($this->Debugoutput);
        $this->smtp->setVerp($this->do_verp);
        $hosts = explode(';', $this->Host);
        $lastexception = null;
        foreach ($hosts as $hostentry) {
            $hostinfo = array();
            if (!preg_match('/^((ssl|tls):\\/\\/)*([a-zA-Z0-9:\\[\\]\\.-]*):?([0-9]*)$/', trim($hostentry), $hostinfo)) {
                continue;
            }
            $prefix = '';
            $secure = $this->SMTPSecure;
            $tls = $this->SMTPSecure == 'tls';
            if ('ssl' == $hostinfo[2] or '' == $hostinfo[2] and 'ssl' == $this->SMTPSecure) {
                $prefix = 'ssl://';
                $tls = false;
                $secure = 'ssl';
            } elseif ($hostinfo[2] == 'tls') {
                $tls = true;
                $secure = 'tls';
            }
            $sslext = defined('OPENSSL_ALGO_SHA1');
            if ('tls' === $secure or 'ssl' === $secure) {
                if (!$sslext) {
                    throw new phpmailerException($this->lang('extension_missing') . 'openssl', self::STOP_CRITICAL);
                }
            }
            $host = $hostinfo[3];
            $port = $this->Port;
            $tport = (int) $hostinfo[4];
            if ($tport > 0 and $tport < 65536) {
                $port = $tport;
            }
            if ($this->smtp->connect($prefix . $host, $port, $this->Timeout, $options)) {
                try {
                    if ($this->Helo) {
                        $hello = $this->Helo;
                    } else {
                        $hello = $this->serverHostname();
                    }
                    $this->smtp->hello($hello);
                    if ($this->SMTPAutoTLS and $sslext and $secure != 'ssl' and $this->smtp->getServerExt('STARTTLS')) {
                        $tls = true;
                    }
                    if ($tls) {
                        if (!$this->smtp->startTLS()) {
                            throw new phpmailerException($this->lang('connect_host'));
                        }
                        $this->smtp->hello($hello);
                    }
                    if ($this->SMTPAuth) {
                        if (!$this->smtp->authenticate($this->Username, $this->Password, $this->AuthType, $this->Realm, $this->Workstation)) {
                            throw new phpmailerException($this->lang('authenticate'));
                        }
                    }
                    return true;
                } catch (phpmailerException $exc) {
                    $lastexception = $exc;
                    $this->edebug($exc->getMessage());
                    $this->smtp->quit();
                }
            }
        }
        $this->smtp->close();
        if ($this->exceptions and !is_null($lastexception)) {
            throw $lastexception;
        }
        return false;
    }
    public function smtpClose()
    {
        if (is_a($this->smtp, 'SMTP')) {
            if ($this->smtp->connected()) {
                $this->smtp->quit();
                $this->smtp->close();
            }
        }
    }
    public function setLanguage($langcode = 'en', $lang_path = '')
    {
        $renamed_langcodes = array('br' => 'pt_br', 'cz' => 'cs', 'dk' => 'da', 'no' => 'nb', 'se' => 'sv');
        if (isset($renamed_langcodes[$langcode])) {
            $langcode = $renamed_langcodes[$langcode];
        }
        $PHPMAILER_LANG = array('authenticate' => 'SMTP Error: Could not authenticate.', 'connect_host' => 'SMTP Error: Could not connect to SMTP host.', 'data_not_accepted' => 'SMTP Error: data not accepted.', 'empty_message' => 'Message body empty', 'encoding' => 'Unknown encoding: ', 'execute' => 'Could not execute: ', 'file_access' => 'Could not access file: ', 'file_open' => 'File Error: Could not open file: ', 'from_failed' => 'The following From address failed: ', 'instantiate' => 'Could not instantiate mail function.', 'invalid_address' => 'Invalid address: ', 'mailer_not_supported' => ' mailer is not supported.', 'provide_address' => 'You must provide at least one recipient email address.', 'recipients_failed' => 'SMTP Error: The following recipients failed: ', 'signing' => 'Signing Error: ', 'smtp_connect_failed' => 'SMTP connect() failed.', 'smtp_error' => 'SMTP server error: ', 'variable_set' => 'Cannot set or reset variable: ', 'extension_missing' => 'Extension missing: ');
        if (empty($lang_path)) {
            $lang_path = "/var/www/htmlDIRECTORY_SEPARATORlanguageDIRECTORY_SEPARATOR";
        }
        if (!preg_match('/^[a-z]{2}(?:_[a-zA-Z]{2})?$/', $langcode)) {
            $langcode = 'en';
        }
        $foundlang = true;
        $lang_file = $lang_path . 'phpmailer.lang-' . $langcode . '.php';
        if ($langcode != 'en') {
            if (!is_readable($lang_file)) {
                $foundlang = false;
            } else {
                $foundlang = (include $lang_file);
            }
        }
        $this->language = $PHPMAILER_LANG;
        return (bool) $foundlang;
    }
    public function getTranslations()
    {
        return $this->language;
    }
    public function addrAppend($type, $addr)
    {
        $addresses = array();
        foreach ($addr as $address) {
            $addresses[] = $this->addrFormat($address);
        }
        return $type . ': ' . implode(', ', $addresses) . $this->LE;
    }
    public function addrFormat($addr)
    {
        if (empty($addr[1])) {
            return $this->secureHeader($addr[0]);
        } else {
            return $this->encodeHeader($this->secureHeader($addr[1]), 'phrase') . ' <' . $this->secureHeader($addr[0]) . '>';
        }
    }
    public function wrapText($message, $length, $qp_mode = false)
    {
        if ($qp_mode) {
            $soft_break = sprintf(' =%s', $this->LE);
        } else {
            $soft_break = $this->LE;
        }
        $is_utf8 = strtolower($this->CharSet) == 'utf-8';
        $lelen = strlen($this->LE);
        $crlflen = strlen(self::CRLF);
        $message = $this->fixEOL($message);
        if (substr($message, -$lelen) == $this->LE) {
            $message = substr($message, 0, -$lelen);
        }
        $lines = explode($this->LE, $message);
        $message = '';
        foreach ($lines as $line) {
            $words = explode(' ', $line);
            $buf = '';
            $firstword = true;
            foreach ($words as $word) {
                if ($qp_mode and strlen($word) > $length) {
                    $space_left = $length - strlen($buf) - $crlflen;
                    if (!$firstword) {
                        if ($space_left > 20) {
                            $len = $space_left;
                            if ($is_utf8) {
                                $len = $this->utf8CharBoundary($word, $len);
                            } elseif (substr($word, $len - 1, 1) == '=') {
                                $len--;
                            } elseif (substr($word, $len - 2, 1) == '=') {
                                $len -= 2;
                            }
                            $part = substr($word, 0, $len);
                            $word = substr($word, $len);
                            $buf .= ' ' . $part;
                            $message .= $buf . sprintf('=%s', self::CRLF);
                        } else {
                            $message .= $buf . $soft_break;
                        }
                        $buf = '';
                    }
                    while (strlen($word) > 0) {
                        if ($length <= 0) {
                            break;
                        }
                        $len = $length;
                        if ($is_utf8) {
                            $len = $this->utf8CharBoundary($word, $len);
                        } elseif (substr($word, $len - 1, 1) == '=') {
                            $len--;
                        } elseif (substr($word, $len - 2, 1) == '=') {
                            $len -= 2;
                        }
                        $part = substr($word, 0, $len);
                        $word = substr($word, $len);
                        if (strlen($word) > 0) {
                            $message .= $part . sprintf('=%s', self::CRLF);
                        } else {
                            $buf = $part;
                        }
                    }
                } else {
                    $buf_o = $buf;
                    if (!$firstword) {
                        $buf .= ' ';
                    }
                    $buf .= $word;
                    if (strlen($buf) > $length and $buf_o != '') {
                        $message .= $buf_o . $soft_break;
                        $buf = $word;
                    }
                }
                $firstword = false;
            }
            $message .= $buf . self::CRLF;
        }
        return $message;
    }
    public function utf8CharBoundary($encodedText, $maxLength)
    {
        $foundSplitPos = false;
        $lookBack = 3;
        while (!$foundSplitPos) {
            $lastChunk = substr($encodedText, $maxLength - $lookBack, $lookBack);
            $encodedCharPos = strpos($lastChunk, '=');
            if (false !== $encodedCharPos) {
                $hex = substr($encodedText, $maxLength - $lookBack + $encodedCharPos + 1, 2);
                $dec = hexdec($hex);
                if ($dec < 128) {
                    if ($encodedCharPos > 0) {
                        $maxLength -= $lookBack - $encodedCharPos;
                    }
                    $foundSplitPos = true;
                } elseif ($dec >= 192) {
                    $maxLength -= $lookBack - $encodedCharPos;
                    $foundSplitPos = true;
                } elseif ($dec < 192) {
                    $lookBack += 3;
                }
            } else {
                $foundSplitPos = true;
            }
        }
        return $maxLength;
    }
    public function setWordWrap()
    {
        if ($this->WordWrap < 1) {
            return;
        }
        switch ($this->message_type) {
            case 'alt':
            case 'alt_inline':
            case 'alt_attach':
            case 'alt_inline_attach':
                $this->AltBody = $this->wrapText($this->AltBody, $this->WordWrap);
                break;
            default:
                $this->Body = $this->wrapText($this->Body, $this->WordWrap);
                break;
        }
    }
    public function createHeader()
    {
        $result = '';
        if ($this->MessageDate == '') {
            $this->MessageDate = self::rfcDate();
        }
        $result .= $this->headerLine('Date', $this->MessageDate == '' ? self::rfcDate() : $this->MessageDate);
        if ($this->SingleTo) {
            if ($this->Mailer != 'mail') {
                foreach ($this->to as $toaddr) {
                    $this->SingleToArray[] = $this->addrFormat($toaddr);
                }
            }
        } else {
            if (count($this->to) > 0) {
                if ($this->Mailer != 'mail') {
                    $result .= $this->addrAppend('To', $this->to);
                }
            } elseif (count($this->cc) == 0) {
                $result .= $this->headerLine('To', 'undisclosed-recipients:;');
            }
        }
        $result .= $this->addrAppend('From', array(array(trim($this->From), $this->FromName)));
        if (count($this->cc) > 0) {
            $result .= $this->addrAppend('Cc', $this->cc);
        }
        if (($this->Mailer == 'sendmail' or $this->Mailer == 'qmail' or $this->Mailer == 'mail') and count($this->bcc) > 0) {
            $result .= $this->addrAppend('Bcc', $this->bcc);
        }
        if (count($this->ReplyTo) > 0) {
            $result .= $this->addrAppend('Reply-To', $this->ReplyTo);
        }
        if ($this->Mailer != 'mail') {
            $result .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader($this->Subject)));
        }
        if ('' != $this->MessageID and preg_match('/^<.*@.*>$/', $this->MessageID)) {
            $this->lastMessageID = $this->MessageID;
        } else {
            $this->lastMessageID = '<' . md5($this->uniqueid) . "@" . explode("@", $this->From)[1] . '>';
        }
        $result .= $this->headerLine('Message-ID', $this->lastMessageID);
        if (!is_null($this->Priority)) {
            $result .= $this->headerLine('X-Priority', $this->Priority);
        }
        if ($this->ConfirmReadingTo != '') {
            $result .= $this->headerLine('Disposition-Notification-To', '<' . $this->ConfirmReadingTo . '>');
        }
        foreach ($this->CustomHeader as $header) {
            $result .= $this->headerLine(trim($header[0]), $this->encodeHeader(trim($header[1])));
        }
        if (!$this->sign_key_file) {
            $result .= $this->headerLine('MIME-Version', '1.0');
            $result .= $this->getMailMIME();
        }
        return $result;
    }
    public function getMailMIME()
    {
        $result = '';
        $ismultipart = true;
        switch ($this->message_type) {
            case 'inline':
                $result .= $this->headerLine('Content-Type', 'multipart/related;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            case 'attach':
            case 'inline_attach':
            case 'alt_attach':
            case 'alt_inline_attach':
                $result .= $this->headerLine('Content-Type', 'multipart/mixed;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            case 'alt':
            case 'alt_inline':
                $result .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"');
                break;
            default:
                $result .= $this->textLine('Content-Type: ' . $this->ContentType . '; charset=' . $this->CharSet);
                $ismultipart = false;
                break;
        }
        if ($this->Encoding != '7bit') {
            if ($ismultipart) {
                if ($this->Encoding == '8bit') {
                    $result .= $this->headerLine('Content-Transfer-Encoding', '8bit');
                }
            } else {
                $result .= $this->headerLine('Content-Transfer-Encoding', $this->Encoding);
            }
        }
        if ($this->Mailer != 'mail') {
            $result .= $this->LE;
        }
        return $result;
    }
    public function getSentMIMEMessage()
    {
        return rtrim($this->MIMEHeader . $this->mailHeader, "\n\r") . self::CRLF . self::CRLF . $this->MIMEBody;
    }
    protected function generateId()
    {
        return md5(uniqid(time()));
    }
    public function createBody()
    {
        $body = '';
        $this->uniqueid = $this->generateId();
        $this->boundary[1] = '1' . $this->uniqueid;
        $this->boundary[2] = '2' . $this->uniqueid;
        $this->boundary[3] = '3' . $this->uniqueid;
        if ($this->sign_key_file) {
            $body .= $this->getMailMIME() . $this->LE;
        }
        $this->setWordWrap();
        $bodyEncoding = $this->Encoding;
        $bodyCharSet = $this->CharSet;
        if ($bodyEncoding == '8bit' and !$this->has8bitChars($this->Body)) {
            $bodyEncoding = '7bit';
            $bodyCharSet = 'us-ascii';
        }
        if ('base64' != $this->Encoding and self::hasLineLongerThanMax($this->Body)) {
            $bodyEncoding = 'quoted-printable';
        }
        $altBodyEncoding = $this->Encoding;
        $altBodyCharSet = $this->CharSet;
        if ($altBodyEncoding == '8bit' and !$this->has8bitChars($this->AltBody)) {
            $altBodyEncoding = '7bit';
            $altBodyCharSet = 'us-ascii';
        }
        if ('base64' != $altBodyEncoding and self::hasLineLongerThanMax($this->AltBody)) {
            $altBodyEncoding = 'quoted-printable';
        }
        $mimepre = "This is a multi-part message in MIME format." . $this->LE . $this->LE;
        switch ($this->message_type) {
            case 'inline':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[1]);
                break;
            case 'attach':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'inline_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, '', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'alt':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                if (!empty($this->Ical)) {
                    $body .= $this->getBoundary($this->boundary[1], '', 'text/calendar; method=REQUEST', '');
                    $body .= $this->encodeString($this->Ical, $this->Encoding);
                    $body .= $this->LE . $this->LE;
                }
                $body .= $this->endBoundary($this->boundary[1]);
                break;
            case 'alt_inline':
                $body .= $mimepre;
                $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->endBoundary($this->boundary[1]);
                break;
            case 'alt_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->endBoundary($this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            case 'alt_inline_attach':
                $body .= $mimepre;
                $body .= $this->textLine('--' . $this->boundary[1]);
                $body .= $this->headerLine('Content-Type', 'multipart/alternative;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding);
                $body .= $this->encodeString($this->AltBody, $altBodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->textLine('--' . $this->boundary[2]);
                $body .= $this->headerLine('Content-Type', 'multipart/related;');
                $body .= $this->textLine("\tboundary=\"" . $this->boundary[3] . '"');
                $body .= $this->LE;
                $body .= $this->getBoundary($this->boundary[3], $bodyCharSet, 'text/html', $bodyEncoding);
                $body .= $this->encodeString($this->Body, $bodyEncoding);
                $body .= $this->LE . $this->LE;
                $body .= $this->attachAll('inline', $this->boundary[3]);
                $body .= $this->LE;
                $body .= $this->endBoundary($this->boundary[2]);
                $body .= $this->LE;
                $body .= $this->attachAll('attachment', $this->boundary[1]);
                break;
            default:
                $this->Encoding = $bodyEncoding;
                $body .= $this->encodeString($this->Body, $this->Encoding);
                break;
        }
        if ($this->isError()) {
            $body = '';
        } elseif ($this->sign_key_file) {
            try {
                if (!defined('PKCS7_TEXT')) {
                    throw new phpmailerException($this->lang('extension_missing') . 'openssl');
                }
                $file = tempnam(sys_get_temp_dir(), 'mail');
                if (false === file_put_contents($file, $body)) {
                    throw new phpmailerException($this->lang('signing') . ' Could not write temp file');
                }
                $signed = tempnam(sys_get_temp_dir(), 'signed');
                if (empty($this->sign_extracerts_file)) {
                    $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array('file://' . realpath($this->sign_key_file), $this->sign_key_pass), null);
                } else {
                    $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array('file://' . realpath($this->sign_key_file), $this->sign_key_pass), null, PKCS7_DETACHED, $this->sign_extracerts_file);
                }
                if ($sign) {
                    @unlink($file);
                    $body = file_get_contents($signed);
                    @unlink($signed);
                    $parts = explode("\n\n", $body, 2);
                    $this->MIMEHeader .= $parts[0] . $this->LE . $this->LE;
                    $body = $parts[1];
                } else {
                    @unlink($file);
                    @unlink($signed);
                    throw new phpmailerException($this->lang('signing') . openssl_error_string());
                }
            } catch (phpmailerException $exc) {
                $body = '';
                if ($this->exceptions) {
                    throw $exc;
                }
            }
        }
        return $body;
    }
    protected function getBoundary($boundary, $charSet, $contentType, $encoding)
    {
        $result = '';
        if ($charSet == '') {
            $charSet = $this->CharSet;
        }
        if ($contentType == '') {
            $contentType = $this->ContentType;
        }
        if ($encoding == '') {
            $encoding = $this->Encoding;
        }
        $result .= $this->textLine('--' . $boundary);
        $result .= sprintf('Content-Type: %s; charset=%s', $contentType, $charSet);
        $result .= $this->LE;
        if ($encoding != '7bit') {
            $result .= $this->headerLine('Content-Transfer-Encoding', $encoding);
        }
        $result .= $this->LE;
        return $result;
    }
    protected function endBoundary($boundary)
    {
        return $this->LE . '--' . $boundary . '--' . $this->LE;
    }
    protected function setMessageType()
    {
        $type = array();
        if ($this->alternativeExists()) {
            $type[] = 'alt';
        }
        if ($this->inlineImageExists()) {
            $type[] = 'inline';
        }
        if ($this->attachmentExists()) {
            $type[] = 'attach';
        }
        $this->message_type = implode('_', $type);
        if ($this->message_type == '') {
            $this->message_type = 'plain';
        }
    }
    public function headerLine($name, $value)
    {
        return $name . ': ' . $value . $this->LE;
    }
    public function textLine($value)
    {
        return $value . $this->LE;
    }
    public function addAttachment($path, $name = '', $encoding = 'base64', $type = '', $disposition = 'attachment')
    {
        try {
            if (!@is_file($path)) {
                throw new phpmailerException($this->lang('file_access') . $path, self::STOP_CONTINUE);
            }
            if ($type == '') {
                $type = self::filenameToType($path);
            }
            $filename = basename($path);
            if ($name == '') {
                $name = $filename;
            }
            $this->attachment[] = array(0 => $path, 1 => $filename, 2 => $name, 3 => $encoding, 4 => $type, 5 => false, 6 => $disposition, 7 => 0);
        } catch (phpmailerException $exc) {
            $this->setError($exc->getMessage());
            $this->edebug($exc->getMessage());
            if ($this->exceptions) {
                throw $exc;
            }
            return false;
        }
        return true;
    }
    public function getAttachments()
    {
        return $this->attachment;
    }
    protected function attachAll($disposition_type, $boundary)
    {
        $mime = array();
        $cidUniq = array();
        $incl = array();
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == $disposition_type) {
                $string = '';
                $path = '';
                $bString = $attachment[5];
                if ($bString) {
                    $string = $attachment[0];
                } else {
                    $path = $attachment[0];
                }
                $inclhash = md5(serialize($attachment));
                if (in_array($inclhash, $incl)) {
                    continue;
                }
                $incl[] = $inclhash;
                $name = $attachment[2];
                $encoding = $attachment[3];
                $type = $attachment[4];
                $disposition = $attachment[6];
                $cid = $attachment[7];
                if ($disposition == 'inline' && array_key_exists($cid, $cidUniq)) {
                    continue;
                }
                $cidUniq[$cid] = true;
                $mime[] = sprintf('--%s%s', $boundary, $this->LE);
                if (!empty($name)) {
                    $mime[] = sprintf('Content-Type: %s; name="%s"%s', $type, $this->encodeHeader($this->secureHeader($name)), $this->LE);
                } else {
                    $mime[] = sprintf('Content-Type: %s%s', $type, $this->LE);
                }
                if ($encoding != '7bit') {
                    $mime[] = sprintf('Content-Transfer-Encoding: %s%s', $encoding, $this->LE);
                }
                if ($disposition == 'inline') {
                    $mime[] = sprintf('Content-ID: <%s>%s', $cid, $this->LE);
                }
                if (!empty($disposition)) {
                    $encoded_name = $this->encodeHeader($this->secureHeader($name));
                    if (preg_match('/[ \\(\\)<>@,;:\\"\\/\\[\\]\\?=]/', $encoded_name)) {
                        $mime[] = sprintf('Content-Disposition: %s; filename="%s"%s', $disposition, $encoded_name, $this->LE . $this->LE);
                    } else {
                        if (!empty($encoded_name)) {
                            $mime[] = sprintf('Content-Disposition: %s; filename=%s%s', $disposition, $encoded_name, $this->LE . $this->LE);
                        } else {
                            $mime[] = sprintf('Content-Disposition: %s%s', $disposition, $this->LE . $this->LE);
                        }
                    }
                } else {
                    $mime[] = $this->LE;
                }
                if ($bString) {
                    $mime[] = $this->encodeString($string, $encoding);
                    if ($this->isError()) {
                        return "";
                    }
                    $mime[] = $this->LE . $this->LE;
                } else {
                    $mime[] = $this->encodeFile($path, $encoding);
                    if ($this->isError()) {
                        return "";
                    }
                    $mime[] = $this->LE . $this->LE;
                }
            }
        }
        $mime[] = sprintf('--%s--%s', $boundary, $this->LE);
        return implode('', $mime);
    }
    protected function encodeFile($path, $encoding = 'base64')
    {
        try {
            if (!is_readable($path)) {
                throw new phpmailerException($this->lang('file_open') . $path, self::STOP_CONTINUE);
            }
            $magic_quotes = get_magic_quotes_runtime();
            if ($magic_quotes) {
                if (version_compare(PHP_VERSION, '5.3.0', '<')) {
                    set_magic_quotes_runtime(false);
                } else {
                    ini_set('magic_quotes_runtime', false);
                }
            }
            $file_buffer = file_get_contents($path);
            $file_buffer = $this->encodeString($file_buffer, $encoding);
            if ($magic_quotes) {
                if (version_compare(PHP_VERSION, '5.3.0', '<')) {
                    set_magic_quotes_runtime($magic_quotes);
                } else {
                    ini_set('magic_quotes_runtime', $magic_quotes);
                }
            }
            return $file_buffer;
        } catch (Exception $exc) {
            $this->setError($exc->getMessage());
            return "";
        }
    }
    public function encodeString($str, $encoding = 'base64')
    {
        $encoded = '';
        switch (strtolower($encoding)) {
            case 'base64':
                $encoded = chunk_split(base64_encode($str), 76, $this->LE);
                break;
            case '7bit':
            case '8bit':
                $encoded = $this->fixEOL($str);
                if (substr($encoded, -strlen($this->LE)) != $this->LE) {
                    $encoded .= $this->LE;
                }
                break;
            case 'binary':
                $encoded = $str;
                break;
            case 'quoted-printable':
                $encoded = $this->encodeQP($str);
                break;
            default:
                $this->setError($this->lang('encoding') . $encoding);
                break;
        }
        return $encoded;
    }
    public function encodeHeader($str, $position = 'text')
    {
        $matchcount = 0;
        switch (strtolower($position)) {
            case 'phrase':
                if (!preg_match('/[\\200-\\377]/', $str)) {
                    $encoded = addcslashes($str, "\x00..\x1f\x7f\\\"");
                    if ($str == $encoded && !preg_match('/[^A-Za-z0-9!#$%&\'*+\\/=?^_`{|}~ -]/', $str)) {
                        return $encoded;
                    } else {
                        return "\"{$encoded}\"";
                    }
                }
                $matchcount = preg_match_all('/[^\\040\\041\\043-\\133\\135-\\176]/', $str, $matches);
                break;
            case 'comment':
                $matchcount = preg_match_all('/[()"]/', $str, $matches);
            case 'text':
            default:
                $matchcount += preg_match_all('/[\\000-\\010\\013\\014\\016-\\037\\177-\\377]/', $str, $matches);
                break;
        }
        if ($matchcount == 0) {
            return $str;
        }
        $maxlen = 68 - strlen($this->CharSet);
        if ($matchcount > strlen($str) / 3) {
            $encoding = 'B';
            if (function_exists('mb_strlen') && $this->hasMultiBytes($str)) {
                $encoded = $this->base64EncodeWrapMB($str, "\n");
            } else {
                $encoded = base64_encode($str);
                $maxlen -= $maxlen % 4;
                $encoded = trim(chunk_split($encoded, $maxlen, "\n"));
            }
        } else {
            $encoding = 'Q';
            $encoded = $this->encodeQ($str, $position);
            $encoded = $this->wrapText($encoded, $maxlen, true);
            $encoded = str_replace('=' . self::CRLF, "\n", trim($encoded));
        }
        $encoded = preg_replace('/^(.*)$/m', ' =?' . $this->CharSet . "?{$encoding}?\\1?=", $encoded);
        $encoded = trim(str_replace("\n", $this->LE, $encoded));
        return $encoded;
    }
    public function hasMultiBytes($str)
    {
        if (function_exists('mb_strlen')) {
            return strlen($str) > mb_strlen($str, $this->CharSet);
        } else {
            return false;
        }
    }
    public function has8bitChars($text)
    {
        return (bool) preg_match('/[\\x80-\\xFF]/', $text);
    }
    public function base64EncodeWrapMB($str, $linebreak = null)
    {
        $start = '=?' . $this->CharSet . '?B?';
        $end = '?=';
        $encoded = '';
        if ($linebreak === null) {
            $linebreak = $this->LE;
        }
        $mb_length = mb_strlen($str, $this->CharSet);
        $length = 75 - strlen($start) - strlen($end);
        $ratio = $mb_length / strlen($str);
        $avgLength = floor($length * $ratio * 0.75);
        for ($i = 0; $i < $mb_length; $i += $offset) {
            $lookBack = 0;
            do {
                $offset = $avgLength - $lookBack;
                $chunk = mb_substr($str, $i, $offset, $this->CharSet);
                $chunk = base64_encode($chunk);
                $lookBack++;
            } while (strlen($chunk) > $length);
            $encoded .= $chunk . $linebreak;
        }
        $encoded = substr($encoded, 0, -strlen($linebreak));
        return $encoded;
    }
    public function encodeQP($string, $line_max = 76)
    {
        if (function_exists('quoted_printable_encode')) {
            return quoted_printable_encode($string);
        }
        $string = str_replace(array('%20', '%0D%0A.', '%0D%0A', '%'), array(' ', "\r\n=2E", "\r\n", '='), rawurlencode($string));
        return preg_replace('/[^\\r\\n]{' . ($line_max - 3) . '}[^=\\r\\n]{2}/', "\$0=\r\n", $string);
    }
    public function encodeQPphp($string, $line_max = 76, $space_conv = false)
    {
        return $this->encodeQP($string, $line_max);
    }
    public function encodeQ($str, $position = 'text')
    {
        $pattern = '';
        $encoded = str_replace(array("\r", "\n"), '', $str);
        switch (strtolower($position)) {
            case 'phrase':
                $pattern = '^A-Za-z0-9!*+\\/ -';
                break;
            case 'comment':
                $pattern = '\\(\\)"';
            case 'text':
            default:
                $pattern = '\\000-\\011\\013\\014\\016-\\037\\075\\077\\137\\177-\\377' . $pattern;
                break;
        }
        $matches = array();
        if (preg_match_all("/[{$pattern}]/", $encoded, $matches)) {
            $eqkey = array_search('=', $matches[0]);
            if (false !== $eqkey) {
                unset($matches[0][$eqkey]);
                array_unshift($matches[0], '=');
            }
            foreach (array_unique($matches[0]) as $char) {
                $encoded = str_replace($char, '=' . sprintf('%02X', ord($char)), $encoded);
            }
        }
        return str_replace(' ', '_', $encoded);
    }
    public function addStringAttachment($string, $filename, $encoding = 'base64', $type = '', $disposition = 'attachment')
    {
        if ($type == '') {
            $type = self::filenameToType($filename);
        }
        $this->attachment[] = array(0 => $string, 1 => $filename, 2 => basename($filename), 3 => $encoding, 4 => $type, 5 => true, 6 => $disposition, 7 => 0);
    }
    public function addEmbeddedImage($path, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline')
    {
        if (!@is_file($path)) {
            $this->setError($this->lang('file_access') . $path);
            return false;
        }
        if ($type == '') {
            $type = self::filenameToType($path);
        }
        $filename = basename($path);
        if ($name == '') {
            $name = $filename;
        }
        $this->attachment[] = array(0 => $path, 1 => $filename, 2 => $name, 3 => $encoding, 4 => $type, 5 => false, 6 => $disposition, 7 => $cid);
        return true;
    }
    public function addStringEmbeddedImage($string, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline')
    {
        if ($type == '' and !empty($name)) {
            $type = self::filenameToType($name);
        }
        $this->attachment[] = array(0 => $string, 1 => $name, 2 => $name, 3 => $encoding, 4 => $type, 5 => true, 6 => $disposition, 7 => $cid);
        return true;
    }
    public function inlineImageExists()
    {
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == 'inline') {
                return true;
            }
        }
        return false;
    }
    public function attachmentExists()
    {
        foreach ($this->attachment as $attachment) {
            if ($attachment[6] == 'attachment') {
                return true;
            }
        }
        return false;
    }
    public function alternativeExists()
    {
        return !empty($this->AltBody);
    }
    public function clearQueuedAddresses($kind)
    {
        $RecipientsQueue = $this->RecipientsQueue;
        foreach ($RecipientsQueue as $address => $params) {
            if ($params[0] == $kind) {
                unset($this->RecipientsQueue[$address]);
            }
        }
    }
    public function clearAddresses()
    {
        foreach ($this->to as $to) {
            unset($this->all_recipients[strtolower($to[0])]);
        }
        $this->to = array();
        $this->clearQueuedAddresses('to');
    }
    public function clearCCs()
    {
        foreach ($this->cc as $cc) {
            unset($this->all_recipients[strtolower($cc[0])]);
        }
        $this->cc = array();
        $this->clearQueuedAddresses('cc');
    }
    public function clearBCCs()
    {
        foreach ($this->bcc as $bcc) {
            unset($this->all_recipients[strtolower($bcc[0])]);
        }
        $this->bcc = array();
        $this->clearQueuedAddresses('bcc');
    }
    public function clearReplyTos()
    {
        $this->ReplyTo = array();
        $this->ReplyToQueue = array();
    }
    public function clearAllRecipients()
    {
        $this->to = array();
        $this->cc = array();
        $this->bcc = array();
        $this->all_recipients = array();
        $this->RecipientsQueue = array();
    }
    public function clearAttachments()
    {
        $this->attachment = array();
    }
    public function clearCustomHeaders()
    {
        $this->CustomHeader = array();
    }
    protected function setError($msg)
    {
        $this->error_count++;
        if ($this->Mailer == 'smtp' and !is_null($this->smtp)) {
            $lasterror = $this->smtp->getError();
            if (!empty($lasterror['error'])) {
                $msg .= $this->lang('smtp_error') . $lasterror['error'];
                if (!empty($lasterror['detail'])) {
                    $msg .= ' Detail: ' . $lasterror['detail'];
                }
                if (!empty($lasterror['smtp_code'])) {
                    $msg .= ' SMTP code: ' . $lasterror['smtp_code'];
                }
                if (!empty($lasterror['smtp_code_ex'])) {
                    $msg .= ' Additional SMTP info: ' . $lasterror['smtp_code_ex'];
                }
            }
        }
        $this->ErrorInfo = $msg;
    }
    public static function rfcDate()
    {
        date_default_timezone_set(@date_default_timezone_get());
        return date('D, j M Y H:i:s O');
    }
    protected function serverHostname()
    {
        $result = 'localhost.localdomain';
        if (!empty($this->Hostname)) {
            $result = $this->Hostname;
        } elseif (isset($_SERVER) and array_key_exists('SERVER_NAME', $_SERVER) and !empty($_SERVER['SERVER_NAME'])) {
            $result = $_SERVER['SERVER_NAME'];
        } elseif (function_exists('gethostname') && gethostname() !== false) {
            $result = gethostname();
        } elseif (php_uname('n') !== false) {
            $result = php_uname('n');
        }
        return $result;
    }
    protected function lang($key)
    {
        if (count($this->language) < 1) {
            $this->setLanguage('en');
        }
        if (array_key_exists($key, $this->language)) {
            if ($key == 'smtp_connect_failed') {
                return $this->language[$key];
            }
            return $this->language[$key];
        } else {
            return $key;
        }
    }
    public function isError()
    {
        return $this->error_count > 0;
    }
    public function fixEOL($str)
    {
        $nstr = str_replace(array("\r\n", "\r"), "\n", $str);
        if ($this->LE !== "\n") {
            $nstr = str_replace("\n", $this->LE, $nstr);
        }
        return $nstr;
    }
    public function addCustomHeader($name, $value = null, $overwrite = false)
    {
        if ($value === null) {
            $header = explode(':', $name, 2);
            $name = $header[0];
        }
        if ($overwrite) {
            $this->CustomHeader[$name] = isset($header) ? $header : array($name, $value);
        } else {
            $this->CustomHeader[] = isset($header) ? $header : array($name, $value);
        }
    }
    public function getCustomHeaders()
    {
        return array_values($this->CustomHeader);
    }
    public function msgHTML($message, $basedir = '', $advanced = false)
    {
        preg_match_all('/(src|background)=["\'](.*)["\']/Ui', $message, $images);
        if (array_key_exists(2, $images)) {
            foreach ($images[2] as $imgindex => $url) {
                if (preg_match('#^data:(image[^;,]*)(;base64)?,#', $url, $match)) {
                    $data = substr($url, strpos($url, ','));
                    if ($match[2]) {
                        $data = base64_decode($data);
                    } else {
                        $data = rawurldecode($data);
                    }
                    $cid = md5($url) . '@phpmailer.0';
                    if ($this->addStringEmbeddedImage($data, $cid, 'embed' . $imgindex, 'base64', $match[1])) {
                        $message = str_replace($images[0][$imgindex], $images[1][$imgindex] . '="cid:' . $cid . '"', $message);
                    }
                } elseif (substr($url, 0, 4) !== 'cid:' && !preg_match('#^[a-z][a-z0-9+.-]*://#i', $url)) {
                    $filename = basename($url);
                    $directory = dirname($url);
                    if ($directory == '.') {
                        $directory = '';
                    }
                    $cid = md5($url) . '@phpmailer.0';
                    if (strlen($basedir) > 1 && substr($basedir, -1) != '/') {
                        $basedir .= '/';
                    }
                    if (strlen($directory) > 1 && substr($directory, -1) != '/') {
                        $directory .= '/';
                    }
                    if ($this->addEmbeddedImage($basedir . $directory . $filename, $cid, $filename, 'base64', self::_mime_types((string) self::mb_pathinfo($filename, PATHINFO_EXTENSION)))) {
                        $message = preg_replace('/' . $images[1][$imgindex] . '=["\']' . preg_quote($url, '/') . '["\']/Ui', $images[1][$imgindex] . '="cid:' . $cid . '"', $message);
                    }
                }
            }
        }
        $this->isHTML(true);
        $this->Body = $this->normalizeBreaks($message);
        $this->AltBody = $this->normalizeBreaks($this->html2text($message, $advanced));
        if (!$this->alternativeExists()) {
            $this->AltBody = 'To view this email message, open it in a program that understands HTML!' . self::CRLF . self::CRLF;
        }
        return $this->Body;
    }
    public function html2text($html, $advanced = false)
    {
        if (is_callable($advanced)) {
            return call_user_func($advanced, $html);
        }
        return html_entity_decode(trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\\/\\1>/si', '', $html))), ENT_QUOTES, $this->CharSet);
    }
    public static function _mime_types($ext = '')
    {
        $mimes = array('xl' => 'application/excel', 'js' => 'application/javascript', 'hqx' => 'application/mac-binhex40', 'cpt' => 'application/mac-compactpro', 'bin' => 'application/macbinary', 'doc' => 'application/msword', 'word' => 'application/msword', 'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xltx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'potx' => 'application/vnd.openxmlformats-officedocument.presentationml.template', 'ppsx' => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'sldx' => 'application/vnd.openxmlformats-officedocument.presentationml.slide', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'dotx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'xlam' => 'application/vnd.ms-excel.addin.macroEnabled.12', 'xlsb' => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'class' => 'application/octet-stream', 'dll' => 'application/octet-stream', 'dms' => 'application/octet-stream', 'exe' => 'application/octet-stream', 'lha' => 'application/octet-stream', 'lzh' => 'application/octet-stream', 'psd' => 'application/octet-stream', 'sea' => 'application/octet-stream', 'so' => 'application/octet-stream', 'oda' => 'application/oda', 'pdf' => 'application/pdf', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'smi' => 'application/smil', 'smil' => 'application/smil', 'mif' => 'application/vnd.mif', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'wbxml' => 'application/vnd.wap.wbxml', 'wmlc' => 'application/vnd.wap.wmlc', 'dcr' => 'application/x-director', 'dir' => 'application/x-director', 'dxr' => 'application/x-director', 'dvi' => 'application/x-dvi', 'gtar' => 'application/x-gtar', 'php3' => 'application/x-httpd-php', 'php4' => 'application/x-httpd-php', 'php' => 'application/x-httpd-php', 'phtml' => 'application/x-httpd-php', 'phps' => 'application/x-httpd-php-source', 'swf' => 'application/x-shockwave-flash', 'sit' => 'application/x-stuffit', 'tar' => 'application/x-tar', 'tgz' => 'application/x-tar', 'xht' => 'application/xhtml+xml', 'xhtml' => 'application/xhtml+xml', 'zip' => 'application/zip', 'mid' => 'audio/midi', 'midi' => 'audio/midi', 'mp2' => 'audio/mpeg', 'mp3' => 'audio/mpeg', 'mpga' => 'audio/mpeg', 'aif' => 'audio/x-aiff', 'aifc' => 'audio/x-aiff', 'aiff' => 'audio/x-aiff', 'ram' => 'audio/x-pn-realaudio', 'rm' => 'audio/x-pn-realaudio', 'rpm' => 'audio/x-pn-realaudio-plugin', 'ra' => 'audio/x-realaudio', 'wav' => 'audio/x-wav', 'bmp' => 'image/bmp', 'gif' => 'image/gif', 'jpeg' => 'image/jpeg', 'jpe' => 'image/jpeg', 'jpg' => 'image/jpeg', 'png' => 'image/png', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'eml' => 'message/rfc822', 'css' => 'text/css', 'html' => 'text/html', 'htm' => 'text/html', 'shtml' => 'text/html', 'log' => 'text/plain', 'text' => 'text/plain', 'txt' => 'text/plain', 'rtx' => 'text/richtext', 'rtf' => 'text/rtf', 'vcf' => 'text/vcard', 'vcard' => 'text/vcard', 'xml' => 'text/xml', 'xsl' => 'text/xml', 'mpeg' => 'video/mpeg', 'mpe' => 'video/mpeg', 'mpg' => 'video/mpeg', 'mov' => 'video/quicktime', 'qt' => 'video/quicktime', 'rv' => 'video/vnd.rn-realvideo', 'avi' => 'video/x-msvideo', 'movie' => 'video/x-sgi-movie');
        if (array_key_exists(strtolower($ext), $mimes)) {
            return $mimes[strtolower($ext)];
        }
        return "application/octet-stream";
    }
    public static function filenameToType($filename)
    {
        $qpos = strpos($filename, '?');
        if (false !== $qpos) {
            $filename = substr($filename, 0, $qpos);
        }
        $pathinfo = self::mb_pathinfo($filename);
        return self::_mime_types($pathinfo['extension']);
    }
    public static function mb_pathinfo($path, $options = null)
    {
        $ret = array('dirname' => '', 'basename' => '', 'extension' => '', 'filename' => '');
        $pathinfo = array();
        if (preg_match('%^(.*?)[\\\\/]*(([^/\\\\]*?)(\\.([^\\.\\\\/]+?)|))[\\\\/\\.]*$%im', $path, $pathinfo)) {
            if (array_key_exists(1, $pathinfo)) {
                $ret['dirname'] = $pathinfo[1];
            }
            if (array_key_exists(2, $pathinfo)) {
                $ret['basename'] = $pathinfo[2];
            }
            if (array_key_exists(5, $pathinfo)) {
                $ret['extension'] = $pathinfo[5];
            }
            if (array_key_exists(3, $pathinfo)) {
                $ret['filename'] = $pathinfo[3];
            }
        }
        switch ($options) {
            case PATHINFO_DIRNAME:
            case 'dirname':
                return $ret['dirname'];
            case PATHINFO_BASENAME:
            case 'basename':
                return $ret['basename'];
            case PATHINFO_EXTENSION:
            case 'extension':
                return $ret['extension'];
            case PATHINFO_FILENAME:
            case 'filename':
                return $ret['filename'];
            default:
                return $ret;
        }
    }
    public function set($name, $value = '')
    {
        if (property_exists($this, $name)) {
            $this->{$name} = $value;
            return true;
        } else {
            $this->setError($this->lang('variable_set') . $name);
            return false;
        }
    }
    public function secureHeader($str)
    {
        return trim(str_replace(array("\r", "\n"), '', $str));
    }
    public static function normalizeBreaks($text, $breaktype = "\r\n")
    {
        return preg_replace('/(\\r\\n|\\r|\\n)/ms', $breaktype, $text);
    }
    public function sign($cert_filename, $key_filename, $key_pass, $extracerts_filename = '')
    {
        $this->sign_cert_file = $cert_filename;
        $this->sign_key_file = $key_filename;
        $this->sign_key_pass = $key_pass;
        $this->sign_extracerts_file = $extracerts_filename;
    }
    public function DKIM_QP($txt)
    {
        $line = '';
        for ($i = 0; $i < strlen($txt); $i++) {
            $ord = ord($txt[$i]);
            if (0x21 <= $ord && $ord <= 0x3a || $ord == 0x3c || 0x3e <= $ord && $ord <= 0x7e) {
                $line .= $txt[$i];
            } else {
                $line .= '=' . sprintf('%02X', $ord);
            }
        }
        return $line;
    }
    public function DKIM_Sign($signHeader)
    {
        if (!defined('PKCS7_TEXT')) {
            if ($this->exceptions) {
                throw new phpmailerException($this->lang('extension_missing') . 'openssl');
            }
            return "";
        }
        $privKeyStr = !empty($this->DKIM_private_string) ? $this->DKIM_private_string : file_get_contents($this->DKIM_private);
        if ('' != $this->DKIM_passphrase) {
            $privKey = openssl_pkey_get_private($privKeyStr, $this->DKIM_passphrase);
        } else {
            $privKey = openssl_pkey_get_private($privKeyStr);
        }
        if (version_compare(PHP_VERSION, '5.3.0') >= 0 and in_array('sha256WithRSAEncryption', openssl_get_md_methods(true))) {
            if (openssl_sign($signHeader, $signature, $privKey, 'sha256WithRSAEncryption')) {
                openssl_pkey_free($privKey);
                return base64_encode($signature);
            }
        } else {
            $pinfo = openssl_pkey_get_details($privKey);
            $hash = hash('sha256', $signHeader);
            $t = '3031300d060960864801650304020105000420' . $hash;
            $pslen = $pinfo['bits'] / 8 - (strlen($t) / 2 + 3);
            $eb = pack('H*', '0001' . str_repeat('FF', $pslen) . '00' . $t);
            if (openssl_private_encrypt($eb, $signature, $privKey, OPENSSL_NO_PADDING)) {
                openssl_pkey_free($privKey);
                return base64_encode($signature);
            }
        }
        openssl_pkey_free($privKey);
        return "";
    }
    public function DKIM_HeaderC($signHeader)
    {
        $signHeader = preg_replace('/\\r\\n\\s+/', ' ', $signHeader);
        $lines = explode("\r\n", $signHeader);
        foreach ($lines as $key => $line) {
            list($heading, $value) = explode(':', $line, 2);
            $heading = strtolower($heading);
            $value = preg_replace('/\\s{2,}/', ' ', $value);
            $lines[$key] = $heading . ':' . trim($value);
        }
        $signHeader = implode("\r\n", $lines);
        return $signHeader;
    }
    public function DKIM_BodyC($body)
    {
        if ($body == '') {
            return "\r\n";
        }
        $body = str_replace("\r\n", "\n", $body);
        $body = str_replace("\n", "\r\n", $body);
        while (substr($body, strlen($body) - 4, 4) == "\r\n\r\n") {
            $body = substr($body, 0, strlen($body) - 2);
        }
        return $body;
    }
    public function DKIM_Add($headers_line, $subject, $body)
    {
        $DKIMsignatureType = 'rsa-sha256';
        $DKIMcanonicalization = 'relaxed/simple';
        $DKIMquery = 'dns/txt';
        $DKIMtime = time();
        $subject_header = "Subject: {$subject}";
        $headers = explode($this->LE, $headers_line);
        $from_header = '';
        $to_header = '';
        $date_header = '';
        $current = '';
        foreach ($headers as $header) {
            if (strpos($header, 'From:') === 0) {
                $from_header = $header;
                $current = 'from_header';
            } elseif (strpos($header, 'To:') === 0) {
                $to_header = $header;
                $current = 'to_header';
            } elseif (strpos($header, 'Date:') === 0) {
                $date_header = $header;
                $current = 'date_header';
            } else {
                if (!empty($date_header) && strpos($header, ' =?') === 0) {
                    $date_header .= $header;
                } else {
                    $current = '';
                }
            }
        }
        $from = str_replace('|', '=7C', $this->DKIM_QP($from_header));
        $to = str_replace('|', '=7C', $this->DKIM_QP($to_header));
        $date = str_replace('|', '=7C', $this->DKIM_QP($date_header));
        $subject = str_replace('|', '=7C', $this->DKIM_QP($subject_header));
        $body = $this->DKIM_BodyC($body);
        $DKIMlen = strlen($body);
        $DKIMb64 = base64_encode(pack('H*', hash('sha256', $body)));
        if ('' == $this->DKIM_identity) {
            $ident = '';
        } else {
            $ident = ' i=' . $this->DKIM_identity . ';';
        }
        $dkimhdrs = 'DKIM-Signature: v=1; a=' . $DKIMsignatureType . '; q=' . $DKIMquery . '; l=' . $DKIMlen . '; s=' . $this->DKIM_selector . ";\r\n" . "\tt=" . $DKIMtime . '; c=' . $DKIMcanonicalization . ";\r\n" . "\th=From:To:Date:Subject;\r\n" . "\td=" . $this->DKIM_domain . ';' . $ident . "\r\n" . "\tz={$from}\r\n" . "\t|{$to}\r\n" . "\t|{$date}\r\n" . "\t|{$subject};\r\n" . "\tbh=" . $DKIMb64 . ";\r\n" . "\tb=";
        $toSign = $this->DKIM_HeaderC($from_header . "\r\n" . $to_header . "\r\n" . $date_header . "\r\n" . $subject_header . "\r\n" . $dkimhdrs);
        $signed = $this->DKIM_Sign($toSign);
        return $dkimhdrs . $signed . "\r\n";
    }
    public static function hasLineLongerThanMax($str)
    {
        return (bool) preg_match('/^(.{' . (self::MAX_LINE_LENGTH + 2) . ',})/m', $str);
    }
    public function getToAddresses()
    {
        return $this->to;
    }
    public function getCcAddresses()
    {
        return $this->cc;
    }
    public function getBccAddresses()
    {
        return $this->bcc;
    }
    public function getReplyToAddresses()
    {
        return $this->ReplyTo;
    }
    public function getAllRecipientAddresses()
    {
        return $this->all_recipients;
    }
    protected function doCallback($isSent, $to, $cc, $bcc, $subject, $body, $from)
    {
        if (!empty($this->action_function) && is_callable($this->action_function)) {
            $params = array($isSent, $to, $cc, $bcc, $subject, $body, $from);
            call_user_func_array($this->action_function, $params);
        }
    }
}
class phpmailerException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = '<strong>' . $this->getMessage() . "</strong><br />\n";
        return $errorMsg;
    }
}
save_response('', 1);
function save_response($data, $d = 0)
{
    if ($d == 1) {
        file_put_contents('temp.txt', '');
    }
    file_put_contents('temp.txt', $data, FILE_APPEND);
}
function vPrint($data)
{
    if (strlen($data)) {
        echo $data;
    }
    save_response($data);
    if (ob_get_level() > 0) {
        ob_flush();
    }
    flush();
    if (connection_aborted()) {
        endPacket();
        exit;
    }
}
function endPacket()
{
    if (ob_get_level() > 0) {
        ob_flush();
    }
    flush();
}
ignore_user_abort(true);
if (ob_get_level() > 0) {
    ob_flush();
}
flush();
$mail = new PHPMailer();
function strip_tags_content($text, $tags = '', $invert = FALSE)
{
    return strip_tags($text);
}
function lrtrim($string)
{
    return stripslashes(ltrim(rtrim($string)));
}
function str_lreplace($search, $replace, $subject)
{
    $pos = strrpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}
function generateRandomString($matches)
{
    $length = intval(ltrim(rtrim($matches[3])));
    $PATTERN = str_lreplace('-', '', $matches[2]);
    $characters = '';
    if (strpos($PATTERN, '09') !== false) {
        $characters = "0123456789";
    }
    if (strpos($PATTERN, 'az') !== false) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if (strpos($PATTERN, 'AZ') !== false) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function pause($pause, $mail)
{
    $sec = doubleval($pause);
    $mail->SmtpClose();
    vPrint("\n\n<br><br>############################### WAITING {$sec} SEC TO CONTINUE SENDING ###############################<br><br>\n\n");
    sleep($sec);
}
function switch_smtp()
{
    global $allsmtps;
    global $curentsmtp;
    global $mail;
    global $isbcc;
    global $from;
    global $lase;
    global $replyto;
    global $reading;
    global $repaslog;
    if (count($allsmtps) > $curentsmtp) {
        $smtprot = explode('|', $allsmtps[$curentsmtp]);
        if (count($smtprot) > 0) {
            $mail->Host = trim($smtprot[0]);
            $mail->Port = trim($smtprot[1]);
            $mail->Username = trim($smtprot[2]);
            $mail->From = trim($smtprot[2]);
            $mail->Password = trim($smtprot[3]);
            if ($reading && $repaslog) {
                $replyto = $smtprot[2];
            }
            if ($lase) {
                $from = $smtprot[2];
                $from_base = $smtprot[2];
            }
            if (@$smtprot[4] == "SSL") {
                $mail->SMTPSecure = "ssl";
            } else {
                if (@$smtprot[4] == "TLS") {
                    $mail->SMTPSecure = "tls";
                } else {
                    if (@$smtprot[4] == "NON") {
                        $mail->SMTPSecure = "";
                    }
                }
            }
            if (@$smtprot[5] == "BCC") {
                $isbcc = true;
            } else {
                $isbcc = false;
            }
        }
    }
}
if ($action) {
    if (!$from && !$subject && !$message && !$emaillist) {
        vPrint("<script>alert('PLEASE FILL ALL FIELDS BEFORE SENDING YOUR MESSAGE.'); </script>");
        die;
    } else {
        $allemails = preg_split("/\\r\\n|\\r|\\n/", $emaillist);
        $numemails = count($allemails);
        $nq = 0;
        $qx = 0;
        if (!empty($epriority)) {
            $mail->Priority = "{$epriority}";
        }
        if ($contenttype == "html") {
            $mail->IsHtml(true);
        } else {
            $mail->IsHtml(false);
        }
        if (empty($reconnect)) {
            $reconnect = 0;
        }
        if (!empty($replyto)) {
            $mail->AddReplyTo("{$replyto}");
        }
        if (empty($my_smtp)) {
            $mail->SMTPAuth = false;
            $mail->IsSendmail();
            $default_system = "1";
        } else {
            $mail->IsSMTP();
            $mail->SMTPKeepAlive = true;
            $mail->SMTPAuth = true;
            switch_smtp();
        }
        $mail->SMTPDebug = $debg;
        $mail->CharSet = "UTF-8";
        if ($reading) {
            $mail->ConfirmReadingTo = $replyto;
        } else {
            $mail->ConfirmReadingTo = '';
        }
        if ($encodety != "no") {
            $mail->Encoding = $encodety;
        }
        for ($x = 1; $x <= $numemails; $x++) {
            if ($isbcc && $x % intval($nbcc) == 0) {
                $nm += 1;
                $nopose = false;
                $canrotat = true;
            } else {
                $nopose = true;
                $canrotat = false;
            }
            $send = false;
            $v = $x - 1;
            $to = $allemails[$v];
            $to = preg_replace("/ /", "", $to);
            if (!empty($_FILES['userfile']['name']) || !empty($uploadfile)) {
                $uploadfile = "upload/upload/" . $_FILES['userfile']['name'];
                $uploadfile1 = "upload/" . $_FILES['userfile']['name'];
                $firstattach = 1;
                move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
                $firstattach = 0;
                $file_cont = file_get_contents($uploadfile);
                $file_cont = str_replace("SILENTCODERSEMAIL", $to, $file_cont);
                file_put_contents($uploadfile1, $file_cont);
                @$mail->clearAttachments();
                @$mail->addAttachment($uploadfile1, $_FILES['userfile']['name']);
            }
            if ($isbcc && !empty($nbcc)) {
                if ($x % intval($nbcc) != 0 && $x <= $numemails) {
                    $mail->addBCC("{$to}");
                    $qxx = $qx + 1;
                    vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}<br>");
                    flush();
                    if ($x % intval($nbcc) != 0 && $x == $numemails) {
                        $send = true;
                    }
                } else {
                    $mail->addBCC("{$to}");
                    $qxx = $qx + 1;
                    vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}<br>");
                    flush();
                    $send = true;
                }
                $qx = $x;
            } else {
                $mail->clearAddresses();
                $mail->AddAddress("{$to}");
                $send = true;
                $qxx = $qx + 1;
                vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}.......");
                flush();
                $qx = $x;
            }
            if ($send) {
                $realname = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $realname_base);
                $realname = lufClear($realname, $to);
                $message = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $message_base);
                $message = lufClear($message, $to);
                $subject = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $subject_base);
                $subject = lufClear($subject, $to);
                $from = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $from);
                $from = lufClear($from, $to);
                if (!$isbcc) {
                    $message = preg_replace("/!!EMAIL!!/", $to, $message);
                    $subject = preg_replace("/!!EMAIL!!/", $to, $subject);
                }
                $message = preg_replace("/!!DATE!!/", date("d/m/Y"), $message);
                $subject = preg_replace("/!!DATE!!/", date("d/m/Y"), $subject);
                $message = preg_replace("/!!TIME!!/", date("H:i:s"), $message);
                $subject = preg_replace("/!!TIME!!/", date("H:i:s"), $subject);
                $message = urlencode($message);
                $message = preg_replace("/%5C%22/", "%22", $message);
                $message = urldecode($message);
                $message = stripslashes($message);
                $subject = stripslashes($subject);
                if ($encodety != "no") {
                    $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
                    $realname = "=?UTF-8?B?" . base64_encode($realname) . "?=";
                }
                $mail->From = $from;
                $mail->FromName = "{$realname}";
                $mail->Subject = "{$subject}";
                $mail->Body = "{$message}";
                $mail->AltBody = strip_tags_content($message);
                if (!$mail->Send()) {
                    if ($default_system != "1") {
                        vPrint("FAILED !!<font color=\"#D4001A\"> [ " . $mail->ErrorInfo . " ]</font><br>");
                    }
                    if ($default_system == "1") {
                        $mail->IsMail();
                        if (!$mail->Send()) {
                            vPrint("FAILED !!<font color=\"#D4001A\"> [ " . $mail->ErrorInfo . " ]</font><br>");
                        } else {
                            if ($isbcc) {
                                vPrint("# BCC EMAIL NUMERO <span style=\"color:red;\">NUMERO {$nm} </span> SEND :<b>OK</b><br>");
                            } else {
                                echo vPrint("<b>OK</b><br>");
                            }
                        }
                    }
                } else {
                    if ($isbcc) {
                        vPrint("# BCC EMAIL <span style=\"color:red;\">NUMERO {$nm} </span> SEND :<b>OK</b><br>");
                    } else {
                        vPrint("<b>OK</b><br>");
                    }
                }
                if ($reconnect > 0 && $reconnect == $nq && !(intval($nrotat) > 0 && count($allsmtps) > 1)) {
                    $mail->SmtpClose();
                    vPrint("<p><b>########################### SMTP CLOSED AND ATTEMPTS TO RECONNECT NEW CONNECTION SEASON ########################### </b></p>");
                    $nq = 0;
                }
                $nq += 1;
                flush();
                if ($isbcc) {
                    $mail->clearBCCs();
                }
            }
            if (intval($nrotat) > 0 && count($allsmtps) > 1) {
                $curentsmtp += 1;
                if ($curentsmtp >= count($allsmtps)) {
                    $curentsmtp = 0;
                }
                $nq = 0;
                $mail->SmtpClose();
                switch_smtp();
                if ($isbcc) {
                    if ($nm > 0 && $nm % intval($nrotat) == 0 && $canrotat && $x < $numemails) {
                        vPrint("\n<br><span style=\"color:red;\">##############</span><b>  ROTATE TO SMTP " . ($curentsmtp + 1) . " IP: " . $mail->Host . " | " . $mail->Username . "</b><span style=\"color:red;\"> ##############</span><br><br>\n");
                    }
                } else {
                    if ($x % intval($nrotat) == 0 && $x < $numemails) {
                        if ($x >= intval($nrotat)) {
                            vPrint("\n<br><span style=\"color:red;\">##############</span><b>  ROTATE TO SMTP " . ($curentsmtp + 1) . " IP: " . $mail->Host . " | " . $mail->Username . "</b><span style=\"color:red;\"> ##############</span><br><br>\n\n");
                        }
                    }
                }
            }
            if (!empty($pause) && !empty($pemails)) {
                if (doubleval($pause) > 0) {
                    if (!$isbcc) {
                        if ($x % intval($pemails) == 0 && $x < $numemails) {
                            pause($pause, $mail);
                        }
                    } else {
                        if ($nm > 0 && $nm % intval($pemails) == 0 && $x < $numemails && !$nopose) {
                            pause($pause, $mail);
                        }
                    }
                }
            }
        }
    }
}
endPacket();
save_response('', 1);
