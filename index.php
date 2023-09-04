<?php
    // $message = "Hello, World!";
    // echo "<p>$message</p>";

    // include 'styles/styles1.css';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="og:title" content="Online Job Application Form">
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
  <title>Online Job Application Form</title>

  <!-- CUSTOM STYLES -->
  <link rel="stylesheet" href="styles/styles1.css">
  <link rel="stylesheet" href="styles/styles2.css">

  <!-- BOOTSTRAP CDN -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- BOOTSTRAP JS AND JQUERY -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn02.jotfor.ms/static/prototype.forms.js?3.3.44983" type="text/javascript"></script>
  <script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.44983" type="text/javascript"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
  <script src="https://cdn01.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.44983" type="text/javascript"></script>
  <script defer src="https://cdn02.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.44983" type="text/javascript"></script>
  <script defer src="https://cdn03.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.44983"
    type="text/javascript"></script>
  <script src="https://cdn01.jotfor.ms/js/vendor/imageinfo.js?v=3.3.44983" type="text/javascript"></script>
  <script src="https://cdn02.jotfor.ms/file-uploader/fileuploader.js?v=3.3.44983"></script>
  <script src="https://cdn03.jotfor.ms/js/payments/validategateways.js?v=3.3.44983" type="text/javascript"></script>
  <script src="https://cdn01.jotfor.ms/s/umd/41d9d0df56e/for-appointment-field.js?v=3.3.44983"
    type="text/javascript"></script>
  
    <script src='scripts/index.js'></script>
</head>

<body>
  <form class="jotform-form" action="https://submit.jotform.com/submit/232460894408461" method="post"
    enctype="multipart/form-data" name="form_232460894408461" id="232460894408461" accept-charset="utf-8"
    autocomplete="on"><input type="hidden" name="formID" value="232460894408461" /><input type="hidden"
      id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
    <div role="main" class="form-all">
      <ul class="form-section page-section">
        <li id="cid_10" class="form-input-wide" data-type="control_head">
          <div class="form-header-group  header-large">
            <div class="header-text httac htvam">
              <h1 id="header_10" class="form-header" data-component="header">Job Application Form</h1>
              <div id="subHeader_10" class="form-subHeader">Please Fill Out the Form Below to Submit Your Job
                Application!</div>
            </div>
          </div>
        </li>
        <li class="form-line jf-required" data-type="control_fullname" id="id_11"><label
            class="form-label form-label-top form-label-auto" id="label_11" for="first_11" aria-hidden="false">
            Name<span class="form-required">*</span> </label>
          <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
            <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top"
                data-input-type="first"><input type="text" id="first_11" name="q11_name[first]"
                  class="form-textbox validate[required]" data-defaultvalue=""
                  autoComplete="section-input_11 given-name" size="10" value="" data-component="first"
                  aria-labelledby="label_11 sublabel_11_first" required="" /><label class="form-sub-label"
                  for="first_11" id="sublabel_11_first" style="min-height:13px" aria-hidden="false">First
                  Name</label></span><span class="form-sub-label-container" style="vertical-align:top"
                data-input-type="last"><input type="text" id="last_11" name="q11_name[last]"
                  class="form-textbox validate[required]" data-defaultvalue=""
                  autoComplete="section-input_11 family-name" size="15" value="" data-component="last"
                  aria-labelledby="label_11 sublabel_11_last" required="" /><label class="form-sub-label" for="last_11"
                  id="sublabel_11_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
          </div>
        </li>
        <li class="form-line form-line-column form-col-1 jf-required" data-type="control_email" id="id_12"><label
            class="form-label form-label-top" id="label_12" for="input_12" aria-hidden="false"> E-mail<span
              class="form-required">*</span> </label>
          <div id="cid_12" class="form-input-wide jf-required" data-layout="half"> <span
              class="form-sub-label-container" style="vertical-align:top"><input type="email" id="input_12"
                name="q12_email" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px"
                size="310" value="" placeholder="ex: myname@example.com" data-component="email"
                aria-labelledby="label_12 sublabel_input_12" required="" /><label class="form-sub-label" for="input_12"
                id="sublabel_input_12" style="min-height:13px" aria-hidden="false">example@example.com</label></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-2 jf-required" data-type="control_phone" id="id_13"><label
            class="form-label form-label-top" id="label_13" for="input_13_full"> Phone Number<span
              class="form-required">*</span> </label>
          <div id="cid_13" class="form-input-wide jf-required" data-layout="half"> <span
              class="form-sub-label-container" style="vertical-align:top"><input type="tel" id="input_13_full"
                name="q13_phoneNumber13[full]" data-type="mask-number"
                class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue=""
                autoComplete="section-input_13 tel-national" style="width:310px" data-masked="true" value=""
                placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_13" required="" /></span>
          </div>
        </li>
        <li class="form-line form-line-column form-col-3" data-type="control_textbox" id="id_5"><label
            class="form-label form-label-top form-label-auto" id="label_5" for="input_5" aria-hidden="false"> Applied
            Position </label>
          <div id="cid_5" class="form-input-wide" data-layout="half"> <input type="text" id="input_5"
              name="q5_Applying_for_Position_" data-type="input-textbox" class="form-textbox" data-defaultvalue=""
              style="width:310px" size="310" value="" placeholder=" " data-component="textbox"
              aria-labelledby="label_5" /> </div>
        </li>
        <li class="form-line form-line-column form-col-4" data-type="control_datetime" id="id_14"><label
            class="form-label form-label-top form-label-auto" id="label_14" for="lite_mode_14" aria-hidden="false">
            Earliest Possible Start Date </label>
          <div id="cid_14" class="form-input-wide" data-layout="half">
            <div data-wrapper-react="true">
              <div style="display:none"><span class="form-sub-label-container" style="vertical-align:top"><input
                    type="tel" class="form-textbox validate[disallowPast, limitDate]" id="month_14"
                    name="q14_earliestPossible[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value=""
                    autoComplete="off" aria-labelledby="label_14 sublabel_14_month" /><span class="date-separate"
                    aria-hidden="true"> -</span><label class="form-sub-label" for="month_14" id="sublabel_14_month"
                    style="min-height:13px" aria-hidden="false">Month</label></span><span
                  class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                    class="form-textbox validate[disallowPast, limitDate]" id="day_14" name="q14_earliestPossible[day]"
                    size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off"
                    aria-labelledby="label_14 sublabel_14_day" /><span class="date-separate" aria-hidden="true">
                    -</span><label class="form-sub-label" for="day_14" id="sublabel_14_day" style="min-height:13px"
                    aria-hidden="false">Day</label></span><span class="form-sub-label-container"
                  style="vertical-align:top"><input type="tel" class="form-textbox validate[disallowPast, limitDate]"
                    id="year_14" name="q14_earliestPossible[year]" size="4" data-maxlength="4" data-age="" maxLength="4"
                    value="" autoComplete="off" aria-labelledby="label_14 sublabel_14_year" /><label
                    class="form-sub-label" for="year_14" id="sublabel_14_year" style="min-height:13px"
                    aria-hidden="false">Year</label></span></div><span class="form-sub-label-container"
                style="vertical-align:top"><input type="text"
                  class="form-textbox validate[disallowPast, limitDate, validateLiteDate]" id="lite_mode_14" size="12"
                  data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-"
                  placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_14 sublabel_14_litemode" /><img
                  class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_14_pick"
                  src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true"
                  data-allow-time="No" data-version="v2" /><label class="form-sub-label" for="lite_mode_14"
                  id="sublabel_14_litemode" style="min-height:13px" aria-hidden="false">Date</label></span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_appointment" id="id_15"><label class="form-label form-label-top"
            id="label_15" for="input_15" aria-hidden="false"> Preferred Interview Date </label>
          <div id="cid_15" class="form-input-wide" data-layout="full">
            <div id="input_15" class="appointmentFieldWrapper jfQuestion-fields"><input class="appointmentFieldInput"
                name="q15_preferredInterview[implementation]" value="new" id="input_15implementation"
                aria-hidden="true" /><input class="appointmentFieldInput " name="q15_preferredInterview[date]"
                id="input_15_date" data-timeformat="AM/PM" aria-hidden="true" /><input class="appointmentFieldInput"
                name="q15_preferredInterview[duration]" value="60" id="input_15_duration" aria-hidden="true" /><input
                class="appointmentFieldInput" name="q15_preferredInterview[timezone]"
                value="Europe/Istanbul (GMT+03:00)" id="input_15_timezone" aria-hidden="true" />
              <div class="appointmentField"></div>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_7"><label
            class="form-label form-label-top form-label-auto" id="label_7" for="input_7" aria-hidden="false"> Cover
            Letter </label>
          <div id="cid_7" class="form-input-wide" data-layout="full"> <span class="form-sub-label-container"
              style="vertical-align:top"><textarea id="input_7" class="form-textarea" name="q7_Cover_Letter"
                style="width:648px;height:163px" data-component="textarea"
                aria-labelledby="label_7 sublabel_input_7"></textarea><label class="form-sub-label" for="input_7"
                id="sublabel_input_7" style="min-height:13px" aria-hidden="false">Please do not exceed 200
                words.</label></span> </div>
        </li>
        <li class="form-line jf-required" data-type="control_fileupload" id="id_8"><label
            class="form-label form-label-top form-label-auto" id="label_8" for="input_8" aria-hidden="false"> Upload
            Resume<span class="form-required">*</span> </label>
          <div id="cid_8" class="form-input-wide jf-required" data-layout="full">
            <div class="jfQuestion-fields" data-wrapper-react="true">
              <div class="jfField isFilled">
                <div class="jfUpload-wrapper">
                  <div class="jfUpload-container">
                    <div class="jfUpload-button-container">
                      <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none"
                        data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here
                        </div>
                        <div class="jfUpload-heading forMobile">Choose a file</div>
                      </div>
                    </div>
                  </div>
                  <div class="jfUpload-files-container">
                    <div class="validate[multipleUpload]"><input type="file" id="input_8" name="q8_Upload_Resume[]"
                        multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes"
                        data-file-accept="pdf, doc, docx, mp3, wma, mpg, flv, jpg, png, gif" data-file-maxsize="10240"
                        data-file-minsize="0" data-file-limit="0" data-component="fileupload" required=""
                        aria-label="Upload a File" /></div>
                  </div>
                </div>
                <div data-wrapper-react="true"></div>
              </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none"
                class="ofText">of</span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_fileupload" id="id_16"><label
            class="form-label form-label-top form-label-auto" id="label_16" for="input_16" aria-hidden="false"> Any
            Other Documents to Upload </label>
          <div id="cid_16" class="form-input-wide" data-layout="full">
            <div class="jfQuestion-fields" data-wrapper-react="true">
              <div class="jfField isFilled">
                <div class="jfUpload-wrapper">
                  <div class="jfUpload-container">
                    <div class="jfUpload-button-container">
                      <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none"
                        data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here
                        </div>
                        <div class="jfUpload-heading forMobile">Choose a file</div>
                      </div>
                    </div>
                  </div>
                  <div class="jfUpload-files-container">
                    <div class="validate[multipleUpload]"><input type="file" id="input_16" name="q16_anyOther[]"
                        multiple="" class="form-upload-multiple" data-imagevalidate="yes"
                        data-file-accept="pdf, doc, docx, mp3, wma, mpg, flv, jpg, png, gif" data-file-maxsize="10240"
                        data-file-minsize="0" data-file-limit="0" data-component="fileupload"
                        aria-label="Upload a File" /></div>
                  </div>
                </div><span class="form-sub-label-container" style="vertical-align:top"><label class="form-sub-label"
                    for="input_16" id="sublabel_input_16" style="min-height:13px" aria-hidden="false">You can share
                    certificates, diplomas etc.</label></span>
              </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none"
                class="ofText">of</span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_9">
          <div id="cid_9" class="form-input-wide" data-layout="full">
            <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
              <button id="input_9" type="submit"
                class="form-submit-button form-submit-button-simple_grey submit-button jf-form-buttons jsTest-submitField"
                data-component="button" data-content="">Apply</button>
            </div>
          </div>
        </li>
        <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
      </ul>
    </div>
  </form>
</body>

</html>
<script type="text/javascript">JotForm.showAlternateHIPAABadge = true;</script>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.44983"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.44983"></script>
<script type="text/javascript">JotForm.isNewSACL = true;</script>