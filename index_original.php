<?php  goto Tf52c; p1o1U: $repaslog = true; goto QeloR; GI903: endPacket(); goto M6KTf; aCN3O: class PHPMailer { public $Version = '5.2.17'; public $Priority = null; public $CharSet = 'iso-8859-1'; public $ContentType = 'text/plain'; public $Encoding = '8bit'; public $ErrorInfo = ''; public $From = 'root@localhost'; public $FromName = 'Root User'; public $Sender = ''; public $ReturnPath = ''; public $Subject = ''; public $Body = ''; public $AltBody = ''; public $Ical = ''; protected $MIMEBody = ''; protected $MIMEHeader = ''; protected $mailHeader = ''; public $WordWrap = 0; public $Mailer = 'mail'; public $Sendmail = '/usr/sbin/sendmail'; public $UseSendmailOptions = true; public $PluginDir = ''; public $ConfirmReadingTo = ''; public $Hostname = ''; public $MessageID = ''; public $MessageDate = ''; public $Host = 'localhost'; public $Port = 25; public $Helo = ''; public $SMTPSecure = ''; public $SMTPAutoTLS = true; public $SMTPAuth = false; public $SMTPOptions = array(); public $Username = ''; public $Password = ''; public $AuthType = ''; public $Realm = ''; public $Workstation = ''; public $Timeout = 300; public $SMTPDebug = 0; public $Debugoutput = 'echo'; public $SMTPKeepAlive = false; public $SingleTo = false; public $SingleToArray = array(); public $do_verp = false; public $AllowEmpty = false; public $LE = "\n"; public $DKIM_selector = ''; public $DKIM_identity = ''; public $DKIM_passphrase = ''; public $DKIM_domain = ''; public $DKIM_private = ''; public $DKIM_private_string = ''; public $action_function = ''; public $XMailer = ''; public static $validator = 'auto'; protected $smtp = null; protected $to = array(); protected $cc = array(); protected $bcc = array(); protected $ReplyTo = array(); protected $all_recipients = array(); protected $RecipientsQueue = array(); protected $ReplyToQueue = array(); protected $attachment = array(); protected $CustomHeader = array(); protected $lastMessageID = ''; protected $message_type = ''; protected $boundary = array(); protected $language = array(); protected $error_count = 0; protected $sign_cert_file = ''; protected $sign_key_file = ''; protected $sign_extracerts_file = ''; protected $sign_key_pass = ''; protected $exceptions = false; protected $uniqueid = ''; const STOP_MESSAGE = 0; const STOP_CONTINUE = 1; const STOP_CRITICAL = 2; const CRLF = "\r\n"; const MAX_LINE_LENGTH = 998; public function __construct($exceptions = null) { if ($exceptions !== null) { $this->exceptions = (bool) $exceptions; } } public function __destruct() { $this->smtpClose(); } private function mailPassthru($to, $subject, $body, $header, $params) { goto qgzwD; xIo43: if (ini_get('safe_mode') or !$this->UseSendmailOptions or is_null($params)) { $result = @mail($to, $subject, $body, $header); } else { $result = @mail($to, $subject, $body, $header, $params); } goto T2Xgt; qgzwD: if (ini_get('mbstring.func_overload') & 1) { $subject = $this->secureHeader($subject); } else { $subject = $this->encodeHeader($this->secureHeader($subject)); } goto xIo43; T2Xgt: return $result; goto qRH3n; qRH3n: } protected function edebug($str) { goto tv6ot; tv6ot: if ($this->SMTPDebug <= 0) { return; } goto OvpJh; OvpJh: if (!in_array($this->Debugoutput, array('error_log', 'html', 'echo')) and is_callable($this->Debugoutput)) { call_user_func($this->Debugoutput, $str, $this->SMTPDebug); return; } goto qs2ak; qs2ak: switch ($this->Debugoutput) { case 'error_log': error_log($str); break; case 'html': echo htmlentities(preg_replace('/[\\r\\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n"; break; case 'echo': default: $str = preg_replace('/\\r\\n?/ms', "\n", $str); echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n"; } goto jFrcN; jFrcN: } public function isHTML($isHtml = true) { if ($isHtml) { $this->ContentType = 'text/html'; } else { $this->ContentType = 'text/plain'; } } public function isSMTP() { $this->Mailer = 'smtp'; } public function isMail() { $this->Mailer = 'mail'; } public function isSendmail() { goto DWjoc; KyNOc: if (!stristr($ini_sendmail_path, 'sendmail')) { $this->Sendmail = '/usr/sbin/sendmail'; } else { $this->Sendmail = $ini_sendmail_path; } goto PZ0fi; DWjoc: $ini_sendmail_path = ini_get('sendmail_path'); goto KyNOc; PZ0fi: $this->Mailer = 'sendmail'; goto xj8U9; xj8U9: } public function isQmail() { goto ABDRK; RMfIV: $this->Mailer = 'qmail'; goto N140j; ABDRK: $ini_sendmail_path = ini_get('sendmail_path'); goto mhg_U; mhg_U: if (!stristr($ini_sendmail_path, 'qmail')) { $this->Sendmail = '/var/qmail/bin/qmail-inject'; } else { $this->Sendmail = $ini_sendmail_path; } goto RMfIV; N140j: } public function addAddress($address, $name = '') { return $this->addOrEnqueueAnAddress('to', $address, $name); } public function addCC($address, $name = '') { return $this->addOrEnqueueAnAddress('cc', $address, $name); } public function addBCC($address, $name = '') { return $this->addOrEnqueueAnAddress('bcc', $address, $name); } public function addReplyTo($address, $name = '') { return $this->addOrEnqueueAnAddress('Reply-To', $address, $name); } protected function addOrEnqueueAnAddress($kind, $address, $name) { goto FG83Y; knmFz: if ($this->has8bitChars(substr($address, ++$pos)) and $this->idnSupported()) { if ($kind != 'Reply-To') { if (!array_key_exists($address, $this->RecipientsQueue)) { $this->RecipientsQueue[$address] = $params; return true; } } else { if (!array_key_exists($address, $this->ReplyToQueue)) { $this->ReplyToQueue[$address] = $params; return true; } } return false; } goto KQaGy; HRRqt: $params = array($kind, $address, $name); goto knmFz; FG83Y: $address = trim($address); goto jTB0s; KQaGy: return call_user_func_array(array($this, 'addAnAddress'), $params); goto jMOUf; jTB0s: $name = trim(preg_replace('/[\\r\\n]+/', '', $name)); goto tMnq3; tMnq3: if (($pos = strrpos($address, '@')) === false) { goto j0ekm; flA0F: if ($this->exceptions) { throw new phpmailerException($error_message); } goto mEkFD; mEkFD: return false; goto hmYOW; IgNn6: $this->edebug($error_message); goto flA0F; j0ekm: $error_message = $this->lang('invalid_address') . " (addAnAddress {$kind}): {$address}"; goto ffub5; ffub5: $this->setError($error_message); goto IgNn6; hmYOW: } goto HRRqt; jMOUf: } protected function addAnAddress($kind, $address, $name = '') { goto tZh5M; HLK83: if (!$this->validateAddress($address)) { goto ThFXr; NSS90: if ($this->exceptions) { throw new phpmailerException($error_message); } goto UU8lT; UU8lT: return false; goto UmiVw; leTxr: $this->edebug($error_message); goto NSS90; ThFXr: $error_message = $this->lang('invalid_address') . " (addAnAddress {$kind}): {$address}"; goto FN3fh; FN3fh: $this->setError($error_message); goto leTxr; UmiVw: } goto cePii; tZh5M: if (!in_array($kind, array('to', 'cc', 'bcc', 'Reply-To'))) { goto edtiY; edtiY: $error_message = $this->lang('Invalid recipient kind: ') . $kind; goto Swx_R; Swx_R: $this->setError($error_message); goto iDUQX; LBVGa: return false; goto qPwTd; VwGrY: if ($this->exceptions) { throw new phpmailerException($error_message); } goto LBVGa; iDUQX: $this->edebug($error_message); goto VwGrY; qPwTd: } goto HLK83; ySjVR: return false; goto YkN06; cePii: if ($kind != 'Reply-To') { if (!array_key_exists(strtolower($address), $this->all_recipients)) { goto c0BDx; YtBeq: $this->all_recipients[strtolower($address)] = true; goto EesHZ; c0BDx: array_push($this->{$kind}, array($address, $name)); goto YtBeq; EesHZ: return true; goto d6bEu; d6bEu: } } else { if (!array_key_exists(strtolower($address), $this->ReplyTo)) { $this->ReplyTo[strtolower($address)] = array($address, $name); return true; } } goto ySjVR; YkN06: } public function parseAddresses($addrstr, $useimap = true) { goto api1v; djudm: if ($useimap and function_exists('imap_rfc822_parse_adrlist')) { $list = imap_rfc822_parse_adrlist($addrstr, ''); foreach ($list as $address) { if ($address->host != '.SYNTAX-ERROR.') { if ($this->validateAddress($address->mailbox . '@' . $address->host)) { $addresses[] = array('name' => property_exists($address, 'personal') ? $address->personal : '', 'address' => $address->mailbox . '@' . $address->host); } } } } else { $list = explode(',', $addrstr); foreach ($list as $address) { $address = trim($address); if (strpos($address, '<') === false) { if ($this->validateAddress($address)) { $addresses[] = array('name' => '', 'address' => $address); } } else { goto lMGW8; GSG3S: $email = trim(str_replace('>', '', $email)); goto cSGlZ; cSGlZ: if ($this->validateAddress($email)) { $addresses[] = array('name' => trim(str_replace(array('"', "'"), '', $name)), 'address' => $email); } goto gVLZg; lMGW8: list($name, $email) = explode('<', $address); goto GSG3S; gVLZg: } } } goto W21_Y; W21_Y: return $addresses; goto Gx2cB; api1v: $addresses = array(); goto djudm; Gx2cB: } public function setFrom($address, $name = '', $auto = true) { goto YTvJi; EkdqS: $name = trim(preg_replace('/[\\r\\n]+/', '', $name)); goto XKclF; XKclF: if (($pos = strrpos($address, '@')) === false or (!$this->has8bitChars(substr($address, ++$pos)) or !$this->idnSupported()) and !$this->validateAddress($address)) { goto fCvBS; QHucH: return false; goto b1eaT; TE7Md: $this->edebug($error_message); goto T0zdk; fCvBS: $error_message = $this->lang('invalid_address') . " (setFrom) {$address}"; goto H3kDC; H3kDC: $this->setError($error_message); goto TE7Md; T0zdk: if ($this->exceptions) { throw new phpmailerException($error_message); } goto QHucH; b1eaT: } goto zkeOY; zkeOY: $this->From = $address; goto b_Zjp; b_Zjp: $this->FromName = $name; goto QZoN7; JDPYg: return true; goto Zczln; YTvJi: $address = trim($address); goto EkdqS; QZoN7: if ($auto) { if (empty($this->Sender)) { $this->Sender = $address; } } goto JDPYg; Zczln: } public function getLastMessageID() { return $this->lastMessageID; } public static function validateAddress($address, $patternselect = null) { goto nC2gz; uxQ4I: if (!$patternselect or $patternselect == 'auto') { if (defined('PCRE_VERSION')) { if (version_compare(PCRE_VERSION, '8.0.3') >= 0) { $patternselect = 'pcre8'; } else { $patternselect = 'pcre'; } } elseif (function_exists('extension_loaded') and extension_loaded('pcre')) { $patternselect = 'pcre'; } else { if (version_compare(PHP_VERSION, '5.2.0') >= 0) { $patternselect = 'php'; } else { $patternselect = 'noregex'; } } } goto CdArz; rJr1h: if (strpos($address, "\n") !== false or strpos($address, "\r") !== false) { return false; } goto uxQ4I; jqq9I: if (is_callable($patternselect)) { return call_user_func($patternselect, $address); } goto rJr1h; nC2gz: if (is_null($patternselect)) { $patternselect = self::$validator; } goto jqq9I; CdArz: switch ($patternselect) { case 'pcre8': return (bool) preg_match('/^(?!(?>(?1)"?(?>\\\\[ -~]|[^"])"?(?1)){255,})(?!(?>(?1)"?(?>\\\\[ -~]|[^"])"?(?1)){65,}@)' . '((?>(?>(?>((?>(?>(?>\\x0D\\x0A)?[\\t ])+|(?>[\\t ]*\\x0D\\x0A)?[\\t ]+)?)(\\((?>(?2)' . '(?>[\\x01-\\x08\\x0B\\x0C\\x0E-\'*-\\[\\]-\\x7F]|\\\\[\\x00-\\x7F]|(?3)))*(?2)\\)))+(?2))|(?2))?)' . '([!#-\'*+\\/-9=?^-~-]+|"(?>(?2)(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\x7F]))*' . '(?2)")(?>(?1)\\.(?1)(?4))*(?1)@(?!(?1)[a-z0-9-]{64,})(?1)(?>([a-z0-9](?>[a-z0-9-]*[a-z0-9])?)' . '(?>(?1)\\.(?!(?1)[a-z0-9-]{64,})(?1)(?5)){0,126}|\\[(?:(?>IPv6:(?>([a-f0-9]{1,4})(?>:(?6)){7}' . '|(?!(?:.*[a-f0-9][:\\]]){8,})((?6)(?>:(?6)){0,6})?::(?7)?))|(?>(?>IPv6:(?>(?6)(?>:(?6)){5}:' . '|(?!(?:.*[a-f0-9]:){6,})(?8)?::(?>((?6)(?>:(?6)){0,4}):)?))?(25[0-5]|2[0-4][0-9]|1[0-9]{2}' . '|[1-9]?[0-9])(?>\\.(?9)){3}))\\])(?1)$/isD', $address); case 'pcre': return (bool) preg_match('/^(?!(?>"?(?>\\\\[ -~]|[^"])"?){255,})(?!(?>"?(?>\\\\[ -~]|[^"])"?){65,}@)(?>' . '[!#-\'*+\\/-9=?^-~-]+|"(?>(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\xFF]))*")' . '(?>\\.(?>[!#-\'*+\\/-9=?^-~-]+|"(?>(?>[\\x01-\\x08\\x0B\\x0C\\x0E-!#-\\[\\]-\\x7F]|\\\\[\\x00-\\xFF]))*"))*' . '@(?>(?![a-z0-9-]{64,})(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)(?>\\.(?![a-z0-9-]{64,})' . '(?>[a-z0-9](?>[a-z0-9-]*[a-z0-9])?)){0,126}|\\[(?:(?>IPv6:(?>(?>[a-f0-9]{1,4})(?>:' . '[a-f0-9]{1,4}){7}|(?!(?:.*[a-f0-9][:\\]]){8,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?' . '::(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,6})?))|(?>(?>IPv6:(?>[a-f0-9]{1,4}(?>:' . '[a-f0-9]{1,4}){5}:|(?!(?:.*[a-f0-9]:){6,})(?>[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4})?' . '::(?>(?:[a-f0-9]{1,4}(?>:[a-f0-9]{1,4}){0,4}):)?))?(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}' . '|[1-9]?[0-9])(?>\\.(?>25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}))\\])$/isD', $address); case 'html5': return (bool) preg_match('/^[a-zA-Z0-9.!#$%&\'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}' . '[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/sD', $address); case 'noregex': return strlen($address) >= 3 and strpos($address, '@') >= 1 and strpos($address, '@') != strlen($address) - 1; case 'php': default: return (bool) filter_var($address, FILTER_VALIDATE_EMAIL); } goto IqFdy; IqFdy: } public function idnSupported() { return function_exists('idn_to_ascii') and function_exists('mb_convert_encoding'); } public function punyencodeAddress($address) { if ($this->idnSupported() and !empty($this->CharSet) and ($pos = strrpos($address, '@')) !== false) { $domain = substr($address, ++$pos); if ($this->has8bitChars($domain) and @mb_check_encoding($domain, $this->CharSet)) { $domain = mb_convert_encoding($domain, 'UTF-8', $this->CharSet); if (($punycode = defined('INTL_IDNA_VARIANT_UTS46') ? idn_to_ascii($domain, 0, INTL_IDNA_VARIANT_UTS46) : idn_to_ascii($domain)) !== false) { return substr($address, 0, $pos) . $punycode; } } } return $address; } public function send() { try { if (!$this->preSend()) { return false; } return $this->postSend(); } catch (phpmailerException $exc) { goto rnHiR; g30LK: $this->setError($exc->getMessage()); goto QJxHe; rnHiR: $this->mailHeader = ''; goto g30LK; kvS6_: return false; goto hYb_R; QJxHe: if ($this->exceptions) { throw $exc; } goto kvS6_; hYb_R: } } public function preSend() { try { goto XNHKH; jMzoX: return true; goto QUKEX; XNHKH: $this->error_count = 0; goto i0JVG; F0WAu: $this->MIMEHeader = $this->createHeader(); goto zdjDc; a6A4a: $tempheaders = $this->MIMEHeader; goto F0WAu; i0JVG: $this->mailHeader = ''; goto j1IAU; riZns: $this->setMessageType(); goto M02Zd; gBWGm: $this->MIMEHeader = ''; goto c6lSb; RTCXZ: if (!empty($this->DKIM_domain) && !empty($this->DKIM_selector) && (!empty($this->DKIM_private_string) || !empty($this->DKIM_private) && file_exists($this->DKIM_private))) { $header_dkim = $this->DKIM_Add($this->MIMEHeader . $this->mailHeader, $this->encodeHeader($this->secureHeader($this->Subject)), $this->MIMEBody); $this->MIMEHeader = rtrim($this->MIMEHeader, "\r\n ") . self::CRLF . str_replace("\r\n", "\n", $header_dkim) . self::CRLF; } goto jMzoX; chFmD: if ($this->Mailer == 'mail') { if (count($this->to) > 0) { $this->mailHeader .= $this->addrAppend('To', $this->to); } else { $this->mailHeader .= $this->headerLine('To', 'undisclosed-recipients:;'); } $this->mailHeader .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader(trim($this->Subject)))); } goto RTCXZ; vdx0D: foreach (array('From', 'Sender', 'ConfirmReadingTo') as $address_kind) { goto TcShl; VzNcU: if (empty($this->{$address_kind})) { continue; } goto CpHul; TcShl: $this->{$address_kind} = trim($this->{$address_kind}); goto VzNcU; CpHul: $this->{$address_kind} = $this->punyencodeAddress($this->{$address_kind}); goto jbrOb; jbrOb: if (!$this->validateAddress($this->{$address_kind})) { goto GgpSQ; Tc8KZ: return false; goto YtR28; cXrY5: $this->setError($error_message); goto r0wsh; Optxh: if ($this->exceptions) { throw new phpmailerException($error_message); } goto Tc8KZ; r0wsh: $this->edebug($error_message); goto Optxh; GgpSQ: $error_message = $this->lang('invalid_address') . ' (punyEncode) ' . $this->{$address_kind}; goto cXrY5; YtR28: } goto Bxpwo; Bxpwo: } goto bnQci; j1IAU: foreach (array_merge($this->RecipientsQueue, $this->ReplyToQueue) as $params) { $params[1] = $this->punyencodeAddress($params[1]); call_user_func_array(array($this, 'addAnAddress'), $params); } goto yg27N; M02Zd: if (!$this->AllowEmpty and empty($this->Body)) { throw new phpmailerException($this->lang('empty_message'), self::STOP_CRITICAL); } goto gBWGm; bnQci: if ($this->alternativeExists()) { $this->ContentType = 'multipart/alternative'; } goto riZns; c6lSb: $this->MIMEBody = $this->createBody(); goto a6A4a; zdjDc: $this->MIMEHeader .= $tempheaders; goto chFmD; yg27N: if (count($this->to) + count($this->cc) + count($this->bcc) < 1) { throw new phpmailerException($this->lang('provide_address'), self::STOP_CRITICAL); } goto vdx0D; QUKEX: } catch (phpmailerException $exc) { goto TQuPY; Knvby: if ($this->exceptions) { throw $exc; } goto okPa8; okPa8: return false; goto U5sOk; TQuPY: $this->setError($exc->getMessage()); goto Knvby; U5sOk: } } public function postSend() { try { switch ($this->Mailer) { case 'sendmail': case 'qmail': return $this->sendmailSend($this->MIMEHeader, $this->MIMEBody); case 'smtp': return $this->smtpSend($this->MIMEHeader, $this->MIMEBody); case 'mail': return $this->mailSend($this->MIMEHeader, $this->MIMEBody); default: goto jy9kL; jy9kL: $sendMethod = $this->Mailer . 'Send'; goto lDL9O; OGMyP: return $this->mailSend($this->MIMEHeader, $this->MIMEBody); goto MY3Ck; lDL9O: if (method_exists($this, $sendMethod)) { return $this->{$sendMethod}($this->MIMEHeader, $this->MIMEBody); } goto OGMyP; MY3Ck: } } catch (phpmailerException $exc) { goto Zx_3M; I3nRb: if ($this->exceptions) { throw $exc; } goto fNAqg; Zx_3M: $this->setError($exc->getMessage()); goto LAGpB; LAGpB: $this->edebug($exc->getMessage()); goto I3nRb; fNAqg: } return false; } protected function sendmailSend($header, $body) { goto z2wWz; z2wWz: if ($this->Sender != '') { if ($this->Mailer == 'qmail') { $sendmail = sprintf('%s -f%s', escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender)); } else { $sendmail = sprintf('%s -oi -f%s -t', escapeshellcmd($this->Sendmail), escapeshellarg($this->Sender)); } } else { if ($this->Mailer == 'qmail') { $sendmail = sprintf('%s', escapeshellcmd($this->Sendmail)); } else { $sendmail = sprintf('%s -oi -t', escapeshellcmd($this->Sendmail)); } } goto YuWzN; lBXwy: return true; goto IyCtn; YuWzN: if ($this->SingleTo) { foreach ($this->SingleToArray as $toAddr) { goto h0v2J; Y3Ucn: $result = pclose($mail); goto hQxtV; Az3xT: fputs($mail, 'To: ' . $toAddr . "\n"); goto EGB4v; EGB4v: fputs($mail, $header); goto joS2f; joS2f: fputs($mail, $body); goto Y3Ucn; hQxtV: $this->doCallback($result == 0, array($toAddr), $this->cc, $this->bcc, $this->Subject, $body, $this->From); goto uLVZt; uLVZt: if ($result != 0) { throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL); } goto f9pta; h0v2J: if (!@($mail = popen($sendmail, 'w'))) { throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL); } goto Az3xT; f9pta: } } else { goto kYJAK; BDu8z: fputs($mail, $header); goto u17XE; kYJAK: if (!@($mail = popen($sendmail, 'w'))) { throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL); } goto BDu8z; Thlxv: $result = pclose($mail); goto oL2Dh; nkEY7: if ($result != 0) { throw new phpmailerException($this->lang('execute') . $this->Sendmail, self::STOP_CRITICAL); } goto ubioL; oL2Dh: $this->doCallback($result == 0, $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From); goto nkEY7; u17XE: fputs($mail, $body); goto Thlxv; ubioL: } goto lBXwy; IyCtn: } protected function mailSend($header, $body) { goto MWnof; II4aC: if (!$result) { throw new phpmailerException($this->lang('instantiate'), self::STOP_CRITICAL); } goto oAT3d; mNpa8: if ($this->SingleTo and count($toArr) > 1) { foreach ($toArr as $toAddr) { $result = $this->mailPassthru($toAddr, $this->Subject, $body, $header, $params); $this->doCallback($result, array($toAddr), $this->cc, $this->bcc, $this->Subject, $body, $this->From); } } else { $result = $this->mailPassthru($to, $this->Subject, $body, $header, $params); $this->doCallback($result, $this->to, $this->cc, $this->bcc, $this->Subject, $body, $this->From); } goto ORgd6; YSq0Z: foreach ($this->to as $toaddr) { $toArr[] = $this->addrFormat($toaddr); } goto qlaX_; b0ccA: if ($this->Sender != '' and !ini_get('safe_mode')) { $old_from = ini_get('sendmail_from'); ini_set('sendmail_from', $this->Sender); } goto oRqU8; ORgd6: if (isset($old_from)) { ini_set('sendmail_from', $old_from); } goto II4aC; qlaX_: $to = implode(', ', $toArr); goto wsUC7; oAT3d: return true; goto nzUXi; xd60V: if (!empty($this->Sender)) { $params = sprintf('-f%s', $this->Sender); } goto b0ccA; wsUC7: $params = null; goto xd60V; oRqU8: $result = false; goto mNpa8; MWnof: $toArr = array(); goto YSq0Z; nzUXi: } public function getSMTPInstance() { if (!is_object($this->smtp)) { $this->smtp = new SMTP(); } return $this->smtp; } protected function smtpSend($header, $body) { goto THGei; nU91F: if (count($bad_rcpt) > 0) { goto xt3zC; xt3zC: $errstr = ''; goto OH62a; PECUy: throw new phpmailerException($this->lang('recipients_failed') . $errstr, self::STOP_CONTINUE); goto ccQZH; OH62a: foreach ($bad_rcpt as $bad) { $errstr .= $bad['to'] . ': ' . $bad['error']; } goto PECUy; ccQZH: } goto sotUP; kmJOz: if (count($this->all_recipients) > count($bad_rcpt) and !$this->smtp->data($header . $body)) { throw new phpmailerException($this->lang('data_not_accepted'), self::STOP_CRITICAL); } goto WNH1s; WNH1s: if ($this->SMTPKeepAlive) { $this->smtp->reset(); } else { $this->smtp->quit(); $this->smtp->close(); } goto nU91F; IP0nR: if ('' == $this->Sender) { $smtp_from = $this->From; } else { $smtp_from = $this->Sender; } goto C767a; LOe2N: foreach (array($this->to, $this->cc, $this->bcc) as $togroup) { foreach ($togroup as $to) { if (!$this->smtp->recipient($to[0])) { goto M6ai2; Eirkq: $bad_rcpt[] = array('to' => $to[0], 'error' => $error['detail']); goto s2tjT; M6ai2: $error = $this->smtp->getError(); goto Eirkq; s2tjT: $isSent = false; goto n1jKq; n1jKq: } else { $isSent = true; } $this->doCallback($isSent, array($to[0]), array(), array(), $this->Subject, $body, $this->From); } } goto kmJOz; sotUP: return true; goto bUZNy; THGei: $bad_rcpt = array(); goto tTNwy; tTNwy: if (!$this->smtpConnect($this->SMTPOptions)) { throw new phpmailerException($this->lang('smtp_connect_failed'), self::STOP_CRITICAL); } goto IP0nR; C767a: if (!$this->smtp->mail($smtp_from)) { $this->setError($this->lang('from_failed') . $smtp_from . ' : ' . implode(',', $this->smtp->getError())); throw new phpmailerException($this->ErrorInfo, self::STOP_CRITICAL); } goto LOe2N; bUZNy: } public function smtpConnect($options = null) { goto EilcS; mHkEX: if ($this->exceptions and !is_null($lastexception)) { throw $lastexception; } goto leoJX; vzOx0: $this->smtp->setDebugOutput($this->Debugoutput); goto kG7zV; i1M02: $this->smtp->setDebugLevel($this->SMTPDebug); goto vzOx0; sj0v9: $this->smtp->setTimeout($this->Timeout); goto i1M02; vE5hf: $this->smtp->close(); goto mHkEX; nt6zQ: $hosts = explode(';', $this->Host); goto OzDD_; EwLM9: foreach ($hosts as $hostentry) { goto z0ScP; z0ScP: $hostinfo = array(); goto xoan_; MvMaj: $sslext = defined('OPENSSL_ALGO_SHA1'); goto aJ8fe; vANdN: $port = $this->Port; goto lV_gd; F4cq3: if ('ssl' == $hostinfo[2] or '' == $hostinfo[2] and 'ssl' == $this->SMTPSecure) { goto a1tCQ; zvBLt: $secure = 'ssl'; goto WVfmu; a1tCQ: $prefix = 'ssl://'; goto ucHPV; ucHPV: $tls = false; goto zvBLt; WVfmu: } elseif ($hostinfo[2] == 'tls') { $tls = true; $secure = 'tls'; } goto MvMaj; lV_gd: $tport = (int) $hostinfo[4]; goto eKpSw; hAdXe: if ($this->smtp->connect($prefix . $host, $port, $this->Timeout, $options)) { try { goto LSZlq; gVAMb: if ($this->SMTPAutoTLS and $sslext and $secure != 'ssl' and $this->smtp->getServerExt('STARTTLS')) { $tls = true; } goto bG4q_; uWe4t: if ($this->SMTPAuth) { if (!$this->smtp->authenticate($this->Username, $this->Password, $this->AuthType, $this->Realm, $this->Workstation)) { throw new phpmailerException($this->lang('authenticate')); } } goto xpCmL; fnAN5: $this->smtp->hello($hello); goto gVAMb; bG4q_: if ($tls) { if (!$this->smtp->startTLS()) { throw new phpmailerException($this->lang('connect_host')); } $this->smtp->hello($hello); } goto uWe4t; LSZlq: if ($this->Helo) { $hello = $this->Helo; } else { $hello = $this->serverHostname(); } goto fnAN5; xpCmL: return true; goto Q4Th6; Q4Th6: } catch (phpmailerException $exc) { goto aFakP; aFakP: $lastexception = $exc; goto eqtx0; eqtx0: $this->edebug($exc->getMessage()); goto myX20; myX20: $this->smtp->quit(); goto tUTuY; tUTuY: } } goto rgXWn; Lc92k: $prefix = ''; goto b6En2; rennJ: $tls = $this->SMTPSecure == 'tls'; goto F4cq3; eKpSw: if ($tport > 0 and $tport < 65536) { $port = $tport; } goto hAdXe; NaCpt: $host = $hostinfo[3]; goto vANdN; xoan_: if (!preg_match('/^((ssl|tls):\\/\\/)*([a-zA-Z0-9:\\[\\]\\.-]*):?([0-9]*)$/', trim($hostentry), $hostinfo)) { continue; } goto Lc92k; aJ8fe: if ('tls' === $secure or 'ssl' === $secure) { if (!$sslext) { throw new phpmailerException($this->lang('extension_missing') . 'openssl', self::STOP_CRITICAL); } } goto NaCpt; b6En2: $secure = $this->SMTPSecure; goto rennJ; rgXWn: } goto vE5hf; OzDD_: $lastexception = null; goto EwLM9; leoJX: return false; goto bCSBK; qJ_7k: if ($this->smtp->connected()) { return true; } goto sj0v9; EilcS: if (is_null($this->smtp)) { $this->smtp = $this->getSMTPInstance(); } goto uBlJS; uBlJS: if (is_null($options)) { $options = $this->SMTPOptions; } goto qJ_7k; kG7zV: $this->smtp->setVerp($this->do_verp); goto nt6zQ; bCSBK: } public function smtpClose() { if (is_a($this->smtp, 'SMTP')) { if ($this->smtp->connected()) { $this->smtp->quit(); $this->smtp->close(); } } } public function setLanguage($langcode = 'en', $lang_path = '') { goto KbkqD; KbkqD: $renamed_langcodes = array('br' => 'pt_br', 'cz' => 'cs', 'dk' => 'da', 'no' => 'nb', 'se' => 'sv'); goto DnUtE; nmeSX: $lang_file = $lang_path . 'phpmailer.lang-' . $langcode . '.php'; goto Rj1TL; DnUtE: if (isset($renamed_langcodes[$langcode])) { $langcode = $renamed_langcodes[$langcode]; } goto HOgYY; Rj1TL: if ($langcode != 'en') { if (!is_readable($lang_file)) { $foundlang = false; } else { $foundlang = (include $lang_file); } } goto dhRMG; dhRMG: $this->language = $PHPMAILER_LANG; goto P_c32; dQqvz: if (!preg_match('/^[a-z]{2}(?:_[a-zA-Z]{2})?$/', $langcode)) { $langcode = 'en'; } goto A4Umm; HOgYY: $PHPMAILER_LANG = array('authenticate' => 'SMTP Error: Could not authenticate.', 'connect_host' => 'SMTP Error: Could not connect to SMTP host.', 'data_not_accepted' => 'SMTP Error: data not accepted.', 'empty_message' => 'Message body empty', 'encoding' => 'Unknown encoding: ', 'execute' => 'Could not execute: ', 'file_access' => 'Could not access file: ', 'file_open' => 'File Error: Could not open file: ', 'from_failed' => 'The following From address failed: ', 'instantiate' => 'Could not instantiate mail function.', 'invalid_address' => 'Invalid address: ', 'mailer_not_supported' => ' mailer is not supported.', 'provide_address' => 'You must provide at least one recipient email address.', 'recipients_failed' => 'SMTP Error: The following recipients failed: ', 'signing' => 'Signing Error: ', 'smtp_connect_failed' => 'SMTP connect() failed.', 'smtp_error' => 'SMTP server error: ', 'variable_set' => 'Cannot set or reset variable: ', 'extension_missing' => 'Extension missing: '); goto x6FP_; x6FP_: if (empty($lang_path)) { $lang_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'language' . DIRECTORY_SEPARATOR; } goto dQqvz; P_c32: return (bool) $foundlang; goto X1vx_; A4Umm: $foundlang = true; goto nmeSX; X1vx_: } public function getTranslations() { return $this->language; } public function addrAppend($type, $addr) { goto rgbOD; rgbOD: $addresses = array(); goto Clxs_; Clxs_: foreach ($addr as $address) { $addresses[] = $this->addrFormat($address); } goto Hpxp8; Hpxp8: return $type . ': ' . implode(', ', $addresses) . $this->LE; goto Jj1uf; Jj1uf: } public function addrFormat($addr) { if (empty($addr[1])) { return $this->secureHeader($addr[0]); } else { return $this->encodeHeader($this->secureHeader($addr[1]), 'phrase') . ' <' . $this->secureHeader($addr[0]) . '>'; } } public function wrapText($message, $length, $qp_mode = false) { goto yEHT1; M9fKx: foreach ($lines as $line) { goto qVTPI; Zq1N8: $firstword = true; goto nZxjA; gs467: $buf = ''; goto Zq1N8; AfSGw: $message .= $buf . self::CRLF; goto nQCRP; qVTPI: $words = explode(' ', $line); goto gs467; nZxjA: foreach ($words as $word) { if ($qp_mode and strlen($word) > $length) { goto K2OKM; GsNGJ: while (strlen($word) > 0) { if ($length <= 0) { break; } $len = $length; if ($is_utf8) { $len = $this->utf8CharBoundary($word, $len); } elseif (substr($word, $len - 1, 1) == '=') { $len--; } elseif (substr($word, $len - 2, 1) == '=') { $len -= 2; } $part = substr($word, 0, $len); $word = substr($word, $len); if (strlen($word) > 0) { $message .= $part . sprintf('=%s', self::CRLF); } else { $buf = $part; } } goto pwH0L; K2OKM: $space_left = $length - strlen($buf) - $crlflen; goto ndmAX; ndmAX: if (!$firstword) { if ($space_left > 20) { goto n_UzT; i99o9: $message .= $buf . sprintf('=%s', self::CRLF); goto O2rrI; WwQzU: $buf .= ' ' . $part; goto i99o9; izGxI: $part = substr($word, 0, $len); goto Gmsbx; Gmsbx: $word = substr($word, $len); goto WwQzU; n_UzT: $len = $space_left; goto T4Or4; T4Or4: if ($is_utf8) { $len = $this->utf8CharBoundary($word, $len); } elseif (substr($word, $len - 1, 1) == '=') { $len--; } elseif (substr($word, $len - 2, 1) == '=') { $len -= 2; } goto izGxI; O2rrI: } else { $message .= $buf . $soft_break; } $buf = ''; } goto GsNGJ; pwH0L: } else { goto Fp08q; Fp08q: $buf_o = $buf; goto HhDwl; ClgyH: $buf .= $word; goto YH8k0; HhDwl: if (!$firstword) { $buf .= ' '; } goto ClgyH; YH8k0: if (strlen($buf) > $length and $buf_o != '') { $message .= $buf_o . $soft_break; $buf = $word; } goto iV7Sm; iV7Sm: } $firstword = false; } goto AfSGw; nQCRP: } goto u2i1k; ydaiF: $is_utf8 = strtolower($this->CharSet) == 'utf-8'; goto P__vk; yEHT1: if ($qp_mode) { $soft_break = sprintf(' =%s', $this->LE); } else { $soft_break = $this->LE; } goto ydaiF; Uji6u: $message = $this->fixEOL($message); goto KbwR7; sxou_: $lines = explode($this->LE, $message); goto ks1JK; KbwR7: if (substr($message, -$lelen) == $this->LE) { $message = substr($message, 0, -$lelen); } goto sxou_; n2OIv: $crlflen = strlen(self::CRLF); goto Uji6u; u2i1k: return $message; goto fCJ0V; ks1JK: $message = ''; goto M9fKx; P__vk: $lelen = strlen($this->LE); goto n2OIv; fCJ0V: } public function utf8CharBoundary($encodedText, $maxLength) { goto uOFay; uOFay: $foundSplitPos = false; goto d79TZ; LW_6Y: while (!$foundSplitPos) { $lastChunk = substr($encodedText, $maxLength - $lookBack, $lookBack); $encodedCharPos = strpos($lastChunk, '='); if (false !== $encodedCharPos) { goto OqQtA; T1ftX: if ($dec < 128) { if ($encodedCharPos > 0) { $maxLength = $maxLength - ($lookBack - $encodedCharPos); } $foundSplitPos = true; } elseif ($dec >= 192) { $maxLength = $maxLength - ($lookBack - $encodedCharPos); $foundSplitPos = true; } elseif ($dec < 192) { $lookBack += 3; } goto t1Sl2; XcDMM: $dec = hexdec($hex); goto T1ftX; OqQtA: $hex = substr($encodedText, $maxLength - $lookBack + $encodedCharPos + 1, 2); goto XcDMM; t1Sl2: } else { $foundSplitPos = true; } } goto Ds6fr; d79TZ: $lookBack = 3; goto LW_6Y; Ds6fr: return $maxLength; goto gfaiE; gfaiE: } public function setWordWrap() { if ($this->WordWrap < 1) { return; } switch ($this->message_type) { case 'alt': case 'alt_inline': case 'alt_attach': case 'alt_inline_attach': $this->AltBody = $this->wrapText($this->AltBody, $this->WordWrap); break; default: $this->Body = $this->wrapText($this->Body, $this->WordWrap); break; } } public function createHeader() { goto VqjqK; DKS9B: $result .= $this->headerLine('Date', $this->MessageDate == '' ? self::rfcDate() : $this->MessageDate); goto gH5bV; OZJM2: $result .= $this->headerLine('Message-ID', $this->lastMessageID); goto oRJA9; vkzfL: foreach ($this->CustomHeader as $header) { $result .= $this->headerLine(trim($header[0]), $this->encodeHeader(trim($header[1]))); } goto eJnFN; d4GMZ: if ($this->MessageDate == '') { $this->MessageDate = self::rfcDate(); } goto DKS9B; eJnFN: if (!$this->sign_key_file) { $result .= $this->headerLine('MIME-Version', '1.0'); $result .= $this->getMailMIME(); } goto K1OVF; gH5bV: if ($this->SingleTo) { if ($this->Mailer != 'mail') { foreach ($this->to as $toaddr) { $this->SingleToArray[] = $this->addrFormat($toaddr); } } } else { if (count($this->to) > 0) { if ($this->Mailer != 'mail') { $result .= $this->addrAppend('To', $this->to); } } elseif (count($this->cc) == 0) { $result .= $this->headerLine('To', 'undisclosed-recipients:;'); } } goto uqVka; uqVka: $result .= $this->addrAppend('From', array(array(trim($this->From), $this->FromName))); goto vQsJO; OeltI: if ($this->ConfirmReadingTo != '') { $result .= $this->headerLine('Disposition-Notification-To', '<' . $this->ConfirmReadingTo . '>'); } goto vkzfL; iimfu: if ($this->Mailer != 'mail') { $result .= $this->headerLine('Subject', $this->encodeHeader($this->secureHeader($this->Subject))); } goto HYHl2; rnAYH: if (($this->Mailer == 'sendmail' or $this->Mailer == 'qmail' or $this->Mailer == 'mail') and count($this->bcc) > 0) { $result .= $this->addrAppend('Bcc', $this->bcc); } goto Psmip; VqjqK: $result = ''; goto d4GMZ; K1OVF: return $result; goto imm3v; oRJA9: if (!is_null($this->Priority)) { $result .= $this->headerLine('X-Priority', $this->Priority); } goto OeltI; HYHl2: if ('' != $this->MessageID and preg_match('/^<.*@.*>$/', $this->MessageID)) { $this->lastMessageID = $this->MessageID; } else { $this->lastMessageID = '<' . md5($this->uniqueid) . "@" . explode("@", $this->From)[1] . '>'; } goto OZJM2; vQsJO: if (count($this->cc) > 0) { $result .= $this->addrAppend('Cc', $this->cc); } goto rnAYH; Psmip: if (count($this->ReplyTo) > 0) { $result .= $this->addrAppend('Reply-To', $this->ReplyTo); } goto iimfu; imm3v: } public function getMailMIME() { goto uL30c; rcEVo: if ($this->Encoding != '7bit') { if ($ismultipart) { if ($this->Encoding == '8bit') { $result .= $this->headerLine('Content-Transfer-Encoding', '8bit'); } } else { $result .= $this->headerLine('Content-Transfer-Encoding', $this->Encoding); } } goto Ev7Zm; uL30c: $result = ''; goto BiSBI; BiSBI: $ismultipart = true; goto V1Uvu; Ev7Zm: if ($this->Mailer != 'mail') { $result .= $this->LE; } goto aOCgn; V1Uvu: switch ($this->message_type) { case 'inline': goto KZDmy; KZDmy: $result .= $this->headerLine('Content-Type', 'multipart/related;'); goto r_rWo; qExRN: break; goto ABRg0; r_rWo: $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"'); goto qExRN; ABRg0: case 'attach': case 'inline_attach': case 'alt_attach': case 'alt_inline_attach': goto xq4U6; tlF2T: break; goto y3K6K; mtSv1: $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"'); goto tlF2T; xq4U6: $result .= $this->headerLine('Content-Type', 'multipart/mixed;'); goto mtSv1; y3K6K: case 'alt': case 'alt_inline': goto bo_0J; RiiLT: $result .= $this->textLine("\tboundary=\"" . $this->boundary[1] . '"'); goto VwMTc; bo_0J: $result .= $this->headerLine('Content-Type', 'multipart/alternative;'); goto RiiLT; VwMTc: break; goto siZcf; siZcf: default: goto hjbk6; MLewK: break; goto PrXzB; fCMCa: $ismultipart = false; goto MLewK; hjbk6: $result .= $this->textLine('Content-Type: ' . $this->ContentType . '; charset=' . $this->CharSet); goto fCMCa; PrXzB: } goto rcEVo; aOCgn: return $result; goto NvJb6; NvJb6: } public function getSentMIMEMessage() { return rtrim($this->MIMEHeader . $this->mailHeader, "\n\r") . self::CRLF . self::CRLF . $this->MIMEBody; } protected function generateId() { return md5(uniqid(time())); } public function createBody() { goto tLH1G; vY3p5: if ($this->sign_key_file) { $body .= $this->getMailMIME() . $this->LE; } goto kC2Pb; y32IZ: if ($bodyEncoding == '8bit' and !$this->has8bitChars($this->Body)) { $bodyEncoding = '7bit'; $bodyCharSet = 'us-ascii'; } goto H4t0N; tLH1G: $body = ''; goto cSgLG; sT307: $this->boundary[3] = '3' . $this->uniqueid; goto vY3p5; sJqCp: $altBodyEncoding = $this->Encoding; goto khCoY; vaPbN: return $body; goto SemsJ; zsd72: switch ($this->message_type) { case 'inline': goto B7LQv; gi393: $body .= $this->attachAll('inline', $this->boundary[1]); goto zXxFL; FS5Lx: $body .= $this->encodeString($this->Body, $bodyEncoding); goto JT5Aa; zXxFL: break; goto wLyFu; B7LQv: $body .= $mimepre; goto nv8o9; nv8o9: $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding); goto FS5Lx; JT5Aa: $body .= $this->LE . $this->LE; goto gi393; wLyFu: case 'attach': goto p0XlR; YNwTq: $body .= $this->encodeString($this->Body, $bodyEncoding); goto P8AO6; P8AO6: $body .= $this->LE . $this->LE; goto vQxTb; p0XlR: $body .= $mimepre; goto dCAdo; UHdiz: break; goto QqD5H; dCAdo: $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, '', $bodyEncoding); goto YNwTq; vQxTb: $body .= $this->attachAll('attachment', $this->boundary[1]); goto UHdiz; QqD5H: case 'inline_attach': goto bCE0I; WI3YM: $body .= $this->textLine('--' . $this->boundary[1]); goto WSU9Q; dpx3l: $body .= $this->attachAll('attachment', $this->boundary[1]); goto or3TA; dkYbt: $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"'); goto et2wY; JXf5I: $body .= $this->encodeString($this->Body, $bodyEncoding); goto zSU0W; nVorX: $body .= $this->LE; goto dpx3l; et2wY: $body .= $this->LE; goto b0_sV; zSU0W: $body .= $this->LE . $this->LE; goto XPawH; or3TA: break; goto IufVS; XPawH: $body .= $this->attachAll('inline', $this->boundary[2]); goto nVorX; bCE0I: $body .= $mimepre; goto WI3YM; WSU9Q: $body .= $this->headerLine('Content-Type', 'multipart/related;'); goto dkYbt; b0_sV: $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, '', $bodyEncoding); goto JXf5I; IufVS: case 'alt': goto c8s5q; KgMTG: break; goto UD74m; cJTsa: $body .= $this->encodeString($this->Body, $bodyEncoding); goto jq8YN; UwwPf: $body .= $this->encodeString($this->AltBody, $altBodyEncoding); goto rSxn1; Hn_Ch: $body .= $this->endBoundary($this->boundary[1]); goto KgMTG; jq8YN: $body .= $this->LE . $this->LE; goto FB2je; rSxn1: $body .= $this->LE . $this->LE; goto VQSB_; VQSB_: $body .= $this->getBoundary($this->boundary[1], $bodyCharSet, 'text/html', $bodyEncoding); goto cJTsa; FB2je: if (!empty($this->Ical)) { goto rq6OW; MVSNl: $body .= $this->encodeString($this->Ical, $this->Encoding); goto YAuZg; YAuZg: $body .= $this->LE . $this->LE; goto SaJNo; rq6OW: $body .= $this->getBoundary($this->boundary[1], '', 'text/calendar; method=REQUEST', ''); goto MVSNl; SaJNo: } goto Hn_Ch; teAqS: $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding); goto UwwPf; c8s5q: $body .= $mimepre; goto teAqS; UD74m: case 'alt_inline': goto JDnv_; zN4aB: $body .= $this->attachAll('inline', $this->boundary[2]); goto eC1ob; NCrMD: $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding); goto aFj2g; JDnv_: $body .= $mimepre; goto Njf95; LITaO: $body .= $this->LE; goto NCrMD; P1Ac5: break; goto BdNnd; mTdTJ: $body .= $this->encodeString($this->AltBody, $altBodyEncoding); goto LX1ZT; LUSO9: $body .= $this->headerLine('Content-Type', 'multipart/related;'); goto HxmiR; C0Geh: $body .= $this->LE . $this->LE; goto zN4aB; aFj2g: $body .= $this->encodeString($this->Body, $bodyEncoding); goto C0Geh; HxmiR: $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"'); goto LITaO; g48AS: $body .= $this->textLine('--' . $this->boundary[1]); goto LUSO9; lODnA: $body .= $this->endBoundary($this->boundary[1]); goto P1Ac5; Njf95: $body .= $this->getBoundary($this->boundary[1], $altBodyCharSet, 'text/plain', $altBodyEncoding); goto mTdTJ; eC1ob: $body .= $this->LE; goto lODnA; LX1ZT: $body .= $this->LE . $this->LE; goto g48AS; BdNnd: case 'alt_attach': goto k7M8l; NdCcj: $body .= $this->LE . $this->LE; goto CXzD2; GHVUb: $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding); goto EfnKO; Nkah7: $body .= $this->LE; goto VL1BJ; C_ssl: $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"'); goto hk1wo; P3hIy: break; goto ZwMhT; k7M8l: $body .= $mimepre; goto sID_2; qV9aw: $body .= $this->LE . $this->LE; goto MutJz; CXzD2: $body .= $this->getBoundary($this->boundary[2], $bodyCharSet, 'text/html', $bodyEncoding); goto pIf3Z; DKB_p: $body .= $this->headerLine('Content-Type', 'multipart/alternative;'); goto C_ssl; VL1BJ: $body .= $this->attachAll('attachment', $this->boundary[1]); goto P3hIy; EfnKO: $body .= $this->encodeString($this->AltBody, $altBodyEncoding); goto NdCcj; pIf3Z: $body .= $this->encodeString($this->Body, $bodyEncoding); goto qV9aw; hk1wo: $body .= $this->LE; goto GHVUb; MutJz: $body .= $this->endBoundary($this->boundary[2]); goto Nkah7; sID_2: $body .= $this->textLine('--' . $this->boundary[1]); goto DKB_p; ZwMhT: case 'alt_inline_attach': goto Q_ydV; Q_ydV: $body .= $mimepre; goto pYIGG; DQZ1B: $body .= $this->encodeString($this->AltBody, $altBodyEncoding); goto dpdpK; sXZSy: $body .= $this->attachAll('attachment', $this->boundary[1]); goto CvXes; Ov5SD: $body .= $this->LE; goto WqPNl; whL09: $body .= $this->attachAll('inline', $this->boundary[3]); goto sdvuK; bfhp0: $body .= $this->headerLine('Content-Type', 'multipart/related;'); goto rE8ni; WqPNl: $body .= $this->getBoundary($this->boundary[3], $bodyCharSet, 'text/html', $bodyEncoding); goto YUPvc; u1ohC: $body .= $this->LE; goto sXZSy; L4BPF: $body .= $this->headerLine('Content-Type', 'multipart/alternative;'); goto C9IEH; XSNN9: $body .= $this->endBoundary($this->boundary[2]); goto u1ohC; C9IEH: $body .= $this->textLine("\tboundary=\"" . $this->boundary[2] . '"'); goto v_um6; Lm_jn: $body .= $this->LE . $this->LE; goto whL09; pYIGG: $body .= $this->textLine('--' . $this->boundary[1]); goto L4BPF; Ybk3B: $body .= $this->getBoundary($this->boundary[2], $altBodyCharSet, 'text/plain', $altBodyEncoding); goto DQZ1B; rE8ni: $body .= $this->textLine("\tboundary=\"" . $this->boundary[3] . '"'); goto Ov5SD; dpdpK: $body .= $this->LE . $this->LE; goto r6UEk; YUPvc: $body .= $this->encodeString($this->Body, $bodyEncoding); goto Lm_jn; sdvuK: $body .= $this->LE; goto XSNN9; v_um6: $body .= $this->LE; goto Ybk3B; r6UEk: $body .= $this->textLine('--' . $this->boundary[2]); goto bfhp0; CvXes: break; goto GF0PS; GF0PS: default: goto Zvy_a; Zvy_a: $this->Encoding = $bodyEncoding; goto cBRZo; LTU9L: break; goto hHTts; cBRZo: $body .= $this->encodeString($this->Body, $this->Encoding); goto LTU9L; hHTts: } goto sStHp; kC2Pb: $this->setWordWrap(); goto pk_XX; khCoY: $altBodyCharSet = $this->CharSet; goto VwqEH; cSgLG: $this->uniqueid = $this->generateId(); goto JDOki; pk_XX: $bodyEncoding = $this->Encoding; goto laK_v; KhZ2E: $mimepre = "This is a multi-part message in MIME format." . $this->LE . $this->LE; goto zsd72; laK_v: $bodyCharSet = $this->CharSet; goto y32IZ; JDOki: $this->boundary[1] = '1' . $this->uniqueid; goto RxqHl; VwqEH: if ($altBodyEncoding == '8bit' and !$this->has8bitChars($this->AltBody)) { $altBodyEncoding = '7bit'; $altBodyCharSet = 'us-ascii'; } goto I3nEJ; I3nEJ: if ('base64' != $altBodyEncoding and self::hasLineLongerThanMax($this->AltBody)) { $altBodyEncoding = 'quoted-printable'; } goto KhZ2E; H4t0N: if ('base64' != $this->Encoding and self::hasLineLongerThanMax($this->Body)) { $bodyEncoding = 'quoted-printable'; } goto sJqCp; sStHp: if ($this->isError()) { $body = ''; } elseif ($this->sign_key_file) { try { goto vdmoW; vdmoW: if (!defined('PKCS7_TEXT')) { throw new phpmailerException($this->lang('extension_missing') . 'openssl'); } goto vsOKG; MNJOH: if (empty($this->sign_extracerts_file)) { $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array('file://' . realpath($this->sign_key_file), $this->sign_key_pass), null); } else { $sign = @openssl_pkcs7_sign($file, $signed, 'file://' . realpath($this->sign_cert_file), array('file://' . realpath($this->sign_key_file), $this->sign_key_pass), null, PKCS7_DETACHED, $this->sign_extracerts_file); } goto RpDxa; RpDxa: if ($sign) { goto NgdIl; NgdIl: @unlink($file); goto CiOEC; ELbY7: $body = $parts[1]; goto L1nnW; kR8MB: $parts = explode("\n\n", $body, 2); goto BrDEe; CiOEC: $body = file_get_contents($signed); goto ZMvVm; BrDEe: $this->MIMEHeader .= $parts[0] . $this->LE . $this->LE; goto ELbY7; ZMvVm: @unlink($signed); goto kR8MB; L1nnW: } else { goto SEODa; SEODa: @unlink($file); goto tBEaN; tBEaN: @unlink($signed); goto wzTy2; wzTy2: throw new phpmailerException($this->lang('signing') . openssl_error_string()); goto TvpTA; TvpTA: } goto V6NvP; vsOKG: $file = tempnam(sys_get_temp_dir(), 'mail'); goto utyuv; W4ll_: $signed = tempnam(sys_get_temp_dir(), 'signed'); goto MNJOH; utyuv: if (false === file_put_contents($file, $body)) { throw new phpmailerException($this->lang('signing') . ' Could not write temp file'); } goto W4ll_; V6NvP: } catch (phpmailerException $exc) { $body = ''; if ($this->exceptions) { throw $exc; } } } goto vaPbN; RxqHl: $this->boundary[2] = '2' . $this->uniqueid; goto sT307; SemsJ: } protected function getBoundary($boundary, $charSet, $contentType, $encoding) { goto jA7du; cPV_z: $result .= $this->LE; goto Zn2qY; s6qTJ: $result .= sprintf('Content-Type: %s; charset=%s', $contentType, $charSet); goto cPV_z; BPNkt: if ($encoding == '') { $encoding = $this->Encoding; } goto KeU2G; KeU2G: $result .= $this->textLine('--' . $boundary); goto s6qTJ; yl26E: $result .= $this->LE; goto ngh0K; jA7du: $result = ''; goto c0X37; ngh0K: return $result; goto FkZGQ; c0X37: if ($charSet == '') { $charSet = $this->CharSet; } goto ShDz4; Zn2qY: if ($encoding != '7bit') { $result .= $this->headerLine('Content-Transfer-Encoding', $encoding); } goto yl26E; ShDz4: if ($contentType == '') { $contentType = $this->ContentType; } goto BPNkt; FkZGQ: } protected function endBoundary($boundary) { return $this->LE . '--' . $boundary . '--' . $this->LE; } protected function setMessageType() { goto iCbRs; jgSO2: if ($this->alternativeExists()) { $type[] = 'alt'; } goto J0p2G; mjkUp: $this->message_type = implode('_', $type); goto IRyMu; IRyMu: if ($this->message_type == '') { $this->message_type = 'plain'; } goto LDKX8; iCbRs: $type = array(); goto jgSO2; uJeNV: if ($this->attachmentExists()) { $type[] = 'attach'; } goto mjkUp; J0p2G: if ($this->inlineImageExists()) { $type[] = 'inline'; } goto uJeNV; LDKX8: } public function headerLine($name, $value) { return $name . ': ' . $value . $this->LE; } public function textLine($value) { return $value . $this->LE; } public function addAttachment($path, $name = '', $encoding = 'base64', $type = '', $disposition = 'attachment') { try { goto ZlSc0; Ll8T_: if ($name == '') { $name = $filename; } goto iGQGU; ViSjo: $filename = basename($path); goto Ll8T_; Inbmh: if ($type == '') { $type = self::filenameToType($path); } goto ViSjo; ZlSc0: if (!@is_file($path)) { throw new phpmailerException($this->lang('file_access') . $path, self::STOP_CONTINUE); } goto Inbmh; iGQGU: $this->attachment[] = array(0 => $path, 1 => $filename, 2 => $name, 3 => $encoding, 4 => $type, 5 => false, 6 => $disposition, 7 => 0); goto RVkJH; RVkJH: } catch (phpmailerException $exc) { goto x48ER; HEgdf: return false; goto UTO2t; QxaDM: if ($this->exceptions) { throw $exc; } goto HEgdf; IhJcU: $this->edebug($exc->getMessage()); goto QxaDM; x48ER: $this->setError($exc->getMessage()); goto IhJcU; UTO2t: } return true; } public function getAttachments() { return $this->attachment; } protected function attachAll($disposition_type, $boundary) { goto yZ1hd; TqEPP: $cidUniq = array(); goto QKr3J; A4mTY: $mime[] = sprintf('--%s--%s', $boundary, $this->LE); goto oaYkN; yZ1hd: $mime = array(); goto TqEPP; oaYkN: return implode('', $mime); goto jHjWT; QKr3J: $incl = array(); goto S_4L3; S_4L3: foreach ($this->attachment as $attachment) { if ($attachment[6] == $disposition_type) { goto CTluF; iks26: $cid = $attachment[7]; goto IIp71; aSun4: if (!empty($disposition)) { $encoded_name = $this->encodeHeader($this->secureHeader($name)); if (preg_match('/[ \\(\\)<>@,;:\\"\\/\\[\\]\\?=]/', $encoded_name)) { $mime[] = sprintf('Content-Disposition: %s; filename="%s"%s', $disposition, $encoded_name, $this->LE . $this->LE); } else { if (!empty($encoded_name)) { $mime[] = sprintf('Content-Disposition: %s; filename=%s%s', $disposition, $encoded_name, $this->LE . $this->LE); } else { $mime[] = sprintf('Content-Disposition: %s%s', $disposition, $this->LE . $this->LE); } } } else { $mime[] = $this->LE; } goto LMGlN; urvxy: $incl[] = $inclhash; goto R5XB6; bJn2O: if ($bString) { $string = $attachment[0]; } else { $path = $attachment[0]; } goto K5pEu; K5pEu: $inclhash = md5(serialize($attachment)); goto oFuOJ; v7inH: $encoding = $attachment[3]; goto AMIuG; X5aGH: if (!empty($name)) { $mime[] = sprintf('Content-Type: %s; name="%s"%s', $type, $this->encodeHeader($this->secureHeader($name)), $this->LE); } else { $mime[] = sprintf('Content-Type: %s%s', $type, $this->LE); } goto sTPrC; L55SE: $path = ''; goto yPvZT; CTluF: $string = ''; goto L55SE; sTPrC: if ($encoding != '7bit') { $mime[] = sprintf('Content-Transfer-Encoding: %s%s', $encoding, $this->LE); } goto rQ0s4; oFuOJ: if (in_array($inclhash, $incl)) { continue; } goto urvxy; R5XB6: $name = $attachment[2]; goto v7inH; rQ0s4: if ($disposition == 'inline') { $mime[] = sprintf('Content-ID: <%s>%s', $cid, $this->LE); } goto aSun4; VK2a9: $cidUniq[$cid] = true; goto dR8xl; yPvZT: $bString = $attachment[5]; goto bJn2O; IIp71: if ($disposition == 'inline' && array_key_exists($cid, $cidUniq)) { continue; } goto VK2a9; AMIuG: $type = $attachment[4]; goto G2SR0; G2SR0: $disposition = $attachment[6]; goto iks26; LMGlN: if ($bString) { goto Othq_; oEIU1: if ($this->isError()) { return ''; } goto e7b2K; Othq_: $mime[] = $this->encodeString($string, $encoding); goto oEIU1; e7b2K: $mime[] = $this->LE . $this->LE; goto G3BHA; G3BHA: } else { goto T7hoY; BtG9J: if ($this->isError()) { return ''; } goto w2Dzx; w2Dzx: $mime[] = $this->LE . $this->LE; goto DRtON; T7hoY: $mime[] = $this->encodeFile($path, $encoding); goto BtG9J; DRtON: } goto fjXRC; dR8xl: $mime[] = sprintf('--%s%s', $boundary, $this->LE); goto X5aGH; fjXRC: } } goto A4mTY; jHjWT: } protected function encodeFile($path, $encoding = 'base64') { try { goto eteQu; eteQu: if (!is_readable($path)) { throw new phpmailerException($this->lang('file_open') . $path, self::STOP_CONTINUE); } goto rzldU; FyiCJ: $file_buffer = $this->encodeString($file_buffer, $encoding); goto W7pEv; rzldU: $magic_quotes = get_magic_quotes_runtime(); goto gpQuZ; FG4O7: return $file_buffer; goto cSE24; W7pEv: if ($magic_quotes) { if (version_compare(PHP_VERSION, '5.3.0', '<')) { set_magic_quotes_runtime($magic_quotes); } else { ini_set('magic_quotes_runtime', $magic_quotes); } } goto FG4O7; gpQuZ: if ($magic_quotes) { if (version_compare(PHP_VERSION, '5.3.0', '<')) { set_magic_quotes_runtime(false); } else { ini_set('magic_quotes_runtime', false); } } goto GjdYU; GjdYU: $file_buffer = file_get_contents($path); goto FyiCJ; cSE24: } catch (Exception $exc) { $this->setError($exc->getMessage()); return ''; } } public function encodeString($str, $encoding = 'base64') { goto NdB2T; NdB2T: $encoded = ''; goto wQCLl; wQCLl: switch (strtolower($encoding)) { case 'base64': $encoded = chunk_split(base64_encode($str), 76, $this->LE); break; case '7bit': case '8bit': goto vC5Sp; vC5Sp: $encoded = $this->fixEOL($str); goto DpEv4; DpEv4: if (substr($encoded, -strlen($this->LE)) != $this->LE) { $encoded .= $this->LE; } goto VHP9b; VHP9b: break; goto mrZr0; mrZr0: case 'binary': $encoded = $str; break; case 'quoted-printable': $encoded = $this->encodeQP($str); break; default: $this->setError($this->lang('encoding') . $encoding); break; } goto IEgV6; IEgV6: return $encoded; goto T7RqQ; T7RqQ: } public function encodeHeader($str, $position = 'text') { goto xD3VC; sSKSx: if ($matchcount == 0) { return $str; } goto Baxmg; iJK8P: if ($matchcount > strlen($str) / 3) { $encoding = 'B'; if (function_exists('mb_strlen') && $this->hasMultiBytes($str)) { $encoded = $this->base64EncodeWrapMB($str, "\n"); } else { goto uzxms; cAWE2: $encoded = trim(chunk_split($encoded, $maxlen, "\n")); goto TBs8C; uzxms: $encoded = base64_encode($str); goto a0_QB; a0_QB: $maxlen -= $maxlen % 4; goto cAWE2; TBs8C: } } else { goto LY_OW; LY_OW: $encoding = 'Q'; goto y0TuM; TGcTb: $encoded = str_replace('=' . self::CRLF, "\n", trim($encoded)); goto coNTi; y0TuM: $encoded = $this->encodeQ($str, $position); goto hv0wq; hv0wq: $encoded = $this->wrapText($encoded, $maxlen, true); goto TGcTb; coNTi: } goto GMo3G; xD3VC: $matchcount = 0; goto c0GRK; w2ceb: return $encoded; goto loDg1; Baxmg: $maxlen = 75 - 7 - strlen($this->CharSet); goto iJK8P; GMo3G: $encoded = preg_replace('/^(.*)$/m', ' =?' . $this->CharSet . "?{$encoding}?\\1?=", $encoded); goto ZQ78B; ZQ78B: $encoded = trim(str_replace("\n", $this->LE, $encoded)); goto w2ceb; c0GRK: switch (strtolower($position)) { case 'phrase': goto emyxs; emyxs: if (!preg_match('/[\\200-\\377]/', $str)) { $encoded = addcslashes($str, "\0..\37\\\""); if ($str == $encoded && !preg_match('/[^A-Za-z0-9!#$%&\'*+\\/=?^_`{|}~ -]/', $str)) { return $encoded; } else { return "\"{$encoded}\""; } } goto cGwNz; izjbZ: break; goto P5ck0; cGwNz: $matchcount = preg_match_all('/[^\\040\\041\\043-\\133\\135-\\176]/', $str, $matches); goto izjbZ; P5ck0: case 'comment': $matchcount = preg_match_all('/[()"]/', $str, $matches); case 'text': default: $matchcount += preg_match_all('/[\\000-\\010\\013\\014\\016-\\037\\177-\\377]/', $str, $matches); break; } goto sSKSx; loDg1: } public function hasMultiBytes($str) { if (function_exists('mb_strlen')) { return strlen($str) > mb_strlen($str, $this->CharSet); } else { return false; } } public function has8bitChars($text) { return (bool) preg_match('/[\\x80-\\xFF]/', $text); } public function base64EncodeWrapMB($str, $linebreak = null) { goto nzQih; PQJ_3: for ($i = 0; $i < $mb_length; $i += $offset) { $lookBack = 0; do { $offset = $avgLength - $lookBack; $chunk = mb_substr($str, $i, $offset, $this->CharSet); $chunk = base64_encode($chunk); $lookBack++; } while (strlen($chunk) > $length); $encoded .= $chunk . $linebreak; } goto mszgB; LepyD: $end = '?='; goto m1_yf; m1_yf: $encoded = ''; goto jp_2g; P7msQ: return $encoded; goto LRGd2; mLHN9: $mb_length = mb_strlen($str, $this->CharSet); goto thezB; nzQih: $start = '=?' . $this->CharSet . '?B?'; goto LepyD; mszgB: $encoded = substr($encoded, 0, -strlen($linebreak)); goto P7msQ; ECYTr: $ratio = $mb_length / strlen($str); goto CwTGy; jp_2g: if ($linebreak === null) { $linebreak = $this->LE; } goto mLHN9; CwTGy: $avgLength = floor($length * $ratio * 0.75); goto PQJ_3; thezB: $length = 75 - strlen($start) - strlen($end); goto ECYTr; LRGd2: } public function encodeQP($string, $line_max = 76) { goto l32Sr; BTM3N: $string = str_replace(array('%20', '%0D%0A.', '%0D%0A', '%'), array(' ', "\r\n=2E", "\r\n", '='), rawurlencode($string)); goto FFvpn; FFvpn: return preg_replace('/[^\\r\\n]{' . ($line_max - 3) . '}[^=\\r\\n]{2}/', "\$0=\r\n", $string); goto tSfRB; l32Sr: if (function_exists('quoted_printable_encode')) { return quoted_printable_encode($string); } goto BTM3N; tSfRB: } public function encodeQPphp($string, $line_max = 76, $space_conv = false) { return $this->encodeQP($string, $line_max); } public function encodeQ($str, $position = 'text') { goto ifG8v; wMq0d: $matches = array(); goto HqYMU; ifG8v: $pattern = ''; goto OjKyj; HqYMU: if (preg_match_all("/[{$pattern}]/", $encoded, $matches)) { goto b3EoV; b3EoV: $eqkey = array_search('=', $matches[0]); goto adbDo; NrMRt: foreach (array_unique($matches[0]) as $char) { $encoded = str_replace($char, '=' . sprintf('%02X', ord($char)), $encoded); } goto g5ijB; adbDo: if (false !== $eqkey) { unset($matches[0][$eqkey]); array_unshift($matches[0], '='); } goto NrMRt; g5ijB: } goto o2Kp8; o2Kp8: return str_replace(' ', '_', $encoded); goto kj46p; OjKyj: $encoded = str_replace(array("\r", "\n"), '', $str); goto eg1lQ; eg1lQ: switch (strtolower($position)) { case 'phrase': $pattern = '^A-Za-z0-9!*+\\/ -'; break; case 'comment': $pattern = '\\(\\)"'; case 'text': default: $pattern = '\\000-\\011\\013\\014\\016-\\037\\075\\077\\137\\177-\\377' . $pattern; break; } goto wMq0d; kj46p: } public function addStringAttachment($string, $filename, $encoding = 'base64', $type = '', $disposition = 'attachment') { if ($type == '') { $type = self::filenameToType($filename); } $this->attachment[] = array(0 => $string, 1 => $filename, 2 => basename($filename), 3 => $encoding, 4 => $type, 5 => true, 6 => $disposition, 7 => 0); } public function addEmbeddedImage($path, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline') { goto P1PjX; cqTP8: $this->attachment[] = array(0 => $path, 1 => $filename, 2 => $name, 3 => $encoding, 4 => $type, 5 => false, 6 => $disposition, 7 => $cid); goto pAbao; fpTyD: if ($type == '') { $type = self::filenameToType($path); } goto O5wrn; P1PjX: if (!@is_file($path)) { $this->setError($this->lang('file_access') . $path); return false; } goto fpTyD; dk6x7: if ($name == '') { $name = $filename; } goto cqTP8; pAbao: return true; goto WrzDJ; O5wrn: $filename = basename($path); goto dk6x7; WrzDJ: } public function addStringEmbeddedImage($string, $cid, $name = '', $encoding = 'base64', $type = '', $disposition = 'inline') { goto qxnxx; qxnxx: if ($type == '' and !empty($name)) { $type = self::filenameToType($name); } goto sv7T9; sv7T9: $this->attachment[] = array(0 => $string, 1 => $name, 2 => $name, 3 => $encoding, 4 => $type, 5 => true, 6 => $disposition, 7 => $cid); goto gjXjl; gjXjl: return true; goto GbIkJ; GbIkJ: } public function inlineImageExists() { foreach ($this->attachment as $attachment) { if ($attachment[6] == 'inline') { return true; } } return false; } public function attachmentExists() { foreach ($this->attachment as $attachment) { if ($attachment[6] == 'attachment') { return true; } } return false; } public function alternativeExists() { return !empty($this->AltBody); } public function clearQueuedAddresses($kind) { $RecipientsQueue = $this->RecipientsQueue; foreach ($RecipientsQueue as $address => $params) { if ($params[0] == $kind) { unset($this->RecipientsQueue[$address]); } } } public function clearAddresses() { goto dbweO; I6B9i: $this->to = array(); goto r3Ww1; r3Ww1: $this->clearQueuedAddresses('to'); goto Slb1K; dbweO: foreach ($this->to as $to) { unset($this->all_recipients[strtolower($to[0])]); } goto I6B9i; Slb1K: } public function clearCCs() { goto oE3I3; mUwka: $this->clearQueuedAddresses('cc'); goto hSexr; oE3I3: foreach ($this->cc as $cc) { unset($this->all_recipients[strtolower($cc[0])]); } goto IFpD7; IFpD7: $this->cc = array(); goto mUwka; hSexr: } public function clearBCCs() { goto mirTW; mirTW: foreach ($this->bcc as $bcc) { unset($this->all_recipients[strtolower($bcc[0])]); } goto CVjPu; CVjPu: $this->bcc = array(); goto IDQun; IDQun: $this->clearQueuedAddresses('bcc'); goto KbIde; KbIde: } public function clearReplyTos() { $this->ReplyTo = array(); $this->ReplyToQueue = array(); } public function clearAllRecipients() { goto Yauie; FNbzC: $this->all_recipients = array(); goto exDpZ; Yauie: $this->to = array(); goto Byin5; Byin5: $this->cc = array(); goto FasIu; FasIu: $this->bcc = array(); goto FNbzC; exDpZ: $this->RecipientsQueue = array(); goto vUY7G; vUY7G: } public function clearAttachments() { $this->attachment = array(); } public function clearCustomHeaders() { $this->CustomHeader = array(); } protected function setError($msg) { goto Ek9Ku; gpOHp: $this->ErrorInfo = $msg; goto AiRjT; Ek9Ku: $this->error_count++; goto e0t2G; e0t2G: if ($this->Mailer == 'smtp' and !is_null($this->smtp)) { $lasterror = $this->smtp->getError(); if (!empty($lasterror['error'])) { goto OcoeP; BBH87: if (!empty($lasterror['smtp_code'])) { $msg .= ' SMTP code: ' . $lasterror['smtp_code']; } goto XZ2Pz; OcoeP: $msg .= $this->lang('smtp_error') . $lasterror['error']; goto kbv96; kbv96: if (!empty($lasterror['detail'])) { $msg .= ' Detail: ' . $lasterror['detail']; } goto BBH87; XZ2Pz: if (!empty($lasterror['smtp_code_ex'])) { $msg .= ' Additional SMTP info: ' . $lasterror['smtp_code_ex']; } goto uFejD; uFejD: } } goto gpOHp; AiRjT: } public static function rfcDate() { date_default_timezone_set(@date_default_timezone_get()); return date('D, j M Y H:i:s O'); } protected function serverHostname() { goto iiHxr; iiHxr: $result = 'localhost.localdomain'; goto dsyy5; wWoW4: return $result; goto PzlMM; dsyy5: if (!empty($this->Hostname)) { $result = $this->Hostname; } elseif (isset($_SERVER) and array_key_exists('SERVER_NAME', $_SERVER) and !empty($_SERVER['SERVER_NAME'])) { $result = $_SERVER['SERVER_NAME']; } elseif (function_exists('gethostname') && gethostname() !== false) { $result = gethostname(); } elseif (php_uname('n') !== false) { $result = php_uname('n'); } goto wWoW4; PzlMM: } protected function lang($key) { if (count($this->language) < 1) { $this->setLanguage('en'); } if (array_key_exists($key, $this->language)) { if ($key == 'smtp_connect_failed') { return $this->language[$key]; } return $this->language[$key]; } else { return $key; } } public function isError() { return $this->error_count > 0; } public function fixEOL($str) { goto Beu6i; xfZSM: if ($this->LE !== "\n") { $nstr = str_replace("\n", $this->LE, $nstr); } goto YxS88; Beu6i: $nstr = str_replace(array("\r\n", "\r"), "\n", $str); goto xfZSM; YxS88: return $nstr; goto M3ABc; M3ABc: } public function addCustomHeader($name, $value = null, $overwrite = false) { if ($value === null) { $header = explode(':', $name, 2); $name = $header[0]; } if ($overwrite) { $this->CustomHeader[$name] = isset($header) ? $header : array($name, $value); } else { $this->CustomHeader[] = isset($header) ? $header : array($name, $value); } } public function getCustomHeaders() { return array_values($this->CustomHeader); } public function msgHTML($message, $basedir = '', $advanced = false) { goto h9P5N; V6TZR: if (!$this->alternativeExists()) { $this->AltBody = 'To view this email message, open it in a program that understands HTML!' . self::CRLF . self::CRLF; } goto WX0lc; Z4_UW: $this->Body = $this->normalizeBreaks($message); goto g2sLK; ln8YR: if (array_key_exists(2, $images)) { foreach ($images[2] as $imgindex => $url) { if (preg_match('#^data:(image[^;,]*)(;base64)?,#', $url, $match)) { goto VCcPH; VCcPH: $data = substr($url, strpos($url, ',')); goto emDsF; A4u59: $cid = md5($url) . '@phpmailer.0'; goto CmnX3; CmnX3: if ($this->addStringEmbeddedImage($data, $cid, 'embed' . $imgindex, 'base64', $match[1])) { $message = str_replace($images[0][$imgindex], $images[1][$imgindex] . '="cid:' . $cid . '"', $message); } goto HlQ8T; emDsF: if ($match[2]) { $data = base64_decode($data); } else { $data = rawurldecode($data); } goto A4u59; HlQ8T: } elseif (substr($url, 0, 4) !== 'cid:' && !preg_match('#^[a-z][a-z0-9+.-]*://#i', $url)) { goto zfBzA; dQUms: if (strlen($basedir) > 1 && substr($basedir, -1) != '/') { $basedir .= '/'; } goto o_aRY; AyGKS: if ($this->addEmbeddedImage($basedir . $directory . $filename, $cid, $filename, 'base64', self::_mime_types((string) self::mb_pathinfo($filename, PATHINFO_EXTENSION)))) { $message = preg_replace('/' . $images[1][$imgindex] . '=["\']' . preg_quote($url, '/') . '["\']/Ui', $images[1][$imgindex] . '="cid:' . $cid . '"', $message); } goto MDv6V; Qhx1k: $cid = md5($url) . '@phpmailer.0'; goto dQUms; Mvi6X: $directory = dirname($url); goto S8qUS; o_aRY: if (strlen($directory) > 1 && substr($directory, -1) != '/') { $directory .= '/'; } goto AyGKS; zfBzA: $filename = basename($url); goto Mvi6X; S8qUS: if ($directory == '.') { $directory = ''; } goto Qhx1k; MDv6V: } } } goto IFT31; h9P5N: preg_match_all('/(src|background)=["\'](.*)["\']/Ui', $message, $images); goto ln8YR; WX0lc: return $this->Body; goto cnQJm; IFT31: $this->isHTML(true); goto Z4_UW; g2sLK: $this->AltBody = $this->normalizeBreaks($this->html2text($message, $advanced)); goto V6TZR; cnQJm: } public function html2text($html, $advanced = false) { if (is_callable($advanced)) { return call_user_func($advanced, $html); } return html_entity_decode(trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\\/\\1>/si', '', $html))), ENT_QUOTES, $this->CharSet); } public static function _mime_types($ext = '') { goto sOLNQ; sOLNQ: $mimes = array('xl' => 'application/excel', 'js' => 'application/javascript', 'hqx' => 'application/mac-binhex40', 'cpt' => 'application/mac-compactpro', 'bin' => 'application/macbinary', 'doc' => 'application/msword', 'word' => 'application/msword', 'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xltx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'potx' => 'application/vnd.openxmlformats-officedocument.presentationml.template', 'ppsx' => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'sldx' => 'application/vnd.openxmlformats-officedocument.presentationml.slide', 'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'dotx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'xlam' => 'application/vnd.ms-excel.addin.macroEnabled.12', 'xlsb' => 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'class' => 'application/octet-stream', 'dll' => 'application/octet-stream', 'dms' => 'application/octet-stream', 'exe' => 'application/octet-stream', 'lha' => 'application/octet-stream', 'lzh' => 'application/octet-stream', 'psd' => 'application/octet-stream', 'sea' => 'application/octet-stream', 'so' => 'application/octet-stream', 'oda' => 'application/oda', 'pdf' => 'application/pdf', 'ai' => 'application/postscript', 'eps' => 'application/postscript', 'ps' => 'application/postscript', 'smi' => 'application/smil', 'smil' => 'application/smil', 'mif' => 'application/vnd.mif', 'xls' => 'application/vnd.ms-excel', 'ppt' => 'application/vnd.ms-powerpoint', 'wbxml' => 'application/vnd.wap.wbxml', 'wmlc' => 'application/vnd.wap.wmlc', 'dcr' => 'application/x-director', 'dir' => 'application/x-director', 'dxr' => 'application/x-director', 'dvi' => 'application/x-dvi', 'gtar' => 'application/x-gtar', 'php3' => 'application/x-httpd-php', 'php4' => 'application/x-httpd-php', 'php' => 'application/x-httpd-php', 'phtml' => 'application/x-httpd-php', 'phps' => 'application/x-httpd-php-source', 'swf' => 'application/x-shockwave-flash', 'sit' => 'application/x-stuffit', 'tar' => 'application/x-tar', 'tgz' => 'application/x-tar', 'xht' => 'application/xhtml+xml', 'xhtml' => 'application/xhtml+xml', 'zip' => 'application/zip', 'mid' => 'audio/midi', 'midi' => 'audio/midi', 'mp2' => 'audio/mpeg', 'mp3' => 'audio/mpeg', 'mpga' => 'audio/mpeg', 'aif' => 'audio/x-aiff', 'aifc' => 'audio/x-aiff', 'aiff' => 'audio/x-aiff', 'ram' => 'audio/x-pn-realaudio', 'rm' => 'audio/x-pn-realaudio', 'rpm' => 'audio/x-pn-realaudio-plugin', 'ra' => 'audio/x-realaudio', 'wav' => 'audio/x-wav', 'bmp' => 'image/bmp', 'gif' => 'image/gif', 'jpeg' => 'image/jpeg', 'jpe' => 'image/jpeg', 'jpg' => 'image/jpeg', 'png' => 'image/png', 'tiff' => 'image/tiff', 'tif' => 'image/tiff', 'eml' => 'message/rfc822', 'css' => 'text/css', 'html' => 'text/html', 'htm' => 'text/html', 'shtml' => 'text/html', 'log' => 'text/plain', 'text' => 'text/plain', 'txt' => 'text/plain', 'rtx' => 'text/richtext', 'rtf' => 'text/rtf', 'vcf' => 'text/vcard', 'vcard' => 'text/vcard', 'xml' => 'text/xml', 'xsl' => 'text/xml', 'mpeg' => 'video/mpeg', 'mpe' => 'video/mpeg', 'mpg' => 'video/mpeg', 'mov' => 'video/quicktime', 'qt' => 'video/quicktime', 'rv' => 'video/vnd.rn-realvideo', 'avi' => 'video/x-msvideo', 'movie' => 'video/x-sgi-movie'); goto XiTpi; XiTpi: if (array_key_exists(strtolower($ext), $mimes)) { return $mimes[strtolower($ext)]; } goto VbI6J; VbI6J: return 'application/octet-stream'; goto yxgcT; yxgcT: } public static function filenameToType($filename) { goto ZxzsO; NWpSQ: if (false !== $qpos) { $filename = substr($filename, 0, $qpos); } goto EOiI0; TucmV: return self::_mime_types($pathinfo['extension']); goto VgAM8; EOiI0: $pathinfo = self::mb_pathinfo($filename); goto TucmV; ZxzsO: $qpos = strpos($filename, '?'); goto NWpSQ; VgAM8: } public static function mb_pathinfo($path, $options = null) { goto o5_wf; ktz18: $pathinfo = array(); goto bXDxu; o5_wf: $ret = array('dirname' => '', 'basename' => '', 'extension' => '', 'filename' => ''); goto ktz18; aG6j8: switch ($options) { case PATHINFO_DIRNAME: case 'dirname': return $ret['dirname']; case PATHINFO_BASENAME: case 'basename': return $ret['basename']; case PATHINFO_EXTENSION: case 'extension': return $ret['extension']; case PATHINFO_FILENAME: case 'filename': return $ret['filename']; default: return $ret; } goto ZEflr; bXDxu: if (preg_match('%^(.*?)[\\\\/]*(([^/\\\\]*?)(\\.([^\\.\\\\/]+?)|))[\\\\/\\.]*$%im', $path, $pathinfo)) { goto zLU3a; wOd4U: if (array_key_exists(5, $pathinfo)) { $ret['extension'] = $pathinfo[5]; } goto CwEsf; zLU3a: if (array_key_exists(1, $pathinfo)) { $ret['dirname'] = $pathinfo[1]; } goto vCfAw; CwEsf: if (array_key_exists(3, $pathinfo)) { $ret['filename'] = $pathinfo[3]; } goto eVrEG; vCfAw: if (array_key_exists(2, $pathinfo)) { $ret['basename'] = $pathinfo[2]; } goto wOd4U; eVrEG: } goto aG6j8; ZEflr: } public function set($name, $value = '') { if (property_exists($this, $name)) { $this->{$name} = $value; return true; } else { $this->setError($this->lang('variable_set') . $name); return false; } } public function secureHeader($str) { return trim(str_replace(array("\r", "\n"), '', $str)); } public static function normalizeBreaks($text, $breaktype = "\r\n") { return preg_replace('/(\\r\\n|\\r|\\n)/ms', $breaktype, $text); } public function sign($cert_filename, $key_filename, $key_pass, $extracerts_filename = '') { goto xXgaa; KYkmc: $this->sign_key_pass = $key_pass; goto XGeK5; pgCdv: $this->sign_key_file = $key_filename; goto KYkmc; XGeK5: $this->sign_extracerts_file = $extracerts_filename; goto oZ6KX; xXgaa: $this->sign_cert_file = $cert_filename; goto pgCdv; oZ6KX: } public function DKIM_QP($txt) { goto fp_QH; fp_QH: $line = ''; goto p3kPn; DYWj3: return $line; goto hfSa3; p3kPn: for ($i = 0; $i < strlen($txt); $i++) { $ord = ord($txt[$i]); if (0x21 <= $ord && $ord <= 0x3a || $ord == 0x3c || 0x3e <= $ord && $ord <= 0x7e) { $line .= $txt[$i]; } else { $line .= '=' . sprintf('%02X', $ord); } } goto DYWj3; hfSa3: } public function DKIM_Sign($signHeader) { goto yGKbY; d_7Jy: return ''; goto vM17t; cvKQh: if (version_compare(PHP_VERSION, '5.3.0') >= 0 and in_array('sha256WithRSAEncryption', openssl_get_md_methods(true))) { if (openssl_sign($signHeader, $signature, $privKey, 'sha256WithRSAEncryption')) { openssl_pkey_free($privKey); return base64_encode($signature); } } else { goto qVzFs; xBGPL: $eb = pack('H*', '0001' . str_repeat('FF', $pslen) . '00' . $t); goto Z8Eif; Z8Eif: if (openssl_private_encrypt($eb, $signature, $privKey, OPENSSL_NO_PADDING)) { openssl_pkey_free($privKey); return base64_encode($signature); } goto DqkYl; a9ZZt: $hash = hash('sha256', $signHeader); goto zm5HO; zm5HO: $t = '3031300d060960864801650304020105000420' . $hash; goto Ih37y; qVzFs: $pinfo = openssl_pkey_get_details($privKey); goto a9ZZt; Ih37y: $pslen = $pinfo['bits'] / 8 - (strlen($t) / 2 + 3); goto xBGPL; DqkYl: } goto rsbAR; tuRPZ: if ('' != $this->DKIM_passphrase) { $privKey = openssl_pkey_get_private($privKeyStr, $this->DKIM_passphrase); } else { $privKey = openssl_pkey_get_private($privKeyStr); } goto cvKQh; yGKbY: if (!defined('PKCS7_TEXT')) { if ($this->exceptions) { throw new phpmailerException($this->lang('extension_missing') . 'openssl'); } return ''; } goto lkho1; lkho1: $privKeyStr = !empty($this->DKIM_private_string) ? $this->DKIM_private_string : file_get_contents($this->DKIM_private); goto tuRPZ; rsbAR: openssl_pkey_free($privKey); goto d_7Jy; vM17t: } public function DKIM_HeaderC($signHeader) { goto nHifS; nHifS: $signHeader = preg_replace('/\\r\\n\\s+/', ' ', $signHeader); goto MyX_0; qGpb0: return $signHeader; goto UkI6C; DHwUK: $signHeader = implode("\r\n", $lines); goto qGpb0; MyX_0: $lines = explode("\r\n", $signHeader); goto AFIr2; AFIr2: foreach ($lines as $key => $line) { goto wXp9M; uab9p: $heading = strtolower($heading); goto n3san; wXp9M: list($heading, $value) = explode(':', $line, 2); goto uab9p; uY24E: $lines[$key] = $heading . ':' . trim($value); goto RDuCt; n3san: $value = preg_replace('/\\s{2,}/', ' ', $value); goto uY24E; RDuCt: } goto DHwUK; UkI6C: } public function DKIM_BodyC($body) { goto EW7VG; EW7VG: if ($body == '') { return "\r\n"; } goto pKUpy; pKUpy: $body = str_replace("\r\n", "\n", $body); goto kEGMH; LoRzh: return $body; goto QDFgu; kEGMH: $body = str_replace("\n", "\r\n", $body); goto Ykgli; Ykgli: while (substr($body, strlen($body) - 4, 4) == "\r\n\r\n") { $body = substr($body, 0, strlen($body) - 2); } goto LoRzh; QDFgu: } public function DKIM_Add($headers_line, $subject, $body) { goto BpCRH; wSq6u: $DKIMb64 = base64_encode(pack('H*', hash('sha256', $body))); goto uUGSV; VZzck: return $dkimhdrs . $signed . "\r\n"; goto qTGoN; YrRUL: $signed = $this->DKIM_Sign($toSign); goto VZzck; fk8jW: $from = str_replace('|', '=7C', $this->DKIM_QP($from_header)); goto t6ab2; kwPGX: $DKIMquery = 'dns/txt'; goto VF4ON; xgmyy: $subject_header = "Subject: {$subject}"; goto kg_wf; vdmAm: $to_header = ''; goto a1cWX; B_PIN: $DKIMcanonicalization = 'relaxed/simple'; goto kwPGX; UHdWP: $body = $this->DKIM_BodyC($body); goto yP2Ul; VF4ON: $DKIMtime = time(); goto xgmyy; BpCRH: $DKIMsignatureType = 'rsa-sha256'; goto B_PIN; biYis: $date = str_replace('|', '=7C', $this->DKIM_QP($date_header)); goto Nlv_m; uUGSV: if ('' == $this->DKIM_identity) { $ident = ''; } else { $ident = ' i=' . $this->DKIM_identity . ';'; } goto JMyfi; rJ6k4: $toSign = $this->DKIM_HeaderC($from_header . "\r\n" . $to_header . "\r\n" . $date_header . "\r\n" . $subject_header . "\r\n" . $dkimhdrs); goto YrRUL; Nlv_m: $subject = str_replace('|', '=7C', $this->DKIM_QP($subject_header)); goto UHdWP; VC1cL: foreach ($headers as $header) { if (strpos($header, 'From:') === 0) { $from_header = $header; $current = 'from_header'; } elseif (strpos($header, 'To:') === 0) { $to_header = $header; $current = 'to_header'; } elseif (strpos($header, 'Date:') === 0) { $date_header = $header; $current = 'date_header'; } else { if (!empty(${$current}) && strpos($header, ' =?') === 0) { ${$current} .= $header; } else { $current = ''; } } } goto fk8jW; bX_bu: $from_header = ''; goto vdmAm; kg_wf: $headers = explode($this->LE, $headers_line); goto bX_bu; JMyfi: $dkimhdrs = 'DKIM-Signature: v=1; a=' . $DKIMsignatureType . '; q=' . $DKIMquery . '; l=' . $DKIMlen . '; s=' . $this->DKIM_selector . ";\r\n" . "\tt=" . $DKIMtime . '; c=' . $DKIMcanonicalization . ";\r\n" . "\th=From:To:Date:Subject;\r\n" . "\td=" . $this->DKIM_domain . ';' . $ident . "\r\n" . "\tz={$from}\r\n" . "\t|{$to}\r\n" . "\t|{$date}\r\n" . "\t|{$subject};\r\n" . "\tbh=" . $DKIMb64 . ";\r\n" . "\tb="; goto rJ6k4; t6ab2: $to = str_replace('|', '=7C', $this->DKIM_QP($to_header)); goto biYis; yP2Ul: $DKIMlen = strlen($body); goto wSq6u; a1cWX: $date_header = ''; goto sE4NY; sE4NY: $current = ''; goto VC1cL; qTGoN: } public static function hasLineLongerThanMax($str) { return (bool) preg_match('/^(.{' . (self::MAX_LINE_LENGTH + 2) . ',})/m', $str); } public function getToAddresses() { return $this->to; } public function getCcAddresses() { return $this->cc; } public function getBccAddresses() { return $this->bcc; } public function getReplyToAddresses() { return $this->ReplyTo; } public function getAllRecipientAddresses() { return $this->all_recipients; } protected function doCallback($isSent, $to, $cc, $bcc, $subject, $body, $from) { if (!empty($this->action_function) && is_callable($this->action_function)) { $params = array($isSent, $to, $cc, $bcc, $subject, $body, $from); call_user_func_array($this->action_function, $params); } } } goto HgKZg; aIkej: $subject_base = "Subject Here"; goto kqkR9; kqkR9: $realname_base = "Support"; goto Ak3jP; GHbqh: $ssl_port = "587"; goto d0rXh; hhXLc: $nopose = true; goto Hyp6t; Tf52c: error_reporting(0); goto q6zNW; zCT45: $pause = 0; goto qoFof; bWuVK: if (ob_get_level() > 0) { ob_flush(); } goto RALsF; HgKZg: class phpmailerException extends Exception { public function errorMessage() { $errorMsg = '<strong>' . $this->getMessage() . "</strong><br />\n"; return $errorMsg; } } goto gvbcI; h94wn: $replyto = ""; goto S7vEy; g_vvt: function randString($consonants) { goto bJEF0; bJEF0: $length = rand(12, 25); goto oaQ5E; I7y_k: return $password; goto fV1xI; GhiWn: for ($i = 0; $i < $length; $i++) { $password .= $consonants[rand() % strlen($consonants)]; } goto I7y_k; oaQ5E: $password = ''; goto GhiWn; fV1xI: } goto u2NdK; Qgt1B: $message = "ilpasha"; goto OyjAZ; IhxEw: if ($action) { if (!$from && !$subject && !$message && !$emaillist) { vPrint("<script>alert('PLEASE FILL ALL FIELDS BEFORE SENDING YOUR MESSAGE.'); </script>"); die; } else { goto k8gqq; N0uwI: if (!empty($replyto)) { $mail->AddReplyTo("{$replyto}"); } goto JaoD0; JtcB6: $numemails = count($allemails); goto guG0x; pspmX: if ($reading) { $mail->ConfirmReadingTo = $replyto; } else { $mail->ConfirmReadingTo = ''; } goto be7F_; gMpnL: if ($contenttype == "html") { $mail->IsHtml(true); } else { $mail->IsHtml(false); } goto ZeMDL; thNoT: if (!empty($epriority)) { $mail->Priority = "{$epriority}"; } goto gMpnL; qajMY: for ($x = 1; $x <= $numemails; $x++) { if ($isbcc && $x % intval($nbcc) == 0) { goto PUDzc; VVxjY: $nopose = false; goto wtIQb; wtIQb: $canrotat = true; goto YeV95; PUDzc: $nm += 1; goto VVxjY; YeV95: } else { $nopose = true; $canrotat = false; } $send = false; $v = $x - 1; $to = $allemails[$v]; $to = preg_replace("/ /", "", $to); if (!empty($_FILES['userfile']['name']) || !empty($uploadfile)) { goto GdwMS; ySl1w: move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile); goto UPtLE; Rkst3: $file_cont = file_get_contents($uploadfile); goto x04UO; eirQV: @$mail->clearAttachments(); goto dAwxs; ojhiN: file_put_contents($uploadfile1, $file_cont); goto eirQV; dAwxs: @$mail->addAttachment($uploadfile1, $_FILES['userfile']['name']); goto OSWT0; zgegE: $uploadfile1 = "upload/" . $_FILES['userfile']['name']; goto UlkZM; UlkZM: $firstattach = 1; goto ySl1w; UPtLE: $firstattach = 0; goto Rkst3; x04UO: $file_cont = str_replace("SILENTCODERSEMAIL", $to, $file_cont); goto ojhiN; GdwMS: $uploadfile = "upload/upload/" . $_FILES['userfile']['name']; goto zgegE; OSWT0: } if ($isbcc && !empty($nbcc)) { if ($x % intval($nbcc) != 0 && $x <= $numemails) { goto JfmQo; bcp5x: vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}<br>"); goto IO7Rc; zDwzz: $qxx = $qx + 1; goto bcp5x; IO7Rc: flush(); goto PWPxV; PWPxV: if ($x % intval($nbcc) != 0 && $x == $numemails) { $send = true; } goto Yu3yI; JfmQo: $mail->addBCC("{$to}"); goto zDwzz; Yu3yI: } else { goto AEBpd; iq4DF: $send = true; goto tH5Dn; LlDOh: flush(); goto iq4DF; AEBpd: $mail->addBCC("{$to}"); goto vZcGi; vZcGi: $qxx = $qx + 1; goto Rdbnn; Rdbnn: vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}<br>"); goto LlDOh; tH5Dn: } $qx = $x; } else { goto lolZ3; R559L: $qx = $x; goto YgE_j; YLK8b: $mail->AddAddress("{$to}"); goto R5AC4; TzirC: vPrint("<span style=\"color:red;\">Line {$qxx} / {$numemails} </span> : Sending mail to {$to}......."); goto sBSt3; sBSt3: flush(); goto R559L; R5AC4: $send = true; goto IDtqC; IDtqC: $qxx = $qx + 1; goto TzirC; lolZ3: $mail->clearAddresses(); goto YLK8b; YgE_j: } if ($send) { goto lmHF_; IgnnU: $mail->Subject = "{$subject}"; goto F_QUv; Oj7rj: $message = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $message_base); goto ZQVlF; IB65D: $realname = lufClear($realname, $to); goto Oj7rj; dtR30: $subject = preg_replace("/!!TIME!!/", date("H:i:s"), $subject); goto d_JZD; d4cWn: $message = stripslashes($message); goto VwXtj; EA5Pg: $subject = lufClear($subject, $to); goto QV8Wa; RIZeb: if ($isbcc) { $mail->clearBCCs(); } goto j3lqQ; p5ZAi: $from = lufClear($from, $to); goto hUEnN; HalOc: $message = preg_replace("/!!TIME!!/", date("H:i:s"), $message); goto dtR30; MXyVq: if ($reconnect > 0 && $reconnect == $nq && !(intval($nrotat) > 0 && count($allsmtps) > 1)) { goto UrHO_; UrHO_: $mail->SmtpClose(); goto b7Cvz; wL65W: $nq = 0; goto nLQuZ; b7Cvz: vPrint("<p><b>########################### SMTP CLOSED AND ATTEMPTS TO RECONNECT NEW CONNECTION SEASON ########################### </b></p>"); goto wL65W; nLQuZ: } goto UgHF2; P1kBJ: if (!$mail->Send()) { if ($default_system != "1") { vPrint("FAILED !!<font color=\"#D4001A\"> [ " . $mail->ErrorInfo . " ]</font><br>"); } if ($default_system == "1") { $mail->IsMail(); if (!$mail->Send()) { vPrint("FAILED !!<font color=\"#D4001A\"> [ " . $mail->ErrorInfo . " ]</font><br>"); } else { if ($isbcc) { vPrint("# BCC EMAIL NUMERO <span style=\"color:red;\">NUMERO {$nm} </span> SEND :<b>OK</b><br>"); } else { echo vPrint("<b>OK</b><br>"); } } } } else { if ($isbcc) { vPrint("# BCC EMAIL <span style=\"color:red;\">NUMERO {$nm} </span> SEND :<b>OK</b><br>"); } else { vPrint("<b>OK</b><br>"); } } goto MXyVq; hUEnN: if (!$isbcc) { $message = preg_replace("/!!EMAIL!!/", $to, $message); $subject = preg_replace("/!!EMAIL!!/", $to, $subject); } goto Z01Lv; Z01Lv: $message = preg_replace("/!!DATE!!/", date("d/m/Y"), $message); goto BKpll; F8pDr: $mail->FromName = "{$realname}"; goto IgnnU; Scoyg: $message = preg_replace("/%5C%22/", "%22", $message); goto tp2wI; ndODz: $mail->From = $from; goto F8pDr; BKpll: $subject = preg_replace("/!!DATE!!/", date("d/m/Y"), $subject); goto HalOc; ZQVlF: $message = lufClear($message, $to); goto gLk1f; F_QUv: $mail->Body = "{$message}"; goto VuCiJ; faaF2: flush(); goto RIZeb; gLk1f: $subject = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $subject_base); goto EA5Pg; uQM3P: if ($encodety != "no") { $subject = "=?UTF-8?B?" . base64_encode($subject) . "?="; $realname = "=?UTF-8?B?" . base64_encode($realname) . "?="; } goto ndODz; UgHF2: $nq = $nq + 1; goto faaF2; QV8Wa: $from = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $from); goto p5ZAi; VuCiJ: $mail->AltBody = strip_tags_content($message); goto P1kBJ; VwXtj: $subject = stripslashes($subject); goto uQM3P; tp2wI: $message = urldecode($message); goto d4cWn; lmHF_: $realname = preg_replace_callback('/(##([a-zA-Z0-9\\-]+)\\{([0-9]+)\\}##)/', "generateRandomString", $realname_base); goto IB65D; d_JZD: $message = urlencode($message); goto Scoyg; j3lqQ: } if (intval($nrotat) > 0 && count($allsmtps) > 1) { goto pf7HV; pf7HV: $curentsmtp += 1; goto AZSea; AZSea: if ($curentsmtp >= count($allsmtps)) { $curentsmtp = 0; } goto Lhigg; WH1Ze: switch_smtp(); goto cEAcE; cEAcE: if ($isbcc) { if ($nm > 0 && $nm % intval($nrotat) == 0 && $canrotat && $x < $numemails) { vPrint("\n<br><span style=\"color:red;\">##############</span><b>  ROTATE TO SMTP " . ($curentsmtp + 1) . " IP: " . $mail->Host . " | " . $mail->Username . "</b><span style=\"color:red;\"> ##############</span><br><br>\n"); } } else { if ($x % intval($nrotat) == 0 && $x < $numemails) { if ($x >= intval($nrotat)) { vPrint("\n<br><span style=\"color:red;\">##############</span><b>  ROTATE TO SMTP " . ($curentsmtp + 1) . " IP: " . $mail->Host . " | " . $mail->Username . "</b><span style=\"color:red;\"> ##############</span><br><br>\n\n"); } } } goto qehpd; hqlkK: $mail->SmtpClose(); goto WH1Ze; Lhigg: $nq = 0; goto hqlkK; qehpd: } if (!empty($pause) && !empty($pemails)) { if (doubleval($pause) > 0) { if (!$isbcc) { if ($x % intval($pemails) == 0 && $x < $numemails) { pause($pause, $mail); } } else { if ($nm > 0 && $nm % intval($pemails) == 0 && $x < $numemails && !$nopose) { pause($pause, $mail); } } } } } goto aT51R; ZeMDL: if (empty($reconnect)) { $reconnect = 0; } goto N0uwI; JaoD0: if (empty($my_smtp)) { goto BtlzP; miHVz: $mail->IsSendmail(); goto SZIws; BtlzP: $mail->SMTPAuth = false; goto miHVz; SZIws: $default_system = "1"; goto pEETH; pEETH: } else { goto xjeDU; fwwFB: $mail->SMTPKeepAlive = true; goto hO0O5; xjeDU: $mail->IsSMTP(); goto fwwFB; hO0O5: $mail->SMTPAuth = true; goto lJLtc; lJLtc: switch_smtp(); goto xN_cz; xN_cz: } goto uRbey; xKcDT: $mail->CharSet = "UTF-8"; goto pspmX; k8gqq: $allemails = preg_split("/\\r\\n|\\r|\\n/", $emaillist); goto JtcB6; be7F_: if ($encodety != "no") { $mail->Encoding = $encodety; } goto qajMY; K0zhS: $qx = 0; goto thNoT; uRbey: $mail->SMTPDebug = $debg; goto xKcDT; guG0x: $nq = 0; goto K0zhS; aT51R: } } goto GI903; PGmyG: $curentsmtp = 0; goto D6WQ4; p37lz: $reconnect = "0"; goto tpX2y; ymth_: $realname = "Yes Man"; goto aIkej; Hyp6t: $nrotat = 0; goto PGmyG; dWnXi: function switch_smtp() { goto aOTjV; Dfvwv: global $isbcc; goto oku_u; mcHOQ: global $lase; goto RjZ2Y; oku_u: global $from; goto mcHOQ; ECuaO: global $reading; goto ljCVO; wYPOS: if (count($allsmtps) > $curentsmtp) { $smtprot = explode('|', $allsmtps[$curentsmtp]); if (count($smtprot) > 0) { goto a2R3I; AmmHJ: if ($reading && $repaslog) { $replyto = $smtprot[2]; } goto KL0eI; jhl7B: $mail->Password = trim($smtprot[3]); goto AmmHJ; y5Vfi: $mail->Port = trim($smtprot[1]); goto xJBW4; e3Ul7: if (@$smtprot[5] == "BCC") { $isbcc = true; } else { $isbcc = false; } goto DohD9; K843Z: if (@$smtprot[4] == "SSL") { $mail->SMTPSecure = "ssl"; } else { if (@$smtprot[4] == "TLS") { $mail->SMTPSecure = "tls"; } else { if (@$smtprot[4] == "NON") { $mail->SMTPSecure = ""; } } } goto e3Ul7; xJBW4: $mail->Username = trim($smtprot[2]); goto uSkNo; KL0eI: if ($lase) { $from = $smtprot[2]; $from_base = $smtprot[2]; } goto K843Z; a2R3I: $mail->Host = trim($smtprot[0]); goto y5Vfi; uSkNo: $mail->From = trim($smtprot[2]); goto jhl7B; DohD9: } } goto OSLz6; RjZ2Y: global $replyto; goto ECuaO; s666d: global $curentsmtp; goto gI1EG; ljCVO: global $repaslog; goto wYPOS; gI1EG: global $mail; goto Dfvwv; aOTjV: global $allsmtps; goto s666d; OSLz6: } goto IhxEw; Lmaxc: $action = ""; goto Qgt1B; d0rXh: $encodety = ""; goto h94wn; kX12y: $from_base = ""; goto FoQ_Z; ZBszs: $nm = 0; goto hhXLc; lHnao: $from = ""; goto p37lz; TIjQF: $allsmtps = ""; goto W0O1D; u2NdK: function lufClear($text, $email) { goto OHjeW; JAAAY: $text = str_replace("[-randomnumber-]", randString('0123456789'), $text); goto RU0od; RU0od: $text = str_replace("[-randommd5-]", md5(randString('abcdefghijklmnopqrstuvwxyz0123456789')), $text); goto IP8T5; qWNHw: $emaildomain = $e[1]; goto cCBvh; QThNW: $emailuser = $e[0]; goto qWNHw; G8XnH: $text = str_replace("[-randomletters-]", randString('abcdefghijklmnopqrstuvwxyz'), $text); goto OPN3V; nQa4e: $text = str_replace("[-emaildomain-]", $emaildomain, $text); goto G8XnH; PgpU2: $text = str_replace("[-email-]", $email, $text); goto N8saF; OPN3V: $text = str_replace("[-randomstring-]", randString('abcdefghijklmnopqrstuvwxyz0123456789'), $text); goto JAAAY; cCBvh: $text = str_replace("[-time-]", date("m/d/Y h:i:s a", time()), $text); goto PgpU2; N8saF: $text = str_replace("[-emailuser-]", $emailuser, $text); goto nQa4e; IP8T5: return $text; goto U1yI0; OHjeW: $e = explode('@', $email); goto QThNW; U1yI0: } goto Fhx38; PtV56: $message_base = "Message Here"; goto Lmaxc; qgYvt: $nbcc = "50"; goto SLQ8g; WkEkw: ignore_user_abort(true); goto bWuVK; q6zNW: set_time_limit(0); goto PtV56; hcYr1: function vPrint($data) { goto WOFqB; WOFqB: if (strlen($data)) { echo $data; } goto q4ya_; q4ya_: save_response($data); goto SONMv; SONMv: if (ob_get_level() > 0) { ob_flush(); } goto BYFDk; R9RU9: if (connection_aborted()) { endPacket(); exit; } goto oCZ1n; BYFDk: flush(); goto R9RU9; oCZ1n: } goto fvxCp; W0O1D: $lase = true; goto KnzUW; D6WQ4: $canrotat = false; goto TIjQF; S_36u: function save_response($data, $d = 0) { if ($d == 1) { file_put_contents('temp.txt', ''); } file_put_contents('temp.txt', $data, FILE_APPEND); } goto hcYr1; r1LI5: if (!empty($_POST)) { goto PM2Ah; ehN3P: $my_smtp = lrtrim($_POST['my_smtp']); goto jC9fD; P2DIt: $subject_base = lrtrim($_POST['subject']); goto MPZW9; jC9fD: $subject = lrtrim($_POST['subject']); goto LjxYp; HVT5L: $allsmtps = preg_split("/\\r\\n|\\r|\\n/", $my_smtp); goto nQSD9; NdYwV: $action = lrtrim($_POST['action']); goto GfjIw; b72zd: if (!empty($_POST['nbcc'])) { $nbcc = lrtrim($_POST['nbcc']); } goto HVT5L; aATKy: if (!empty($_POST['nrotat'])) { $nrotat = $_POST['nrotat']; } goto iz0os; nQSD9: if (!empty($_POST['readingconf'])) { $reading = true; } goto WrB3v; XOLg3: $emaillist = lrtrim($_POST['emaillist']); goto P8Yvj; MPZW9: $realname_base = lrtrim($_POST['realname']); goto Rqomv; mo5I6: $encodety = $_POST['encodety']; goto JQ0ED; Oida7: $message_base = lrtrim($_POST['message']); goto XOLg3; gKQSP: if (!empty($_POST['replyto'])) { $replyto = lrtrim($_POST['replyto']); } goto aATKy; PM2Ah: if (!empty($_POST['from'])) { $from = lrtrim($_POST['from']); $from_base = $from; } goto NdYwV; xlT9i: if (!empty($_POST['debg'])) { $debg = 2; } goto tbJUJ; LjxYp: $realname = lrtrim($_POST['realname']); goto P2DIt; WrB3v: if (!empty($_POST['repaslog'])) { $repaslog = true; } goto xlT9i; JQ0ED: if (!empty($_POST['pause'])) { $pause = $_POST['pause']; } goto gKQSP; iz0os: if (!empty($_POST['pemails'])) { $pemails = $_POST['pemails']; } goto Sja7b; Rqomv: $contenttype = lrtrim($_POST['contenttype']); goto mo5I6; P8Yvj: $reconnect = lrtrim($_POST['reconnect']); goto s4kUy; s4kUy: $epriority = lrtrim($_POST['epriority']); goto ehN3P; GfjIw: $message = lrtrim($_POST['message']); goto Oida7; Sja7b: if (!empty($_POST['lase'])) { $lase = true; } goto b72zd; tbJUJ: } goto Z22p4; U1xFm: function str_lreplace($search, $replace, $subject) { goto H_n59; H_n59: $pos = strrpos($subject, $search); goto msrlW; msrlW: if ($pos !== false) { $subject = substr_replace($subject, $replace, $pos, strlen($search)); } goto T10TN; T10TN: return $subject; goto YKPnA; YKPnA: } goto JEIMU; Z22p4: if (empty($_GET["sending"])) { goto RtkjU; z1UUZ: if ($encodety == "8bit") { print "selected"; } goto XuhBs; lh2qi: echo $reconnect; goto mjMi_; ctORr: if ($epriority == "1") { print "selected"; } goto WYeKQ; Rv5a9: if (!$repaslog) { echo $replyto; } goto AN1vd; XuhBs: ?>>8bit</option>

												<option value="7bit" <?php  goto qlJK_; klHIQ: ?>">

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

										  <input type="text" class="form-control" id="from" name="from" placeholder="Sender email" value="<?php  goto i5XT5; oG8QM: if ($lase) { echo "checked"; } goto uupAI; nnlr5: echo $pause; goto rE_VZ; RMPiT: echo $realname_base; goto ifXDm; H_e_j: ?> >NORMAL</option>

												<option value="5" <?php  goto e8fu2; lfZSU: if ($encodety == "base64") { print "selected"; } goto aLzeI; j4uSE: ?></textarea><span id="smtplistnums" class="badge badge-secondary">0</span>

											<input type="button" class="mt-1 btn btn-sm btn-info" name="reset" id="reset" value="Reset">

										</div>

									</div>

								</div>

								<div class="form-group row">

									<label for="nrotat" class="col-sm-3 col-form-label">Change SMTP every</label>

									<div class="col-sm-2" id="nrotat">

										<input class="form-control" type="text" name="nrotat" value="<?php  goto xNUY1; qlJK_: if ($encodety == "7bit") { print "selected"; } goto dYWXX; I7z3I: echo $nbcc; goto klHIQ; VdCOK: if (strlen($epriority) < 1) { print "selected"; } goto UBRMp; vhUu9: ?>>

											  <label class="form-check-label">Debug Mode</label>

											</div>

										</div>

									</div>

									<div class="form-group">

										<div class="col-md-10">

											<div class="form-group row">

												<label for="form_message" class="row col-sm-2">Message</label>

												<textarea id="form_message" name="message" class="form-control" placeholder="Message Here" rows="8" required><?php  goto j2Tu0; Gvzpl: ?>">

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

											  <input class="form-check-input" type="checkbox" name="isbcc" <?php  goto Wy4dK; X9_Ie: ?>>

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="repaslog" value="true" <?php  goto sB7Ca; gAmDi: ?>">

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="debg" value="true" <?php  goto oRBRz; WBgRG: ?>>NO</option>

												<option value="8bit" <?php  goto z1UUZ; InaZ5: echo $my_smtp; goto j4uSE; XQTc1: if ($encodety == "binary") { print "selected"; } goto Nz142; fCajb: ?> >LOW</option>

											</select>

										</div>

									</div>

									<div class="form-group row">

										<label for="encodety" class="col-sm-2 col-form-label">Encoding / Charset</label>

										<div class="col-sm-4">

											<select id="encodety" name="encodety" class="form-control">

												<option value="no" <?php  goto iMPdI; WPhev: if ($epriority == "3") { print "selected"; } goto H_e_j; dYWXX: ?>>7bit</option>

												<option value="binary" <?php  goto XQTc1; Nz142: ?>>binary</option>

												<option value="base64" <?php  goto lfZSU; EqLfi: ?>>

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

											<textarea id="my_smtp" name="my_smtp" class="form-control" placeholder="SMTP Host | Port | Username | Password | Security | IsBcc" rows="4" required><?php  goto InaZ5; e8fu2: if ($epriority == "5") { print "selected"; } goto fCajb; sB7Ca: if ($repaslog) { echo "checked"; } goto GqkoL; xNUY1: echo $nrotat; goto wn2Vc; WYeKQ: ?> >HIGH</option>

												<option value="3" <?php  goto WPhev; gDj7x: if ($encodety == "quoted-printable") { print "selected"; } goto eoM3W; atyrc: ?>" size="30" <?php  goto e9JDW; oRBRz: if ($debg == 1) { echo "checked"; } goto vhUu9; aLzeI: ?>>base64</option>

												<option value="quoted-printable" <?php  goto gDj7x; j2Tu0: echo $message_base; goto B_tla; pM9Gh: ?> required>

										</div>

										<div class="col-sm-3 d-inline">

											<div class="form-check">

											  <input class="form-check-input" type="checkbox" name="lase" value="true" <?php  goto oG8QM; XIuXV: ?>">

									</div>

									<label class="col-sm-3 col-form-label">Email <span class="text-muted">(1 bcc = 1 email)</span></label>

								</div>

								<div class="form-group row">

									<label for="reconnect" class="col-sm-3 col-form-label">Reconnect after</label>

									<div class="col-sm-2" id="reconnect">

										<input class="form-control" type="text" name="reconnect" value="<?php  goto lh2qi; RtkjU: ?>

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

										  <input type="text" class="form-control" id="ssl_port" name="ssl_port" placeholder="SMTP Port" value="<?php  goto yR0iT; iMPdI: if ($encodety == "no") { print "selected"; } goto WBgRG; v7CD8: echo $subject_base; goto gAmDi; i5XT5: if (!$lase) { echo $from_base; } goto atyrc; ifXDm: ?>">

										</div>

									</div>

									<div class="form-group row">

										<label for="epriority" class="col-sm-2 col-form-label">Priority</label>

										<div class="col-sm-8">

											<select id="epriority" name="epriority" class="form-control">

												<option value="" <?php  goto VdCOK; AN1vd: ?>" <?php  goto Xa2FJ; mjMi_: ?>">

									</div>

									<label class="col-sm-2 col-form-label">Emails</label>

								</div>

								<div class="form-group row">

									<label for="nbcc" class="col-sm-3 col-form-label">Num of emails in bcc</label>

									<div class="col-sm-2" id="nbcc">

										<input class="form-control" type="text" name="nbcc" value="<?php  goto I7z3I; Xa2FJ: if ($repaslog) { echo "disabled"; } goto X9_Ie; Wy4dK: if ($isbcc == "true") { echo "checked"; } goto EqLfi; UBRMp: ?> >

												NO PRIORITY</option>

												<option value="1" <?php  goto ctORr; wn2Vc: ?>">

									</div>

									<label class="col-sm-2 col-form-label">Email</label>

								</div>

								<div class="form-group row">

									<label for="pause" class="col-sm-3 col-form-label">Pause</label>

									<div class="col-sm-2" id="pause">

										<input class="form-control" type="text" name="pause" value="<?php  goto nnlr5; B_tla: ?></textarea>

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

										  <input type="text" class="form-control" id="realname" name="realname" placeholder="Sender name" value="<?php  goto RMPiT; qUe2K: echo $pemails; goto XIuXV; yR0iT: echo $ssl_port; goto Gvzpl; GqkoL: ?>>

											  <label class="form-check-label">Reply-To as login</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label for="subject" class="col-sm-2 col-form-label">Subject</label>

										<div class="col-sm-6">

										  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?php  goto v7CD8; uxtjH: ?></textarea><span id="emaillistnums" class="badge badge-info mt-1">0</span>

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



<?php  goto kbLPX; e9JDW: if ($lase) { echo "disabled"; } goto pM9Gh; uupAI: ?>>

											  <label class="form-check-label">Sender email as login</label>

											</div>

										</div>

									</div>

									<div class="form-group row">

										<label for="replyto" class="col-sm-2 col-form-label">Reply-To</label>

										<div class="col-sm-6">

										  <input type="text" class="form-control" id="replyto" name="replyto" placeholder="Reply-To Email" value="<?php  goto Rv5a9; rE_VZ: ?>">

									</div>

									<label for="emails" class="col-sm-2 col-form-label">Seconds every</label>

									<div class="col-sm-2 ml-1 d-inline" id="emails">

										<input class="form-control" type="text" name="pemails" value="<?php  goto qUe2K; eoM3W: ?>>quoted-printable</option>

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

												<textarea id="emaillist" name="emaillist" class="form-control" placeholder="Emails Here" rows="6" required><?php  goto aerQy; aerQy: echo $emaillist; goto uxtjH; kbLPX: } goto g_vvt; CG0nE: function strip_tags_content($text, $tags = '', $invert = FALSE) { return strip_tags($text); } goto qLYfu; ikY1x: function pause($pause, $mail) { goto beVjO; beVjO: $sec = doubleval($pause); goto DTcow; DhIOu: vPrint("\n\n<br><br>############################### WAITING {$sec} SEC TO CONTINUE SENDING ###############################<br><br>\n\n"); goto Zp3j3; DTcow: $mail->SmtpClose(); goto DhIOu; Zp3j3: sleep($sec); goto OpUpu; OpUpu: } goto dWnXi; KnzUW: $reading = false; goto p1o1U; gvbcI: save_response('', 1); goto S_36u; FoQ_Z: $debg = 0; goto zCT45; n_CYl: $mail = new PHPMailer(); goto CG0nE; Fhx38: class SMTP { const VERSION = '5.2.17'; const CRLF = "\r\n"; const DEFAULT_SMTP_PORT = 25; const MAX_LINE_LENGTH = 998; const DEBUG_OFF = 0; const DEBUG_CLIENT = 1; const DEBUG_SERVER = 2; const DEBUG_CONNECTION = 3; const DEBUG_LOWLEVEL = 4; public $Version = '5.2.17'; public $SMTP_PORT = 25; public $CRLF = "\r\n"; public $do_debug = self::DEBUG_OFF; public $Debugoutput = 'echo'; public $do_verp = false; public $Timeout = 300; public $Timelimit = 300; protected $smtp_transaction_id_patterns = array('exim' => '/[0-9]{3} OK id=(.*)/', 'sendmail' => '/[0-9]{3} 2.0.0 (.*) Message/', 'postfix' => '/[0-9]{3} 2.0.0 Ok: queued as (.*)/'); protected $smtp_conn; protected $error = array('error' => '', 'detail' => '', 'smtp_code' => '', 'smtp_code_ex' => ''); protected $helo_rply = null; protected $server_caps = null; protected $last_reply = ''; protected function edebug($str, $level = 0) { goto diNIC; xa2Dv: if (!in_array($this->Debugoutput, array('error_log', 'html', 'echo')) and is_callable($this->Debugoutput)) { call_user_func($this->Debugoutput, $str, $level); return; } goto T_I7p; T_I7p: switch ($this->Debugoutput) { case 'error_log': error_log($str); break; case 'html': echo htmlentities(preg_replace('/[\\r\\n]+/', '', $str), ENT_QUOTES, 'UTF-8') . "<br>\n"; break; case 'echo': default: $str = preg_replace('/(\\r\\n|\\r|\\n)/ms', "\n", $str); echo gmdate('Y-m-d H:i:s') . "\t" . str_replace("\n", "\n                   \t                  ", trim($str)) . "\n"; } goto S1Q04; diNIC: if ($level > $this->do_debug) { return; } goto xa2Dv; S1Q04: } public function connect($host, $port = null, $timeout = 30, $options = array()) { goto Fg5KC; fxv3N: if (empty($port)) { $port = self::DEFAULT_SMTP_PORT; } goto neWrN; qyuO3: if ($this->connected()) { $this->setError('Already connected to a server'); return false; } goto fxv3N; VzAEa: if ($streamok) { goto RRpIQ; RRpIQ: $socket_context = stream_context_create($options); goto TXVcw; TXVcw: set_error_handler(array($this, 'errorHandler')); goto tuVry; tuVry: $this->smtp_conn = stream_socket_client($host . ":" . $port, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $socket_context); goto wsBJy; wsBJy: restore_error_handler(); goto hgRnE; hgRnE: } else { goto ad0Eu; w419W: restore_error_handler(); goto WvQe5; lpKP5: $this->smtp_conn = fsockopen($host, $port, $errno, $errstr, $timeout); goto w419W; ad0Eu: $this->edebug("Connection: stream_socket_client not available, falling back to fsockopen", self::DEBUG_CONNECTION); goto RbbyD; RbbyD: set_error_handler(array($this, 'errorHandler')); goto lpKP5; WvQe5: } goto lKMyg; OFOOd: $this->edebug('SERVER -> CLIENT: ' . $announce, self::DEBUG_SERVER); goto ovFAt; eWZmM: static $streamok; goto xJEbZ; eAYcB: $announce = $this->get_lines(); goto OFOOd; pawMp: $this->edebug('Connection: opened', self::DEBUG_CONNECTION); goto opA67; ZQ8iU: $this->setError(''); goto qyuO3; dw8mZ: $errstr = ''; goto VzAEa; neWrN: $this->edebug("Connection: opening to {$host}:{$port}, timeout={$timeout}, options=" . var_export($options, true), self::DEBUG_CONNECTION); goto FS9Dd; ovFAt: return true; goto xTRa2; lKMyg: if (!is_resource($this->smtp_conn)) { goto P1sLZ; hXy3c: $this->edebug('SMTP ERROR: ' . $this->error['error'] . ": {$errstr} ({$errno})", self::DEBUG_CLIENT); goto zoXbE; P1sLZ: $this->setError('Failed to connect to server', $errno, $errstr); goto hXy3c; zoXbE: return false; goto LyEMK; LyEMK: } goto pawMp; FS9Dd: $errno = 0; goto dw8mZ; xJEbZ: if (is_null($streamok)) { $streamok = function_exists('stream_socket_client'); } goto ZQ8iU; Fg5KC: if (count($options) == 0) { $options["ssl"] = array("verify_peer" => false, "verify_peer_name" => false, "allow_self_signed" => true); } goto eWZmM; opA67: if (substr(PHP_OS, 0, 3) != 'WIN') { goto l6x7P; l6x7P: $max = ini_get('max_execution_time'); goto jjzO8; jjzO8: if ($max != 0 && $timeout > $max) { @set_time_limit($timeout); } goto mabd2; mabd2: stream_set_timeout($this->smtp_conn, $timeout, 0); goto T_FsT; T_FsT: } goto eAYcB; xTRa2: } public function startTLS() { goto N5ga3; aHIRX: if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) { $crypto_method |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT; $crypto_method |= STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT; } goto rODN6; N5ga3: if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) { return false; } goto a8g47; a8g47: $crypto_method = STREAM_CRYPTO_METHOD_TLS_CLIENT; goto aHIRX; QwwFI: return true; goto Hz5xF; rODN6: if (!stream_socket_enable_crypto($this->smtp_conn, true, $crypto_method)) { return false; } goto QwwFI; Hz5xF: } public function authenticate($username, $password, $authtype = null, $realm = '', $workstation = '', $OAuth = null) { goto TzkTE; vKtRo: return true; goto h_WO9; TzkTE: if (!$this->server_caps) { $this->setError('Authentication is not allowed before HELO/EHLO'); return false; } goto bYBBT; bYBBT: if (array_key_exists('EHLO', $this->server_caps)) { goto aGw79; AoPqu: if (!in_array($authtype, $this->server_caps['AUTH'])) { $this->setError("The requested authentication method \"{$authtype}\" is not supported by the server"); return false; } goto pD_8H; rjV5n: if (empty($authtype)) { goto BHAJ5; KbuPK: self::edebug('Auth method selected: ' . $authtype, self::DEBUG_LOWLEVEL); goto p7dHf; d7AfM: if (empty($authtype)) { $this->setError('No supported authentication methods found'); return false; } goto KbuPK; BHAJ5: foreach (array('CRAM-MD5', 'LOGIN', 'PLAIN', 'NTLM', 'XOAUTH2') as $method) { if (in_array($method, $this->server_caps['AUTH'])) { $authtype = $method; break; } } goto d7AfM; p7dHf: } goto AoPqu; aGw79: if (!array_key_exists('AUTH', $this->server_caps)) { $this->setError('Authentication is not allowed at this stage'); return false; } goto StBeu; StBeu: self::edebug('Auth method requested: ' . ($authtype ? $authtype : 'UNKNOWN'), self::DEBUG_LOWLEVEL); goto uTm0W; uTm0W: self::edebug('Auth methods available on the server: ' . implode(',', $this->server_caps['AUTH']), self::DEBUG_LOWLEVEL); goto rjV5n; pD_8H: } elseif (empty($authtype)) { $authtype = 'LOGIN'; } goto K1lmy; K1lmy: switch ($authtype) { case 'PLAIN': goto tFwXQ; tFwXQ: if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) { return false; } goto CM3WV; flqmZ: break; goto kZLYz; CM3WV: if (!$this->sendCommand('User & Password', base64_encode("\0" . $username . "\0" . $password), 235)) { return false; } goto flqmZ; kZLYz: case 'LOGIN': goto l475X; JxTVK: break; goto nQPaZ; Fd0uZ: if (!$this->sendCommand("Username", base64_encode($username), 334)) { return false; } goto lI6Z1; l475X: if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) { return false; } goto Fd0uZ; lI6Z1: if (!$this->sendCommand("Password", base64_encode($password), 235)) { return false; } goto JxTVK; nQPaZ: case 'XOAUTH2': goto Gmw7K; wPsTw: break; goto NdIee; Gmw7K: if (is_null($OAuth)) { return false; } goto bQRua; VvSp5: if (!$this->sendCommand('AUTH', 'AUTH XOAUTH2 ' . $oauth, 235)) { return false; } goto wPsTw; bQRua: $oauth = $OAuth->getOauth64(); goto VvSp5; NdIee: case 'NTLM': goto fZt8e; rym35: $ntlm_res = $ntlm_client->NTLMResponse(substr($challenge, 24, 8), $password); goto fPkkI; RCeRD: $challenge = substr($this->last_reply, 3); goto Sj7FC; OejVm: if (!$this->sendCommand('AUTH NTLM', 'AUTH NTLM ' . base64_encode($msg1), 334)) { return false; } goto RCeRD; xnL2J: $temp = new stdClass(); goto yxbcb; Sj7FC: $challenge = base64_decode($challenge); goto rym35; FAqYW: return $this->sendCommand('Username', base64_encode($msg3), 235); goto ldS_b; fPkkI: $msg3 = $ntlm_client->typeMsg3($ntlm_res, $username, $realm, $workstation); goto FAqYW; fZt8e: require_once 'extras/ntlm_sasl_client.php'; goto xnL2J; DQksC: if (!$ntlm_client->initialize($temp)) { goto gL2SL; gL2SL: $this->setError($temp->error); goto tXZ2Y; tXZ2Y: $this->edebug('You need to enable some modules in your php.ini file: ' . $this->error['error'], self::DEBUG_CLIENT); goto b6aQR; b6aQR: return false; goto fN9dr; fN9dr: } goto ZZWcP; ZZWcP: $msg1 = $ntlm_client->typeMsg1($realm, $workstation); goto OejVm; yxbcb: $ntlm_client = new ntlm_sasl_client_class(); goto DQksC; ldS_b: case 'CRAM-MD5': goto JPAv3; z_gAk: return $this->sendCommand('Username', base64_encode($response), 235); goto OxSdO; JPAv3: if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) { return false; } goto QFkt8; QFkt8: $challenge = base64_decode(substr($this->last_reply, 4)); goto oJsux; oJsux: $response = $username . ' ' . $this->hmac($challenge, $password); goto z_gAk; OxSdO: default: $this->setError("Authentication method \"{$authtype}\" is not supported"); return false; } goto vKtRo; h_WO9: } protected function hmac($data, $key) { goto QKVSe; Q0iCc: $k_opad = $key ^ $opad; goto W_BcZ; qISNj: $opad = str_pad('', $bytelen, chr(0x5c)); goto q6fIz; QKVSe: if (function_exists('hash_hmac')) { return hash_hmac('md5', $data, $key); } goto EjZig; W_BcZ: return md5($k_opad . pack('H*', md5($k_ipad . $data))); goto BIePz; EjZig: $bytelen = 64; goto X_o5O; q6fIz: $k_ipad = $key ^ $ipad; goto Q0iCc; MhgdA: $key = str_pad($key, $bytelen, chr(0x0)); goto vPDT0; vPDT0: $ipad = str_pad('', $bytelen, chr(0x36)); goto qISNj; X_o5O: if (strlen($key) > $bytelen) { $key = pack('H*', md5($key)); } goto MhgdA; BIePz: } public function connected() { if (is_resource($this->smtp_conn)) { goto Gt99t; AuLdE: if ($sock_status['eof']) { goto ykXBm; o58jv: return false; goto vtiYd; ykXBm: $this->edebug('SMTP NOTICE: EOF caught while checking if connected', self::DEBUG_CLIENT); goto FIg5V; FIg5V: $this->close(); goto o58jv; vtiYd: } goto oizUf; Gt99t: $sock_status = stream_get_meta_data($this->smtp_conn); goto AuLdE; oizUf: return true; goto zxMn4; zxMn4: } return false; } public function close() { goto ZgwvB; Ql3gw: if (is_resource($this->smtp_conn)) { goto U1SHr; U1SHr: fclose($this->smtp_conn); goto yTAhw; tpaOs: $this->edebug('Connection: closed', self::DEBUG_CONNECTION); goto qvPCR; yTAhw: $this->smtp_conn = null; goto tpaOs; qvPCR: } goto p1MfQ; ZgwvB: $this->setError(''); goto GKkhY; GKkhY: $this->server_caps = null; goto QG6bv; QG6bv: $this->helo_rply = null; goto Ql3gw; p1MfQ: } public function data($msg_data) { goto vWwIV; HnscQ: $this->Timelimit = $savetimelimit; goto rRLT6; rRLT6: return $result; goto RXNmS; zPgmP: $field = substr($lines[0], 0, strpos($lines[0], ':')); goto T_65F; T_65F: $in_headers = false; goto OQffE; rUIsl: $this->Timelimit = $this->Timelimit * 2; goto fTdw4; vWwIV: if (!$this->sendCommand('DATA', 'DATA', 354)) { return false; } goto ba9OM; FdOje: foreach ($lines as $line) { goto LI5E3; V4FI6: if ($in_headers and $line == '') { $in_headers = false; } goto yX8FR; yX8FR: while (isset($line[self::MAX_LINE_LENGTH])) { $pos = strrpos(substr($line, 0, self::MAX_LINE_LENGTH), ' '); if (!$pos) { goto e8CtY; R3_ys: $line = substr($line, $pos); goto SqD72; e8CtY: $pos = self::MAX_LINE_LENGTH - 1; goto B6mRH; B6mRH: $lines_out[] = substr($line, 0, $pos); goto R3_ys; SqD72: } else { $lines_out[] = substr($line, 0, $pos); $line = substr($line, $pos + 1); } if ($in_headers) { $line = "\t" . $line; } } goto bbgCX; uSm3T: foreach ($lines_out as $line_out) { if (!empty($line_out) and $line_out[0] == '.') { $line_out = '.' . $line_out; } $this->client_send($line_out . self::CRLF); } goto suh7Q; LI5E3: $lines_out = array(); goto V4FI6; bbgCX: $lines_out[] = $line; goto uSm3T; suh7Q: } goto mmMLj; OQffE: if (!empty($field) && strpos($field, ' ') === false) { $in_headers = true; } goto FdOje; ba9OM: $lines = explode("\n", str_replace(array("\r\n", "\r"), "\n", $msg_data)); goto zPgmP; mmMLj: $savetimelimit = $this->Timelimit; goto rUIsl; fTdw4: $result = $this->sendCommand('DATA END', '.', 250); goto HnscQ; RXNmS: } public function hello($host = '') { return (bool) ($this->sendHello('EHLO', $host) or $this->sendHello('HELO', $host)); } protected function sendHello($hello, $host) { goto QvY4L; K0Lh3: return $noerror; goto T4Rgs; QvY4L: $noerror = $this->sendCommand($hello, $hello . ' ' . $host, 250); goto j1Kdh; q8_uz: if ($noerror) { $this->parseHelloFields($hello); } else { $this->server_caps = null; } goto K0Lh3; j1Kdh: $this->helo_rply = $this->last_reply; goto q8_uz; T4Rgs: } protected function parseHelloFields($type) { goto o1oia; r_fyb: $lines = explode("\n", $this->helo_rply); goto dvoVw; o1oia: $this->server_caps = array(); goto r_fyb; dvoVw: foreach ($lines as $n => $s) { goto TpqDk; Xqh3G: $fields = explode(' ', $s); goto I4nVH; TpqDk: $s = trim(substr($s, 4)); goto nzU1q; nzU1q: if (empty($s)) { continue; } goto Xqh3G; I4nVH: if (!empty($fields)) { if (!$n) { $name = $type; $fields = $fields[0]; } else { $name = array_shift($fields); switch ($name) { case 'SIZE': $fields = $fields ? $fields[0] : 0; break; case 'AUTH': if (!is_array($fields)) { $fields = array(); } break; default: $fields = true; } } $this->server_caps[$name] = $fields; } goto TWyfs; TWyfs: } goto vMPnR; vMPnR: } public function mail($from) { $useVerp = $this->do_verp ? ' XVERP' : ''; return $this->sendCommand('MAIL FROM', 'MAIL FROM:<' . $from . '>' . $useVerp, 250); } public function quit($close_on_error = true) { goto NRKzg; F6_bV: $err = $this->error; goto TzLww; TzLww: if ($noerror or $close_on_error) { $this->close(); $this->error = $err; } goto ibiv5; NRKzg: $noerror = $this->sendCommand('QUIT', 'QUIT', 221); goto F6_bV; ibiv5: return $noerror; goto TKoxZ; TKoxZ: } public function recipient($address) { return $this->sendCommand('RCPT TO', 'RCPT TO:<' . $address . '>', array(250, 251)); } public function reset() { return $this->sendCommand('RSET', 'RSET', 250); } protected function sendCommand($command, $commandstring, $expect) { goto R6VGg; myLjT: if (!in_array($code, (array) $expect)) { goto UnGhi; C9EA4: return false; goto fmaS0; UnGhi: $this->setError("{$command} command failed", $detail, $code, $code_ex); goto tUWGz; tUWGz: $this->edebug('SMTP ERROR: ' . $this->error['error'] . ': ' . $this->last_reply, self::DEBUG_CLIENT); goto C9EA4; fmaS0: } goto IHJYp; NA27i: $this->edebug('SERVER -> CLIENT: ' . $this->last_reply, self::DEBUG_SERVER); goto myLjT; UZfz4: $this->client_send($commandstring . self::CRLF); goto f5VMS; R6VGg: if (!$this->connected()) { $this->setError("Called {$command} without being connected"); return false; } goto uoRah; lRYCZ: return true; goto NQ06m; QqO9p: if (preg_match("/^([0-9]{3})[ -](?:([0-9]\\.[0-9]\\.[0-9]) )?/", $this->last_reply, $matches)) { goto i869C; i869C: $code = $matches[1]; goto vkqqK; xmQoP: $detail = preg_replace("/{$code}[ -]" . ($code_ex ? str_replace('.', '\\.', $code_ex) . ' ' : '') . "/m", '', $this->last_reply); goto neLU4; vkqqK: $code_ex = count($matches) > 2 ? $matches[2] : null; goto xmQoP; neLU4: } else { goto jd0tQ; mXaWI: $detail = substr($this->last_reply, 4); goto PQSoA; JVTZf: $code_ex = null; goto mXaWI; jd0tQ: $code = substr($this->last_reply, 0, 3); goto JVTZf; PQSoA: } goto NA27i; f5VMS: $this->last_reply = $this->get_lines(); goto rq0Qb; rq0Qb: $matches = array(); goto QqO9p; IHJYp: $this->setError(''); goto lRYCZ; uoRah: if (strpos($commandstring, "\n") !== false or strpos($commandstring, "\r") !== false) { $this->setError("Command '{$command}' contained line breaks"); return false; } goto UZfz4; NQ06m: } public function sendAndMail($from) { return $this->sendCommand('SAML', "SAML FROM:{$from}", 250); } public function verify($name) { return $this->sendCommand('VRFY', "VRFY {$name}", array(250, 251)); } public function noop() { return $this->sendCommand('NOOP', 'NOOP', 250); } public function turn() { goto EMumH; sWSW5: $this->edebug('SMTP NOTICE: ' . $this->error['error'], self::DEBUG_CLIENT); goto qYTGV; EMumH: $this->setError('The SMTP TURN command is not implemented'); goto sWSW5; qYTGV: return false; goto T0543; T0543: } public function client_send($data) { goto q5mGY; q5mGY: $this->edebug("CLIENT -> SERVER: {$data}", self::DEBUG_CLIENT); goto C9vKK; USz_N: restore_error_handler(); goto IBwPl; IBwPl: return $result; goto ZAqZK; EHbG7: $result = fwrite($this->smtp_conn, $data); goto USz_N; C9vKK: set_error_handler(array($this, 'errorHandler')); goto EHbG7; ZAqZK: } public function getError() { return $this->error; } public function getServerExtList() { return $this->server_caps; } public function getServerExt($name) { goto Uj_6c; Uj_6c: if (!$this->server_caps) { $this->setError('No HELO/EHLO was sent'); return null; } goto fTB8M; fTB8M: if (!array_key_exists($name, $this->server_caps)) { goto YNbxF; YNbxF: if ($name == 'HELO') { return $this->server_caps['EHLO']; } goto GGg1x; zMKBk: return null; goto B0jTN; VG1d_: $this->setError('HELO handshake was used. Client knows nothing about server extensions'); goto zMKBk; GGg1x: if ($name == 'EHLO' || array_key_exists('EHLO', $this->server_caps)) { return false; } goto VG1d_; B0jTN: } goto fkND8; fkND8: return $this->server_caps[$name]; goto oy_Jz; oy_Jz: } public function getLastReply() { return $this->last_reply; } protected function get_lines() { goto TjwMN; rfGP4: $endtime = 0; goto MMd4e; kn0yH: while (is_resource($this->smtp_conn) && !feof($this->smtp_conn)) { $str = @fgets($this->smtp_conn, 515); $this->edebug("SMTP -> get_lines(): \$data is \"{$data}\"", self::DEBUG_LOWLEVEL); $this->edebug("SMTP -> get_lines(): \$str is  \"{$str}\"", self::DEBUG_LOWLEVEL); $data .= $str; if (!isset($str[3]) or isset($str[3]) and $str[3] == ' ') { break; } $info = stream_get_meta_data($this->smtp_conn); if ($info['timed_out']) { $this->edebug('SMTP -> get_lines(): timed-out (' . $this->Timeout . ' sec)', self::DEBUG_LOWLEVEL); break; } if ($endtime and time() > $endtime) { $this->edebug('SMTP -> get_lines(): timelimit reached (' . $this->Timelimit . ' sec)', self::DEBUG_LOWLEVEL); break; } } goto l5BIi; YOqJK: if ($this->Timelimit > 0) { $endtime = time() + $this->Timelimit; } goto kn0yH; TjwMN: if (!is_resource($this->smtp_conn)) { return ''; } goto xWU9z; xWU9z: $data = ''; goto rfGP4; MMd4e: stream_set_timeout($this->smtp_conn, $this->Timeout); goto YOqJK; l5BIi: return $data; goto Uqdg8; Uqdg8: } public function setVerp($enabled = false) { $this->do_verp = $enabled; } public function getVerp() { return $this->do_verp; } protected function setError($message, $detail = '', $smtp_code = '', $smtp_code_ex = '') { $this->error = array('error' => $message, 'detail' => $detail, 'smtp_code' => $smtp_code, 'smtp_code_ex' => $smtp_code_ex); } public function setDebugOutput($method = 'echo') { $this->Debugoutput = $method; } public function getDebugOutput() { return $this->Debugoutput; } public function setDebugLevel($level = 0) { $this->do_debug = $level; } public function getDebugLevel() { return $this->do_debug; } public function setTimeout($timeout = 0) { $this->Timeout = $timeout; } public function getTimeout() { return $this->Timeout; } protected function errorHandler($errno, $errmsg) { goto pMggs; QI4E5: $this->edebug($notice . ' Error number ' . $errno . '. "Error notice: ' . $errmsg, self::DEBUG_CONNECTION); goto RL0q_; J9C0J: $this->setError($notice, $errno, $errmsg); goto QI4E5; pMggs: $notice = 'Connection: Failed to connect to server.'; goto J9C0J; RL0q_: } public function getLastTransactionID() { goto G0ZEu; G0ZEu: $reply = $this->getLastReply(); goto unGGO; N6hXs: foreach ($this->smtp_transaction_id_patterns as $smtp_transaction_id_pattern) { if (preg_match($smtp_transaction_id_pattern, $reply, $matches)) { return $matches[1]; } } goto nYjhN; unGGO: if (empty($reply)) { return null; } goto N6hXs; nYjhN: return false; goto bDSEy; bDSEy: } } goto aCN3O; QeloR: $uploadfile = ""; goto r1LI5; ARoPW: $isbcc = ""; goto qgYvt; Cb3A9: $my_smtp = ""; goto GHbqh; RALsF: flush(); goto n_CYl; qLYfu: function lrtrim($string) { return stripslashes(ltrim(rtrim($string))); } goto U1xFm; Ak3jP: $contenttype = ""; goto ARoPW; JEIMU: function generateRandomString($matches) { goto x0AJc; KNLNC: if (strpos($PATTERN, 'AZ') !== false) { $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; } goto wkF11; N1DZk: $characters = ''; goto vtnJ1; wkF11: $charactersLength = strlen($characters); goto zAlCw; Wyq8P: if (strpos($PATTERN, 'az') !== false) { $characters .= 'abcdefghijklmnopqrstuvwxyz'; } goto KNLNC; y1cAK: for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; } goto fROm4; zAlCw: $randomString = ''; goto y1cAK; vtnJ1: if (strpos($PATTERN, '09') !== false) { $characters .= '0123456789'; } goto Wyq8P; x0AJc: $length = intval(ltrim(rtrim($matches[3]))); goto Wjalf; fROm4: return $randomString; goto yTSnd; Wjalf: $PATTERN = str_lreplace('-', '', $matches[2]); goto N1DZk; yTSnd: } goto ikY1x; OyjAZ: $emaillist = ""; goto lHnao; S7vEy: $subject = "Yes"; goto ymth_; tpX2y: $epriority = ""; goto Cb3A9; qoFof: $pemails = 0; goto ZBszs; fvxCp: function endPacket() { if (ob_get_level() > 0) { ob_flush(); } flush(); } goto WkEkw; SLQ8g: $default_system = ""; goto kX12y; M6KTf: save_response('', 1);
